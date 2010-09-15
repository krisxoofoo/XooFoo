<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/xoopstube_top.php
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

// checkXTubeBlockGroups()
//
// @param integer $cid
// @param string $permType
// @param boolean $redirect
// @return
function checkXTubeBlockgroups( $cid = 0, $permType = 'XTubeCatPerm', $redirect = false ) {
    $mydirname = basename( dirname( dirname( __FILE__ ) ) );
    global $xoopsUser;

    $groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = &xoops_gethandler( 'groupperm' );
    $module_handler = &xoops_gethandler( 'module' );
    $module = &$module_handler -> getByDirname( $mydirname );
    if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, $module -> getVar( 'mid' ) ) )     {
        if ( $redirect == false ) {
            return false;
        } else {
            redirect_header( 'index.php', 3, _NOPERM );
            exit();
        } 
    } 
    unset( $module );
    return true;
}

function xtube_b_checkgroups( $cid = 0, $permType = 'XTubeCatPerm', $redirect = false ) {
    $mydirname = basename( dirname( dirname( __FILE__ ) ) );
    global $xoopsUser;

    $groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $modhandler = xoops_gethandler( 'module' );
    $xtubeModule = $modhandler -> getByDirname( $mydirname );
    $gperm_handler = &xoops_gethandler( 'groupperm' );
    if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, $xtubeModule -> getVar( 'mid' ) ) ) {
        if ( $redirect == false ) {
            return false;
        } 
    }
    return true;
}

