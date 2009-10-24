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

/*
if ( !is_object($xoopsUser) || !is_object($xoopsModule) || !$xoopsUser->isAdmin($xoopsModule->mid()) ) {
    exit("Access Denied");
}
*/

function xoops_module_list()
{
    xoops_cp_header();
    $myts =& MyTextSanitizer::getInstance();
    echo "
    <h4>" . _MD_AM_MODADMIN . "</h4>
    <form action='admin.php' method='post' name='moduleadmin' id='moduleadmin'>
    <table class='outer' width='100%' cellpadding='4' cellspacing='1'>
    <tr align='center'><th>" . _MD_AM_MODULE . "</th>
    <th>" . _MD_AM_VERSION . "</th>
    <th>" . _MD_AM_LASTUP . "</th>
    <th>" . _MD_AM_ACTIVE . "</th>
    <th>" . _MD_AM_ORDER . "<br /><small>"._MD_AM_ORDER0."</small></th>
    <th>" . _MD_AM_ACTION . "</th></tr>
    ";
    $module_handler =& xoops_gethandler('module');
    $installed_mods = $module_handler->getObjects();
    $listed_mods = array();
    $count = 0;
    foreach ($installed_mods as $module) {
        if ($count % 2 == 0) {
            $class = 'even';
        } else {
            $class = 'odd';
        }
        $count++;
        echo "<tr class='$class' align='center' valign='middle'>\n";
        echo "<td valign='bottom'>";
        if ($module->getVar('hasadmin') == 1 && $module->getVar('isactive') == 1) {
            echo '<a href="' . XOOPS_URL . '/modules/' . $module->getVar('dirname') . '/' . $module->getInfo('adminindex') . '">
                  <img src="' . XOOPS_URL . '/modules/' . $module->getVar('dirname') . '/' . $module->getInfo('image') . '" alt="' . $module->getVar('name', 'E') . '" border="0" /></a>
                  <br /><input type="text" name="newname[' . $module->getVar('mid') . ']" value="' . $module->getVar('name', 'E') . '" maxlength="150" size="20" />';
        } else {
            echo '<img src="' . XOOPS_URL . '/modules/' . $module->getVar('dirname') . '/' . $module->getInfo('image') . '" alt="' . $module->getVar('name', 'E') . '" border="0" /><br />
                  <input type="text" name="newname[' . $module->getVar('mid') . ']" value="' . $module->getVar('name', 'E') . '" maxlength="150" size="20" />';
        }
        echo '<input type="hidden" name="oldname[' . $module->getVar('mid') . ']" value="' . $module->getVar('name') . '" /></td>';
        echo "<td align='center'>" . round($module->getVar('version') / 100, 2) . "</td><td align='center'>" . formatTimestamp($module->getVar('last_update'),'m') . "<br />";
        if ($module->getVar('dirname') != 'system' && $module->getVar('isactive') == 1) {
            echo '</td><td><input type="checkbox" name="newstatus[' . $module->getVar('mid') . ']" value="1" checked="checked" /><input type="hidden" name="oldstatus[' . $module->getVar('mid') . ']" value="1" />';
            $extra = '<a href="' . XOOPS_URL . '/modules/system/admin.php?fct=modulesadmin&amp;op=update&amp;module=' . $module->getVar('dirname') . '"><img src="' . XOOPS_URL . '/modules/system/images/update.gif" alt="' . _MD_AM_UPDATE . '" /></a>';
        } elseif ($module->getVar('dirname') != 'system') {
            echo '</td><td><input type="checkbox" name="newstatus[' . $module->getVar('mid') . ']" value="1" /><input type="hidden" name="oldstatus[' . $module->getVar('mid') . ']" value="0" />';
            $extra = '<a href="' . XOOPS_URL . '/modules/system/admin.php?fct=modulesadmin&amp;op=update&amp;module=' . $module->getVar('dirname') . '"><img src="' . XOOPS_URL . '/modules/system/images/update.gif" alt="' . _MD_AM_UPDATE . '" /></a>&nbsp;<a href="' . XOOPS_URL . '/modules/system/admin.php?fct=modulesadmin&amp;op=uninstall&amp;module=' . $module->getVar('dirname') . '"><img src="' . XOOPS_URL . '/modules/system/images/uninstall.gif" alt="' . _MD_AM_UNINSTALL . '" /></a>';
        } else {
            echo '</td><td><input type="checkbox" name="newstatus[' . $module->getVar('mid') . ']" value="1" checked="checked" /><input type="hidden" name="oldstatus[' . $module->getVar('mid') . ']" value="1" />';
            $extra = '<a href="' . XOOPS_URL . '/modules/system/admin.php?fct=modulesadmin&amp;op=update&amp;module=' . $module->getVar('dirname') . '"><img src="' . XOOPS_URL . '/modules/system/images/update.gif" alt="' . _MD_AM_UPDATE . '" /></a>';
        }
        echo "</td><td>";
        if ($module->getVar('hasmain') == 1) {
            echo '<input type="hidden" name="oldweight[' . $module->getVar('mid') . ']" value="' . $module->getVar('weight') . '" /><input type="text" name="weight[' . $module->getVar('mid') . ']" size="3" maxlength="5" value="' . $module->getVar('weight') . '" />';
        } else {
            echo '<input type="hidden" name="oldweight[' . $module->getVar('mid') . ']" value="0" /><input type="hidden" name="weight[' . $module->getVar('mid') . ']" value="0" />';
        }
        echo "
        </td>
        <td>" . $extra . "&nbsp;<a href='javascript:openWithSelfMain(\"" . XOOPS_URL . "/modules/system/admin.php?fct=version&amp;mid=" . $module->getVar('mid') . "\",\"Info\",300,230);'>";
        echo '<img src="' . XOOPS_URL . '/modules/system/images/info.gif" alt="' . _INFO . '" /></a><input type="hidden" name="module[]" value="' . $module->getVar('mid') . '" /></td>
        </tr>
        ';
        $listed_mods[] = $module->getVar('dirname');
    }
    echo "<tr class='foot'><td colspan='6' align='center'><input type='hidden' name='fct' value='modulesadmin' />
    <input type='hidden' name='op' value='confirm' />
    <input type='submit' name='submit' value='" . _MD_AM_SUBMIT . "' />
    </td></tr></table>
    </form>
    <br />
    <table width='100%' border='0' class='outer' cellpadding='4' cellspacing='1'>
    <tr align='center'><th>" . _MD_AM_MODULE . "</th><th>" . _MD_AM_VERSION . "</th><th>" . _MD_AM_ACTION . "</th></tr>
    ";
    require_once XOOPS_ROOT_PATH . "/class/xoopslists.php";
    $dirlist = XoopsLists::getModulesList();
    $count = 0;
    foreach ($dirlist as $file) {
        clearstatcache();
        $file = trim($file);
        if (!in_array($file, $listed_mods)) {
            $module =& $module_handler->create();
            if (!$module->loadInfo($file, false)) {
                continue;
            }
            if ($count % 2 == 0) {
                $class = 'even';
            } else {
                $class = 'odd';
            }
            echo '<tr class="' . $class . '" align="center" valign="middle">
            <td align="center" valign="bottom"><img src="' . XOOPS_URL . '/modules/' . $module->getInfo('dirname') . '/' . $module->getInfo('image') . '" alt="' . $myts->htmlspecialchars( $module->getInfo('name'), ENT_QUOTES, _CHARSET, false ) . '" border="0" /><br /><br />' . $myts->htmlspecialchars( $module->getInfo('name'), ENT_QUOTES, _CHARSET, false ) . '</td>
            <td align="center">' . round($module->getInfo('version'), 2) . '</td>
            <td>
            <a href="' . XOOPS_URL . '/modules/system/admin.php?fct=modulesadmin&amp;op=install&amp;module=' . $module->getInfo('dirname') . '"><img src="' . XOOPS_URL . '/modules/system/images/install.gif" alt="' . _MD_AM_INSTALL . '" /></a>';
            echo "&nbsp;<a href='javascript:openWithSelfMain(\"" . XOOPS_URL . "/modules/system/admin.php?fct=version&amp;mid=" . $module->getInfo('dirname') . "\",\"Info\",300,230);'>";
            echo '<img src="' . XOOPS_URL . '/modules/system/images/info.gif" alt="' . _INFO . '" /></a></td></tr>
            ';
            unset($module);
            $count++;
        }
    }
    echo "</table>";
    xoops_cp_footer();
}

