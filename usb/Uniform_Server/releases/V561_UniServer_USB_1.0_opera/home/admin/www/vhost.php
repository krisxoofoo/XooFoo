<?php
/*
#############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: Virtual host configuration
#        Added support for portable opera and PAC
#############################################################################
*/

// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("includes/.lang").".php"; 
include_once "includes/header.php";
include_once "includes/secure.php";
include_once USF_CON_FUNCTIONS;

$pc_hosts = getenv('windir')."/system32/drivers/etc/hosts";  // Path to hosts file 
$default_path = $default_path = US_BASE_F."/www/";           // path to all hosts

if(@$_POST["host_navn"]) {
  if(!is_dir($_POST["host_path"])) {
    mkdir($_POST["host_path"]);       // Create dir
  }

  //Write vhost to configuration file
  $conf_str = "\n##########VIRTUAL HOST SETUP##########";
  $conf_str .= "\n# ". strtoupper($_POST["host_navn"]) ."\n";
  $conf_str .= "<VirtualHost *>\n";
  $conf_str .= "ServerName ". $_POST["host_navn"] ."\n";
  $conf_str .= "DocumentRoot ". $_POST["host_path"] ."\n";

  if(!empty($_POST["host_param"])) {
     $conf_str .= $_POST["host_param"] ."\n";
  }

  $conf_str .= "</VirtualHost>\n";

  $conf = fopen(USF_APACHE_CNF, "at");
  if ($conf) {
    fputs($conf, $conf_str);
    fclose($conf);
  }

  //-- If portable opera write to PAC file otherwise write to PC hosts file
  $port = get_apache_port();  // Get Apache port   

  if(file_exists(USF_HOSTS_PAC)){    // Does PAC file exists 
    // == MPG Build new PAC file in array and save to file
    // The PAC file simulates a PC's hosts file making servers portable
    // Note: Rreplaces old hosts file.
    $pac_hosts[] = "// PAC file for Mona CD and USB: Automatically updated from";
    $pac_hosts[] = "// Apanel 'Amin Virtual Hosts' Note: only adds new entries";
    $pac_hosts[] = "// If you wish you can edit this file";
    $pac_hosts[] = "function FindProxyForURL (url, host){";

   $pac_file = fopen(USF_HOSTS_PAC, "r");      // Read PAC host file
    while (!feof($pac_file)){                
      $line = fgets($pac_file);
      if(preg_match("/shExpMatch/",$line)){    // Check for host lines
        $pac_hosts[]= trim($line);             // Save host lines to array
      }
    }
    fclose($pac_file);

    // Add new host to array
    $pac_hosts[] = "if (shExpMatch(url,\"http://" . $_POST["host_navn"] . "*\")) return \"PROXY 127.0.0.1:" . $port ."\";";
    $pac_hosts[] = "return \"\";";            // Now complete array-file 
    $pac_hosts[] = "}";

    $pacstring = implode("\n",$pac_hosts);       // Convert array to string
    file_put_contents(USF_HOSTS_PAC,$pacstring); // Save array to file
    // == END Build new PAC file in array and save to file
  }

  else{ // Portable opera not being used
  // Write to hosts file
    $host_str = "\n127.0.0.1    ". $_POST["host_navn"];

    $to_hostsfil = fopen($pc_hosts, "at");
    if ($to_hostsfil) {
      fputs($to_hostsfil, $host_str);
      fclose($to_hostsfil);
    }
  }// End Write to PC_host

}
include_once "includes/header.php"; 
?>
<body leftmargin="0" topmargin="0">

<div id="main">
<h2>&#187; <?php echo  $US['vhost-head']?></h2>
<?php

