<?php
/*
####################################################
# Name: The Uniform Server Admin Panel 2.0
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) 
# Web: http://www.uniformserver.com
####################################################
*/

// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("$us_apanel/includes/.lang").".php";  
include_once "includes/header.php";
?>

<div id="navbar">
	<?php include_once "$us_apanel/includes/basic.inc"; ?>
	<?php include_once "$us_apanel/includes/server.inc"; ?>
	<?php include_once "$us_apanel/includes/config.inc"; ?>
	<?php include_once "$us_apanel/includes/tool.inc"; ?>
	<?php include_once "$us_apanel/includes/plugin.inc"; ?>
	<?php include_once "$us_apanel/includes/python.inc"; ?>
	<?php include_once "$us_apanel/includes/java.inc"; ?>
	<?php include_once "$us_apanel/includes/misc.inc"; ?>
	<?php include_once "$us_apanel/includes/doc.inc"; ?>
	<?php include_once "$us_apanel/includes/lang.inc"; ?>
</div>

</body>
</html>

