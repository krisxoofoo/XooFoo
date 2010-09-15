<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/indexpage.php
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

global $xoopsModuleConfig;

$op = xtube_cleanRequestVars( $_REQUEST, 'op', '' );
//$cid = xtube_cleanRequestVars( $_REQUEST, 'cid', 0 );

switch ( strtolower( $op ) ) {
    case 'save':
        $indexheading = $xtubemyts -> addslashes( xoops_trim($_REQUEST['indexheading']) );
        $indexheader = $xtubemyts -> addslashes( xoops_trim($_REQUEST['indexheader']) );
        $indexfooter = $xtubemyts -> addslashes( xoops_trim($_REQUEST['indexfooter']) );
        $indeximage = $xtubemyts -> addslashes( $_REQUEST['indeximage'] );
        $nohtml = isset( $_REQUEST['nohtml'] ) ? 1 : 0;
        $nosmiley = isset( $_REQUEST['nosmiley'] ) ? 1 : 0;
        $noxcodes = isset( $_REQUEST['noxcodes'] ) ? 1 : 0;
        $noimages = isset( $_REQUEST['noimages'] ) ? 1 : 0;
        $nobreak = isset( $_REQUEST['nobreak'] ) ? 1 : 0;
        $indexheaderalign = $xtubemyts -> addslashes( $_REQUEST['indexheaderalign'] );
        $indexfooteralign = $xtubemyts -> addslashes( $_REQUEST['indexfooteralign'] );
		$lastvideosyn = $_REQUEST['lastvideosyn'];
        $lastvideostotal = $xtubemyts -> addslashes( $_REQUEST['lastvideostotal'] );
        $sql = "UPDATE " . $xoopsDB -> prefix( 'xoopstube_indexpage' ) . " SET indexheading='$indexheading', indexheader='$indexheader', indexfooter='$indexfooter', indeximage='$indeximage', indexheaderalign='$indexheaderalign', indexfooteralign='$indexfooteralign', nohtml='$nohtml', nosmiley='$nosmiley', noxcodes='$noxcodes', noimages='$noimages', nobreak='$nobreak', lastvideosyn='$lastvideosyn', lastvideostotal='$lastvideostotal'";
        if ( !$result = $xoopsDB -> query( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        redirect_header( 'index.php', 1, _AM_XTUBE_IPAGE_UPDATED );
        break;

    default:
        $sql = 'SELECT indeximage, indexheading, indexheader, indexfooter, nohtml, nosmiley, noxcodes, noimages, nobreak, indexheaderalign, indexfooteralign, lastvideosyn, lastvideostotal FROM ' . $xoopsDB -> prefix( 'xoopstube_indexpage' );
        if ( !$result = $xoopsDB -> query( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        list( $indeximage, $indexheading, $indexheader, $indexfooter, $nohtml, $nosmiley, $noxcodes, $noimages, $nobreak, $indexheaderalign, $indexfooteralign, $lastvideosyn, $lastvideostotal ) = $xoopsDB -> fetchrow( $result );

        xoops_cp_header();
        xtube_adminmenu( _AM_XTUBE_INDEXPAGE );

        echo '
		 <fieldset style="border: #e8e8e8 1px solid;">
		 <legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_XTUBE_IPAGE_INFORMATION . '</legend>
		 <div style="padding: 8px;">
		 <img src="' . XOOPS_URL . '/modules/' . $mydirname . '/images/icon/indexpage.png" alt="" style="float: left; padding-right: 10px;" />
		 ' . _AM_XTUBE_MINDEX_PAGEINFOTXT . '</div>
		 </fieldset><br />';

        $sform = new XoopsThemeForm( _AM_XTUBE_IPAGE_MODIFY, 'op', xoops_getenv( 'PHP_SELF' ) );
        $sform -> addElement( new XoopsFormText( _AM_XTUBE_IPAGE_CTITLE, 'indexheading', 60, 60, $indexheading ), false );
        $graph_array = &xtubeLists :: getListTypeAsArray( XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['mainimagedir'], $type = 'images' );
        $indeximage_select = new XoopsFormSelect( '', 'indeximage', $indeximage );
        $indeximage_select -> addOptionArray( $graph_array );
        $indeximage_select -> setExtra( "onchange='showImgSelected(\"image\", \"indeximage\", \"" . $xoopsModuleConfig['mainimagedir'] . "\", \"\", \"" . XOOPS_URL . "\")'" );
        $indeximage_tray = new XoopsFormElementTray( _AM_XTUBE_IPAGE_CIMAGE, '&nbsp;' );
        $indeximage_tray -> addElement( $indeximage_select );
        if ( !empty( $indeximage ) ) {
            $indeximage_tray -> addElement( new XoopsFormLabel( '', '<br /><br /><img src="' . XOOPS_URL . '/' . $xoopsModuleConfig['mainimagedir'] . '/' . $indeximage . '" name="image" id="image" alt="" />' ) );
        } else {
            $indeximage_tray -> addElement( new XoopsFormLabel( '', '<br /><br /><img src="' . XOOPS_URL . '/uploads/blank.gif" name="image" id="image" alt="" />' ) );
        } 
        $sform -> addElement( $indeximage_tray );

        $editor = xtube_getWysiwygForm( _AM_XTUBE_IPAGE_CHEADING, 'indexheader', $indexheader, 15, 60, '');
        $sform -> addElement($editor,false);

        $headeralign_select = new XoopsFormSelect( _AM_XTUBE_IPAGE_CHEADINGA, 'indexheaderalign', $indexheaderalign );
        $headeralign_select -> addOptionArray( array( 'left' => _AM_XTUBE_IPAGE_CLEFT, 'right' => _AM_XTUBE_IPAGE_CRIGHT, 'center' => _AM_XTUBE_IPAGE_CCENTER ) );
        $sform -> addElement( $headeralign_select );
        $sform -> addElement( new XoopsFormTextArea( _AM_XTUBE_IPAGE_CFOOTER, 'indexfooter', $indexfooter, 10, 60 ) );
        $footeralign_select = new XoopsFormSelect( _AM_XTUBE_IPAGE_CFOOTERA, 'indexfooteralign', $indexfooteralign );
        $footeralign_select -> addOptionArray( array( 'left' => _AM_XTUBE_IPAGE_CLEFT, 'right' => _AM_XTUBE_IPAGE_CRIGHT, 'center' => _AM_XTUBE_IPAGE_CCENTER ) );
        $sform -> addElement( $footeralign_select );

        $options_tray = new XoopsFormElementTray( _AM_XTUBE_TEXTOPTIONS, '<br />' );
	//html option
        $html_checkbox = new XoopsFormCheckBox( '', 'nohtml', $nohtml );
        $html_checkbox -> addOption( 1, _AM_XTUBE_DISABLEHTML );
        $options_tray -> addElement( $html_checkbox );
	//smiley option
        $smiley_checkbox = new XoopsFormCheckBox( '', 'nosmiley', $nosmiley );
        $smiley_checkbox -> addOption( 1, _AM_XTUBE_DISABLESMILEY );
        $options_tray -> addElement( $smiley_checkbox );
	//xcodes option
        $xcodes_checkbox = new XoopsFormCheckBox( '', 'noxcodes', $noxcodes );
        $xcodes_checkbox -> addOption( 1, _AM_XTUBE_DISABLEXCODE );
        $options_tray -> addElement( $xcodes_checkbox );
	//noimages option
        $noimages_checkbox = new XoopsFormCheckBox( '', 'noimages', $noimages );
        $noimages_checkbox -> addOption( 1, _AM_XTUBE_DISABLEIMAGES );
        $options_tray -> addElement( $noimages_checkbox );
	//breaks option
        $breaks_checkbox = new XoopsFormCheckBox( '', 'nobreak', $nobreak );
        $breaks_checkbox -> addOption( 1, _AM_XTUBE_DISABLEBREAK );
        $options_tray -> addElement( $breaks_checkbox );
        $sform -> addElement( $options_tray );
		
		$sform -> addElement(  new XoopsFormRadioYN( _AM_XTUBE_IPAGE_SHOWLATEST, 'lastvideosyn', $lastvideosyn, ' ' . _YES . '', ' ' . _NO . '' ) );

        $lastvideostotalform = new XoopsFormText( _AM_XTUBE_IPAGE_LATESTTOTAL, 'lastvideostotal', 2, 2, $lastvideostotal );
		$lastvideostotalform -> setDescription( '<small>' . _AM_XTUBE_IPAGE_LATESTTOTAL_DSC . '</small>' );
        $sform -> addElement( $lastvideostotalform, false );

        $button_tray = new XoopsFormElementTray( '', '' );
        $hidden = new XoopsFormHidden( 'op', 'save' );
        $button_tray -> addElement( $hidden );
        $button_tray -> addElement( new XoopsFormButton( '', 'post', _AM_XTUBE_BSAVE, 'submit' ) );
        $sform -> addElement( $button_tray );
        $sform -> display();
        break;
} 
xoops_cp_footer();
?>