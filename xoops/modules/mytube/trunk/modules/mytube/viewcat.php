<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: viewcat.php
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

// Begin Main page Heading etc
//$cid = xtube_cleanRequestVars( $_REQUEST, 'cid', 0 );
$selectdate = xtube_cleanRequestVars( $_REQUEST, 'selectdate', '' );
$list = xtube_cleanRequestVars( $_REQUEST, 'list', '' );
$start = xtube_cleanRequestVars( $_REQUEST, 'start', 0 );
$start = intval( $start );
//$cid = intval($cid);
$cid = empty( $_GET['cid'] ) ? 0 : intval( $_GET['cid'] ) ; // change 15-09-2010

$catsort = $xoopsModuleConfig['sortcats'];
$mytree = new XoopsTree( $xoopsDB -> prefix( 'xoopstube_cat' ), 'cid', 'pid' );
$arr = $mytree -> getFirstChild( $cid, $catsort );

if ( is_array( $arr ) > 0 && !$list && !$selectdate ) {
    if ( false == xtube_checkgroups( $cid ) ) {
        redirect_header( 'index.php', 1, _MD_XTUBE_MUSTREGFIRST );
        exit();
    } 
}

$xoopsOption['template_main'] = 'xoopstube_viewcat.html';
include XOOPS_ROOT_PATH . '/header.php';

global $xoopsModuleConfig, $xoopsModule;
$catarray['letters'] = mytube_letters();
$catarray['imageheader'] = xtube_imageheader();
$xoopsTpl -> assign( 'catarray', $catarray );

// Breadcrumb
$pathstring = '<a href="index.php">' . _MD_XTUBE_MAIN . '</a>&nbsp;:&nbsp;';
$pathstring .= $mytree -> getNicePathFromId( $cid, 'title', 'viewcat.php?op=' );
$xoopsTpl -> assign( 'category_path', $pathstring );
$xoopsTpl -> assign( 'category_id', $cid );

// Display Sub-categories for selected Category
if ( is_array( $arr ) > 0 && !$list && !$selectdate ) {
    $scount = 1;
    foreach( $arr as $ele ) {
        if ( xtube_checkgroups( $ele['cid'] ) == false ) {
            continue;
        } 
        $sub_arr = array();
        $sub_arr = $mytree -> getFirstChild( $ele['cid'], $catsort );
        $space = 1;
        $chcount = 1;
        $infercategories = '';
        foreach( $sub_arr as $sub_ele ) {
            // Subitem file count
            $hassubitems = xtube_getTotalItems( $sub_ele['cid'] );
            // Filter group permissions
            if ( true == xtube_checkgroups( $sub_ele['cid'] ) ) {
                // If subcategory count > 5 then finish adding subcats to $infercategories and end
                if ( $chcount > 5 ) {
                    $infercategories .= '...';
                    break;
                } 
                if ( $space > 0 )
                    $infercategories .= ', ';

                $infercategories .= '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $sub_ele['cid'] . '">' . $xtubemyts -> htmlSpecialCharsStrip( $sub_ele['title'] ) . '</a> (' . $hassubitems['count'] . ')';
                $space++;
                $chcount++;
            } 
        } 
        $totalvideos = xtube_getTotalItems( $ele['cid'] );
        $indicator = xtube_isnewimage( $totalvideos['published'] );
         
		// This code is copyright WF-Projects
		// Using this code without our permission or removing this code voids the license agreement 

        $_image = ( $ele['imgurl'] ) ? urldecode( $ele['imgurl'] ) : '';
	if ( $_image != '' && $xoopsModuleConfig['usethumbs'] ) {
            $_thumb_image = new xtubeThumbsNails( $_image, $xoopsModuleConfig['catimage'], 'thumbs' );
	    if ( $_thumb_image ) {
                $_thumb_image -> setUseThumbs( 1 );
                $_thumb_image -> setImageType( 'gd2' );
                $_image = $_thumb_image -> do_thumb( $xoopsModuleConfig['shotwidth'],
                    $xoopsModuleConfig['shotheight'],
                    $xoopsModuleConfig['imagequality'],
                    $xoopsModuleConfig['updatethumbs'],
                    $xoopsModuleConfig['keepaspect'] 
                    );
            }
        } 
        
	if ( empty( $_image ) || $_image == '' ) {
            $imgurl = $indicator['image'];
            $_width = 33;
            $_height = 24;
        } else {
            $imgurl = "{$xoopsModuleConfig['catimage']}/$_image";
            $_width = $xoopsModuleConfig['shotwidth'];
            $_height = $xoopsModuleConfig['shotheight'];
        }
        /*
	* End
	*/

        $xoopsTpl -> append( 'subcategories',
            array( 'title' => $xtubemyts -> htmlSpecialCharsStrip( $ele['title'] ),
                'id' => $ele['cid'],
                'image' => XOOPS_URL . "/$imgurl",
                'width' => $_width,
                'height' => $_height,
                'infercategories' => $infercategories,
                'totalvideos' => $totalvideos['count'],
                'count' => $scount,
                'alttext' => $ele['description'] )
            );
        $scount++;
    }
}

