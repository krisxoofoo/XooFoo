<?php
// $Id$
//  ------------------------------------------------------------------------ //
//  Author: Andrew Mills                                                     //
//  Email:  ajmills@sirium.net                                               //
//	About:           //
//                                                                           //
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //


/**
* amhterror_report()
* $errortype = 404, 500, etc.
*/
function amhterror_report($errortype = "000") {
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
	
	
		$sql = "INSERT INTO ".$xoopsDB->prefix("amhterror_errors")." VALUES (
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
			//redirect_header("category.php", 2, _AM_AMJO_DBUPDATED);
			//echo "entered";
		} else {
			//redirect_header("category.php", 2, _AM_AMJO_DBNOUPDATED);
			//echo "not entered";
		}

/*
id
uid
error
date
referer
useragent
remoteaddr
*/
	
	return $serverVars;
	
} // end function

//
//----------------------------------------------------------------------------//
// Admin header.
function amhterr_adminmenu($currentoption="0", $breadcrumb) {
global $xoopsModule, $xoopsConfig;

	/* Nice buttons styles */
	echo "
    	<style type='text/css'>
    	#buttontop { float:left; width:100%; background: #e7e7e7; font-size:93%; line-height:normal; border-top: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; margin: 0; }
    	#buttonbar { float:left; width:100%; background: #e7e7e7 url('" . XOOPS_URL . "/modules/amhterror/images/bg.png') repeat-x left bottom; font-size:93%; line-height:normal; border-left: 1px solid black; border-right: 1px solid black; margin-bottom: 12px; }
    	#buttonbar ul { margin:0; margin-top: 15px; padding:10px 10px 0; list-style:none; }
		#buttonbar li { display:inline; margin:0; padding:0; }
		#buttonbar a { float:left; background:url('" . XOOPS_URL . "/modules/amhterror/images/left_both.png') no-repeat left top; margin:0; padding:0 0 0 9px; border-bottom:1px solid #000; text-decoration:none; }
		#buttonbar a span { float:left; display:block; background:url('" . XOOPS_URL . "/modules/amhterror/images/right_both.png') no-repeat right top; padding:5px 15px 4px 6px; font-weight:bold; color:#765; }
		/* Commented Backslash Hack hides rule from IE5-Mac \*/
		#buttonbar a span {float:none;}
		/* End IE5-Mac hack */
		#buttonbar a:hover span { color:#333; }
		#buttonbar #current a { background-position:0 -150px; border-width:0; }
		#buttonbar #current a span { background-position:100% -150px; padding-bottom:5px; color:#333; }
		#buttonbar a:hover { background-position:0% -150px; }
		#buttonbar a:hover span { background-position:100% -150px; }
		</style>
    ";

	$tblColors = Array();
	$tblColors[0] = $tblColors[1] = $tblColors[2] = $tblColors[3] = $tblColors[4] = $tblColors[5] = $tblColors[6] = $tblColors[7] = $tblColors[8] = '';
	//$tblColors[$currentoption] = 'current';
	if($currentoption>=0) {
		$tblColors[$currentoption] = 'current';
	}

	if (file_exists(XOOPS_ROOT_PATH . '/modules/amhterror/language/' . $xoopsConfig['language'] . '/modinfo.php')) {
		include_once XOOPS_ROOT_PATH. '/modules/amhterror/language/' . $xoopsConfig['language'] . '/modinfo.php';
	} else {
		include_once XOOPS_ROOT_PATH . '/modules/amhterror/language/english/modinfo.php';
	}

	echo "<div id='buttontop'>";
	echo "<table border=\"0\" style=\"width: 100%; padding: 0; \" cellspacing=\"0\"><tr>";
	echo "<td style=\"width: 60%; font-size: 10px; text-align: left; color: #2F5376; padding: 0 6px; line-height: 18px;\"><a class=\"nobutton\" href=\"../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=".$xoopsModule->getVar('mid')."\">" . _AM_AMHTERR_GENERALSET . "</a> <!--| <a href=\"#\">" . _AM_AMHTERR_HELP . "</a>--> | <a href=\"about.php\">". _AM_AMHTERR_ABOUT ."</a> </td>";
	echo "<td style=\"width: 40%; font-size: 10px; text-align: right; color: #2F5376; padding: 0 6px; line-height: 18px;\"><b>" . $xoopsModule->name() . "  " . _AM_AMHTERR_MODULEADMIN . "</b> " . $breadcrumb . "</td>";
	echo "</tr></table>";
	echo "</div>";

	echo "<div id='buttonbar'>";
	echo "<ul>";
	echo "<li id='" . $tblColors[0] . "'><a href=\"index.php\"\"><span>" . _AM_AMHTERR_INDEX . "</span></a></li>\n";
	echo "<li id='" . $tblColors[1] . "'><a href=\"errors.php\"><span>" . _AM_AMHTERR_ERROR . "</span></a></li>\n";
	echo "<li id='" . $tblColors[2] . "'><a href=\"reports.php\"><span>" . _AM_AMHTERR_REPORTS . "</span></a></li>\n";
	
	echo "</ul></div>";
	echo "<br /><br /><pre>&nbsp;</pre><pre>&nbsp;</pre>";
	
} // end function


