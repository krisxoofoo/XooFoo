<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: include/functions.php
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

// xtube_gethandler()
//
// @param  $name
// @param boolean $optional
// @return
function &xtube_gethandler( $name, $optional = false ) {
    global $handlers, $xoopsModule;

    $name = strtolower( trim( $name ) );
    if ( !isset( $handlers[$name] ) ) {
        if ( file_exists( $hnd_file = XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/class/class_' . $name . '.php' ) ) {
            require_once $hnd_file;
        } 
        $class = 'xtube' . ucfirst( $name ) . 'Handler';
        if ( class_exists( $class ) ) {
            $handlers[$name] = new $class( $GLOBALS['xoopsDB'] );
        } 
    } 
    if ( !isset( $handlers[$name] ) && !$optional ) {
        trigger_error( '<div>Class <b>' . $class . '</b> does not exist.</div>
						<div>Handler Name: ' . $name, E_USER_ERROR ) . '</div>';
    } 
    return isset( $handlers[$name] ) ? $handlers[$name] : false;
} 

function xtube_checkgroups( $cid = 0, $permType = 'XTubeCatPerm', $redirect = false ) {
    global $xoopsUser, $xoopsModule;

    $groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = &xoops_gethandler( 'groupperm' );
    if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, $xoopsModule -> getVar( 'mid' ) ) ) {
        if ( $redirect == false ) {
            return false;
        } else {
            redirect_header( 'index.php', 3, _NOPERM );
            exit();
        } 
    } 
    return true;
} 

function xtube_getVoteDetails( $lid = 0 ) {
    global $xoopsDB;

    $sql = 'SELECT 
			COUNT(rating) AS rate, 
			MIN(rating) AS min_rate, 
			MAX(rating) AS max_rate, 
			AVG(rating) AS avg_rate, 
			COUNT(ratinguser) AS rating_user, 
			MAX(ratinguser) AS max_user, 
			MAX(title) AS max_title, 
			MIN(title) AS min_title, 
			sum(ratinguser = 0) AS null_ratinguser 
			FROM ' . $xoopsDB -> prefix( 'xoopstube_votedata' );
    if ( $lid > 0 ) {
        $sql .= ' WHERE lid=' . $lid;
    } 
    if ( !$result = $xoopsDB -> query( $sql ) ) {
        return false;
    } 
    $ret = $xoopsDB -> fetchArray( $result );
    return $ret;
} 

function xtube_calcVoteData( $sel_id = 0 ) {
    $ret = array();
    $ret['useravgrating'] = 0;

    $sql = 'SELECT rating FROM ' . $xoopsDB -> prefix( 'xoopstube_votedata' );
    if ( $sel_id != 0 ) {
        ' WHERE lid=' . $sel_id;
    } 
    if ( !$result = $xoopsDB -> query( $sql ) ) {
        return false;
    } 
    $ret['uservotes'] = $xoopsDB -> getRowsNum( $result );
    while ( list( $rating ) = $xoopsDB -> fetchRow( $result ) ) {
        $ret['useravgrating'] += intval( $rating );
    } 
    if ( $ret['useravgrating'] > 0 ) {
        $ret['useravgrating'] = number_format( ( $ret['useravgrating'] / $ret['uservotes'] ), 2 );
    } 
    return $ret;
} 

function xtube_cleanRequestVars( &$array, $name = null, $def = null, $strict = false, $lengthcheck = 15 ) {
    // Sanitise $_request for further use.  This method gives more control and security.
    // Method is more for functionality rather than beauty at the moment, will correct later.
    unset( $array['usercookie'] );
    unset( $array['PHPSESSID'] );

    if ( is_array( $array ) && $name == null ) {
        $globals = array();
        foreach ( array_keys( $array ) as $k ) {
            $value = strip_tags( trim( $array[$k] ) );
            if ( strlen( $value >= $lengthcheck ) ) {
                return null;
            }
            if ( ctype_digit( $value ) ) {
                $value = intval( $value );
            } else {
                if ( $strict == true ) {
                    $value = preg_replace( '/\W/', '', trim( $value ) );
                } 
                $value = strtolower( strval( $value ) );
            } 
            $globals[$k] = $value;
        } 
        return $globals;
    }
    if ( !isset( $array[$name] ) || !array_key_exists( $name, $array ) ) {
        return $def;
    } else {
        $value = strip_tags( trim( $array[$name] ) );
    }
    if ( ctype_digit( $value ) ) {
        $value = intval( $value );
    } else {
        if ( $strict == true ) {
            $value = preg_replace( '/\W/', '', trim( $value ) );
        } 
        $value = strtolower( strval( $value ) );
    } 
    return $value;
} 

function xtube_toolbar( $cid = 0 ) {
    $toolbar = '[ ';
    if ( true == xtube_checkgroups( $cid, 'XTubeSubPerm' ) ) {
        $toolbar .= '<a href="submit.php?cid=' . $cid . '">' . _MD_XTUBE_SUBMITVIDEO . '</a> | ';
    } 
    $toolbar .= '<a href="newlist.php?newvideoshowdays=7">' . _MD_XTUBE_LATESTLIST . '</a> | <a href="topten.php?list=hit">' . _MD_XTUBE_POPULARITY . '</a> | <a href="topten.php?list=rate">' . _MD_XTUBE_TOPRATED . '</a> ]';
    return $toolbar;
} 

function xtube_serverstats() {
global $xoopsModule;
    echo '<fieldset style="border: #E8E8E8 1px solid;">
	      <legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_XTUBE_VIDEO_IMAGEINFO . '</legend>
	      <div style="padding: 8px;">
			<img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/server.png" alt="" style="float: left; padding-right: 10px;" />
		  <div>' . _AM_XTUBE_VIDEO_SPHPINI . '</div>';

    $safemode = ( ini_get( 'safe_mode' ) ) ? _AM_XTUBE_VIDEO_ON . _AM_XTUBE_VIDEO_SAFEMODEPROBLEMS : _AM_XTUBE_VIDEO_OFF;
    $registerglobals = ( ini_get( 'register_globals' ) == '' ) ? _AM_XTUBE_VIDEO_OFF : _AM_XTUBE_VIDEO_ON;
    $videos = ( ini_get( 'file_uploads' ) ) ? _AM_XTUBE_VIDEO_ON : _AM_XTUBE_VIDEO_OFF;
    $gdlib = ( function_exists( 'gd_info' ) ) ? _AM_XTUBE_VIDEO_GDON : _AM_XTUBE_VIDEO_GDOFF;
    echo '<li>' . _AM_XTUBE_VIDEO_GDLIBSTATUS . $gdlib;
    if ( function_exists( 'gd_info' ) ) {
        if ( true == $gdlib = gd_info() ) {
            echo '<li>' . _AM_XTUBE_VIDEO_GDLIBVERSION . '<b>' . $gdlib['GD Version'] . '</b>';
        } 
    } 
    echo '<br /><br />';
    echo '<li>' . _AM_XTUBE_VIDEO_SAFEMODESTATUS . $safemode;
    echo '<li>' . _AM_XTUBE_VIDEO_REGISTERGLOBALS . $registerglobals;
    echo '<li>' . _AM_XTUBE_VIDEO_SERVERUPLOADSTATUS . $videos;
    echo '</div>';
    echo '</fieldset>';
} 

