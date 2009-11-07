<?php
/*
####################################################
# Name: The Uniform Server Admin Panel 2.0
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) 
# Web: http://www.uniformserver.com
####################################################
*/
include_once "includes/config.inc.php";

$fp=fopen("includes/.lang","w");
fwrite($fp,$_POST["language"]);
fclose($fp);

header("Location: $server/apanel/redirect2.html");

?>
