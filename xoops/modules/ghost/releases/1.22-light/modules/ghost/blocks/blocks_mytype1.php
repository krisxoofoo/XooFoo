<?php
/**
 * Ghost module
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
 * @package	Ghost
 * @since		2.3.0
 * @author 	kris <http://www.xoofoo.org>
 * @version	$Id: blocks_mytype1.php 517 2011-01-05 16:57:50Z kris_fr $
**/

//include_once XOOPS_ROOT_PATH."/modules/" . $xoopsModule->getVar("dirname") . "/include/functions.php";

function b_ghost_myfunction1_show($options)
{
    $block = array();
    $block["text"] = "<span class='bold'>Hello World!</span><br /> Viva XOOPS";
    return $block;
}

//function b_ghost_myfunction1_edit($options) {
//}
?>