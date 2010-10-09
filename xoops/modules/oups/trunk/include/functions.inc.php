<?php
/**
 * Oups Module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright        The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         Oups Module
 * @since		2.5.0
 * @author            Andrew Mills <ajmills@sirius.net>
 * @version            $Id $
**/

/**
* oups_report()
* $errortype = 404, 500, etc.
*/
function oups_report($errortype = "000") {
global $xoopsDB, $xoopsUser;
	$serverVars = array();
	$serverVars['HTTP_REFERER']	= xoops_getenv('HTTP_REFERER');
	$serverVars['REMOTE_ADDR']	= xoops_getenv('REMOTE_ADDR');
	//$serverVars[''] =
	$referer		= xoops_getenv('HTTP_REFERER');
	$useragent		= xoops_getenv('HTTP_USER_AGENT');
	$remoteaddr		= xoops_getenv('REMOTE_ADDR');
	$requested		= xoops_getenv('REQUEST_URI');
	if(empty($xoopsUser)){
		$uid = 0;
	} else {
		$uid = $xoopsUser->getVar('uid');
	}
		$sql = "INSERT INTO ".$xoopsDB->prefix("oups_errors")." VALUES (
			NULL, 
			'$uid',
			'$errortype',
			NOW(),
			'$referer',
			'$useragent',
			'$remoteaddr',
			'$requested'
			)";
		$xoopsDB->queryF($sql); // or $eh->show("0013");
		if ($xoopsDB->getAffectedRows($sql)) {
		} else {
		}