// xtube_displayicons()
//
// @param  $time
// @param integer $status
// @param integer $counter
// @return
function xtube_displayicons( $time, $status = 0, $counter = 0 ) {
    global $xoopsModuleConfig, $xoopsModule;

    $new = '';
    $pop = '';
    $newdate = ( time() - ( 86400 * intval( $xoopsModuleConfig['daysnew'] ) ) );
    $popdate = ( time() - ( 86400 * intval( $xoopsModuleConfig['daysupdated'] ) ) ) ;

    if ( $xoopsModuleConfig['displayicons'] != 3 ) {
        if ( $newdate < $time ) {
            if ( intval( $status ) > 1 ) {
                if ( $xoopsModuleConfig['displayicons'] == 1 )
                    $new = '&nbsp;<img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/update.png" alt="" style="vertical-align: middle;" />';
                if ( $xoopsModuleConfig['displayicons'] == 2 )
                    $new = '<i>' . _MD_XTUBE_UPDATED . '</i>';
            } else {
                if ( $xoopsModuleConfig['displayicons'] == 1 )
                    $new = '&nbsp;<img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/new.png" alt="" style="vertical-align: middle;" />';
                if ( $xoopsModuleConfig['displayicons'] == 2 )
                    $new = '<i>' . _MD_XTUBE_NEW . '</i>';
            }
        } 
        if ( $popdate > $time ) {
            if ( $counter >= $xoopsModuleConfig['popular'] ) {
                if ( $xoopsModuleConfig['displayicons'] == 1 )
                    $pop = '&nbsp;<img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/popular.png" alt="" style="vertical-align: middle;" />';
                if ( $xoopsModuleConfig['displayicons'] == 2 )
                    $pop = '<i>' . _MD_XTUBE_POPULAR . '!</i>';
            } 
        } 
    } 
    $icons = $new . ' ' . $pop;
    return $icons;
} 

if ( !function_exists( 'xtube_convertorderbyin' ) ) {
    // Reusable Link Sorting Functions
    // xtube_convertorderbyin()
    // @param  $orderby
    // @return
    function xtube_convertorderbyin( $orderby ) {
        switch ( trim( $orderby ) ) {
            case 'titleA':
                $orderby = 'title ASC';
                break;
            case 'dateA':
                $orderby = 'published ASC';
                break;
            case 'hitsA':
                $orderby = 'hits ASC';
                break;
            case 'ratingA':
                $orderby = 'rating ASC';
                break;
            case 'countryA':
                $orderby = 'country ASC';
                break;
            case 'titleD':
                $orderby = 'title DESC';
                break;
            case 'hitsD':
                $orderby = 'hits DESC';
                break;
            case 'ratingD':
                $orderby = 'rating DESC';
                break;
            case'dateD':
                $orderby = 'published DESC';
                break;
            case 'countryD':
                $orderby = 'country DESC';
                break;
        } 
        return $orderby;
    } 
} 
if ( !function_exists( 'xtube_convertorderbytrans' ) ) {
    function xtube_convertorderbytrans( $orderby ) {
		switch ( $orderby ) {
			case 'hits ASC':
				$orderbyTrans = _MD_XTUBE_POPULARITYLTOM;
				break;
			case 'hits DESC':
				$orderbyTrans = _MD_XTUBE_POPULARITYMTOL;
				break;
			case 'title ASC':
				$orderbyTrans = _MD_XTUBE_TITLEATOZ;
				break;
			case 'title DESC':
				$orderbyTrans = _MD_XTUBE_TITLEZTOA;
				break;
			case 'published ASC':
				$orderbyTrans = _MD_XTUBE_DATEOLD;
				break;
			case 'published DESC':
				$orderbyTrans = _MD_XTUBE_DATENEW;
				break;
			case 'rating ASC':
				$orderbyTrans = _MD_XTUBE_RATINGLTOH;
				break;
			case 'rating DESC':
				$orderbyTrans = _MD_XTUBE_RATINGHTOL;
				break;
			case'country ASC':
				$orderbyTrans = _MD_XTUBE_COUNTRYLTOH;
				break;
			case 'country DESC':
				$orderbyTrans = _MD_XTUBE_COUNTRYHTOL;
				break;
		}
        return $orderbyTrans;
    } 
} 
if ( !function_exists( 'xtube_convertorderbyout' ) ) {
    function xtube_convertorderbyout( $orderby ) {
		switch ( $orderby ) {
			case 'title ASC':
				$orderby = 'titleA';
				break;
			case 'published ASC':
				$orderby = 'dateA';
				break;
			case 'hits ASC':
				$orderby = 'hitsA';
				break;
			case 'rating ASC': 
				$orderby = 'ratingA';
				break;
			case 'country ASC':
				$orderby = 'countryA';
				break;
			case 'title DESC':
				$orderby = 'titleD';
				break;
			case 'published DESC':
				$orderby = 'dateD';
				break;
			case 'hits DESC': 
				$orderby = 'hitsD';
				break;
			case 'rating DESC':
				$orderby = 'ratingD';
				break;
			case 'country DESC':
				$orderby = 'countryD';
				break;
		}
        return $orderby;
    } 
} 

// updaterating()
// @param  $sel_id
// @return updates rating data in itemtable for a given item
function xtube_updaterating( $sel_id ) {
    global $xoopsDB;
    $query = 'SELECT rating FROM ' . $xoopsDB -> prefix( 'xoopstube_votedata' ) . ' WHERE lid=' . $sel_id;
    $voteresult = $xoopsDB -> query( $query );
    $votesDB = $xoopsDB -> getRowsNum( $voteresult );
    $totalrating = 0;
    while ( list( $rating ) = $xoopsDB -> fetchRow( $voteresult ) ) {
        $totalrating += $rating;
    } 
    $finalrating = $totalrating / $votesDB;
    $finalrating = number_format( $finalrating, 4 );
    $sql = sprintf( 'UPDATE %s SET rating = %u, votes = %u WHERE lid = %u', $xoopsDB -> prefix( 'xoopstube_videos' ), $finalrating, $votesDB, $sel_id );
    $xoopsDB -> query( $sql );
} 

// totalcategory()
// @param integer $pid
// @return
function xtube_totalcategory( $pid = 0 ) {
    global $xoopsDB;

    $sql = 'SELECT cid FROM ' . $xoopsDB -> prefix( 'xoopstube_cat' );
    if ( $pid > 0 ) {
        $sql .= ' WHERE pid = 0';
    } 
    $result = $xoopsDB -> query( $sql );
    $catlisting = 0;
    while ( list( $cid ) = $xoopsDB -> fetchRow( $result ) ) {
        if ( xtube_checkgroups( $cid ) ) {
            $catlisting++;
        } 
    } 
    return $catlisting;
} 

