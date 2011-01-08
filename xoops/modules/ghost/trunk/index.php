<?php
/**
 * Ghost module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright	The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package	Ghost
 * @since		2.3.0
 * @author 	kris <http://www.xoofoo.org>
 * @version	$Id$
**/

if ( !include("../../mainfile.php") ) {
    die("XOOPS root path not defined");
}
$module_dirname = basename( dirname( __FILE__ ) ) ;

global $xoopsModuleConfig;
	$ghost_sitename1 = $xoopsModuleConfig["ghostconf1"];
	$ghost_pagetitle1 = $xoopsModuleConfig["ghostconf2"];
	$ghost_metakeywords1 = $xoopsModuleConfig["ghostconf3"];
	$ghost_metadescription1 = $xoopsModuleConfig["ghostconf4"];
	
$xoopsOption["template_main"] =  $module_dirname ."_index.html";

include(XOOPS_ROOT_PATH."/header.php");

if(isset($xoTheme) && is_object($xoTheme)) {
	$xoopsTpl->assign("xoops_sitename",$ghost_sitename1);
	$xoopsTpl->assign("xoops_pagetitle", $ghost_pagetitle1);
	$xoTheme->addMeta( "meta", "keywords", $ghost_metakeywords1);
	$xoTheme->addMeta( "meta", "description", $ghost_metadescription1);
}

global $xoTheme; 
	$xoTheme->addStyleSheet("modules/" . $module_dirname . "/css/style.css");
	//$xoTheme->addScript(XOOPS_URL . "/browse.php?Frameworks/jquery/jquery.js");
	//$xoTheme->addScript("modules/" . $module_dirname . "/js/script.js");

include(XOOPS_ROOT_PATH."/footer.php");
?>
