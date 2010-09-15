<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/votedata.php
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

$op = xtube_cleanRequestVars( $_REQUEST, 'op', '' );
$rid = xtube_cleanRequestVars( $_REQUEST, 'rid', 0 );
$lid = xtube_cleanRequestVars( $_REQUEST, 'lid', 0 );
$rid = intval( $rid );
$lid = intval( $lid );

switch ( strtolower( $op ) ) {
    case 'delvote':
        $sql = 'DELETE FROM ' . $xoopsDB -> prefix( 'xoopstube_votedata' ) . ' WHERE ratingid=' . $rid;
        $result = $xoopsDB -> queryF( $sql );
        xtube_updaterating( $lid );
        redirect_header( 'votedata.php', 1, _AM_XTUBE_VOTEDELETED );
        break;

    case 'main':
    default:
	$start = xtube_cleanRequestVars( $_REQUEST, 'start', 0 );
        xoops_cp_header();
        xtube_adminmenu( _AM_XTUBE_VOTE_RATINGINFOMATION );
        $_vote_data = xtube_getVoteDetails( $lid );

        $text_info = '
		<table width="100%">
		 <tr>
		  <td width="50%" valign="top">
		   <div><b>' . _AM_XTUBE_VOTE_TOTALRATE . ': </b>' . intval( $_vote_data['rate'] ) . '</div>
		   <div><b>' . _AM_XTUBE_VOTE_USERAVG . ': </b>' . intval( round( $_vote_data['avg_rate'], 2 ) ) . '</div>
		   <div><b>' . _AM_XTUBE_VOTE_MAXRATE . ': </b>' . intval( $_vote_data['min_rate'] ) . '</div>
		   <div><b>' . _AM_XTUBE_VOTE_MINRATE . ': </b>' . intval( $_vote_data['max_rate'] ) . '</div>
		  </td>
		  <td>		 
		   <div><b>' . _AM_XTUBE_VOTE_MOSTVOTEDTITLE . ': </b>' . intval( $_vote_data['max_title'] ) . '</div>
           <div><b>' . _AM_XTUBE_VOTE_LEASTVOTEDTITLE . ': </b>' . intval( $_vote_data['min_title'] ) . '</div>
		   <div><b>' . _AM_XTUBE_VOTE_REGISTERED . ': </b>' . ( intval( $_vote_data['rate'] - $_vote_data['null_ratinguser'] ) ) . '</div>
		   <div><b>' . _AM_XTUBE_VOTE_NONREGISTERED . ': </b>' . intval( $_vote_data['null_ratinguser'] ) . '</div>
		  </td>
		 </tr>
		</table>';

        echo '
		 <fieldset style="border: #e8e8e8 1px solid;">
		 <legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_XTUBE_VOTE_DISPLAYVOTES . '</legend>
		 <div style="padding: 8px;">' . $text_info . '<br />
		 <li>' . $imagearray['deleteimg'] . ' ' . _AM_XTUBE_VOTE_DELETEDSC . '</li>
		 </div>
		 </fieldset>

		<table width="100%" cellspacing="1" cellpadding="2" class="outer" style="font-size: smaller;">
		<tr>
		<th style="text-align: center;">' . _AM_XTUBE_VOTE_ID . '</th>
		<th style="text-align: center;">' . _AM_XTUBE_VOTE_USER . '</th>
		<th style="text-align: center;">' . _AM_XTUBE_VOTE_IP . '</th>
		<th style="text-align: left;">&nbsp;' . _AM_XTUBE_VOTE_FILETITLE . '</th>
		<th style="text-align: center;">' . _AM_XTUBE_VOTE_RATING . '</th>
		<th style="text-align: center;">' . _AM_XTUBE_VOTE_DATE . '</th>
		<th style="text-align: center;">' . _AM_XTUBE_MINDEX_ACTION . '</th></tr>';

        $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'xoopstube_votedata' );
        if ( $lid > 0 ) {
            $sql .= ' WHERE lid=' . $lid;
        } 
        $sql .= ' ORDER BY ratingtimestamp DESC';

        $results = $xoopsDB -> query( $sql, $xoopsModuleConfig['admin_perpage'], $start );
        $votes = $xoopsDB -> getRowsNum( $xoopsDB -> query( $sql ) );

        if ( $votes == 0 ) {
            echo '<tr><td style="text-align: center;" colspan="7" class="head">' . _AM_XTUBE_VOTE_NOVOTES . '</td></tr>';
        } else {
            while ( list( $ratingid, $lid, $ratinguser, $rating, $ratinghostname, $ratingtimestamp, $title ) = $xoopsDB -> fetchRow( $results ) ) {
                $formatted_date = mytube_time( formatTimestamp( $ratingtimestamp, $xoopsModuleConfig['dateformat'] ) );
                $ratinguname = XoopsUser :: getUnameFromId( $ratinguser );
                echo '
					<tr>
					<td class="head" style="text-align: center;">' . $ratingid . '</td>
					<td class="even" style="text-align: center;">' . $ratinguname . '</td>
					<td class="even" style="text-align: center;">' . $ratinghostname . '</td>
					<td class="even" style="text-align: left;">&nbsp;' . $title . '</td>
					<td class="even" style="text-align: center;">' . $rating . '</td>
					<td class="even" style="text-align: center;">' . $formatted_date . '</td>
					<td class="even" style="text-align: center;"><a href="votedata.php?op=delvote&amp;lid=' . $lid . '&amp;rid=' . $ratingid . '">' . $imagearray['deleteimg'] . '</a></td>
					</tr>';
            } 
        } 
        echo '</table>'; 
        // Include page navigation
        include_once XOOPS_ROOT_PATH . '/class/pagenav.php';
        $page = ( $votes > $xoopsModuleConfig['admin_perpage'] ) ? _AM_XTUBE_MINDEX_PAGE : '';
        $pagenav = new XoopsPageNav( $page, $xoopsModuleConfig['admin_perpage'], $start, 'start' );
        echo '<div align="right" style="padding: 8px;">' . $pagenav -> renderNav() . '</div>';
        break;
} 
xoops_cp_footer();
?>