/* id, uid, error, date, referer, useragent, remoteaddr, */
	return $serverVars;
} // end function
//
//----------------------------------------------------------------------------//
// Admin header.
function oups_adminmenu($currentoption="0", $breadcrumb) {
global $xoopsModule, $xoopsConfig, $xoTheme;
	$xoTheme->addStylesheet( XOOPS_URL . '/modules/oups/css/admin.css');
	$tblColors = Array();
	$tblColors[0] = $tblColors[1] = $tblColors[2] = $tblColors[3] = $tblColors[4] = $tblColors[5] = $tblColors[6] = $tblColors[7] = $tblColors[8] = '';
	$tblColors[$currentoption] = 'current';
	if($currentoption>=0) {
		$tblColors[$currentoption] = 'current';
	}
	if (file_exists(XOOPS_ROOT_PATH . '/modules/oups/language/' . $xoopsConfig['language'] . '/modinfo.php')) {
		include_once XOOPS_ROOT_PATH. '/modules/oups/language/' . $xoopsConfig['language'] . '/modinfo.php';
	} else {
		include_once XOOPS_ROOT_PATH . '/modules/oups/language/english/modinfo.php';
	}
	echo "<div id='buttontop'>";
	echo "<div style=\" float:left; width: 40%; padding: 0 6px; line-height: 18px;\"><a class=\"nobutton\" href=\"../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=".$xoopsModule->getVar('mid')."\" title=\"" . _AM_OUPS_GENERALSET . "\">" . _AM_OUPS_GENERALSET . "</a> <!--| <a href=\"#\" title=\"" . _AM_OUPS_HELP . "\">" . _AM_OUPS_HELP . "</a>--> | <a href=\"about.php\" title=\"". _AM_OUPS_ABOUT ."\">". _AM_OUPS_ABOUT ."</a> | <a href=\"../\" title=\"". _AM_OUPS_GOTOMOD ."\">". _AM_OUPS_GOTOMOD."</a> </div>";
	echo "<div style=\" float: right; width: 40%; text-align: right; padding: 0 6px; line-height: 18px;\"><strong>" . $xoopsModule->name() . "  " . _AM_OUPS_MODULEADMIN . "</strong> " . $breadcrumb . "</div>";
	echo "</div>";
	echo "<div id='buttonbar'><ul>";
	echo "<li id='" . $tblColors[0] . "'><a class='boxreliefd' href=\"index.php\"\" title=\"" . _AM_OUPS_INDEX . "\">" . _AM_OUPS_INDEX . "</a></li>\n";
	echo "<li id='" . $tblColors[1] . "'><a class='boxreliefd' href=\"errors.php\" title=\"" . _AM_OUPS_ERROR . "\">" . _AM_OUPS_ERROR . "</a></li>\n";
	echo "<li id='" . $tblColors[2] . "'><a class='boxreliefd' href=\"reports.php\" title=\"" . _AM_OUPS_REPORTS . "\">" . _AM_OUPS_REPORTS . "</a></li>\n";
	echo "</ul></div>";
} // end function
//
################################################################################
function oups_getwysiwygform( $caption, $name, $value = "", $width = "100%", $height = '400px', $formrows = "20", $formcols = "50", $config = "" ) {
        global $xoopsModuleConfig, $xoopsUser, $xoopsModule;

	$editor = false;
	$x24 = false;
	$xv = str_replace( 'XOOPS ', '', XOOPS_VERSION );
	if ( substr( $xv, 2, 1 ) == '4') {
          $x24 = true;
	}
	// options for the editor
	//required configs
	$editor_options['name']	= $name;
	$editor_options['value']	= $value;
	$editor_options['rows']	= $formrows; // default value = 20
	$editor_options['cols']		= $formcols; // default value = 50
	$editor_options['width']	= $width; // default value = 100%
	$editor_options['height']	= $height; // default value = 400px	

	$whichconfig = "elrte";
	switch($whichconfig){
	case "spaw":
		if(!$x24) {
			if (is_readable(XOOPS_ROOT_PATH . "/class/spaw/formspaw.php"))	{
				include_once XOOPS_ROOT_PATH . "/class/spaw/formspaw.php";
				$editor = new XoopsFormSpaw($caption, $name, $value);
			}
		} else {
			$editor = new XoopsFormEditor($caption, "spaw", $editor_configs);
		}
		break;
	case "fck":
		if(!$x24) {
			if ( is_readable(XOOPS_ROOT_PATH . "/class/xoopseditor/fckeditor/formfckeditor.php"))	{
				include_once(XOOPS_ROOT_PATH . "/class/xoopseditor/fckeditor/formfckeditor.php");
				$editor = new XoopsFormFckeditor($caption, $name, $value);
			}
		} else {
			$editor = new XoopsFormEditor($caption, "fckeditor", $editor_configs);
		}
		break;
	case "htmlarea":
		if(!$x24) {
			if ( is_readable(XOOPS_ROOT_PATH . "/class/htmlarea/formhtmlarea.php"))	{
				include_once(XOOPS_ROOT_PATH . "/class/htmlarea/formhtmlarea.php");
				$editor = new XoopsFormHtmlarea($caption, $name, $value);
			}
		} else {
			$editor = new XoopsFormEditor($caption, "htmlarea", $editor_configs);
		}
		break;
	case "dhtml":
		if(!$x24) {
			$editor = new XoopsFormDhtmlTextArea($caption, $name, $value, 10, 50);
		} else {
			$editor = new XoopsFormEditor($caption, "dhtmltextarea", $editor_configs);
		}
		break;
	case "textarea":
		$editor = new XoopsFormTextArea($caption, $name, $value);
		break;
	case "koivi":
		if(!$x24) {
			if ( is_readable(XOOPS_ROOT_PATH . "/class/wysiwyg/formwysiwygtextarea.php"))	{
				include_once(XOOPS_ROOT_PATH . "/class/wysiwyg/formwysiwygtextarea.php");
				$editor = new XoopsFormWysiwygTextArea($caption, $name, $value, '100%', '400px', '');
			}
		} else {
			$editor = new XoopsFormEditor($caption, "koivi", $editor_configs);
		}
		break;
        case "inbetween":
		if ( is_readable(XOOPS_ROOT_PATH . "/class/xoopseditor/inbetween/forminbetweentextarea.php"))	{
			include_once(XOOPS_ROOT_PATH . "/class/xoopseditor/inbetween/forminbetweentextarea.php");
			$editor = new XoopsFormInbetweenTextArea(array('caption'=>$caption, 'name'=>$name, 'value'=>$value, 'width'=>'100%', 'height'=>'400px'));
		}
		break;
	case "tinyeditor":
			if ( is_readable(XOOPS_ROOT_PATH . "/class/xoopseditor/tinyeditor/formtinyeditortextarea.php"))	{
				include_once(XOOPS_ROOT_PATH . "/class/xoopseditor/tinyeditor/formtinyeditortextarea.php");
				$editor = new XoopsFormTinyeditorTextArea(array('caption'=>$caption, 'name'=>$name, 'value'=>$value, 'width'=>'100%', 'height'=>'400px'));
			}
		break;
	case "tinymce":
		if(!$x24) {
			if ( is_readable(XOOPS_ROOT_PATH . "/class/xoopseditor/tinymce/formtinymce.php"))	{
				include_once(XOOPS_ROOT_PATH . "/class/xoopseditor/tinymce/formtinymce.php");
				$editor = new XoopsFormTinymce(array('caption'=>$caption, 'name'=>$name, 'value'=>$value, 'width'=>'100%', 'height'=>'400px'));
			}
		} else {
			$editor = new XoopsFormEditor($caption, "tinymce", $editor_configs);
		}
		break;
	case "ckeditor": 
            if ( is_readable(XOOPS_ROOT_PATH . "/class/xoopseditor/ckeditor/ckeditor.php"))    { 
                include_once(XOOPS_ROOT_PATH . "/class/xoopseditor/ckeditor/ckeditor.php"); 
                $editor = new XoopsFormCkeditor(array('caption'=>$caption, 'name'=>$name, 'value'=>$value, 'width'=>'100%', 'height'=>'400px')); 
            } 
        break;
	case "nicedit": 
            if ( is_readable(XOOPS_ROOT_PATH . "/class/xoopseditor/nicedit/formnicedit.php"))    { 
                include_once(XOOPS_ROOT_PATH . "/class/xoopseditor/nicedit/formnicedit.php"); 
                $editor = new XoopsFormNicedit(array('caption'=>$caption, 'name'=>$name, 'value'=>$value, 'width'=>'100%', 'height'=>'400px')); 
            } 
        break;
	case "elrte":
		if(!$x24) {
			if ( is_readable(XOOPS_ROOT_PATH . "/class/xoopseditor/elrte/formelrte.php"))	{
				include_once(XOOPS_ROOT_PATH . "/class/xoopseditor/elrte/formelrte.php");
				$editor = new XoopsFormElrte(array('caption'=>$caption, 'name'=>$name, 'value'=>$value, 'width'=>'100%', 'height'=>'400px'));
			}
		} else {
			$editor = new XoopsFormEditor($caption, "elrte", $editor_configs);
		}
		break;
	}
	return $editor;
}
//
// -------------------------------------------------------------------------- //
// Submit form for entries going in function, so can only one needed  - called
// from admin and user submit.
// function_name (form caption, save button caption, form action (add|edit))
function oups_msgform($formcaption, $savebuttoncaption, $formaction, $editdata = NULL) {
global $xoopsDB, $xoopsUser;
include_once (XOOPS_ROOT_PATH . "/class/xoopsformloader.php");
include_once (XOOPS_ROOT_PATH . "/class/xoopstree.php");
include_once (XOOPS_ROOT_PATH . "/include/xoopscodes.php");
$myts =& MyTextSanitizer::getInstance();
// start form
$form = new XoopsThemeForm($formcaption, "entryform", xoops_getenv('PHP_SELF'), 'post');	
//
// Title
//
$title = new XoopsFormText(_AM_OUPS_CAPTTL, 'formdata[title]', 40, 255, $myts->htmlSpecialChars($editdata['title']));
$form->addElement($title);
unset($title);
//
// Error number
//
$title = new XoopsFormText(_AM_OUPS_CAPERRNUM, 'formdata[errnum]', 10, 4, $myts->htmlSpecialChars($editdata['errornum']));
$form->addElement($title);
unset($title);
//
// Main text
//
$editentry = oups_getwysiwygform(_AM_OUPS_CAPMAINTXT, 'formdata[text]', $myts->htmlSpecialChars($editdata['text']), "100%", "250px", '25');
$form->addElement($editentry);
unset($editentry);
//
// Display
//
if (isset($editdata['showme']) AND $editdata['showme'] == "0") { $showme_checked = "0"; }
else { $showme_checked = "1"; } 

$displayedbox = new XoopsFormCheckBox(_AM_OUPS_CAPDSPLY, 'formdata[showme]', $showme_checked); // checked value here whether will be checked?
$displayedbox->addOption(1, _AM_OUPS_CAPDSPLYTXT); // checked value here what will be sent in form?
$form->addElement($displayedbox);
unset($displayedbox);
//
// Add/submit button
//
$button_sub = new XoopsFormButton('', 'but_save', $savebuttoncaption, 'submit');
$tray = new XoopsFormElementTray('');
$tray->addElement($button_sub);
$form->addElement($tray);
//
// hidden bits
//
if ($formaction == "add") {
	$form->addElement(new XoopsFormHidden('op', 'save'));
}
if ($formaction == "edit") {
	$form->addElement(new XoopsFormHidden('op', 'edit'));
	$form->addElement(new XoopsFormHidden('subop', 'save'));
	$form->addElement(new XoopsFormHidden('formdata[id]', $editdata['id']));
}
// End - Display form
$form->display();
//$form->render();
return $form;
} // end function
//
//----------------------------------------------------------------------------//
//
function check_codes($code = "") {
global $xoopsDB;
	$sql = ("SELECT errornum FROM " . $xoopsDB->prefix("oups_msgs") . " WHERE errornum = '". $code ."' LIMIT 1");
	$result=$xoopsDB->query($sql);
	if ($xoopsDB->getRowsNum($result) > 0) {
		return true;
	} else {
		return false;
	}
} // end function
//----------------------------------------------------------------------------//
//
function oups_adminfooter() {
global $xoopsModule;
    echo "<div id='oups-version'>";
    echo $xoopsModule->getVar('name') . ", version " . round($xoopsModule->getVar('version')/100 , 2) ;
    echo "</div>";
} // end function
?>