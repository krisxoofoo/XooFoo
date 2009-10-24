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
 * Xoops Editor usage guide
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         class
 * @subpackage      editor
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

if (! function_exists('xoopseditor_get_rootpath')) {
    function xoopseditor_get_rootpath()
    {
        return XOOPS_ROOT_PATH . '/class/xoopseditor';
    }
}
if (defined('XOOPS_ROOT_PATH')) {
    return true;
}

$mainfile = dirname(dirname(dirname(__FILE__))) . '/mainfile.php';
if (DIRECTORY_SEPARATOR != '/') {
    $mainfile = str_replace(DIRECTORY_SEPARATOR, '/', $mainfile);
}
include $mainfile;
return defined('XOOPS_ROOT_PATH');

?>