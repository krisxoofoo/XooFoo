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
 * CAPTCHA configurations for Image mode
 *
 * Based on DuGris' SecurityImage
 *
 * @copyright       The XOOPS project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         class
 * @subpackage      CAPTCHA
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * XoopsCaptcha
 *
 * @package
 * @author John
 * @copyright Copyright (c) 2009
 * @version $Id$
 * @access public
 */
class XoopsCaptcha
{
    // static $instance;
    var $active;
    var $handler;
    var $path_basic;
    var $path_plugin;
    var $name;
    var $config = array();
    var $message = array(); // Logging error messages

    /**
     * construct
     */
    function __construct()
    {
        xoops_loadLanguage('captcha');
        // Load static configurations
        $this->path_basic = XOOPS_ROOT_PATH . '/class/captcha';
        $this->path_plugin = XOOPS_ROOT_PATH . '/Frameworks/captcha';
        $this->config = $this->loadConfig();
        $this->name = $this->config['name'];
    }

    /**
     * Xoops Captcha Construct
     *
     * @return XoopsCaptcha
     */
    function XoopsCaptcha()
    {
        $this->__construct();
    }

    /**
     * Get Instance
     *
     * @return Instance
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
     * XoopsCaptcha::loadConfig()
     *
     * @param mixed $filename
     * @return
     */
    function loadConfig($filename = null)
    {
        $config = false;
        $filename = empty($filename) ? 'config.php' : 'config.' . $filename . '.php';
        if (file_exists($file = $this->path_basic . '/' . $filename)) {
            $config = include $file;
            if (file_exists($file = $this->path_plugin . '/' . $filename)) {
                $config_plugin = include $file;
                foreach ($config_plugin as $key => $val) {
                    $config[$key] = $val;
                }
            }
        }
        return $config;
    }

    /**
     * XoopsCaptcha::isActive()
     *
     * @return
     */
    function isActive()
    {
        if (isset($this->active)) {
            return $this->active;
        }
        if (!empty($this->config['disabled'])) {
            $this->active = false;
            return $this->active;
        }
        if (!empty($this->config['skipmember']) && is_object($GLOBALS['xoopsUser'])) {
            $this->active = false;
            return $this->active;
        }
        if (!isset($this->handler)) {
            $this->loadHandler();
        }
        $this->active = isset($this->handler);
        return $this->active;
    }

    /**
     * XoopsCaptcha::loadHandler()
     *
     * @param mixed $name
     * @return
     */
    function loadHandler($name = null)
    {
        $name = !empty($name) ? $name : (empty($this->config['mode']) ? 'text' : $this->config['mode']);
        $class = 'XoopsCaptcha' . ucfirst($name);
        if (!empty($this->handler) && get_class($this->handler) == $class) {
            return $this->handler;
        }
        $this->handler = null;
        if (file_exists($file = $this->path_basic . '/' . $name . '.php')) {
            include $file;
        } else {
            if (file_exists($file = $this->path_plugin . '/' . $name . '.php')) {
                include_once $file;
            }
        }
        if (!class_exists($class)) {
            $class = 'text';
            require_once $this->path_basic . '/text.php';
        }
        $handler = new $class($this);
        if ($handler->isActive()) {
            $this->handler = $handler;
        }
        return $this->handler;
    }

    /**
     * XoopsCaptcha::setConfigs()
     *
     * @param mixed $configs
     * @return
     */
    function setConfigs($configs)
    {
        foreach ($configs as $key => $val) {
            $this->setConfig($key, $val);
        }
        return true;
    }

    /**
     * XoopsCaptcha::setConfig()
     *
     * @param mixed $name
     * @param mixed $val
     * @return
     */
    function setConfig($name, $val)
    {
        if (isset($this->$name)) {
            $this->$name = $val;
        } else {
            $this->config[$name] = $val;
        }
        return true;
    }