if(is_file(USF_APACHE_CNF)) { // findes httpd.conf?

  //=== Decide if portable opera is being used ==========

  if(file_exists(USF_HOSTS_PAC)){    // Does PAC file exists 
  //--------------------------------------------------------
    if(is_file(USF_HOSTS_PAC)) {  // findes file pac

    $all_hosts = array();
    $fil = file(USF_APACHE_CNF);

    // Finds hosts in httpd.conf
    for($i = 0; $i < count($fil); $i++) {
      $fil[$i] = trim($fil[$i]);
      if(substr($fil[$i], 0, 10) == "ServerName") {
         $all_hosts[] = trim(strtolower(substr($fil[$i], 10)));
      }
    }

    // Remove "duplicates"
    $hosts = array_unique($all_hosts);

    sort($hosts);

    // If there was "duplicates", giv'em a correct "key" again ( 0=>host1, 1=>host2 )
    $b = 0;
    foreach($hosts as $value) {
      $host_name[$b] = $value;
      $b++;
    }

    $ialt = count($host_name);

    // Checks if hostnames in $host_name .

   $ok_name = array();
   $nyfile = file_get_contents(USF_HOSTS_PAC);

   foreach($host_name as $tjek_hostfil_name) {
    $pos = strpos(strtolower($nyfile), $tjek_hostfil_name);
     if($pos !== false) {
       $ok_name[] = $tjek_hostfil_name;
     }
   }

   // Contains names present in httdp.conf but not in file hosts
   $name_result = array_diff($host_name, $ok_name);

   echo"<h3>". $US['vhost-settings'] ."</h3>";
   echo"<p>". $US['vhost-text-0'] ." ". $ialt ." ". $US['vhost-text-1'] ." <br />";

   if($ialt > 0) {
    for($c = 0; $c < $ialt; $c++) {
      echo"<a target=\"_new\" href=\"http://". $host_name[$c] ."/\">". $host_name[$c] ."</a><br />";
    }
    //  echo"<br />";
   }

//== Live with this otherwise all language files require translating
$US['vhost-text-2'] = 'Error in PAC file:'; // Shame but hard coded
$US['vhost-text-3'] = 'All hostnames exist in PAC file!'; // Shame but hard coded

   if(count($name_result) !=0) {
    echo"<b>". $US['vhost-text-2'] ."</b> ";
     foreach($name_result as $navn) {
       echo $navn ." ". $US['vhost-dne'] ."";
     }
   }
   else{
     echo"". $US['vhost-text-3'] ."";
   }
//===

   echo "<p><i>Note: PAC file in folder UniServer/pac replaces PC hosts file.</i></p>";
   echo"<h3>". $US['vhost-setup'] ."</h3>";
   echo"<p>". $US['vhost-new'] ."";

   echo"	
   <form action=\"". $_SERVER["PHP_SELF"] ."\" method=\"post\">
   <p>". $US['vhost-name'] ." <small>". $US['vhost-new-ex'] ."</small></p>
   <input type=\"text\" name=\"host_navn\" class=\"input\" size=\"24\" />
   <p>". $US['vhost-path'] ." <small>". $US['vhost-path-ex'] ."</small></p>
   <input type=\"text\" name=\"host_path\" class=\"input\" size=\"40\" value=\"". $default_path ."\" />
   <p>". $US['vhost-opt'] ." <small>". $US['vhost-opt-ex'] ."</small></p>
   <textarea name=\"host_param\" class=\"input\" cols=\"48\" rows=\"8\"></textarea><br />
   <input type=\"submit\" value=\"". $US['vhost-make'] ."\" />
   \n\n";

   echo"</form>\n";

 }
 else{
  echo"<br />\n<span class=\"error\">". $US['vhost-error-1'] ."</span><br />\n";
 }

  //--------------------------------------------------------
  }// End PAC


  else{ // PC Hosts
  //--------------------------------------------------------
  if(is_file($pc_hosts)) {    // findes filen hosts?

    $all_hosts = array();
    $fil = file(USF_APACHE_CNF);

    // Finds hosts in httpd.conf
    for($i = 0; $i < count($fil); $i++) {
        $fil[$i] = trim($fil[$i]);

        if(substr($fil[$i], 0, 10) == "ServerName") {
            $all_hosts[] = trim(strtolower(substr($fil[$i], 10)));
        }
    }

   // Remove "duplicates"
   $hosts = array_unique($all_hosts);

   sort($hosts);

   // If there was "duplicates", giv'em a correct "key" again ( 0=>host1, 1=>host2 )
   $b = 0;
   foreach($hosts as $value) {
     $host_name[$b] = $value;
     $b++;
   }

   $ialt = count($host_name);

   // Checks if hostnames in $host_name also exist in hosts file.........

   $ok_name = array();
   $nyfile = file_get_contents($pc_hosts);

   foreach($host_name as $tjek_hostfil_name) {
     $pos = strpos(strtolower($nyfile), $tjek_hostfil_name);
     if($pos !== false) {
       $ok_name[] = $tjek_hostfil_name;
     }
   }

   // Contains names present in httdp.conf but not in file hosts
   $name_result = array_diff($host_name, $ok_name);

   echo"<h3>". $US['vhost-settings'] ."</h3>";
   echo"<p>". $US['vhost-text-0'] ." ". $ialt ." ". $US['vhost-text-1'] ." <br />";

   if($ialt > 0) {
      for($c = 0; $c < $ialt; $c++) {
         echo"<a target=\"_new\" href=\"http://". $host_name[$c] ."/\">". $host_name[$c] ."</a><br />";
      }
      echo"<br />";
   }

   if(count($name_result) !=0) {
    echo"<b>". $US['vhost-text-2'] ."</b> ";
     foreach($name_result as $navn) {
       echo $navn ." ". $US['vhost-dne'] ."";
     }
   }
   else{
     echo"". $US['vhost-text-3'] ."";
   }

   echo"<h3>". $US['vhost-setup'] ."</h3>";
   echo"<p>". $US['vhost-new'] ."";

   echo"	
   <form action=\"". $_SERVER["PHP_SELF"] ."\" method=\"post\">
   <p>". $US['vhost-name'] ." <small>". $US['vhost-new-ex'] ."</small></p>
   <input type=\"text\" name=\"host_navn\" class=\"input\" size=\"24\" />
   <p>". $US['vhost-path'] ." <small>". $US['vhost-path-ex'] ."</small></p>
   <input type=\"text\" name=\"host_path\" class=\"input\" size=\"40\" value=\"". $default_path ."\" />
   <p>". $US['vhost-opt'] ." <small>". $US['vhost-opt-ex'] ."</small></p>
   <textarea name=\"host_param\" class=\"input\" cols=\"48\" rows=\"8\"></textarea><br />
   <input type=\"submit\" value=\"". $US['vhost-make'] ."\" />
   \n\n";

   echo"</form>\n";

 }//##### END if(is_file($pc_hosts))

 else{
    echo"<br />\n<span class=\"error\">". $US['vhost-error-1'] ."</span><br />\n";
 }
  //--------------------------------------------------------
  }// END PC Host


}// END if(is_file(USF_APACHE_CNF))
else{
  echo"<br />\n<span class=\"error\">". $US['vhost-error-2'] ."</span><br />\n";
}

$safe = ini_get('safe_mode');
if(!empty($safe)) {
echo"". $US['vhost-text-4'] ."";
}
?>
</p>
</div>
<p class="copyright"><span class="name"><?php echo  $US['apanel']?> <?php echo $us_apanel_version?></span> 
| &#169 2010 <?php echo  $US['dev-team']?> | <a href="http://www.eksperten.dk/artikler/218"><?php echo  $US['vhost-credit']?></a> <?php include_once "includes/code.php"; ?></div>
</body>
</html>