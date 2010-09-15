<?php
/**
 * -----------------------------------------------------------------------------
 * About this sitemap plug-in : xoopstube for sitemap
 *
 * Name					: 	xoopstube.php
 * Author				: 	DuGris (http://www.dugris.info), Modifications by McDonald for XoopsTube
 *
 * Necessary modules	:
 *								sitemap 1.30 (http://xoops.peak.ne.jp/)
 *								xoopstube 1.0.1 (http://members.lycos.nl/mcdonaldsstore/)
 *
 * -----------------------------------------------------------------------------
**/

function b_sitemap_xoopstube(){
	global $sitemap_configs;
	global $xoopsDB, $xoopsUser, $xoopsModule;
	$myts = &MyTextSanitizer::getInstance();

	include_once XOOPS_ROOT_PATH . '/class/xoopstree.php';
	$mytree = new XoopsTree( $xoopsDB -> prefix( 'xoopstube_cat' ), 'cid', 'pid' );

	$MyModule = &xoops_gethandler('module');
	$xoopstubeModule = $MyModule->getByDirname('xoopstube');

	$MyConfig = &xoops_gethandler('config');
	$xoopstubeConfig = $MyConfig->getConfigsByCat(0, $xoopstubeModule->getVar('mid'));

	$groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
	$gperm_handler = &xoops_gethandler( 'groupperm' );

	$sitemap = array();
	$sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'xoopstube_cat' ) . ' WHERE pid = 0 ORDER BY weight';
	$result = $xoopsDB->queryF( $sql );
	while ( $myrow = $xoopsDB->fetchArray( $result ) ) {
		if ( $gperm_handler -> checkRight( 'XTubeCatPerm', $myrow['cid'], $groups, $xoopstubeModule->getVar('mid') ) ) {
        	$i = $myrow['cid'];
			$sitemap['parent'][$i]['id'] = $myrow['cid'];
			$sitemap['parent'][$i]['title'] = $myts->makeTboxData4Show( $myrow['title'] );
			$sitemap['parent'][$i]['url'] = "viewcat.php?cid=" . $myrow['cid'];
			if ( $sitemap_configs["show_subcategoris"] ) {
				$arr = array();
				$arr = $mytree->getFirstChild( $myrow['cid'], "title" );
				foreach( $arr as $key =>$ele ) {
					if ( $gperm_handler -> checkRight( 'XTubeCatPerm', $ele['cid'], $groups, $xoopstubeModule->getVar('mid') ) ) {
						$j = $key;
						$sitemap['parent'][$i]['child'][$j]['id'] = $ele['cid'];
						$sitemap['parent'][$i]['child'][$j]['title'] = $myts->makeTboxData4Show( $ele['title'] );
						$sitemap['parent'][$i]['child'][$j]['image'] = 2;
						$sitemap['parent'][$i]['child'][$j]['url'] = "viewcat.php?cid=" . $ele['cid'];
					}
				}
			}
		}
	}
	return $sitemap;
}
?>