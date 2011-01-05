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

//include_once XOOPS_TRUST_PATH."/modules/" . $module_dirname . "/include/functions.php";

function b_casper_myfunction1_show($options)
{
    $block = array();
    $block["text"] = "<span class='bold'>Bonjour le monde :</span><br /> Viva XOOPS";
    return $block;
}

//function b_casper_myfunction1_edit($options) {
//}
?>