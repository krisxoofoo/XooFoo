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
 * Xoops Cpanel GUI abstract class
 *
 * @copyright   The XOOPS project http://sf.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package     system
 * @subpackage  class
 * @since       2.3.0
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @version     $Id$
 */

class XoopsSystemGui
{
    /**
     * Reference to template object
     */
    var $template;

    /**
     * Holding navigation
     */
    var $navigation;

    /**
     * Holding gui folder name
     */
    var $foldername;

    /**
     * Reference for Theme
     */
    var $xoTheme;


    function header()
    {
        global $xoops, $xoopsConfig, $xoopsModule, $xoopsModuleConfig, $xoopsUser, $xoopsOption, $xoTheme, $xoopsTpl;
        ob_start();

        xoops_loadLanguage('admin', 'system');
        xoops_loadLanguage('cpanel', 'system');
        xoops_loadLanguage('modinfo', 'system');

        $xoopsLogger =& XoopsLogger::getInstance();
        $xoopsLogger->stopTime('Module init');
        $xoopsLogger->startTime('XOOPS output init');

        if (!headers_sent()) {
            header('Content-Type:text/html; charset=' . _CHARSET);
            header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header('Cache-Control: no-store, no-cache, must-revalidate');
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
        }

        require_once XOOPS_ROOT_PATH . '/class/template.php';
        require_once XOOPS_ROOT_PATH . '/class/theme.php';

        $adminThemeFactory = new xos_opal_AdminThemeFactory();
        $this->xoTheme =& $adminThemeFactory->createInstance(array(
            'folderName' => $this->foldername,
            'themesPath' => 'modules/system/class/gui'));

        $this->xoTheme->loadLocalization('admin');
        $this->template =& $this->xoTheme->template;

        $GLOBALS['xoTheme'] =& $this->xoTheme;
        $GLOBALS['adminTpl'] =& $this->xoTheme->template;

        $xoopsLogger->stopTime('XOOPS output init');
        $xoopsLogger->startTime('Module display');

        $xoopsPreload =& XoopsPreload::getInstance();
        $xoopsPreload->triggerEvent('system.class.gui.header');
    }

    function footer()
    {
        global $xoopsConfig, $xoopsOption, $xoopsTpl, $xoTheme;

        $xoopsLogger =& XoopsLogger::getInstance();
        $xoopsLogger->stopTime('Module display');

        if (!headers_sent()) {
            header('Content-Type:text/html; charset='._CHARSET);
            header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
            header('Cache-Control: private, no-cache');
            header('Pragma: no-cache');
        }

        //@internal: using global $xoTheme dereferences the variable in old versions, this does not
        if (!isset($xoTheme)) $xoTheme =& $GLOBALS['xoTheme'];

        $xoTheme->render();
        $xoopsLogger->stopTime();
        ob_end_flush();
    }

    function validate() {}
    function flush() {}

    function &getInstance()
    {
        static $instance;
        if (!isset($instance)) {
            $class = __CLASS__;
            $instance = new $class();
        }
        return $instance;
    }
}

?>