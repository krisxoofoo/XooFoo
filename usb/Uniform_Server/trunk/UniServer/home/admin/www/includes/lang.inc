<h3><?php echo  $US['nav-langs']?></h3>

<?php
$default = file_get_contents("$us_apanel/includes/.lang");
?>

<table>
<form method="post" action="<?php echo 'lang.php' ?>" > 
<select name="language" style='width:110px;'>

<?php                                     // Build dropdown menu
$dir = "includes/lang/";                  // Language folder
if (is_dir($dir)) {                       // Does it exist
  $dirlist = opendir($dir);               // Yes: Save list of files to array
  while ($file = readdir($dirlist)){      // Iterate through list
    if ($file != '.' && $file != '..'){   // Skip if . or ..
      $name = explode(".",$file);         // Remove extension
      if ($name[0] == $default){          // Does it match default selection
       print "<option value=\"$name[0]\" selected> $name[0] </option> \n";
      }
      else{                               // No: Not selected
       print "<option value=\"$name[0]\"> $name[0] </option> \n";
      }
    }
  }// End While
}// End if
?>
<input type="submit" value="GO" STYLE="font-size:8pt; margin-left:6px">
</form>
</table>

