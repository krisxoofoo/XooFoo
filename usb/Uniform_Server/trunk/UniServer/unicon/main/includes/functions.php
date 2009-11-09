<?php
/*
#############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: Common functions
#############################################################################
# === Apache ===
# get_apache_port()           - Returns port number
# get_apache_ssl_port()       - Returns port number
# get_apache_exe()            - Returns Apache executable file name
# start_apache()              - Start Apache server
# stop_apache()               - Stop Apache server set tracker to free
# stop_apache_service()       - Stops Apache service
# uninstall_apache_service()  - Uninstalls Apache service, sets tracker to free 
# apache_running()            - Check Apache server returns true if running
# ssl_enabled()               - Is Apache SSL enableds true = enabled false = not enabled
#
# === MySQL ==
# get_mysql_port()            - Returns port number
# get_mysql_exe()             - Returns MySQL executable file name
# get_mysql_password()        - Returns MySQL password
# start_mysql()               - Starts MySQL server sets tracker to program
# stop_mysql()                - Stop MySQL server set tracker to free
# kill_mysql()                - This is used only in password recovery. Does not use passord. 
# start_mysql_service()       - Starts MySQL service
# stop_mysql_service()        - Stops MySQL service
# install_mysql_service()     - Install MySQL service, sets tracker to service
# uninstall_mysql_service()   - Uninstalls MySQL service, sets tracker to free 
# mysql_running()             - Check MySQL server returns true if running
#
# === Trackers ===
# set_apache_tracker($value)  - Values free, program or service
# get_apache_tracker()        - Returns free, program or service (running status)
# set_mysql_tracker($value)   - Values free, program or service
# get_mysql_tracker()         - Returns free, program or service (running status)
# set_php($value)             - Values Production or Development
# get_php_tracker()           - Returns Production or Development
# get_mysql_tracker()         - Returns free, program or service (running status)
# set_php($value)             - Values Production or Development
# get_php_tracker()           - Returns Production or Development
#
# set_cron_tracker()          - Values run, stop 
# get_cron_tracker()          - Returns run or stop
#
# === UniTray === 
# get_unitray_exe()           - Returns UniTray executable file name
# get_unitray_ini()           - Returns UniTray ini file name
# get_unitray_id()            - Returns Unitray ID
# start_unitray()             - Run Unitray
# stop_unitray()              - Stop UniTray
# unitray_running()           - Check UniTray returns true if running
#
# === General === 
# perl_installed()               - Return true if perl installed
# apache_syntax_check()          - Returns true no errors or false errors found 
# recursive_dir_delete($dirname) - Deletes a compete directory tree
# recursive_copy($src,$dst)      - Copy a complete directory tree
#
# recursive_search_replace($start_dir,$file_type,$search_str,$replace_str)
# file_search_replace($file,$search_str,$replace_str)
# port_in_use($port)   - Check a port returns true if in use
#
# === CLI Specificate === 
# prompt_user($promptStr,$defaultVal) - Default valuse is optional
#
# === Live server test === 
# get_ip_current() - Gets server IP address as seen from the Internet
#                    Uses DtDNS page to obtain IP
# test_access()    - Uses the above IP address to get test page from server
#                    C:\dtdns_test\UniServer\home\access\www\index.html
#
# my_ini_set($file,$block,$option,$optionvalue) - Set a value in .ini file 
# my_ini_get($file,$block,$option)              - Get a value from .ini file 
#----------------------------------------------------------------------------
*/

# === Apache ===

//=== Get Apache port =========================================================
function get_apache_port(){
 global $usf_apache_cnf;
  if ($filearray=file($usf_apache_cnf)) {    // read file into array
    foreach ($filearray as $txt) {           // scan array for port
                                             // check $text line save $matches 
     if(preg_match("/^Listen\s+(\d+)/", $txt,$matches)){  
       $apache_port =  $matches[1];          // match found save port number 
       break;                                // give up nothing else to do
     }
    }
  }
  else {                                      // failed to read file
    echo "Cannot read the file";
  }
  return $apache_port;
}
//===================================================== END Get Apache port ===

//=== Get Apache SSL port =====================================================
function get_apache_ssl_port(){
 global $usf_apache_ssl_cnf;
  if ($filearray=file($usf_apache_ssl_cnf)) {// read file into array
    foreach ($filearray as $txt) {           // scan array for port
                                             // check $text line save $matches 
     if(preg_match("/^Listen\s+(\d+)/", $txt,$matches)){  
       $apache_port =  $matches[1];          // match found save port number 
       break;                                // give up nothing else to do
     }
    }
  }
  else {                                      // failed to read file
    echo "Cannot read the file";
  }
  return $apache_port;
}
//================================================= END Get Apache SSL port ===

