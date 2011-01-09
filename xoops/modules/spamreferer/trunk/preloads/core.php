<?php
/**
 * SpamReferer module
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
 * @package	SpamReferer
 * @since		2.3.0
 * @author 	kris <http://www.xoofoo.org>
 * @version	$Id$
**/

defined('XOOPS_ROOT_PATH') or die('Restricted access');
		
class SpamrefererCorePreload extends XoopsPreloadItem
{

	function eventCoreIncludeCommonStart($args) { }
	function eventCoreIncludeCommonEnd($args)
	{
		if (SpamrefererCorePreload::isActive()) {
			include_once( XOOPS_ROOT_PATH . '/modules/spamreferer/include/bad_referer.php') ;
		}
	}

	function isActive()
	{
		$module_handler =& xoops_getHandler('module');
		$module = $module_handler->getByDirname('spamreferer');
		return ($module && $module->getVar('isactive')) ? true : false;
	}
}
?>