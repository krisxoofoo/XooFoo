<?php

/**
 * Xoops checksum plugin class file
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
 * @package         upgrader
 * @since           2.4.0
 * @author          Simon Roberts <simon@xoops.org>
 */

if (!class_exists('XoopsReturnCRC')) {
 	class XoopsReturnCRC
	{
		var $_obj_crc;

		function __construct($data, $seed = 0, $length = 0, $mode = 'xoopsCRC') {
			if($length==0)
				switch($mode) {
				case "xoopsCRC":
					$length = 7;				
					break;
				case "xoopsTLA":
					$length = 7;				
					break;
				case "xoopsFLA":
					$length = 7;				
					break;
				default:
					$length = 7;				
					break;
				}

			if (!class_exists($mode))
				include_once(dirname(__FILE__).'/'.$mode.'/'.$mode.'.class.php');
			switch ($mode){
			case 'xoopsTLA':
				$this->_obj_crc =& new xoopsTLA($data, $seed, $length);
				break;						
			case 'xoopsFLA':
				$this->_obj_crc =& new xoopsFLA($data, $seed, $length);
				break;		
			default:				
			case 'xoopsCRC':
				$this->_obj_crc =& new xoopsCRC($data, $seed, $length);
				break;						
			}
			return $this->_obj_crc;
		}

		function XoopsReturnCRC($data, $seed, $length, $mode = 'xoopsCRC') {
			@$this->__construct($data, $seed, $length, $mode);
			return $this->_obj_crc;
		}	
	}
}

if (!function_exists('xoopsCRC')) {
	function xoopsCRC($data, $seed, $length, $mode = 'xoopsCRC') {
		$xoopsCRC =& new XoopsReturnCRC($data, $seed, $length, $mode);
		$key = (string)$xoopsCRC->_obj_crc->crc;
		return array('key' => $key, 'object' => $xoopsCRC);
	}	
} 
?>