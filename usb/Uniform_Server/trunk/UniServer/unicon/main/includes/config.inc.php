<?php
/*
###############################################################################
# Name: The Uniform Server Control Configuration 1.0
# Developed By: The Uniform Server Development Team
# Modified Last By: Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
###############################################################################
*/

/*
###############################################################################
# User Variables:
# $server_standard - Controls server when run as a standard program 
# $server_service  - Controls server when run as a service 
#
# $server_standard - Options are binary coded as follows:
#                    Bit function
# Apache         1   1 - Run Apache server 0 - no change ignore
# Mysql          2   1 - Run MySQL  server 0 - no change ignore
# Index page     4   1 - Start Index page  0 - no change ignore
# MySQL Console  8   1 - Display console   0 - no change ignore
# Cron          16   1 - Run cron          0 - no change ignore
#
# $server_service  - Options are binary coded as follows:
#                    Bit function
# Apache         1   1 - Run Apache as a service 0 - no change ignore
# Mysql          2   1 - Run MySQL  as a service 0 - no change ignore
# Index page     4   1 - Start Index page        0 - no change ignore
#
# Defaults: 
# $server_standard = 7;
# $server_service  = 7;
###############################################################################
*/

  $server_standard = 7;
  $server_service  = 7;

/* ----- END User Variables service ------------------------------------------- */


/* Path variables - NO BACKSLASH */
// All paths are absolute referenced to udrive==disk-root

$splitArray   = explode("\\unicon",dirname(__FILE__)); // Split at folder unicon to
$base         = "$splitArray[0]";                      // find drive letter and any sub-folders 
$base_f       = preg_replace('/\\\/','/', $base);      // Replace \ with /
$Disk         = substr($base, 0, 2);                   // Disk eg C:
$Drive_letter = substr($base, 0, 1);                   // Disk eg C

/* Folders */

$us_usr                = "$base_f/usr";
$us_www                = "$base_f/www";
$us_ssl                = "$base_f/ssl";
$us_home               = "$base_f/home";
$us_msmtp              = "$base_f/msmtp";
$us_cgi_bin            = "$base_f/cgi-bin";
$us_plugins            = "$base_f/plugins";
$us_con                = "$base_f/unicon" ;             // Server control
$us_con_main           = "$base_f/unicon/main";         // Main Server control
$us_con_tray_menu      = "$base_f/unicon/tray_menu";    // UniTray menu folder

$us_apanel             = "$us_home/admin/www";
$us_htpasswd           = "$base_f/htpasswd";
$us_apache             = "$us_usr/local/apache2"; 
$us_apache_bin         = "$us_usr/local/apache2/bin"; 
$us_mysql_bin          = "$us_usr/local/mysql/bin"; 
$us_php                = "$us_usr/local/php"; 


/* Files */

$usf_apanel_passwd    = "$us_htpasswd/home/admin/www/.htpasswd";
$usf_www_passwd       = "$us_htpasswd/www/.htpasswd";
$usf_ssl_passwd       = "$us_htpasswd/ssl/.htpasswd";

$usf_mysql_passwd     = "$us_home/admin/www/mysql_password";
$usf_redirect         = "$us_home/admin/www/redirect.html";                 // Open index page in browser
$usf_redirect2        = "$us_home/admin/www/redirect2.html";                // Open index page in browser
$usf_msmtp            = "$us_msmtp/msmtprc.ini";                            // PHP mail config

$usf_cert             = "$us_usr/local/apache2/conf/ssl.crt/server.crt";
$usf_cert_ca          = "$us_usr/local/apache2/conf/ssl.crt/ca.crt";
$usf_apache_cnf       = "$us_usr/local/apache2/conf/httpd.conf";
$usf_apache_ssl_cnf   = "$us_usr/local/apache2/conf/ssl.conf";
$usf_apache_pid       = "$us_usr/local/apache2/logs/httpd.pid";

$usf_my_ini           = "$us_usr/local/mysql/my.ini";         // MySQL configuration file
$usf_small_my_ini     = "$us_usr/local/mysql/small_my.ini";   // MySQL alternative configuration file
$usf_medium_my_ini    = "$us_usr/local/mysql/medium_my.ini";  // MySQL alternative configuration file

$usf_mysql_pid        = "$us_usr/local/mysql/data/mysql.pid";

$usf_php_ini          = "$us_php/php.ini";
$usf_php_ini_prod     = "$us_php/php.ini_production_nano";
$usf_php_ini_dev      = "$us_php/php.ini_delvelopment_nano";

$usf_pskill           = "$us_con/program/pskill.exe";        // Kill process or check process running
$usf_uniserv          = "$us_con/program/uniserv.exe";       // Run server hidden
$usf_apache_tracker   = "$us_con_main/apache_tracker.txt";   // Server status value: free, service or program
$usf_mysql_tracker    = "$us_con_main/mysql_tracker.txt";    // Server status value: free, service or program
$usf_location_tracker = "$us_con_main/location_tracker.txt"; // Current server ocation top-level folder
$usf_php_tracker      = "$us_con_main/php_ini_tracker.txt";  // Current php.ini Production or Development
$usf_cron_tracker     = "$us_con_main/cron_tracker.txt";     // Current status of cron run, stop 


$usf_perl             = "$us_usr/bin/perl.exe";              // Check perl installed 
         

/* Variables */ 
$us_version = file_get_contents("$us_home/admin/www/includes/.version"); // UniServer version
$ip_current = "";                         // Current IP address as seen from Internet

/* Web Variables - NO BACKSLASH */ 

$host            = @$_SERVER["HTTP_HOST"]; // Host
$server          = "http://$host";         // Server - DO NOT CHANGE
$server_path     = "$us_www";              // $_SERVER["DOCUMENT_ROOT"]
$server_path_ssl = "$us_ssl";              // $_SERVER["DOCUMENT_ROOT"]

/* Admin Panel */
$apanel = "$server/apanel";

/* Service names */

$us_apache_service_name = "ApacheS1";     // Default ApacheS 1 digit incremented for multi-servers
$us_mysql_service_name  = "MySQLS1";      // Default MySQLS 1  digit incremented for multi-servers
?>