// Show Description for Category listing
$sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'xoopstube_cat' ) . ' WHERE cid=' . intval( $cid );
$head_arr = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
$html   = ( $head_arr['nohtml'] ) ? 0 : 1;
$smiley = ( $head_arr['nosmiley'] ) ? 0 : 1;
$xcodes = ( $head_arr['noxcodes'] ) ? 0 : 1;
$images = ( $head_arr['noimages'] ) ? 0 : 1;
$breaks = ( $head_arr['nobreak'] ) ? 1 : 0;
$description = $xtubemyts -> displayTarea( $head_arr['description'], $html, $smiley, $xcodes, $images, $breaks );
$xoopsTpl -> assign( 'description', $description );
$module_handler = &xoops_gethandler( 'module' );
$versioninfo = &$module_handler -> get( $xoopsModule -> getVar( 'mid' ) );
if ($head_arr['title'] > '') {
	$xoopsTpl -> assign( 'xoops_pagetitle', $versioninfo -> getInfo( 'name' ) . ':&nbsp;' . $head_arr['title'] );
} else {
	$xoopsTpl -> assign( 'xoops_pagetitle', $versioninfo -> getInfo( 'name' ) );
}

if ($head_arr['client_id'] > 0) {
  $catarray['imageheader'] = xtube_getbanner_from_id_client( $head_arr['client_id'] );
} elseif ($head_arr['banner_id'] > 0) {
  $catarray['imageheader'] = xtube_getbanner_from_id_banner( $head_arr['banner_id'] );
} else {
  $catarray['imageheader'] = xtube_imageheader();
}
$xoopsTpl -> assign( 'catarray', $catarray );
// Extract linkload information from database
$xoopsTpl -> assign( 'show_categort_title', true );


$orderby = ( isset( $_REQUEST['orderby'] ) && !empty( $_REQUEST['orderby'] ) ) ? xtube_convertorderbyin( htmlspecialchars( $_REQUEST['orderby'] ) ) : xtube_convertorderbyin( $xoopsModuleConfig['linkxorder'] );

