<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: include/config.php
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
 
// WARNING: ONCE SET DO NOT CHANGE! Improper use will render this module useless and unworkable.
// Only Change if you know what you are doing.
$mydirname = basename( dirname(  dirname( __FILE__ ) ) );

if ( !defined( 'xoopstube_broken' ) ) define( 'xoopstube_broken', 'xoopstube_broken' );
if ( !defined( 'xoopstube_cat' ) ) define( 'xoopstube_cat', 'xoopstube_cat' );
if ( !defined( 'xoopstube_videos' ) ) define( 'xoopstube_videos', 'xoopstube_videos' );
if ( !defined( 'xoopstube_mod' ) ) define( 'xoopstube_mod', 'xoopstube_mod' );
if ( !defined( 'xoopstube_votedata' ) ) define( 'xoopstube_votedata', 'xoopstube_votedata' );
if ( !defined( 'xoopstube_indexpage' ) ) define( 'xoopstube_indexpage', 'xoopstube_indexpage' );
if ( !defined( 'xoopstube_altcat' ) ) define( 'xoopstube_altcat', 'xoopstube_altcat' );
if ( !defined( 'xoopstube_url' ) ) define( 'xoopstube_url', XOOPS_URL . '/modules/' . $mydirname . '/' );

?>