// xtube_getTotalItems()
// @param integer $sel_id
// @param integer $get_child
// @param integer $return_sql
// @return
function xtube_getTotalItems( $sel_id = 0, $get_child = 0, $return_sql = 0 ) {
    global $xoopsDB, $mytree, $_check_array;

    if ( $sel_id > 0 ) {
        $sql = 'SELECT a.lid, a.cid, a.published FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' a LEFT JOIN '
         . $xoopsDB -> prefix( 'xoopstube_altcat' ) . ' b'
         . ' ON b.lid=a.lid'
         . ' WHERE a.published > 0 AND a.published <= ' . time()
         . ' AND (a.expired = 0 OR a.expired > ' . time() . ') AND offline = 0 '
         . ' AND (b.cid=a.cid OR (a.cid=' . $sel_id . ' OR b.cid=' . $sel_id . '))'
		 . ' GROUP BY a.lid, a.cid, a.published';
    } else {
        $sql = 'SELECT lid, cid, published FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE offline = 0 AND published > 0 AND published <= ' . time() . ' AND (expired = 0 OR expired > ' . time() . ')';
    } 
    if ( $return_sql == 1 ) {
        return $sql;
    } 

    $count = 0;
    $published_date = 0;
    $arr = array();
    $result = $xoopsDB -> query( $sql );
    while ( list( $lid, $cid, $published ) = $xoopsDB -> fetchRow( $result ) ) {
        if ( true == xtube_checkgroups() ) {
            $count++;
            $published_date = ( $published > $published_date ) ? $published : $published_date;
        } 
    } 

    $child_count = 0;
    if ( $get_child == 1 ) {
        $arr = $mytree -> getAllChildId( $sel_id );
        $size = count( $arr );
        for( $i = 0;$i < count( $arr );$i++ ) {
            $query2 = 'SELECT a.lid, a.published, a.cid FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' a LEFT JOIN '
             . $xoopsDB -> prefix( 'xoopstube_altcat' ) . ' b'
             . ' ON b.lid = a.lid'
             . ' WHERE a.published > 0 AND a.published <= ' . time()
             . ' AND (a.expired = 0 OR a.expired > ' . time() . ') AND offline = 0'
             . ' AND (b.cid=a.cid OR (a.cid=' . $arr[$i] . ' OR b.cid=' . $arr[$i] . ')) GROUP BY a.lid, a.published, a.cid';

            $result2 = $xoopsDB -> query( $query2 );
            while ( list( $lid, $published ) = $xoopsDB -> fetchRow( $result2 ) ) {
                if ( $published == 0 ) {
                    continue;
                } 
                $published_date = ( $published > $published_date ) ? $published : $published_date;
                $child_count++;
            } 
        } 
    } 
    $info['count'] = $count + $child_count;
    $info['published'] = $published_date;
    return $info;
} 

function xtube_imageheader( $indeximage = '', $indexheading = '' ) {
    global $xoopsDB, $xoopsModuleConfig;
    if ( $indeximage == '' ) {
        $result = $xoopsDB -> query( 'SELECT indeximage, indexheading FROM ' . $xoopsDB -> prefix( 'xoopstube_indexpage' ) );
        list( $indeximage, $indexheading ) = $xoopsDB -> fetchrow( $result );
    } 
    $image = '';
    if ( !empty( $indeximage ) ) {
        $image = xtube_displayimage( $indeximage, 'index.php', $xoopsModuleConfig['mainimagedir'], $indexheading );
    } 
    return $image;
} 

function xtube_displayimage( $image = '', $path = '', $imgsource = '', $alttext = '' ) {
    global $xoopsConfig, $xoopsUser, $xoopsModule;

    $showimage = '';
    // Check to see if link is given
    if ( $path ) {
        $showimage = '<a href="' . $path . '">';
    } 
    // checks to see if the file is valid else displays default blank image
    if ( !is_dir( XOOPS_ROOT_PATH . "/{$imgsource}/{$image}" ) && file_exists( XOOPS_ROOT_PATH . "/{$imgsource}/{$image}" ) ) {
        $showimage .= "<img src='" . XOOPS_URL . "/{$imgsource}/{$image}' border='0' title='" . $alttext . "' alt='" . $alttext . "' /></a>";
    } else {
        if ( $xoopsUser && $xoopsUser -> isAdmin( $xoopsModule -> getVar( 'mid' ) ) ) {
            $showimage .= '<img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/brokenimg.png" alt="' . _MD_XTUBE_ISADMINNOTICE . '" /></a>';
        } else {
            $showimage .= '<img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/blank.png" alt="' . $alttext . '" /></a>';
        } 
    } 
    clearstatcache();
    return $showimage;
} 

function mytube_letters() {
    global $xoopsModule;

    $letterchoice = '<div>' . _MD_XTUBE_BROWSETOTOPIC . '</div>';
    $alphabet =  mytube_alfabet();
    $num = count( $alphabet ) - 1;
    $counter = 0;
    while ( list( , $ltr ) = each( $alphabet ) ) {
        $letterchoice .= '<a class="mytube_letters" href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?list=' . $ltr .'">' . $ltr . '</a>';
        if ( $counter == round( $num / 2 ) )
            $letterchoice .= '<br />';
        elseif ( $counter != $num )
            $letterchoice .= '&nbsp;';
        $counter++;
    } 
    return $letterchoice;
} 

function xtube_isnewimage( $published ) {
    global $xoopsModule, $xoopsDB;

    $oneday = ( time() - ( 86400 * 1 ) );
    $threedays = ( time() - ( 86400 * 3 ) );
    $week = ( time() - ( 86400 * 7 ) );

    $path = 'modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon';

    if ( $published > 0 && $published < $week ) {
        $indicator['image'] = "$path/linkload4.png";
        $indicator['alttext'] = _MD_XTUBE_NEWLAST;
    } elseif ( $published >= $week && $published < $threedays ) {
        $indicator['image'] = "$path/linkload3.png";
        $indicator['alttext'] = _MD_XTUBE_NEWTHIS;
    } elseif ( $published >= $threedays && $published < $oneday ) {
        $indicator['image'] = "$path/linkload2.png";
        $indicator['alttext'] = _MD_XTUBE_THREE;
    } elseif ( $published >= $oneday ) {
        $indicator['image'] = "$path/linkload1.png";
        $indicator['alttext'] = _MD_XTUBE_TODAY;
    } else {
        $indicator['image'] = "$path/linkload.png";
        $indicator['alttext'] = _MD_XTUBE_NO_FILES;
    } 
    return $indicator;
} 

function xtube_strrrchr( $haystack, $needle ) {
    return substr( $haystack, 0, strpos( $haystack, $needle ) + 1 );
} 