function xoops_module_install($dirname)
{
    global $xoopsUser, $xoopsConfig;
    $dirname = trim($dirname);
    $db =& $GLOBALS["xoopsDB"];
    $reservedTables = array('avatar', 'avatar_users_link', 'block_module_link', 'xoopscomments', 'config', 'configcategory', 'configoption', 'image', 'imagebody', 'imagecategory', 'imgset', 'imgset_tplset_link', 'imgsetimg', 'groups','groups_users_link','group_permission', 'online', 'bannerclient', 'banner', 'bannerfinish', 'priv_msgs', 'ranks', 'session', 'smiles', 'users', 'newblocks', 'modules', 'tplfile', 'tplset', 'tplsource', 'xoopsnotifications', 'banner', 'bannerclient', 'bannerfinish');
    $module_handler =& xoops_gethandler('module');
    if ($module_handler->getCount(new Criteria('dirname', $dirname)) == 0) {
        $module =& $module_handler->create();
        $module->loadInfoAsVar($dirname);
        $module->setVar('weight', 1);

        $error = false;
        $errs = array();
        $msgs = array();
        $msgs[] = '<h4 style="margin-bottom: 0px;border-bottom: dashed 1px #000000;">' . _MD_AM_INSTALLING  . $module->getInfo('name') . '</h4>';
        if ($module->getInfo('image') != false && trim($module->getInfo('image')) != '') {
            $msgs[] ='<img src="' . XOOPS_URL . '/modules/' . $dirname . '/' . trim($module->getInfo('image')) . '" alt="" />';
        }
        $msgs[] ='<strong>' . _VERSION . ':</strong> ' . $module->getInfo('version');
        if ($module->getInfo('author') != false && trim($module->getInfo('author')) != '') {
            $msgs[] ='<strong>' . _AUTHOR . ':</strong> ' . trim($module->getInfo('author'));
        }
        $msgs[] = '';
        $errs[] = '<h4 style="margin-bottom: 0px;border-bottom: dashed 1px #000000;">' . _MD_AM_INSTALLING  . $module->getInfo('name') . '</h4>';

        // Load module specific install script if any
        $install_script = $module->getInfo('onInstall');
        if ($install_script && trim($install_script) != '') {
            include_once XOOPS_ROOT_PATH . '/modules/' . $dirname . '/' . trim($install_script);
        }
        $func = "xoops_module_pre_install_{$dirname}";
        // If pre install function is defined, execute
        if (function_exists($func)) {
            $result = $func($module);
            if (!$result) {
                $error = true;
                $errs[] = "<p>" . sprintf(_MD_AM_FAILED_EXECUTE, $func) . "</p>";
                $errs = array_merge($errs, $module->getErrors());
            } else {
                $msgs[] = "<p>" . sprintf(_MD_AM_FAILED_SUCESS, "<strong>{$func}</strong>") . "</p>";
                $msgs += $module->getErrors();
            }
        }

        if ($error == false) {
            $sqlfile = $module->getInfo('sqlfile');
            if (is_array($sqlfile) && !empty($sqlfile[XOOPS_DB_TYPE])) {

                $sql_file_path = XOOPS_ROOT_PATH . "/modules/" . $dirname . "/" . $sqlfile[XOOPS_DB_TYPE];
                if (!file_exists($sql_file_path)) {
                    $errs[] = "<p>" . sprintf(_MD_AM_SQL_NOT_FOUND, "<strong>{$sql_file_path}</strong>");
                    $error = true;
                } else {
                    $msgs[] = "<p>" . sprintf(_MD_AM_SQL_FOUND, "<strong>{$sql_file_path}</strong>") . "<br  />" . _MD_AM_CREATE_TABLES;
                    include_once XOOPS_ROOT_PATH . '/class/database/sqlutility.php';
                    $sql_query = fread(fopen($sql_file_path, 'r'), filesize($sql_file_path));
                    $sql_query = trim($sql_query);
                    SqlUtility::splitMySqlFile($pieces, $sql_query);
                    $created_tables = array();
                    foreach ($pieces as $piece) {
                        // [0] contains the prefixed query
                        // [4] contains unprefixed table name
                        $prefixed_query = SqlUtility::prefixQuery($piece, $db->prefix());
                        if (!$prefixed_query) {
                            $errs[] ="<p>" . sprintf(_MD_AM_SQL_NOT_VALID, "<strong>" . $piece . "</strong>");
                            $error = true;
                            break;
                        }
                        // check if the table name is reserved
                        if (!in_array($prefixed_query[4], $reservedTables)) {
                            // not reserved, so try to create one
                            if (!$db->query($prefixed_query[0])) {
                                $errs[] = $db->error();
                                $error = true;
                                break;
                            } else {

                                if (!in_array($prefixed_query[4], $created_tables)) {
                                    $msgs[] = "&nbsp;&nbsp;" . sprintf(_MD_AM_TABLE_CREATED, "<strong>" . $db->prefix($prefixed_query[4]) . "</strong>");
                                    $created_tables[] = $prefixed_query[4];
                                } else {
                                    $msgs[] = "&nbsp;&nbsp;" . sprintf(_MD_AM_INSERT_DATA, "<strong>" . $db->prefix($prefixed_query[4]) . "</strong>");
                                }
                            }
                        } else {
                            // the table name is reserved, so halt the installation
                            $errs[] = "&nbsp;&nbsp;" . sprintf(_MD_AM_TABLE_RESERVED, "<strong>" . $prefixed_query[4] . "</strong>");
                            $error = true;
                            break;
                        }
                    }
                    // if there was an error, delete the tables created so far, so the next installation will not fail
                    if ($error == true) {
                        foreach ($created_tables as $ct) {
                            $db->query("DROP TABLE " . $db->prefix($ct));
                        }
                    }
                }
            }
        }
        // if no error, save the module info and blocks info associated with it
        if ($error == false) {
            if (!$module_handler->insert($module)) {
                $errs[] = "<p>" . sprintf(_MD_AM_INSERT_DATA_FAILD, "<strong>" . $module->getVar('name') . "</strong>");
                foreach ($created_tables as $ct) {
                    $db->query("DROP TABLE " . $db->prefix($ct));
                }
                $ret = "<p>" . sprintf(_MD_AM_FAILINS, "<strong>" . $module->name() . "</strong>") . "&nbsp;" . _MD_AM_ERRORSC . "<br />";
                foreach ($errs as $err) {
                    $ret .= " - " . $err . "<br />";
                }
                $ret .= "</p>";
                unset($module);
                unset($created_tables);
                unset($errs);
                unset($msgs);
                return $ret;
            } else {
                $newmid = $module->getVar('mid');
                unset($created_tables);
                $msgs[] = "<p>" . _MD_AM_INSERT_DATA_DONE .  sprintf(_MD_AM_MODULEID, "<strong>" . $newmid . "</strong>");
                $tplfile_handler =& xoops_gethandler('tplfile');
                $templates = $module->getInfo('templates');
                if ($templates != false) {
                    $msgs[] = _MD_AM_TEMPLATES_ADD;
                    foreach ($templates as $tpl) {
                        $tplfile =& $tplfile_handler->create();
                        $tpldata =& xoops_module_gettemplate($dirname, $tpl['file']);
                        $tplfile->setVar('tpl_source', $tpldata, true);
                        $tplfile->setVar('tpl_refid', $newmid);

                        $tplfile->setVar('tpl_tplset', 'default');
                        $tplfile->setVar('tpl_file', $tpl['file']);
                        $tplfile->setVar('tpl_desc', $tpl['description'], true);
                        $tplfile->setVar('tpl_module', $dirname);
                        $tplfile->setVar('tpl_lastmodified', time());
                        $tplfile->setVar('tpl_lastimported', 0);
                        $tplfile->setVar('tpl_type', 'module');
                        if (!$tplfile_handler->insert($tplfile)) {
                            $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_TEMPLATE_ADD_ERROR, "<strong>" . $tpl['file'] . "</strong>") . "</span>";
                        } else {
                            $newtplid = $tplfile->getVar('tpl_id');
                            $msgs[] = "&nbsp;&nbsp;" . sprintf(_MD_AM_TEMPLATE_ADD_DATA, "<strong>" . $tpl['file'] . "</strong>") . "(ID: <strong>" . $newtplid . "</strong>)";
                            // generate compiled file
                            include_once XOOPS_ROOT_PATH . '/class/template.php';
                            if (!xoops_template_touch($newtplid)) {
                                $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_TEMPLATE_COMPILED_FAILED, "<strong>" . $tpl['file'] . "</strong>") . "</span>";
                            } else {
                                $msgs[] = "&nbsp;&nbsp;" . sprintf(_MD_AM_TEMPLATE_COMPILED, "<strong>" . $tpl['file'] . "</strong>");
                            }
                        }
                        unset($tplfile, $tpldata);
                    }
                }
                include_once XOOPS_ROOT_PATH . '/class/template.php';
                xoops_template_clear_module_cache($newmid);
                $blocks = $module->getInfo('blocks');
                if ($blocks != false) {
                    $msgs[] = _MD_AM_BLOCKS_ADD;
                    foreach ($blocks as $blockkey => $block) {
                        // break the loop if missing block config
                        if (!isset($block['file']) || !isset($block['show_func'])) {
                            break;
                        }
                        $options = '';
                        if (!empty($block['options'])) {
                            $options = trim($block['options']);
                        }
                        $newbid = $db->genId($db->prefix('newblocks') . '_bid_seq');
                        $edit_func = isset($block['edit_func']) ? trim($block['edit_func']) : '';
                        $template = '';
                        if ((isset($block['template']) && trim($block['template']) != '')) {
                            $content =& xoops_module_gettemplate($dirname, $block['template'], true);
                        }
                        if (empty($content)) {
                            $content = '';
                        } else {
                            $template = trim($block['template']);
                        }
                        $block_name = addslashes(trim($block['name']));
                        $sql = "INSERT INTO " . $db->prefix("newblocks") . " (bid, mid, func_num, options, name, title, content, side, weight, visible, block_type, c_type, isactive, dirname, func_file, show_func, edit_func, template, bcachetime, last_modified) VALUES ($newbid, $newmid, " . intval($blockkey) . ", '$options', '" . $block_name . "','" . $block_name . "', '', 0, 0, 0, 'M', 'H', 1, '" . addslashes($dirname) . "', '" . addslashes(trim($block['file'])) . "', '" . addslashes(trim($block['show_func'])) . "', '" . addslashes($edit_func) . "', '" . $template . "', 0, " . time() . ")";
                        if (!$db->query($sql)) {
                            $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_BLOCK_ADD_ERROR, "<strong>" . $block['name'] . "</strong>") . sprintf(_MD_AM_BLOCK_ADD_ERROR_DATABASE, "<strong>" . $db->error() . "</strong>") . "</span>";
                        } else {
                            if (empty($newbid)) {
                                $newbid = $db->getInsertId();
                            }
                            $msgs[] = "&nbsp;&nbsp;" . sprintf(_MD_AM_BLOCK_ADD, "<strong>" . $block['name'] . "</strong>") . sprintf(_MD_AM_BLOCK_ID, "<strong>" . $newbid . "</strong>");
                            $sql = 'INSERT INTO ' . $db->prefix('block_module_link') . ' (block_id, module_id) VALUES (' . $newbid . ', -1)';
                            $db->query($sql);
                            if ($template != '') {
                                $tplfile =& $tplfile_handler->create();
                                $tplfile->setVar('tpl_refid', $newbid);
                                $tplfile->setVar('tpl_source', $content, true);
                                $tplfile->setVar('tpl_tplset', 'default');
                                $tplfile->setVar('tpl_file', $block['template']);
                                $tplfile->setVar('tpl_module', $dirname);
                                $tplfile->setVar('tpl_type', 'block');
                                $tplfile->setVar('tpl_desc', $block['description'], true);
                                $tplfile->setVar('tpl_lastimported', 0);
                                $tplfile->setVar('tpl_lastmodified', time());
                                if (!$tplfile_handler->insert($tplfile)) {
                                    $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_TEMPLATE_ADD_ERROR, "<strong>" . $block['template'] . "</strong>") . "</span>";
                                } else {
                                    $newtplid = $tplfile->getVar('tpl_id');
                                    $msgs[] = "&nbsp;&nbsp;" . sprintf(_MD_AM_TEMPLATE_ADD_DATA, "<strong>" . $block['template'] . "</strong>") . " (ID: <strong>" . $newtplid . "</strong>)";
                                    // generate compiled file
                                    include_once XOOPS_ROOT_PATH . '/class/template.php';
                                    if (!xoops_template_touch($newtplid)) {
                                        $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_TEMPLATE_COMPILED_FAILED, "<strong>" . $block['template'] . "</strong>") . "</span>";

                                    } else {
                                        $msgs[] = "&nbsp;&nbsp;" . sprintf(_MD_AM_TEMPLATE_COMPILED, "<strong>" . $block['template'] . "</strong>");
                                    }
                                }
                                unset($tplfile);
                            }
                        }
                        unset($content);
                    }
                    unset($blocks);
                }
                $configs = $module->getInfo('config');
                if ($configs != false) {
                    if ($module->getVar('hascomments') != 0) {
                        include_once XOOPS_ROOT_PATH . '/include/comment_constants.php';
                        array_push($configs, array('name' => 'com_rule', 'title' => '_CM_COMRULES', 'description' => '', 'formtype' => 'select', 'valuetype' => 'int', 'default' => 1, 'options' => array('_CM_COMNOCOM' => XOOPS_COMMENT_APPROVENONE, '_CM_COMAPPROVEALL' => XOOPS_COMMENT_APPROVEALL, '_CM_COMAPPROVEUSER' => XOOPS_COMMENT_APPROVEUSER, '_CM_COMAPPROVEADMIN' => XOOPS_COMMENT_APPROVEADMIN)));
                        array_push($configs, array('name' => 'com_anonpost', 'title' => '_CM_COMANONPOST', 'description' => '', 'formtype' => 'yesno', 'valuetype' => 'int', 'default' => 0));
                    }
                } else {
                    if ($module->getVar('hascomments') != 0) {
                        $configs = array();
                        include_once XOOPS_ROOT_PATH . '/include/comment_constants.php';
                        $configs[] = array('name' => 'com_rule', 'title' => '_CM_COMRULES', 'description' => '', 'formtype' => 'select', 'valuetype' => 'int', 'default' => 1, 'options' => array('_CM_COMNOCOM' => XOOPS_COMMENT_APPROVENONE, '_CM_COMAPPROVEALL' => XOOPS_COMMENT_APPROVEALL, '_CM_COMAPPROVEUSER' => XOOPS_COMMENT_APPROVEUSER, '_CM_COMAPPROVEADMIN' => XOOPS_COMMENT_APPROVEADMIN));
                        $configs[] = array('name' => 'com_anonpost', 'title' => '_CM_COMANONPOST', 'description' => '', 'formtype' => 'yesno', 'valuetype' => 'int', 'default' => 0);
                    }
                }
                // RMV-NOTIFY
                if ($module->getVar('hasnotification') != 0) {
                    if (empty($configs)) {
                        $configs = array();
                    }
                    // Main notification options
                    include_once XOOPS_ROOT_PATH . '/include/notification_constants.php';
                    include_once XOOPS_ROOT_PATH . '/include/notification_functions.php';
                    $options = array();
                    $options['_NOT_CONFIG_DISABLE'] = XOOPS_NOTIFICATION_DISABLE;
                    $options['_NOT_CONFIG_ENABLEBLOCK'] = XOOPS_NOTIFICATION_ENABLEBLOCK;
                    $options['_NOT_CONFIG_ENABLEINLINE'] = XOOPS_NOTIFICATION_ENABLEINLINE;
                    $options['_NOT_CONFIG_ENABLEBOTH'] = XOOPS_NOTIFICATION_ENABLEBOTH;

                    $configs[] = array ('name' => 'notification_enabled', 'title' => '_NOT_CONFIG_ENABLE', 'description' => '_NOT_CONFIG_ENABLEDSC', 'formtype' => 'select', 'valuetype' => 'int', 'default' => XOOPS_NOTIFICATION_ENABLEBOTH, 'options' => $options);
                    // Event-specific notification options
                    // FIXME: doesn't work when update module... can't read back the array of options properly...  " changing to &quot;
                    $options = array();
                    $categories =& notificationCategoryInfo('', $module->getVar('mid'));
                    foreach ($categories as $category) {
                        $events =& notificationEvents ($category['name'], false, $module->getVar('mid'));
                        foreach ($events as $event) {
                            if (!empty($event['invisible'])) {
                                continue;
                            }
                            $option_name = $category['title'] . ' : ' . $event['title'];
                            $option_value = $category['name'] . '-' . $event['name'];
                            $options[$option_name] = $option_value;
                        }
                        unset($events);
                    }
                    unset($categories);
                    $configs[] = array ('name' => 'notification_events', 'title' => '_NOT_CONFIG_EVENTS', 'description' => '_NOT_CONFIG_EVENTSDSC', 'formtype' => 'select_multi', 'valuetype' => 'array', 'default' => array_values($options), 'options' => $options);
                }

                if ($configs != false) {
                    $msgs[] = _MD_AM_MODULE_DATA_ADD;
                    $config_handler =& xoops_gethandler('config');
                    $order = 0;
                    foreach ($configs as $config) {
                        $confobj =& $config_handler->createConfig();
                        $confobj->setVar('conf_modid', $newmid);
                        $confobj->setVar('conf_catid', 0);
                        $confobj->setVar('conf_name', $config['name']);
                        $confobj->setVar('conf_title', $config['title'], true);
                        $confobj->setVar('conf_desc', $config['description'], true);
                        $confobj->setVar('conf_formtype', $config['formtype']);
                        $confobj->setVar('conf_valuetype', $config['valuetype']);
                        $confobj->setConfValueForInput($config['default'], true);
                        $confobj->setVar('conf_order', $order);
                        $confop_msgs = '';
                        if (isset($config['options']) && is_array($config['options'])) {
                            foreach ($config['options'] as $key => $value) {
                                $confop =& $config_handler->createConfigOption();
                                $confop->setVar('confop_name', $key, true);
                                $confop->setVar('confop_value', $value, true);
                                $confobj->setConfOptions($confop);
                                $confop_msgs .= '<br />&nbsp;&nbsp;&nbsp;&nbsp; ' . _MD_AM_CONFIG_ADD . _MD_AM_NAME . ' <strong>' . ( defined($key) ? constant($key) : $key ) . '</strong> ' . _MD_AM_VALUE . ' <strong>' . $value . '</strong> ';
                                unset($confop);
                            }
                        }
                        $order++;
                        if ($config_handler->insertConfig($confobj) != false) {
                            $msgs[] = '&nbsp;&nbsp;' . sprintf(_MD_AM_CONFIG_DATA_ADD, "<strong>" . $config['name'] . "</strong>") . $confop_msgs;

                        } else {
                            $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_CONFIG_DATA_ADD_ERROR, "<strong>" . $config['name'] . "</strong>") . "</span>";
                        }
                        unset($confobj);
                    }
                    unset($configs);
                }
            }
            if ($module->getInfo('hasMain')) {
                $groups = array(XOOPS_GROUP_ADMIN, XOOPS_GROUP_USERS, XOOPS_GROUP_ANONYMOUS);
            } else {
                $groups = array(XOOPS_GROUP_ADMIN);
            }
            // retrieve all block ids for this module
            $blocks = XoopsBlock::getByModule($newmid, false);
            $msgs[] = _MD_AM_GROUP_SETTINGS_ADD;
            $gperm_handler =& xoops_gethandler('groupperm');
            foreach ($groups as $mygroup) {
                if ($gperm_handler->checkRight('module_admin', 0, $mygroup)) {
                    $mperm =& $gperm_handler->create();
                    $mperm->setVar('gperm_groupid', $mygroup);
                    $mperm->setVar('gperm_itemid', $newmid);
                    $mperm->setVar('gperm_name', 'module_admin');
                    $mperm->setVar('gperm_modid', 1);
                    if (!$gperm_handler->insert($mperm)) {
                        $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_ACCESS_ADMIN_ADD_ERROR, "<strong>" . $mygroup . "</strong>") . "</span>";
                    } else {
                        $msgs[] = "&nbsp;&nbsp;" . sprintf(_MD_AM_ACCESS_ADMIN_ADD, "<strong>" . $mygroup . "</strong>");
                    }
                    unset($mperm);
                }
                $mperm =& $gperm_handler->create();
                $mperm->setVar('gperm_groupid', $mygroup);
                $mperm->setVar('gperm_itemid', $newmid);
                $mperm->setVar('gperm_name', 'module_read');
                $mperm->setVar('gperm_modid', 1);
                if (!$gperm_handler->insert($mperm)) {
                    $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_ACCESS_USER_ADD_ERROR, "<strong>" . $mygroup . "</strong>") . "</span>";
                } else {
                    $msgs[] = '&nbsp;&nbsp;' . sprintf(_MD_AM_ACCESS_USER_ADD_ERROR, "<strong>" . $mygroup . "</strong>");
                }
                unset($mperm);
                foreach ($blocks as $blc) {
                    $bperm =& $gperm_handler->create();
                    $bperm->setVar('gperm_groupid', $mygroup);
                    $bperm->setVar('gperm_itemid', $blc);
                    $bperm->setVar('gperm_name', 'block_read');
                    $bperm->setVar('gperm_modid', 1);
                    if (!$gperm_handler->insert($bperm)) {
                        $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . _MD_AM_BLOCK_ACCESS_ERROR . ' Block ID: <strong>' . $blc . '</strong> Group ID: <strong>' . $mygroup . '</strong></span>';
                    } else {
                        $msgs[] = '&nbsp;&nbsp;' . _MD_AM_BLOCK_ACCESS . sprintf(_MD_AM_BLOCK_ID, "<strong>" . $blc . "</strong>") . sprintf(_MD_AM_GROUP_ID, "<strong>" . $mygroup . "</strong>");
                    }
                    unset($bperm);
                }
            }
            unset($blocks);
            unset($groups);

            // execute module specific install script if any
            $func = "xoops_module_install_{$dirname}";
            if (function_exists($func)) {
                if (!$lastmsg = $func($module)) {
                    $msgs[] = "<p>" . sprintf(_MD_AM_FAILED_EXECUTE, $func) . "</p>";
                } else {
                    $msgs[] = "<p>" . sprintf(_MD_AM_FAILED_SUCESS, "<strong>{$func}</strong>") . "</p>";
                    if (is_string($lastmsg)) {
                        $msgs[] = $lastmsg;
                    }
                }
            }

            $ret = '<div>' . implode("<br />", $msgs) . '</div><br />' . sprintf(_MD_AM_OKINS, "<strong>" . $module->getVar('name') . "</strong>");
            unset($msgs);
            unset($errs);
            unset($module);
            return $ret;
        } else {
            $ret = '<p>' . sprintf(_MD_AM_FAILINS, '<strong>' . $dirname . '</strong>') . '&nbsp;' . _MD_AM_ERRORSC . '<br />' . implode("<br />", $errs) . '</p>';
            unset($msgs);
            unset($errs);
            return $ret;
        }
    }
    else {
        return "<p>" . sprintf(_MD_AM_FAILINS, "<strong>" . $dirname . "</strong>") . "&nbsp;" . _MD_AM_ERRORSC . "<br />&nbsp;&nbsp;" . sprintf(_MD_AM_ALEXISTS, $dirname) . "</p>";
    }
}

