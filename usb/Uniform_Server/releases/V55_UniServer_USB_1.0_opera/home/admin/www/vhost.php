<?php
/*
#############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: Virtual host configuration
# 13-12-2009 - Updated to use PAC file and not hosts fileonly
#############################################################################
*/

// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("includes/.lang").".php"; 
include_once "includes/header.php";
include_once "includes/secure.php";
$hosts_sti = "$base_f/pac/my_hosts.pac";                        // Path to hosts pac file
$default_path = "/www/"; 


// Path to httpd.conf
$httpd_conf_sti = $us_usr."/local/apache2/conf/httpd.conf";

// path to all hosts
$default_path = $base_f."/www/";

if(@$_POST["host_navn"]) {

if(!is_dir($_POST["host_path"])) {
mkdir($_POST["host_path"]);
}

$conf_str = "\n##########VIRTUAL HOST SETUP##########";
$conf_str .= "\n# ". strtoupper($_POST["host_navn"]) ."\n";
$conf_str .= "<VirtualHost *>\n";
$conf_str .= "ServerName ". $_POST["host_navn"] ."\n";
$conf_str .= "DocumentRoot ". $_POST["host_path"] ."\n";

    if(!empty($_POST["host_param"])) {
    $conf_str .= $_POST["host_param"] ."\n";
    }

$conf_str .= "</VirtualHost>\n";

$conf = fopen($httpd_conf_sti, "at");
if ($conf) {
fputs($conf, $conf_str);
fclose($conf);
}

// === MPG Get port number
// Use port from configuration file - user can change this file 
$config_file = fopen($httpd_conf_sti, "r");   // Read config file
while (!feof($config_file)){                  // loop file          
  $line = fgets($config_file);                // get a line from file
  if(preg_match("/^Listen/",$line)){          // Check for Listen
    preg_match("/(\d+)/",$line, $matches);    // Get array of matches
    $port = $matches[1];                      // First element is port num
    break;                                    // No need to read more lines
  }
}
fclose($config_file);                         // Close file
//=== END Get port number

// == MPG Build new PAC file in array and save to file
// The PAC file simulates a PC's hosts file making servers portable
// Note: Rreplaces old hosts file.
$pac_hosts[] = "// PAC file for Mona CD and USB: Automatically updated from";
$pac_hosts[] = "// Apanel 'Amin Virtual Hosts' Note: only adds new entries";
$pac_hosts[] = "// If you wish you can edit this file";
$pac_hosts[] = "function FindProxyForURL (url, host){";

$pac_file = fopen($hosts_sti, "r");      // Read PAC host file
while (!feof($pac_file)){                
  $line = fgets($pac_file);
  if(preg_match("/shExpMatch/",$line)){  // Check for host lines
    $pac_hosts[]= trim($line);           // Save host lines to array
  }
}
fclose($pac_file);

// Add new host to array
$pac_hosts[] = "if (shExpMatch(url,\"http://" . $_POST["host_navn"] . "*\")) return \"PROXY 127.0.0.1:" . $port ."\";";
$pac_hosts[] = "return \"\";";            // Now complete array-file 
$pac_hosts[] = "}";

$pacstring = implode("\n",$pac_hosts);    // Convert array to string
file_put_contents($hosts_sti,$pacstring); // Save array to file
// == END Build new PAC file in array and save to file


header("Location:". $_SERVER["PHP_SELF"] ."");
exit();
}
include_once "includes/header.php"; 
?>
<body leftmargin="0" topmargin="0">

<div id="main">
<h2>&#187; <?php echo  $US['vhost-head']?></h2>
<?php
if(is_file($httpd_conf_sti)) { // findes httpd.conf?
    if(is_file($hosts_sti)) {  // findes filen hosts?

$all_hosts = array();
$fil = file($httpd_conf_sti);

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

//mpg====

// Checks if hostnames in $host_name .

$ok_name = array();
$nyfile = file_get_contents($hosts_sti);

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
}

//mpg====

echo "<p><i>Note: PAC file in folder UniServer\pac replaces PC hosts file.</i></p>";
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

}
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
| &#169 2007 <?php echo  $US['dev-team']?> | <a href="http://www.eksperten.dk/artikler/218"><?php echo  $US['vhost-credit']?></a> <?php include_once "includes/code.php"; ?></div>
</body>
</html>