function xtube_adminmenu( $header = '', $menu = '', $extra = '', $scount = 4 ) {

    global $xoopsConfig, $xoopsModule, $xoopsModuleConfig;

    $_named_vidid = xoops_getenv( 'PHP_SELF' );
    if ( $_named_vidid )
        $thispage = basename( $_named_vidid );

    $op = ( isset( $_GET['op'] ) ) ? $op = '?op=' . $_GET['op'] : '';

    echo '<h4 style="color: #2F5376;">' . _AM_XTUBE_MODULE_NAME . '</h4>';
	echo '
		<div style="font-size: 10px; text-align: left; color: #2F5376; padding: 2px 6px; line-height: 18px;">
		<span style="margin: 1px; padding: 4px; border: #E8E8E8 1px solid;">
			<a href="../admin/index.php">' . _AM_XTUBE_BINDEX . '</a>
		</span>
		<span  style="margin: 1px; padding: 4px; border: #E8E8E8 1px solid;">
			<a href="../index.php">' . _AM_XTUBE_GOMODULE . '</a>
		</span>
		<span  style="margin: 1px; padding: 4px; border: #E8E8E8 1px solid;">
			<a href="../../system/admin.php?fct=preferences&op=showmod&mod=' . $xoopsModule -> getVar( 'mid' ) . '">' . _AM_XTUBE_PREFS . '</a>
		</span>
		<span  style="margin: 1px; padding: 4px; border: #E8E8E8 1px solid;">
			<a href="../admin/permissions.php">' . _AM_XTUBE_BPERMISSIONS . '</a>
		</span>
		<span  style="margin: 1px; padding: 4px; border: #E8E8E8 1px solid;">		
			<a href="../admin/myblocksadmin.php">' . _AM_XTUBE_BLOCKADMIN . '</a>
		</span>
		<span  style="margin: 1px; padding: 4px; border: #E8E8E8 1px solid;">
			<a href="../../system/admin.php?fct=modulesadmin&op=update&module=' . $xoopsModule -> getVar( 'dirname' ) . '">' . _AM_XTUBE_BUPDATE . '</a>
		</span>
		<span  style="margin: 1px; padding: 4px; border: #E8E8E8 1px solid;">		
			<a href="../admin/about.php">' . _AM_XTUBE_ABOUT . '</a>
		</span>
		</div><br />';

    if ( empty( $menu ) ) {
        // You can change this part to suit your own module. Defining this here will save you form having to do this each time.
        $menu = array(
			_AM_XTUBE_MVIDEOS 	=> 'index.php?op=edit',
            _AM_XTUBE_MCATEGORY => 'category.php',
			_AM_XTUBE_INDEXPAGE => 'indexpage.php',            
            _AM_XTUBE_MMYTUBE 	=> 'mytube.php?op=edit',
            _AM_XTUBE_MUPLOADS 	=> 'upload.php',
            _AM_XTUBE_VUPLOADS 	=> 'vupload.php',
            _AM_XTUBE_MVOTEDATA => 'votedata.php',
            _AM_XTUBE_MCOMMENTS => '../../system/admin.php?module=' . $xoopsModule -> getVar( 'mid' ) . '&status=0&limit=100&fct=comments&selsubmit=Go'
            );
    } 

    if ( !is_array( $menu ) ) {
        echo '<table width="100%" cellpadding="2" cellspacing="1" class="outer">';
        echo '<tr><td class="even" align="center"><b>' . _AM_XTUBE_NOMENUITEMS . '</b></td></tr></table><br />';
        return false;
    } 

    $oddnum = array( 1 => '1', 3 => '3', 5 => '5', 7 => '7', 9 => '9', 11 => '11', 13 => '13' ); 
    // number of rows per menu
    $menurows = count( $menu ) / $scount; 
    // total amount of rows to complete menu
    $menurow = ceil( $menurows ) * $scount; 
    // actual number of menuitems per row
    $rowcount = $menurow / ceil( $menurows );
    $count = 0;
    for ( $i = count( $menu ); $i < $menurow; $i++ ) {
        $tempArray = array( 1 => null );
        $menu = array_merge( $menu, $tempArray );
        $count++;
    } 

    // Sets up the width of each menu cell
    $width = 100 / $scount;
    $width = ceil( $width );

    $menucount = 0;
    $count = 0;
    // Menu table output
    echo '<table width="100%" cellpadding="2" cellspacing="1" class="outer" border="1"><tr>';
    // Check to see if $menu is and array
    if ( is_array( $menu ) ) {
        $classcounts = 0;
        $classcol[0] = 'even';

        for ( $i = 1; $i < $menurow; $i++ ) {
            $classcounts++;
            if ( $classcounts >= $scount ) {
                if ( $classcol[$i-1] == 'odd' ) {
                    $classcol[$i] = ( $classcol[$i-1] == 'odd' && in_array( $classcounts, $oddnum ) ) ? 'even' : 'odd';
                } else {
                    $classcol[$i] = ( $classcol[$i-1] == 'even' && in_array( $classcounts, $oddnum ) ) ? 'odd' : 'even';
                } 
                $classcounts = 0;
            } else {
                $classcol[$i] = ( $classcol[$i-1] == 'even' ) ? 'odd' : 'even';
            } 
        } 
        unset( $classcounts );

        foreach ( $menu as $menutitle => $menuvideo ) {
            if ( $thispage . $op == $menuvideo ) {
                $classcol[$count] = 'outer';
            } 
            echo '<td class="' . $classcol[$count] . '" style="padding: 4px; text-align: center;" valign="middle" width="' . $width . '%">';
            if ( is_string( $menuvideo ) ) {
                echo '<a href="' . $menuvideo . '"><small>' . $menutitle . '</small></a></td>';
            } else {
                echo '&nbsp;</td>';
            } 
            $menucount++;
            $count++;
            // Break menu cells to start a new row if $count > $scount
            if ( $menucount >= $scount ) {
                echo '</tr>';
                $menucount = 0;
            } 
        } 
        echo '</table><br />';
        unset( $count );
        unset( $menucount );
    } 
    // ###### Output warn messages for security ######
    if ( is_dir( XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/update/' ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL1, XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/update/' ) );
        echo '<br />';
    } 

    $_file = XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/update.php';
    if ( file_exists( $_file ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL2, XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/update.php' ) );
        echo '<br />';
    } 

    $path1 = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['mainimagedir'];
    if ( !is_dir( $path1 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path1 ) );
        echo '<br />';
    }
    if ( !is_writable( $path1 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL4, $path1 ) );
        echo '<br />';
    }

    $path1_t = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['mainimagedir'] . '/thumbs';
    if ( !is_dir( $path1_t ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path1_t ) );
        echo '<br />';
    }
    if ( !is_writable( $path1_t ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL4, $path1_t ) );
        echo '<br />';
    }

    $path2 = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['videoimgdir'];
    if ( !is_dir( $path2 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path2 ) );
        echo '<br />';
    }
    if ( !is_writable( $path2 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL4, $path2 ) );
        echo '<br />';
    }

//    $path2_t = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['videoimgdir'] . '/thumbs';
//    if ( !is_dir( $path2_t ) || !is_writable( $path2_t ) ) {
//        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path2_t ) );
//        echo '<br />';
//    }

    $path3 = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['catimage'];
    if ( !is_dir( $path3 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path3 ) );
        echo '<br />';
    }
    if ( !is_writable( $path3 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL4, $path3 ) );
        echo '<br />';
    }

    $path3_t = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['catimage'] . '/thumbs';
    if ( !is_dir( $path3_t ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path3_t ) );
        echo '<br />';
    }
    if ( !is_writable( $path3_t ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL4, $path3_t ) );
        echo '<br />';
    }

    $path4 = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['videodir'];
    if ( !is_dir( $path4 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path4 ) );
        echo '<br />';
    }
    if ( !is_writable( $path4 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL4, $path4 ) );
        echo '<br />';
    }


    echo '<h4 style="color: #2F5376;">' . $header . '</h4>';
    if ( $extra ) {
        echo '<div>' . $extra . '</div>';
    } 
} 