function &xoops_module_gettemplate($dirname, $template, $block = false)
{
    global $xoopsConfig;
    $ret = '';
    if ($block) {
        $path = XOOPS_ROOT_PATH . '/modules/' . $dirname . '/templates/blocks/' . $template;
    } else {
        $path = XOOPS_ROOT_PATH . '/modules/' . $dirname . '/templates/' . $template;
    }
    if (!file_exists($path)) {
        return $ret;
    } else {
        $lines = file($path);
    }
    if (!$lines) {
        return $ret;
    }
    $count = count($lines);
    for ($i = 0; $i < $count; $i++) {
        $ret .= str_replace("\n", "\r\n", str_replace("\r\n", "\n", $lines[$i]));
    }
    return $ret;
}

function xoops_module_uninstall($dirname)
{
    global $xoopsConfig;
    $reservedTables = array('avatar', 'avatar_users_link', 'block_module_link', 'xoopscomments', 'config', 'configcategory', 'configoption', 'image', 'imagebody', 'imagecategory', 'imgset', 'imgset_tplset_link', 'imgsetimg', 'groups','groups_users_link','group_permission', 'online', 'bannerclient', 'banner', 'bannerfinish', 'priv_msgs', 'ranks', 'session', 'smiles', 'users', 'newblocks', 'modules', 'tplfile', 'tplset', 'tplsource', 'xoopsnotifications', 'banner', 'bannerclient', 'bannerfinish');
    $db =& Database::getInstance();
    $module_handler =& xoops_gethandler('module');
    $module = $module_handler->getByDirname($dirname);
    include_once XOOPS_ROOT_PATH . '/class/template.php';
    xoops_template_clear_module_cache($module->getVar('mid'));
    if ($module->getVar('dirname') == 'system') {
        return "<p>" . sprintf(_MD_AM_FAILUNINS, "<strong>" . $module->getVar('name') . "</strong>") . "&nbsp;" . _MD_AM_ERRORSC . "<br /> - " . _MD_AM_SYSNO . "</p>";
    } elseif ($module->getVar('dirname') == $xoopsConfig['startpage']) {
        return "<p>" . sprintf(_MD_AM_FAILUNINS, "<strong>" . $module->getVar('name') . "</strong>") . "&nbsp;" . _MD_AM_ERRORSC . "<br /> - " . _MD_AM_STRTNO . "</p>";
    } else {
        $msgs = array();

        // Load module specific install script if any
        $uninstall_script = $module->getInfo('onUninstall');
        if ($uninstall_script && trim($uninstall_script) != '') {
            include_once XOOPS_ROOT_PATH . '/modules/' . $dirname . '/' . trim($uninstall_script);
        }
        $func = "xoops_module_pre_uninstall_{$dirname}";
        // If pre uninstall function is defined, execute
        if (function_exists($func)) {
            $result = $func($module);
            if (!$result) {
                $errs = $module->getErrors();
                $errs[] = sprintf(_MD_AM_FAILED_EXECUTE, $func);
                return "<p>" . sprintf(_MD_AM_FAILUNINS, "<strong>" . $module->getVar('name') . "</strong>") . "&nbsp;" . _MD_AM_ERRORSC . "<br />" . implode("<br />", $errs) . "</p>";
            } else {
                $msgs = $module->getErrors();
                array_unshift($msgs, "<p>" . sprintf(_MD_AM_FAILED_SUCESS, "<strong>{$func}</strong>") . "</p>");
            }
        }

        if (!$module_handler->delete($module)) {
            $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_DELETE_ERROR, $module->getVar('name')) . '</span>';
        } else {

            // delete template files
            $tplfile_handler = xoops_gethandler('tplfile');
            $templates = $tplfile_handler->find(null, 'module', $module->getVar('mid'));
            $tcount = count($templates);
            if ($tcount > 0) {
                $msgs[] = _MD_AM_TEMPLATES_DELETE;
                for ($i = 0; $i < $tcount; $i++) {
                    if (!$tplfile_handler->delete($templates[$i])) {
                        $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_TEMPLATE_DELETE_DATA_FAILD, $templates[$i]->getVar('tpl_file')) . sprintf(_MD_AM_TEMPLATE_ID, "<strong>" . $templates[$i]->getVar('tpl_id') . "</strong>") . '</span>';
                    } else {
                        $msgs[] = "&nbsp;&nbsp;" . sprintf(_MD_AM_TEMPLATE_DELETE_DATA, "<strong>" . $templates[$i]->getVar('tpl_file') . "</strong>") . sprintf(_MD_AM_TEMPLATE_ID, "<strong>" . $templates[$i]->getVar('tpl_id') . "</strong>");
                    }
                }
            }
            unset($templates);

            // delete blocks and block tempalte files
            $block_arr = XoopsBlock::getByModule($module->getVar('mid'));
            if (is_array($block_arr)) {
                $bcount = count($block_arr);
                $msgs[] = _MD_AM_BLOCKS_DELETE;
                for ($i = 0; $i < $bcount; $i++) {
                    if (!$block_arr[$i]->delete()) {
                        $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_BLOCK_DELETE_ERROR, "<strong>" . $block_arr[$i]->getVar('name') . "</strong>") . sprintf(_MD_AM_BLOCK_ID, "<strong>" . $block_arr[$i]->getVar('bid') . "</strong>") . '</span>';
                    } else {
                        $msgs[] = '&nbsp;&nbsp;' . sprintf(_MD_AM_BLOCK_DELETE,"<strong>" . $block_arr[$i]->getVar('name') . "</strong>") .  sprintf(_MD_AM_BLOCK_ID, "<strong>" . $block_arr[$i]->getVar('bid') . "</strong>");
                    }
                    if ($block_arr[$i]->getVar('template') != '') {
                        $templates = $tplfile_handler->find(null, 'block', $block_arr[$i]->getVar('bid'));
                        $btcount = count($templates);
                        if ($btcount > 0) {
                            for ($j = 0; $j < $btcount; $j++) {
                                if (!$tplfile_handler->delete($templates[$j])) {
                                    $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR, $templates[$j]->getVar('tpl_file')).sprintf(_MD_AM_TEMPLATE_ID, "<strong>".$templates[$j]->getVar('tpl_id') . "</strong>") . '</span>';
                                } else {
                                    $msgs[] = '&nbsp;&nbsp;' . sprintf(_MD_AM_BLOCK_DELETE_DATA, "<strong>" .  $templates[$j]->getVar('tpl_file') . "</strong>") . sprintf(_MD_AM_TEMPLATE_ID, "<strong>" . $templates[$j]->getVar('tpl_id') . "</strong>");
                                }
                            }
                        }
                        unset($templates);
                    }
                }
            }

            // delete tables used by this module
            $modtables = $module->getInfo('tables');
            if ($modtables != false && is_array($modtables)) {
                $msgs[] = _MD_AM_DELETE_MOD_TABLES;
                foreach ($modtables as $table) {
                    // prevent deletion of reserved core tables!
                    if (!in_array($table, $reservedTables)) {
                        $sql = 'DROP TABLE '  .  $db->prefix($table);
                        if (!$db->query($sql)) {
                            $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_TABLE_DROPPED_ERROR, "<strong>" . $db->prefix($table) . "<strong>") . "</span>";
                        } else {
                            $msgs[] = '&nbsp;&nbsp;' . sprintf(_MD_AM_TABLE_DROPPED, "<strong>" . $db->prefix($table) . "</strong>");
                        }
                    } else {
                        $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_TABLE_DROPPED_FAILDED, "<strong>" . $db->prefix($table) . "</strong>") . "</span>";
                    }
                }
            }

            // delete comments if any
            if ($module->getVar('hascomments') != 0) {
                $msgs[] = _MD_AM_COMMENTS_DELETE;
                $comment_handler =& xoops_gethandler('comment');
                if (!$comment_handler->deleteByModule($module->getVar('mid'))) {
                    $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . _MD_AM_COMMENTS_DELETE_ERROR . '</span>';
                } else {
                    $msgs[] = '&nbsp;&nbsp;' . _MD_AM_COMMENTS_DELETED;
                }
            }

            // RMV-NOTIFY
            // delete notifications if any
            if ($module->getVar('hasnotification') != 0) {
                $msgs[] = _MD_AM_NOTIFICATIONS_DELETE;
                if (!xoops_notification_deletebymodule($module->getVar('mid'))) {
                    $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . _MD_AM_NOTIFICATIONS_DELETE_ERROR . '</span>';
                } else {
                    $msgs[] = '&nbsp;&nbsp;' . _MD_AM_NOTIFICATIONS_DELETED;
                }
            }

            // delete permissions if any
            $gperm_handler =& xoops_gethandler('groupperm');
            if (!$gperm_handler->deleteByModule($module->getVar('mid'))) {
                $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . _MD_AM_GROUP_PERMS_DELETE_ERROR . '</span>';
            } else {
                $msgs[] = '&nbsp;&nbsp;' . _MD_AM_GROUP_PERMS_DELETED;
            }

            // delete module config options if any
            if ($module->getVar('hasconfig') != 0 || $module->getVar('hascomments') != 0) {
                $config_handler =& xoops_gethandler('config');
                $configs = $config_handler->getConfigs(new Criteria('conf_modid', $module->getVar('mid')));
                $confcount = count($configs);
                if ($confcount > 0) {
                    $msgs[] = _MD_AM_MODULE_DATA_DELETE;
                    for ($i = 0; $i < $confcount; $i++) {
                        if (!$config_handler->deleteConfig($configs[$i])) {
                            $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . _MD_AM_CONFIG_DATA_DELETE_ERROR .  sprintf(_MD_AM_GONFIG_ID, "<strong>" . $configs[$i]->getvar('conf_id') . "</strong>") . '</span>';
                        } else {
                            $msgs[] = '&nbsp;&nbsp;' . _MD_AM_GONFIG_DATA_DELETE . sprintf(_MD_AM_GONFIG_ID, "<strong>" . $configs[$i]->getvar('conf_id') . "</strong>");
                        }
                    }
                }
            }

            // execute module specific install script if any
            $func = 'xoops_module_uninstall_' . $dirname;
            if (function_exists($func)) {
                if (!$func($module)) {
                    $msgs[] = "<p>" . sprintf(_MD_AM_FAILED_EXECUTE, $func) . "</p>";
                } else {
                    $msgs[] = "<p>" . sprintf(_MD_AM_FAILED_SUCESS, "<strong>{$func}</strong>") . "</p>";
                }
            }
            $msgs[] = '<p>' . sprintf(_MD_AM_OKUNINS, "<strong>" . $module->getVar('name') . "</strong>") . '</p>';
        }
        $ret = '<div>' . implode("<br />", $msgs) . '</div>';
        return $ret;
    }
}

