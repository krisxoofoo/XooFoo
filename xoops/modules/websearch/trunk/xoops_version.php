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
 * @copyright           The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package             Ghost
 * @since               2.3.0
 * @author              Kris <http://www.xoofoo.org>
 * @version             $Id$
**/
$module_dirname = basename( dirname( __FILE__ ) ) ;

$modversion["name"] =  _MI_WEBSEARCH_NAME;
$modversion["version"] = 1.1;
$modversion["description"] = _MI_WEBSEARCH_DESC;
$modversion["credits"] = "Tzine (http://tutorialzine.com) and Google";
$modversion["author"] = "kris - http://www.xoofoo.org";
$modversion["help"] = "";
$modversion["license"] = "GPL see LICENSE";
$modversion["official"] = 1;
$modversion["image"] = "img/" . $module_dirname . "_slogo.png";
$modversion["dirname"] = $module_dirname;

// Menu
$modversion["hasAdmin"] = 0;

// Menu
$modversion["hasMain"] = 1;

// Search option
$modversion["hasSearch"] = 0;
// Templates
$modversion["templates"][1]["file"] = $module_dirname . "_form.html";
$modversion["templates"][1]["description"] = "";

?>