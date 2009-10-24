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
 *  Xoops Kernel
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      class
 * @since           2.4.0
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id: xoopskernel.php
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * xos_kernel_Xoops2
 *
 * @package
 * @author John Neill <catzwolf@xoops.org>
 * @copyright Copyright (c) 2009
 * @version $Id$
 * @access public
 */
class xos_kernel_Xoops2
{
    var $paths = array('XOOPS' => array(), 'www' => array(), 'var' => array(), 'lib' => array(), 'modules' => array(), 'themes' => array());

    /**
     * Actual Xoops OS
     */
    function xos_kernel_Xoops2()
    {
        $this->paths['XOOPS']   = array(XOOPS_PATH, XOOPS_URL . 'browse.php');
        $this->paths['www']     = array(XOOPS_ROOT_PATH, XOOPS_URL);
        $this->paths['var']     = array(XOOPS_VAR_PATH, null);
        $this->paths['lib']     = array(XOOPS_PATH, XOOPS_URL . 'browse.php');
        $this->paths['modules'] = array(XOOPS_ROOT_PATH . '/modules', XOOPS_URL . '/modules');
        $this->paths['themes']  = array(XOOPS_ROOT_PATH . '/themes', XOOPS_URL . '/themes');
    }

    /**
     * Convert a XOOPS path to a physical one
     */
    function path($url, $virtual = false)
    {
        // removed , $error_type = E_USER_WARNING
        $path = '';
        @list($root, $path) = explode('/', $url, 2);
        if (!isset($this->paths[$root])) {
            list($root, $path) = array('www', $url);
        }
        if (!$virtual) { // Returns a physical path
            $path = $this->paths[$root][0] . '/' . $path;
            $path = str_replace('/', DS, $path);
            return $path;
        }
        return !isset($this->paths[$root][1] ) ? '' : ($this->paths[$root][1] . '/' . $path);
    }

    /**
     * Convert a XOOPS path to an URL
     */
    function url($url )
    {
        return (false !== strpos($url, '://') ? $url : $this->path($url, true));
    }

    /**
     * Build an URL with the specified request params
     */
    function buildUrl( $url, $params = array() )
    {
        if ($url == '.') {
            $url = $_SERVER['REQUEST_URI'];
        }
        $split = explode('?', $url);
        if (count($split) > 1) {
            list($url, $query) = $split;
            parse_str($query, $query);
            $params = array_merge($query, $params);
        }
        if (!empty($params)) {
            foreach ($params as $k => $v) {
                $params[$k] = $k . '=' . rawurlencode($v);
            }
            $url .= '?' . implode('&', $params);
        }
        return $url;
    }

    /**
     * xos_kernel_Xoops2::pathExists()
     *
     * @return
     */
    function pathExists($path, $error_type)
    {
        if (file_exists($path)) {
            return $path;
        } else {
            $GLOBALS['xoopsLogger']->triggerError($path, _XO_ER_FILENOTFOUND, __FILE__, __LINE__, $error_type);
            return false;
        }
    }

    /**
     * xos_kernel_Xoops2::gzipCompression()
     *
     * @return
     */
    function gzipCompression()
    {
        /**
         * Disable gzip compression if PHP is run under CLI mode and needs refactored to work correctly
         */
        if (empty($_SERVER['SERVER_NAME']) || substr(PHP_SAPI, 0, 3) == 'cli') {
            xoops_setConfigOption('gzip_compression', 0);
        }

        if (xoops_getConfigOption('gzip_compression') == 1 && extension_loaded('zlib') && !ini_get( 'zlib.output_compression')) {
            if (@ini_get('zlib.output_compression_level') < 0) {
                ini_set('zlib.output_compression_level', 6);
            }
            ob_start('ob_gzhandler');
        }
    }

    /**
     * xos_kernel_Xoops2::pathTranslation()
     *
     * @return
     */
    function pathTranslation()
    {
        /**
         * *#@+
         * Host abstraction layer
         */
        if (!isset($_SERVER['PATH_TRANSLATED']) && isset($_SERVER['SCRIPT_FILENAME'])) {
            $_SERVER['PATH_TRANSLATED'] =& $_SERVER['SCRIPT_FILENAME']; // For Apache CGI
        } else if (isset($_SERVER['PATH_TRANSLATED']) && !isset($_SERVER['SCRIPT_FILENAME'])) {
            $_SERVER['SCRIPT_FILENAME'] =& $_SERVER['PATH_TRANSLATED']; // For IIS/2K now I think :-(
        }
        /**
         * User Mulitbytes
         */
        if (empty($_SERVER['REQUEST_URI'])) { // Not defined by IIS
            // Under some configs, IIS makes SCRIPT_NAME point to php.exe :-(
            if (!($_SERVER['REQUEST_URI'] = @$_SERVER['PHP_SELF'])) {
                $_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_NAME'];
            }
            if (isset( $_SERVER['QUERY_STRING'])) {
                $_SERVER['REQUEST_URI'] .= '?' . $_SERVER['QUERY_STRING'];
            }
        }
    }

    /**
     * xos_kernel_Xoops2::themeSelect()
     *
     * @return
     */
    function themeSelect()
    {
        if (!empty($_POST['xoops_theme_select'] ) && in_array($_POST['xoops_theme_select'], xoops_getConfigOption('theme_set_allowed'))) {
            xoops_setConfigOption('theme_set', $_POST['xoops_theme_select']);
            $_SESSION['xoopsUserTheme'] = $_POST['xoops_theme_select'];
        } else if (!empty($_SESSION['xoopsUserTheme']) && in_array($_SESSION['xoopsUserTheme'], xoops_getConfigOption('theme_set_allowed'))) {
            xoops_setConfigOption('theme_set', $_SESSION['xoopsUserTheme']);
        }
    }
}

?>