function xtube_getDirSelectOption( $selected, $dirarray, $namearray ) {
    echo "<select size='1' name='workd' onchange='location.href=\"upload.php?rootpath=\"+this.options[this.selectedIndex].value'>";
    echo "<option value=''>--------------------------------------</option>";
    foreach( $namearray as $namearray => $workd ) {
        if ( $workd === $selected ) {
            $opt_selected = 'selected';
        } else {
            $opt_selected = '';
        } 
        echo '<option value="' . htmlspecialchars( $namearray, ENT_QUOTES ) . '" $opt_selected>' . $workd . '</option>';
    } 
    echo '</select>';
}

function xtube_VgetDirSelectOption( $selected, $dirarray, $namearray ) {
    echo "<select size='1' name='workd' onchange='location.href=\"vupload.php?rootpath=\"+this.options[this.selectedIndex].value'>";
    echo "<option value=''>--------------------------------------</option>";
    foreach( $namearray as $namearray => $workd ) {
        if ( $workd === $selected ) {
            $opt_selected = 'selected';
        } else {
            $opt_selected = '';
        } 
        echo '<option value="' . htmlspecialchars( $namearray, ENT_QUOTES ) . '" $opt_selected>' . $workd . '</option>';
    } 
    echo '</select>';
}

function xtube_uploading( $_FILES, $uploaddir = 'uploads', $allowed_mimetypes = '', $redirecturl = 'index.php', $num = 0, $redirect = 0, $usertype = 1 ) {
    global $_FILES, $xoopsConfig, $xoopsModuleConfig, $xoopsModule;

    $down = array();
    include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/class/uploader.php';
    if ( empty( $allowed_mimetypes ) ) {
        $allowed_mimetypes = xtube_retmime( $_FILES['userfile']['name'], $usertype );
    } 
    $upload_dir = XOOPS_ROOT_PATH . '/' . $uploaddir . '/';

    $maxfilesize = $xoopsModuleConfig['maxfilesize'];
    $maxfilewidth = $xoopsModuleConfig['maximgwidth'];
    $maxfileheight = $xoopsModuleConfig['maximgheight'];

    $uploader = new XoopsMediaUploader( $upload_dir, $allowed_mimetypes, $maxfilesize, $maxfilewidth, $maxfileheight );
    $uploader -> noAdminSizeCheck( 1 );
    if ( $uploader -> fetchMedia( $_POST['xoops_upload_file'][0] ) ) {
        if ( !$uploader -> upload() ) {
            $errors = $uploader -> getErrors();
            redirect_header( $redirecturl, 2, $errors );
        } else {
            if ( $redirect ) {
                redirect_header( $redirecturl, 1 , _AM_PDD_UPLOADFILE );
            } else {
                if ( is_file( $uploader -> savedDestination ) ) {
                    $down['url'] = XOOPS_URL . '/' . $uploaddir . '/' . strtolower( $uploader -> savedFileName );
                    $down['size'] = filesize( XOOPS_ROOT_PATH . '/' . $uploaddir . '/' . strtolower( $uploader -> savedFileName ) );
                } 
                return $down;
            } 
        } 
    } else {
        $errors = $uploader -> getErrors();
        redirect_header( $redirecturl, 1, $errors );
    } 
} 

function xtube_videolistheader( $heading ) {
    echo '
		<h4 style="font-weight: bold; color: #0A3760;">' . $heading . '</h4>
		<table width="100%" cellspacing="1" class="outer" summary>
		<tr>
			<th style="text-align: center; font-size: smaller;">' . _AM_XTUBE_MINDEX_ID . '</th>
			<th style=" font-size: smaller;"><b>' . _AM_XTUBE_MINDEX_TITLE . '</th>
			<th style="text-align: center; font-size: smaller;">' . _AM_XTUBE_VIDSOURCE2 . '</th>
			<th style="text-align: center; font-size: smaller;">' . _AM_XTUBE_CATTITLE . '</th>
			<th style="text-align: center; font-size: smaller;">' . _AM_XTUBE_MINDEX_POSTER . '</th>
			<th style="text-align: center; font-size: smaller;">' . _AM_XTUBE_MINDEX_PUBLISH . '</th>
			<th style="text-align: center; font-size: smaller;">' . _AM_XTUBE_MINDEX_EXPIRE . '</th>
			<th style="text-align: center; font-size: smaller;">' . _AM_XTUBE_MINDEX_ONLINE . '</th>
			<th style="text-align: center; font-size: smaller;">' . _AM_XTUBE_MINDEX_ACTION . '</th>
		</tr>
		';
} 

function xtube_videolistbody( $published ) {
    global $xtubemyts, $imagearray, $xoopsModuleConfig;

    $lid = $published['lid'];
    $cid = $published['cid'];
    
    $title = '<a href="../singlevideo.php?cid=' . $published['cid'] . '&amp;lid=' . $published['lid'] . '">' . $xtubemyts -> htmlSpecialCharsStrip( trim( $published['title'] ) ) . '</a>';
    $maintitle = urlencode( $xtubemyts -> htmlSpecialChars( trim( $published['title'] ) ) );
	$cattitle = '<a href="../viewcat.php?cid=' . $published['cid'] . '">' . xtube_cattitle( $published['cid'] ) . '</a>';
    $submitter = mytube_getLinkedUnameFromId( $published['submitter'] );
    $returnsource = xtube_returnsource( $published['vidsource'] );
    $submitted = mytube_time( formatTimestamp( $published['date'], $xoopsModuleConfig['dateformatadmin'] ) );
    $publish = ( $published['published'] > 0 ) ? mytube_time( formatTimestamp( $published['published'], $xoopsModuleConfig['dateformatadmin'] ) ): 'Not Published';
    $expires = $published['expired'] ? mytube_time( formatTimestamp( $published['expired'], $xoopsModuleConfig['dateformatadmin'] ) ): _AM_XTUBE_MINDEX_NOTSET;

    if ( (( $published['expired'] && $published['expired'] > time() ) OR  $published['expired']==0)&& ( $published['published'] && $published['published'] < time() ) && $published['offline'] == 0 ) {
        $published_status = $imagearray['online'];
    } elseif (( $published['expired'] && $published['expired'] < time() )  && $published['offline'] == 0){
        $published_status = $imagearray['expired'];
    } else {
        $published_status = ( $published['published'] == 0 ) ? '<a href="newvideos.php">' . $imagearray['offline'] . '</a>' : $imagearray['offline'];
    }

    if ( $published['vidsource'] == 200 ) {
      $icon = '<a href="mytube.php?op=edit&amp;lid=' . $lid . '" title="' . _AM_XTUBE_ICO_EDIT . '">' . $imagearray['editimg'] . '</a>&nbsp;';
    } else {
      $icon = '<a href="index.php?op=edit&amp;lid=' . $lid . '" title="' . _AM_XTUBE_ICO_EDIT . '">' . $imagearray['editimg'] . '</a>&nbsp;';
    }
    $icon .= '<a href="index.php?op=delete&amp;lid=' . $lid . '" title="' . _AM_XTUBE_ICO_DELETE . '">' . $imagearray['deleteimg'] . '</a>&nbsp;';
    $icon .= '<a href="altcat.php?op=main&amp;cid=' . $cid . '&amp;lid=' . $lid . '&amp;title=' . $published['title'] . '" title="' . _AM_XTUBE_ALTCAT_CREATEF . '">' . $imagearray['altcat'] . '</a>';

    echo '
		<tr style="text-align: center; font-size: smaller;">
		<td class="head">' . $lid . '</small></td>
		<td class="even" style="text-align: left;">' . $title . '</td>
		<td class="even">' . $returnsource . '</td>
		<td class="even">' . $cattitle . '</td>
		<td class="even">' . $submitter . '</td>
		<td class="even">' . $publish . '</td>
		<td class="even">' . $expires . '</td>
		<td class="even" style="width: 4%;">' . $published_status . '</td>
		<td class="even" style="text-align: center; width: 6%; white-space: nowrap;">' . $icon . '</td>
		</tr>';
    unset( $published );
} 

