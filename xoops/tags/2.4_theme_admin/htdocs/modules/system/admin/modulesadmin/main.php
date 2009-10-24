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
}
include_once XOOPS_ROOT_PATH.'/class/xoopsblock.php';
include_once XOOPS_ROOT_PATH."/modules/system/admin/modulesadmin/modulesadmin.php";
$op = "list";
if ( isset($_POST) ) {
    foreach ( $_POST as $k => $v ) {
        ${$k} = $v;
    }
}

if (isset($_GET['op'])) {
    $op = $_GET['op'];
    $module = $_GET['module'];
}

if (in_array($op, array('submit', 'install_ok', 'update_ok', 'uninstall_ok'))) {
    if (!$GLOBALS['xoopsSecurity']->check()) {
        $op = 'list';
    }
}

if ( $op == "list" ) {
    xoops_module_list();
    exit();
}

if ( $op == "confirm" ) {
    xoops_cp_header();
    //OpenTable();
    $error = array();
    if ( !is_writable(XOOPS_CACHE_PATH.'/') ) {
        // attempt to chmod 666
        if ( !chmod(XOOPS_CACHE_PATH.'/', 0777) ) {
            $error[] = sprintf(_MUSTWABLE, "<strong>".XOOPS_CACHE_PATH.'/</strong>');
        }
    }
    if ( count($error) > 0 ) {
        xoops_error($error);
        echo "<p><a href='admin.php?fct=modulesadmin'>"._MD_AM_BTOMADMIN."</a></p>";
        xoops_cp_footer();
        exit();
    }
    echo "<h4>"._MD_AM_PCMFM."</h4>
    <form action='admin.php' method='post'>
    <input type='hidden' name='fct' value='modulesadmin' />
    <input type='hidden' name='op' value='submit' />
    <table width='100%' border='0' cellspacing='1' class='outer'>
    <tr align='center'><th>"._MD_AM_MODULE."</th><th>"._MD_AM_ACTION."</th><th>"._MD_AM_ORDER."</th></tr>";
    $mcount = 0;
    $myts =& MyTextsanitizer::getInstance();
    foreach ($module as $mid) {
        if ($mcount % 2 != 0) {
            $class = 'odd';
        } else {
            $class = 'even';
        }
        echo '<tr class="'.$class.'"><td align="center">'.$myts->stripSlashesGPC($oldname[$mid]);
        $newname[$mid] = trim($myts->stripslashesGPC($newname[$mid]));
        if ($newname[$mid] != $oldname[$mid]) {
            echo '&nbsp;&raquo;&raquo;&nbsp;<span style="color:#ff0000;font-weight:bold;">'.$newname[$mid].'</span>';
        }
        echo '</td><td align="center">';
        if (isset($newstatus[$mid]) && $newstatus[$mid] ==1) {
            if ($oldstatus[$mid] == 0) {
                echo "<span style='color:#ff0000;font-weight:bold;'>"._MD_AM_ACTIVATE."</span>";
            } else {
                echo _MD_AM_NOCHANGE;
            }
        } else {
            $newstatus[$mid] = 0;
            if ($oldstatus[$mid] == 1) {
                echo "<span style='color:#ff0000;font-weight:bold;'>"._MD_AM_DEACTIVATE."</span>";
            } else {
                echo _MD_AM_NOCHANGE;
            }
        }
        echo "</td><td align='center'>";
        if ($oldweight[$mid] != $weight[$mid]) {
            echo "<span style='color:#ff0000;font-weight:bold;'>".$weight[$mid]."</span>";
        } else {
            echo $weight[$mid];
        }
        echo "
        <input type='hidden' name='module[]' value='".$mid."' />
        <input type='hidden' name='oldname[".$mid."]' value='".htmlspecialchars($oldname[$mid], ENT_QUOTES)."' />
        <input type='hidden' name='newname[".$mid."]' value='".htmlspecialchars($newname[$mid], ENT_QUOTES)."' />
        <input type='hidden' name='oldstatus[".$mid."]' value='".$oldstatus[$mid]."' />
        <input type='hidden' name='newstatus[".$mid."]' value='".$newstatus[$mid]."' />
        <input type='hidden' name='oldweight[".$mid."]' value='".intval($oldweight[$mid])."' />
        <input type='hidden' name='weight[".$mid."]' value='".intval($weight[$mid])."' />
        </td></tr>";
    }
    echo "
    <tr class='foot' align='center'><td colspan='3'><input type='submit' value='"._MD_AM_SUBMIT."' />&nbsp;<input type='button' value='"._MD_AM_CANCEL."' onclick='location=\"admin.php?fct=modulesadmin\"' />".$GLOBALS['xoopsSecurity']->getTokenHTML()."</td></tr>
    </table>
    </form>";
    xoops_cp_footer();
    exit();
}
if ( $op == "submit" ) {
    $ret = array();
    $write = false;
    foreach ($module as $mid) {
        if (isset($newstatus[$mid]) && $newstatus[$mid] ==1) {
            if ($oldstatus[$mid] == 0) {
                $ret[] = xoops_module_activate($mid);
            }
        } else {
            if ($oldstatus[$mid] == 1) {
                $ret[] = xoops_module_deactivate($mid);
            }
        }
        $newname[$mid] = trim($newname[$mid]);
        if ($oldname[$mid] != $newname[$mid] || $oldweight[$mid] != $weight[$mid]) {
            $ret[] = xoops_module_change($mid, $weight[$mid], $newname[$mid]);
            $write = true;
        }
        //flush();
    }
    if ( $write ) {
        // Flush cache files for cpanel GUIs
        xoops_load("cpanel", "system");
        XoopsSystemCpanel::flush();
    }
    xoops_cp_header();
    if ( count($ret) > 0 ) {
        foreach ($ret as $msg) {
            if ($msg != '') {
                echo $msg;
            }
        }
    }
    echo "<br /><a href='admin.php?fct=modulesadmin'>"._MD_AM_BTOMADMIN."</a>";
    xoops_cp_footer();
    exit();
}

