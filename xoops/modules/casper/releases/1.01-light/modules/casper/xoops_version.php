<?php
/**
 * Casper module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright	The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package	Casper
 * @since		2.3.0
 * @author 	kris <http://www.xoofoo.org>
 * @version	$Id: xoops_version.php 459 2010-11-25 02:19:05Z kris_fr $
**/

$module_dirname = basename( dirname( __FILE__ ) ) ;

if( !defined("XOOPS_ROOT_PATH" ) ) {
    include_once"../../mainfile.php";
}
if( ! defined("XOOPS_TRUST_PATH" ) ) die("set XOOPS_TRUST_PATH into mainfile.php") ;

//$module_handler =& xoops_gethandler("module" ); // a voir
//$CasperMods =& $module_handler->getByDirname( $modsDirname ); // a voir

require XOOPS_TRUST_PATH . "/modules/" . $module_dirname . "/xoops_version.php";

?>