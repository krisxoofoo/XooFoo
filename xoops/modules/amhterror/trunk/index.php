<?php
// $Id$
//  ------------------------------------------------------------------------ //
//  Author: Andrew Mills                                                     //
//  Email:  ajmills@sirium.net                                               //
//	About:           //
//                                                                           //
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

// inludes and stuff
include_once('header.php');
//include_once('include/functions.inc.php');
$myts =& MyTextSanitizer::getInstance();

// 
//----------------------------------------------------------------------------//
// 
if (!isset($_REQUEST['err'])) {
	$xoopsOption['template_main'] = 'amhterror_index.html';
	include XOOPS_ROOT_PATH.'/header.php';
	//$xoopsTpl->assign('index_page_title', _MD_INDEX_PAGE_TITLE);	
	$xoopsTpl->assign('message', "No error defined.");
} // end if

// 
//----------------------------------------------------------------------------//
// 
if (isset($_REQUEST['err'])) { // AND $_REQUEST['err'] == "404") {
	$xoopsOption['template_main'] = 'amhterror_index.html';
	include XOOPS_ROOT_PATH.'/header.php';
	//$xoopsTpl->assign('index_page_title', _MD_INDEX_PAGE_TITLE);	
	// Save error info to database
	// We may want to turn this off on busy sites.
	if ($xoopsModuleConfig['errorreporting'] == 0) {
		if (!$xoopsUser OR ($xoopsUser->isAdmin($xoopsModule->mid()) AND  $xoopsModuleConfig['ignoreadmin'] != 1)) {
			amhterror_report(intval($_GET['err']));
		}
	}
	$sql = ("SELECT * FROM " . $xoopsDB->prefix("amhterror_msgs") . " WHERE showme='1' AND errornum = '". intval($_GET['err']) ."' ");
	$result=$xoopsDB->query($sql);
	if ($xoopsDB->getRowsNum($result) > 0) {
		while($myrow = $xoopsDB->fetchArray($result)) {
			$id		= $myrow['id'];
			$title	= $myts->displayTarea($myrow['title']);
			$text	= $myts->displayTarea($myrow['text'], 1, 1, 1, 1, $xoopsModuleConfig['linebreaks']);
		} // end while
	} // end if
	// add custom title to page title - "<{$xoops_pagetitle}>" - titleaspagetitle
	if ($xoopsModuleConfig['titleaspagetitle'] == 1) {
		$xoopsTpl->assign('xoops_pagetitle', $xoopsModule->getVar('name').' - '.$title); // module name - article title
	}
	if ($xoopsModuleConfig['titleaspagetitle'] == 2) {
		$xoopsTpl->assign('xoops_pagetitle', $title.' - '.$xoopsModule->getVar('name')); // article title -  module name
	}
	$xoopsTpl->assign('title', $title);
	$xoopsTpl->assign('text', $text);
} // end if
global $xoTheme; 
	$xoTheme->addStyleSheet('modules/amhterror/css/style.css');
include XOOPS_ROOT_PATH.'/footer.php';
?>