function xtube_cattitle( $catt ) {
  global $xoopsDB;
  $sql = 'SELECT title FROM ' . $xoopsDB -> prefix( 'xoopstube_cat' ) . ' WHERE cid=' . $catt;
  $result = $xoopsDB -> query( $sql );
  $result = $xoopsDB -> fetchArray( $result );
  return $result['title'];
}

function xtube_videolistfooter() {
    echo '<tr style="text-align: center;">
			<td class="head" colspan="7">' . _AM_XTUBE_MINDEX_NOVIDEOSFOUND . '</td>
		  </tr>';
} 

function xtube_videolistpagenav( $pubrowamount, $start, $art = 'art', $_this = '', $align ) {
    global $xoopsModuleConfig;

    if ( ( $pubrowamount < $xoopsModuleConfig['admin_perpage'] ) ) {
        return false;
    } 
    // Display Page Nav if published is > total display pages amount.
    include_once XOOPS_ROOT_PATH . '/class/pagenav.php';
    $pagenav = new XoopsPageNav( $pubrowamount, $xoopsModuleConfig['admin_perpage'], $start, 'st' . $art, $_this );
    echo '<div style="text-align: ' . $align . '; padding: 8px;">' . $pagenav -> renderNav() . '</div>';
}

// Code for retreiving an editor is based on code from Hervet
function &xtube_getWysiwygForm( $caption, $name, $value ) {
    global $xoopsModuleConfig, $xoopsUser, $xoopsModule;

	$xoops22 = false;
	$xv = str_replace( 'XOOPS ', '', XOOPS_VERSION );
	if ( substr( $xv, 2, 1 ) == '2' ) {
		$xoops22 = true;
	}

	$isadmin = ( ( is_object( $xoopsUser ) && !empty( $xoopsUser ) ) && $xoopsUser -> isAdmin( $xoopsModule -> mid() ) ) ? true : false;
	if ( $isadmin == true ) {
		$formuser = $xoopsModuleConfig['form_options'];
	} else {
		$formuser = $xoopsModuleConfig['form_optionsuser'];
	}

	switch( $formuser ) {
	case 'dhtml':
		$editor = mytube_dhtmleditor( $caption, $name, $value, $xoops22 );
		break;

	case 'dhtmlext':
		$editor = mytube_dhtmlexteditor( $caption, $name, $value, $xoops22 );
		break;

	case 'textarea':
		$editor = new XoopsFormTextArea( $caption, $name, $value, $xoops22 );
		break;
		
	case 'fck':
		$editor = mytube_fckeditor( $caption, $name, $value, $xoops22 );
		break;

	case 'koivi':
		$editor = mytube_koivieditor( $caption, $name, $value, $xoops22 );
		break;

	case 'tinyeditor':
		$editor = mytube_tinyeditor( $caption, $name, $value, $xoops22 );
		break;

	case 'tinymce' :
		$editor = mytube_tinymce( $caption, $name, $value );    
        break;
	}
	return $editor;
}

function mytube_dhtmleditor( $caption, $name, $value, $xoops22 ) {
	if( !$xoops22 ) {
		$mytube_editor = new XoopsFormDhtmlTextArea( $caption, $name, $value, 20, 60 );
	} else {
		$mytube_editor = new XoopsFormEditor( $caption, 'dhtmltextarea', $editor_configs );
	}
	return $mytube_editor;
}

function mytube_dhtmlexteditor( $caption, $name, $value, $xoops22 ) {
	if( !$xoops22 ) {
		if ( is_readable( XOOPS_ROOT_PATH . '/editors/dhtmlext/dhtmlext.php' ) ) {
			include_once( XOOPS_ROOT_PATH . '/editors/dhtmlext/dhtmlext.php' );
			$mytube_editor = new XoopsFormDhtmlTextAreaExtended( $caption, $name, $value, 10, 50 );
		} elseif ( is_readable( XOOPS_ROOT_PATH . '/class/xoopseditor/dhtmlext/dhtmlext.php' ) ) {
			include_once( XOOPS_ROOT_PATH . '/class/xoopseditor/dhtmlext/dhtmlext.php' );
			$mytube_editor = new XoopsFormDhtmlTextAreaExtended( $caption, $name, $value, 10, 50 );
		} else {
			if ( $dhtml ) {
				$mytube_editor = new XoopsFormDhtmlTextArea( $caption, $name, $value, 50, 60 );
			} else {
				$mytube_editor = new XoopsFormTextArea( $caption, $name, $value, 7, 60 );
			}
		}
	} else {
		$mytube_editor = new XoopsFormEditor( $caption, 'dhtmlext', $editor_configs );
	}
	return $mytube_editor;
}

function mytube_fckeditor( $caption, $name, $value, $xoops22 ) {
	if ( !$xoops22 ) {
		if ( file_exists( XOOPS_ROOT_PATH . '/editors/FCKeditor/formfckeditor.php' ) )	{
			include_once( XOOPS_ROOT_PATH . '/editors/FCKeditor/formfckeditor.php' );
			$mytube_editor = new XoopsFormFckeditor( $editor_configs, true );
		} elseif ( file_exists( XOOPS_ROOT_PATH . '/class/xoopseditor/fckeditor/formfckeditor.php' ) )	{
			include_once( XOOPS_ROOT_PATH . '/class/xoopseditor/fckeditor/formfckeditor.php' );
			$mytube_editor = new XoopsFormFckeditor( $editor_configs, true );
		} else {
			if ( $dhtml ) {
				$mytube_editor = new XoopsFormDhtmlTextArea( $caption, $name, $value, 20, 60 );
			} else {
				$mytube_editor = new XoopsFormTextArea( $caption, $name, $value, 7, 60 );
			}
		}
	} else {
		$mytube_editor = new XoopsFormEditor( $caption, 'fckeditor', $editor_configs );
	}
	return $mytube_editor;
}

