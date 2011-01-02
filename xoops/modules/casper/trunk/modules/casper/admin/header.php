<?php
/**
 * Casper module
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
 * @package	Casper
 * @since		2.3.0
 * @author 	kris <http://www.xoofoo.org>
 * @version	$Id: xoops_version.php 273 2010-05-14 14:40:51Z kris_fr $
**/

include "../../../include/cp_header.php";
$myts =& MyTextSanitizer::getInstance();

if ( $xoopsUser ) {
    $xoopsModule = XoopsModule::getByDirname( "casper");
    if ( !$xoopsUser->isAdmin($xoopsModule->mid()) ) {
        redirect_header(XOOPS_URL."/",3,_NOPERM);
        exit();
    }
} else {
    redirect_header(XOOPS_URL."/",3,_NOPERM);
    exit();
}

require_once XOOPS_ROOT_PATH . "/class/template.php";

if (!isset($xoopsTpl)) {$xoopsTpl = new XoopsTpl();}
$xoopsTpl->xoops_setCaching(0);

xoops_cp_header();

// Define Stylesheet and JScript
$xoTheme->addStylesheet( XOOPS_URL . "/modules/" . $xoopsModule->getVar("dirname") . "/css/admin.css" );
//$xoTheme->addScript("browse.php?Frameworks/jquery/jquery.js");
//$xoTheme->addScript("browse.php?modules/" . $xoopsModule->getVar("dirname") . "/js/admin.js");

?>