//=== Get Apache executable ===================================================
// Multi-servers increment digit  
function get_apache_exe(){
  global $us_apache_bin;                       // Apache folder
  $dir_handle=opendir($us_apache_bin);         // Get handle to Apache bin 
  while($file=readdir($dir_handle)){           // Loop through folder names 
    if(preg_match("/^Apache.+exe/", $file)){   // Search for executable name 
     $Apache_exe=$file;                        // Match found save
     break;                                    // Noting else to do give up 
    }
  }
  closedir($dir_handle);
  return $Apache_exe;                          // Return executable Apache*.exe
}
//=============================================== END Get Apache executable ===

//=== Start Apache ===========================================================
function start_apache(){
  // Global variables for paths and files
  global $us_apache_bin; global $usf_uniserv;
  global $usf_apache_cnf; global $us_apache;
  $Apache_exe = get_apache_exe();

  // Build command line
  $cmd1 = "start ";
  $cmd2 = "$usf_uniserv \"";
  $cmd3 = "$us_apache_bin/$Apache_exe -f ";
  $cmd4 = "$usf_apache_cnf -d ";
  $cmd5 = "$us_apache\"";
  $cmd = $cmd1.$cmd2.$cmd3.$cmd4.$cmd5;

  exec($cmd,$dummy,$return);         // Run Apache server

  set_apache_tracker('program');     // Set tracker to 'program' Prevents 
                                     // a user installing as a service. 

  $safety_timer = 0;                  // Set timer
  while(!apache_running()){           // Check Apache started
    if($safety_timer == 40){          // Has safety time been reached
      break;                             
    }
    $safety_timer = $safety_timer +1; // update timer
    usleep(500000);                   // delay 0.5 sec and repeat
  }
}
//======================================================= END Start Apache ===

//=== Stop Apache server ======================================================
function stop_apache(){
  global $usf_pskill;                 // pskill program
  global $usf_apache_pid;             // process ID file
  unlink($usf_apache_pid);            // Apache does not remove this hence delete
  $Apache_exe = get_apache_exe();     // get program name   

  $cmd = "$usf_pskill $Apache_exe c"; // c=kill command 
  exec($cmd,$dummy,$return);          // run command 
  set_apache_tracker('free');         // Set tracker free  
}
//================================================== END Stop Apache server ===

//=== Stop Apache Service =====================================================
function stop_apache_service(){
 global $us_apache_service_name; 
 $cmd = "net stop $us_apache_service_name";
 exec($cmd,$dummy,$return);                // Stop service
}
//================================================= END Stop Apache Service ===

//=== UnInstall Apache Service ================================================
function uninstall_apache_service(){

 global $us_apache_bin;
 global $us_apache_service_name;

 $Apache_exe = get_apache_exe();
 $cmd = "$us_apache_bin/$Apache_exe -k uninstall -n \"$us_apache_service_name\"";
 exec($cmd,$dummy,$return);                                      // Uninstall
 set_apache_tracker('free');          // Set tracker to 'free' Prevents 
}
//============================================ END UnInstall Apache Service ===

//=== Is Apache running ======================================================
function apache_running(){
  global $usf_pskill;               // pskill program
  $Apache_exe = get_apache_exe();   

  $cmd = "$usf_pskill $Apache_exe"; // command line to be run  

  exec($cmd,$dummy,$return);        // 0=running 1=not-running 

  if($return == 0){                 // Check return value
   return true;                     // Apache is running
  }
  else{
   return false;                    // Apache not running
 }
}
//=================================================== END Is Apache running ===

//=== Is Apache SSL enabled ===================================================
// Checks Apaches configuration file for SSL enabled.
// Output: Returns true if enabled

function ssl_enabled(){
  global $usf_apache_cnf;
  $filename = $usf_apache_cnf;                    // Apache config file
  if ($filearray=file($filename)) {               // read file into array
    foreach ($filearray as $txt) {                // scan array for SSL enabled
     if(preg_match("/^#LoadModule.ssl.module/", $txt)){  // check $text line 
       return false;                              // match found ssl not enabled                                   
     }
    }
    return true ;                                 // no match hence enabled  
  }
  else {                                          // failed to read file
    echo "Cannot read the file";                  // inform user
  }
}
//=============================================== END Is Apache SSL enabled ===

# === MySQL ==

//=== Get MySQL port ==========================================================
function get_mysql_port(){
 global $usf_my_ini;
  if ($filearray=file($usf_my_ini)) {                // read file into array
    foreach ($filearray as $txt) {                   // scan array for port
     if(preg_match("/^port=(\d+)/", $txt,$matches)){ // check $text save $matches  
       $mysql_port =  $matches[1];                   // match found save port number                                   
        break;                                       // give up nothing else to do
     }
    }
  }
  else {                                              // failed to read file
    echo "Cannot read the file";
  }
  return $mysql_port;
}
//====================================================== END Get MySQL port ===

//=== Get MySQL executable ====================================================
// Multi-servers increment digit
// Output: MySQL executable name
 
function get_mysql_exe(){
  global $us_mysql_bin;
  $dir_handle=opendir($us_mysql_bin);             // Get handle to MySQL bin 
  while($file=readdir($dir_handle)){              // Loop through folder names 
    if(preg_match("/^mysqld-opt.+exe/", $file)){  // Search for executable name 
     $MySQL_exe=$file;                            // Match found save
     break;                                       // Noting else to do give up 
    }
  }
  closedir($dir_handle);
  return $MySQL_exe;
}
//================================================ END Get MySQL executable ===

