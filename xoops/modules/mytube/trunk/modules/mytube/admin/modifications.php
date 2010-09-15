<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/modifications.php
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

global $mytubetree, $xoopsModuleConfig;

$op = xtube_cleanRequestVars( $_REQUEST, 'op', '' );
$requestid = xtube_cleanRequestVars( $_REQUEST, 'requestid', 0 );

switch ( strtolower( $op ) ) {
    case 'listmodreqshow':

        xoops_cp_header();
        xtube_adminmenu( _AM_XTUBE_MOD_MODREQUESTS );

        $sql = 'SELECT modifysubmitter, requestid, lid, cid, title, vidid, submitter, publisher, vidsource, description, time, keywords, item_tag, picurl FROM ' . $xoopsDB -> prefix( 'xoopstube_mod' ) . ' WHERE requestid=' . $requestid;
        $mod_array = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
        unset( $sql );

        $sql = 'SELECT submitter, lid, cid, title, vidid, submitter, publisher, vidsource, description, time, keywords, item_tag, picurl FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE lid=' . $mod_array['lid'] ;
        $orig_array = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
        unset( $sql );

        $orig_user = new XoopsUser( $orig_array['submitter'] );
        $submittername = mytube_getLinkedUnameFromId( $orig_array['submitter'] );
        $submitteremail = $orig_user -> getUnameFromId( 'email' );

        echo '<div><b>' . _AM_XTUBE_MOD_MODPOSTER . '</b> ' . $submittername . '</div>';
        $not_allowed = array( 'lid', 'submitter', 'requestid', 'modifysubmitter' );
        $sform = new XoopsThemeForm( _AM_XTUBE_MOD_ORIGINAL, 'storyform', 'index.php' );
        foreach ( $orig_array as $key => $content ) {
            if ( in_array( $key , $not_allowed ) ) {
                continue;
            } 
            $lang_def = constant( '_AM_XTUBE_MOD_' . strtoupper( $key ) );

            if ( $key == 'cid' ) {
                $sql = 'SELECT title FROM ' . $xoopsDB -> prefix( 'xoopstube_cat' ) . ' WHERE cid=' . $content;
                $row = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
                $content = $row['title'];
            }

            if ( $key == 'vidsource' ) {
              include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar('dirname') . '/include/video.php';
              $content = xtube_returnsource( $content );
            }

            $sform -> addElement( new XoopsFormLabel( $lang_def, $content ) );
        } 
        $sform -> display();

        $orig_user = new XoopsUser( $mod_array['modifysubmitter'] );
        $submittername = mytube_getLinkedUnameFromId( $mod_array['modifysubmitter'] );
        $submitteremail = $orig_user -> getUnameFromId('email' );

        echo '<div><b>' . _AM_XTUBE_MOD_MODIFYSUBMITTER . '</b> ' . $submittername . '</div>';
        $sform = new XoopsThemeForm( _AM_XTUBE_MOD_PROPOSED, 'storyform', 'modifications.php' );
        foreach ( $mod_array as $key => $content ) {
            if ( in_array( $key, $not_allowed ) ) {
                continue;
            } 
            $lang_def = constant( '_AM_XTUBE_MOD_' . strtoupper( $key ) );

            if ( $key == 'cid' ) {
                $sql = 'SELECT title FROM ' . $xoopsDB -> prefix( 'xoopstube_cat' ) . ' WHERE cid=' . $content;
                $row = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
                $content = $row['title'];
            }
            
            if ( $key == 'vidsource') {
              include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar('dirname') . '/include/video.php';
              $content = xtube_returnsource( $content );
            }

            $sform -> addElement( new XoopsFormLabel( $lang_def, $content ) );
        } 
        $button_tray = new XoopsFormElementTray( '', '' );
        $button_tray -> addElement( new XoopsFormHidden( 'requestid', $requestid ) );
        $button_tray -> addElement( new XoopsFormHidden( 'lid', $mod_array['requestid'] ) );
        $hidden = new XoopsFormHidden( 'op', 'changemodreq' );
        $button_tray -> addElement( $hidden );
        if ( $mod_array ) {
            $butt_dup = new XoopsFormButton( '', '', _AM_XTUBE_BAPPROVE, 'submit' );
            $butt_dup -> setExtra( 'onclick="this.form.elements.op.value=\'changemodreq\'"' );
            $button_tray -> addElement( $butt_dup );
        } 
        $butt_dupct2 = new XoopsFormButton( '', '', _AM_XTUBE_BIGNORE, 'submit' );
        $butt_dupct2 -> setExtra( 'onclick="this.form.elements.op.value=\'ignoremodreq\'"' );
        $button_tray -> addElement( $butt_dupct2 );
        $sform -> addElement( $button_tray );
        $sform -> display();
        xoops_cp_footer();
        break;

    case 'changemodreq':
        $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'xoopstube_mod' ) . ' WHERE requestid=' . $requestid;
        $video_array = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
        $lid = $video_array['lid'];
        $cid = $video_array['cid'];
        $title = $video_array['title'];
        $publisher = $xoopsUser -> uname();
        $screenshot = $video_array['screenshot'];
        $vidsource = $video_array['vidsource'];
        $descriptionb = $video_array['description'];
        $submitter = $video_array['modifysubmitter'];
        $keywords = $video_array['keywords'];
        $vidid = $video_array['vidid'];
        $item_tag = $video_array['item_tag'];
        $picurl = $video_array['picurl'];
        $title = $video_array['title'];
        $time = $video_array['time'];
        $updated = time();

        $xoopsDB -> query( "UPDATE " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " SET cid = $cid, title='$title', vidid='$vidid', screenshot='', publisher='$publisher', vidsource='$vidsource', description='$descriptionb', time='$time', keywords='$keywords', item_tag='$item_tag', picurl='$picurl', updated='$updated' WHERE lid = " . $lid );
        $sql = 'DELETE FROM ' . $xoopsDB -> prefix( 'xoopstube_mod' ) . ' WHERE requestid=' . $requestid;
        $result = $xoopsDB -> query( $sql );
        redirect_header( 'index.php', 1, _AM_XTUBE_MOD_REQUPDATED );
        break;

    case 'ignoremodreq':
        $sql = sprintf( 'DELETE FROM ' . $xoopsDB -> prefix( 'xoopstube_mod' ) . ' WHERE requestid=' . $requestid );
        $xoopsDB -> query( $sql );
        redirect_header( 'index.php', 1, _AM_XTUBE_MOD_REQDELETED );
        break;

    case 'main':
    default:

        $start = isset( $_GET['start'] ) ? intval( $_GET['start'] ) : 0;
        $mytubetree = new MyTubeTree( $xoopsDB -> prefix( 'xoopstube_mod' ), 'requestid', 0 );
        $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'xoopstube_mod' ) . ' ORDER BY requestdate DESC' ;
        $result = $xoopsDB -> query( $sql, $xoopsModuleConfig['admin_perpage'] , $start );
        $totalmodrequests = $xoopsDB -> getRowsNum( $xoopsDB -> query( $sql ) );

        xoops_cp_header();
        xtube_adminmenu( '<h4>' . _AM_XTUBE_MOD_MODREQUESTS . '</h4>' );

        echo '<fieldset style="border: #E8E8E8 1px solid;">
		      <legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_XTUBE_MOD_MODREQUESTSINFO . '</legend>';
        echo '<div style="padding: 8px;">' . _AM_XTUBE_MOD_TOTMODREQUESTS . '<b>' . $totalmodrequests . '</b></div>';
		echo '</fieldset>';

        echo '<table width="100%" cellspacing="1" class="outer" style="font-size: smaller;>';
        echo '<tr style="text-align: center;">';
        echo '<th>' . _AM_XTUBE_MOD_MODID . '</th>';
        echo '<th style="text-align: left;">' . _AM_XTUBE_MOD_MODTITLE . '</th>';
        echo '<th>' . _AM_XTUBE_MOD_MODIFYSUBMIT . '</th>';
        echo '<th>' . _AM_XTUBE_MOD_DATE . '</th>';
        echo '<th>' . _AM_XTUBE_MINDEX_ACTION . '</th>';
        echo '</tr>';
        if ( $totalmodrequests > 0 ) {
            while ( $video_arr = $xoopsDB -> fetchArray( $result ) ) {
                $path = $mytubetree -> getNicePathFromId( $video_arr['requestid'], 'title', 'modifications.php?op=listmodreqshow&requestid' );
                $path = str_replace( '/', '', $path );
                $path = str_replace( ':', '', trim( $path ) );
                $title = trim( $path );
                $submitter = mytube_getLinkedUnameFromId( $video_arr['modifysubmitter'] );
                $requestdate = mytube_time( formatTimestamp( $video_arr['requestdate'], $xoopsModuleConfig['dateformatadmin'] ) );

                echo '<tr style="text-align: center;">';
                echo '<td class="head">' . $video_arr['requestid'] . '</td>';
                echo '<td class="even" style="text-align: left;">' . $title . '</td>';
                echo '<td class="even">' . $submitter . '</td>';
                echo '<td class="even">' . $requestdate . '</td>';
                echo '<td class="even"><a href="modifications.php?op=listmodreqshow&amp;requestid=' . $video_arr['requestid'] . '">' . $imagearray['view'] . '</a></td>';
                echo '</tr>';
            } 
        } else {
            echo '<tr style="text-align: center;"><td class="head" colspan="7">' . _AM_XTUBE_MOD_NOMODREQUEST . '</td></tr>';
        } 
        echo '</table>';

        include_once XOOPS_ROOT_PATH . '/class/pagenav.php';
//        $page = ( $totalmodrequests > $xoopsModuleConfig['admin_perpage'] ) ? _AM_xtube_MINDEX_PAGE : '';
        $pagenav = new XoopsPageNav( $totalmodrequests, $xoopsModuleConfig['admin_perpage'], $start, 'start' );
        echo "<div style='text-align: right; padding: 8px;'>" . $pagenav -> renderNav() . '</div>';
        xoops_cp_footer();
} 
?>