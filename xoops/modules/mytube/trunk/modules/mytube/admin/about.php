<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/about.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* 				MyTube
* @since			1.00
* @author		McDonald
* @version		$Id$
*/

include 'admin_header.php';

global $xoopsModule, $xtubemyts;

xoops_cp_header();

$module_handler = &xoops_gethandler( 'module' );
$versioninfo = &$module_handler -> get( $xoopsModule -> getVar( 'mid' ) );

xtube_adminmenu( _AM_XTUBE_ABOUT );
	
if ( $versioninfo -> getInfo( 'author_realname' ) != '' ) {
    $author_name = $versioninfo -> getInfo( 'author' ) . ' (' . $versioninfo -> getInfo( 'author_realname' ) . ')';
} else {
    $author_name = $versioninfo -> getInfo( 'author' );
} 

echo '<fieldset style="border: #E8E8E8 1px solid;">
	    <legend style="display: inline; font-weight: bold; color: #0A3760;">' . $versioninfo -> getInfo( 'name' ) . ' ' . $versioninfo -> getInfo( 'version' ) . ' ' . $versioninfo -> getInfo( 'status' ) . '</legend>
	      <div style="padding: 10px;">
			<img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/' . $versioninfo -> getInfo( 'image' ) . '" alt="" style="float: left; padding-right: 10px; padding-bottom: 10px;" />
		  </div>
		  <div>' . _MI_XTUBE_DESC . '</div>
	  </fieldset><br />';		

// Author Information
echo '<table class="outer" border="0" cellspacing="2" cellpadding="0">
		<tr>
			<th colspan="2">' . _MI_XTUBE_AUTHOR_INFO . '</th>
		</tr>
		<tr>
			<td class="odd" width="25%">' . _MI_XTUBE_AUTHOR_NAME . '</td>
			<td class="even">' . $author_name . '</td>
		</tr>
		<tr>
			<td class="odd" width="25%">' . _MI_XTUBE_VERSION . '</td>
			<td class="even">' . $versioninfo -> getInfo( 'version' ) . '</td>
		</tr>
		<tr>
			<td class="odd" width="25%">' . _MI_XTUBE_MODULE_STATUS . '</td>
			<td class="even">' . $versioninfo -> getInfo( 'status' ) . '</td>
		</tr>
		<tr>
			<td class="odd" width="25%">' . _MI_XTUBE_RELEASE . '</td>
			<td class="even">' . $versioninfo -> getInfo( 'releasedate' ) . '</td>
		</tr>
		<tr>
			<td class="odd" width="25%">' . _MI_XTUBE_LICENSE . '</td>
			<td class="even">' . _MI_XTUBE_LICENSEDSC . '</td>
		</tr>
	  </table>';

// Author Information
echo '<table class="outer" border="0" cellspacing="2" cellpadding="0">
		<tr>
			<th colspan="2">' . _MI_XTUBE_MODULE_INFO . '</th>
		</tr>
		
		<tr>
			<td class="odd" width="25%">' . _MI_XTUBE_MODULE_SUPPORT . '</td>
			<td class="even"><a href="' . $versioninfo -> getInfo( 'support_site_url' ) . '" target="_blank">' . $versioninfo -> getInfo( 'support_site_name' ) . '</a></td>
		</tr>
		<tr>
			<td class="odd" width="25%">' . _MI_XTUBE_MODULE_BUG . '</td>
			<td class="even"><a href="' . $versioninfo -> getInfo( 'submit_bug' ) . '" target="_blank">' . _MI_XTUBE_MODULE_SUBMITBUG . '</a></td>
		</tr>
		<tr>
			<td class="odd" width="25%">' . _MI_XTUBE_MODULE_MANUAL . '</td>
			<td class="even"><a href="' . $versioninfo -> getInfo( 'manual_wiki' ) . '" target="_blank">' . _MI_XTUBE_MODULE_MANUALWIKI . '</a></td>
		</tr>
		<tr>
			<td class="odd" width="25%">' . _MI_XTUBE_FLVPLAYER_MANUAL . '</td>
			<td class="even"><a href="http://code.longtailvideo.com/trac/" target="_blank">' . _MI_XTUBE_FLVPLAYER_WIKI . '</a></td>
		</tr>
	  </table>';

// Credits
echo '<table class="outer" border="0" cellspacing="2" cellpadding="0">
		<tr>
			<th colspan="2">' . _MI_XTUBE_AUTHOR_CREDITS . '</th>
		</tr>
		<tr>
			<td class="odd" width="25%">' . _MI_XTUBE_AUTHOR_CREDITS . '</td>
			<td class="even">' . $versioninfo -> getInfo( 'author_credits' ) . '</td>
		</tr>
		<tr>
			<td class="odd" width="25%">' . _MI_XTUBE_ICONS_CREDITS . '</td>
			<td class="even"><a href="http://www.famfamfam.com" target="_blank">famfamfam.com</a></td>
		</tr>
		<tr>
			<td class="odd" width="25%">' . _MI_XTUBE_FLVPLAYER_CREDITS . '</td>
			<td class="even"><a href="http://www.longtailvideo.com/players/jw-flv-player/" target="_blank">' . _MI_XTUBE_FLVPLAYER_CREDITDSC . '</a></td>
		</tr>
	  </table>';

// Changelog
$file = '../bugfixlist.txt';
if ( @file_exists( $file ) ) {
    $fp = @fopen( $file, 'r' );
    $bugtext = @fread( $fp, filesize( $file ) );
    @fclose( $file );
} 

echo '<table class="outer" border="0" cellspacing="2" cellpadding="0">
		<tr>
			<th colspan="2">' . _MI_XTUBE_AUTHOR_BUGFIXES . '</th>
		</tr>
		<tr>
			<td class="odd" width="25%" style="vertical-align: top;">' . _MI_XTUBE_AUTHOR_BUGFIXES . '</td>
			<td class="even">' . $xtubemyts -> displayTarea( $bugtext ) . '</td>
		</tr>
	  </table>';
unset( $file );

xoops_cp_footer();
?>