//=== Get MySQL password ======================================================
// Input: Password file
// Output: MySQL password

function get_mysql_password(){
  global $usf_mysql_passwd;                // Password file
  $fileName = $usf_mysql_passwd; 

  $fh = fopen($fileName, 'r');             // Open file for read
  $Data = fread($fh, filesize($fileName)); // Read all data into variable
  fclose($fh);                             // close file handle

  return $Data;                            // Return password
}
//================================================== END Get MySQL password ===

//=== Start MySQL =============================================================
// Start MySQL server. Uses uniserv.exe to detatch process

function start_mysql(){
  // Global variables for paths and files
  global $usf_uniserv;
  global $us_mysql_bin;
  global $usf_my_ini;
  $mysql_exe = get_mysql_exe();             // Get program name 

  // Build command line
  $cmd1 = "start ";
  $cmd2 = "$usf_uniserv \"";
  $cmd3 = "$us_mysql_bin/$mysql_exe --defaults-file=$usf_my_ini\"";
  $cmd=$cmd1.$cmd2.$cmd3;
  //print $cmd; // Test code

  set_mysql_tracker('program'); // Set tracker to 'program' Prevents 
                                // a user installing as a service. 

  exec($cmd,$dummy,$return);    // Run command 
}
//========================================================= END Start MySQL ===

//=== Stop MySQL ==============================================================
// Stop MySQL server. Uses uniserv.exe to detatch process

function stop_mysql(){
  // Global variables for paths and files
  global $usf_uniserv;
  global $us_mysql_bin;
  $mysql_password = get_mysql_password();        // Get password
  $mysql_port     = get_mysql_port();            // Get port

  $cmd1 = "start ";
  $cmd2 = "$usf_uniserv \"";
  $cmd3 = "$us_mysql_bin/mysqladmin.exe  --port=$mysql_port --user=root --password=$mysql_password shutdown\"";
  $cmd=$cmd1.$cmd2.$cmd3;
  //print $cmd; // Test code

  exec($cmd,$dummy,$return); // Run command
  set_mysql_tracker('free'); // Set tracker free.
}
//========================================================== END Stop MySQL ===

//=== Kill MySQL ==============================================================
// Kill MySQL server. Password corrupt hence this is the only way
function kill_mysql(){
  // Global variables for paths and files
  global $usf_pskill;                 // pskill program
  $MySQL_exe = get_mysql_exe();       // get program name   

  $cmd = "$usf_pskill $MySQL_exe c";  // c=kill command 
  exec($cmd,$dummy,$return);          // run command 
}
//========================================================== END Kill MySQL ===

//=== Install MySQL Service ===================================================
function install_mysql_service(){
 global $us_mysql_bin;
 global $us_mysql_service_name;
 global $usf_my_ini;

 $MySQL_exe = get_mysql_exe();
// $cmd = "$us_mysql_bin/$MySQL_exe --install $us_mysql_service_name --defaults-file=$usf_my_ini";
 $cmd = "$us_mysql_bin/$MySQL_exe --install $us_mysql_service_name ";
 exec($cmd,$dummy,$return);      // Install service 
 set_mysql_tracker('service');   // Set tracker to 'service' Prevents 
}
//=============================================== END Install MySQL Service ===

//=== UnInstall MySQL Service ================================================#
function uninstall_mysql_service(){
 global $us_mysql_bin;
 global $us_mysql_service_name;

 $MySQL_exe = get_mysql_exe();
 $cmd = "$us_mysql_bin/$MySQL_exe --remove $us_mysql_service_name";
 exec($cmd,$dummy,$return);       // UnInstall service 
 set_mysql_tracker('free');       // Set tracker to 'free' Prevents 
}
//============================================= END UnInstall MySQL Service ===

//=== Start MySQL Service =====================================================
function start_mysql_service(){
 global $us_mysql_service_name; 
 $cmd = "net start $us_mysql_service_name";
 exec($cmd,$dummy,$return);      // Start service
}
//================================================= END Start MySQL Service ===

//=== Stop MySQL Service =====================================================#
function stop_mysql_service(){
 global $us_mysql_service_name; 
 $cmd = "net stop $us_mysql_service_name";
 exec($cmd,$dummy,$return);                // Stop service
}
//================================================== END Stop MySQL Service ===

//=== Is MySQL running ========================================================
function mysql_running(){
  global $usf_pskill;               // pskill program
  $MySQL_exe = get_mysql_exe();   

  $cmd = "$usf_pskill $MySQL_exe";  // command line to be run  
  exec($cmd,$dummy,$return);        // 0=running 1=not-running 

  if($return == 0){                 // Check return value
   return true;                     // MySQL is running
  }
  else{
   return false;                    // MySQL not running
 }
}
//==================================================== END Is MySQL running ===

# === Trackers ===

