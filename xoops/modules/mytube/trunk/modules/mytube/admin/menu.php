<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/menu.php
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

if ( defined( 'ICMS_VERSION_NAME' ) ) {
	$adminmenu[1]['title'] = _MI_XTUBE_BINDEX;
	$adminmenu[1]['link']  = 'admin/index.php';
	$adminmenu[1]['icon']  = 'images/xtube_iconbig.png';

	$adminmenu[2]['title'] = _MI_XTUBE_MVIDEOS;
	$adminmenu[2]['link']  = 'admin/index.php?op=edit';
	$adminmenu[2]['icon']  = 'images/icon/clapboard.png';

	$adminmenu[3]['title'] = _MI_XTUBE_MCATEGORY;
	$adminmenu[3]['link']  = 'admin/category.php';
	$adminmenu[3]['icon']  = 'images/icon/folder.png';

	$adminmenu[4]['title'] = _MI_XTUBE_INDEXPAGE;
	$adminmenu[4]['link']  = 'admin/indexpage.php';
	$adminmenu[4]['icon']  = 'images/icon/indexpage.png';

	$adminmenu[5]['title'] = _MI_XTUBE_BLOCKADMIN;
	$adminmenu[5]['link']  = 'admin/myblocksadmin.php';
	$adminmenu[5]['icon']  = 'images/icon/blocks.png';
} else {
	$adminmenu[1]['title'] = _MI_XTUBE_BINDEX;
	$adminmenu[1]['link']  = 'admin/index.php';

	$adminmenu[2]['title'] = _MI_XTUBE_MVIDEOS;
	$adminmenu[2]['link']  = 'admin/index.php?op=edit';

	$adminmenu[3]['title'] = _MI_XTUBE_MCATEGORY;
	$adminmenu[3]['link']  = 'admin/category.php';

	$adminmenu[4]['title'] = _MI_XTUBE_INDEXPAGE;
	$adminmenu[4]['link']  = 'admin/indexpage.php';

	$adminmenu[5]['title'] = _MI_XTUBE_BLOCKADMIN;
	$adminmenu[5]['link']  = 'admin/myblocksadmin.php';
	$adminmenu[5]['options']  = 'images/icon/blocks.png';
}
?>