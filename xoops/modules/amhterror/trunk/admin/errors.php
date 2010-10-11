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
if(!isset($_REQUEST['op'])) {
xoops_cp_header();
amhterr_adminmenu(1, _AM_AMHTERR_INDEX);
?>
<table cellpadding="0" cellspacing="1" class="outer" style="width: 100%;">
  <tr>
    <th colspan="6"><?php echo _AM_AMHTERR_FRMTTLCAP; ?></th>
  </tr>
  <tr>
    <td class="head" style="width: 30px; text-align: center;"><?php echo _AM_AMHTERR_FRMCAPHDRID; ?></td>
	<td class="head" style="text-align: center;"><?php echo _AM_AMHTERR_FRMCAPHDRTTL; ?></td>
	<td class="head" style="width: 30px; text-align: center;"><?php echo _AM_AMHTERR_FRMCAPERRNUM; ?></td>
	<td class="head" style="width: 18px; text-align: center;"></td>
	<td class="head" style="width: 20px; text-align: center;"></td>
	<td class="head" style="width: 20px; text-align: center;"></td>
  </tr>
<?php  
	$sql = ("SELECT * FROM " . $xoopsDB->prefix("amhterror_msgs") . " ORDER BY errornum ASC");//ORDER BY $sqlorder $orderby");
	//$sql = ("SELECT * FROM " . $xoopsDB->prefix("articles_main") . " "); // ORDER BY $sqlorder $orderby");
	$result=$xoopsDB->query($sql);
	
	if ($xoopsDB->getRowsNum($result) > 0) {
		$rowclass = "even"; // set default call to use for rows
		while($myrow = $xoopsDB->fetchArray($result)) {
			$id 		= $myrow['id'];
			$title		= $myts->htmlSpecialChars($myts->stripSlashesGPC($myrow['title'], 0, 0, 1, 0, 0));
			$errornum	= $myrow['errornum'];
			$text		= $myts->htmlSpecialChars($myts->stripSlashesGPC($myrow['text'], 0, 0, 1, 0, 0));
			$showme		= $myrow['showme'];
			
			if ($rowclass == "even") { $rowclass = "odd"; } else { $rowclass = "even"; }
			
			// stuff
?>
  <tr>
    <td class="<?php echo $rowclass; ?>" style="width: 30px; text-align: center;"><?php echo $id; ?></td>
	<td class="<?php echo $rowclass; ?>"><?php echo $title; ?></td>
	<td class="<?php echo $rowclass; ?>" style="width: 30px; text-align: center;"><?php echo $errornum; ?></td>
<?php
	if ($showme == 1) { 
		$bulb = "bulb-yell.png"; 
		$alttxt = _AM_AMHTERR_STATUSSHOW;
	} else { 
		$bulb = "bulb-grey.png"; 
		$alttxt = _AM_AMHTERR_STATUSHIDE;
	}
?>
	<td class="<?php echo $rowclass; ?>" style="width: 18px; text-align: center;"><img src="../images/<?php echo $bulb; ?>" title="<?php echo $alttxt; ?>" alt="<?php echo $alttxt; ?>"></td>
	<td class="<?php echo $rowclass; ?>" style="width: 20px; text-align: center;"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?op=edit&amp;id=<?php echo $id; ?>" title="<?php echo _AM_AMHTERR_FRMCAPLNKEDT; ?>"><img src="<?php echo XOOPS_URL; ?>/modules/<?php echo $xoopsModule->getVar('dirname'); ?>/images/edit3.png" width="16" height="16" alt="<?php echo _AM_AMHTERR_FRMCAPLNKEDT; ?>"></a></td>
	<td class="<?php echo $rowclass; ?>" style="width: 20px; text-align: center;"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?op=del&amp;id=<?php echo $id; ?>" title="<?php echo _AM_AMHTERR_FRMCAPLNKDLT; ?>"><img src="<?php echo XOOPS_URL; ?>/modules/<?php echo $xoopsModule->getVar('dirname'); ?>/images/del3.png" width="16" height="16" alt="<?php echo _AM_AMHTERR_FRMCAPLNKDLT; ?>"></a></td>
  </tr>

<?php
		} // while  
	} else {
		echo "<td colspan=\"6\" class=\"odd\" style=\"text-align: center;\">" . _AM_AMHTERR_FRMCAPNOERRS . "</td>";
	}
?>  
</table>
<br /><br />
<?php
amhterror_msgform(_AM_AMHTERR_ENTCAPADD, _AM_AMHTERR_ENTCAPSAVE, 'add');
amhterror_adminfooter();
xoops_cp_footer();
} // end if
//
//----------------------------------------------------------------------------//
// Save new error code/message
if (isset($_REQUEST['op']) AND $_REQUEST['op'] == "save") {
//xoops_cp_header();
	if (isset($_POST['formdata'])) { $formdata = $_POST['formdata']; }
		else { $formdata = ""; }
	// see if this error already exists.
	if (!check_codes(intval($formdata['errnum']))) { 
		//echo "match"; exit;
		$title		= $myts->addSlashes($formdata['title']);
		$errnum		= intval($formdata['errnum']);
    	$text		= $myts->addSlashes($formdata['text']);
    	$showme		= intval($formdata['showme']);
    
		$sql = "INSERT INTO ".$xoopsDB->prefix("amhterror_msgs")." VALUES (
			NULL,
			'$title',
			'$errnum',
			'$text',
			'$showme' )";

			$xoopsDB->query($sql); // or $eh->show("0013");
			if ($xoopsDB->getAffectedRows($sql)) {
				redirect_header("errors.php", 2, _AM_AMHTERR_DBUPDATED);
				//echo "entered";
			} else {
				redirect_header("errors.php", 2, _AM_AMHTERR_DBNOUPDATED);
				//echo "not entered";
			}
	} 
	// produce an error message if the code exists
	else {
		redirect_header("errors.php", 2, _AM_AMHTERR_CODEEXISTS);
	}
