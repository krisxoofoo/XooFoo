<?php
/**
 * SpamReferer module
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
 * @package	SpamReferer
 * @since		2.3.0
 * @author 	kris <http://www.xoofoo.org>
 * @version	$Id$
**/

include "header.php";
		
include_once XOOPS_ROOT_PATH."/modules/" . $xoopsModule->getVar("dirname") . "/class/menu.php";

$menu = new spamrefererMenu();
$menu->addItem("about",       _AM_SPAMREFERER_MANAGER_ABOUT,       "about.php");
$menu->addItem("help",       _AM_SPAMREFERER_MANAGER_HELP,       "help.php");
$xoopsTpl->assign("spamreferer_menu", $menu->_items );

$admin = new spamrefererMenu();
$admin->addItem("update",      _AM_SPAMREFERER_MANAGER_UPDATE,      "../../system/admin.php?fct=modulesadmin&op=update&module=spamreferer" );
$admin->addItem("preferences", _AM_SPAMREFERER_MANAGER_PREFERENCES, "../../system/admin.php?fct=preferences&amp;op=showmod&amp;&confcat_id=1&amp;mod=".$xoopsModule->getVar("mid") );
$xoopsTpl->assign($xoopsModule->getVar("dirname") . "_admin", $admin->_items );

$xoopsTpl->assign("module_dirname",         $xoopsModule->getVar("dirname") );

$xoopsTpl->display("db:admin/" . $xoopsModule->getVar("dirname") . "_admin_index.html");

include "footer.php";
?>