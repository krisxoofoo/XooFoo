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
 *  Common Defines Used Within XOOPS
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Defines
 * @since           2.3.3
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id: index.php 0000 15/04/2009 12:52:34
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * Define required Defines (I guess lol )
 */
define('XOOPS_SIDEBLOCK_LEFT', 0);
define('XOOPS_SIDEBLOCK_RIGHT', 1);
define('XOOPS_SIDEBLOCK_BOTH', 2);
define('XOOPS_CENTERBLOCK_LEFT', 3);
define('XOOPS_CENTERBLOCK_RIGHT', 4);
define('XOOPS_CENTERBLOCK_CENTER', 5);
define('XOOPS_CENTERBLOCK_ALL', 6);
define('XOOPS_CENTERBLOCK_BOTTOMLEFT', 7);
define('XOOPS_CENTERBLOCK_BOTTOMRIGHT', 8);
define('XOOPS_CENTERBLOCK_BOTTOM', 9);
define('XOOPS_BLOCK_INVISIBLE', 0);
define('XOOPS_BLOCK_VISIBLE', 1);
define('XOOPS_MATCH_START', 0);
define('XOOPS_MATCH_END', 1);
define('XOOPS_MATCH_EQUAL', 2);
define('XOOPS_MATCH_CONTAIN', 3);
define('XOOPS_THEME_PATH', XOOPS_ROOT_PATH . '/themes');
define('XOOPS_ADMINTHEME_PATH', XOOPS_ROOT_PATH . '/modules/system/class/gui'); // add by kris
define('XOOPS_UPLOAD_PATH', XOOPS_ROOT_PATH . '/uploads');
define('XOOPS_LIBRARY_PATH', XOOPS_ROOT_PATH . '/libraries');
define('XOOPS_THEME_URL', XOOPS_URL . '/themes');
define('XOOPS_ADMINTHEME_URL', XOOPS_URL . '/modules/system/class/gui'); //add by kris
define('XOOPS_UPLOAD_URL', XOOPS_URL . '/uploads');
define('XOOPS_LIBRARY_URL', XOOPS_URL . '/libraries');

// ----- BEGIN: Deprecated, move to template class -----
// define('SMARTY_DIR', XOOPS_ROOT_PATH . '/class/smarty/');
define('XOOPS_COMPILE_PATH', XOOPS_VAR_PATH . '/caches/smarty_compile');
define('XOOPS_CACHE_PATH', XOOPS_VAR_PATH . '/caches/xoops_cache');
// ----- END: Deprecated, move to template class -----

if (!defined('XOOPS_XMLRPC')) {
    define('XOOPS_DB_CHKREF', 1);
} else {
    define('XOOPS_DB_CHKREF', 0);
}

/**
 * User Mulitbytes
 */
// if ( !defined( 'XOOPS_USE_MULTIBYTES' ) ) {
// define( 'XOOPS_USE_MULTIBYTES', 0 );
// }

/*
 * Some language definitions that cannot be translated
 */
define('_XOOPS_FATAL_MESSAGE', "
    This page cannot be displayed due to an internal error.<br/><br/>
    You can provide the following information to the administrators of this site to help them solve the problem:<br /><br />
    Error: %s<br />"
);

define('_XOOPS_FATAL_BACKTRACE', "Backtrace");

?>