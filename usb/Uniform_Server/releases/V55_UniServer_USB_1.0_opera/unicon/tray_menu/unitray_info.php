<?php
/*
###############################################################################
# Name: unitray_info.php
# Developed By: The Uniform Server Development Team
# Modified Last By: Kris
# Unitray Support file
# Displays server information. Ports read from configuration files
# V1.0 17-12-2009
# 17-12-2009 Updated for Opera USB
###############################################################################
*/
//error_reporting(0); // Disable PHP errors and warnings
                      // Comment to Enable for testing

chdir(dirname(__FILE__)); // Change wd to this files location
include_once "../main/includes/config.inc.php";
include_once "../main/includes/functions.php";

run_location_tracker();  // Have servers moved if moved update configuration
print"\n";

//=== If no parameters passed use defaults from config.inc.php
if($argc == 2){                       // Was a parameter passed
 $information = $argv[1] ;            // yes: 
}
else{
 exit; // no: Give up
}

$mysql_port  = get_mysql_port();
$apache_port = get_apache_port();
$ssl_port    = get_apache_ssl_port();

//=== Display Admin Panel in browser ==========================================
if($information == 1){
 start_opera("http://localhost:$apache_port/apanel/"); // display index page 
 exit;
}

//=== Display phpMyAdmin in browser ==========================================
if($information == 2){
 start_opera("http://localhost:$apache_port/apanel/phpmyadmin/"); // display index page 
 exit;
}

//=== Display WWW Root in browser ==============================================
if($information == 3){
 start_opera("http://localhost:$apache_port/"); // display index page 
 exit;
}

//=== Display SSL Root in browser ==============================================
if($information == 4){
 start_opera("https://localhost:$ssl_port/"); // display index page 
 exit;
}

//=== Display Apache Server Information in browser ============================
if($information == 5){
 start_opera("http://localhost:$apache_port/server-info"); // display index page 
 exec($command,$dummy,$return);                           // run command 
 exit;
}

//=== Display Apache Server Status in browser =================================
if($information == 6){
 start_opera("start http://localhost:$apache_port/server-status"); // display index page 
 exec($command,$dummy,$return);                           // run command 
 exit;
}

//=== Display PHP Info in browser =================================
if($information == 7){
 start_opera("http://localhost:$apache_port/apanel/phpinfo.php"); // display index page 
 exec($command,$dummy,$return);                           // run command 
 exit;
}

exit;

?>