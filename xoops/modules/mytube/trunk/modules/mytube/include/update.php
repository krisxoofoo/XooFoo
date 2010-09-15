<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: include/update.php
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

if ( !defined( 'XOOPS_ROOT_PATH' ) ) {
 	die( 'XOOPS root path not defined' );
}

global $xoopsDB;

$i=0;
//Make changes to table xoopstube_videos
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " CHANGE forumid vidsource INT(11) NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " CHANGE url vidid TEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " CHANGE urlrating vidrating TINYINT(1) NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " MODIFY description LONGTEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " ADD COLUMN item_tag TEXT NOT NULL default '' AFTER keywords");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " ADD COLUMN picurl TEXT NOT NULL default '' AFTER item_tag");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$ret[$i] = true;
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " MODIFY keywords TEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " MODIFY vidsource INT(11) UNSIGNED NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " MODIFY time VARCHAR(7) NOT NULL default '0:00:00'");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
//$i++;
//$ret[$i] = true;
//$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " ADD COLUMN hq TINYINT(1) NOT NULL default '0' AFTER picurl");
//$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );

//Make changes to table xoopstube_cat
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_cat') . " ADD COLUMN client_id INT(5) NOT NULL default '0' AFTER weight");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_cat') . " ADD COLUMN banner_id INT(5) NOT NULL default '0' AFTER client_id");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );

//Make changes to table xoopstube_mod
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " ADD COLUMN time VARCHAR(5) NOT NULL default '00:00' AFTER vidrating");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " ADD COLUMN keywords TEXT NOT NULL default '' AFTER time");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " ADD COLUMN item_tag TEXT NOT NULL default '' AFTER keywords");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " ADD COLUMN picurl TEXT NOT NULL default '' AFTER item_tag");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " MODIFY description LONGTEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " CHANGE forumid vidsource INT(11) NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " CHANGE url vidid TEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " CHANGE urlrating vidrating TINYINT(1) NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " MODIFY keywords TEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " MODIFY vidsource INT(11) UNSIGNED NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " MODIFY time VARCHAR(7) NOT NULL default '0:00:00'");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
//$i++;
//$ret[$i] = true;
//$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " ADD COLUMN hq TINYINT(1) NOT NULL default '0' AFTER picurl");
//$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );

//Make changes to table xoopstube_indexpage
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_indexpage') . " ADD COLUMN lastvideosyn TINYINT(1) NOT NULL default '0' AFTER indexfooteralign");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_indexpage') . " ADD COLUMN lastvideostotal VARCHAR(5) NOT NULL default '5' AFTER lastvideosyn");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );

// Make changes to xoopstube_broken
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_broken') . " MODIFY confirmed INT(1) UNSIGNED NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_broken') . " MODIFY acknowledged INT(1) NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB -> query( $query[$i] );
?>