//=== Set Apache Service Tracker =============================================
function set_apache_tracker($value){
  global $usf_apache_tracker;                    // Tracker file
  $fileName = $usf_apache_tracker; 
  $fh = fopen($fileName, 'w') or die("can't open file"); // Open for wrie
  fwrite($fh, $value);                                   // Write string to file
  fclose($fh);                                           // close file handle
}
//========================================= END Set Apache Service Tracker ===

//=== Apache Service Tracker ==================================================
// WEB CLI
// Holds one of three values:
// free       - No servers running
// program    - Running as a program
// service    - Running as a service
// Output: Returns string in file
  
function get_apache_tracker(){
  global $usf_apache_tracker;      // Tracker file
  $fileName = $usf_apache_tracker; 

  $fh = fopen($fileName, 'r');             // Open file for read
  $Data = fread($fh, filesize($fileName)); // Read all data into variable
  fclose($fh);                             // close file handle
  return $Data;
}
//============================================= END Apache Service Tracker ===

//=== Set MySQL Service Tracker ===============================================
function set_mysql_tracker($value){
  global $usf_mysql_tracker;                     // Tracker file
  $fileName = $usf_mysql_tracker; 
  $fh = fopen($fileName, 'w') or die("can't open file"); // Open for wrie
  fwrite($fh, $value);                                   // Write string to file
  fclose($fh);                                           // close file handle
}
//================================================= END Set Service Tracker ===

//=== MySQL Service Tracker ===================================================
// WEB CLI
// Holds one of three values:
// free       - No servers running
// program    - Running as a program
// service    - Running as a service
// Output: Returns string in file
  
function get_mysql_tracker(){
  global $usf_mysql_tracker;       // Tracker file
  $fileName = $usf_mysql_tracker; 

  $fh = fopen($fileName, 'r');             // Open file for read
  $Data = fread($fh, filesize($fileName)); // Read all data into variable
  fclose($fh);                             // close file handle
  return $Data;
}
//===================================================== END Service Tracker ===

//=== Set PHP Tracker =========================================================
function set_php_tracker($value){
  global $usf_php_tracker;                               // Tracker file
  $fileName = $usf_php_tracker; 
  $fh = fopen($fileName, 'w') or die("can't open file"); // Open for wrie
  fwrite($fh, $value);                                   // Write string to file
  fclose($fh);                                           // close file handle
}
//===================================================== END Set PHP Tracker ===

//=== PHP Tracker =============================================================
// WEB CLI
// Holds one of two values:
// pro        - Indicates php.ini is production
// dev        - Indicates php.ini is delvelopment
// Output: Returns string in file
  
function get_php_tracker(){
  global $usf_php_tracker;                 // Tracker file
  $fileName = $usf_php_tracker; 

  $fh = fopen($fileName, 'r');             // Open file for read
  $Data = fread($fh, filesize($fileName)); // Read all data into variable
  fclose($fh);                             // close file handle
  return $Data;
}
//========================================================= END PHP Tracker ===

//=== Set CRON Tracker ========================================================
function set_cron_tracker($value){
  global $usf_cron_tracker;                               // Tracker file
  $fileName = $usf_cron_tracker; 
  $fh = fopen($fileName, 'w') or die("can't open file"); // Open for wrie
  fwrite($fh, $value);                                   // Write string to file
  fclose($fh);                                           // close file handle
}
//==================================================== END Set CRON Tracker ===

//=== CRON Tracker =============================================================
// Holds one of two values: run, stop 
// Output: Returns string in file
  
function get_cron_tracker(){
  global $usf_cron_tracker;                 // Tracker file
  $fileName = $usf_cron_tracker; 

  $fh = fopen($fileName, 'r');             // Open file for read
  $Data = fread($fh, filesize($fileName)); // Read all data into variable
  fclose($fh);                             // close file handle
  return $Data;
}
//======================================================== END CRON Tracker ===

//=== Run Location Tracker ====================================================
// Determines if server has been moved.
// If moved updates configuration files: 
//   usr\local\apache2\conf\httpd.conf
//   usr\local\mysql\my.ini
//   usr\local\php\php.ini
//   usr\local\php\php.ini-production_nano
//   usr\local\php\php.ini-delvelopment-nano
//   unicon\docs\redirect.html
//   all files in cgi-bin (Perl shebang header)
 
