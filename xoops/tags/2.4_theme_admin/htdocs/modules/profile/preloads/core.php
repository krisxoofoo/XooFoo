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
 * @since           2.4.0
 * @author          trabis <lusopoemas@gmail.com>
 * @version         $Id$
 */

defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * Profile core preloads
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author          trabis <lusopoemas@gmail.com>
 */
class ProfileCorePreload extends XoopsPreloadItem
{
    function eventCoreUserStart($args)
    {
        $op = 'main';
        if ( isset($_POST['op'])  ) {
            $op = trim($_POST['op']);
        } elseif ( isset($_GET['op'])  ) {
            $op = trim($_GET['op']);
        }
        if ( $op != 'login' && (empty($_GET['from']) || 'profile' != $_GET['from'])  ) {
            if ( ProfileCorePreload::isActive()  ) {
                header("location: ./modules/profile/user.php" . (empty($_SERVER['QUERY_STRING']) ? "" : "?" . $_SERVER['QUERY_STRING']) );
                exit();
            }
        }
    }

    function eventCoreEdituserStart($args)
    {
        if ( ProfileCorePreload::isActive()  ) {
            header("location: ./modules/profile/edituser.php" . (empty($_SERVER['QUERY_STRING']) ? "" : "?" . $_SERVER['QUERY_STRING']) );
            exit();
        }
        }

    function eventCoreLostpassStart($args)
    {
        $email = isset($_GET['email']) ? trim($_GET['email']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : $email;

        if ( ProfileCorePreload::isActive()  ) {
            header("location: ./modules/profile/lostpass.php?email={$email}" . (empty($_GET['code']) ? "" : "&" . $_GET['code']) );
            exit();
        }
    }

    function eventCoreRegisterStart($args)
    {
        if ( ProfileCorePreload::isActive()  ) {
            header("location: ./modules/profile/register.php" . (empty($_SERVER['QUERY_STRING']) ? "" : "?" . $_SERVER['QUERY_STRING']) );
            exit();
        }
    }

    function eventCoreUserinfoStart($args)
    {
        if ( ProfileCorePreload::isActive()  ) {
            header("location: ./modules/profile/userinfo.php" . (empty($_SERVER['QUERY_STRING']) ? "" : "?" . $_SERVER['QUERY_STRING']) );
            exit();
        }
    }

    function isActive()
    {
        $module_handler =& xoops_getHandler('module');
        $module = $module_handler->getByDirname('profile');
        return ($module && $module->getVar('isactive') ) ? true : false;
    }
}
?>