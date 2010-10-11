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

$module_dirname = basename( dirname( __FILE__ ) ) ;
//include_once XOOPS_ROOT_PATH . "/modules/$module_dirname/include/functions.php";

$modversion["name"] 	=  _MI_GHOST_NAME;
$modversion["version"] 	= 1.03;
$modversion["description"] 	= _MI_GHOST_DESC;
$modversion["author"] 	= "Kris - http://www.xoofoo.org";
$modversion["credits"]	= "Chewb for idea - Xoops French Community";
$modversion["help"] 		= "";
$modversion["license"] 	= "GPL see LICENSE";
$modversion["official"] 	= 1;
$modversion["image"] 	= "images/" . $module_dirname . "_slogo.png";
$modversion["dirname"] 	= $module_dirname;

// All tables should not have any prefix!
//$modversion["sqlfile"]["mysql"]	= "sql/mysql-" . $xoopsConfig["language"] . ".sql";
//$modversion["tables"][0]        	= $module_dirname . "_firsttable";
//$modversion["tables"][1]       	= $module_dirname . "_secondtable";

// Admin Menu
$modversion["hasAdmin"] 	= 0; // active = 1
//$modversion["adminindex"] = "admin/index.php";
//$modversion["adminmenu"] = "admin/menu.php";

// Menu
$modversion["hasMain"] 		= 1; // active = 1
$modversion["sub"][1]["name"] 	= _MI_GHOST_SMNAME1;
$modversion["sub"][1]["url"] 	= "index.php";

// Templates
$modversion["templates"][1]["file"] 		= $module_dirname . "_index.html";
$modversion["templates"][1]["description"] 	= _MI_GHOST_DSCTPL1;

?>