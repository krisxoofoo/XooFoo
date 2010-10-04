<?php
// $Id$
//  ------------------------------------------------------------------------ //
//  Author: Andrew Mills                                                     //
//  Email:  ajmills@sirium.net                                               //
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
include_once("header.inc.php");


//----------------------------------------------------------------------------//
//
if(!isset($_REQUEST['op'])) {
xoops_cp_header();
amhterr_adminmenu(100000, _AM_AMHTERR_ABOUT);

?>

<!-- <br /> -->
<table border="0" cellspacing="1" style="width: 100%;" class="outer">
  <tr>
    <th><?php echo _AM_AMHTERR_ABOUTABOUT; ?></th>
  </tr>
  <tr>
    <td class="odd">
	   AM HTerror is a module that helps integrate server error messages into your XOOPS site.
	</td>
  </tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%" class="outer">
  <tr>
    <th colspan="2">Version info</th>
  </tr>
  <tr>
    <td class="head" width="100">Version:</td>
	<td class="odd"> <?php echo round($xoopsModule->getVar('version')/100 , 2); ?></td>
  </tr>
  <!-- <tr>
    <td class="head" width="100">Version info:</td>
	<td class="odd"> See the <a href="http://support.sirium.net/modules/articles/index.php?cat_id=5" target="_blank">AM Contact section</a> on the module web site for info on this version.</td>
  </tr>-->
  <tr>
    <td class="head" width="100">Updates:</td>
	<td class="odd">
	  <a href="javascript:void(0);" onclick="javascript:window.open('<?php echo $_SERVER['PHP_SELF']; ?>?op=updates', 'preview', 'height=450,width=650,status=yes,toolbar=no,menubar=no,location=no,scrollbars=yes');">Check for updates</a>
	</td>
  </tr>
  <tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%;" class="outer">
  <tr>
    <th colspan="2">Support, feature requests and comments</th>
  </tr>
  <tr>
    <td class="head" width="100"><?php /*echo $xoopsModule->getVar('name');*/ ?>Support Forums:</td>
	<td class="odd">
	  The <?php echo $xoopsModule->getVar('name'); ?>
	  <a href="http://support.sirium.net/modules/newbb/" target="_blank">support forums</a>
	  is the preferred support method, I aim to answer all support requests as soon as 
	  possible.
	</td>
  </tr>
  <!--<tr>
    <td class="head" width="100">Bug reports:</td>
    <td class="odd">
      AM Reviews has its own <a href="http://dev.xoops.org/modules/xfmod/tracker/?group_id=1389&atid=1706" target="_blank">bug tracker</a> on the XOOPS module dev forge. 
      Please check this to see if your bug has already been submitted before adding it.
      
    </td>
  </tr>-->
  <!--<tr>
    <td class="head" width="100">Feature requests:</td>
    <td class="odd">
      You can request a feature on the <a href="http://dev.xoops.org/modules/xfmod/tracker/?group_id=1389&atid=1709" target="_blank">feature request tracker</a>.
    </td>
  </tr>-->
  <tr>
    <td class="head" width="100">E-mail:</td>
	<td class="odd">
	  I can also be contacted via the 
	  <a href="http://support.sirium.net/modules/amcontact/" target="_blank">contact form on the web site</a>.
	</td>
  </tr>
  <tr>
    <td class="head" width="100">General:</td>
	<td class="odd">
	  Please also check the forums, FAQs and Article pages to see if your problem
	  and/or question has already been answered. 
	</td>
  </tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%;" class="outer">
  <tr>
    <th>Credits</th>
  </tr>
  <tr>
    <td class="odd">
	  
	  
	</td>
  </tr>
</table>

<?php

amhterror_adminfooter();
xoops_cp_footer();
} // thing

//
//----------------------------------------------------------------------------//
//
if(isset($_REQUEST['op']) AND $_REQUEST['op'] == "updates") {

	if(!@include('http://support.sirium.net/files/xoopsamhterror/version.txt')) {
		echo "Sorry, I was unable to get version info!<br /> The server could be unavailable, or your host does not allow remote file fetching.<br />Please visit the main web site <a href=\"http://support.sirium.net/modules/mydownloads/\" target=\"_blank\">here</a>. ";
		exit;
	}
/*	
$version = "0.24";
$url = "http://support.sirium.net/modules/mydownloads/viewcat.php?cid=2";
*/

/*	if(!isset($version)) {
		echo "Thingy not set";
	} else {
		echo $version;
	}
*/
?>	
<div align="center"><input type="button" value=" Close window " onclick="window.close();"></div>
<table border="0" style="width: 100%;">
  <tr>
    <th colspan="2">Updates</th>
  </tr>
  <tr>
    <td style="width: 90px; font-weight: bold;">Status:</td>
    <td>
<?php
	if (round($xoopsModule->getVar('version')/100 , 2) > $version) {
		echo "You are using a newer version than the latest release, you are probably using a test release.";
	}
	if (round($xoopsModule->getVar('version')/100 , 2) < $version) {
		echo "An update is available.";
	} 
	if (round($xoopsModule->getVar('version')/100 , 2) == $version) {
		echo "You are using the latest version.";
	}
?>    
    </td>
  </tr>
  <tr>
    <td style="width: 90px; font-weight: bold; vertical-align: top;">Details:</td>
	<td>
	  Your version: <?php echo round($xoopsModule->getVar('version')/100 , 2); ?><br/>
	  Available version: <?php echo $version; ?>
	</td>
  </tr>
  <tr>
    <td style="width: 90px; font-weight: bold; vertical-align: top;">Download:</td>
	<td>
	  <!--.tar.gz version: <a href="<?php echo $urlgzip; ?>" target="_blank">Download</a> page.<br/>-->
	  .zip version: <a href="<?php echo $urlzip; ?>" target="_blank">Download</a> page.
	</td>
  </tr>
  <tr>
    <td colspan="2">
      <span style="font-weight: bold;">History:</span><br />
	  <pre>
<?php echo $history; ?>
	  </pre>
	
	</td>
  </tr>
</table>
<div align="center"><input type="button" value=" Close window " onclick="window.close();"></div>

<?php	
	
} // end




?>
	