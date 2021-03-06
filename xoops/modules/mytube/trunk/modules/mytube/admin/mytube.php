<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/mytube.php
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

$mytree = new XoopsTree( $xoopsDB -> prefix( 'xoopstube_cat' ), 'cid', 'pid' );

$op = xtube_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = xtube_cleanRequestVars( $_REQUEST, 'lid', 0 );

function edit( $lid = 0 ) {
    global $xoopsDB, $xtubemyts, $mytree, $imagearray, $xoopsModuleConfig, $xoopsModule, $xoopsUser;

    $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE lid=' . $lid;
    if ( !$result = $xoopsDB -> query( $sql ) ) {
        XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
        return false;
    } 
    $video_array = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
    $directory = $xoopsModuleConfig['videodir'];
//    $vidsource = 200;
    $lid = $video_array['lid'] ? $video_array['lid'] : 0;
    $cid = $video_array['cid'] ? $video_array['cid'] : 0;
    $title = $video_array['title'] ? $xtubemyts -> htmlSpecialCharsStrip( $video_array['title'] ) : '';
    $vidid = $video_array['vidid'] ? $xtubemyts -> htmlSpecialCharsStrip( $video_array['vidid'] ) : '';
    $publisher = $video_array['publisher'] ? $xtubemyts -> htmlSpecialCharsStrip( $video_array['publisher'] ) : '';
    $screenshot = $video_array['screenshot'] ? $xtubemyts -> htmlSpecialCharsStrip( $video_array['screenshot'] ) : '';
    $descriptionb = $video_array['description'] ? $xtubemyts -> htmlSpecialCharsStrip( $video_array['description'] ) : '';
    $published = $video_array['published'] ? $video_array['published'] : time();
    $expired = $video_array['expired'] ? $video_array['expired'] : 0;
    $updated = $video_array['updated'] ? $video_array['updated'] : 0;
    $offline = $video_array['offline'] ? $video_array['offline'] : 0;
    $ipaddress = $video_array['ipaddress'] ? $video_array['ipaddress'] : 0;
    $notifypub = $video_array['notifypub'] ? $video_array['notifypub'] : 0;
    $time = $video_array['time'] ? $xtubemyts -> htmlSpecialCharsStrip( $video_array['time'] ) : '0:00:00';
    $keywords = $video_array['keywords'] ? $xtubemyts -> htmlSpecialCharsStrip( $video_array['keywords'] ) : '';
    $item_tag = $video_array['item_tag'] ? $xtubemyts -> htmlSpecialCharsStrip( $video_array['item_tag'] ) : '';

    xoops_cp_header();
    xtube_adminmenu( _AM_XTUBE_MVIDEOS );

    if ( $lid ) {
        $_vote_data = xtube_getVoteDetails( $lid );
        $text_info = "
			<table width='100%'>
			 <tr>
			  <td width='33%' valign='top'>
			   <div><b>" . _AM_XTUBE_VIDEO_ID . " </b>" . $lid . "</div>
			   <div><b>" . _AM_XTUBE_MINDEX_SUBMITTED . ": </b>" . mytube_time( formatTimestamp( $video_array['date'], $xoopsModuleConfig['dateformat'] ) ) . "</div>
			   <div><b>" . _AM_XTUBE_MOD_MODIFYSUBMITTER . " </b>" . mytube_getLinkedUnameFromId( $video_array['submitter'] ) . "</div>
			   <div><b>" . _AM_XTUBE_VIDEO_IP . " </b>" . $ipaddress . "</div>
			   <div><b>" . _AM_XTUBE_VIDEO_VIEWS . " </b>" . $video_array['hits'] . "</div>
			  </td>
			  <td>
			   <div><b>" . _AM_XTUBE_VOTE_TOTALRATE . ": </b>" . intval( $_vote_data['rate'] ) . "</div>
			   <div><b>" . _AM_XTUBE_VOTE_USERAVG . ": </b>" . intval( round( $_vote_data['avg_rate'], 2 ) ) . "</div>
			   <div><b>" . _AM_XTUBE_VOTE_MAXRATE . ": </b>" . intval( $_vote_data['min_rate'] ) . "</div>
			   <div><b>" . _AM_XTUBE_VOTE_MINRATE . ": </b>" . intval( $_vote_data['max_rate'] ) . "</div>
                           <div><b>&nbsp;</div>
			  </td>
			  <td>		 
			   <div><b>" . _AM_XTUBE_VOTE_MOSTVOTEDTITLE . ": </b>" . intval( $_vote_data['max_title'] ) . "</div>
		          <div><b>" . _AM_XTUBE_VOTE_LEASTVOTEDTITLE . ": </b>" . intval( $_vote_data['min_title'] ) . "</div>
			   <div><b>" . _AM_XTUBE_VOTE_REGISTERED . ": </b>" . ( intval( $_vote_data['rate'] - $_vote_data['null_ratinguser'] ) ) . "</div>
			   <div><b>" . _AM_XTUBE_VOTE_NONREGISTERED . ": </b>" . intval( $_vote_data['null_ratinguser'] ) . "</div>
			   <div><b>&nbsp;</div>
			  </td>
			 </tr>
			</table>";
        echo '
			<fieldset style="border: #E8E8E8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_XTUBE_INFORMATION . '</legend>
			<div style="padding: 8px;">' . $text_info . '</div>	
		<!--	<div style="padding: 8px;"><li>' . $imagearray['deleteimg'] . ' ' . _AM_XTUBE_VOTE_DELETEDSC . '</li></div>\n    -->
			</fieldset>
			<br />';
    } 
    unset( $_vote_data );

    $caption = ( $lid ) ? _AM_XTUBE_VIDEO_MODIFYFILE : _AM_XTUBE_VIDEO_CREATENEWFILE;

    $sform = new XoopsThemeForm( $caption, "storyform", xoops_getenv( 'PHP_SELF' ) );
    $sform -> setExtra( 'enctype="multipart / form - data"' );

// Video title
    $sform -> addElement( new XoopsFormText( _AM_XTUBE_VIDEO_TITLE, 'title', 70, 255, $title ), true );

//MyTube menu
    $file_array = &xtubeLists :: getListTypeAsArray( XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['videodir'], $type='media' );
    $indexfile_select = new XoopsFormSelect( '', 'vidid', $vidid );
    $indexfile_select -> addOptionArray( $file_array );
    $indexfile_tray = new XoopsFormElementTray( _AM_XTUBE_MYTUBEVIDEO, '&nbsp;' );
    $indexfile_tray -> addElement( $indexfile_select );
    $sform -> addElement( $indexfile_tray );

// Screenshot
    $graph_array = &xtubeLists :: getListTypeAsArray( XOOPS_ROOT_PATH . "/" . $xoopsModuleConfig['videoimgdir'], $type = "images" );
    $indeximage_select = new XoopsFormSelect( '', 'screenshot', $screenshot );
    $indeximage_select -> addOptionArray( $graph_array );
    $indeximage_select -> setExtra( "onchange = 'showImgSelected(\"image\", \"screenshot\", \"" . $xoopsModuleConfig['videoimgdir'] . "\", \"\", \"" . XOOPS_URL . "\")'" );
    $indeximage_tray = new XoopsFormElementTray( _AM_XTUBE_VIDEO_SHOTIMAGE, '&nbsp;' );
    $indeximage_tray -> setDescription( sprintf( "<small>" . _AM_XTUBE_VIDEO_MUSTBEVALID . "</small>", "<b>" . $directory . "</b>" ));
    $indeximage_tray -> addElement( $indeximage_select );
    if ( !empty( $imgurl ) ) {
        $indeximage_tray -> addElement( new XoopsFormLabel( '', " <br /><br />< img src='" . XOOPS_URL . "/" . $xoopsModuleConfig['videoimgdir'] . "/" . $screenshot . "' name = 'image' id = 'image' alt = '' / > " ) );
    } else {
        $indeximage_tray -> addElement( new XoopsFormLabel( '', " <br /><br /><img src='" . XOOPS_URL . "/uploads/blank.gif' name='image' id='image' alt='' / > " ) );
    } 
    $sform -> addElement( $indeximage_tray );

// Video publisher
//    $sform -> addElement( new XoopsFormText( _AM_XTUBE_VIDEO_PUBLISHER, 'publisher', 70, 255, $publisher ), true );
    $publisher = $xoopsUser -> uname();
    $sform -> addElement( new XoopsFormHidden( 'publisher', $publisher ) );
    
// Time form
    $sform -> addElement( new XoopsFormText( _AM_XTUBE_TIME, 'time', 7, 7, $time ), false);

// Category menu
    ob_start();
    $mytree -> makeMySelBox( 'title', 'title', $cid, 0 );
    $sform -> addElement( new XoopsFormLabel( _AM_XTUBE_VIDEO_CATEGORY, ob_get_contents() ) );
    ob_end_clean();

// Description form
    $editor = xtube_getWysiwygForm( _AM_XTUBE_VIDEO_DESCRIPTION, 'descriptionb', $descriptionb, 15, 60, '');
    $sform -> addElement( $editor, true );
    
// Meta keywords form
//    $sform -> addElement( new XoopsFormTextArea( _AM_XTUBE_KEYWORDS, 'keywords', $keywords, 7, 60), false);
//    $sform -> addElement(new XoopsFormLabel('', _AM_XTUBE_KEYWORDS_NOTE));
    $keywords = new XoopsFormTextArea( _AM_XTUBE_KEYWORDS, 'keywords', $keywords, 7, 60, false );
    $keywords -> setDescription( "<br /><br /><br /><br /><span style='font-size: smaller;'>" . _AM_XTUBE_KEYWORDS_NOTE . "</span>" );
    $sform -> addElement($keywords);

// Insert tags if Tag-module is installed
    if (xtube_tag_module_included()) {
      include_once XOOPS_ROOT_PATH . '/modules/tag/include/formtag.php';
      $text_tags = new XoopsFormTag("item_tag", 70, 255, $video_array['item_tag'], 0);
      $sform -> addElement( $text_tags );
    } else {
      $sform -> addElement( new XoopsFormHidden( 'item_tag', $video_array['item_tag'] ) ) ;
    }

// Video Publish Date
   $sform -> addElement( new XoopsFormDateTime( _AM_XTUBE_VIDEO_SETPUBLISHDATE, 'published', $size = 15, $published ));

    if ( $lid ) {
        $sform -> addElement( new XoopsFormHidden( 'was_published', $published ) );
        $sform -> addElement( new XoopsFormHidden( 'was_expired', $expired ) );
    } 

// Video Expire Date
    $isexpired = ( $expired > time() ) ? 1: 0 ;
    $expiredates = ( $expired > time() ) ? _AM_XTUBE_VIDEO_EXPIREDATESET . mytube_time( formatTimestamp( $expired, $xoopsModuleConfig['dateformat'] ) ) : _AM_XTUBE_VIDEO_SETDATETIMEEXPIRE;
    $warning = ( $published > $expired && $expired > time() ) ? _AM_XTUBE_VIDEO_EXPIREWARNING : '';
    $expiredate_checkbox = new XoopsFormCheckBox( '', 'expiredateactivate', $isexpired );
    $expiredate_checkbox -> addOption( 1, $expiredates . " <br /> <br /> " );

    $expiredate_tray = new XoopsFormElementTray( _AM_XTUBE_VIDEO_EXPIREDATE . $warning, '' );
    $expiredate_tray -> addElement( $expiredate_checkbox );
    $expiredate_tray -> addElement( new XoopsFormDateTime( _AM_XTUBE_VIDEO_SETEXPIREDATE . " <br /> ", 'expired', 15, $expired ) );
    $expiredate_tray -> addElement( new XoopsFormRadioYN( _AM_XTUBE_VIDEO_CLEAREXPIREDATE, 'clearexpire', 0, ' ' . _YES . '', ' ' . _NO . '' ) );
    $sform -> addElement( $expiredate_tray );

// Set video offline yes/no
    $videostatus_radio = new XoopsFormRadioYN( _AM_XTUBE_VIDEO_FILESSTATUS, 'offline', $offline, ' ' . _YES . '', ' ' . _NO . '' );
    $sform -> addElement( $videostatus_radio );

// Set video status as updated yes/no
    $up_dated = ( $updated == 0 ) ? 0 : 1;
    $video_updated_radio = new XoopsFormRadioYN( _AM_XTUBE_VIDEO_SETASUPDATED, 'up_dated', $up_dated, ' ' . _YES . '', ' ' . _NO . '' );
    $sform -> addElement( $video_updated_radio );

    $result = $xoopsDB -> query( "SELECT COUNT( * ) FROM " . $xoopsDB -> prefix( 'xoopstube_broken' ) . " WHERE lid = " . $lid );
    list ( $broken_count ) = $xoopsDB -> fetchRow( $result );
    if ( $broken_count > 0 )
    {
        $video_updated_radio = new XoopsFormRadioYN( _AM_XTUBE_VIDEO_DELEDITMESS, 'delbroken', 1, ' ' . _YES . '', ' ' . _NO . '' );
        $sform -> addElement( $editmess_radio );
    } 

    if ( $lid && $published == 0 ) {
        $approved = ( $published == 0 ) ? 0 : 1;
        $approve_checkbox = new XoopsFormCheckBox( _AM_XTUBE_VIDEO_EDITAPPROVE, "approved", 1 );
        $approve_checkbox -> addOption( 1, " " );
        $sform -> addElement( $approve_checkbox );
    } 

    if ( !$lid ) {
        $button_tray = new XoopsFormElementTray( '', '' );
        $button_tray -> addElement( new XoopsFormHidden( 'status', 1 ) );
        $button_tray -> addElement( new XoopsFormHidden( 'notifypub', $notifypub ) );
        $button_tray -> addElement( new XoopsFormHidden( 'op', 'save' ) );
        $button_tray -> addElement( new XoopsFormButton( '', '', _AM_XTUBE_BSAVE, 'submit' ) );
        $sform -> addElement( $button_tray );
    } else {
        $button_tray = new XoopsFormElementTray( '', '' );
        $button_tray -> addElement( new XoopsFormHidden( 'lid', $lid ) );
        $button_tray -> addElement( new XoopsFormHidden( 'status', 2 ) );
        $hidden = new XoopsFormHidden( 'op', 'save' );
        $button_tray -> addElement( $hidden );

        $butt_dup = new XoopsFormButton( '', '', _AM_XTUBE_BMODIFY, 'submit' );
        $butt_dup -> setExtra( 'onclick="this . form . elements . op . value = \'save\'"' );
        $button_tray -> addElement( $butt_dup );
        $butt_dupct = new XoopsFormButton( '', '', _AM_XTUBE_BDELETE, 'submit' );
        $butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'delete\'"' );
        $button_tray -> addElement( $butt_dupct );
        $butt_dupct2 = new XoopsFormButton( '', '', _AM_XTUBE_BCANCEL, 'submit' );
        $butt_dupct2 -> setExtra( 'onclick="this.form.elements.op.value=\'videosConfigMenu\'"' );
        $button_tray -> addElement( $butt_dupct2 );
        $sform -> addElement( $button_tray );
    }
    $sform -> display();
    unset( $hidden );
    xoops_cp_footer();
} 