if ($op == 'install') {
    $module_handler =& xoops_gethandler('module');
    $mod =& $module_handler->create();
    $mod->loadInfoAsVar($module);
    if ($mod->getInfo('image') != false && trim($mod->getInfo('image')) != '') {
        $msgs ='<img src="'.XOOPS_URL.'/modules/'.$mod->getVar('dirname').'/'.trim($mod->getInfo('image')).'" alt="" />';
    }
    $msgs .= '<br /><span style="font-size:smaller;">'.$mod->getVar('name').'</span><br /><br />'._MD_AM_RUSUREINS;
    xoops_cp_header();
    xoops_confirm(array('module' => $module, 'op' => 'install_ok', 'fct' => 'modulesadmin'), 'admin.php', $msgs, _MD_AM_INSTALL);
    xoops_cp_footer();
    exit();
}

if ($op == 'install_ok') {
    $ret = array();
    $ret[] = xoops_module_install($module);
    // Flush cache files for cpanel GUIs
    xoops_load("cpanel", "system");
    XoopsSystemCpanel::flush();
    xoops_cp_header();
    if (count($ret) > 0) {
        foreach ($ret as $msg) {
            if ($msg != '') {
                echo $msg;
            }
        }
    }
    echo "<br /><a href='admin.php?fct=modulesadmin'>"._MD_AM_BTOMADMIN."</a>";
    xoops_cp_footer();
    exit();
}

if ($op == 'uninstall') {
    $module_handler =& xoops_gethandler('module');
    $mod =& $module_handler->getByDirname($module);
    if ($mod->getInfo('image') != false && trim($mod->getInfo('image')) != '') {
        $msgs ='<img src="'.XOOPS_URL.'/modules/'.$mod->getVar('dirname').'/'.trim($mod->getInfo('image')).'" alt="" />';
    }
    $msgs .= '<br /><span style="font-size:smaller;">'.$mod->getVar('name').'</span><br /><br />'._MD_AM_RUSUREUNINS;
    xoops_cp_header();
    xoops_confirm(array('module' => $module, 'op' => 'uninstall_ok', 'fct' => 'modulesadmin'), 'admin.php', $msgs, _YES);
    xoops_cp_footer();
    exit();
}

