<?php
/*
###############################################################################
# Name: ssl_gen.php
# Developed By: The Uniform Server Development Team
# Modified Last By: Mike Gleaves (Ric)
# Web: http://www.uniformserver.com
# V1.0 27-8-2009
###############################################################################
*/
//error_reporting(0); // Disable PHP errors and warnings
                      // Comment to Enable for testing

chdir(dirname(__FILE__)); // Change wd to this files location
include_once "../main/includes/config.inc.php";
include_once "../main/includes/functions.php";

run_location_tracker();   // Have servers moved if moved
                          // update configuration accordingly
print "\n";

//=== Check for CA control ====================================================
if (is_file($usf_cert_ca)){
  print " Checking for CA ...\n\n";
  print " It looks like you are using your own CA to avoid overwriting your\n";
  print " current server certificate and key this script has terminated.\n\n";
  print " To create a new server certificate and key use the CA script.\n\n";
  exit;
}

//=== Check for Server certificate ============================================
if (is_file($usf_cert)){
  print " Checking for Server certificate ...\n\n";
  print " You have already created a server certificate and key!\n";
  print " Are you sure you want to delete and create new ones?\n\n";

  $user_inut = prompt_user(" Create new server cert and key Yes or No ","Yes");

  if($user_inut != "Yes"){
    print "\n\n";
    exit;
  }
}
//===
print " \n ##############################################################################\n";
print " #                                                                            #\n";
print " # Uniform Server: Certificate and Key generator                              #\n";
print " #                                                                            #\n";
print " #----------------------------------------------------------------------------#\n";
print " # This script creates and installs a new self-signed certificate and key.    #\n";
print " #                                                                            #\n";
print " # 1) CN Common Name. Change this to your full domain name e.g. www.fred.com  #\n";
print " #    If you do not have a domain name use the default by pressing eneter.    #\n";
print " #                                                                            #\n";
print " # 2) To change any of the three defaults edit file:                          #\n";
print " #    unicon/key_cert_gen/ssl_gen.pl                                          #\n";
print " #    search for the edit section and replace accordingly.                    #\n";
print " #                                                                            #\n";
print " #----------------------------------------------------------------------------#\n\n";

chdir('./gen');                         // Set new working folder
$_ENV{'OPENSSL_CONF'} = 'openssl.cnf';  // Set environment variable

// Get user input
//********* Edit defaults *****************************************************

$str1 = &prompt_user("  CN Common Name. Your full domain name ", "localhost");
$str2 = &prompt_user("  OU Organization Unit (eg, section)  ", "Secure demo");
$str3 = &prompt_user("  O  Organization Name (eg, company)    ", "UniServer");
print "\n ";

//********* Do not Edit below this line ***************************************

//== Create a private key and signing request

// Build string 
$str4 = "/O=".$str3."/OU=".$str2."/CN=".$str1;

// Create two parameters dummy used for checking second is used as is
$cmd = getcwd()."\\ssl_gen.bat"." dummy"." \"".$str4."\"";
exec($cmd);

print "Creating a private key and signing request\n\n";

//=== Copying new certificate and key to Server
print " #----------------------------------------------------------------------------#\n";
print " # Copying new certificate and key to Server                                  #\n";
print " # Location:                                                                  #\n";
print " #           Certificate:  usr/local/apache2/conf/ssl.crt/server.crt          #\n";
print " #           Key:          usr/local/apache2/conf/ssl.key/server.key          #\n";
print " #                                                                            #\n";
print " # Certificate Signing Request                                                #\n";
print " # Location:                                                                  #\n";
print " #           Certificate:  unicon/key_cert_gen/server.csr                     #\n";
print " #----------------------------------------------------------------------------#\n";
print " #                                                                            #\n";
print " # You must now restart the servers to enable the new configuration.          #\n";
print " #                                                                            #\n";
print " ##############################################################################\n\n";

//== Enable SSL in Apache's config file \usr\local\apache2\conf\httpd.conf
 $s_str = "#LoadModule ssl_module modules/mod_ssl.so";      // search for
 $s_str = preg_quote($s_str,'/');                           // Convert to regex format
 $s_str = '/'.$s_str.'/';                                   // Create regex pattern
 $replace_str = "LoadModule ssl_module modules/mod_ssl.so"; // replace with

 file_search_replace($usf_apache_cnf,$s_str,$replace_str);  // Update Apache cnf

exit;
?>