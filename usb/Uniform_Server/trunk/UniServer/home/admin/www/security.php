<?php
/*
#############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: Displays security page
#############################################################################
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

// Check user generated new server certificate and key.
// Check for existance of server certificate file server.crt
if ( !(file_exists($usf_cert)) ) {
  $unsecure_cert = TRUE;
}
else{
   $unsecure_cert = FALSE; 
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
		<h2>&#187; <?php echo  $US['secure-head']?></h2>

		<h3><?php echo  $US['secure-sub-0']?></h3>
		<p><?php echo  $US['secure-text-0']?></p>
		
		<table width="100%">
			<tr>
				<td width="75%"><b><?php echo  $US['secure-text-1']?></b></td>
				<td><b><?php echo  $US['secure-text-2']?></b></td>
			</tr>
			<tr valign="top">
				<td width="75%"><p>
				<b><?php echo  $US['secure-text-3']?></b>
				<br />
				<?php echo  $US['secure-text-X']?>
				</p></td>
				<td><p>
				<?php if (($ucontents[0] == "root") || ($ucontents[1] == "root")) { echo "<a href=\"apsetup.php\"><font color=\"red\"><u>".$US['secure-unsecure']."</font></u></a>"; }
		   			else { echo "<font color=\"green\">".$US['secure-secure']."</font>"; }?>
				</p></td>
			</tr>
			<tr valign="top">
				<td width="75%"><p>
				<b><?php echo  $US['secure-text-p']?></b> 
				<br />
				<?php echo  $US['secure-text-X']?>
				</p></td>
				<td><p>
				<?php if (($pscontents[0] == "root") || ($pscontents[1] == "root")) { echo "<a href=\"psetup.php\"><font color=\"red\"><u>".$US['secure-unsecure']."</font></u></a>"; }
		   			else { echo "<font color=\"green\">".$US['secure-secure']."</font>"; }?>
				</p></td>
			</tr>


			<tr valign="top">
				<td width="75%"><p>
				<b><?php echo  $US['secure-text-sslp']?></b> 
				<br />
				<?php echo  $US['secure-text-X']?>
				</p></td>
				<td><p>
				<?php if (($sslpscontents[0] == "root") || ($sslpscontents[1] == "root")) { echo "<a href=\"sslpsetup.php\"><font color=\"red\"><u>".$US['secure-unsecure']."</font></u></a>"; }
		   			else { echo "<font color=\"green\">".$US['secure-secure']."</font>"; }?>
				</p></td>
			</tr>

			<tr valign="top">
				<td width="75%"><p>
				<b><?php echo  $US['secure-text-sslcertp']?></b> 
				<br />
				<?php echo  $US['secure-text-sslX']?>
				</p></td>
				<td><p>
				<?php if (( !$unsecure_cert)) { echo "<font color=\"green\">".$US['secure-secure']."</font>"; }
		   			else { echo "<a href=\"certificate_and_key_gen.php\"><font color=\"red\"><u>".$US['secure-unsecure']."</font></u></a>"; }?>
				</p></td>
			</tr>


			<tr valign="top">
				<td width="75%"><p>
				<b><?php echo  $US['secure-text-s']?></b> 
				<br />
				<?php echo  $US['secure-text-7']?>
				</p></td>
				<td><p>
				<?php if ($scontents !== "root") { echo "<font color=\"green\">".$US['secure-secure']."</font>"; }
		   			else { echo "<a href=\"mqsetup.php\"><font color=\"red\"><u>".$US['secure-unsecure']."</font></u></a>"; }?>
				</p></td>
			</tr>
		</table>

		<h3><?php echo  $US['secure-sub-1']?></h3>
		<p><?php echo  $US['secure-text-8']?></p>
		
		<table width="100%">
			<tr>
				<td width="75%"><b><?php echo  $US['secure-text-1']?></b></td>
				<td><b><?php echo  $US['secure-text-2']?></b></td>
			</tr>
			<tr valign="top">
				<td width="75%"><p>
				<b><?php echo  $US['secure-view']?></b>
				<br />
				<?php echo  $US['secure-look']?>
				</p></td>
				<td><p>
				<?php if (getenv("REMOTE_ADDR") == "127.0.0.1") { echo "<font color=\"green\">".$US['secure-secure']."</font>"; }
		   			else { echo "<font color=\"red\">".$US['secure-unsecure']."</font>"; }?>
				</p></td>
			</tr>
			<tr valign="top">
				<td width="75%"><p>
				<b><?php echo  $US['secure-text-9']?></b>
				<br />
				<?php echo  $US['secure-text-10']?>
				</p></td>
				<td><p>
				<?php if (ini_get('safe_mode') == true) { echo "<font color=\"green\">".$US['secure-secure']."</font>"; }
		   			else { echo "<a href=\"pconfig.php\"><font color=\"red\"><u>".$US['secure-unsecure']."</font></u></a>"; }?>
				</p></td>
			</tr>
<?php
	$usfap = strpos(file_get_contents("$us_apanel/.htaccess"), '#Require valid-user');
	$usfps = strpos(file_get_contents("$us_www/.htaccess"), '#Require valid-user');
	$usfps_ssl = strpos(file_get_contents("$us_ssl/.htaccess"), '#Require valid-user');
?>
			<tr valign="top">
				<td width="75%"><p>
				<b><?php echo  $US['secure-text-11']?></b>
				<br />
				<?php echo  $US['secure-text-13']?>
				</p></td>
				<td><p>
				<?php if ($usfap === false) { echo "<font color=\"green\">".$US['secure-secure']."</font>"; }
		   			else { echo "<font color=\"red\">".$US['secure-unsecure']."</font>"; }?>
				</p></td>
			</tr>
			<tr valign="top">
				<td width="75%"><p>
				<b><?php echo  $US['secure-text-12']?></b>
				<br />
				<?php echo  $US['secure-text-14']?>
				</p></td>
				<td><p>
				<?php if ($usfps === false) { echo "<font color=\"green\">".$US['secure-secure']."</font>"; }
		   			else { echo "<font color=\"red\">".$US['secure-unsecure']."</font>"; }?>
				</p></td>
			</tr>

			<tr valign="top">
				<td width="75%"><p>
				<b><?php echo  $US['secure-text-12ssl']?></b>
				<br />
				<?php echo  $US['secure-text-14ssl']?>
				</p></td>
				<td><p>
				<?php if ($usfps_ssl === false) { echo "<font color=\"green\">".$US['secure-secure']."</font>"; }
		   			else { echo "<font color=\"red\">".$US['secure-unsecure']."</font>"; }?>
				</p></td>
			</tr>


		</table>
	</div>

<?php
// Footer
include_once "includes/footer.php";
?>