<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: ratevideo.php
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

include 'header.php';

global $xtubemyts, $xoTheme;

// Check if videoload POSTER is voting (UNLESS Anonymous users allowed to post)
$lid = xtube_cleanRequestVars( $_REQUEST, 'lid', '' );
$lid = intval($lid);

$ip = getenv( "REMOTE_ADDR" );
$ratinguser = ( !is_object( $xoopsUser ) ) ? 0 : $xoopsUser -> getVar( 'uid' );

if ( $xoopsModuleConfig['showrating'] == 0 || $lid == '' ) {
	$ratemessage = _MD_XTUBE_CANTVOTEOWN;
	redirect_header( 'index.php', 4, $ratemessage );
	exit();
}

if ( $ratinguser != 0 ) {
    $result = $xoopsDB -> query( 'SELECT cid, submitter FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE lid=' . intval($lid) );
    while ( list( $cid, $ratinguserDB ) = $xoopsDB -> fetchRow( $result ) ) {
        if ( $ratinguserDB == $ratinguser ) {
            $ratemessage = _MD_XTUBE_CANTVOTEOWN;
            redirect_header( 'singlevideo.php?cid=' . intval($cid) . '&amp;lid=' . intval($lid), 4, $ratemessage );
            exit();
        } 
    } 
    // Check if REG user is trying to vote twice.
    $result = $xoopsDB -> query( 'SELECT cid, ratinguser FROM ' . $xoopsDB -> prefix( 'xoopstube_votedata' ) . ' WHERE lid=' . intval($lid) );
    while ( list( $cid, $ratinguserDB ) = $xoopsDB -> fetchRow( $result ) ) {
        if ( $ratinguserDB == $ratinguser ) {
            $ratemessage = _MD_XTUBE_VOTEONCE;
            redirect_header( 'singlevideo.php?cid=' . intval($cid) . '&amp;lid=' . intval($lid), 4, $ratemessage );
            exit();
        } 
    } 
} else {
    // Check if ANONYMOUS user is trying to vote more than once per day.
    $yesterday = ( time() - ( 86400 * $anonwaitdays ) );
    $result = $xoopsDB -> query( 'SELECT COUNT(*) FROM ' . $xoopsDB -> prefix( 'xoopstube_votedata' ) . ' WHERE lid=' . intval($lid) . ' AND ratinguser=0 AND ratinghostname=' . $ip . ' AND ratingtimestamp > ' . $yesterday );
    list( $anonvotecount ) = $xoopsDB -> fetchRow( $result );
    if ( $anonvotecount >= 1 ) {
        $ratemessage = _MD_XTUBE_VOTEONCE;
        redirect_header( 'singlevideo.php?cid=' . intval($cid) . '&amp;lid=' . intval($lid), 4, $ratemessage );
        exit();
    } 
} 

if ( !empty( $_POST['submit'] ) ) {
    $ratinguser = ( !is_object( $xoopsUser ) ) ? 0 : $xoopsUser -> getVar( 'uid' ); 
    // Make sure only 1 anonymous from an IP in a single day.
    $anonwaitdays = 1;
    $ip = getenv( 'REMOTE_ADDR' );
    $lid = xtube_cleanRequestVars( $_REQUEST, 'lid', 0 );
    $cid = xtube_cleanRequestVars( $_REQUEST, 'cid', 0 );
    $rating = xtube_cleanRequestVars( $_REQUEST, 'rating', 0 );
    $title = $xtubemyts -> addslashes( trim($_POST['title']) );
	$lid = intval($lid);
	$cid = intval($cid);
	$rating = intval($rating);
    // Check if Rating is Null
    if ( $rating == '--' ) {
        $ratemessage = _MD_XTUBE_NORATING;
        redirect_header( 'ratevideo.php?cid=' . intval($cid) . '&amp;lid=' . intval($lid), 4, $ratemessage );
        exit();
    } 
    // All is well.  Add to Line Item Rate to DB.
    $newid = $xoopsDB -> genId( $xoopsDB -> prefix( 'xoopstube_votedata' ) . '_ratingid_seq' );
    $datetime = time();
    $sql = sprintf( "INSERT INTO %s (ratingid, lid, ratinguser, rating, ratinghostname, ratingtimestamp, title) VALUES (%u, %u, %u, %u, %s, %u, %s)", $xoopsDB -> prefix( 'xoopstube_votedata' ), $newid, intval($lid), $ratinguser, $rating, $xoopsDB -> quoteString( $ip ), $datetime, $xoopsDB -> quoteString( $title ) );
    if ( !$result = $xoopsDB -> query( $sql ) ) {
        $ratemessage = _MD_XTUBE_ERROR;
    } else {
        // All is well.  Calculate Score & Add to Summary (for quick retrieval & sorting) to DB.
        xtube_updaterating( $lid );
        $ratemessage = _MD_XTUBE_VOTEAPPRE . '<br />' . sprintf( _MD_XTUBE_THANKYOU, $xoopsConfig['sitename'] );
    } 
    redirect_header( 'singlevideo.php?cid=' . intval($cid) . '&amp;lid=' . intval($lid), 4, $ratemessage );
    exit();
} else {
    $xoopsOption['template_main'] = 'xoopstube_ratevideo.html';
    include XOOPS_ROOT_PATH . '/header.php';

    $catarray['imageheader'] = xtube_imageheader();
    $cid = xtube_cleanRequestVars( $_REQUEST, 'cid', 0 );
	$cid = intval($cid);

    $catarray['imageheader'] = xtube_imageheader();
    $xoopsTpl -> assign( 'catarray', $catarray );

    $result = $xoopsDB -> query( 'SELECT title FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE lid=' . intval($lid) );
    list( $title ) = $xoopsDB -> fetchRow( $result );
    $xoopsTpl -> assign( 'video', array( 'id' => intval($lid), 'cid' => intval($cid), 'title' => $xtubemyts -> htmlSpecialCharsStrip( $title ) ) );
    
    mytube_noindexnofollow();
	
    $xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );
    include XOOPS_ROOT_PATH . '/footer.php';
}

mytube_noindexnofollow();
	
$xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );
include XOOPS_ROOT_PATH . '/footer.php';
?>