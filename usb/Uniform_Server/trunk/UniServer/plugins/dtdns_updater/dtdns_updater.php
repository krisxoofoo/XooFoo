<?php
/*
###############################################################################
# Name: The Uniform Server DtDNS 
# Developed By: The Uniform Server Development Team
# Modified Last By: Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Updater v 1.0
# Updater v 1.1 Added Configuration file and log
###############################################################################
*/
//error_reporting(0); // Disable PHP errors and warnings
                      // Comment to Enable for testing

chdir(dirname(__FILE__)); // Change wd to this files location
include_once "../../unicon/main/includes/config.inc.php";
include_once "../../unicon/main/includes/functions.php";

run_location_tracker();  // Have servers moved if moved update configuration
print"\n";

//=== Variables

$logging  = true;         // true = Enable logging false = disable logging
$log_file = "dtdns.log";  // log file name (Can include a relative path) 

$test     = false;        // Test true = display IP address and host names
                          // false = no display

$file = "dtdns.ini";      // Configuration file name

//=== Main program ============================================================
$ini_array = parse_ini_file($file, true);  // Read dtdns.ini into array

foreach($ini_array as $key => $value){     // Scan array's main keys

 $id = $ini_array[$key]['hostname'];       // Get hostname
 $pw = $ini_array[$key]['password'];       // Get password

  if(get_ip_dns($id)){                     // Was IP from DNS returned
    if(get_ip_current()){                  // Yes: Current IP returned

      if($test){ // Test code
       print "DNS IP = $ip_dns CURRENT IP = $ip_current $id<br/>\n";
      }

      if($ip_dns != $ip_current){          // Are IP's different
        dtdns_update($id,$pw);           // yes: Update required
          if($logging){
             $str = date('Y-m-d H:i')." Changed IP from: $ip_dns to $ip_current $id \n";
             $fh = fopen($log_file, 'a') or die("can't open file");
             fwrite($fh, $str);
             fclose($fh);           
          }
      }
    }
  }
}// end foreach
//======================================================== END Main program ===

//=== Get IP from DNS server ==================================================
// Input:  ID = Hostname:
// Output: Return value true  = IP was obtained
// Output: Return value false = IP not obtained or error
// Output: $ip_dns either IP address or host name
  
function get_ip_dns($hostname){
  global $ip_dns;                      // IP address saved from DNS server
  $ip_dns = gethostbyname($hostname);  // Get IP address of hostname
  if($ip_dns == $hostname){            // Is hostname returned (not IP address) 
    return false;                      // yes: failed to get IP address
  }
  else{                                // no: IP obtained  
    return true;                       // set success 
  }
}
//============================================== END Get IP from DNS server ===

//=== DtDNS Host Update Page ==================================================
// Input:  $id = Hostname:
// Input:  $pw = User password
// Output: Return value true = sucess false = failed
  
function dtdns_update($id,$pw){
$id_val     = urlencode($id);                   // User Host on DtDNS
$pw_val     = urlencode($pw);                   // User password
$client_val = urlencode('UniServerV1');         // Optional - But added it
$url = 'https://www.dtdns.com/api/autodns.cfm'; // DtDNS update page

// Build complete URL
$str= $url."?id=".$id_val."&pw=".$pw_val."&client=".$client_val;

// Access page using Curl SSL
$ch=curl_init();                                 // Initialize Curl get handle
curl_setopt($ch,CURLOPT_URL,$str);               // Set Curl URL option 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // no verify
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);      // timeout set to 10 sceonds
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);       // curl_exec ouputs a string 
$buffer = curl_exec($ch);                        // run above, save to buffer
curl_close($ch);                                 // Close Curl frees memory

// Test returned page 
if(preg_match("/now\spoints\sto/",$buffer)){// Is returne value "now points to"
 return true;                               // yes: update OK
}
else{                                       // no: Failed
 return false;
}
}
//============================================== END DtDNS Host Update Page ===
?>