function run_location_tracker(){
  global $usf_location_tracker;             // Tracker file previous location
  global $base_f;                           // Current server base folder
  global $usf_apache_cnf;                   // Apache configuration file
  global $usf_apache_ssl_cnf;               // Apache SSL configuration file
  global $usf_my_ini;                       // MySQL  configuration file
  global $usf_small_my_ini;                 // MySQL  alternative configuration file
  global $usf_medium_my_ini;                // MySQL  alternativeconfiguration file
  global $usf_php_ini;                      // PHP configuration file
  global $usf_php_ini_prod;                 // PHP production configuration file
  global $usf_php_ini_dev;                  // PHP pdelvelopment configuration file
  global $usf_msmtp;                        // msmtp configuration file
  global $us_cgi_bin;                       // Per folder

  if(get_location_tracker()!= $base_f){     // Server has been moved
    $s_str = get_location_tracker();        // yes: Get old location
    $s_str = preg_quote($s_str,'/');        // Convert to regex format
    $s_str = '/'.$s_str.'/';                // Create regex pattern

    file_search_replace($usf_apache_cnf,$s_str,$base_f);      // Update Apache cnf
    file_search_replace($usf_apache_ssl_cnf,$s_str,$base_f);  // Update Apache SSL cnf
    file_search_replace($usf_my_ini,$s_str,$base_f);          // Update MySQL ini
    file_search_replace($usf_small_my_ini,$s_str,$base_f);    // Update alternative MySQL ini
    file_search_replace($usf_medium_my_ini,$s_str,$base_f);   // Update alternative MySQL ini

    file_search_replace($usf_php_ini,$s_str,$base_f);      // Update PHP ini
    file_search_replace($usf_php_ini_prod,$s_str,$base_f); // Update PHP production ini
    file_search_replace($usf_php_ini_dev,$s_str,$base_f);  // Update PHP delvelopment ini

    if (file_exists($usf_msmtp)) {                         // Only update if exists 
      file_search_replace($usf_msmtp,$s_str,$base_f);      // Update msmpt ini
    }

    //=== Docs redirect ==
    $file    = $base_f."/unicon/docs/redirect.html";        // new location of file 
    $old_str = get_location_tracker()."/docs/";             // old folder location
    $new_str = $base_f."/docs/";                            // new folder location

    $old_str =  preg_replace('/\//','\\', $old_str);        // Replace / with \ to keeps IE happy
    $new_str =  preg_replace('/\//','\\\\\\', $new_str);        // Replace / with \ to keeps IE happy

    $s_str = preg_quote($old_str,'/');                      // Convert to regex format
    $s_str = '/'.$s_str.'/';                                // Create regex pattern

    file_search_replace($file,$s_str,$new_str);             // Update redirection file

    //=== Update shebang in all files in folder cgi-bin and sub-folders ===========
    if (perl_installed()){                    // Only update if Perl installed
      $start_dir   = $us_cgi_bin;             // Main Perl folder
      $file_type   = '/(\.pl|\.cgi)/' ;       // List of file types
      $search_str  = "/#!.*/";                // Old shebang
      $replace_str = "#!".$base_f."/usr/bin/perl.exe"; // New shebang
      recursive_search_replace($start_dir,$file_type,$search_str,$replace_str);
     }

    set_location_tracker();                 // Update to new location
  }
  // no: return
}
//================================================ END Run Locarion Tracker ===

//=== Set Location Tracker ====================================================
// Saves the current server folder path. Used by run_location_tracker()
// to determin if server has been moved
function set_location_tracker(){
  global $usf_location_tracker;                           // Tracker file
  global $base_f ;                                        // Base folder

  $fileName = $usf_location_tracker; 
  $fh = fopen($fileName, 'w') or die("can't open file"); // Open for wrie
  fwrite($fh, $base_f);                                  // Write string to file
  fclose($fh);                                           // close file handle
}
//================================================ END Set Location Tracker ===

//=== Get Location Tracker ====================================================
function get_location_tracker(){
  global $usf_location_tracker;                           // Tracker file
  $fileName = $usf_location_tracker; 

  $fh = fopen($fileName, 'r');             // Open file for read
  $Data = fread($fh, filesize($fileName)); // Read all data into variable
  fclose($fh);                             // close file handle

  return $Data;
}
//================================================ END Get Location Tracker ===

# === UniTray === 

//=== Get UniTray executable ==================================================
// Multi-servers increment digit  
function get_unitray_exe(){
  global $us_con_tray_menu;                    // Tray Menu folder
  $dir_handle=opendir($us_con_tray_menu);      // Get handle to Base dir 
  while($file=readdir($dir_handle)){           // Loop through folder names 
    if(preg_match("/^UniTray.+exe/", $file)){  // Search for executable name 
     $UniTray_exe=$file;                       // Match found save
     break;                                    // Noting else to do give up 
    }
  }
  closedir($dir_handle);
  return $UniTray_exe;                         // Return executable Apache*.exe
}
//===================================== ======== END Get UniTray executable ===

//=== Get UniTray ini =========================================================
// Multi-servers increment digit  
function get_unitray_ini(){
  global $us_con_tray_menu;                    // Tray Menu folder
  $dir_handle=opendir($us_con_tray_menu);      // Get handle to UniTray dir 
  while($file=readdir($dir_handle)){           // Loop through folder names 
    if(preg_match("/^UniTray.+ini/", $file)){  // Search for ini name 
     $UniTray_ini=$file;                       // Match found save
     break;                                    // Noting else to do give up 
    }
  }
  closedir($dir_handle);
  return $UniTray_ini;                         // Return executable Apache*.exe
}
//===================================================== END Get UniTray ini ===

