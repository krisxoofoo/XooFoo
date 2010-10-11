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

$xoopsOption["template_main"] =  $module_dirname ."_index.html";

include(XOOPS_ROOT_PATH."/header.php");

if(isset($xoTheme) && is_object($xoTheme)) {
   $xoopsTpl->assign("xoops_sitename","Put here the page title, visible at the top of the browser");
   $xoopsTpl->assign("xoops_pagetitle", "Put here your page title");
   $xoTheme->addMeta( "meta", "keywords", "Put here keyword, keyword1, keyword2, keyword3, etc.");
   $xoTheme->addMeta( "meta", "description", "Put here the page description line that often appears in search results.");
}
global $xoTheme; 
	$xoTheme->addStyleSheet("modules/" . $module_dirname . "/css/style.css");
	//$xoTheme->addScript(XOOPS_URL . "/browse.php?Frameworks/jquery/jquery.js");
	//$xoTheme->addScript("modules/" . $module_dirname . "/js/script.js");

include(XOOPS_ROOT_PATH."/footer.php");
?>