if ($op == 'uninstall_ok') {
    $ret = array();
    $ret[] = xoops_module_uninstall($module);
    // Flush cache files for cpanel GUIs
    xoops_load("cpanel", "system");
    XoopsSystemCpanel::flush();
    xoops_cp_header();
    if (count($ret) > 0) {
        foreach ($ret as $msg) {
            if ($msg != '') {
                echo $msg;
            }
        }
    }
    echo "<a href='admin.php?fct=modulesadmin'>"._MD_AM_BTOMADMIN."</a>";
    xoops_cp_footer();
    exit();
}

if ($op == 'update') {
    $module_handler =& xoops_gethandler('module');
    $mod =& $module_handler->getByDirname($module);
    if ($mod->getInfo('image') != false && trim($mod->getInfo('image')) != '') {
        $msgs ='<img src="'.XOOPS_URL.'/modules/'.$mod->getVar('dirname').'/'.trim($mod->getInfo('image')).'" alt="" />';
    }
    $msgs .= '<br /><span style="font-size:smaller;">'.$mod->getVar('name').'</span><br /><br />'._MD_AM_RUSUREUPD;
    xoops_cp_header();
    xoops_confirm(array('dirname' => $module, 'op' => 'update_ok', 'fct' => 'modulesadmin'), 'admin.php', $msgs, _MD_AM_UPDATE);
    xoops_cp_footer();
    exit();
}

