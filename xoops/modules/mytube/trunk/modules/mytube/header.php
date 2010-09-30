<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: header.php
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

include_once '../../mainfile.php';

$mydirname = basename( dirname( __FILE__ ) );
$mydirpath = dirname( __FILE__ );

include XOOPS_ROOT_PATH . '/modules/' . $mydirname . '/include/config.php';
include XOOPS_ROOT_PATH . '/modules/' . $mydirname . '/include/functions.php';
include XOOPS_ROOT_PATH . '/modules/' . $mydirname . '/include/video.php';
include XOOPS_ROOT_PATH . '/modules/' . $mydirname . '/sbookmarks.php';
include_once XOOPS_ROOT_PATH . '/modules/' . $mydirname . '/class/class_thumbnail.php';
include_once XOOPS_ROOT_PATH . '/class/xoopstree.php';
include_once XOOPS_ROOT_PATH . '/class/pagenav.php';

if ( !file_exists( 'language/' . $xoopsConfig['language'] . '/main.php' ) ) {
    include 'language/' . $xoopsConfig['language'] . '/main.php';
} 

include_once XOOPS_ROOT_PATH . '/modules/' . $mydirname . '/class/myts_extended.php';
$xtubemyts = new xtubeTextSanitizer(); // MyTextSanitizer object

//Ajout appel seo
//include 'seo_url.php';

global $xoopModuleConfig;
?>