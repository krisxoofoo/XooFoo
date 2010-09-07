<?php
/**
 * GSearch Module based on Ghost Module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright           The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package          	GSearch Module
 * @since               2.3.0
 * @author              Kris <http://www.xoofoo.org>
 * @version             $Id$
**/
if ( !include("../../mainfile.php") ) {
    die("XOOPS root path not defined");
}
include(XOOPS_ROOT_PATH."/header.php");

global $xoTheme; 
	$xoTheme->addStyleSheet('modules/websearch/css/style.css');
	$xoTheme->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js');
	//$xoTheme->addScript(XOOPS_URL . '/browse.php?Frameworks/jquery/jquery.js');
	$xoTheme->addScript('modules/websearch/js/script.js');

$xoopsOption["template_main"] = "websearch_form.html";

include_once XOOPS_ROOT_PATH."/footer.php";
?>
