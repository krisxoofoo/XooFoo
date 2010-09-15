<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/admin_header.php
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
 
include '../../../mainfile.php';
include '../../../include/cp_header.php';

include XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar('dirname') . '/include/config.php';
include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar('dirname') . '/include/functions.php';
include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar('dirname') . '/include/video.php';
include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar('dirname') . '/class/xtube_lists.php';
include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule->getVar('dirname') . '/class/myts_extended.php';

include_once XOOPS_ROOT_PATH . '/class/xoopstree.php';
include_once XOOPS_ROOT_PATH . '/class/xoopslists.php';
include_once XOOPS_ROOT_PATH . '/class/xoopsformloader.php';

$xtubemyts = new xtubeTextSanitizer(); // MyTextSanitizer object

$imagearray = array(
	'editimg' => '<img src="../images/icon/film_edit.png" alt="' . _AM_XTUBE_ICO_EDIT . '" title="' . _AM_XTUBE_ICO_EDIT . '" style="vertical-align: middle;">',
    'deleteimg' => '<img src="../images/icon/film_delete.png" alt="' . _AM_XTUBE_ICO_DELETE . '" title="' . _AM_XTUBE_ICO_DELETE . '" style="vertical-align: middle;">',
	'altcat' => '<img src="../images/icon/folder_add.png" alt="' . _AM_XTUBE_ALTCAT_CREATEF . '" title="' . _AM_XTUBE_ALTCAT_CREATEF . '" style="vertical-align: middle;">',
	'online' => '<img src="../images/icon/film_on.png" alt="' . _AM_XTUBE_ICO_ONLINE . '" title="' . _AM_XTUBE_ICO_ONLINE . '" style="vertical-align: middle;">',
	'offline' => '<img src="../images/icon/film_off.png" alt="' . _AM_XTUBE_ICO_OFFLINE . '" title="' . _AM_XTUBE_ICO_OFFLINE . '" style="vertical-align: middle;">',
	'expired' => '<img src="../images/icon/clock_red.png" alt="' . _AM_XTUBE_ICO_EXPIRE . '" title="' . _AM_XTUBE_ICO_EXPIRE . '" style="vertical-align: middle;">',
	'approved' => '<img src="../images/icon/film_on.png" alt="' . _AM_XTUBE_ICO_APPROVED . '" title="' . _AM_XTUBE_ICO_APPROVED . '" style="vertical-align: middle;">',
	'notapproved' => '<img src="../images/icon/film_off.png" alt="' . _AM_XTUBE_ICO_NOTAPPROVED . '" title="' . _AM_XTUBE_ICO_NOTAPPROVED . '" style="vertical-align: middle;">',
	'relatedfaq' => '<img src="../images/icon/link.gif" alt="' . _AM_XTUBE_ICO_VIDEO . '" title="' . _AM_XTUBE_ICO_VIDEO . '" align="absmiddle">',
	'approve' => '<img src="../images/icon/film_approve.png" alt="' . _AM_XTUBE_ICO_APPROVE . '" title="' . _AM_XTUBE_ICO_APPROVE . '" style="vertical-align: middle;">',
	'ignore' => '<img src="../images/icon/film_ignore.png" alt="' . _AM_XTUBE_ICO_IGNORE . '" title="' . _AM_XTUBE_ICO_IGNORE . '" style="vertical-align: middle;">',
	'ack_yes' => '<img src="../images/icon/film_on.png" alt="' . _AM_XTUBE_ICO_ACK . '" title="' . _AM_XTUBE_ICO_ACK . '" style="vertical-align: middle;">',
	'ack_no' => '<img src="../images/icon/film_off.png" alt="' . _AM_XTUBE_ICO_REPORT . '" title="' . _AM_XTUBE_ICO_REPORT . '" style="vertical-align: middle;">',
	'con_yes' => '<img src="../images/icon/film_on.png" alt="' . _AM_XTUBE_ICO_CONFIRM . '" title="' . _AM_XTUBE_ICO_CONFIRM . '" style="vertical-align: middle;">',
	'con_no' => '<img src="../images/icon/film_off.png" alt="' . _AM_XTUBE_ICO_CONBROKEN . '" title="' . _AM_XTUBE_ICO_CONBROKEN . '" style="vertical-align: middle;">',
	'view' => '<img src="../images/icon/view.png" alt="' . _AM_XTUBE_ICO_VIEW . '" title="' . _AM_XTUBE_ICO_VIEW . '" style="vertical-align: middle;">'
	);

?>