if ( $selectdate ) {

    $d = date( 'j', $selectdate );
    $m = date( 'm', $selectdate );
    $y = date( 'Y', $selectdate );

    $stat_begin = mktime ( 0, 0, 0, $m, $d, $y );
    $stat_end   = mktime ( 23, 59, 59, $m, $d, $y );

    $query = ' WHERE published>=' . $stat_begin . ' AND published<=' . $stat_end . ' AND (expired=0 OR expired>' . time() . ') AND offline=0 AND cid>0';

    $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . $query . ' ORDER BY ' . $orderby;
    $result = $xoopsDB -> query( $sql, $xoopsModuleConfig['perpage'], $start );

    $sql = 'SELECT COUNT(*) FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . $query;
    list( $count ) = $xoopsDB -> fetchRow( $xoopsDB -> query( $sql ) );

    $list_by = 'selectdate=' . $selectdate;
	
} elseif ( $list ) {

    $query = " WHERE title LIKE '$list%' AND (published>0 AND published<=" . time() . ") AND (expired=0 OR expired>" . time() . ") AND offline=0 AND cid>0";

    $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . $query . ' ORDER BY ' . $orderby;
    $result = $xoopsDB -> query( $sql, $xoopsModuleConfig['perpage'], $start );

    $sql = 'SELECT COUNT(*) FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . $query;
    list( $count ) = $xoopsDB -> fetchRow( $xoopsDB -> query( $sql ) );
    $list_by = "list=$list";
	
} else {

	$query = 'WHERE a.published>0 AND a.published<=' . time() . ' AND (a.expired=0 OR a.expired>' . time() . ') AND a.offline=0' . ' AND (b.cid=a.cid OR (a.cid=' . $cid . ' OR b.cid=' . $cid . '))';

    $sql = 'SELECT DISTINCT a.* FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' a LEFT JOIN ' . $xoopsDB -> prefix( 'xoopstube_altcat' ) . ' b ON b.lid=a.lid ' . $query . ' ORDER BY ' . $orderby;
    $result = $xoopsDB -> query( $sql, $xoopsModuleConfig['perpage'], $start );

    $sql2 = 'SELECT COUNT(*) FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' a LEFT JOIN ' . $xoopsDB -> prefix( 'xoopstube_altcat' ) . ' b ON b.lid=a.lid ' . $query;
    list( $count ) = $xoopsDB -> fetchRow( $xoopsDB -> query( $sql2 ) );

    $order = xtube_convertorderbyout( $orderby );
    $list_by = 'cid=' . $cid . '&orderby=' . $order;
	$xoopsTpl -> assign( 'show_categort_title', false );
	
}

$pagenav = new XoopsPageNav( $count, $xoopsModuleConfig['perpage'], $start, 'start', $list_by );

// Show links
if ( $count > 0 ) {
    $moderate = 0;
    while ( $video_arr = $xoopsDB -> fetchArray( $result ) ) {
		require XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/include/videoloadinfo.php';
        $xoopsTpl -> append( 'video', $video );
    }
	unset( $video_arr );
	
    // Show order box
    $xoopsTpl -> assign( 'show_videos', false );
    if ( $count > 1 && $cid != 0 ) {
        $xoopsTpl -> assign( 'show_videos', true );
        $orderbyTrans = xtube_convertorderbytrans( $orderby );
        $xoopsTpl -> assign( 'lang_cursortedby', sprintf( _MD_XTUBE_CURSORTBY, xtube_convertorderbytrans( $orderby ) ) );
        $orderby = xtube_convertorderbyout( $orderby );
    } 

    // Screenshots display
    $xoopsTpl -> assign( 'show_screenshot', false );
    if ( isset( $xoopsModuleConfig['screenshot'] ) && $xoopsModuleConfig['screenshot'] == 1 ) {
        $xoopsTpl -> assign( 'shotwidth', $xoopsModuleConfig['shotwidth'] );
        $xoopsTpl -> assign( 'shotheight', $xoopsModuleConfig['shotheight'] );
        $xoopsTpl -> assign( 'show_screenshot', true );
    } 

    // Nav page render
    $page_nav = $pagenav -> renderNav();
    $istrue = ( isset( $page_nav ) && !empty( $page_nav ) ) ? true : false;
    $xoopsTpl -> assign( 'page_nav', $istrue );
    $xoopsTpl -> assign( 'pagenav', $page_nav );
    $xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );
} 

$xoopsTpl -> assign( 'cat_columns', $xoopsModuleConfig['catcolumns'] );

include XOOPS_ROOT_PATH . '/footer.php';
?>