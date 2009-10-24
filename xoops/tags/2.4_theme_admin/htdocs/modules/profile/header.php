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

$xoopsOption['pagetype'] = 'user';
include dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'mainfile.php';
$xoopsOption['xoops_module_header'] = '<link rel="stylesheet" type="text/css" href="templates/style.css" />';

$xoBreadcrumbs = array();
$xoBreadcrumbs[] = array("title" => $GLOBALS['xoopsModule']->getVar('name'), "link" => XOOPS_URL . "/modules/" . $GLOBALS['xoopsModule']->getVar('dirname', 'n') . '/');
?>