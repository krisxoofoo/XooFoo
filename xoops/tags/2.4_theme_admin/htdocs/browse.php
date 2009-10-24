<?php
/**
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Access a file inside XOOPS restricted directories
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      core
 * @since           2.4.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 */
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
defined('NWLINE')or define('NWLINE', "\n");

$xoopsOption['nocommon'] = true;
require_once dirname(__FILE__) . DS . 'mainfile.php';

error_reporting(0);

include_once XOOPS_ROOT_PATH . DS . 'include' . DS .'defines.php';
include_once XOOPS_ROOT_PATH . DS . 'include' . DS . 'version.php';
require_once XOOPS_ROOT_PATH . DS . 'class' . DS . 'xoopsload.php';

XoopsLoad::load('xoopskernel');
$xoops = new xos_kernel_Xoops2();
$xoops->pathTranslation();

// Fetch path from query string if path is not set, i.e. through a direct request
if (!isset($path) && !empty($_SERVER['QUERY_STRING'])) {
    $path = $_SERVER['QUERY_STRING'];
    $path = (substr($path, 0, 1) == '/') ? substr($path, 1) : $path;
    $path_type = substr($path, 0, strpos($path, '/'));
    if (!isset($xoops->paths[$path_type])) {
        $path = "XOOPS/" . $path;
        $path_type = "XOOPS";
    }
}

//We are not allowing output of xoops_data
if ($path_type == 'var') {
    return;
}

$file = realpath($xoops->path($path));
$dir = realpath($xoops->paths[$path_type][0]);

//We are not allowing directory travessal either
if (!strstr($file, $dir)) {
    return;
}

//We can't output empty files and php files do not output
if (empty($file) || strpos($file, '.php' ) !== false) {
    return;
}

$file = $xoops->path($path);
// Is there really a file to output?
if (!file_exists($file)) {
    return;
}

$ext = substr($file, strrpos($file, '.') + 1);
$types = include $xoops->path('include/mimetypes.inc.php');
//$content_type = isset($types[$ext]) ? $types[$ext] : 'text/plain';
//Do not output garbage
if (!isset($types[$ext])) {
    return;
}

//Output now
header('Content-type: ' . $types[$ext]);
$handle = fopen($file, "rb");
while (!feof($handle)) {
   $buffer = fread($handle, 4096);
   echo $buffer;
}
fclose($handle);
?>