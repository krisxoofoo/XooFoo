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
 * @package          Adminer Module
 * @since               2.3.0
 * @author              Kris <http://www.xoofoo.org>
 * @version             $Id$
**/
// connect xoops database 
if (file_exists("mainfile.php")) {
include("mainfile.php");
} elseif (file_exists("../mainfile.php")) {
include("../mainfile.php");
} else { 
include("../../mainfile.php");
}

function adminer_object() {
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
}
include "./include/adminer.php";
?>