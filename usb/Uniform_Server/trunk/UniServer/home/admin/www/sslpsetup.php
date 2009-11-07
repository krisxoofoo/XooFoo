<?php
/*
#############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: Sets name and password to access root folder SSL (private secure server)
#        Effective when enabled in ssl\.htaccess
#############################################################################
*/

// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("includes/.lang").".php"; 
include_once "includes/header.php";
include_once "includes/secure.php";


if ( !(file_exists($usf_ssl_passwd)) ) {        // Does file exist
	$FHandle = fopen($usf_ssl_passwd, 'w'); // no: create it
	fclose($FHandle);
}


if (@$_POST['submit']) {

	$nwuser = $_POST['puser'];
	$nwpass = $_POST['ppass'];

	$urdata = "$nwuser:$nwpass";

	$wfile = fopen($usf_ssl_passwd, 'w') ;
	fwrite($wfile, $urdata);
	fclose($wfile);
?>

	<div id="main">
	<h2>&#187; <?php echo  $US['sslpsetup-head']?></h2>
	<h3><?php echo  $US['sslpsetup-sub-0']?></h3>
	<p>
	<?php echo  $US['sslpsetup-success']?>
	<br />
	<br />
	<?php echo  $US['sslpsetup-user']?>: <?php echo $_POST['puser'];?>
	<br />
	<?php echo  $US['sslpsetup-pass']?>: <?php echo $_POST['ppass'];?>
	</p>
	</div>

<?php
}

else {
	$tfile = fopen($usf_ssl_passwd, "r");

	$fcontents = fgets($tfile);
	$ucontents = explode(":", $fcontents);
?>

	<div id="main">
		<h2>&#187; <?php echo  $US['sslpsetup-head']?></h2>
		<h3><?php echo  $US['sslpsetup-sub-0']?></h3>

		<p><?php echo  $US['sslpsetup-text-0']?></p>
		<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
		<table width="100%">
		<tr>
		<td width="80">
		<p><?php echo  $US['sslpsetup-user']?></p>
		</td>
		<td>
		<input type="text" name="puser" value="<?php echo $ucontents[0]?>" />
		</td>
		</tr>
		<tr>
		<td width="80">
		<p><?php echo  $US['sslpsetup-pass']?></p>
		</td>
		<td>
		<input type="text" name="ppass" value="<?php echo $ucontents[1]?>" />
		</td>
		</tr>
		</table>
		<br />
		<input type="submit" name="submit" value="<?php echo  $US['sslpsetup-change']?>" />
		</form>
	</div>

<?php
	fclose($tfile);
}

// Footer
include_once "includes/footer.php";
?>