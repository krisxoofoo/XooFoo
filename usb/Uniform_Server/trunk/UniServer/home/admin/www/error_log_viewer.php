<?php
/*
#############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: View Apache's error log.
#############################################################################
*/
// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("$us_apanel/includes/.lang").".php";
include_once "includes/header.php";
include_once "includes/secure.php";
include_once "$usf_con_functions";

$logfile = $us_usr."/local/apache2/logs/error.log";

print "<div id=\"main\">";
  print "<h2>&#187; ".$US['elog-viewer-head1']."</h2>";
  print "<h3>".$US['elog-viewer-head2']."</h3>";
  print "<p>";

if ($filearray=file($logfile)) {             // read file into array
    foreach ($filearray as $txt) {           // scan array for port
       print "-  $txt <br />";
    }
}
else {                                        // failed to read file
 print "Cannot read the file";
}

print "</p>";
print "</div>";
include_once "includes/footer.php";
?>
