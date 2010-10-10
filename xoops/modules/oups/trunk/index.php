<?php
/**
 * Oups Module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright        The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         Oups Module
 * @since		2.5.0
 * @author            Andrew Mills <ajmills@sirius.net>
 * @version            $Id $
**/

// inludes and stuff
include_once('header.php');
$myts =& MyTextSanitizer::getInstance();
// 
//----------------------------------------------------------------------------//
// 
if (!isset($_REQUEST['err'])) {
	$xoopsOption['template_main'] = 'oups_index.html';
	include XOOPS_ROOT_PATH.'/header.php';
	$xoopsTpl->assign('message', "No error defined.");
} // end if

// 
//----------------------------------------------------------------------------//
// 
if (isset($_REQUEST['err'])) { // AND $_REQUEST['err'] == "404") {
	$xoopsOption['template_main'] = 'oups_index.html';
	include XOOPS_ROOT_PATH.'/header.php';
	// Save error info to database
	// We may want to turn this off on busy sites.
	if ($xoopsModuleConfig['errorreporting'] == 0) {
		if (!$xoopsUser OR ($xoopsUser->isAdmin($xoopsModule->mid()) AND  $xoopsModuleConfig['ignoreadmin'] != 1)) {
			oups_report(intval($_GET['err']));
		}
	}
	$sql = ("SELECT * FROM " . $xoopsDB->prefix("oups_msgs") . " WHERE showme='1' AND errornum = '". intval($_GET['err']) ."' ");
	$result=$xoopsDB->query($sql);
	if ($xoopsDB->getRowsNum($result) > 0) {
		while($myrow = $xoopsDB->fetchArray($result)) {
			$id		= $myrow['id'];
			$title	= $myts->displayTarea($myrow['title']);
			$text	= $myts->displayTarea($myrow['text'], 1, 1, 1, 1, $xoopsModuleConfig['linebreaks']);
		} // end while
	} // end if
	// add custom title to page title
	if ($xoopsModuleConfig['titleaspagetitle'] == 1) {
		$xoopsTpl->assign('xoops_pagetitle', $xoopsModule->getVar('name').' - '.$title);
	}
	if ($xoopsModuleConfig['titleaspagetitle'] == 2) {
		$xoopsTpl->assign('xoops_pagetitle', $title.' - '.$xoopsModule->getVar('name'));
	}
	$xoopsTpl->assign('title', $title);
	$xoopsTpl->assign('text', $text);
} // end if
global $xoTheme; 
	$xoTheme->addStyleSheet('modules/oups/css/style.css');
	$xoTheme->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js');
	//$xoTheme->addScript(XOOPS_URL . '/browse.php?Frameworks/jquery/jquery.js');
	$xoTheme->addScript('modules/oups/js/script.js');
include XOOPS_ROOT_PATH.'/footer.php';
?>