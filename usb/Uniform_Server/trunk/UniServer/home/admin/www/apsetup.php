<?php
/*
#############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: Sets name and password to access Admin panel
#        Effective when enabled in home\admin\www\.htaccess
#############################################################################
*/

// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("$us_apanel/includes/.lang").".php"; 
include_once "includes/header.php";
include_once "includes/secure.php";


if ( !(file_exists($usf_apanel_passwd)) ) {        // Does file exist
	$FHandle = fopen($usf_apanel_passwd, 'w'); // no: create it
	fclose($FHandle);
}


if (@$_POST['submit']) {

	$nwuser = $_POST['apuser'];
	$nwpass = $_POST['appass'];

	$urdata = "$nwuser:$nwpass";

	$wfile = fopen($usf_apanel_passwd, 'w') ;
	fwrite($wfile, $urdata);
	fclose($wfile);
?>

	<div id="main">
	<h2>&#187; <?php echo  $US['apsetup-head']?></h2>
	<h3><?php echo  $US['apsetup-sub-0']?></h3>
	<p>
	<?php echo  $US['apsetup-success']?>
	<br />
	<br />
	<?php echo  $US['apsetup-user']?>: <?php echo $_POST['apuser'];?>
	<br />
	<?php echo  $US['apsetup-pass']?>: <?php echo $_POST['appass'];?>
	</p>
	</div>

<?php
}

else {
	$tfile = fopen($usf_apanel_passwd, "r");

	$fcontents = fgets($tfile);
	$ucontents = explode(":", $fcontents);
?>

	<div id="main">
		<h2>&#187; <?php echo  $US['apsetup-head']?></h2>
		<h3><?php echo  $US['apsetup-sub-0']?></h3>

		<p><?php echo  $US['apsetup-text-0']?></p>
		<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
		<table width="100%">
		<tr>
		<td width="80">
		<p><?php echo  $US['apsetup-user']?></p>
		</td>
		<td>
		<input type="text" name="apuser" value="<?php echo $ucontents[0]?>" />
		</td>
		</tr>
		<tr>
		<td width="80">
		<p><?php echo  $US['apsetup-pass']?></p>
		</td>
		<td>
		<input type="text" name="appass" value="<?php echo $ucontents[1]?>" />
		</td>
		</tr>
		</table>
		<br />
		<input type="submit" name="submit" value="<?php echo  $US['apsetup-change']?>" />
		</form>
	</div>

<?php
	fclose($tfile);
}

// Footer
include_once "includes/footer.php";
?>