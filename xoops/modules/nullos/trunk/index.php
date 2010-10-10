<?php
if (file_exists("mainfile.php")) {
include("mainfile.php");
} elseif (file_exists("../mainfile.php")) {
include("../mainfile.php");
} else { 
include("../../mainfile.php");
}
if ($_GET['num_error'] == "302") {
	$xoopsOption["template_main"] = "nullos_302.html";
}
elseif ($_GET['num_error'] == "400") {
	$xoopsOption["template_main"] = "nullos_400.html";
}
elseif ($_GET['num_error'] == "401") {
	$xoopsOption["template_main"] = "nullos_401.html";
}
elseif ($_GET['num_error'] == "403") {
	$xoopsOption["template_main"] = "nullos_403.html";
}
elseif ($_GET['num_error'] == "404") {
	$xoopsOption["template_main"] = "nullos_404.html";
}
elseif ($_GET['num_error'] == "405") {
	$xoopsOption["template_main"] = "nullos_405.html";
}
elseif ($_GET['num_error'] == "408") {
	$xoopsOption["template_main"] = "nullos_408.html";
}
elseif ($_GET['num_error'] == "409") {
	$xoopsOption["template_main"] = "nullos_409.html";
}
include(XOOPS_ROOT_PATH."/header.php");
global $xoTheme; 
	//$xoTheme->addScript(XOOPS_URL . '/browse.php?Frameworks/jquery/jquery.js');
	//$xoTheme->addScript('modules/oups/js/script.js');
include(XOOPS_ROOT_PATH."/footer.php");
?>
