<?php
if (file_exists("mainfile.php")) {
include("mainfile.php");
} elseif (file_exists("../mainfile.php")) {
include("../mainfile.php");
} else { 
include("../../mainfile.php");
}
$xoopsOption["template_main"] = "401.html";
include(XOOPS_ROOT_PATH."/header.php");
global $xoTheme; 
	$xoTheme->addStyleSheet('modules/oups/css/401.css');
	//$xoTheme->addScript(XOOPS_URL . '/browse.php?Frameworks/jquery/jquery.js');
	//$xoTheme->addScript('modules/oups/js/script.js');
include(XOOPS_ROOT_PATH."/footer.php");
?>
