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
 *  Xoops Index
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @since           2.0.0
 * @author          Kazumi Ono <webmaster@myweb.ne.jp>
 * @author          Skalpa Keo <skalpa@xoops.org>
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 */
include dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mainfile.php';

//check if start page is defined
if (isset($xoopsConfig['startpage']) && $xoopsConfig['startpage'] != "" && $xoopsConfig['startpage'] != "--") {
    // Temporary solution for start page redirection
    define("XOOPS_STARTPAGE_REDIRECTED", 1);

    global $xoopsModuleConfig;
    $module_handler =& xoops_gethandler('module');
    $xoopsModule =& $module_handler->getByDirname($xoopsConfig['startpage']);
    if (!$xoopsModule || !$xoopsModule->getVar('isactive')) {
        include_once $GLOBALS['xoops']->path('header.php');
        echo "<h4>" . _MODULENOEXIST . "</h4>";
        include_once $GLOBALS['xoops']->path('footer.php');
        exit();
    }
    $moduleperm_handler =& xoops_gethandler('groupperm');
    if ($xoopsUser) {
        if (!$moduleperm_handler->checkRight('module_read', $xoopsModule->getVar('mid'), $xoopsUser->getGroups())) {
            redirect_header(XOOPS_URL, 1, _NOPERM, false);
            exit();
        }
        $xoopsUserIsAdmin = $xoopsUser->isAdmin($xoopsModule->getVar('mid'));
    } else {
        if (!$moduleperm_handler->checkRight('module_read', $xoopsModule->getVar('mid'), XOOPS_GROUP_ANONYMOUS)) {
            redirect_header(XOOPS_URL . "/user.php", 1, _NOPERM);
            exit();
        }
    }
    if ($xoopsModule->getVar('hasconfig') == 1 || $xoopsModule->getVar('hascomments') == 1 || $xoopsModule->getVar('hasnotification') == 1) {
        $xoopsModuleConfig = $config_handler->getConfigsByCat(0, $xoopsModule->getVar('mid'));
    }

    chdir('modules/' . $xoopsConfig['startpage'] . '/');
    xoops_loadLanguage('main', $xoopsModule->getVar('dirname', 'n'));
    $parsed = parse_url(XOOPS_URL);
    $url = isset($parsed['scheme']) ? $parsed['scheme'] . '://' : 'http://';
    if (isset($parsed['host'])) {
        $url .= $parsed['host'];
        if (isset($parsed['port'])) {
            $url .= ':' . $parsed['port'];
        }
    } else {
        $url .= $_SERVER['HTTP_HOST'];
    }

    $_SERVER['REQUEST_URI'] = substr(XOOPS_URL, strlen($url)) . '/modules/' . $xoopsConfig['startpage'] . '/index.php';
    include $GLOBALS['xoops']->path('modules/' . $xoopsConfig['startpage'] . '/index.php');
    exit();
} else {
    $xoopsOption['show_cblock'] = 1;
    $xoopsOption['template_main'] = "db:system_homepage.html";
    include $GLOBALS['xoops']->path('header.php');
    include $GLOBALS['xoops']->path('footer.php');
}
?>