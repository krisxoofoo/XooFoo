<?php
/*
####################################################
# Name: The Uniform Server Security 0.6
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) 
# Web: http://www.uniformserver.com
####################################################
*/
// Includes
include_once "config.inc.php";

if ($us_secure=="1") {

	if ( !($us_ip == "127.0.0.1")) {

  		echo "
		<div id=\"main\">
		<h2>&#187; ".$US['secure1-head']."</h2>
		<h3>".$US['secure1-sub']."</h3>
		<p>
		".$US['secure1-text-0']." '<b>".$us_ip."</b>'.
		<br />

		".$US['secure1-text-1']." '<b>".$host."</b>'.
		<br />
		<br /> 
		".$US['secure1-text-2']."
		<p>
		</div>"; 

		require "footer.php";

  	exit;
	}
}
?>
