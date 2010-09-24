<?php
/**
 * Xoops-Styles Module based on Ghost Module
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
 * @package          	Xoops-Styles Module
 * @since               2.3.0
 * @author              Burning <http://www.xoopspro.com> & Kris <http://www.xoofoo.org>
 * @version             $Id $
**/

$modversion['name'] = _MI_XOSTYLE_NAME;
$modversion['version'] = 2.0;
$modversion['description'] = _MI_XOSTYLE_DESC;
$modversion['credits'] = "Xoops Design Team";
$modversion['author'] = "Burning & Xoops Design Team";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 1;
$modversion['image'] = "images/xoopsstyles_slogo.png";
$modversion['dirname'] = "xoops-styles";

// Menu Admin
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Menu
$modversion['hasMain'] = 1;
$modversion['sub'][1]['name'] = _MI_XOSTYLE_SMNAME1;
$modversion['sub'][1]['url'] = "index.php";
$modversion['sub'][2]['name'] = _MI_XOSTYLE_SMNAME2;
$modversion['sub'][2]['url'] = "xoopscss.php";
$modversion['sub'][3]['name'] = _MI_XOSTYLE_SMNAME3;
$modversion['sub'][3]['url'] = "smartytag.php";
$modversion['sub'][4]['name'] = _MI_XOSTYLE_SMNAME4;
$modversion['sub'][4]['url'] = "example.php";
$modversion['sub'][5]['name'] = _MI_XOSTYLE_SMNAME5;
$modversion['sub'][5]['url'] = "loremgenerator.php";
// Templates
$modversion['templates'][1]['file'] = 'xostyle_theme.html';
$modversion['templates'][1]['description'] = '';
$modversion['templates'][2]['file'] = 'xostyle_xoopscss.html';
$modversion['templates'][2]['description'] = '';
$modversion['templates'][3]['file'] = 'xostyle_smartytag.html';
$modversion['templates'][3]['description'] = '';
$modversion['templates'][4]['file'] = 'xostyle_example.html';
$modversion['templates'][4]['description'] = '';
$modversion['templates'][5]['file'] = 'xostyle_loremgenerator.html';
$modversion['templates'][5]['description'] = '';
?>