function mytube_koivieditor( $caption, $name, $value, $xoops22 ) {
	if( !$xoops22 ) {
		if ( is_readable( XOOPS_ROOT_PATH . '/class/xoopseditor/koivi/formwysiwygtextarea.php' ) )	{
			include_once( XOOPS_ROOT_PATH . '/class/xoopseditor/koivi/formwysiwygtextarea.php' );
			$mytube_editor = new XoopsFormWysiwygTextArea( $caption, $name, $value, '100%', '400px' );
		} else {
			if ( $dhtml ) {
				$mytube_editor = new XoopsFormDhtmlTextArea( $caption, $name, $value, 20, 60 );
			} else {
				$mytube_editor = new XoopsFormTextArea( $caption, $name, $value, 7, 60 );
			}
		}
	} else {
		$mytube_editor = new XoopsFormEditor( $caption, 'koivi', $editor_configs );
	}
	return $mytube_editor;
}

function mytube_tinyeditor( $caption, $name, $value, $xoops22 ) {
	if( !$xoops22 ) {
		if ( is_readable( XOOPS_ROOT_PATH . '/class/xoopseditor/tinyeditor/formtinyeditortextarea.php' ) )	{
			include_once( XOOPS_ROOT_PATH . '/class/xoopseditor/tinyeditor/formtinyeditortextarea.php' );
			$mytube_editor = new XoopsFormTinyeditorTextArea( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => '100%', 'height' => '400px' ) );
		} else {
			if ( $dhtml ) {
				$mytube_editor = new XoopsFormDhtmlTextArea( $caption, $name, $value, 50, 60 );
			} else {
				$mytube_editor = new XoopsFormTextArea( $caption, $name, $value, 7, 60 );
			}
		}
	} else {
		$mytube_editor = new XoopsFormEditor( $caption, 'tinyeditor', $editor_configs );
	}
	return $mytube_editor;
}	

function mytube_tinymce( $caption, $name, $value ) {
	if ( file_exists( XOOPS_ROOT_PATH . '/editors/tinymce/formtinymce.php' ) ) {
		include_once( XOOPS_ROOT_PATH . '/editors/tinymce/formtinymce.php' );
		$mytube_editor = new XoopsFormTinymce( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => '100%', 'height' => '500px', 0 ) );
	} elseif ( file_exists( XOOPS_ROOT_PATH . '/class/xoopseditor/tinymce/formtinymce.php' ) ) {
		include_once( XOOPS_ROOT_PATH . '/class/xoopseditor/tinymce/formtinymce.php' );
		$mytube_editor = new XoopsFormTinymce( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => '100%', 'height' => '500px', 0 ) ); 
	} else {
		$mytube_editor = new XoopsFormDhtmlTextArea( $caption, $name, $value, 50, 60 );
	}
	return $mytube_editor;
}

function xtube_html2text($document){
		// PHP Manual:: function preg_replace
		// $document should contain an HTML document.
		// This will remove HTML tags, javascript sections
		// and white space. It will also convert some
		// common HTML entities to their text equivalent.
		// Credits : newbb2
		$search = array (
		"'<script[^>]*?>.*?</script>'si",	// Strip out javascript
		"'<img.*?/>'si",       				// Strip out img tags
		"'<[\/\!]*?[^<>]*?>'si",          	// Strip out HTML tags
		"'([\r\n])[\s]+'",                	// Strip out white space
		"'&(quot|#34);'i",                	// Replace HTML entities
		"'&(amp|#38);'i",
		"'&(lt|#60);'i",
		"'&(gt|#62);'i",
		"'&(nbsp|#160);'i",
		"'&(iexcl|#161);'i",
		"'&(cent|#162);'i",
		"'&(pound|#163);'i",
		"'&(copy|#169);'i",
		);                    // evaluate as php

		$replace = array (
		"",
		"",
		"",
		"\\1",
		"\"",
		"&",
		"<",
		">",
		" ",
		chr(161),
		chr(162),
		chr(163),
		chr(169),
		);

		$text = preg_replace($search, $replace, $document);

		return $text;
}

// Check if Tag module is installed
function xtube_tag_module_included() {
	static 	$xtube_tag_module_included;
	if (!isset($xtube_tag_module_included)) {
		$modules_handler = xoops_gethandler('module');
		$tag_mod = $modules_handler -> getByDirName('tag');
		if (!$tag_mod) {
			$tag_mod = false;
		} else {
			$xtube_tag_module_included = $tag_mod -> getVar('isactive') == 1;
		}
	}
	return $xtube_tag_module_included;
}

// Add item_tag to Tag-module
function xtube_tagupdate($lid, $item_tag) {
	global $xoopsModule;
    if (xtube_tag_module_included()){
	  include_once XOOPS_ROOT_PATH . '/modules/tag/include/formtag.php';
	  $tag_handler = xoops_getmodulehandler('tag', 'tag');
	  $tag_handler -> updateByItem($item_tag, $lid, $xoopsModule -> getVar( 'dirname' ), 0);
	}
}

function xtube_updateCounter( $lid ) {
	global $xoopsDB;
	$sql = 'UPDATE ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' SET hits=hits+1 WHERE lid=' . intval( $lid );
    $result = $xoopsDB -> queryF( $sql );
}

function xtube_getbanner_from_id_banner( $banner_id ) {
###### Hack by www.stefanosilvestrini.com ######
global $xoopsConfig;
$db =& Database::getInstance();
$bresult = $db -> query( 'SELECT COUNT(*) FROM ' . $db -> prefix('banner') . ' WHERE bid=' . $banner_id );
list ( $numrows ) = $db -> fetchRow( $bresult );
if ( $numrows > 1 ) {
    $numrows = $numrows - 1;
    mt_srand((double)microtime() * 1000000);
    $bannum = mt_rand(0, $numrows);
  } else {
    $bannum = 0;
}
if ( $numrows > 0 ) {
  $bresult = $db -> query( 'SELECT * FROM ' . $db -> prefix( 'banner' ). ' WHERE bid=' . $banner_id, 1, $bannum );
  list ( $bid, $cid, $imptotal, $impmade, $clicks, $imageurl, $clickurl, $date, $htmlbanner, $htmlcode ) = $db -> fetchRow( $bresult );
  if ( $xoopsConfig['my_ip'] == xoops_getenv( 'REMOTE_ADDR' ) ) {
    // EMPTY
    } else {
      $db -> queryF( sprintf( 'UPDATE %s SET impmade = impmade+1 WHERE bid = %u', $db -> prefix( 'banner' ), $bid ) );
  }
  /* Check if this impression is the last one and print the banner */
  if ( $imptotal == $impmade ) {
    $newid = $db -> genId( $db -> prefix( 'bannerfinish' ) . '_bid_seq');
    $sql = sprintf( 'INSERT INTO %s (bid, cid, impressions, clicks, datestart, dateend) VALUES (%u, %u, %u, %u, %u, %u)', $db -> prefix( 'bannerfinish' ), $newid, $cid, $impmade, $clicks, $date, time() );
    $db -> queryF( $sql );
    $db -> queryF( sprintf( 'DELETE FROM %s WHERE bid = %u', $db -> prefix( 'banner' ), $bid ) );
  }
  if ( $htmlbanner ) {
    $bannerobject = $htmlcode;
    } else {
      $bannerobject = '<div align="center"><a href="' . XOOPS_URL . '/banners.php?op=click&bid=' . $bid . '" target="_blank">';
      if ( stristr( $imageurl, '.swf' ) ) {
        $bannerobject = $bannerobject
        . '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="468" height="60">'
        . '<param name="movie" value="' . $imageurl . '"></param>'
        . '<param name="quality" value="high"></param>'
        . '<embed src="' . $imageurl . '" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="468" height="60">'
        . '</embed>'
        . '</object>';
        } else {
          $bannerobject = $bannerobject . '<img src="' . $imageurl . '" alt="" />';
        }
        $bannerobject = $bannerobject . '</a></div>';
      }
    return $bannerobject;
  }
}