function xoops_module_activate($mid)
{
    $module_handler =& xoops_gethandler('module');
    $module = $module_handler->get($mid);
    include_once XOOPS_ROOT_PATH . '/class/template.php';
    xoops_template_clear_module_cache($module->getVar('mid'));
    $module->setVar('isactive', 1);
    if (!$module_handler->insert($module)) {
        $ret = "<p>" . sprintf(_MD_AM_FAILACT, "<strong>" . $module->getVar('name') . "</strong>") . "&nbsp;" . _MD_AM_ERRORSC . "<br />" . $module->getHtmlErrors();
        return $ret . "</p>";
    }
    $blocks = XoopsBlock::getByModule($module->getVar('mid'));
    $bcount = count($blocks);
    for ($i = 0; $i < $bcount; $i++) {
        $blocks[$i]->setVar('isactive', 1);
        $blocks[$i]->store();
    }
    return "<p>" . sprintf(_MD_AM_OKACT, "<strong>" . $module->getVar('name') . "</strong>") . "</p>";
}

function xoops_module_deactivate($mid)
{
    global $xoopsConfig;
    $module_handler =& xoops_gethandler('module');
    $module = $module_handler->get($mid);
    include_once XOOPS_ROOT_PATH . '/class/template.php';
    xoops_template_clear_module_cache($mid);
    $module->setVar('isactive', 0);
    if ($module->getVar('dirname') == "system") {
        return "<p>" . sprintf(_MD_AM_FAILDEACT, "<strong>" . $module->getVar('name') . "</strong>") . "&nbsp;" . _MD_AM_ERRORSC . "<br /> - " . _MD_AM_SYSNO . "</p>";
    } elseif ($module->getVar('dirname') == $xoopsConfig['startpage']) {
        return "<p>" . sprintf(_MD_AM_FAILDEACT, "<strong>" . $module->getVar('name') . "</strong>") . "&nbsp;" . _MD_AM_ERRORSC . "<br /> - " . _MD_AM_STRTNO . "</p>";
    } else {
        if (!$module_handler->insert($module)) {
            $ret = "<p>" . sprintf(_MD_AM_FAILDEACT, "<strong>" . $module->getVar('name') . "</strong>") . "&nbsp;" . _MD_AM_ERRORSC . "<br />" . $module->getHtmlErrors();
            return $ret . "</p>";
        }
        $blocks = XoopsBlock::getByModule($module->getVar('mid'));
        $bcount = count($blocks);
        for ($i = 0; $i < $bcount; $i++) {
            $blocks[$i]->setVar('isactive', 0);
            $blocks[$i]->store();
        }
        return "<p>" . sprintf(_MD_AM_OKDEACT, "<strong>" . $module->getVar('name') . "</strong>") . "</p>";
    }
}

function xoops_module_change($mid, $weight, $name)
{
    $module_handler =& xoops_gethandler('module');
    $module = $module_handler->get($mid);
    $module->setVar('weight', $weight);
    $module->setVar('name', $name);
    $myts =& MyTextSanitizer::getInstance();
    if (!$module_handler->insert($module)) {
        $ret = "<p>" . sprintf(_MD_AM_FAILORDER, "<strong>" . $myts->stripSlashesGPC($name) . "</strong>") . "&nbsp;" . _MD_AM_ERRORSC . "<br />";
        $ret .= $module->getHtmlErrors() . "</p>";
        return $ret;
    }
    return "<p>" . sprintf(_MD_AM_OKORDER, "<strong>" . $myts->stripSlashesGPC($name) . "</strong>") . "</p>";
}

?>