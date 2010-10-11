<?php
if (file_exists("mainfile.php")) {
include("mainfile.php");
} elseif (file_exists("../mainfile.php")) {
include("../mainfile.php");
} else { 
include("../../mainfile.php");
}
$module_dirname = basename( dirname( __FILE__ ) ) ;

if ($_GET["num_error"] == "302") {
	$xoopsOption["template_main"] = $module_dirname . "_302.html";
}
elseif ($_GET["num_error"] == "400") {
	$xoopsOption["template_main"] =  $module_dirname . "_400.html";
}
elseif ($_GET["num_error"] == "401") {
	$xoopsOption["template_main"] =  $module_dirname . "_401.html";
}
elseif ($_GET["num_error"] == "403") {
	$xoopsOption["template_main"] =  $module_dirname . "_403.html";
}
elseif ($_GET["num_error"] == "404") {
	$xoopsOption["template_main"] =  $module_dirname . "_404.html";
}
elseif ($_GET["num_error"] == "405") {
	$xoopsOption["template_main"] =  $module_dirname . "_405.html";
}
elseif ($_GET["num_error"] == "408") {
	$xoopsOption["template_main"] =  $module_dirname . "_408.html";
}
elseif ($_GET["num_error"] == "409") {
	$xoopsOption["template_main"] =  $module_dirname . "_409.html";
}
include(XOOPS_ROOT_PATH."/header.php");
global $xoTheme; 
	//$xoTheme->addScript(XOOPS_URL . "/browse.php?Frameworks/jquery/jquery.js");
	//$xoTheme->addScript("modules/oups/js/script.js");
include(XOOPS_ROOT_PATH."/footer.php");
?>