function xtube_getbanner_from_id_client( $client_id ) {
###### Hack by www.stefanosilvestrini.com ######
global $xoopsConfig;
$db =& Database::getInstance();
$bresult = $db -> query( 'SELECT COUNT(*) FROM ' . $db -> prefix( 'banner' ) . ' WHERE cid=' . $client_id );
list ( $numrows ) = $db -> fetchRow( $bresult );
if ( $numrows > 1 ) {
  $numrows = $numrows - 1;
  mt_srand((double)microtime() * 1000000);
  $bannum = mt_rand( 0, $numrows );
} else {
  $bannum = 0;
}
if ( $numrows > 0 ) {
$bresult = $db -> query( 'SELECT * FROM ' . $db -> prefix('banner') . ' WHERE cid=' . $client_id . ' ORDER BY rand()', 1, $bannum );
list ( $bid, $cid, $imptotal, $impmade, $clicks, $imageurl, $clickurl, $date, $htmlbanner, $htmlcode ) = $db -> fetchRow( $bresult );
if ( $xoopsConfig['my_ip'] == xoops_getenv( 'REMOTE_ADDR' ) ) {
  // EMPTY
  } else {
    $db -> queryF( sprintf( 'UPDATE %s SET impmade = impmade+1 WHERE bid = %u', $db -> prefix( 'banner' ), $bid ) );
}
/* Check if this impression is the last one and print the banner */
if ( $imptotal == $impmade ) {
  $newid = $db -> genId( $db -> prefix( 'bannerfinish' ) . '_bid_seq');
  $sql = sprintf( 'INSERT INTO %s (bid, cid, impressions, clicks, datestart, dateend) VALUES (%u, %u, %u, %u, %u, %u)', $db -> prefix( 'bannerfinish' ), $newid, $cid, $impmade, $clicks, $date, time() );
  $db -> queryF( $sql );
  $db -> queryF( sprintf( 'DELETE FROM %s WHERE bid = %u', $db -> prefix( 'banner' ), $bid ) );
}
if ( $htmlbanner ) {
  $bannerobject = $htmlcode;
  } else {
    $bannerobject = '<div align="center"><a href="' . XOOPS_URL . '/banners.php?op=click&bid=' . $bid . '" target="_blank">';
    if ( stristr( $imageurl, '.swf' ) ) {
      $bannerobject = $bannerobject
      .'<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="468" height="60">'
      .'<param name="movie" value="' . $imageurl . '"></param>'
      .'<param name="quality" value="high"></param>'
      .'<embed src="' . $imageurl . '" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="468" height="60">'
      .'</embed>'
      .'</object>';
      } else {
        $bannerobject = $bannerobject . '<img src="' . $imageurl . '" alt="" />';
    }
    $bannerobject = $bannerobject . '</a></div>';
   }
  return $bannerobject;
  }
}

function mytube_noindexnofollow() { 
    global $xoTheme, $xoopsTpl; 
    if ( is_object( $xoTheme ) ) { 
        $xoTheme -> addMeta( 'meta', 'robots', 'noindex,nofollow' ); 
    } else { 
        $xoopsTpl -> assign( 'xoops_meta_robots', 'noindex,nofollow' ); 
    } 
}

function mytube_getLinkedUnameFromId( $userid ) {
    $userid = intval( $userid );
    if ( $userid > 0 ) {
        $member_handler =& xoops_gethandler( 'member' );
        $user =& $member_handler -> getUser( $userid );
        if ( is_object( $user ) ) {
            $linkeduser = '<a href="' . XOOPS_URL . '/userinfo.php?uid=' . $userid . '">'. $user -> getVar( 'uname' ) . '</a>';
            return $linkeduser;
        }
    }
    return $GLOBALS['xoopsConfig']['anonymous'];
}

function mytube_time( $time ) {
	global $xoopsConfig, $xoopsModuleConfig;
	$mydirname = basename( dirname( dirname( __FILE__ ) ) );
	include_once XOOPS_ROOT_PATH . '/modules/' . $mydirname . '/language/' . $xoopsConfig['language'] . '/local.php';

	$trans = array(	'Monday'    => _MYTUBE_MONDAY,
					'Tuesday'   => _MYTUBE_TUESDAY,
					'Wednesday' => _MYTUBE_WEDNESDAY,
					'Thursday'  => _MYTUBE_THURSDAY,
					'Friday'    => _MYTUBE_FRIDAY,
					'Saturday'  => _MYTUBE_SATURDAY,
					'Sunday'    => _MYTUBE_SUNDAY,
					'Mon'    	=> _MYTUBE_MON,
					'Tue'   	=> _MYTUBE_TUE,
					'Wed' 		=> _MYTUBE_WED,
					'Thu'  		=> _MYTUBE_THU,
					'Fri'    	=> _MYTUBE_FRI,
					'Sat'  		=> _MYTUBE_SAT,
					'Sun'    	=> _MYTUBE_SUN,
					'Januari'	=> _MYTUBE_JANUARI,
					'Februari'	=> _MYTUBE_FEBRUARI,
					'March'		=> _MYTUBE_MARCH,
					'April'		=> _MYTUBE_APRIL,
					'May'		=> _MYTUBE_MAY,
					'June'		=> _MYTUBE_JUNE,
					'July'		=> _MYTUBE_JULY,
					'August'	=> _MYTUBE_AUGUST,
					'September' => _MYTUBE_SEPTEMBER,
					'October'	=> _MYTUBE_OCTOBER,
					'November'	=> _MYTUBE_NOVEMBER,
					'December'	=> _MYTUBE_DECEMBER,
					'Jan'		=> _MYTUBE_JAN,
					'Feb'		=> _MYTUBE_FEB,
					'Mar'		=> _MYTUBE_MAR,
					'Apr'		=> _MYTUBE_APR,
					'May'		=> _MYTUBE_MAY2,
					'Jun'		=> _MYTUBE_JUN,
					'Jul'		=> _MYTUBE_JUL,
					'Aug'		=> _MYTUBE_AUG,
					'Sep' 		=> _MYTUBE_SEP,
					'Oct'		=> _MYTUBE_OCT,
					'Nov'		=> _MYTUBE_NOV,
					'Dec'		=> _MYTUBE_DEC );
	$timestamp = strtr( $time, $trans );
	return $timestamp;
}
?>