<?php
/**
 * Extended User Profile
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         profile
 * @since           2.3.0
 * @author          Jan Pedersen
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 */

/**
 * This is a temporary solution for merging XOOPS 2.0 and 2.2 series
 * A thorough solution will be available in XOOPS 3.0
 *
 */
$modversion = array();
$modversion['name'] = _PROFILE_MI_NAME;
$modversion['version'] = 1.54;
$modversion['description'] = _PROFILE_MI_DESC;
$modversion['author'] = "Jan Pedersen; Taiwen Jiang <phppp@users.sourceforge.net>; alfred <myxoops@t-online.de>; Wishcraft <simon@xoops.org>";
$modversion['credits'] = "Ackbarr, mboyden, marco, mamba, etc.";
$modversion['license'] = "GPL see XOOPS LICENSE";
$modversion['image'] = "images/logo.png";
$modversion['dirname'] = "profile";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/user.php";
$modversion['adminmenu'] = "admin/menu.php";

// Scripts to run upon installation or update
$modversion['onInstall'] = "include/install.php";
$modversion['onUpdate'] = "include/update.php";

// Menu
$modversion['hasMain'] = 1;
if ($GLOBALS['xoopsUser']) {
    $modversion['sub'][1]['name'] = _PROFILE_MI_EDITACCOUNT;
    $modversion['sub'][1]['url'] = "edituser.php";
    $modversion['sub'][2]['name'] = _PROFILE_MI_PAGE_SEARCH;
    $modversion['sub'][2]['url'] = "search.php";
    $modversion['sub'][3]['name'] = _PROFILE_MI_CHANGEPASS;
    $modversion['sub'][3]['url'] = "changepass.php";
}

// Mysql file
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][1] = "profile_category";
$modversion['tables'][2] = "profile_profile";
$modversion['tables'][3] = "profile_field";
$modversion['tables'][4] = "profile_visibility";
$modversion['tables'][5] = "profile_regstep";


// Config items
$modversion['config'][1]['name'] = 'profile_search';
$modversion['config'][1]['title'] = '_PROFILE_MI_PROFILE_SEARCH';
$modversion['config'][1]['description'] = '';
$modversion['config'][1]['formtype'] = 'yesno';
$modversion['config'][1]['valuetype'] = 'int';
$modversion['config'][1]['default'] = 1;

// Templates
$i = 0;

$i++;
$modversion['templates'][$i]['file'] = 'profile_breadcrumbs.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_form.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_admin_fieldlist.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_userinfo.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_admin_categorylist.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_search.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_results.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_admin_visibility.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_admin_steplist.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_register.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_changepass.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_editprofile.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_userform.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_avatar.html';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file'] = 'profile_email.html';
$modversion['templates'][$i]['description'] = '';

?>