//=== Get UniTray ID ==========================================================
// Multi-servers increment digit  
function get_unitray_id(){
  global $us_con_tray_menu;                    // Tray Menu folder
  $unitray_ini = get_unitray_ini();            // get file name 
  $pfile = $us_con_tray_menu."/".$unitray_ini; // path

  if ($filearray=file($pfile)) {               // read file into array
    foreach ($filearray as $txt) {             // scan array for ID
                                               // check $text line save $matches 
     if(preg_match("/^ID.(UniTrayController\d+)/", $txt,$matches)){  
       $unitray_id =  $matches[1];              // match found save port number 
       break;                                   // give up nothing else to do
     }
    }
  }
  else {                                        // failed to read file
    echo "Cannot read the file";
  }
  return $unitray_id;

}
//====================================================== END Get UniTray ID ===

//=== Start UniTray ===========================================================
// Start UniTray with path to top-level (main install folder) and location of ini
// Note: UniTray does not like forward slashes replace all with back slashes  
// Note: ustop is passed to UniTray and stored in variable %top% this replaces
// UniTray's %AeTrayMenuPath% variable.   
 
function start_unitray(){
  global $base_f;
  global $us_con_tray_menu;                           // Location of UniTray
  $UniTray_exe = get_unitray_exe();                   // get program name  
  $UniTray_ini = get_unitray_ini();                   // get ini name  
 
  $cmd1 = "start ".$us_con_tray_menu."/".$UniTray_exe; // path to executable
  $cmd2 = " -ustop=".$base_f;                          // new UniTray variable ustop 
  $cmd3 = " -scriptfile=".$us_con_tray_menu."/".$UniTray_ini;
  $cmd =$cmd1.$cmd2.$cmd3;                            // Unitay does not like / hence
  $cmd =  preg_replace('/\//','\\', $cmd);            // Replace / with \

  pclose(popen($cmd,'r'));                            // run and detatch
}
//========================================================= END Start UniTray ===

//=== Stop UniTray ============================================================
// Stoop UniTray 
function stop_unitray(){
  // Global variables for paths and files
  global $us_con_tray_menu;                           // Location of UniTray
  $UniTray_exe = get_unitray_exe();                   // get program name  
  $UniTray_id = get_unitray_id();                     // get id name  
 
  $cmd1 = "start ".$us_con_tray_menu."/".$UniTray_exe; // path to executable
  $cmd2 = "  -quit -id=".$UniTray_id;                  // set ID 
  $cmd =$cmd1.$cmd2;                                   // Unitay does not like / hence
  $cmd =  preg_replace('/\//','\\', $cmd);            // Replace / with \

  exec($cmd,$dummy,$return);           // run command 
}
//======================================================== END stop UniTray ===

//=== Is UniTray running ======================================================
function unitray_running(){
  global $usf_pskill;                 // pskill program
  $UniTray_exe = get_unitray_exe();   // get program name ;   

  $cmd = "$usf_pskill $UniTray_exe";  // command line to be run  
  exec($cmd,$dummy,$return);          // 0=running 1=not-running 

  if($return == 0){                   // Check return value
   return true;                       // UniTray is running
  }
  else{
   return false;                      // UniTray not running
 }
}
//================================================== END Is UniTray running ===

# === General === 

//=== Perl Installed ==========================================================
// Check perl installed
function perl_installed(){
 global $usf_perl;
 if (is_file($usf_perl)){
   return true;
 }
 else{
   return false;
 }
}
//=============================================== END Perl Installed =========

//=== Apache syntax check =====================================================
function apache_syntax_check(){
 global $us_apache_bin;
 $apache_exe= get_apache_exe();        // Apache program

 $cmd="$us_apache_bin/$apache_exe -t"; // Command 
 print" Apache Syntax check - ";
 exec($cmd,$dummy,$return);            // Run syntax check 
 if($return==1){                       // 0=OK 1=errors
   return false; // Errors found
 }
 else{
   return true;  // No errors found
 }
}
//=============================================== END Apache syntax check ====

//=== Recursive directory delete ==============================================
// Inputs:  $dir         Absolute path to starting folder. Do not
//                       include a forward slash at the end. c:/test
// Output:  None
//           
// Notes :  Deletes the content of folder $dir including folder itself.
// ----------------------------------------------------------------------------

function recursive_dir_delete($dir){

  $d = dir($dir); 
  if (is_dir($dir) && !is_link($dir)) {
    if ($d = opendir($dir)) {
      while (($entry = readdir($d)) !== false) {
        if ($entry == '.' || $entry == '..') continue;
        $path = $dir .'/'. $entry;
        if (is_file($path)) unlink($path);
        if (is_dir($path)) recursive_dir_delete($path);
      }
      closedir($d);
    }
    return @rmdir($dir);
  }
  return unlink($dir);
}

//========================================= END Recursive directory delete ====