    /**
     * Verify user submission
     */
    /**
     * XoopsCaptcha::verify()
     *
     * @param mixed $skipMember
     * @param mixed $name
     * @return
     */
    function verify($skipMember = null, $name = null)
    {
        $sessionName = empty($name) ? $this->name : $name;
        $skipMember = ($skipMember === null) ? @$_SESSION["{$sessionName}_skipmember"] : $skipMember;
        $maxAttempts = intval(@$_SESSION["{$sessionName}_maxattempts"]);
        $is_valid = false;
        // Skip CAPTCHA verification if disabled
        if (!$this->isActive()) {
            $is_valid = true;
            // Skip CAPTCHA for member if set
        } else if (is_object($GLOBALS['xoopsUser']) && ! empty($skipMember)) {
            $is_valid = true;
            // Kill too many attempts
        } else if (!empty($maxAttempts) && ! empty($_SESSION["{$sessionName}_attempt"]) > $maxAttempts) {
            $this->message[] = _CAPTCHA_TOOMANYATTEMPTS;
            // Verify the code
        } else if (!empty($_SESSION["{$sessionName}_code"])) {
            $func = !empty($this->config['casesensitive']) ? 'strcmp' : 'strcasecmp';
            $is_valid = !$func(trim(@$_POST[$sessionName]), $_SESSION["{$sessionName}_code"]);
        }
        // if(!empty($maxAttempts)) {
        if (!$is_valid) {
            // Increase the attempt records on failure
            $_SESSION["{$sessionName}_attempt"] ++;
            // Log the error message
            $this->message[] = _CAPTCHA_INVALID_CODE;
        } else {
            // reset attempt records on success
            $_SESSION["{$sessionName}_attempt"] = null;
        }
        $this->destroyGarbage(true);
        return $is_valid;
    }

    /**
     * XoopsCaptcha::getCaption()
     *
     * @return
     */
    function getCaption()
    {
        return defined('_CAPTCHA_CAPTION') ? constant('_CAPTCHA_CAPTION') : '';
    }

    /**
     * XoopsCaptcha::getMessage()
     *
     * @return
     */
    function getMessage()
    {
        return implode('<br />', $this->message);
    }

    /**
     * Destory historical stuff
     */
    function destroyGarbage($clearSession = false)
    {
        $this->loadHandler();
        if (is_callable($this->handler, 'destroyGarbage')) {
            $this->handler->destroyGarbage();
        }
        if ($clearSession) {
            $_SESSION[$this->name . '_name'] = null;
            $_SESSION[$this->name . '_skipmember'] = null;
            $_SESSION[$this->name . '_code'] = null;
            $_SESSION[$this->name . '_maxattempts'] = null;
        }

        return true;
    }

    /**
     * XoopsCaptcha::render()
     *
     * @return
     */
    function render()
    {
        $_SESSION[$this->name . '_name'] = $this->name;
        $_SESSION[$this->name . '_skipmember'] = $this->config['skipmember'];
        $form = '';
        if (!$this->active || empty($this->config['name'])) {
            return $form;
        }
        $maxAttempts = $this->config['maxattempt'];
        if (!empty($maxAttempts)) {
            $_SESSION[$this->name . '_maxattempts'] = $maxAttempts;
        }
        // Failure on too many attempts
        if (!empty($maxAttempts) && @$_SESSION[$this->name . '_attempt'] > $maxAttempts) {
            $form = _CAPTCHA_TOOMANYATTEMPTS;
            // Load the form element
        } else {
            $form = $this->loadForm();
        }
        return $form;
    }

    /**
     * XoopsCaptcha::setCode()
     *
     * @param mixed $code
     * @return
     */
    function setCode($code = null)
    {
        $code = ($code === null) ? $this->handler->getCode() : $code;
        if (!empty($code)) {
            $_SESSION[$this->name . '_code'] = $code;
            return true;
        }
        return false;
    }

    /**
     * XoopsCaptcha::loadForm()
     *
     * @return
     */
    function loadForm()
    {
        $form = $this->handler->render();
        $this->setCode();
        return $form;
    }
}

/**
 * Abstract class for CAPTCHA method
 *
 * Currently there are two types of CAPTCHA forms, text and image
 * The default mode is "text", it can be changed in the priority:
 * 1 If mode is set through XoopsFormCaptcha::setConfig("mode", $mode), take it
 * 2 Elseif mode is set though captcha/config.php, take it
 * 3 Else, take "text"
 */
class XoopsCaptchaMethod
{
    var $handler;
    var $config;
    var $code;

    /**
     * XoopsCaptchaMethod::__construct()
     *
     * @param mixed $handler
     */
    function __construct($handler = null)
    {
        $this->handler = $handler;
    }

    /**
     * XoopsCaptchaMethod::XoopsCaptchaMethod()
     *
     * @param mixed $handler
     */
    function XoopsCaptchaMethod($handler = null)
    {
        $this->__construct($handler);
    }

    /**
     * XoopsCaptchaMethod::isActive()
     *
     * @return
     */
    function isActive()
    {
        return true;
    }

    /**
     * XoopsCaptchaMethod::loadConfig()
     *
     * @param mixed $name
     * @return
     */
    function loadConfig($name)
    {
        $this->config = empty($name) ? $this->handler->config : array_merge($this->handler->config, $this->handler->loadConfig($name));
    }

    /**
     * XoopsCaptchaMethod::getCode()
     *
     * @return
     */
    function getCode()
    {
        return strval($this->code);
    }

    /**
     * XoopsCaptchaMethod::render()
     *
     * @return
     */
    function render()
    {
    }
}

?>