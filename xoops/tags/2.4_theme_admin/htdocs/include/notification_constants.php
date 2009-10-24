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
 *  Xoops Notifications
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Xoop Notifications Defines
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

define('XOOPS_NOTIFICATION_MODE_SENDALWAYS', 0);
define('XOOPS_NOTIFICATION_MODE_SENDONCETHENDELETE', 1);
define('XOOPS_NOTIFICATION_MODE_SENDONCETHENWAIT', 2);
define('XOOPS_NOTIFICATION_MODE_WAITFORLOGIN', 3);

define('XOOPS_NOTIFICATION_METHOD_DISABLE', 0);
define('XOOPS_NOTIFICATION_METHOD_PM', 1);
define('XOOPS_NOTIFICATION_METHOD_EMAIL', 2);

define('XOOPS_NOTIFICATION_DISABLE', 0);
define('XOOPS_NOTIFICATION_ENABLEBLOCK', 1);
define('XOOPS_NOTIFICATION_ENABLEINLINE', 2);
define('XOOPS_NOTIFICATION_ENABLEBOTH', 3);

?>
