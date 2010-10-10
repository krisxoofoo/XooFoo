<?php
/**
 * Oups Module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright        The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         Oups Module
 * @since		2.5.0
 * @author            Andrew Mills <ajmills@sirius.net>
 * @version            $Id $
**/

// includes
include_once ("header.inc.php");
//
//----------------------------------------------------------------------------//
//
xoops_cp_header();
oups_adminmenu(0, _AM_OUPS_INDEX);
echo "<div style='max-width:800px; margin: 0 auto;'><h1 class='center'>" . _AM_OUPS_INTRO . "</h1>";
echo "<p style='line-height: 30px;'>"._AM_OUPS_INFO."</p>";
echo "<p style='line-height: 30px;'>"._AM_OUPS_FILECHK."</p>";
if(file_exists(XOOPS_ROOT_PATH . "/.htaccess")) {
	echo  XOOPS_ROOT_PATH ."/.htaccess " . _AM_OUPS_FILEEXISTS;
} else {
	echo  XOOPS_ROOT_PATH ."/.htaccess " . _AM_OUPS_FILENOEXIST;
}
	$sql = ("SELECT * FROM " . $xoopsDB->prefix("oups_msgs") . " WHERE showme = '1' ORDER BY errornum ASC");
	$result=$xoopsDB->query($sql);
	echo "<br /><p style='line-height: 30px;' class=\"red\">";
	echo _AM_OUPS_ADDCODE;
	echo "</p>";
	echo "<p class='xoopsQuote' style='line-height: 20px; padding-left: 10px;'>";
	if ($xoopsDB->getRowsNum($result) > 0) {
		while($myrow = $xoopsDB->fetchArray($result)) {
			$id			= $myrow['id'];
			$errornum	= $myrow['errornum'];
			echo "ErrorDocument " . $errornum . " /modules/" . $xoopsModule->getVar('dirname') . "/index.php?err=" . $errornum . "<br />\n";
			//echo "ErrorDocument " . $errornum . "&#32;" .XOOPS_URL."/modules/" . $xoopsModule->getVar('dirname') . "/index.php?err=" . $errornum . "<br />\n";
		}
	} else {
		echo _AM_OUPS_NOCODE;
	}
	echo "ErrorDocument 500 /modules/" . $xoopsModule->getVar('dirname') . "/templates/oups_500.html<br />\n";
	echo "ErrorDocument 503 /modules/" . $xoopsModule->getVar('dirname') . "/templates/oups_503.html<br />\n";
	echo "</p><p><br />"._AM_OUPS_HTACCESSWARNING."</p></div>";
oups_adminfooter();
xoops_cp_footer();
?>