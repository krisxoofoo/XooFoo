<?php
/*
####################################################
# Name: The Uniform Server Admin Panel 2.0
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) 
# Web: http://www.uniformserver.com
####################################################
*/

// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("includes/.lang").".php"; 
include_once "includes/header.php";
include_once "includes/secure.php";

if ( !(file_exists($usf_apanel_passwd)) ) {
	$AHandle = fopen($usf_apanel_passwd, 'w');
	fwrite($AHandle, 'root:root');
	fclose($AHandle);
}

if ( !(file_exists($usf_www_passwd)) ) {
	$WHandle = fopen($usf_www_passwd, 'w');
	fwrite($WHandle, 'root:root');
	fclose($WHandle);
}

if ( !(file_exists($usf_ssl_passwd)) ) {
	$sslWHandle = fopen($usf_ssl_passwd, 'w');
	fwrite($sslWHandle, 'root:root');
	fclose($sslWHandle);
}

if ( !(file_exists($usf_mysql_passwd)) ) {
	$SHandle = fopen($usf_mysql_passwd, 'w');
	fwrite($SHandle, root);
	fclose($SHandle);
}

// Admin Panel's .htpasswd
	$tfile = fopen($usf_apanel_passwd, "r");
	$fcontents = fgets($tfile);
	$ucontents = explode(":", $fcontents);	

// Private Server's .htpasswd
	$wfile = fopen($usf_www_passwd, "r");
	$pcontents = fgets($wfile);
	$pscontents = explode(":", $pcontents);

// Private SSL Server's .htpasswd
	$sslwfile = fopen($usf_ssl_passwd, "r");
	$sslpcontents = fgets($sslwfile);
	$sslpscontents = explode(":", $sslpcontents);

// mysql_password
	$mfile = fopen($usf_mysql_passwd, "r");
	$scontents = fgets($mfile);

	fclose($tfile);
	fclose($wfile);
	fclose($sslwfile);
	fclose($mfile);
?>

<div id="main">
	<h2>&#187; <?php echo  $US['title']?> [<?php include("includes/.version")?>] </h2>
	<h3><?php echo  $US['main-head']?></h3>
	<p><?php echo  $US['main-text']?></p>
</div>

<div id="resolve">
	<h3><?php echo  $US['main-secure']?></h3>
	<ul>
	<?php if (($ucontents[0] == "root") || ($ucontents[1] == "root")) { echo "<li style=\"color:red;\">".$US['main-text-0']."</li>"; } ?>
	<?php if (($pscontents[0] == "root") || ($pscontents[1] == "root")) { echo "<li style=\"color:red;\">".$US['main-text-1']."</li>"; } ?>	
	<?php if (($sslpscontents[0] == "root") || ($sslpscontents[1] == "root")) { echo "<li style=\"color:red;\">".$US['main-text-4']."</li>"; } ?>	
	<?php if ($scontents == "root") { echo "<li style=\"color:red;\">".$US['main-text-2']."</li>"; } ?>
	<li style="color:red;"><?php echo  $US['main-text-3']?></li>
	</ul>
</div>

<!--
<div id="resolve">
	<h3 class="sub">Security</h3>
	<ul>
	<li>&#187; 15-Mar-05, 20:00 - <a href="index.html">Topic</a> - posted by <span class="name">admin</span> </li>
	</ul>
</div>
-->


<?php
// Footer
include_once "includes/footer.php";
?>


