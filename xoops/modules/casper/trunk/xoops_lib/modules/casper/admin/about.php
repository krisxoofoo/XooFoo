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
 * @author 	Dugris <http://www.dugris.info>
 * @version	$Id: xoops_version.php 273 2010-05-14 14:40:51Z kris_fr $
**/

//include "header.php";

$module_info =& $module_handler->get( $xoopsModule->getVar("mid") );

$xoopsTpl->assign("module_name",            $xoopsModule->getVar("name") );
$xoopsTpl->assign("module_dirname",         $xoopsModule->getVar("dirname") );
$xoopsTpl->assign("module_image",           $module_info->getInfo("image") );
$xoopsTpl->assign("module_version",         $module_info->getInfo("version") );
//$xoopsTpl->assign("module_release",         $module_info->getInfo("release") );
$xoopsTpl->assign("module_author",          $module_info->getInfo("author") );
$xoopsTpl->assign("module_credits",         $module_info->getInfo("credits") );
$xoopsTpl->assign("module_license_url",     $module_info->getInfo("license_url") );
$xoopsTpl->assign("module_license",         $module_info->getInfo("license") );
$xoopsTpl->assign("module_status",          $module_info->getInfo("module_status") );
$xoopsTpl->assign("module_website_url",     $module_info->getInfo("module_website_url") );
$xoopsTpl->assign("module_website_name",    $module_info->getInfo("module_website_name") );
$xoopsTpl->assign("author_website_url",     $module_info->getInfo("author_website_url") );
$xoopsTpl->assign("author_website_name",    $module_info->getInfo("author_website_name") );

if ( is_readable( $changelog = XOOPS_ROOT_PATH . "/modules/" . $xoopsModule->getVar("dirname") . "/docs/changelog.txt" ) ){
    $xoopsTpl->assign("changelog",          implode("<br />", file( $changelog ) ) );
}

$xoopsTpl->display("db:admin/" . $xoopsModule->getVar("dirname") . "_admin_about.html");

//include "footer.php";
?>