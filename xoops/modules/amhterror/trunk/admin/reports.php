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
if (!isset($_REQUEST['op'])) {
xoops_cp_header();
amhterr_adminmenu(2, _AM_AMHTERR_REPORTS);
?>
<table cellpadding="0" cellspacing="1" width="100%" class="outer">
  <tr>
    <th colspan="7">
    <?php echo _AM_AMHTERR_REPCAPTTL; ?>
    </th>
  </tr>
  <tr>
    <td class="head" style="text-align: center;"><?php echo _AM_AMHTERR_REPUSER; ?></td>
    <td class="head" style="text-align: center;"><?php echo _AM_AMHTERR_REPERRCD; ?></td>
    <td class="head" style="text-align: center;"><?php echo _AM_AMHTERR_REPDATE; ?></td>
    <td class="head" style="text-align: center;"><?php echo _AM_AMHTERR_REPREFER; ?></td>
    <td class="head" style="text-align: center;"><?php echo _AM_AMHTERR_REPUAGENT; ?></td>
    <td class="head" style="text-align: center;"><?php echo _AM_AMHTERR_REPADDR; ?></td>
    <td class="head" style="text-align: center;"><?php echo _AM_AMHTERR_REPREQ; ?></td>
  </tr>
<?php
	$sql = ("SELECT * FROM " . $xoopsDB->prefix("amhterror_errors") . " ORDER BY date DESC LIMIT ". intval($xoopsModuleConfig['numreports']) ."");//ORDER BY errornum ASC");//ORDER BY $sqlorder $orderby");
	$result=$xoopsDB->query($sql);
	if ($xoopsDB->getRowsNum($result) > 0) {
		$rowclass = "odd"; // set default call to use for rows
		while($myrow = $xoopsDB->fetchArray($result)) {
			$id 		= $myrow['id'];
			//$title		= $myts->htmlSpecialChars($myts->stripSlashesGPC($myrow['title'], 0, 0, 1, 0, 0));
			//$errornum	= $myrow['errornum'];
			//$xoopsModuleConfig['ignoreadmin']
			$uid		= XoopsUser::getUnameFromId($myrow['uid'], 0);
	 		$error		= $myrow['error'];
	 		$date		= formatTimestamp(strtotime($myrow['date']), $xoopsModuleConfig['dateformat']); 
	 		$referer	= $myrow['referer'];
	 		$useragent	= $myrow['useragent'];
	 		$remoteaddr	= $myrow['remoteaddr'];
	 		$requested	= $myrow['requested'];
	 		echo "<tr>";
	 		echo "<td class=\"". $rowclass ."\">". $uid ."</td>";
	 		echo "<td class=\"". $rowclass ."\">". $error ."</td>";
	 		echo "<td class=\"". $rowclass ."\">". $date ."</td>";
	 		echo "<td class=\"". $rowclass ."\">". $referer ."</td>";
	 		echo "<td class=\"". $rowclass ."\">". $useragent ."</td>";
	 		echo "<td class=\"". $rowclass ."\">". $remoteaddr ."</td>";
	 		echo "<td class=\"". $rowclass ."\">". $requested ."</td>";
	 		echo "</tr>";
	 		if ($rowclass == "even") { $rowclass = "odd"; } else { $rowclass = "even"; }
		} // while
	} // if
?>
</table>
<?php
amhterror_adminfooter();
xoops_cp_footer();
} // end if
?>