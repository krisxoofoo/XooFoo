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
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      model
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

include_once XOOPS_ROOT_PATH . '/kernel/object.php';
/**
 * Factory for object handlers
 *
 * @author Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright copyright &copy; The XOOPS project
 * @package kernel
 */
class XoopsModelFactory
{
    /**
     * static private
     */
    var $handlers = array();

    /**
     * XoopsModelFactory::__construct()
     */
    function __construct()
    {
    }

    /**
     * XoopsModelFactory::XoopsModelFactory()
     */
    function XoopsModelFactory()
    {
    }

    /**
     * Get singleton instance
     *
     * @access public
     */
    function getInstance()
    {
        static $instance;
        if (!isset($instance)) {
            $class = __CLASS__;
            $instance = new $class();
        }
        return $instance;
    }

    /**
     * Load object handler
     *
     * @access public
     * @param object $ohandler reference to {@link XoopsPersistableObjectHandler}
     * @param string $name handler name
     * @param mixed $args args
     * @return object of handler
     */
    function loadHandler($ohander, $name, $args = null)
    {
        static $handlers;
        if (!isset($handlers[$name])) {
            if (file_exists($file = dirname(__FILE__) . '/' . $name . '.php')) {
                include_once $file;
                $className = 'XoopsModel' . ucfirst($name);
                $handler = new $className();
            } else if (xoops_load('model', 'framework')) {
                $handler = XoopsModel::loadHandler($name);
            }
            if (!is_object($handler)) {
                trigger_error('Handler not found in file ' . __FILE__ . 'at line ' . __LINE__, E_USER_WARNING);
                return null;
            }
            $handlers[$name] = $handler;
        }
        $handlers[$name]->setHandler($ohander);
        if (!empty($args) && is_array($args) && is_a($handlers[$name], 'XoopsModelAbstract')) {
            $handlers[$name]->setVars($args);
        }
        return $handlers[$name];
    }
}

/**
 * abstract class object handler
 *
 * @author Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright copyright &copy; The XOOPS project
 * @package kernel
 */
class XoopsModelAbstract
{
    /**
     * holds referenced to handler object
     *
     * @var object
     * @param object $ohandler reference to {@link XoopsPersistableObjectHandler}
     * @access protected
     */
    var $handler;

    /**
     * constructor
     *
     * normally, this is called from child classes only
     *
     * @access protected
     */
    function __construct($args = null, $handler = null)
    {
        $this->setHandler($handler);
        $this->setVars($args);
    }

    /**
     * XoopsModelAbstract::XoopsObjectAbstract()
     *
     * @param mixed $args
     * @param mixed $handler
     * @return
     */
    function XoopsObjectAbstract($args = null, $handler = null)
    {
        $this->__construct($args, $handler);
    }

    /**
     * XoopsModelAbstract::setHandler()
     *
     * @param mixed $handler
     * @return
     */
    function setHandler($handler)
    {
        if (is_object($handler) && is_a($handler, 'XoopsPersistableObjectHandler')) {
            $this->handler =& $handler;
            return true;
        }
        return false;
    }

    /**
     * XoopsModelAbstract::setVars()
     *
     * @param mixed $args
     * @return
     */
    function setVars($args)
    {
        if (!empty($args) && is_array($args)) {
            foreach ($args as $key => $value) {
                $this->$key = $value;
            }
        }
        return true;
    }
}

?>