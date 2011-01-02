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

xoops_loadLanguage("help", $xoopsModule->getVar("dirname", "e"));

$xoopsTpl->display("db:admin/" . $xoopsModule->getVar("dirname") . "_admin_help.html");

//include "footer.php";
?>