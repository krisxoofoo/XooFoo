<?php
/*
####################################################
# Name: The Uniform Server Configuration 1.7
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) 
# Modified Last By: Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
###############################################################################
*/

/* Globals */
// Version
$us_apanel_version = "3.0";
$us_secure         = "1";       //Use secure.php if set to 1

$uniserver = file_get_contents("includes/.version");

$us_devmode = "0";             //Developer Mode = 1
$usip = getenv("REMOTE_ADDR");


/* Path variables - NO BACKSLASH */

// Find base folder 

$ref          = dirname(__FILE__);                // Path to this file
$splitArray   = explode("\\home",$ref);           // Split at folder unicon to
$base         = "$splitArray[0]";                 // find drive letter and any sub-folders 
$base_f       = preg_replace('/\\\/','/', $base); // Replace \ with /
$us_con_main  = "$base_f/unicon/main";         // Main Server control
$us_ip        = getenv("REMOTE_ADDR");             // 

/* Folders */

$us_usr     = "$base_f/usr";
$us_www     = "$base_f/www";
$us_ssl     = "$base_f/ssl";
$us_home    = "$base_f/home";

$us_con          = "$base_f/unicon" ;             // Server control

$us_apanel       = "$us_home/admin/www";
$us_htpasswd     = "$base_f/htpasswd";
$us_apache       = "$us_usr/local/apache2"; 
$us_apache_bin   = "$us_usr/local/apache2/bin"; 
$us_mysql_bin    = "$us_usr/local/mysql/bin"; 
$us_php          = "$us_usr/local/php";

/* Files */

$usf_apanel_passwd    = "$us_htpasswd/home/admin/www/.htpasswd";
$usf_www_passwd       = "$us_htpasswd/www/.htpasswd";
$usf_ssl_passwd       = "$us_htpasswd/ssl/.htpasswd";

$usf_mysql_passwd     = "$us_home/admin/www/mysql_password";

$usf_cert             = "$us_usr/local/apache2/conf/ssl.crt/server.crt";
$usf_cert_ca          = "$us_usr/local/apache2/conf/ssl.crt/ca.crt";
$usf_apache_cnf       = "$us_usr/local/apache2/conf/httpd.conf";
$usf_apache_ssl_cnf   = "$us_usr/local/apache2/conf/ssl.conf";
$usf_apache_pid       = "$us_usr/local/apache2/logs/httpd.pid";


$usf_my_ini           = "$us_usr/local/mysql/my.ini";

$usf_con_functions = "$base_f/unicon/main/includes/functions.php"; // Control functions 

$usf_apache_tracker   = "$us_con_main/apache_tracker.txt";   // Server status value: free, service or program
$usf_mysql_tracker    = "$us_con_main/mysql_tracker.txt";    // Server status value: free, service or program

$usf_pskill           = "$us_con/program/pskill.exe";        // Kill process or check process running
$usf_uniserv          = "$us_con/program/uniserv.exe";       // Run server hidden

$htpasswd    = "$base_f/htpasswd/";
$aphtpasswd  = "$htpasswd/home/admin/www/.htpasswd";
$whtpasswd   = "$htpasswd/www/.htpasswd";
$whtpasswds  = "$htpasswd/ssl/.htpasswd";
$usf_mysql_passwd   = "$us_home/admin/www/mysql_password";
$ssl_file           = "$base_f/usr/local/apache2/conf/ssl.crt/server.crt"; // Created when newcert generated
$my_ini_file        = "$base_f/usr/local/mysql/my.ini";                    // MySQL configuration file
$small_my_ini_file  = "$base_f/usr/local/mysql/small_my.ini";              // MySQL alternative configuration file
$medium_my_ini_file = "$base_f/usr/local/mysql/medium_my.ini";             // MySQL alternative configuration file

$usf_perl      = "$us_usr/bin/perl.exe";              // Check perl installed 

/* Variables */ 
$us_version = file_get_contents("$us_home/admin/www/includes/.version"); // UniServer version


/* Web Variables - NO BACKSLASH */ 
$host            = $_SERVER["HTTP_HOST"];  // Host
$server          = "http://$host";         // Server - DO NOT CHANGE
$server_path     = "$us_www";              // $_SERVER["DOCUMENT_ROOT"]
$server_path_ssl = "$us_ssl";              // $_SERVER["DOCUMENT_ROOT"]


// Admin Panel
$apanel       = "$server/apanel";

/* Service names */

$us_apache_service_name = "ApacheS1";     // Default ApacheS 1 digit incremented for multi-servers
$us_mysql_service_name  = "MySQLS1";      // Default MySQLS 1  digit incremented for multi-servers
?>
