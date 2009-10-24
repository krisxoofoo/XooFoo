<?php
// $Id$
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// Author: Kazumi Ono (AKA onokazu)                                          //
// URL: http://www.myweb.ne.jp/, http://www.xoops.org/, http://jp.xoops.org/ //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //

if ( !is_object($xoopsUser) || !is_object($xoopsModule) || !$xoopsUser->isAdmin($xoopsModule->mid()) ) {
    exit("Access Denied");
} else {
    $op = 'list';
    if (isset($_POST)) {
        foreach ( $_POST as $k => $v ) {
            ${$k} = $v;
        }
    }
    if (isset($_GET['op'])) {
        $op = trim($_GET['op']);
    }
    if (isset($_GET['image_id'])) {
        $image_id = intval($_GET['image_id']);
    }
    if (isset($_GET['imgcat_id'])) {
        $imgcat_id = intval($_GET['imgcat_id']);
    }

    $gperm_handler =& xoops_gethandler('groupperm');
    $groups = is_object($xoopsUser) ? $xoopsUser->getGroups() : XOOPS_GROUP_ANONYMOUS;

    // check READ right by category before continue
    if ( isset($imgcat_id) && $op == 'listimg' ) {
        $imgcat_read = $gperm_handler->checkRight( 'imgcat_read', $imgcat_id, $groups, $xoopsModule->mid() );
        $imgcat_write = $gperm_handler->checkRight( 'imgcat_write', $imgcat_id, $groups, $xoopsModule->mid() );
        if (!$imgcat_read && !$imgcat_write) {
            redirect_header('admin.php?fct=images',1);
        }
    }

    // check WRITE right by category before continue
    if ( isset($imgcat_id) && ($op == 'addfile' || $op == 'editcat' || $op == 'updatecat' || $op == 'delcatok' || $op == 'delcat') ) {
        $imgcat_write = $gperm_handler->checkRight( 'imgcat_write', $imgcat_id, $groups, $xoopsModule->mid() );
        if (!$imgcat_write) {
            redirect_header('admin.php?fct=images',1);
        }
    }

    // Only website administator can delete categories or images
    if ( !in_array(XOOPS_GROUP_ADMIN, $groups) && ($op == 'delfile' || $op == 'delfileok' || $op == 'delcatok' || $op == 'delcat') ) {
        redirect_header('admin.php?fct=images',1);
    }


    if ($op == 'list') {
        $imgcat_handler = xoops_gethandler('imagecategory');
        $imagecategorys = $imgcat_handler->getObjects();
        xoops_cp_header();
        echo '<h4>'._IMGMANAGER.'</h4><ul>';
        $catcount = count($imagecategorys);
        $image_handler =& xoops_gethandler('image');
        for ($i = 0; $i < $catcount; $i++) {
            $imgcat_read = $gperm_handler->checkRight( 'imgcat_read', $imagecategorys[$i]->getVar('imgcat_id'), $groups, $xoopsModule->mid() );
            $imgcat_write = $gperm_handler->checkRight( 'imgcat_write', $imagecategorys[$i]->getVar('imgcat_id'), $groups, $xoopsModule->mid() );
            if ( $imgcat_read || $imgcat_write ) {
                $count = $image_handler->getCount(new Criteria('imgcat_id', $imagecategorys[$i]->getVar('imgcat_id')));
                echo '<li>'.$imagecategorys[$i]->getVar('imgcat_name').' ('.sprintf(_NUMIMAGES, '<strong>'.$count.'</strong>').')';
                echo ' [<a href="admin.php?fct=images&amp;op=listimg&amp;imgcat_id='.$imagecategorys[$i]->getVar('imgcat_id').'">'._LIST.'</a>]';

                if (in_array(XOOPS_GROUP_ADMIN, $groups)) {
                    echo ' [<a href="admin.php?fct=images&amp;op=editcat&amp;imgcat_id='.$imagecategorys[$i]->getVar('imgcat_id').'">'._EDIT.'</a>]';
                   if ($imagecategorys[$i]->getVar('imgcat_type') == 'C') {
                        echo ' [<a href="admin.php?fct=images&amp;op=delcat&amp;imgcat_id='.$imagecategorys[$i]->getVar('imgcat_id').'">'._DELETE.'</a>]';
                    }
                }
                echo '</li>';
            }
        }
        echo '</ul>';
        include_once XOOPS_ROOT_PATH.'/class/xoopsformloader.php';
        if (!empty($catcount)) {
            $form = new XoopsThemeForm(_ADDIMAGE, 'image_form', 'admin.php', 'post', true);
            $form->setExtra('enctype="multipart/form-data"');
            $form->addElement(new XoopsFormText(_IMAGENAME, 'image_nicename', 50, 255), true);
            $select = new XoopsFormSelect(_IMAGECAT, 'imgcat_id');
            $select->addOptionArray($imgcat_handler->getList($groups, 'imgcat_write'));
            $form->addElement($select, true);
            $form->addElement(new XoopsFormFile(_IMAGEFILE, 'image_file', 5000000));
            $form->addElement(new XoopsFormText(_IMGWEIGHT, 'image_weight', 3, 4, 0));
            $form->addElement(new XoopsFormRadioYN(_IMGDISPLAY, 'image_display', 1, _YES, _NO));
            $form->addElement(new XoopsFormHidden('op', 'addfile'));
            $form->addElement(new XoopsFormHidden('fct', 'images'));
            $form->addElement(new XoopsFormButton('', 'img_button', _SUBMIT, 'submit'));
            $form->display();
        }


        if (in_array(XOOPS_GROUP_ADMIN, $groups)) {
            $form = new XoopsThemeForm(_MD_ADDIMGCAT, 'imagecat_form', 'admin.php', 'post', true);
            $form->addElement(new XoopsFormText(_MD_IMGCATNAME, 'imgcat_name', 50, 255), true);
            $form->addElement(new XoopsFormSelectGroup(_MD_IMGCATRGRP, 'readgroup', true, XOOPS_GROUP_ADMIN, 5, true));
            $form->addElement(new XoopsFormSelectGroup(_MD_IMGCATWGRP, 'writegroup', true, XOOPS_GROUP_ADMIN, 5, true));
            $form->addElement(new XoopsFormText(_IMGMAXSIZE, 'imgcat_maxsize', 10, 10, 50000));
            $form->addElement(new XoopsFormText(_IMGMAXWIDTH, 'imgcat_maxwidth', 3, 4, 120));
            $form->addElement(new XoopsFormText(_IMGMAXHEIGHT, 'imgcat_maxheight', 3, 4, 120));
            $form->addElement(new XoopsFormText(_MD_IMGCATWEIGHT, 'imgcat_weight', 3, 4, 0));
            $form->addElement(new XoopsFormRadioYN(_MD_IMGCATDISPLAY, 'imgcat_display', 1, _YES, _NO));
            $storetype = new XoopsFormRadio(_MD_IMGCATSTRTYPE.'<br /><span style="color:#ff0000;">'._MD_STRTYOPENG.'</span>', 'imgcat_storetype', 'file');
            $storetype->addOptionArray(array('file' => _MD_ASFILE, 'db' => _MD_INDB));
            $form->addElement($storetype);
            $form->addElement(new XoopsFormHidden('op', 'addcat'));
            $form->addElement(new XoopsFormHidden('fct', 'images'));
            $form->addElement(new XoopsFormButton('', 'imgcat_button', _SUBMIT, 'submit'));
            $form->display();
        }
        xoops_cp_footer();
        exit();
    }

    if ($op == 'listimg') {
        $imgcat_id = intval($imgcat_id);
        if ($imgcat_id <= 0) {
            redirect_header('admin.php?fct=images',1);
        }

        $imgcat_write = $gperm_handler->checkRight( 'imgcat_write', $imgcat_id, $groups, $xoopsModule->mid() );

        $imgcat_handler = xoops_gethandler('imagecategory');
        $imagecategory =& $imgcat_handler->get($imgcat_id);
        if (!is_object($imagecategory)) {
            redirect_header('admin.php?fct=images',1);
        }
        $image_handler = xoops_gethandler('image');
        xoops_cp_header();
        echo '<a href="admin.php?fct=images">'. _MD_IMGMAIN .'</a>&nbsp;<span style="font-weight:bold;">&raquo;&raquo;</span>&nbsp;'.$imagecategory->getVar('imgcat_name').'<br /><br />';
        $criteria = new CriteriaCompo(new Criteria('imgcat_id', $imgcat_id));
        $criteria->setSort('image_weight ASC, image_id');
        $criteria->setOrder('DESC');
        $imgcount = $image_handler->getCount($criteria);
        $start = isset($_GET['start']) ? intval($_GET['start']) : 0;
        $criteria->setStart($start);
        $criteria->setLimit(20);
        $images = $image_handler->getObjects($criteria, true, false);

        if ($imgcat_write) {
            echo '<form action="admin.php" method="post">';
        }
        foreach (array_keys($images) as $i) {
            $rowspan = ($imgcat_write) ? 6 : 2;

            echo '<table width="100%" class="outer">';
            echo '<tr><td width="30%" rowspan="' . $rowspan . '">';
            if ($imagecategory->getVar('imgcat_storetype') == 'db') {
                echo '<img src="'.XOOPS_URL.'/image.php?id='.$i.'" alt="" />';
            } else {
                echo '<img src="'.XOOPS_UPLOAD_URL.'/'.$images[$i]->getVar('image_name').'" alt="" />';
            }
            echo '</td>';

            echo '<td class="head">'._IMAGENAME,'</td><td class="even">';
            if ($imgcat_write) {
                echo '<input type="hidden" name="image_id[]" value="'.$i.'" /><input type="text" name="image_nicename[]" value="'.$images[$i]->getVar('image_nicename', 'E').'" size="20" maxlength="255" />';
            } else {
                echo '<strong>' . $images[$i]->getVar('image_nicename') . '</strong>';
            }
            echo '</td></tr>';

            echo '<tr><td class="head">'._IMAGEMIME.'</td><td class="odd">'.$images[$i]->getVar('image_mimetype').'</td></tr>';

            if ($imgcat_write) {
                echo '<tr><td class="head">'._IMAGECAT.'</td><td class="even">';
                echo '<select name="imgcat_id[]" size="1">';
                $list =& $imgcat_handler->getList($groups, 'imgcat_write', null, $imagecategory->getVar('imgcat_storetype'));
                foreach ($list as $value => $name) {
                    $sel = '';
                    if ($value == $images[$i]->getVar('imgcat_id')) {
                        $sel = ' selected="selected"';
                    }
                    echo '<option value="'.$value.'"'.$sel.'>'.$name.'</option>';
                }
                echo '</select></td></tr>';

                echo '<tr><td class="head">'._IMGWEIGHT.'</td><td class="odd"><input type="text" name="image_weight[]" value="'.$images[$i]->getVar('image_weight').'" size="3" maxlength="4" /></td></tr>';
                echo '<tr><td class="head">'._IMGDISPLAY.'</td><td class="even"><input type="checkbox" name="image_display[]" value="1"';
                if ($images[$i]->getVar('image_display') == 1) {
                    echo ' checked="checked"';
                }
                echo ' /></td></tr>';
            }
            if (in_array(XOOPS_GROUP_ADMIN, $groups)) {
                echo '<tr><td class="head">&nbsp;</td><td class="odd"><a href="admin.php?fct=images&amp;op=delfile&amp;image_id='.$i.'">'._DELETE.'</a></td></tr>';
            }
            echo '</table><br />';
        }
        if ($imgcount > 0) {
            if ($imgcount > 20) {
                include_once XOOPS_ROOT_PATH.'/class/pagenav.php';
                $nav = new XoopsPageNav($imgcount, 20, $start, 'start', 'fct=images&amp;op=listimg&amp;imgcat_id='.$imgcat_id);
                echo '<div text-align="right">'.$nav->renderNav().'</div>';
            }
            if ($imgcat_write) {
                echo '<div style="text-align:center;"><input type="hidden" name="op" value="save" /><input type="hidden" name="fct" value="images" />'.$GLOBALS['xoopsSecurity']->getTokenHTML().'<input type="submit" name="submit" value="'._SUBMIT.'" /></div></form>';
            }
        }
        xoops_cp_footer();
        exit();
    }

    if ($op == 'save') {
        if (!$GLOBALS['xoopsSecurity']->check()) {
            redirect_header('admin.php?fct=images', 3, implode('<br />', $GLOBALS['xoopsSecurity']->getErrors()));
        }
        $count = count($image_id);
        if ($count > 0) {
            $image_handler =& xoops_gethandler('image');
            $error = array();
            for ($i = 0; $i < $count; $i++) {
                $image =& $image_handler->get($image_id[$i]);
                if (!is_object($image)) {
                    $error[] = sprintf(_FAILGETIMG, $image_id[$i]);
                    continue;
                }
                $image_display[$i] = empty($image_display[$i]) ? 0 : 1;
                $image->setVar('image_display', $image_display[$i]);
                $image->setVar('image_weight', $image_weight[$i]);
                $image->setVar('image_nicename', $image_nicename[$i]);
                $image->setVar('imgcat_id', $imgcat_id[$i]);
                if (!$image_handler->insert($image)) {
                    $error[] = sprintf(_FAILSAVEIMG, $image_id[$i]);
                }
            }
            if (count($error) > 0) {
                xoops_cp_header();
                foreach ($error as $err) {
                    echo $err.'<br />';
                }
                xoops_cp_footer();
                exit();
            }
        }
        redirect_header('admin.php?fct=images',2,_MD_AM_DBUPDATED);
    }

    if ($op == 'addfile') {
        if (!$GLOBALS['xoopsSecurity']->check()) {
            redirect_header('admin.php?fct=images', 3, implode('<br />', $GLOBALS['xoopsSecurity']->getErrors()));
        }
        $imgcat_handler =& xoops_gethandler('imagecategory');
        $imagecategory =& $imgcat_handler->get(intval($imgcat_id));
        if (!is_object($imagecategory)) {
            redirect_header('admin.php?fct=images',1);
        }
        include_once XOOPS_ROOT_PATH.'/class/uploader.php';
        $uploader = new XoopsMediaUploader(XOOPS_UPLOAD_PATH, array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png', 'image/bmp'), $imagecategory->getVar('imgcat_maxsize'), $imagecategory->getVar('imgcat_maxwidth'), $imagecategory->getVar('imgcat_maxheight'));
        $uploader->setPrefix('img');
        $err = array();
        $ucount = count($_POST['xoops_upload_file']);
        for ($i = 0; $i < $ucount; $i++) {
            if ($uploader->fetchMedia($_POST['xoops_upload_file'][$i])) {
                if (!$uploader->upload()) {
                    $err[] = $uploader->getErrors();
                } else {
                    $image_handler =& xoops_gethandler('image');
                    $image =& $image_handler->create();
                    $image->setVar('image_name', $uploader->getSavedFileName());
                    $image->setVar('image_nicename', $image_nicename);
                    $image->setVar('image_mimetype', $uploader->getMediaType());
                    $image->setVar('image_created', time());
                    $image_display = empty($image_display) ? 0 : 1;
                    $image->setVar('image_display', $image_display);
                    $image->setVar('image_weight', $image_weight);
                    $image->setVar('imgcat_id', $imgcat_id);
                    if ($imagecategory->getVar('imgcat_storetype') == 'db') {
                        $fp = @fopen($uploader->getSavedDestination(), 'rb');
                        $fbinary = @fread($fp, filesize($uploader->getSavedDestination()));
                        @fclose($fp);
                        $image->setVar('image_body', $fbinary, true);
                        @unlink($uploader->getSavedDestination());
                    }
                    if (!$image_handler->insert($image)) {
                        $err[] = sprintf(_FAILSAVEIMG, $image->getVar('image_nicename'));
                    }
                }
            } else {
                $err[] = sprintf(_FAILFETCHIMG, $i);
                $err = array_merge($err, $uploader->getErrors(false));
            }
        }
        if (count($err) > 0) {
            xoops_cp_header();
            xoops_error($err);
            xoops_cp_footer();
            exit();
        }
        redirect_header('admin.php?fct=images',2,_MD_AM_DBUPDATED);
    }

    if ($op == 'addcat') {
        if (!$GLOBALS['xoopsSecurity']->check()) {
            redirect_header('admin.php?fct=images', 3, implode('<br />', $GLOBALS['xoopsSecurity']->getErrors()));
        }
        $imgcat_handler =& xoops_gethandler('imagecategory');
        $imagecategory =& $imgcat_handler->create();
        $imagecategory->setVar('imgcat_name', $imgcat_name);
        $imagecategory->setVar('imgcat_maxsize', $imgcat_maxsize);
        $imagecategory->setVar('imgcat_maxwidth', $imgcat_maxwidth);
        $imagecategory->setVar('imgcat_maxheight', $imgcat_maxheight);
        $imgcat_display = empty($imgcat_display) ? 0 : 1;
        $imagecategory->setVar('imgcat_display', $imgcat_display);
        $imagecategory->setVar('imgcat_weight', $imgcat_weight);
        $imagecategory->setVar('imgcat_storetype', $imgcat_storetype);
        $imagecategory->setVar('imgcat_type', 'C');
        if (!$imgcat_handler->insert($imagecategory)) {
            exit();
        }
        $newid = $imagecategory->getVar('imgcat_id');
        $imagecategoryperm_handler =& xoops_gethandler('groupperm');
        if (!isset($readgroup)) {
            $readgroup = array();
        }
        if (!in_array(XOOPS_GROUP_ADMIN, $readgroup)) {
            array_push($readgroup, XOOPS_GROUP_ADMIN);
        }
        foreach ($readgroup as $rgroup) {
            $imagecategoryperm =& $imagecategoryperm_handler->create();
            $imagecategoryperm->setVar('gperm_groupid', $rgroup);
            $imagecategoryperm->setVar('gperm_itemid', $newid);
            $imagecategoryperm->setVar('gperm_name', 'imgcat_read');
            $imagecategoryperm->setVar('gperm_modid', 1);
            $imagecategoryperm_handler->insert($imagecategoryperm);
            unset($imagecategoryperm);
        }
        if (!isset($writegroup)) {
            $writegroup = array();
        }
        if (!in_array(XOOPS_GROUP_ADMIN, $writegroup)) {
            array_push($writegroup, XOOPS_GROUP_ADMIN);
        }
        foreach ($writegroup as $wgroup) {
            $imagecategoryperm =& $imagecategoryperm_handler->create();
            $imagecategoryperm->setVar('gperm_groupid', $wgroup);
            $imagecategoryperm->setVar('gperm_itemid', $newid);
            $imagecategoryperm->setVar('gperm_name', 'imgcat_write');
            $imagecategoryperm->setVar('gperm_modid', 1);
            $imagecategoryperm_handler->insert($imagecategoryperm);
            unset($imagecategoryperm);
        }
        redirect_header('admin.php?fct=images',2,_MD_AM_DBUPDATED);
    }

    if ($op == 'editcat') {
        if ($imgcat_id <= 0) {
            redirect_header('admin.php?fct=images',1);
        }
        $imgcat_handler = xoops_gethandler('imagecategory');
        $imagecategory =& $imgcat_handler->get($imgcat_id);
        if (!is_object($imagecategory)) {
            redirect_header('admin.php?fct=images',1);
        }
        include_once XOOPS_ROOT_PATH.'/class/xoopsformloader.php';
        $imagecategoryperm_handler =& xoops_gethandler('groupperm');
        $form = new XoopsThemeForm(_MD_EDITIMGCAT, 'imagecat_form', 'admin.php', 'post', true);
        $form->addElement(new XoopsFormText(_MD_IMGCATNAME, 'imgcat_name', 50, 255, $imagecategory->getVar('imgcat_name')), true);
        $form->addElement(new XoopsFormSelectGroup(_MD_IMGCATRGRP, 'readgroup', true, $imagecategoryperm_handler->getGroupIds('imgcat_read', $imgcat_id), 5, true));
        $form->addElement(new XoopsFormSelectGroup(_MD_IMGCATWGRP, 'writegroup', true, $imagecategoryperm_handler->getGroupIds('imgcat_write', $imgcat_id), 5, true));
        $form->addElement(new XoopsFormText(_IMGMAXSIZE, 'imgcat_maxsize', 10, 10, $imagecategory->getVar('imgcat_maxsize')));
        $form->addElement(new XoopsFormText(_IMGMAXWIDTH, 'imgcat_maxwidth', 3, 4, $imagecategory->getVar('imgcat_maxwidth')));
        $form->addElement(new XoopsFormText(_IMGMAXHEIGHT, 'imgcat_maxheight', 3, 4, $imagecategory->getVar('imgcat_maxheight')));
        $form->addElement(new XoopsFormText(_MD_IMGCATWEIGHT, 'imgcat_weight', 3, 4, $imagecategory->getVar('imgcat_weight')));
        $form->addElement(new XoopsFormRadioYN(_MD_IMGCATDISPLAY, 'imgcat_display', $imagecategory->getVar('imgcat_display'), _YES, _NO));
        $storetype = array('db' => _MD_INDB, 'file' => _MD_ASFILE);
        $form->addElement(new XoopsFormLabel(_MD_IMGCATSTRTYPE, $storetype[$imagecategory->getVar('imgcat_storetype')]));
        $form->addElement(new XoopsFormHidden('imgcat_id', $imgcat_id));
        $form->addElement(new XoopsFormHidden('op', 'updatecat'));
        $form->addElement(new XoopsFormHidden('fct', 'images'));
        $form->addElement(new XoopsFormButton('', 'imgcat_button', _SUBMIT, 'submit'));
        xoops_cp_header();
        echo '<a href="admin.php?fct=images">'. _MD_IMGMAIN .'</a>&nbsp;<span style="font-weight:bold;">&raquo;&raquo;</span>&nbsp;'.$imagecategory->getVar('imgcat_name').'<br /><br />';
        $form->display();
        xoops_cp_footer();
        exit();
    }

    if ($op == 'updatecat') {
        if (!$GLOBALS['xoopsSecurity']->check() || $imgcat_id <= 0) {
            redirect_header('admin.php?fct=images',1, implode('<br />', $GLOBALS['xoopsSecurity']->getErrors()));
        }
        $imgcat_handler = xoops_gethandler('imagecategory');
        $imagecategory =& $imgcat_handler->get($imgcat_id);
        if (!is_object($imagecategory)) {
            redirect_header('admin.php?fct=images',1);
        }
        $imagecategory->setVar('imgcat_name', $imgcat_name);
        $imgcat_display = empty($imgcat_display) ? 0 : 1;
        $imagecategory->setVar('imgcat_display', $imgcat_display);
        $imagecategory->setVar('imgcat_maxsize', $imgcat_maxsize);
        $imagecategory->setVar('imgcat_maxwidth', $imgcat_maxwidth);
        $imagecategory->setVar('imgcat_maxheight', $imgcat_maxheight);
        $imagecategory->setVar('imgcat_weight', $imgcat_weight);
        if (!$imgcat_handler->insert($imagecategory)) {
            exit();
        }
        $imagecategoryperm_handler =& xoops_gethandler('groupperm');
        $criteria = new CriteriaCompo(new Criteria('gperm_itemid', $imgcat_id));
        $criteria->add(new Criteria('gperm_modid', 1));
        $criteria2 = new CriteriaCompo(new Criteria('gperm_name', 'imgcat_write'));
        $criteria2->add(new Criteria('gperm_name', 'imgcat_read'), 'OR');
        $criteria->add($criteria2);
        $imagecategoryperm_handler->deleteAll($criteria);
        if (!isset($readgroup)) {
            $readgroup = array();
        }
        if (!in_array(XOOPS_GROUP_ADMIN, $readgroup)) {
            array_push($readgroup, XOOPS_GROUP_ADMIN);
        }
        foreach ($readgroup as $rgroup) {
            $imagecategoryperm =& $imagecategoryperm_handler->create();
            $imagecategoryperm->setVar('gperm_groupid', $rgroup);
            $imagecategoryperm->setVar('gperm_itemid', $imgcat_id);
            $imagecategoryperm->setVar('gperm_name', 'imgcat_read');
            $imagecategoryperm->setVar('gperm_modid', 1);
            $imagecategoryperm_handler->insert($imagecategoryperm);
            unset($imagecategoryperm);
        }
        if (!isset($writegroup)) {
            $writegroup = array();
        }
        if (!in_array(XOOPS_GROUP_ADMIN, $writegroup)) {
            array_push($writegroup, XOOPS_GROUP_ADMIN);
        }
        foreach ($writegroup as $wgroup) {
            $imagecategoryperm =& $imagecategoryperm_handler->create();
            $imagecategoryperm->setVar('gperm_groupid', $wgroup);
            $imagecategoryperm->setVar('gperm_itemid', $imgcat_id);
            $imagecategoryperm->setVar('gperm_name', 'imgcat_write');
            $imagecategoryperm->setVar('gperm_modid', 1);
            $imagecategoryperm_handler->insert($imagecategoryperm);
            unset($imagecategoryperm);
        }
        redirect_header('admin.php?fct=images',2,_MD_AM_DBUPDATED);
    }

    if ($op == 'delfile') {
        xoops_cp_header();
        xoops_confirm(array('op' => 'delfileok', 'image_id' => $image_id, 'fct' => 'images'), 'admin.php', _MD_RUDELIMG);
        xoops_cp_footer();
        exit();
    }

    if ($op == 'delfileok') {
        if (!$GLOBALS['xoopsSecurity']->check()) {
            redirect_header('admin.php?fct=images', 3, implode('<br />', $GLOBALS['xoopsSecurity']->getErrors()));
        }
        $image_id = intval($image_id);
        if ($image_id <= 0) {
            redirect_header('admin.php?fct=images',1);
        }
        $image_handler =& xoops_gethandler('image');
        $image =& $image_handler->get($image_id);
        if (!is_object($image)) {
            redirect_header('admin.php?fct=images',1);
        }
        if (!$image_handler->delete($image)) {
            xoops_cp_header();
            xoops_error(sprintf(_MD_FAILDEL, $image->getVar('image_id')));
            xoops_cp_footer();
            exit();
        }
        @unlink(XOOPS_UPLOAD_PATH.'/'.$image->getVar('image_name'));
        redirect_header('admin.php?fct=images',2,_MD_AM_DBUPDATED);
    }

    if ($op == 'delcat') {
        xoops_cp_header();
        xoops_confirm(array('op' => 'delcatok', 'imgcat_id' => $imgcat_id, 'fct' => 'images'), 'admin.php', _MD_RUDELIMGCAT);
        xoops_cp_footer();
        exit();
    }

    if ($op == 'delcatok') {
        if (!$GLOBALS['xoopsSecurity']->check()) {
            redirect_header('admin.php?fct=images', 3, implode('<br />', $GLOBALS['xoopsSecurity']->getErrors()));
        }
        $imgcat_id = intval($imgcat_id);
        if ($imgcat_id <= 0) {
            redirect_header('admin.php?fct=images',1);
        }
        $imgcat_handler = xoops_gethandler('imagecategory');
        $imagecategory =& $imgcat_handler->get($imgcat_id);
        if (!is_object($imagecategory)) {
            redirect_header('admin.php?fct=images',1);
        }
        if ($imagecategory->getVar('imgcat_type') != 'C') {
            xoops_cp_header();
            xoops_error(_MD_SCATDELNG);
            xoops_cp_footer();
            exit();
        }
        $image_handler =& xoops_gethandler('image');
        $images = $image_handler->getObjects(new Criteria('imgcat_id', $imgcat_id), true, false);
        $errors = array();
        foreach (array_keys($images) as $i) {
            if (!$image_handler->delete($images[$i])) {
                $errors[] = sprintf(_MD_FAILDEL, $i);
            } else {
                if (file_exists(XOOPS_UPLOAD_PATH.'/'.$images[$i]->getVar('image_name')) && !unlink(XOOPS_UPLOAD_PATH.'/'.$images[$i]->getVar('image_name'))) {
                    $errors[] = sprintf(_MD_FAILUNLINK, $i);
                }
            }
        }
        if (!$imgcat_handler->delete($imagecategory)) {
            $errors[] = sprintf(_MD_FAILDELCAT, $imagecategory->getVar('imgcat_name'));
        }
        if (count($errors) > 0) {
            xoops_cp_header();
            xoops_error($errors);
            xoops_cp_footer();
            exit();
        }
        redirect_header('admin.php?fct=images',2,_MD_AM_DBUPDATED);
    }
}
?>