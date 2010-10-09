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

// includes
include_once ("header.inc.php");
//
//----------------------------------------------------------------------------//
//
if(!isset($_REQUEST['op'])) {
xoops_cp_header();
oups_adminmenu(1, _AM_OUPS_INDEX);
?>
<h1 class="center"><?php echo _AM_OUPS_ERROR; ?></h1>
<table cellspacing="1" class="outer" style="max-width: 650px; margin:0 auto;">

	<tr>
		<th class="center" style="width: 30px;"><?php echo _AM_OUPS_FRMCAPHDRID; ?></td>
		<th class="center"><?php echo _AM_OUPS_FRMCAPHDRTTL; ?></td>
		<th class="center" style="width: 30px;"><?php echo _AM_OUPS_FRMCAPERRNUM; ?></td>
		<th class="center" style="width: 18px;"></td>
		<th class="center" style="width: 20px;"></td>
		<th class="center" style="width: 20px;"></td>
	</tr>
<?php  
	$sql = ("SELECT * FROM " . $xoopsDB->prefix("oups_msgs") . " ORDER BY errornum ASC");//ORDER BY $sqlorder $orderby");
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
		<td class="<?php echo $rowclass; ?> center" style="width: 30px;"><?php echo $id; ?></td>
		<td class="<?php echo $rowclass; ?>"><?php echo $title; ?></td>
		<td class="<?php echo $rowclass; ?> center" style="width: 80px;"><?php echo $errornum; ?></td>
<?php
	if ($showme == 1) { 
		$bulb = "greenled.png"; 
		$alttxt = _AM_OUPS_STATUSSHOW;
	} else { 
		$bulb = "redled.png"; 
		$alttxt = _AM_OUPS_STATUSHIDE;
	}
?>
		<td class="<?php echo $rowclass; ?> center" style="width: 18px;">
			<img src="../images/<?php echo $bulb; ?>" title="<?php echo $alttxt; ?>" alt="<?php echo $alttxt; ?>"/>
		</td>
		<td class="<?php echo $rowclass; ?> center" style="width: 20px;">
			<a href="<?php echo $_SERVER['PHP_SELF']; ?>?op=edit&amp;id=<?php echo $id; ?>" title="<?php echo _AM_OUPS_FRMCAPLNKEDT; ?>">
				<img src="../images/edit.png" alt="<?php echo _AM_OUPS_FRMCAPLNKEDT; ?>"/>
			</a>
		</td>
		<td class="<?php echo $rowclass; ?> center" style="width: 20px;">
			<a href="<?php echo $_SERVER['PHP_SELF']; ?>?op=del&amp;id=<?php echo $id; ?>" title="<?php echo _AM_OUPS_FRMCAPLNKDLT; ?>">
				<img src="../images/editdelete.png" alt="<?php echo _AM_OUPS_FRMCAPLNKDLT; ?>"/>
				
			</a>
		</td>
	</tr>
<?php
		} // while  
	} else {
		echo "<td colspan=\"6\" class=\"odd center\" >" . _AM_OUPS_FRMCAPNOERRS . "</td>";
	}
?>  
</table>
<br />
<?php
oups_msgform(_AM_OUPS_ENTCAPADD, _AM_OUPS_ENTCAPSAVE, 'add');
oups_adminfooter();
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
		$title		= $myts->addSlashes($formdata['title']);
		$errnum	= intval($formdata['errnum']);
		$text		= $myts->addSlashes($formdata['text']);
		$showme	= intval($formdata['showme']);
		$sql = "INSERT INTO ".$xoopsDB->prefix("oups_msgs")." VALUES (
			NULL,
			'$title',
			'$errnum',
			'$text',
			'$showme' )";

			$xoopsDB->query($sql); // or $eh->show("0013");
			if ($xoopsDB->getAffectedRows($sql)) {
				redirect_header("errors.php", 2, _AM_OUPS_DBUPDATED);
			} else {
				redirect_header("errors.php", 2, _AM_OUPS_DBNOUPDATED);
			}
	} 
	// produce an error message if the code exists
	else {
		redirect_header("errors.php", 2, _AM_OUPS_CODEEXISTS);
	}
} // end if
//
//----------------------------------------------------------------------------//
// Edit and save existing code/message
if (isset($_REQUEST['op']) AND $_REQUEST['op'] == "edit") {
	/**
	* Load form if subop not set.
	*/
	if (!isset($_REQUEST['subop'])) {
		xoops_cp_header();
		oups_adminmenu(1, _AM_OUPS_INDEX);
		if (isset($_GET['id'])) { $id = $_GET['id']; }
			else { $id = ""; }
		$result = $xoopsDB->query("SELECT id, title, errornum, text, showme  FROM " .$xoopsDB->prefix('oups_msgs') . " WHERE id=$id LIMIT 1");
		list($id, $title, $errornum, $text, $showme) = $xoopsDB->fetchRow($result);
			$data['id']			= $id;
			$data['title']		= $myts->htmlSpecialChars($title);
			$data['errornum']	= $errornum;
			$data['text']		= $myts->htmlSpecialChars($text);
			$data['showme']		= $showme;
		oups_msgform(_AM_OUPS_ENTCAPEDIT, _AM_OUPS_ENTCAPSAVE, 'edit', $data);
		oups_adminfooter();
		xoops_cp_footer();
	} // end if
	/**
	* Save update if subop set.
	*/
	if (isset($_REQUEST['subop']) AND $_REQUEST['subop'] == "save") {		
		if (isset($_POST['formdata'])) { $formdata = $_POST['formdata']; }
			else { $formdata = ""; }	
			$id		= intval($formdata['id']);
			$title		= $myts->addSlashes($formdata['title']);
			$errornum	= intval($formdata['errnum']);
			$text		= $myts->addSlashes($formdata['text']);
			if (isset($formdata['showme'])) { $showme = 1; }
				else { $showme = 0; }
			$sql = ("UPDATE ".$xoopsDB->prefix("oups_msgs")." SET 
				id = '$id', 
				title		= '$title', 
				errornum	= '$errornum', 
				text		= '$text', 
				showme		= '$showme' 
				WHERE id=$id");
				$result=$xoopsDB->query($sql);
				if ($xoopsDB->query($sql)) {
					redirect_header("errors.php", 2, _AM_OUPS_DBUPDATED);
				} else {
					redirect_header("errors.php", 2, _AM_OUPS_DBNOUPDATED);
				}
	} // end if
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
		xoops_confirm(array('op' => 'del', 'id' => $id, 'subop' => 'delok'), 'errors.php', _AM_OUPS_DBCONFMDEL);
		xoops_cp_footer();
	} // end if
	/**
	* Delete
	*/
	if (isset($_REQUEST['subop']) && $_REQUEST['subop'] == "delok") {
		$sql = sprintf("DELETE FROM %s WHERE id = %u", $xoopsDB->prefix("oups_msgs"), $id);          
		if ($xoopsDB->queryF($sql)) {
			// Delete permissions.
			redirect_header("errors.php", 2, _AM_OUPS_DBUPDATED);
		} else {
			redirect_header("errors.php", 2, _AM_OUPS_DBNOUPDATED);
		} //
	} //
} // end if
?>