//
//
//
################################################################################
# Get form wysiwyg editor - based on function in news 1.4(?), and sampleform.inc.php.
# Width & height passed through are for 2.0.* version.
function amhterror_getwysiwygform($caption, $name, $value = "", $width = "100%", $height = '400px', $formrows = "20", $formcols = "50", $config = "") {
global $xoopsModuleConfig;
	
	$editor = false;
	$x22=false;
	$xv=str_replace('XOOPS ','',XOOPS_VERSION);
	if(substr($xv,2,1)=='2') {
		$x22=true;
	}

	// options for the editor
	//required configs
	$editor_options['name']		= $name;
	$editor_options['value']	= $value;
	//optional configs
		$editor_options['rows']		= $formrows; // default value = 5
		$editor_options['cols']		= $formcols; // default value = 50
		$editor_options['width']	= $width; // default value = 100%
		$editor_options['height']	= $height; // default value = 400px	
	
	// Want to choose which editor config to use, depending on whether user or admin side.
	#if ($config == "user") { $whichconfig = $xoopsModuleConfig['articleedituser']; }
	#else { $whichconfig = $xoopsModuleConfig['amjourneditadmin']; }
	
	$whichconfig = 0;
	switch($whichconfig){
	case "0": // xoops' default dhtml
		if(!$x22) {
				$editor = new XoopsFormDhtmlTextArea($caption, $name, $value, $editor_options['rows'], $editor_options['cols']);
			#}
		} else {
			$editor = new XoopsFormEditor($caption, "dhtml", $editor_options);
		}
		break;
	case "1": // spaw
		if(!$x22) {
			if (is_readable(XOOPS_ROOT_PATH . "/class/spaw/formspaw.php")) {
				include_once XOOPS_ROOT_PATH . "/class/spaw/formspaw.php";
				$editor = new XoopsFormSpaw($caption, $name, $value, $width, $height);
			} else {
				$editor = new XoopsFormDhtmlTextArea($caption, $name, $value, $editor_options['rows'], $editor_options['width']);
			}
		} else {
			$editor = new XoopsFormEditor($caption, "spaw", $editor_options);
		}
		break;
	case "2": // fck editor
		if(!$x22) {
			if (is_readable(XOOPS_ROOT_PATH . "/class/fckeditor/formfckeditor.php")) {
				include_once(XOOPS_ROOT_PATH . "/class/fckeditor/formfckeditor.php");
				$editor = new XoopsFormFckeditor($caption, $name, $value, $width, $height);
			} else {
				$editor = new XoopsFormDhtmlTextArea($caption, $name, $value, $editor_options['rows'], $editor_options['width']);
			}
		}
		else {
			$editor = new XoopsFormEditor($caption, "fckeditor", $editor_options);
		}
		break;
	case "3": // htmlarea
		if(!$x22) {
			if (is_readable(XOOPS_ROOT_PATH . "/class/htmlarea/formhtmlarea.php")) {
				include_once(XOOPS_ROOT_PATH . "/class/htmlarea/formhtmlarea.php");
				$editor = new XoopsFormHtmlarea($caption, $name, $value, $width, $height);
			} else {
				$editor = new XoopsFormDhtmlTextArea($caption, $name, $value, $editor_options['rows'], $editor_options['width']);
			}
		}
		else {
			$editor = new XoopsFormEditor($caption, "htmlarea", $editor_options);
		}
		break;
	case "4": // koivi (edkoivipath)
		if(!$x22) {
			if (is_readable(XOOPS_ROOT_PATH . "/class/koivi/formwysiwygtextarea.php")) {
				include_once(XOOPS_ROOT_PATH . "/class/koivi/formwysiwygtextarea.php");
				$editor = new XoopsFormWysiwygTextArea($caption, $name, $value, $width, $height);
			} else {
				$editor = new XoopsFormDhtmlTextArea($caption, $name, $value, $editor_options['rows'], $editor_options['width']);
			}
		}
		else {
			$editor = new XoopsFormEditor($caption, "koivi", $editor_options);
		}
		break;
	case "5": // xoops compact/textarea
		if(!$x22) {
			$editor = new XoopsFormTextArea($caption, $name, $value, $editor_options['rows'], $editor_options['width']);
		}
		else {
			$editor = new XoopsFormTextArea($caption, $name, $editor_options);
		}
		break;
	} // end switch
	
	return $editor;
	
} // end


