<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: class/myts_extended.php
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

class xtubeTextSanitizer extends MyTextSanitizer {
    function xtubeTextSanitizer() {
    } 
    function htmlSpecialCharsStrip( $text ) {
	  return $this -> htmlSpecialChars( $this -> stripSlashesGPC( $text) );
    } 
}
?>