//xoops_cp_footer();
} // end if
//
//----------------------------------------------------------------------------//
// Edit and save existing code/message
if (isset($_REQUEST['op']) AND $_REQUEST['op'] == "edit") {
//xoops_cp_header();
	/**
	* Load form if subop not set.
	*/
	if (!isset($_REQUEST['subop'])) {
		xoops_cp_header();
		//amrev_adminmenu(1, _AM_AMJO_CAT);
		amhterr_adminmenu(1, _AM_AMHTERR_INDEX);
		
		if (isset($_GET['id'])) { $id = $_GET['id']; }
			else { $id = ""; }
		
		$result = $xoopsDB->query("SELECT id, title, errornum, text, showme  FROM " .$xoopsDB->prefix('amhterror_msgs') . " WHERE id=$id LIMIT 1");
		list($id, $title, $errornum, $text, $showme) = $xoopsDB->fetchRow($result);

			$data['id']			= $id;
			$data['title']		= $myts->htmlSpecialChars($title);
			$data['errornum']	= $errornum;
			$data['text']		= $myts->htmlSpecialChars($text);
			$data['showme']		= $showme;
			//$cat_weight
			
			//print_r($data);
			
		amhterror_msgform(_AM_AMHTERR_ENTCAPEDIT, _AM_AMHTERR_ENTCAPSAVE, 'edit', $data);
		// form stuff (edit)
		#$catformcaption = _AM_AMJO_CATCAPTIONED;
		#$submitbutton = _AM_AMJO_CATCAPSAVEED;
		#$formaction = "edit";

		#include_once("catform.inc.php");
		amhterror_adminfooter();
		xoops_cp_footer();
	} // end if
	/**
	* Save update if subop set.
	*/
	if (isset($_REQUEST['subop']) AND $_REQUEST['subop'] == "save") {
		//xoops_cp_header();
		
		if (isset($_POST['formdata'])) { $formdata = $_POST['formdata']; }
			else { $formdata = ""; }
		
		//echo "<pre>";
		//print_r($formdata);
		//echo "</pre>";
		
			$id			= intval($formdata['id']);
			$title		= $myts->addSlashes($formdata['title']);
			$errornum	= intval($formdata['errnum']);
			$text		= $myts->addSlashes($formdata['text']);
			//$showme		= intval($formdata['showme']);
			
			if (isset($formdata['showme'])) { $showme = 1; }
				else { $showme = 0; }
	
			$sql = ("UPDATE ".$xoopsDB->prefix("amhterror_msgs")." SET 
				id = '$id', 
				title		= '$title', 
				errornum	= '$errornum', 
				text		= '$text', 
				showme		= '$showme' 
				WHERE id=$id");
	
				$result=$xoopsDB->query($sql);
				if ($xoopsDB->query($sql)) {
					redirect_header("errors.php", 2, _AM_AMHTERR_DBUPDATED);
					//echo "entered";
				} else {
					redirect_header("errors.php", 2, _AM_AMHTERR_DBNOUPDATED);
					//echo "not entered";
				}
		//xoops_cp_footer();
	} // end if
//xoops_cp_footer();
} // end if
//
//----------------------------------------------------------------------------//
// Delete message
if (isset($_REQUEST['op']) AND $_REQUEST['op'] == "del") {
	if (isset($_REQUEST['id'])) { $id = intval($_REQUEST['id']); }
		else { $id = ""; }
	/**
	* Confirm deletion.
	*/
	if (!isset($_REQUEST['subop'])) {
		xoops_cp_header();
		xoops_confirm(array('op' => 'del', 'id' => $id, 'subop' => 'delok'), 'errors.php', _AM_AMHTERR_DBCONFMDEL);
		xoops_cp_footer();
	} // end if
	/**
	* Delete
	*/
	if (isset($_REQUEST['subop']) && $_REQUEST['subop'] == "delok") {
		$sql = sprintf("DELETE FROM %s WHERE id = %u", $xoopsDB->prefix("amhterror_msgs"), $id);          
		if ($xoopsDB->queryF($sql)) {
			// Delete permissions.
			//xoops_groupperm_deletebymoditem ($xoopsModule->getVar('mid'), 'Category Permission', $id);
			redirect_header("errors.php", 2, _AM_AMHTERR_DBUPDATED);
			//echo "deleted";
		} else {
			redirect_header("errors.php", 2, _AM_AMHTERR_DBNOUPDATED);
			//echo "not deleted";
		} //
	} //
} // end if
?>