//
//
//
//
// -------------------------------------------------------------------------- //
// Submit form for entries going in function, so can only one needed  - called
// from admin and user submit.
// function_name (form caption, save button caption, form action (add|edit))
function amhterror_msgform($formcaption, $savebuttoncaption, $formaction, $editdata = NULL) {
global $xoopsDB, $xoopsUser;

include_once (XOOPS_ROOT_PATH . "/class/xoopsformloader.php");
include_once (XOOPS_ROOT_PATH . "/class/xoopstree.php");
include_once (XOOPS_ROOT_PATH . "/include/xoopscodes.php");
$myts =& MyTextSanitizer::getInstance();

//print_r($editdata);

// start form
$form = new XoopsThemeForm($formcaption, "entryform", xoops_getenv('PHP_SELF'), 'post');	


//
// Title
//
//if (!isset($cat_title)) { $cat_title = ""; }
$title = new XoopsFormText(_AM_AMHTERR_CAPTTL, 'formdata[title]', 40, 255, $myts->htmlSpecialChars($editdata['title']));
$form->addElement($title);
unset($title);


//
// Error number
//
//if (!isset($cat_title)) { $cat_title = ""; }
$title = new XoopsFormText(_AM_AMHTERR_CAPERRNUM, 'formdata[errnum]', 10, 4, $myts->htmlSpecialChars($editdata['errornum']));
$form->addElement($title);
unset($title);


//
// Main text
//
//if (!isset($cat_description)) { $cat_description = ""; }
$editentry = amhterror_getwysiwygform(_AM_AMHTERR_CAPMAINTXT, 'formdata[text]', $myts->htmlSpecialChars($editdata['text']), "100%", "250px", '25');
$form->addElement($editentry);
unset($editentry);


//
// Display
//
if (isset($editdata['showme']) AND $editdata['showme'] == "0") { $showme_checked = "0"; }
else { $showme_checked = "1"; } 

$displayedbox = new XoopsFormCheckBox(_AM_AMHTERR_CAPDSPLY, 'formdata[showme]', $showme_checked); // checked value here whether will be checked?
$displayedbox->addOption(1, _AM_AMHTERR_CAPDSPLYTXT); // checked value here what will be sent in form?
$form->addElement($displayedbox);
unset($displayedbox);


//
// Add/submit button
//
#$button_sub = new XoopsFormButton('', 'but_save', $submitbutton, 'submit');
$button_sub = new XoopsFormButton('', 'but_save', $savebuttoncaption, 'submit');

$tray = new XoopsFormElementTray('');
$tray->addElement($button_sub);

$form->addElement($tray);


//
// hidden bits
//
if ($formaction == "add") {
	$form->addElement(new XoopsFormHidden('op', 'save'));
	//$form->addElement(new XoopsFormHidden('formdata[uid]', $xoopsUser->getVar('uid')));
}
if ($formaction == "edit") {
	$form->addElement(new XoopsFormHidden('op', 'edit'));
	$form->addElement(new XoopsFormHidden('subop', 'save'));
	$form->addElement(new XoopsFormHidden('formdata[id]', $editdata['id']));
	//$form->addElement(new XoopsFormHidden('formdata[uid]', $editdata['uid']));
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

	$sql = ("SELECT errornum FROM " . $xoopsDB->prefix("amhterror_msgs") . " WHERE errornum = '". $code ."' LIMIT 1");
	$result=$xoopsDB->query($sql);
	
	if ($xoopsDB->getRowsNum($result) > 0) {
		return true;
	} else {
		return false;
	}
	
} // end function


//----------------------------------------------------------------------------//
//
function amhterror_adminfooter() {
global $xoopsModule;
    
    echo "<span style=\"font-size: smaller;\">";
    echo "<br />";
    //echo $xoopsModule->getVar('name') . ", version " . round($xoopsModule->getVar('version')/100 , 2) . "<br />";
    echo $xoopsModule->getVar('name') . ", version " . round($xoopsModule->getVar('version')/100 , 2) . "<br />";
    echo "Updates are available from <a href=\"http://support.sirium.net\" target=\"_blank\">http://support.sirium.net</a>";
    echo "</span>";
    
} // end function



?>