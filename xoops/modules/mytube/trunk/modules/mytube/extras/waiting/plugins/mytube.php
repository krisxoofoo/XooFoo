<?php
/*************************************************************************/
# Waiting Contents Extensible                                             #
# Plugin for module MyTube                                                #
#                                                                         #
# Author: McDonald                                                        #
#                                                                         #
#                                                                         #
# Last modified on 19.09.2008                                             #
/*************************************************************************/
function b_waiting_mytube() {
	$xoopsDB =& Database::getInstance();
	$ret = array() ;

	// mytube waiting
	$block = array();
	$result = $xoopsDB -> query("SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE status=0");
	if ( $result ) {
		$block['adminlink'] = XOOPS_URL."/modules/mytube/admin/newvideos.php";
		list($block['pendingnum']) = $xoopsDB -> fetchRow($result);
		$block['lang_linkname'] = _PI_WAITING_WAITINGS ;
	}
	$ret[] = $block ;

	// mytube broken
	$block = array();
	$result = $xoopsDB -> query("SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'xoopstube_broken' ));
	if ( $result ) {
		$block['adminlink'] = XOOPS_URL."/modules/mytube/admin/brokenvideo.php";
		list($block['pendingnum']) = $xoopsDB -> fetchRow($result);
		$block['lang_linkname'] = _PI_WAITING_BROKENS ;
	}
	$ret[] = $block ;

	// mytube modreq
	$block = array();
	$result = $xoopsDB -> query("SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'xoopstube_mod' ));
	if ( $result ) {
		$block['adminlink'] = XOOPS_URL."/modules/mytube/admin/modifications.php";
		list($block['pendingnum']) = $xoopsDB -> fetchRow($result);
		$block['lang_linkname'] = _PI_WAITING_MODREQS ;
	}
	$ret[] = $block ;

	return $ret;
}

?>