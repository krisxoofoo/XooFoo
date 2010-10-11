<?php
/**
 * Nullos module
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
 * @author              Kris - http://www.xoofoo.org
 * @version             $Id: xoops_version.php 47 2009-08-15 13:26:01Z DuGris $
**/

$module_dirname = basename( dirname( __FILE__ ) ) ;

$modversion["name"] = _MI_NULLOS_NAME;
$modversion["version"] = 1.0;
$modversion["description"] = _MI_NULLOS_DESC;
$modversion["author"] = "kris - http://www.xoofoo.org";
$modversion["help"] = "";
$modversion["license"] = "GPL see LICENSE";
$modversion["official"] = 1;
$modversion["image"] = "images/" . $module_dirname . "_slogo.png";
$modversion["dirname"] = $module_dirname;
// Menu Admin
$modversion["hasAdmin"] = 1;
// Menu Main
$modversion["hasMain"] = 0;
// Search option
$modversion["hasSearch"] = 0;
// Templates
$modversion["templates"][1]["file"] = $module_dirname . "_302.html";
$modversion["templates"][1]["description"] =_MI_NULLOS_TPL1;
$modversion["templates"][2]["file"] = $module_dirname . "_400.html";
$modversion["templates"][2]["description"] =_MI_NULLOS_TPL2;
$modversion["templates"][3]["file"] = $module_dirname . "_401.html";
$modversion["templates"][3]["description"] =_MI_NULLOS_TPL3;
$modversion["templates"][4]["file"] = $module_dirname . "_403.html";
$modversion["templates"][4]["description"] =_MI_NULLOS_TPL4;
$modversion["templates"][5]["file"] = $module_dirname . "_404.html";
$modversion["templates"][5]["description"] =_MI_NULLOS_TPL5;
$modversion["templates"][6]["file"] = $module_dirname . "_405.html";
$modversion["templates"][6]["description"] =_MI_NULLOS_TPL6;
$modversion["templates"][7]["file"] = $module_dirname . "_408.html";
$modversion["templates"][7]["description"] =_MI_NULLOS_TPL7;
$modversion["templates"][8]["file"] = $module_dirname . "_409.html";
$modversion["templates"][8]["description"] =_MI_NULLOS_TPL8;
$modversion["templates"][9]["file"] = $module_dirname . "_500.html";
$modversion["templates"][9]["description"] =_MI_NULLOS_TPL9;
$modversion["templates"][10]["file"] = $module_dirname . "_503.html";
$modversion["templates"][10]["description"] =_MI_NULLOS_TPL10;
?>