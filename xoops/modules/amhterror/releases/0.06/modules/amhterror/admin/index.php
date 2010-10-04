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

// includes
include_once ("header.inc.php");



//
//----------------------------------------------------------------------------//
//
xoops_cp_header();
amhterr_adminmenu(0, _AM_AMHTERR_INDEX);


echo "<fieldset>";
echo "<legend style=\"color: #990000; font-weight: bold;\">" . _AM_AMHTERR_INTRO . "</legend>";

//echo XOOPS_ROOT_PATH;

echo _AM_AMHTERR_INFO;

echo _AM_AMHTERR_FILECHK;
if(file_exists(XOOPS_ROOT_PATH . "/.htaccess")) {
	echo  XOOPS_ROOT_PATH ."/.htaccess " . _AM_AMHTERR_FILEEXISTS;
} else {
	echo  XOOPS_ROOT_PATH ."/.htaccess " . _AM_AMHTERR_FILENOEXIST;
}

	$sql = ("SELECT * FROM " . $xoopsDB->prefix("amhterror_msgs") . " WHERE showme = '1' ORDER BY errornum ASC");
	$result=$xoopsDB->query($sql);

	echo "<br /><br />";
	echo _AM_AMHTERR_ADDCODE;
	echo "<br /><br />";
	echo "<table><tr><td><span style=\"font-family: courier; font-size: 10px\">";
		
	if ($xoopsDB->getRowsNum($result) > 0) {
		while($myrow = $xoopsDB->fetchArray($result)) {
			$id			= $myrow['id'];
			$errornum	= $myrow['errornum'];
			
			echo "ErrorDocument " . $errornum . " /modules/" . $xoopsModule->getVar('dirname') . "/index.php?err=" . $errornum . "<br />\n";
			
		}
	} else {
		echo _AM_AMHTERR_NOCODE;
	}
	echo "</span></td></tr></table>";
	
	


echo "</fieldset>";

amhterror_adminfooter();
xoops_cp_footer();


?>