<?php
// $Id$

// 2008-03-21 JAYJAY
// xoopsvideo plugin based on mylinks plugin

// 2005-10-01 K.OHWADA
// category, counter

// 2005-03-28 K.OHWADA
// bug fix: forget to declare $myts

// 2004/08/20 K.OHWADA
// atom feed

//================================================================
// What's New Module
// get articles from module
// for xoopsvideo 1.01 <http://www.xoops.org/>
// 2008.03.21 JAYJAY
//================================================================

function xoopstube_new($limit=0, $offset=0)
{
	global $xoopsDB;

// bug fix: forget to declare $myts
	$myts =& MyTextSanitizer::getInstance();

	$sql = "SELECT l.lid, l.title as ltitle, l.date, l.cid, l.hits, l.description, c.title as ctitle FROM ".$xoopsDB->prefix("xoopstube_videos")." l, ".$xoopsDB->prefix("xoopstube_cat")." c WHERE l.cid=c.cid AND l.status>0 ORDER BY l.date DESC";

	$URL_MOD = XOOPS_URL."/modules/xoopstube";

	$result = $xoopsDB->query($sql,$limit,$offset);

	$i = 0;
	$ret = array();

 	while($row = $xoopsDB->fetchArray($result))
 	{
		$ret[$i]['link']     = $URL_MOD."/singlevideo.php?lid=".$row['lid'];
		$ret[$i]['cat_link'] = $URL_MOD."/viewcat.php?cid=".$row['cid'];

		$ret[$i]['title'] = $row['ltitle'];
		$ret[$i]['time']  = $row['date'];
//		$ret[$i]['description'] = $row['description'];

// atom feed
		$ret[$i]['id'] = $row['lid'];
		$ret[$i]['description'] = $myts->makeTareaData4Show( $row['description'], 0 );	//no html

// category
		$ret[$i]['cat_name'] = $row['ctitle'];

// counter
		$ret[$i]['hits'] = $row['hits'];

		$i++;
	}

	return $ret;
}

function xoopstube_num()
{
	global $xoopsDB;

	$sql = "SELECT count(*) FROM ".$xoopsDB->prefix("xoopstube_videos")." WHERE status>0 ORDER BY lid";
	$array = $xoopsDB->fetchRow( $xoopsDB->query($sql) );
	$num   = $array[0];
	if (empty($num)) $num = 0;

	return $num;
}

function xoopstube_data($limit=0, $offset=0)
{
	global $xoopsDB;

	$sql = "SELECT lid, title, date FROM ".$xoopsDB->prefix("xoopstube_videos")." WHERE status>0 ORDER BY lid";
	$result = $xoopsDB->query($sql,$limit,$offset);

	$i = 0;
	$ret = array();

 	while($row = $xoopsDB->fetchArray($result))
 	{
	    $id = $row['lid'];
	    $ret[$i]['id']   = $id;
		$ret[$i]['link'] = XOOPS_URL."/modules/xoopstube/singlelink.php?lid=".$id."";
		$ret[$i]['title'] = $row['title'];
		$ret[$i]['time']  = $row['date'];
		$i++;
	}

	return $ret;
}
?>
