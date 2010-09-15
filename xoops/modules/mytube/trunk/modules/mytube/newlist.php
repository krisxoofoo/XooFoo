<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: newlist.php
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

$xoopsOption['template_main'] = 'xoopstube_newlistindex.html';
include XOOPS_ROOT_PATH . '/header.php';

global $xoopsDB, $xoopsModule, $xoopsModuleConfig;

$catarray['imageheader'] = xtube_imageheader();
$xoopsTpl -> assign( 'catarray', $catarray );

if ( isset( $_GET['newvideoshowdays'] ) ) {
	$newvideoshowdays = $_GET['newvideoshowdays'] ? $_GET['newvideoshowdays'] : 7;
	if ( $newvideoshowdays != 7 ) {
          if ( $newvideoshowdays != 14 ) {
            if ( $newvideoshowdays != 30 ) {
              redirect_header( 'newlist.php?newvideoshowdays=7', 5, _MD_XTUBE_STOPIT . '<br /><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getvar( 'dirname' ) . '/images/icon/security.png" />' );
              exit();
            }
          }
        }
	$time_cur = time();
	$duration = ( $time_cur - ( 86400 * 30 ) );
	$duration_week = ( $time_cur - ( 86400 * 7 ) );
	$allmonthvideos = 0;
	$allweekvideos = 0;
	$result = $xoopsDB -> query( 'SELECT lid, cid, published, updated FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE (published >= ' . $duration . ' AND published <= ' . $time_cur . ') OR updated >= ' . $duration . ' AND (expired = 0 OR expired > ' . $time_cur . ') AND offline = 0' );
	while ( $myrow = $xoopsDB -> fetcharray( $result ) ) {
	    $published = ( $myrow['updated'] > 0 ) ? $myrow['updated'] : $myrow['published'];
	    $allmonthvideos++;
	    if ( $published > $duration_week ) {
	        $allweekvideos++;
	    }
	} 
	$xoopsTpl -> assign( 'allweekvideos', $allweekvideos );
	$xoopsTpl -> assign( 'allmonthvideos', $allmonthvideos );

//  List Last VARIABLE Days of videos
//	$newvideoshowdays = xtube_cleanRequestVars($_REQUEST, 'newvideoshowdays', 7 );
	$newvideoshowdays = ( !isset( $_GET['newvideoshowdays'] ) ) ? 7 : $_GET['newvideoshowdays'];
	$xoopsTpl -> assign( 'newvideoshowdays', intval( $newvideoshowdays ) );

	$dailyvideos = array();
	for( $i = 0; $i < intval( $newvideoshowdays ); $i++ ) {
	    $key = intval( $newvideoshowdays ) - $i - 1;
	    $time = $time_cur - ( 86400 * $key );
	    $dailyvideos[$key]['newvideodayRaw'] = $time;
	    $dailyvideos[$key]['newvideoView'] = mytube_time( formatTimestamp( $time, $xoopsModuleConfig['dateformat'] ) );
        $dailyvideos[$key]['totalvideos'] = 0;
	}  
}

$duration = ( $time_cur - ( 86400 * ( intval( $newvideoshowdays ) - 1 ) ) );
$result = $xoopsDB -> query( 'SELECT lid, cid, published, updated FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE (published > ' . $duration . ' AND published <= ' . $time_cur . ') OR (updated >= ' . $duration . ' AND updated <= ' . $time_cur . ') AND (expired = 0 OR expired > ' . $time_cur . ') AND offline = 0' );
while ( $myrow = $xoopsDB -> fetcharray( $result ) ) {
    $published = ( $myrow['updated'] > 0 ) ? $myrow['updated'] : $myrow['published'];
    $d = date( 'j', $published );
    $m = date( 'm', $published );
    $y = date( 'Y', $published );
    $key = intval( ( $time_cur - mktime ( 0, 0, 0, $m, $d, $y ) ) / 86400 );
    $dailyvideos[$key]['totalvideos']++;
} 
ksort( $dailyvideos );
reset( $dailyvideos );
$xoopsTpl -> assign( 'dailyvideos', $dailyvideos );
unset( $dailyvideos );

$mytree = new XoopsTree( $xoopsDB -> prefix( 'xoopstube_cat' ), 'cid', 'pid' );
$sql  = 'SELECT * FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' );
$sql .= 'WHERE (published > 0 AND published <= ' . $time_cur . ')
		 OR (updated > 0 AND updated <= ' . $time_cur . ')
		 AND (expired = 0 OR expired > ' . $time_cur . ')
		 AND offline = 0
		 ORDER BY ' . $xoopsModuleConfig['linkxorder'];
$result = $xoopsDB -> query( $sql, 10 , 0 );
while ( $video_arr = $xoopsDB -> fetchArray( $result ) ) {
    include XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/include/videoloadinfo.php';
}

$xoopsTpl -> assign( 'back' , '<a href="javascript:history.go(-1)"><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getvar( 'dirname' ) . '/images/icon/back.png" /></a>' );
$xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );

include XOOPS_ROOT_PATH . '/footer.php';

?>