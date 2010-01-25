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
include "includes/config.inc.php";
include "$apanel_path/includes/lang/".file_get_contents("includes/.lang").".php"; 
include "includes/header.php";
include "includes/secure.php";

if ( !(file_exists($aphtpasswd)) ) {
	$AHandle = fopen($aphtpasswd, 'w');
	fwrite($AHandle, 'root:root');
	fclose($AHandle);
}

if ( !(file_exists($whtpasswd)) ) {
	$WHandle = fopen($whtpasswd, 'w');
	fwrite($WHandle, 'root:root');
	fclose($WHandle);
}

if ( !(file_exists($whtpasswds)) ) {
	$sslWHandle = fopen($whtpasswds, 'w');
	fwrite($sslWHandle, 'root:root');
	fclose($sslWHandle);
}

if ( !(file_exists($mysqlpwd)) ) {
	$SHandle = fopen($mysqlpwd, 'w');
	fwrite($SHandle, root);
	fclose($SHandle);
}

// Admin Panel's .htpasswd
	$tfile = fopen($aphtpasswd, "r");
	$fcontents = fgets($tfile);
	$ucontents = explode(":", $fcontents);	

// Private Server's .htpasswd
	$wfile = fopen($whtpasswd, "r");
	$pcontents = fgets($wfile);
	$pscontents = explode(":", $pcontents);

// Private SSL Server's .htpasswd
	$sslwfile = fopen($whtpasswds, "r");
	$sslpcontents = fgets($sslwfile);
	$sslpscontents = explode(":", $sslpcontents);

// mysql_password
	$mfile = fopen($mysqlpwd, "r");
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
	<h3 class="main"><?php echo  $US['main-secure']?></h3>
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
include "includes/footer.php";
?>