//=== Recursive directory copy ================================================
// Inputs:  $src   Absolute path to source folder. Do not include a forward slash
//                 at the end. c:/test
//          $dst   Absolute path to destination folder. Do not include_once a forward 
//                 slash at the end. c:/test
// Notes :  Copies entire content of source folder.
// ----------------------------------------------------------------------------
function recursive_copy($src,$dst){
  $dir = opendir($src);                                 // Get handle to open source
  @mkdir($dst);                                         // Create destination folder
  while(false !== ($file = readdir($dir))){
    if (($file != '.') && ($file != '..')){             // Skip special folders
      if (is_dir($src.'/'.$file)){                      // Is it a folder
         recursive_copy($src.'/'.$file,$dst.'/'.$file); // yes: repeat create new folder
      }
      else{                                             // no: Its a file 
         copy($src.'/'.$file,$dst.'/'.$file);           // copy file
      }
    }
  }
  closedir($dir);
}
//=========================================== END Recursive directory copy ====

//=== Recursive File Search and replace  ======================================
// Inputs:  $start_dir   Absolute or relative path to starting folder. Do not
//                       include_once a forward slash at the end. c:/test ./test 
//          $file_type   A regex patern containg file types to be searched 
//                       e.g.  $file_type = '/(\.txt|\.ini|\.conf)/' 
//          $search_str  A regex patern e.g $search_str  = '/\nListen\s\d+/'
//          $replace_str A plain text string e.g. $replace_str = "\nListen 8080"
//
// Output:  Returns true --- Need to add error checking
//           
// Notes :  Searches for files of the specified type starting at $start_dir and 
//          incluse all sub-folders. Each file found a search and replace is
//          performed.
//          
// ----------------------------------------------------------------------------
 
function recursive_search_replace($start_dir,$file_type,$search_str,$replace_str){

  $dirlist = opendir($start_dir);                // Open start directory

  while ($file = readdir($dirlist)){             // Iterate through list
    if ($file != '.' && $file != '..'){          // Skip if . or ..
      $newpath = $start_dir.'/'.$file;           // Create path. Either dir or file 

      if (is_dir($newpath)){                     // Is it a folder
                                                 // yes: Repeat this function
        recursive_search_replace($newpath,$file_type,$search_str,$replace_str); 
      }                                          // for that new folder
      else{                                      // no: Its a file
       if (preg_match($file_type, $newpath)){    // Filter by file extension.

         $fh = fopen($newpath, 'r');             // Open file for read
         $Data = fread($fh, filesize($newpath)); // Read all data into variable
         fclose($fh);                            // Close file handle

         $Data = preg_replace($search_str, $replace_str, $Data,-1,$count);// S & R
         if($count){                             // Was a replacement made
           $fh = fopen($newpath, 'w');           // yes: Open file for write
           fwrite($fh, $Data);                   // Write new $Data to file
           fclose($fh);                          // Close file handle
         }
       }                                       
      }//eof else
    }
  }//eof while

  closedir($dirlist);                          // Close handle 
  return true;                                 // Return 
}                                              
//================================== END Recursive File Search and replace  ===

//=== File Search and replace  ================================================
// Inputs:  $file        - File to search and replace
//          $search_str  - A regex patern e.g $search_str  = '/\nListen\s\d+/'
//          $replace_str - A plain text string e.g. $replace_str = "\nListen 8080"
//          
// Notes :  Searches entire file for a pattern and replaces with a string.
// ----------------------------------------------------------------------------
 
function file_search_replace($file,$search_str,$replace_str){

  $fh = fopen($file, 'r');                // Open file for read
  $Data = fread($fh, filesize($file));    // Read all data into variable
  fclose($fh);                            // Close file handle

  $Data = preg_replace($search_str, $replace_str, $Data,-1,$count);// S & R
  if($count){                             // Was a replacement made
    $fh = fopen($file, 'w');              // yes: Open file for write
    fwrite($fh, $Data);                   // Write new $Data to file
    fclose($fh);                          // Close file handle
  }
 return true;                             // Return 
}                                              
//============================================ END File Search and replace  ===

//== Port In Use Test =========================================================
// Checks a port to see if it is currenly in use.
// Input:  Port number
// Output: true  - in use
//         false - free to use 
function port_in_use($port){
  $cmd = 'netstat -anp tcp | FIND /I "0.0.0.0:'.$port.' "'; // Command
  exec($cmd,$dummy,$return);        // 0=Detected >=1 Not detected 

  if($return == 0){                 // Check return value
   return true;                     // 0= True Port already in use
  }
  else{                             // Port not found
   return false;                    // Port free
 }
}
//========================================================= END Port In Use ===

//=== Prompt User =============================================================
// Function: Prompt user and get user input, returns value input by user.
//           Or when enter key pressed returns a default if used e.g usage
// $name = prompt_user("Enter your name");
// $serverName = prompt_user("Enter your server name", "localhost");
// Note: Returned value requires validation 
//.......................................................................

function prompt_user($promptStr,$defaultVal=false){;

  if($defaultVal) {                             // If a default set
     echo $promptStr. "[". $defaultVal. "] : "; // print prompt and default
  }
  else {                                        // No default set
     echo $promptStr. ": ";                     // print prompt only
  } 
  $name = chop(fgets(STDIN));                   // Read input. Remove CR
  if(empty($name)) {                            // No value. Enter was pressed
     return $defaultVal;                        // return default
  }
  else {                                        // Value entered
     return $name;                              // return value
  }
}
//========================================================= End Prompt User ===

