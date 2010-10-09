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
if (!isset($_REQUEST['op'])) {
	xoops_cp_header();
	oups_adminmenu(2, _AM_OUPS_REPORTS);
	?>
	<h1 class="center"><?php echo _AM_OUPS_REPORTS; ?></h1>
	<table cellpadding="0" cellspacing="1" class="outer">
		<tr>
			<th class="center"><?php echo _AM_OUPS_REPUSER; ?></td>
			<th class="center"><?php echo _AM_OUPS_REPERRCD; ?></td>
			<th class="center"><?php echo _AM_OUPS_REPDATE; ?></td>
			<th class="center"><?php echo _AM_OUPS_REPREFER; ?></td>
			<th class="center"><?php echo _AM_OUPS_REPUAGENT; ?></td>
			<th class="center"><?php echo _AM_OUPS_REPADDR; ?></td>
			<th class="center"><?php echo _AM_OUPS_REPREQ; ?></td>
		</tr>
		<?php
			$sql = ("SELECT * FROM " . $xoopsDB->prefix("oups_errors") . " ORDER BY date DESC LIMIT ". intval($xoopsModuleConfig['numreports']) ."");//ORDER BY errornum ASC");//ORDER BY $sqlorder $orderby");
			$result=$xoopsDB->query($sql);
			if ($xoopsDB->getRowsNum($result) > 0) {
				$rowclass = "odd"; // set default call to use for rows
				while($myrow 		= $xoopsDB->fetchArray($result)) {
					$id 			= $myrow['id'];
					$uid			= XoopsUser::getUnameFromId($myrow['uid'], 0);
					$error		= $myrow['error'];
					$date		= formatTimestamp(strtotime($myrow['date']), $xoopsModuleConfig['dateformat']); 
					$referer		= $myrow['referer'];
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
	oups_adminfooter();
	xoops_cp_footer();
} // end if
?>