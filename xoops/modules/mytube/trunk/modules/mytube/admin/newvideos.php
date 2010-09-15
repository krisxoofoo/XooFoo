<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/newvideos.php
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
$lid = xtube_cleanRequestVars( $_REQUEST, 'lid', '' );
$lid = intval( $lid );

switch ( strtolower( $op ) ) {
    case 'approve':

        global $xoopsModule;
        $sql = 'SELECT cid, title, publisher, notifypub FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE lid=' . $lid;
        if ( !$result = $xoopsDB -> query( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        list( $cid, $title, $publisher, $notifypub ) = $xoopsDB -> fetchRow( $result );

        // Update the database
        $time = time();
//        $publisher = $xoopsUser -> getVar( 'uname' );
        $xoopsDB -> queryF( 'UPDATE ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' SET published=' . $time . ', status=1, publisher=' . $publisher . ' WHERE lid=' . $lid );

        $tags = array();
        $tags['VIDEO_NAME'] = $title;
        $tags['VIDEO_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $cid . '&amp;lid=' . $lid;

        $sql = 'SELECT title FROM ' . $xoopsDB -> prefix( 'xoopstube_cat' ) . ' WHERE cid=' . $cid;
        if ( !$result = $xoopsDB -> query( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
        } else {
            $row = $xoopsDB -> fetchArray( $result );
            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
            $notification_handler = &xoops_gethandler( 'notification' );
            $notification_handler -> triggerEvent( 'global', 0, 'new_video', $tags );
            $notification_handler -> triggerEvent( 'category', $cid, 'new_video', $tags );
            if ( intval($notifypub) == 1 ) {
                $notification_handler -> triggerEvent( 'video', $lid, 'approve', $tags );
            } 
        } 
        redirect_header( 'newvideos.php', 1, _AM_XTUBE_SUB_NEWFILECREATED );
        break;

    case 'main':
    default:

        global $xoopsModuleConfig;

        $start = xtube_cleanRequestVars( $_REQUEST, 'start', 0 );
        $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE published = 0 ORDER BY lid DESC';
        if ( !$result = $xoopsDB -> query( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        $new_array = $xoopsDB -> query( $sql, $xoopsModuleConfig['admin_perpage'], $start );
        $new_array_count = $xoopsDB -> getRowsNum( $xoopsDB -> query( $sql ) );

        xoops_cp_header();
        xtube_adminmenu( _AM_XTUBE_SUB_SUBMITTEDFILES );

        echo '  <div style="padding:5px; background-color: #EEEEEE; border: 1px solid #D9D9D9;">
                <span style="font-weight: bold; color: #0A3760;">' . _AM_XTUBE_SUB_FILESWAITINGINFO . '<br /><br /></span>
                <span style="padding: 12px;">' . _AM_XTUBE_SUB_FILESWAITINGVALIDATION . '<b>' . $new_array_count . '</b><br /><br /><span>
                <div style="padding: 8px;"><li>&nbsp;&nbsp;' . $imagearray['approve'] . ' ' . _AM_XTUBE_SUB_APPROVEWAITINGFILE . '<br />
                <li>&nbsp;&nbsp;' . $imagearray['editimg'] . ' ' . _AM_XTUBE_SUB_EDITWAITINGFILE . '<br />
                <li>&nbsp;&nbsp;' . $imagearray['deleteimg'] . ' ' . _AM_XTUBE_SUB_DELETEWAITINGFILE . '</div>
                </div><br />
             ';

        echo '<table width="100%" cellspacing="1" class="outer">';
        echo '<tr style="text-align: center;">';
        echo '<th><small>' . _AM_XTUBE_MINDEX_ID . '</small></th>';
        echo '<th style="text-align: left;"><small>' . _AM_XTUBE_MINDEX_TITLE . '</small></th>';
        echo '<th style="text-align: center;"><small>' . _AM_XTUBE_VIDSOURCE2 . '</small></th>';
        echo '<th><small>' . _AM_XTUBE_MINDEX_POSTER . '</small></th>';
        echo '<th><small>' . _AM_XTUBE_MINDEX_SUBMITTED . '</small></th>';
        echo '<th><small>' . _AM_XTUBE_MINDEX_ACTION . '</small></th>';
        echo '</tr>';
        if ( $new_array_count > 0 ) {
            while ( $new = $xoopsDB -> fetchArray( $new_array ) ) {
                $lid = intval( $new['lid'] );
                $rating = number_format( $new['rating'], 2 );
                $title = $xtubemyts -> htmlSpecialCharsStrip( $new['title'] );
                $vidid = urldecode( $xtubemyts -> htmlSpecialCharsStrip( $new['vidid'] ) );
                $logourl = $xtubemyts -> htmlSpecialCharsStrip( $new['screenshot'] );
                $submitter = mytube_getLinkedUnameFromId( $new['submitter'] );
                $returnsource = xtube_returnsource( $new['vidsource'] );
                $datetime = mytube_time( formatTimestamp( $new['date'], $xoopsModuleConfig['dateformatadmin'] ) );

                $icon = ( $new['published'] ) ? $approved : '<a href="newvideos.php?op=approve&amp;lid=' . $lid . '">' . $imagearray['approve'] . ' </a>';
                $icon .= '<a href="index.php?op=edit&amp;lid=' . $lid . '">' . $imagearray['editimg'] . ' </a>';
                $icon .= '<a href="index.php?op=delete&amp;lid=' . $lid . '">' . $imagearray['deleteimg'] . '</a>';

                echo '<tr>';
                echo '<td class="head" style="text-align: center;"><small>' . $lid . '</small></td>';
                echo '<td class="even" nowrap><a href="newvideos.php?op=edit&amp;lid=' . $lid . '"><small>' . $title . '</small></a></td>';
                echo '<td class="even" style="text-align: center;" nowrap><small>' . $returnsource . '</small></td>';
                echo '<td class="even" style="text-align: center;" nowrap><small>' . $submitter . '</small></td>';
                echo '<td class="even" style="text-align: center;"><small>' . $datetime . '</small></td>';
                echo '<td class="even" style="text-align: center;" nowrap>' . $icon . '</td>';
                echo '</tr>';
            } 
        } else {
            echo '<tr><td style="text-align: center;" class="head" colspan="6">' . _AM_XTUBE_SUB_NOFILESWAITING . '</td></tr>';
        } 
        echo '</table>';

        include_once XOOPS_ROOT_PATH . '/class/pagenav.php';
//        $page = ( $new_array_count > $xoopsModuleConfig['admin_perpage'] ) ? _AM_XTUBE_MINDEX_PAGE : '';
        $pagenav = new XoopsPageNav( $new_array_count, $xoopsModuleConfig['admin_perpage'], $start, 'start' );
        echo '<div align="right" style="padding: 8px;">' . $pagenav -> renderNav() . '</div>';
        xoops_cp_footer();
        break;
} 
?>