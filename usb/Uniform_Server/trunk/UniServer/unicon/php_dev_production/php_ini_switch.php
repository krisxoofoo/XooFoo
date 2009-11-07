<?php
/*
###############################################################################
# Name: php_ini_switch.php
# Developed By: The Uniform Server Development Team
# Modified Last By: Mike Gleaves (Ric)
# Web: http://www.uniformserver.com
# V1.0 1-7-2009
# Comment: Copies either php.ini_production_nano or php.ini_delvelopment_nano
#          to php.ini thus switching between production and development.
###############################################################################
*/
#error_reporting(0); // Disable PHP errors and warnings
                      // Comment to Enable for testing

chdir(dirname(__FILE__)); // Change wd to this files location
include_once "../main/includes/config.inc.php";
include_once "../main/includes/functions.php";

run_location_tracker();   // Have servers moved update configuration accordingly
print "\n";

//=== If no parameters passed use defaults from config.inc.php
if($argc == 2){                                 // Was a parameter passed
 if($argv[1] =='pro'){                          //Switch to production
   print " php.ini changed to production.\n\n";
   copy($usf_php_ini_prod,$usf_php_ini);        // copy file
   set_php_tracker("Production");               // update tracker
 }
 else{                                          //Switch to development
   print " php.ini changed to development.\n\n";
   copy($usf_php_ini_dev,$usf_php_ini);         // copy file
   set_php_tracker("Development");              // update tracker
 } 

}
else{
  exit;
}

exit;
?>