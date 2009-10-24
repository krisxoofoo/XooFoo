<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 *  header.php code for pre-2.0 themes
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @since           2.0.14
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

$xoopsOption['theme_use_smarty'] = 0;

if (file_exists(XOOPS_THEME_PATH . '/' . $xoopsConfig['theme_set'] . '/language/lang-' . $xoopsConfig['language'] . '.php')) {
    include XOOPS_THEME_PATH . '/' . $xoopsConfig['theme_set'] . '/language/lang-' . $xoopsConfig['language'] . '.php';
} elseif (file_exists(XOOPS_THEME_PATH . '/' . $xoopsConfig['theme_set'] . '/language/lang-english.php')) {
    include XOOPS_THEME_PATH . '/' . $xoopsConfig['theme_set'] . '/language/lang-english.php';
}

$config_handler = & xoops_gethandler('config');
$xoopsConfigMetaFooter = $config_handler->getConfigsByCat(XOOPS_CONF_METAFOOTER);

xoops_header(false);
include XOOPS_THEME_PATH . '/' . $xoopsConfig['theme_set'] . '/theme.php';
$xoopsOption['show_rblock'] = (! empty($xoopsOption['show_rblock'])) ? $xoopsOption['show_rblock'] : 0;

// include Smarty template engine and initialize it
require_once XOOPS_ROOT_PATH . '/class/template.php';
$xoopsTpl = new XoopsTpl();
if ($xoopsConfig['debug_mode'] == 3) {
    $xoopsTpl->xoops_setDebugging(true);
}
if ($xoopsUser != '') {
    $xoopsTpl->assign(array(
        'xoops_isuser' => true , 
        'xoops_userid' => $xoopsUser->getVar('uid') , 
        'xoops_uname' => $xoopsUser->getVar('uname') , 
        'xoops_isadmin' => $xoopsUserIsAdmin));
}
$xoopsTpl->assign('xoops_requesturi', htmlspecialchars($GLOBALS['xoopsRequestUri'], ENT_QUOTES));
include XOOPS_ROOT_PATH . '/include/old_functions.php';

if ($xoopsOption['show_cblock'] || (! empty($xoopsModule) && preg_match("/index\.php$/i", xoops_getenv('PHP_SELF')) && $xoopsConfig['startpage'] == $xoopsModule->getVar('dirname'))) {
    $xoopsOption['show_rblock'] = $xoopsOption['show_cblock'] = 1;
}
themeheader($xoopsOption['show_rblock']);
if ($xoopsOption['show_cblock'])
    make_cblock(); //create center block
?>