switch ( strtolower( $op ) ) {
    case 'edit':
        edit( $lid );
        break;

    case 'save':

        $groups = isset( $_POST['groups'] ) ? $_POST['groups'] : array();
        $lid = ( !empty( $_POST['lid'] ) ) ? $_POST['lid'] : 0;
        $cid = ( !empty( $_POST['cid'] ) ) ? $_POST['cid'] : 0;
        $vidrating = ( !empty( $_POST['vidrating'] ) ) ? $_POST['vidrating'] : 6;
        $status = ( !empty( $_POST['status'] ) ) ? $_POST['status'] : 2;

// Get data from form
        $screenshot = ( $_POST['screenshot'] != 'blank.gif' ) ? $xtubemyts -> addslashes( $_POST['screenshot'] ) : '';
        $vidid = $xtubemyts -> addslashes( trim( $_POST['vidid'] ) );
        $title = $xtubemyts -> addslashes( trim( $_POST['title'] ) );
        $descriptionb = $xtubemyts -> addslashes( trim( $_POST['descriptionb'] ) );
        $time = $xtubemyts -> addslashes( trim( $_POST['time'] ) );
        $keywords = $xtubemyts -> addslashes( trim( $_POST['keywords'] ) );
        $item_tag = $xtubemyts -> addslashes( trim( $_POST['item_tag'] ) );
        $submitter = $xoopsUser -> uid();
        $publisher = $xtubemyts -> addslashes( trim( $_POST['publisher'] ) );

        $updated = ( isset( $_POST['was_published'] ) && $_POST['was_published'] == 0 ) ? 0 : time();
        $published =  strtotime($_POST['published']['date'] ) + $_POST['published']['time'];

        if ( $_POST['up_dated'] == 0 ) {
            $updated = 0;
            $status = 1;
        } 

        $offline = ( $_POST['offline'] == 1 ) ? 1 : 0;
        $approved = ( isset( $_POST['approved'] ) && $_POST['approved'] == 1 ) ? 1 : 0;
        $notifypub = ( isset( $_POST['notifypub'] ) && $_POST['notifypub'] == 1 );
        
        if ( !$lid ) {
            $date = time();
            $publishdate = time();
        } else {
            $publishdate = $_POST['was_published'];
            $expiredate = $_POST['was_expired'];
        } 
        if ( $approved == 1 && empty( $publishdate ) ) {
            $publishdate = time();
        }
        if ( isset( $_POST['expiredateactivate'] ) ) {
            $expiredate = strtotime( $_POST['expired']['date'] ) + $_POST['expired']['time'];
        } 
        if ( $_POST['clearexpire'] ) {
            $expiredate = '0';
        } 

// Update or insert linkload data into database
        if ( !$lid ) {
            $date = time();
            $publishdate = time();
            $ipaddress = $_SERVER['REMOTE_ADDR'];
            $sql = "INSERT INTO " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " (lid, cid, title, vidid, screenshot, submitter, publisher, status, date, hits, rating, votes, comments, vidsource, published, expired, updated, offline, description, ipaddress, notifypub, vidrating, time, keywords, item_tag )";
            $sql .= " VALUES 	('', $cid, '$title', '$vidid', '$screenshot', '$submitter', '$publisher', '$status', '$date', 0, 0, 0, 0, '200', '$published', 0, '$updated', '$offline', '$descriptionb', '$ipaddress', '0', '$vidrating', '$time', '$keywords', '$item_tag')";
        } else {
            $sql = "UPDATE " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " SET cid = $cid, title='$title', vidid='$vidid', screenshot='$screenshot', publisher='$publisher', status='$status', vidsource='200', published='$published', expired='$expiredate', updated='$updated', offline='$offline', description='$descriptionb', vidrating='$vidrating', time='$time', keywords='$keywords', item_tag='$item_tag' WHERE lid=" . $lid;
        }

        if ( !$result = $xoopsDB -> queryF( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        }

        $newid = mysql_insert_id();
        
// Add item_tag to Tag-module
        if ( !$lid ) {
        $tagupdate = xtube_tagupdate($newid, $item_tag);
        } else {
         $tagupdate = xtube_tagupdate($lid, $item_tag);
        }

// Send notifications
        if ( !$lid ) {
            $tags = array();
            $tags['VIDEO_NAME'] = $title;
            $tags['VIDEO_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $cid . '&amp;lid=' . $newid;
            $sql = "SELECT title FROM " . $xoopsDB -> prefix( 'xoopstube_cat' ) . " WHERE cid=" . $cid;
            $result = $xoopsDB -> query( $sql );
            $row = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
            $notification_handler = &xoops_gethandler( 'notification' );
            $notification_handler -> triggerEvent( 'global', 0, 'new_video', $tags );
            $notification_handler -> triggerEvent( 'category', $cid, 'new_video', $tags );
        } 
        if ( $lid && $approved && $notifypub ) {
            $tags = array();
            $tags['VIDEO_NAME'] = $title;
            $tags['VIDEO_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $cid . '&amp;lid=' . $lid;
            $sql = "SELECT title FROM " . $xoopsDB -> prefix( 'xoopstube_cat' ) . " WHERE cid=" . $cid;
            $result = $xoopsDB -> query( $sql );
            $row = $xoopsDB -> fetchArray( $result );
            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
            $notification_handler = &xoops_gethandler( 'notification' );
            $notification_handler -> triggerEvent( 'global', 0, 'new_video', $tags );
            $notification_handler -> triggerEvent( 'category', $cid, 'new_video', $tags );
            $notification_handler -> triggerEvent( 'video', $lid, 'approve', $tags );
        } 
        $message = ( !$lid ) ? _AM_XTUBE_VIDEO_NEWFILEUPLOAD : _AM_XTUBE_VIDEO_FILEMODIFIEDUPDATE ;
        $message = ( $lid && !$_POST['was_published'] && $approved ) ? _AM_XTUBE_VIDEO_FILEAPPROVED : $message;

        if ( xtube_cleanRequestVars( $_REQUEST, 'delbroken', 0 ) ) {
            $sql = "DELETE FROM " . $xoopsDB -> prefix( 'xoopstube_broken' ) . " WHERE lid=" . $lid;
            if ( !$result = $xoopsDB -> queryF( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 
        } 

        redirect_header( "index.php", 1, $message );

        break;

    case 'delete':
        if ( xtube_cleanRequestVars( $_REQUEST, 'confirm', 0 ) ) {
            $title = xtube_cleanRequestVars( $_REQUEST, 'title', 0 );
            $sql = "DELETE FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE lid=" . $lid;
            if ( !$result = $xoopsDB -> query( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 
            $sql = "DELETE FROM " . $xoopsDB -> prefix( 'xoopstube_votedata' ) . " WHERE lid=" . $lid;
            if ( !$result = $xoopsDB -> query( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 
            // delete comments
            xoops_comment_delete( $xoopsModule -> getVar( 'mid' ), $lid );
            redirect_header( "index.php", 1, sprintf( _AM_XTUBE_VIDEO_FILEWASDELETED, $title ) );
            exit();
        } else {
            $sql = 'SELECT lid, title, item_tag, vidid FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE lid=' . $lid;
            if ( !$result = $xoopsDB -> query( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 			
            list( $lid, $title ) = $xoopsDB -> fetchrow( $result );
            $item_tag = $result['item_tag'];
	    xoops_cp_header();
            xtube_adminmenu( _AM_XTUBE_BINDEX );
            xoops_confirm( array( 'op' => 'delete', 'lid' => $lid, 'confirm' => 1, 'title' => $title ), 'index.php', _AM_XTUBE_VIDEO_REALLYDELETEDTHIS . "<br /><br>" . $title, _DELETE );

            // Remove item_tag from Tag-module
            $tagupdate = xtube_tagupdate($lid, $item_tag);

            xoops_cp_footer();
        } 
        break;

    case 'main':
    default:

        $start = xtube_cleanRequestVars( $_REQUEST, 'start', 0 );
        $start1 = xtube_cleanRequestVars( $_REQUEST, 'start1', 0 );
        $start2 = xtube_cleanRequestVars( $_REQUEST, 'start2', 0 );
        $start3 = xtube_cleanRequestVars( $_REQUEST, 'start3', 0 );
        $start4 = xtube_cleanRequestVars( $_REQUEST, 'start4', 0 );
        $start5 = xtube_cleanRequestVars( $_REQUEST, 'start5', 0 );
        $totalcats = xtube_totalcategory();

        $result = $xoopsDB -> query( "SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'xoopstube_broken' ) );
        list( $totalbrokenvideos ) = $xoopsDB -> fetchRow( $result );
        $result2 = $xoopsDB -> query( "SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'xoopstube_mod' ) );
        list( $totalmodrequests ) = $xoopsDB -> fetchRow( $result2 );
        $result3 = $xoopsDB -> query( "SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE published = 0" );
        list( $totalnewvideos ) = $xoopsDB -> fetchRow( $result3 );
        $result4 = $xoopsDB -> query( "SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE published > 0" );
        list( $totalvideos ) = $xoopsDB -> fetchRow( $result4 );

        xoops_cp_header();
        xtube_adminmenu( _AM_XTUBE_BINDEX );
        echo "
			<fieldset><legend style='font-weight: bold; color: #0A3760;'>" . _AM_XTUBE_MINDEX_VIDEOSUMMARY . "</legend>\n
			<div style='padding: 8px;'><small>\n
			<a href='category.php'>" . _AM_XTUBE_SCATEGORY . "</a><b>" . $totalcats . "</b> | \n
			<a href='index.php'>" . _AM_XTUBE_SFILES . "</a><b>" . $totalvideos . "</b> | \n
			<a href='newvideos.php'>" . _AM_XTUBE_SNEWFILESVAL . "</a><b>" . $totalnewvideos . "</b> | \n
			<a href='modifications.php'>" . _AM_XTUBE_SMODREQUEST . "</a><b>" . $totalmodrequests . "</b> | \n
			<a href='brokenvideo.php'>" . _AM_XTUBE_SBROKENSUBMIT . "</a><b>" . $totalbrokenvideos . "</b>\n
			</small></div></fieldset><br />\n
		";

        if ( $totalcats > 0 ) {
            $sform = new XoopsThemeForm( _AM_XTUBE_CCATEGORY_MODIFY, "category", "category.php" );
            ob_start();
				$mytubetree -> makeMySelBox( 'title', 'title' );
				$sform -> addElement( new XoopsFormLabel( _AM_XTUBE_CCATEGORY_MODIFY_TITLE, ob_get_contents() ) );
            ob_end_clean();
            $dup_tray = new XoopsFormElementTray( '', '' );
            $dup_tray -> addElement( new XoopsFormHidden( 'op', 'modCat' ) );
            $butt_dup = new XoopsFormButton( '', '', _AM_XTUBE_BMODIFY, 'submit' );
            $butt_dup -> setExtra( 'onclick="this.form.elements.op.value=\'modCat\'"' );
            $dup_tray -> addElement( $butt_dup );
            $butt_dupct = new XoopsFormButton( '', '', _AM_XTUBE_BDELETE, 'submit' );
            $butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'del\'"' );
            $dup_tray -> addElement( $butt_dupct );
            $sform -> addElement( $dup_tray );
            $sform -> display();
        } 

        if ( $totalvideos > 0 ) {
            $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE published > 0  ORDER BY lid DESC' ;
            $published_array = $xoopsDB -> query( $sql, $xoopsModuleConfig['admin_perpage'], $start );
            $published_array_count = $xoopsDB -> getRowsNum( $xoopsDB -> query( $sql ) );
            xtube_videolistheader( _AM_XTUBE_MINDEX_PUBLISHEDVIDEO );
            xtube_linklistpagenavleft( $published_array_count, $start, 'art' );
            if ( $published_array_count > 0 ) {
                while ( $published = $xoopsDB -> fetchArray( $published_array ) ) {
                    xtube_videolistbody( $published );
                } 
            } else {
                xtube_videolistfooter();
            } 
            xtube_videolistpagenav( $published_array_count, $start, 'art' );
        }
        xoops_cp_footer();
        break;
} 
?>