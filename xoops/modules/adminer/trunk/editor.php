<?php
/**
 * Adminer Module based on Ghost Module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright           The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package          	Adminer Module
 * @since               2.3.0
 * @author              Kris <http://www.xoofoo.org>
 * @version             $Id $
**/

// connect xoops database 
if ( !include("../../mainfile.php") ) {
    die("XOOPS root path not defined");
}
include(XOOPS_ROOT_PATH."/header.php");
/*function adminer_object() {
    class AdminerSoftware extends Adminer {
        function name() {
            return 'Software';
        }
        function permanentLogin() {
            return "89a1da3abdfc740861cee2c489745085";
        }
        function credentials() {
            return array( XOOPS_DB_HOST,XOOPS_DB_USER,XOOPS_DB_PASS);
        }
        function database() {
            return XOOPS_DB_NAME;
        }
        function login($login, $password) {
            return ($login == XOOPS_DB_USER && $password == XOOPS_DB_PASS);
        }
    }
    return new AdminerSoftware;
}*/
if ( !is_object($xoopsUser) || !is_object($xoopsModule) || !$xoopsUser->isAdmin($xoopsModule->mid()) ) exit( _NOPERM );
function adminer_object() {
	class AdminerKfr extends Adminer {
		function name() {
			return 'XOOPS Admin';
		}
		function credentials() {
			return array(XOOPS_DB_HOST,XOOPS_DB_USER,XOOPS_DB_PASS);
		}
		function database() {
			return XOOPS_DB_NAME;
		}
		function login($login, $password) {
			return ($login == XOOPS_DB_USER);
		}
		/*function tableName($tableStatus) {
			return h($tableStatus["Comment"]);
		}*/
		/*function fieldName($field, $order = 0) {
			// only columns with comments will be displayed and only the first five in select
			return ($order <= 5 && !ereg('_(md5|sha1)$', $field["field"]) ? h($field["comment"]) : "");
		}*/
	}
	return new AdminerKfr;
}
include "./include/editor.php";
?>