# ### Live server test ################ 

//=== Get current IP as seen from Internet =================================
// Input:  None:
// Output: Return value true  = IP was obtained
// Output: Return value false = IP not obtained or error
// Output: $ip_current either IP address or blank
  
function get_ip_current(){
  global $ip_current;                     // IP address

  $ch=curl_init();                                      // Get handle
  curl_setopt($ch,CURLOPT_URL,'http://myip.dtdns.com'); // Page to get
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);            // Give up after 5s
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);            // Force text string op
  $buffer = curl_exec($ch);                             // Run above save to buffer  
  curl_close($ch);                                      // Cose resource

  if (empty($buffer)){                                  // Is buff empty
    return false;                                       // yes: failed to get ip
  }
  else{                                                 // no: page obtained
   // Extract IP address 
   if(preg_match("/(\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3})/", $buffer, $ipmatch)){  
     $ip_current = $ipmatch[0];                         // Save IP to variable
     return true;                                       // Set success                                    
   }
   else{                                                // No match must be error
     return false;                                      // hence failed
   }
  }
}
//============================= END Get current IP as seen from Internet ===

//=== Test access from Internet =============================================
// Uses real IP address to access server 
// Input:  None
// Output: Return value true = sucess false = failed
  
function test_access(){
  global $ip_current;          // IP address result of running get_ip_current()
                               // get_ip_current()
  if(!get_ip_current()){       // Cannot get current IP address 
    return false;              // give up    
  }

  $port = get_apache_port();   // Get apache port from configuration

  // Build complete URL string
  $str=  'http://'.$ip_current.':'.$port.'/test_access/index.html';

  // Access page using Curl SSL
  $ch=curl_init();                            // Initialize Curl get handle
  curl_setopt($ch,CURLOPT_URL,$str);          // Set the Curl URL option 
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,3);  // timeout set to 3 sceonds
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  // force curl_exec ouput string 
  $buffer = curl_exec($ch);                   // save returned page to buffer
  curl_close($ch);                            // Close Curl frees memory

  // Test returned page 
  if(preg_match("/UniServer\saccess/",$buffer)){ // Is value "UniServer access"
   return true;                                  // yes: update OK
  }
  else{                                          // no: Failed
   return false;
  }
}
//=========================================== END Test access from Internet ===

//=== my_ini_set ==============================================================
// Sets an option value in a configuration file
// Inputs:
// $file        Path to file including file name
// $block       Name of block excluding []
// $option      Name of option
// $optionvalue New value of option
// Outputs:
// Returns true on success or false on failure 

function my_ini_set($file,$block,$option,$optionvalue){
 $ini_array = file("$file");                         // Read file into array

 $flag=false;                                        // Set found flag
 foreach($ini_array as $key => $value){              // Scan array line by line

   if($flag &&  preg_match('/^\s*\[/',$value)){      // Is it a new block 
     $flag=false;                                    // Yes: reset flag
   }

   if(trim($value) == "[$block]"){                   // Is it required block              
     $flag=true;                                     // Yes: set found flag                           
   }
 
   if($flag &&  preg_match("/^\s*$option/",$value)){ // Is required option 
    if(preg_match("/(\s*;.*)$/",$value,$matches)){   // Includes comment
      $comment = rtrim($matches[0]);                 // Yes: clean and save
    }
    else{                                            // No: Reset
     $comment ="";
    }
    $str= "$option = $optionvalue$comment\n";        // Build new string
    $ini_array[$key] = $str;                         // Yes save new value
    file_put_contents("$file",$ini_array);           // Save array to file
    return true;                                     // Success return true                           
   }                                                   
 }
 return false;                                       // Option not found
}//end
//=== END my_ini_set ==========================================================


//=== my_ini_get ==============================================================
// Obtains an option value from a configuration file
// Inputs:
// $file        Path to file including file name
// $block       Name of block excluding []
// $option      Name of option
// Outputs:
// Returns  Value on success
// Returns  Blank on failure 

function my_ini_get($file,$block,$option){
 $ini_array = file("$file");                         // Read file into array

 $flag=false;                                        // Set found flag
 foreach($ini_array as $key => $value){              // Scan array line by line

   if($flag &&  preg_match('/^\s*\[/',$value)){      // Is it a new block 
     $flag=false;                                    // Yes: reset flag                                   
   }

   if(trim($value) == "[$block]"){                   // Is it required block              
     $flag=true;                                     // Yes: set found flag        
   }

   if($flag &&  preg_match("/^\s*$option/",$value)){     // Is required option  
     $str  =  trim($ini_array[$key]);                    // Yes read and clean 
     $str1 =  preg_replace("/^$option\s*=\s*/", "", $str); // Clean 
     return $str1;                                       // Retun option value 
   }                                                   
 }
 return "";                                              // Option not found 
}
//=== END my_ini_get ==========================================================

?>