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
include_once("header.inc.php");
//----------------------------------------------------------------------------//
//
if(!isset($_REQUEST['op'])) {
xoops_cp_header();
oups_adminmenu(100000, _AM_OUPS_ABOUT);
?>
<h1 class="center"><?php echo _AM_OUPS_ABOUTABOUT; ?></h1>
<p class="center"><?php echo _AM_OUPS_ABOUTDSC; ?></p>
<table style="max-width: 300px; margin: 10px auto;" class="outer">
	<tr><th colspan="2"><?php echo _AM_OUPS_VERSIONINFO; ?></th></tr>
	<tr>
		<td class="head"><?php echo _AM_OUPS_VERSIONNUM; ?></td>
		<td class="head center normal"> <?php echo round($xoopsModule->getVar('version')/100 , 2); ?></td>
	</tr>
	<tr>
		<td class="head"><?php echo _AM_OUPS_VERSIONCHECK; ?></td>
		<td class="head center normal">
			<a href="javascript:void(0);" onclick="javascript:window.open('<?php echo $_SERVER['PHP_SELF']; ?>?op=updates', 'preview', 'height=450,width=650,status=yes,toolbar=no,menubar=no,location=no,scrollbars=yes');"><?php echo _AM_OUPS_VERSIONCHECKDSC; ?></a>
		</td>
	</tr>
</table>

<table style="max-width: 300px; margin: 10px auto;" class="outer">
	<tr><th><?php echo _AM_OUPS_CREDIT; ?></th></tr>
	<tr><td class="head center normal"><?php echo _AM_OUPS_CREDITDSC1; ?></td></tr>
	<tr><td class="head center normal"><?php echo _AM_OUPS_CREDITDSC2; ?></td></tr>
</table>

<table style="max-width: 800px; margin: 10px auto;" class="outer">
	<tr><th colspan="2"><?php echo _AM_OUPS_SUPPORTTITLE; ?></th></tr>
	<tr>
		<td class="head" width="20%"><?php echo _AM_OUPS_SUPPORT; ?></td>
		<td class="head normal"><?php echo _AM_OUPS_SUPPORTDSC; ?></td>
	</tr>
	<tr>
		<td class="head" width="20%"><?php echo _AM_OUPS_MAIL; ?></td>
		<td class="head normal"><?php echo _AM_OUPS_MAILDSC; ?></td>
	</tr>
	<tr>
		<td class="head" width="20%"><?php echo _AM_OUPS_SUPPORTMORE; ?></td>
		<td class="head normal"><?php echo _AM_OUPS_SUPPORTMOREDSC; ?></td>
	</tr>
</table>
<?php
oups_adminfooter();
xoops_cp_footer();
} // thing
//
//----------------------------------------------------------------------------//
//
if(isset($_REQUEST['op']) AND $_REQUEST['op'] == "updates") {

	if(!@include('http://labs.xoofoo.org/uploads/modversion/oupsversion.txt')) {
		echo "Sorry, I was unable to get version info!<br /> The server could be unavailable, or your host does not allow remote file fetching.<br />Please visit the main web site <a href=\"http://support.sirium.net/modules/mydownloads/\" rel=\"external\">here</a>. ";
		exit;
	}
?>	
<div class="center"><input type="button" value=" Close window " onclick="window.close();"></div>
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
	  <!--.tar.gz version: <a href="<?php echo $urlgzip; ?>" rel="external">Download</a> page.<br/>-->
	  .zip version: <a href="<?php echo $urlzip; ?>" rel="external">Download</a> page.
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
<div style="text-align:center;"><input type="button" value=" Close window " onclick="window.close();"></div>
<?php	
} // end
?>
	