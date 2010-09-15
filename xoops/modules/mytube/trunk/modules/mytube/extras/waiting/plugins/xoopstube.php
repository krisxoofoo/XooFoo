<?php
/*************************************************************************/
# Waiting Contents Extensible                                            #
# Plugin for module XoopsTube                                            #
#                                                                        #
# Author                                                                 #
# McDonald                                                               #
#                                                                        #
# Last modified on 03.03.2007                                            #
/*************************************************************************/
function b_waiting_xoopstube()
{
	$xoopsDB =& Database::getInstance();
	$ret = array() ;

	// xoopstube waiting
	$block = array();
	$result = $xoopsDB->query("SELECT COUNT(*) FROM ".$xoopsDB->prefix("xoopstube_videos")." WHERE status=0");
	if ( $result ) {
		$block['adminlink'] = XOOPS_URL."/modules/xoopstube/admin/newvideos.php";
		list($block['pendingnum']) = $xoopsDB->fetchRow($result);
		$block['lang_linkname'] = _PI_WAITING_WAITINGS ;
	}
	$ret[] = $block ;

	// xoopstube broken
	$block = array();
	$result = $xoopsDB->query("SELECT COUNT(*) FROM ".$xoopsDB->prefix("xoopstube_broken"));
	if ( $result ) {
		$block['adminlink'] = XOOPS_URL."/modules/xoopstube/admin/brokenvideo.php";
		list($block['pendingnum']) = $xoopsDB->fetchRow($result);
		$block['lang_linkname'] = _PI_WAITING_BROKENS ;
	}
	$ret[] = $block ;

	// xoopstube modreq
	$block = array();
	$result = $xoopsDB->query("SELECT COUNT(*) FROM ".$xoopsDB->prefix("xoopstube_mod"));
	if ( $result ) {
		$block['adminlink'] = XOOPS_URL."/modules/xoopstube/admin/modifications.php";
		list($block['pendingnum']) = $xoopsDB->fetchRow($result);
		$block['lang_linkname'] = _PI_WAITING_MODREQS ;
	}
	$ret[] = $block ;

	return $ret;
}


?>