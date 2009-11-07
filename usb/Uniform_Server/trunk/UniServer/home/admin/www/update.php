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
?>

<div id="main">
<h2>&#187; <?php echo  $US['update-head']?></h2>
<h3><?php echo  $US['update-check']?></h3>
<p>
<?php
//-------------------------------------------------------------------- 

$fileUrl = "http://www.uniformserver.com/system/.version";

function fileUrl_exists($fileUrl){          // Function does Url exist
   $Headers = @get_headers($fileUrl);       // array of headers server response
   if (preg_match("|200|", $Headers[0])) {  // HTTP/1.1 200 OK
     return true;                           // file exists
   }
   else {
    return false;                           //  file does not exists
   }
}

if (!fileUrl_exists($fileUrl)) {            // does file exist
  echo  $US['update-notfound'];             // no: give up
  print "</div>";
  include_once "includes/footer.php";       // Footer
  exit;
}
else {                                      // yes: inform user
  $available = file ('http://www.uniformserver.com/system/.version');
}//else

$my = file ('includes/.version');

//--------------------------------------------------------------------
if (rtrim($my[0]) == rtrim($available[0])) {

?>
	<?php echo  $US['update-true']?>
<?php
}

else{
?>
	<?php echo  $US['update-false']?>
	<br />
	<br />
<?php
      echo "". $US['update-new'] .": $available[0]";
	echo "<br />";
      echo "". $US['update-yours'] .": $my[0]";
	echo "<br /><br />";
?>
	<?php echo  $US['update-get']?>
	<br />
	<a href="http://www.uniformserver.com/" target="_blank"><h2><?php echo  $US['nav-web']?></h2></a>
<?php
}
?>
</p>
</div>

<?php
// Footer
include_once "includes/footer.php";
?>