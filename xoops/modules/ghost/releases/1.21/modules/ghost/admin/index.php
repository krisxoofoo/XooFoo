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
 * @version	$Id: xoops_version.php 273 2010-05-14 14:40:51Z kris_fr $
**/

include "header.php";
		
include_once XOOPS_ROOT_PATH."/modules/" . $xoopsModule->getVar("dirname") . "/class/menu.php";

$menu = new ghostMenu();
$menu->addItem("example",  _AM_GHOST_MANAGER_EXAMPLE,  "example.php" );
$menu->addItem("about",       _AM_GHOST_MANAGER_ABOUT,       "about.php");
$menu->addItem("help",       _AM_GHOST_MANAGER_HELP,       "help.php");
$xoopsTpl->assign("ghost_menu", $menu->_items );

$admin = new ghostMenu();
$admin->addItem("update",      _AM_GHOST_MANAGER_UPDATE,      "../../system/admin.php?fct=modulesadmin&op=update&module=ghost" );
$admin->addItem("preferences", _AM_GHOST_MANAGER_PREFERENCES, "../../system/admin.php?fct=preferences&amp;op=showmod&amp;&confcat_id=1&amp;mod=".$xoopsModule->getVar("mid") );
$xoopsTpl->assign($xoopsModule->getVar("dirname") . "_admin", $admin->_items );

$xoopsTpl->assign("module_dirname",         $xoopsModule->getVar("dirname") );

$xoopsTpl->display("db:admin/" . $xoopsModule->getVar("dirname") . "_admin_index.html");

include "footer.php";
?>