if ($op == 'update_ok') {
    $dirname = trim($dirname);
    $module_handler =& xoops_gethandler('module');
    $module =& $module_handler->getByDirname($dirname);
    // Save current version for use in the update function
    $prev_version = $module->getVar('version');
    include_once XOOPS_ROOT_PATH.'/class/template.php';
    $xoopsTpl = new XoopsTpl();
    $xoopsTpl->clearCache($dirname);
    //xoops_template_clear_module_cache($module->getVar('mid'));
    // we dont want to change the module name set by admin
    $temp_name = $module->getVar('name');
    $module->loadInfoAsVar($dirname);
    $module->setVar('name', $temp_name);
    xoops_cp_header();
    if (!$module_handler->insert($module)) {
        echo '<p>Could not update '.$module->getVar('name').'</p>';
        echo "<br /><a href='admin.php?fct=modulesadmin'>"._MD_AM_BTOMADMIN."</a>";
    } else {
        echo "<p><a href='admin.php?fct=modulesadmin'>"._MD_AM_BTOMADMIN."</a><p>";
        $newmid = $module->getVar('mid');
        $msgs = array();
        $msgs[] = _MD_AM_MODULE_DATA_UPDATE;
        $tplfile_handler =& xoops_gethandler('tplfile');
        $deltpl = $tplfile_handler->find('default', 'module', $module->getVar('mid'));
        $delng = array();
        if (is_array($deltpl)) {
            // delete template file entry in db
            $dcount = count($deltpl);
            for ($i = 0; $i < $dcount; $i++) {
                if (!$tplfile_handler->delete($deltpl[$i])) {
                    $delng[] = $deltpl[$i]->getVar('tpl_file');
                }
            }
        }
        $templates = $module->getInfo('templates');
        if ($templates != false) {
            $msgs[] = _MD_AM_TEMPLATES_UPDATE;
            foreach ($templates as $tpl) {
                $tpl['file'] = trim($tpl['file']);
                if (!in_array($tpl['file'], $delng)) {
                    $tpldata =& xoops_module_gettemplate($dirname, $tpl['file']);
                    $tplfile =& $tplfile_handler->create();
                    $tplfile->setVar('tpl_refid', $newmid);
                    $tplfile->setVar('tpl_lastimported', 0);
                    $tplfile->setVar('tpl_lastmodified', time());
                    if (preg_match("/\.css$/i", $tpl['file'])) {
                        $tplfile->setVar('tpl_type', 'css');
                    } else {
                        $tplfile->setVar('tpl_type', 'module');
                    }
                    $tplfile->setVar('tpl_source', $tpldata, true);
                    $tplfile->setVar('tpl_module', $dirname);
                    $tplfile->setVar('tpl_tplset', 'default');
                    $tplfile->setVar('tpl_file', $tpl['file'], true);
                    $tplfile->setVar('tpl_desc', $tpl['description'], true);
                    if (!$tplfile_handler->insert($tplfile)) {
                        $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">'.sprintf(_MD_AM_TEMPLATE_ADD_ERROR, "<strong>".$tpl['file']."</strong>").'</span>';
                    } else {
                        $newid = $tplfile->getVar('tpl_id');
                        $msgs[] = '&nbsp;&nbsp;'.sprintf(_MD_AM_TEMPLATE_INSERT_DATA, "<strong>".$tpl['file']."</strong>");
                        if ($xoopsConfig['template_set'] == 'default') {
                            if (!xoops_template_touch($newid)) {
                                $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">'.sprintf(_MD_AM_TEMPLATE_RECOMPILE_ERROR, "<strong>".$tpl['file']."</strong>").'</span>';
                            } else {
                                $msgs[] = '&nbsp;&nbsp;<span>'.sprintf(_MD_AM_TEMPLATE_RECOMPILE, "<strong>".$tpl['file']."</strong>").'</span>';
                            }
                        }
                    }
                    unset($tpldata);
                } else {
                    $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">'.sprintf(_MD_AM_TEMPLATE_DELETE_OLD_ERROR, "<strong>".$tpl['file']."</strong>").'</span>';
                }
            }
        }
        $blocks = $module->getInfo('blocks');
        $msgs[] = _MD_AM_BLOCKS_REBUILD;
        if ($blocks != false) {
            $showfuncs = array();
            $funcfiles = array();
            foreach ($blocks as $i => $block) {
                if (isset($block['show_func']) && $block['show_func'] != '' && isset($block['file']) && $block['file'] != '') {
                    $editfunc = isset($block['edit_func']) ? $block['edit_func'] : '';
                    $showfuncs[] = $block['show_func'];
                    $funcfiles[] = $block['file'];
                    $template = '';
                    if ((isset($block['template']) && trim($block['template']) != '')) {
                        $content = xoops_module_gettemplate($dirname, $block['template'], true);
                    }
                    if (!$content) {
                        $content = '';
                    } else {
                        $template = $block['template'];
                    }
                    $options = '';
                    if (!empty($block['options'])) {
                        $options = $block['options'];
                    }
                    $sql = "SELECT bid, name FROM ".$xoopsDB->prefix('newblocks')." WHERE mid=".$module->getVar('mid')." AND func_num=".$i." AND show_func='".addslashes($block['show_func'])."' AND func_file='".addslashes($block['file'])."'";
                    $fresult = $xoopsDB->query($sql);
                    $fcount = 0;
                    while ($fblock = $xoopsDB->fetchArray($fresult)) {
                        $fcount++;
                        $sql = "UPDATE ".$xoopsDB->prefix("newblocks")." SET name='".addslashes($block['name'])."', edit_func='".addslashes($editfunc)."', content='', template='".$template."', last_modified=".time()." WHERE bid=".$fblock['bid'];
                        $result = $xoopsDB->query($sql);
                        if (!$result) {
                            $msgs[] = "&nbsp;&nbsp;".sprintf(_MD_AM_UPDATE_ERROR, $fblock['name']);
                        } else {
                            $msgs[] = "&nbsp;&nbsp;".sprintf(_MD_AM_BLOCK_UPDATE, $fblock['name']).sprintf(_MD_AM_BLOCK_ID, "<strong>".$fblock['bid']."</strong>");
                            if ($template != '') {
                                $tplfile = $tplfile_handler->find('default', 'block', $fblock['bid']);
                                if (count($tplfile) == 0) {
                                    $tplfile_new =& $tplfile_handler->create();
                                    $tplfile_new->setVar('tpl_module', $dirname);
                                    $tplfile_new->setVar('tpl_refid', $fblock['bid']);
                                    $tplfile_new->setVar('tpl_tplset', 'default');
                                    $tplfile_new->setVar('tpl_file', $block['template'], true);
                                    $tplfile_new->setVar('tpl_type', 'block');
                                } else {
                                    $tplfile_new = $tplfile[0];
                                }
                                $tplfile_new->setVar('tpl_source', $content, true);
                                $tplfile_new->setVar('tpl_desc', $block['description'], true);
                                $tplfile_new->setVar('tpl_lastmodified', time());
                                $tplfile_new->setVar('tpl_lastimported', 0);
                                if (!$tplfile_handler->insert($tplfile_new)) {
                                    $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">'.sprintf(_MD_AM_TEMPLATE_UPDATE_ERROR, "<strong>".$block['template']."</strong>").'</span>';
                                } else {
                                    $msgs[] = "&nbsp;&nbsp;".sprintf(_MD_AM_TEMPLATE_UPDATE, "<strong>".$block['template']."</strong>");
                                    if ($xoopsConfig['template_set'] == 'default') {
                                        if (!xoops_template_touch($tplfile_new->getVar('tpl_id'))) {
                                            $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">'.sprintf(_MD_AM_TEMPLATE_RECOMPILE_ERROR, "<strong>".$block['template']."</strong>").'</span>';
                                        } else {
                                            $msgs[] = "&nbsp;&nbsp;".sprintf(_MD_AM_TEMPLATE_RECOMPILE, "<strong>".$block['template']."</strong>");
                                        }
                                    }

                                }
                            }
                        }
                    }
                    if ($fcount == 0) {
                        $newbid = $xoopsDB->genId($xoopsDB->prefix('newblocks').'_bid_seq');
                        $block_name = addslashes($block['name']);
                        $block_type = ($module->getVar('dirname') == 'system') ? 'S' : 'M';
                        $sql = "INSERT INTO ".$xoopsDB->prefix("newblocks")." (bid, mid, func_num, options, name, title, content, side, weight, visible, block_type, isactive, dirname, func_file, show_func, edit_func, template, last_modified) VALUES (".$newbid.", ".$module->getVar('mid').", ".$i.",'".addslashes($options)."','".$block_name."', '".$block_name."', '', 0, 0, 0, '{$block_type}', 1, '".addslashes($dirname)."', '".addslashes($block['file'])."', '".addslashes($block['show_func'])."', '".addslashes($editfunc)."', '".$template."', ".time().")";
                        $result = $xoopsDB->query($sql);
                        if (!$result) {
                            $msgs[] = '&nbsp;&nbsp;'.sprintf(_MD_AM_SQL_NOT_CREATE, $block['name']);echo $sql;
                        } else {
                            if (empty($newbid)) {
                                $newbid = $xoopsDB->getInsertId();
                            }
                            if ($module->getInfo('hasMain')) {
                                $groups = array(XOOPS_GROUP_ADMIN, XOOPS_GROUP_USERS, XOOPS_GROUP_ANONYMOUS);
                            } else {
                                $groups = array(XOOPS_GROUP_ADMIN);
                            }
                            $gperm_handler =& xoops_gethandler('groupperm');
                            foreach ($groups as $mygroup) {
                                $bperm =& $gperm_handler->create();
                                $bperm->setVar('gperm_groupid', $mygroup);
                                $bperm->setVar('gperm_itemid', $newbid);
                                $bperm->setVar('gperm_name', 'block_read');
                                $bperm->setVar('gperm_modid', 1);
                                if (!$gperm_handler->insert($bperm)) {
                                    $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">'._MD_AM_BLOCK_ACCESS_ERROR .sprintf(_MD_AM_BLOCK_ID, "<strong>".$newbid."</strong>"). sprintf(_MD_AM_GROUP_ID, "<strong>".$mygroup."</strong>").'</span>';
                                } else {
                                    $msgs[] = '&nbsp;&nbsp;'._MD_AM_BLOCK_ACCESS.  sprintf(_MD_AM_BLOCK_ID, "<strong>".$newbid."</strong>") . sprintf(_MD_AM_GROUP_ID, "<strong>".$mygroup."</strong>");
                                }
                            }

                            if ($template != '') {
                                $tplfile =& $tplfile_handler->create();
                                $tplfile->setVar('tpl_module', $dirname);
                                $tplfile->setVar('tpl_refid', $newbid);
                                $tplfile->setVar('tpl_source', $content, true);
                                $tplfile->setVar('tpl_tplset', 'default');
                                $tplfile->setVar('tpl_file', $block['template'], true);
                                $tplfile->setVar('tpl_type', 'block');
                                $tplfile->setVar('tpl_lastimported', 0);
                                $tplfile->setVar('tpl_lastmodified', time());
                                $tplfile->setVar('tpl_desc', $block['description'], true);
                                if (!$tplfile_handler->insert($tplfile)) {
                                    $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">'.sprintf(_MD_AM_TEMPLATE_ADD_ERROR, "<strong>".$block['template']."</strong>").'</span>';
                                } else {
                                    $newid = $tplfile->getVar('tpl_id');
                                    $msgs[] = '&nbsp;&nbsp;'.sprintf(_MD_AM_TEMPLATE_ADD_DATA, "<strong>".$block['template']."</strong>");
                                    if ($xoopsConfig['template_set'] == 'default') {
                                        if (!xoops_template_touch($newid)) {
                                            $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">'.sprintf(_MD_AM_TEMPLATE_RECOMPILE_FAILD, "<strong>".$block['template']."</strong>").'</span>';
                                        } else {
                                            $msgs[] = '&nbsp;&nbsp;'.sprintf(_MD_AM_TEMPLATE_RECOMPILE, "<strong>".$block['template']."</strong>");
                                        }
                                    }
                                }
                            }
                            $msgs[] = '&nbsp;&nbsp;'.sprintf(_MD_AM_BLOCK_CREATED, "<strong>".$block['name']."</strong>").sprintf(_MD_AM_BLOCK_ID, "<strong>".$newbid."</strong>");
                            $sql = 'INSERT INTO '.$xoopsDB->prefix('block_module_link').' (block_id, module_id) VALUES ('.$newbid.', -1)';
                            $xoopsDB->query($sql);
                        }
                    }
                }
            }
            $block_arr = XoopsBlock::getByModule($module->getVar('mid'));
            foreach ($block_arr as $block) {
                if (!in_array($block->getVar('show_func'), $showfuncs) || !in_array($block->getVar('func_file'), $funcfiles)) {
                    $sql = sprintf("DELETE FROM %s WHERE bid = %u", $xoopsDB->prefix('newblocks'), $block->getVar('bid'));
                    if(!$xoopsDB->query($sql)) {
                        $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">'.sprintf(_MD_AM_BLOCK_DELETE_ERROR, "<strong>".$block->getVar('name')."</strong>").sprintf(_MD_AM_BLOCK_ID, "<strong>".$block->getVar('bid')."</strong>").'</span>';
                    } else {
                        $msgs[] = '&nbsp;&nbsp;Block <strong>'.$block->getVar('name').' deleted. Block ID: <strong>'.$block->getVar('bid').'</strong>';
                        if ($block->getVar('template') != '') {
                            $tplfiles = $tplfile_handler->find(null, 'block', $block->getVar('bid'));
                            if (is_array($tplfiles)) {
                                $btcount = count($tplfiles);
                                for ($k = 0; $k < $btcount; $k++) {
                                    if (!$tplfile_handler->delete($tplfiles[$k])) {
                                        $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">'._MD_AM_BLOCK_DEPRECATED_ERROR. '(ID: <strong>'.$tplfiles[$k]->getVar('tpl_id').'</strong>)</span>';
                                    } else {
                                        $msgs[] = '&nbsp;&nbsp;'.sprintf(_MD_AM_BLOCK_DEPRECATED, "<strong>".$tplfiles[$k]->getVar('tpl_file')."</strong>");
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        // reset compile_id
        $xoopsTpl->setCompileId();

        // first delete all config entries
        $config_handler =& xoops_gethandler('config');
        $configs = $config_handler->getConfigs(new Criteria('conf_modid', $module->getVar('mid')));
        $confcount = count($configs);
        $config_delng = array();
        if ($confcount > 0) {
            $msgs[] = _MD_AM_MODULE_DATA_DELETE;
            for ($i = 0; $i < $confcount; $i++) {
                if (!$config_handler->deleteConfig($configs[$i])) {
                    $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">'._MD_AM_GONFIG_DATA_DELETE_ERROR. sprintf(_MD_AM_GONFIG_ID, "<strong>".$configs[$i]->getvar('conf_id')."</strong>").'</span>';
                    // save the name of config failed to delete for later use
                    $config_delng[] = $configs[$i]->getvar('conf_name');
                } else {
                    $config_old[$configs[$i]->getvar('conf_name')]['value'] = $configs[$i]->getvar('conf_value', 'N');
                    $config_old[$configs[$i]->getvar('conf_name')]['formtype'] = $configs[$i]->getvar('conf_formtype');
                    $config_old[$configs[$i]->getvar('conf_name')]['valuetype'] = $configs[$i]->getvar('conf_valuetype');
                    $msgs[] = "&nbsp;&nbsp;"._MD_AM_GONFIG_DATA_DELETE. sprintf(_MD_AM_GONFIG_ID, "<strong>".$configs[$i]->getVar('conf_id')."</strong>");
                }
            }
        }

        // now reinsert them with the new settings
        $configs = $module->getInfo('config');
        if ($configs != false) {
            if ($module->getVar('hascomments') != 0) {
                include_once(XOOPS_ROOT_PATH.'/include/comment_constants.php');
                array_push($configs, array('name' => 'com_rule', 'title' => '_CM_COMRULES', 'description' => '', 'formtype' => 'select', 'valuetype' => 'int', 'default' => 1, 'options' => array('_CM_COMNOCOM' => XOOPS_COMMENT_APPROVENONE, '_CM_COMAPPROVEALL' => XOOPS_COMMENT_APPROVEALL, '_CM_COMAPPROVEUSER' => XOOPS_COMMENT_APPROVEUSER, '_CM_COMAPPROVEADMIN' => XOOPS_COMMENT_APPROVEADMIN)));
                array_push($configs, array('name' => 'com_anonpost', 'title' => '_CM_COMANONPOST', 'description' => '', 'formtype' => 'yesno', 'valuetype' => 'int', 'default' => 0));
            }
        } else {
            if ($module->getVar('hascomments') != 0) {
                $configs = array();
                include_once(XOOPS_ROOT_PATH.'/include/comment_constants.php');
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

            //$configs[] = array ('name' => 'notification_enabled', 'title' => '_NOT_CONFIG_ENABLED', 'description' => '_NOT_CONFIG_ENABLEDDSC', 'formtype' => 'yesno', 'valuetype' => 'int', 'default' => 1);
            $configs[] = array ('name' => 'notification_enabled', 'title' => '_NOT_CONFIG_ENABLE', 'description' => '_NOT_CONFIG_ENABLEDSC', 'formtype' => 'select', 'valuetype' => 'int', 'default' => XOOPS_NOTIFICATION_ENABLEBOTH, 'options'=>$options);
            // Event specific notification options
            // FIXME: for some reason the default doesn't come up properly
            //  initially is ok, but not when 'update' module..
            $options = array();
            $categories =& notificationCategoryInfo('',$module->getVar('mid'));
            foreach ($categories as $category) {
                $events =& notificationEvents ($category['name'], false, $module->getVar('mid'));
                foreach ($events as $event) {
                    if (!empty($event['invisible'])) {
                        continue;
                    }
                    $option_name = $category['title'] . ' : ' . $event['title'];
                    $option_value = $category['name'] . '-' . $event['name'];
                    $options[$option_name] = $option_value;
                    //$configs[] = array ('name' => notificationGenerateConfig($category,$event,'name'), 'title' => notificationGenerateConfig($category,$event,'title_constant'), 'description' => notificationGenerateConfig($category,$event,'description_constant'), 'formtype' => 'yesno', 'valuetype' => 'int', 'default' => 1);
                }
            }
            $configs[] = array ('name' => 'notification_events', 'title' => '_NOT_CONFIG_EVENTS', 'description' => '_NOT_CONFIG_EVENTSDSC', 'formtype' => 'select_multi', 'valuetype' => 'array', 'default' => array_values($options), 'options' => $options);
        }

        if ($configs != false) {
            $msgs[] = 'Adding module config data...';
            $config_handler =& xoops_gethandler('config');
            $order = 0;
            foreach ($configs as $config) {
                // only insert ones that have been deleted previously with success
                if (!in_array($config['name'], $config_delng)) {
                    $confobj =& $config_handler->createConfig();
                    $confobj->setVar('conf_modid', $newmid);
                    $confobj->setVar('conf_catid', 0);
                    $confobj->setVar('conf_name', $config['name']);
                    $confobj->setVar('conf_title', $config['title'], true);
                    $confobj->setVar('conf_desc', $config['description'], true);
                    $confobj->setVar('conf_formtype', $config['formtype']);
                    $confobj->setVar('conf_valuetype', $config['valuetype']);
                    if (isset($config_old[$config['name']]['value']) && $config_old[$config['name']]['formtype'] == $config['formtype'] && $config_old[$config['name']]['valuetype'] == $config['valuetype']) {
                        // preserver the old value if any
                        // form type and value type must be the same
                        $confobj->setVar('conf_value', $config_old[$config['name']]['value'], true);
                    } else {
                        $confobj->setConfValueForInput($config['default'], true);

                        //$confobj->setVar('conf_value', $config['default'], true);
                    }
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
                    if (false != $config_handler->insertConfig($confobj)) {
                        //$msgs[] = '&nbsp;&nbsp;Config <strong>'.$config['name'].'</strong> added to the database.'.$confop_msgs;
                        $msgs[] = "&nbsp;&nbsp;".sprintf(_MD_AM_CONFIG_DATA_ADD, "<strong>" . $config['name'] . "</strong>") . $confop_msgs;
                    } else {
                        $msgs[] = '&nbsp;&nbsp;<span style="color:#ff0000;">' . sprintf(_MD_AM_CONFIG_DATA_ADD_ERROR, "<strong>" . $config['name'] . "</strong>") . '</span>';
                    }
                    unset($confobj);
                }
            }
            unset($configs);
        }

        // execute module specific update script if any
        $update_script = $module->getInfo('onUpdate');
        if (false != $update_script && trim($update_script) != '') {
            include_once XOOPS_ROOT_PATH.'/modules/'.$dirname.'/'.trim($update_script);
            if (function_exists('xoops_module_update_'.$dirname)) {
                $func = 'xoops_module_update_'.$dirname;
                if (!$func($module, $prev_version)) {
                    $msgs[] = "<p>".sprintf(_MD_AM_FAILED_EXECUTE, $func)."</p>";
                } else {
                    $msgs[] = "<p>".sprintf(_MD_AM_FAILED_SUCESS, "<strong>".$func."</strong>")."</p>";
                }
            }
        }

        foreach ($msgs as $msg) {
            echo $msg.'<br />';
        }
        echo "<p>".sprintf(_MD_AM_OKUPD, "<strong>".$module->getVar('name')."</strong>")."</p>";
    }
    echo "<br /><a href='admin.php?fct=modulesadmin'>"._MD_AM_BTOMADMIN."</a>";
    xoops_cp_footer();
    // Flush cache files for cpanel GUIs
    xoops_load("cpanel", "system");
    XoopsSystemCpanel::flush();
}

?>