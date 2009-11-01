<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

xoops_load('gui', 'system');

/**
 * Xoops Cpanel Paradigme GUI class
 *
 * @copyright   The XOOPS project http://sf.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package     system
 * @usbpackage  GUI
 * @since       2.4.1
 * @author      Kris <kris@xoofoo.org>
 * @version     $Id
 */

class XoopsGuiParadigme extends XoopsSystemGui
{

    function __construct()
    {

    }

    function XoopsGuiParadigme()
    {
        $this->__construct();
    }

    function validate()
    {
        return true;
    }

    function generateMenu()
    {
        return true;
    }

    function header()
    {
        parent::header();
        global $xoopsConfig, $xoopsUser, $xoopsModule, $xoTheme;
        $tpl =& $this->template;

        $xoTheme->addScript('', '', '
        startList = function() {
/* currentStyle restricts the Javascript to IE only */
	if (document.all &&
 document.getElementById(nav).currentStyle) {  
        var navroot = document.getElementById(nav);
        
        /* Get all the list items within the menu */

        var lis=navroot.getElementsByTagName("li");  
        for (i=0; i<lis.length; i++) {
        
           /* If the li has another menu level */
            if(lis[i].lastChild.tagName=="ul"){
            
                /* assign the function to the li */
             	lis[i].onmouseover=function() {	
                
                   /* display the inner menu */
                   this.lastChild.style.display="block";
                }
                lis[i].onmouseout=function() {   
                   this.lastChild.style.display="none";
                }
            }
        }
    }
}
window.onload= function(){
    /* pass the function the id of the top level il */

    /* remove one, when only using one menu */
    activateMenu("nav"); 
    /*activateMenu("vertnav"); */
}
	        xoopsOnloadEvent(startList);');

        $tpl->assign('lang_cp', _CPHOME);
        $tpl->assign('system_options', _AD_SYSOPTIONS);
        $tpl->assign('lang_banners', _MD_AM_BANS);
        $tpl->assign('lang_blocks', _MD_AM_BKAD);
        $tpl->assign('lang_groups', _MD_AM_ADGS);
        $tpl->assign('lang_images', _MD_AM_IMAGES);
        $tpl->assign('lang_modules', _MD_AM_MDAD);
        $tpl->assign('lang_preferences', _MD_AM_PREF);
        $tpl->assign('lang_smilies', _MD_AM_SMLS);
        $tpl->assign('lang_ranks', _MD_AM_RANK);
        $tpl->assign('lang_edituser', _MD_AM_USER);
        $tpl->assign('lang_finduser', _MD_AM_FINDUSER);
        $tpl->assign('lang_mailuser', _MD_AM_MLUS);
        $tpl->assign('lang_avatars', _MD_AM_AVATARS);
        $tpl->assign('lang_tpls', _MD_AM_TPLSETS);
        $tpl->assign('lang_comments', _MD_AM_COMMENTS);
        $tpl->assign('lang_insmodules', _AD_INSTALLEDMODULES);
        $tpl->assign('xoops_sitename', $xoopsConfig['sitename']);

		//for system overview
        $tpl->assign('lang_overview', _MD_CPANEL_OVERVIEW);
        $tpl->assign('lang_phpextensions', _MD_CPANEL_PHPEXTENSIONS);
        $tpl->assign('lang_about_xoops', _MD_ABOUT);
        $tpl->assign('lang_about_xoops_text', _MD_ABOUT_TEXT);
        $tpl->assign('lang_version', _MD_VERSION);
        $tpl->assign('lang_version_xoops', _MD_VERSION_XOOPS);
        $tpl->assign('lang_version_php', _MD_VERSION_PHP);
        $tpl->assign('lang_version_mysql', _MD_VERSION_MYSQL);
        $tpl->assign('lang_server_api_name', _MD_Server_API);
        $tpl->assign('lang_os', _MD_OS);
        $tpl->assign('lang_xoops_links', _MD_XOOPS_LINKS);

		//start system overview
        $tpl->assign('lang_xoops_version', XOOPS_VERSION);
        $tpl->assign('lang_php_vesion', PHP_VERSION);
        $tpl->assign('lang_mysql_version', mysql_get_server_info());
        $tpl->assign('lang_server_api', PHP_SAPI);
        $tpl->assign('lang_os_name', PHP_OS);
        $tpl->assign('safe_mode', ini_get( 'safe_mode' ) ? 'On' : 'Off');
        $tpl->assign('register_globals', ini_get( 'register_globals' ) ? 'On' : 'Off');
        $tpl->assign('magic_quotes_gpc', ini_get( 'magic_quotes_gpc' ) ? 'On' : 'Off');
        $tpl->assign('allow_url_fopen', ini_get( 'allow_url_fopen' ) ? 'On' : 'Off');
        $tpl->assign('fsockopen', function_exists( 'fsockopen' ) ? 'On' : 'Off');
        $tpl->assign('allow_call_time_pass_reference', ini_get( 'allow_call_time_pass_reference' ) ? 'On' : 'Off');
        $tpl->assign('post_max_size', ini_get( 'post_max_size' ));
        $tpl->assign('max_input_time', ini_get( 'max_input_time' ));
        $tpl->assign('output_buffering', ini_get( 'output_buffering' ));
        $tpl->assign('max_execution_time', ini_get( 'max_execution_time' ));
        $tpl->assign('memory_limit', ini_get( 'memory_limit' ));
        $tpl->assign('file_uploads', ini_get( 'file_uploads' ) ? 'On' : 'Off');
        $tpl->assign('upload_max_filesize', ini_get( 'upload_max_filesize' ));
        $tpl->assign('xoops_sitename', $xoopsConfig['sitename']);
		
        //for xoops links
        $tpl->assign('lang_xoops_xoopsproject', _MD_XOOPSPROJECT);
        $tpl->assign('lang_xoops_localsupport', _MD_LOCALSUPPORT);
        $tpl->assign('lang_xoops_xoopscore', _MD_XOOPSCORE);
        $tpl->assign('lang_xoops_xoopsthems', _MD_XOOPSTHEME);
        $tpl->assign('lang_xoops_xoopswiki', _MD_XOOPSWIKI);
        $tpl->assign('lang_xoops_xoopsbooks', _MD_XOOPSBOOKS);
        $tpl->assign('lang_xgiftshop', _MD_XGIFTSHOP);
        $tpl->assign('lang_xdonations', _MD_XDONATIONS);
        $tpl->assign('lang_xdonations_text', _MD_XDONATIONS_TEXT);
        $tpl->assign('lang_xoops_newmodule', _MD_NEWMODULE);
        $tpl->assign('lang_xoops_xoopsfaq', _MD_XOOPSFAQ);
        $tpl->assign('lang_xoops_codesvn', _MD_CODESVN);
        $tpl->assign('lang_xoops_reportbug', _MD_REPORTBUG);
		
		
		
		
        // ADD MENU *****************************************
        //Add  CONTROL PANEL  Menu  items
        $menu = array();
        $menu[0]['link'] = XOOPS_URL;
        $menu[0]['title'] = _YOURHOME;
        $menu[0]['absolute'] = 1;
        $menu[1]['link'] = XOOPS_URL . '/admin.php?xoopsorgnews=1';
        $menu[1]['title'] = 'XOOPS News';
        $menu[1]['absolute'] = 1;
        $menu[1]['icon'] = XOOPS_ADMINTHEME_URL . '/paradigme/img/xoops.png';
        $menu[2]['link'] = XOOPS_URL . '/user.php?op=logout';
        $menu[2]['title'] = _LOGOUT;
        $menu[2]['absolute'] = 1;
        $menu[2]['icon'] = XOOPS_ADMINTHEME_URL . '/paradigme/img/logout.png';
        $tpl->append('navitems', array('link' => XOOPS_URL . '/admin.php', 'text' => _CPHOME, 'menu' => $menu));
        //add SYSTEM  Menu items
        include dirname(__FILE__) . '/menu.php';
        $system_options = $adminmenu;
        foreach (array_keys($adminmenu) as $item) {
            $system_options[$item]['link'] = empty($adminmenu[$item]['absolute']) ? XOOPS_URL . '/modules/system/' . $adminmenu[$item]['link'] : $adminmenu[$item]['link'];
            $system_options[$item]['icon'] = empty($adminmenu[$item]['icon_small']) ? '' : XOOPS_ADMINTHEME_URL . '/paradigme/' . $adminmenu[$item]['icon_small'];
            unset($system_options[$item]['icon_small']);
        }
        $tpl->append('navitems', array('link' => XOOPS_URL.'/modules/system/admin.php', 'text' => _AD_SYSOPTIONS, 'menu' => $system_options));

        if (empty($xoopsModule) || 'system' == $xoopsModule->getVar('dirname', 'n')) {
            $modpath = XOOPS_URL . '/admin.php';
            $modname = _AD_SYSOPTIONS;
            $modid = 1;
            $moddir = 'system';
            $mod_options = $adminmenu;
            foreach (array_keys($mod_options) as $item) {
                $mod_options[$item]['link'] = empty($mod_options[$item]['absolute']) ? XOOPS_URL . '/modules/system/' . $mod_options[$item]['link'] : $mod_options[$item]['link'];
                $mod_options[$item]['icon'] = empty($mod_options[$item]['icon']) ? '' : XOOPS_ADMINTHEME_URL . '/paradigme/' . $mod_options[$item]['icon'];
                unset($mod_options[$item]['icon_small']);
            }
        } else {
            $moddir = $xoopsModule->getVar('dirname', 'n');
            $modpath = XOOPS_URL . '/modules/' . $moddir;
            $modname = $xoopsModule->getVar('name');
            $modid = $xoopsModule->getVar('mid');

            $mod_options = $xoopsModule->getAdminMenu();
            foreach (array_keys($mod_options) as $item) {
                $mod_options[$item]['link'] = empty($mod_options[$item]['absolute']) ? XOOPS_URL . '/modules/'.$moddir.'/' . $mod_options[$item]['link'] : $mod_options[$item]['link'];
                $mod_options[$item]['icon'] = empty($mod_options[$item]['icon']) ? '' : XOOPS_URL . '/modules/'.$moddir.'/' . $mod_options[$item]['icon'];
            }
        }

        $tpl->assign('mod_options', $mod_options);
        $tpl->assign('modpath', $modpath);
        $tpl->assign('modname', $modname);
        $tpl->assign('modid', $modid);
        $tpl->assign('moddir', $moddir);

        // add MODULES  Menu items
        $module_handler =& xoops_gethandler('module');
        $criteria = new CriteriaCompo();
        $criteria->add(new Criteria('hasadmin', 1));
        $criteria->add(new Criteria('isactive', 1));
        $criteria->setSort('mid');
        $mods = $module_handler->getObjects($criteria);

        $menu = array();
        $moduleperm_handler =& xoops_gethandler('groupperm');
        foreach ($mods as $mod) {
            $rtn = array();
            $sadmin = $moduleperm_handler->checkRight('module_admin', $mod->getVar('mid'), $xoopsUser->getGroups());
            if ($sadmin) {
                $info = $mod->getInfo();
                if (!empty($info['adminindex'])) {
                    $rtn['link'] = XOOPS_URL . '/modules/'. $mod->getVar('dirname', 'n') . '/' . $info['adminindex'];
                } else {
                    $rtn['link'] = XOOPS_URL . '/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod=' . $mod->getVar('mid');
                }
                $rtn['title'] = $mod->name();
                $rtn['absolute'] = 1;
				
                $rtn['url'] = XOOPS_URL . '/modules/'. $mod->getVar('dirname', 'n') . '/'; //add for sub menus
                $modOptions = $mod->getAdminMenu();                                        //add for sub menus
                $rtn['options'] = $modOptions;                                             //add for sub menus
				
                if (isset($info['icon']) && $info['icon'] != '' ) {
                    $rtn['icon'] = XOOPS_URL . '/modules/' . $mod->getVar('dirname', 'n') . '/' . $info['icon'];
                }
            }
            $menu[] = $rtn;
        }
        $tpl->append('navitems', array('link' => XOOPS_URL . '/modules/system/admin.php?fct=modulesadmin', 'text' => _MD_AM_MDAD, 'dir' => $mod->getVar('dirname', 'n'), 'menu' => $menu));

        //add OPTIONS/Links Menu Items
        $menu = array();
        $menu[] = array(
            'link'      => 'http://www.xoops.org',
            'title'     => 'XOOPS',
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/paradigme/icons/xoops.png');
        $menu[] = array(
            'link'      => 'http://www.xoops.org/modules/library/',
            'title'     => _AD_XOOPSTHEMES,
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/paradigme/icons/tweb.png');
        $menu[] = array(
            'link'      => 'http://www.xoops.org/modules/repository/',
            'title'     => _MD_AM_MDAD,
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/paradigme/icons/xoops.png');
        $menu[] = array(
            'link'      => 'http://sourceforge.net/projects/xoops/',
            'title'     => 'Sourceforge',
            'absolute'  => 1);

        $tpl->append('navitems', array('link' => XOOPS_URL . '/admin.php','text' => _AD_INTERESTSITES, 'menu' => $menu));
        
		//add OPTIONS/links for local support
        if (file_exists($file = XOOPS_ADMINTHEME_PATH . '/paradigme/language/' . $xoopsConfig['language'] . '/localsupport.php' )) {
            $links = include XOOPS_ADMINTHEME_PATH . '/paradigme/language/' . $xoopsConfig['language'] . '/localsupport.php';
            if ( count($links) > 0 ) {
                $tpl->append('navitems', array('link' => XOOPS_URL . '/admin.php','text' => _AD_LOCALSUPPORT, 'menu' => $links));
            }
        }

        if (is_object($xoopsModule) || !empty($_GET['xoopsorgnews'])) {
                return;
        }
        /*if (is_object($xoopsModule) || !empty($_GET['xoopsorgnews'])) {
            return;
        }*/

        foreach ($mods as $mod) {
            $rtn = array();
            $moduleperm_handler =& xoops_gethandler('groupperm');
            $sadmin = $moduleperm_handler->checkRight('module_admin', $mod->getVar('mid'), $xoopsUser->getGroups());
            if ($sadmin) {
                $info = $mod->getInfo();
                if (!empty($info['adminindex'])) {
                    $rtn['link'] = XOOPS_URL . '/modules/'. $mod->getVar('dirname', 'n') . '/' . $info['adminindex'];
                } else {
                    $rtn['link'] = XOOPS_URL . '/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod=' . $mod->getVar('mid');
                }
                $rtn['title'] = $mod->getVar('name');
                $rtn['absolute'] = 1;
                if (isset($info['icon_big'])) {
                    $rtn['icon'] = XOOPS_URL . '/modules/' . $mod->getVar('dirname', 'n') . '/' . $info['icon_big'];
                } elseif (isset($info['image'])) {
                    $rtn['icon'] = XOOPS_URL . '/modules/' . $mod->getVar('dirname', 'n') . '/' . $info['image'];
                }
            }
            $tpl->append('modules', $rtn);
        }
    }
}

?>