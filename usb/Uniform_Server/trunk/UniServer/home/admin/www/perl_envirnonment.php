<?php
/*
#############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: Checks Perl installed and gets the Perl enviroment
#        Changes shebang in cgienv.cgi to match installation
#############################################################################
*/

// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("$us_apanel/includes/.lang").".php";
include_once "includes/header.php";
include_once "includes/secure.php";
include_once "$usf_con_functions";


$ref    = dirname(__FILE__);                     // Path to this file
$ref_f = preg_replace('/\\\/','/', $ref);        // Replace \ with /

if (is_file($usf_perl)){                         // Is Perl installed checks for exe
  $shebang = '#!'.$base.'\usr\bin\perl';         // yes: Need to update shebang
  $sfile = $us_apanel.'/cgienv.cgi';             // in this file cgienv.cgi

  $fh = fopen($sfile, 'r');                      // Open file for read
  $Data = fread($fh, filesize($sfile));          // Read all data into variable
  fclose($fh);                                   // close file handle

  $s_str = '/^#!.*/';                            // Search for shebang
  $Data = preg_replace($s_str, $shebang, $Data); // replace with new shebang

  $fh = fopen($sfile, 'w');                      // Open file for write
  fwrite($fh, $Data);                            // Write to file
  fclose($fh);                                   // close file handle

 virtual("cgienv.cgi");                          // Run Perl script replaces
                                                 // this page with new resource
  exit;                                          // finished     
}                                           

//== Perl not installed                          // no: Inform user
print '<div id="main">';
print '<h2>&#187; CGI Enviroment</h2>';
print '<h3>Cannot Displaying CGI Environment</h3>';
print '<p>Perl not Installed</p>';
print '<p>If you wish to run Perl download the plugin from:</p>';
print '</div>';

include_once "includes/footer.php";
?>
