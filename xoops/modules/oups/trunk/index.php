<?php
if (file_exists("mainfile.php")) {
include("mainfile.php");
} elseif (file_exists("../mainfile.php")) {
include("../mainfile.php");
} else { 
include("../../mainfile.php");
}
if ($_GET['num_error'] == "302") {
	$xoopsOption["template_main"] = "302.html";
}
elseif ($_GET['num_error'] == "400") {
	$xoopsOption["template_main"] = "400.html";
}
elseif ($_GET['num_error'] == "401") {
	$xoopsOption["template_main"] = "401.html";
}
elseif ($_GET['num_error'] == "403") {
	$xoopsOption["template_main"] = "403.html";
}
elseif ($_GET['num_error'] == "404") {
	$xoopsOption["template_main"] = "404.html";
}
elseif ($_GET['num_error'] == "405") {
	$xoopsOption["template_main"] = "405.html";
}
elseif ($_GET['num_error'] == "408") {
	$xoopsOption["template_main"] = "408.html";
}
elseif ($_GET['num_error'] == "409") {
	$xoopsOption["template_main"] = "409.html";
}
elseif ($_GET['num_error'] == "500") {
	$xoopsOption["template_main"] = "500.html";
}
elseif ($_GET['num_error'] == "503") {
	$xoopsOption["template_main"] = "503.html";
}
include(XOOPS_ROOT_PATH."/header.php");
global $xoTheme; 
	//$xoTheme->addScript(XOOPS_URL . '/browse.php?Frameworks/jquery/jquery.js');
	//$xoTheme->addScript('modules/oups/js/script.js');
include(XOOPS_ROOT_PATH."/footer.php");
?>
