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
 * Xoops Cpanel class
 *
 * @copyright   The XOOPS Project http://sf.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package     system
 * @subpackage  class
 * @since       2.3.0
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @version     $Id$
 */

class XoopsSystemCpanel
{
    /**
     * Reference to GUI object
     */
    var $gui;

    /**
     * Constructer
     *
     */
    function __construct()
    {
        $cpanel = xoops_getConfigOption('cpanel');
        $this->loadGui($cpanel);
    }

    /**
     * Constructor
     *
     * @return XoopsSystemCpanel
     */
    function XoopsSystemCpanel()
    {
        $this->__construct();
    }

    /**
     * Get an instance of the class
     *
     * @return unknown
     */
    function &getInstance()
    {
        static $instance;
        if (!isset($instance)) {
            $class = __CLASS__;
            $instance = new $class();
        }
        return $instance;
    }

    /**
     * Load the Xoops Admin Gui by preference
     *
     * @param string $gui
     */
    function loadGui($gui)
    {
        if (!empty($gui)) {
            $class = 'XoopsGui' . ucfirst($gui);
            if (!class_exists($class)) {
                include_once dirname(__FILE__) . '/gui/' . $gui . '/thadmin.php';
            }
            if (class_exists($class)) {
                if (call_user_func(array($class , 'validate'))) {
                    $this->gui = new $class();
                    $this->gui->foldername = $gui;
                }
            }
        }
        if (!isset($this->gui)) {
            if (file_exists($file = dirname(__FILE__) . '/gui/default/default.php')) {
                include_once $file;
                $this->gui = new XoopsGuiDefault();
                $this->gui->foldername = 'default';
            }
        }
    }

    /**
     * Get a list of Xoops Admin Gui
     *
     * @return unknown
     */
    function getGuis()
    {
        $guis = array();
        xoops_load('XoopsLists');
        $lists = XoopsLists::getDirListAsArray(dirname(__FILE__) . '/gui/');
        foreach(array_keys($lists) as $gui) {
            if (file_exists($file = dirname(__FILE__) . '/gui/' . $gui . '/thadmin.php')) {
                include_once $file;
                if (class_exists($class = 'XoopsGui' . ucfirst($gui))) {
                    if (call_user_func(array($class , 'validate'))) {
                        $guis[$gui] = $gui;
                    }
                }
            }
        }
        return $guis;
    }

    /**
     * Flush the Xoops Admin Gui
     *
     */
    function flush()
    {
        $guis = XoopsSystemCpanel::getGuis();
        foreach($guis as $gui) {
            if ($file = dirname(__FILE__) . '/gui/' . $gui . '/thadmin.php') {
                include_once $file;
                if (class_exists($class = 'XoopsGui' . ucfirst($gui))) {
                    call_user_func(array($class , 'flush'));
                }
            }
        }
    }
}

?>