// Function: b_xoopstube_top_show
// Input   : $options[0] = date for the most recent videos
// 			   hits for the most popular videos
//           $block['content'] = The optional above content
//           $options[1] = How many videos are displayes
//           $options[2] = Length of title
//           $options[3] = Set date format
// Output  : Returns the most recent or most popular videos
function b_xoopstube_top_show( $options ) {
    global $xoopsDB, $xoopsModule, $xoopsModuleConfig;
    $mydirname = basename( dirname( dirname( __FILE__ ) ) );
    $block = array();
    $modhandler = xoops_gethandler( 'module' );
    $xtubeModule = $modhandler -> getByDirname( $mydirname );
    $config_handler = xoops_gethandler( 'config' );
    $xtubeModuleConfig = $config_handler -> getConfigsByCat( 0, $xtubeModule -> getVar( 'mid' ) );
    $xtubemyts = &MyTextSanitizer :: getInstance();

    if ( $options[4] > 0 ) {
      $result = $xoopsDB -> query( 'SELECT lid, cid, title, vidid, screenshot, published, hits, vidsource, picurl FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE published>0
									AND published<=' . time() . '
									AND (expired=0 OR expired>' . time() . ')
									AND offline=0
									AND cid=' . $options[4] . '
									ORDER BY ' . $options[0] . '
									DESC', $options[1], 0 );
    } else {
      $result = $xoopsDB -> query( 'SELECT lid, cid, title, vidid, screenshot, published, hits, vidsource, picurl FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE published>0
									AND published<=' . time() . '
									AND (expired=0 OR expired>' . time() . ')
									AND offline=0
									ORDER BY ' . $options[0] . '
									DESC', $options[1], 0 );
    }
	
	include_once XOOPS_ROOT_PATH . '/modules/' . $xtubeModule -> getVar( 'dirname' ) . '/include/video.php';
	include_once XOOPS_ROOT_PATH . '/modules/' . $xtubeModule -> getVar( 'dirname' ) . '/include/functions.php';
		
    while ( $myrow = $xoopsDB -> fetchArray( $result ) ) {
		
        if ( false == checkXTubeBlockGroups( $myrow['cid'] ) || $myrow['cid'] == 0 ) {
            continue;
        }
		
        if ( xtube_b_checkgroups( $myrow['cid'] ) == false ) {
            exit;
        }
		
        $videoload = array();
        $title = $xtubemyts -> htmlSpecialChars( $xtubemyts -> stripSlashesGPC( $myrow['title'] ) );
        if ( !XOOPS_USE_MULTIBYTES ) {
            if ( strlen( $myrow['title'] ) >= $options[2] ) {
                $title = substr( $myrow['title'], 0, ( $options[2] -1 ) ) . '...';
            } 
        }
        $videoload['id'] = intval($myrow['lid']);
        $videoload['cid'] = intval($myrow['cid']);
        $videoload['title'] = $title;
        if ( $options[0] == 'published' ) {
            $videoload['date'] = mytube_time( formatTimestamp( $myrow['published'], $options[3] ) );
        } elseif ( $options[0] == 'hits' ) {
            $videoload['hits'] = $myrow['hits'];
        }
		
		$videoload['videothumb'] = xtube_videothumb( $myrow['vidid'], $title, $myrow['vidsource'], $myrow['picurl'], $xtubeModuleConfig['videoimgdir'] . '/' . $myrow['screenshot'], $xtubeModuleConfig['shotwidth'], $xtubeModuleConfig['shotheight'] );
        $videoload['dirname'] = $xtubeModule -> getVar( 'dirname' );
		$videoload['width'] = $xtubeModuleConfig['shotwidth']+2;
        $block['videos'][] = $videoload;
    }
    unset( $_block_check_array );
    return $block;
} 

// Function: b_xoopstube_random
// Output  : Returns random video
function b_xoopstube_random( $options ) {
    global $xoopsDB, $xoopsModuleConfig, $xtubemyts;
    $mydirname = basename( dirname( dirname( __FILE__ ) ) );
    $block = array();
    $modhandler = xoops_gethandler( 'module' );
    $xtubeModule = $modhandler -> getByDirname( $mydirname );
    $config_handler = xoops_gethandler( 'config' );
    $xtubeModuleConfig = $config_handler -> getConfigsByCat( 0, $xtubeModule -> getVar( 'mid' ) );
    $xtubemyts = &MyTextSanitizer :: getInstance();

    if ($options[4]>0) {
      $result2 = $xoopsDB -> query( 'SELECT lid, cid, title, vidid, screenshot, published, vidsource, picurl FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE published > 0
									AND published<=' . time() . '
									AND (expired=0 OR expired>' . time() . ')
									AND offline=0
									AND cid=' . $options[4] . '
									ORDER BY RAND() LIMIT ' . $options[1] );
    } else {
      $result2 = $xoopsDB -> query( 'SELECT lid, cid, title, vidid, screenshot, published, vidsource, picurl FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE published > 0
									AND published<=' . time() . '
									AND (expired=0 OR expired>' . time() . ')
									AND offline=0
									ORDER BY RAND() LIMIT ' . $options[1] );
    }
	
	include_once XOOPS_ROOT_PATH . '/modules/' . $xtubeModule -> getVar( 'dirname' ) . '/include/video.php';
	include_once XOOPS_ROOT_PATH . '/modules/' . $xtubeModule -> getVar( 'dirname' ) . '/include/functions.php';
	
    while ( $myrow = $xoopsDB -> fetchArray( $result2 ) ) {
	
        if ( false == checkXTubeBlockGroups( $myrow['cid'] ) || $myrow['cid'] == 0 ) {
            continue;
        }
        $videorandom = array();
        $title = $xtubemyts -> htmlSpecialChars( $xtubemyts -> stripSlashesGPC( $myrow['title'] ) );
        if ( !XOOPS_USE_MULTIBYTES ) {
            if ( strlen( $myrow['title'] ) >= $options[2] ) {
                $title = substr( $myrow['title'], 0, ( $options[2] -1 ) ) . '...';
            } 
        }
        $videorandom['id'] = intval($myrow['lid']);
        $videorandom['cid'] = intval($myrow['cid']);
        $videorandom['title'] = $title;
        $videorandom['date'] = mytube_time( formatTimestamp( $myrow['published'], $options[3] ) );
		$videorandom['videothumb'] = xtube_videothumb( $myrow['vidid'], $myrow['title'], $myrow['vidsource'], $myrow['picurl'], $xtubeModuleConfig['videoimgdir'] . '/' . $myrow['screenshot'], $xtubeModuleConfig['shotwidth'], $xtubeModuleConfig['shotheight'] );
        $videorandom['dirname'] = $xtubeModule -> getVar( 'dirname' );
		$videorandomh['width'] = $xtubeModuleConfig['shotwidth']+2;
        $block['random'][] = $videorandom;
    }
    unset( $_block_check_array );
    return $block;
}

// Function: b_xoopstube_random_h
// Output  : Returns random video in horizontal block
function b_xoopstube_randomh( $options ) {
    global $xoopsDB, $xoopsModuleConfig, $xtubemyts;
    $mydirname = basename( dirname( dirname( __FILE__ ) ) );
    $block = array();
    $modhandler = xoops_gethandler( 'module' );
    $xtubeModule = $modhandler -> getByDirname( $mydirname );
    $config_handler = xoops_gethandler( 'config' );
    $xtubeModuleConfig = $config_handler -> getConfigsByCat( 0, $xtubeModule -> getVar( 'mid' ) );
    $xtubemyts = &MyTextSanitizer :: getInstance();

    if ($options[4]>0) {
      $result2 = $xoopsDB -> query( 'SELECT lid, cid, title, vidid, screenshot, published, vidsource, picurl FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE published > 0
									AND published<=' . time() . '
									AND (expired=0 OR expired>' . time() . ')
									AND offline=0
									AND cid=' . $options[4] . '
									ORDER BY RAND() LIMIT ' . $options[1] );
    } else {
      $result2 = $xoopsDB -> query( 'SELECT lid, cid, title, vidid, screenshot, published, vidsource, picurl FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE published > 0
									AND published<=' . time() . '
									AND (expired=0 OR expired>' . time() . ')
									AND offline=0
									ORDER BY RAND() LIMIT ' . $options[1] );
    }

	include_once XOOPS_ROOT_PATH . '/modules/' . $xtubeModule -> getVar( 'dirname' ) . '/include/video.php';
	include_once XOOPS_ROOT_PATH . '/modules/' . $xtubeModule -> getVar( 'dirname' ) . '/include/functions.php';	
	
    while ( $myrow = $xoopsDB -> fetchArray( $result2 ) ) {

        if ( false == checkXTubeBlockGroups( $myrow['cid'] ) || $myrow['cid'] == 0 ) {
            continue;
        }
        $videorandomh = array();
        $title = $xtubemyts -> htmlSpecialChars( $xtubemyts -> stripSlashesGPC( $myrow['title'] ) );
        $videorandomh['balloon'] = $myrow['title'];
        if ( !XOOPS_USE_MULTIBYTES ) {
            if ( strlen( $myrow['title'] ) >= $options[2] ) {
                $title = substr( $myrow['title'], 0, ( $options[2] -1 ) ) . '...';
            } 
        }
        $videorandomh['id'] = intval($myrow['lid']);
        $videorandomh['cid'] = intval($myrow['cid']);
        $videorandomh['title'] = $title;
        $videorandomh['date'] = mytube_time( formatTimestamp( $myrow['published'], $options[3] ) );
        include_once XOOPS_ROOT_PATH . '/modules/' . $xtubeModule -> getVar( 'dirname' ) . '/include/video.php';
		$videorandomh['videothumb'] = xtube_videothumb( $myrow['vidid'], $myrow['title'], $myrow['vidsource'], $myrow['picurl'], $xtubeModuleConfig['videoimgdir'] . '/' . $myrow['screenshot'], $xtubeModuleConfig['shotwidth'], $xtubeModuleConfig['shotheight'] );
        $videorandomh['dirname'] = $xtubeModule -> getVar( 'dirname' );
		$videorandomh['width'] = $xtubeModuleConfig['shotwidth']+2;
        $block['random'][] = $videorandomh;
    }
    unset( $_block_check_array );
    return $block;
}

// b_xoopstube_top_edit()
// @param $options
// @return
function b_xoopstube_top_edit( $options ) {
    $form = '' . _MB_XTUBE_DISP . '&nbsp;';
    $form .= "<input type='hidden' name='options[]' value='";
    if ( $options[0] == "published" ) {
        $form .= "published'";
    }
    if ( $options[0] == "random" ) {
        $form .= "random'";
    }
    if ( $options[0] == "randomh" ) {
        $form .= "randomh'";
    } else {
        $form .= "hits'";
    }
    $form .= " />";
    $form .= "<input type='text' name='options[]' value='" . $options[1] . "' />&nbsp;" . _MB_XTUBE_FILES . "";
    $form .= "&nbsp;<br />" . _MB_XTUBE_CHARS . "&nbsp;<input type='text' name='options[]' value='" . $options[2] . "' />&nbsp;" . _MB_XTUBE_LENGTH . "";
    $form .= "&nbsp;<br />" . _MB_XTUBE_DATEFORMAT . "&nbsp;<input type='text' name='options[]' value='" . $options[3] . "' />&nbsp;" . _MB_XTUBE_DATEFORMATMANUAL;

    global $xoopsDB;
    $cat_arr = array();
    include_once XOOPS_ROOT_PATH . '/class/xoopstree.php';
    $xt = new XoopsTree( $xoopsDB -> prefix( 'xoopstube_cat' ), 'cid', 'pid');
    $cat_arr = $xt -> getChildTreeArray( 0, 'title');

    $form .= "<br />" . _MB_XTUBE_SELECTCAT . "<br /><select name=\"options[]\" multiple=\"multiple\" size=\"5\">";
	if ( array_search( 0, $options ) === false) {
		$form .= "<option value=\"0\">" . _MB_XTUBE_ALLCAT . "</option>";
	} else {
		$form .= "<option value=\"0\" selected=\"selected\">" . _MB_XTUBE_ALLCAT . "</option>";
	}

	foreach( $cat_arr as $catlist ) {
		if( array_search( $catlist, $options ) === false ) {
			$form .= "<option value=\"" . $catlist['cid'] . "\">" . $catlist['title'] . "</option>";
		} else {
			$form .= "<option value=\"" . $catlist['cid'] . "\" selected=\"selected\">" . $catlist['title'] . "</option>";
		}
	}
    $form .= "</select>";

    return $form;
}
?>