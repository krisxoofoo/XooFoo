<?php
/*
#############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: Copies the content of cgi-bin to a new folder cgi-bin-unix.
#        All files have cr (0D) removed to leave nl (0A) Unix format
#############################################################################
*/
// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("$us_apanel/includes/.lang").".php";
include_once "includes/header.php";
include_once "includes/secure.php";
include_once "$usf_con_functions";


$file_name = basename(__FILE__);                            // This scripts name

if (@$_POST['Convert_confirm']==$US['w2u-convert-button']){ // User clicked convert
  if(is_dir($base_f.'/cgi-bin-unix')){                      // Does folder exist
    recursive_dir_delete($base_f.'/cgi-bin-unix');          // yes: Left over from previous conversion
  }                                                         //      delete it and its content

  recursive_copy($base_f.'/cgi-bin',$base_f.'/cgi-bin-unix'); // Copy folder tree before conversion  

  $start_dir = $base_f.'/cgi-bin-unix';                     // starting folder
  $file_type = '/(\.pl|\.cgi)/';                            // list file types to convert
  $search_str  = '/\r/' ;                                   // string to search for
  $replace_str = "" ;                                       // replace string              
  recursive_search_replace($start_dir,$file_type,$search_str,$replace_str); // replace

  print "<div id=\"main\">";
  print "<h2>&#187; ".$US['w2u-head1']."</h2>";
  print "<h3>".$US['w2u-head3']."...</h3>";
  print "<p>".$US['w2u-txt3']."</p>";
}

else{                                                         // no: print intro
// Introduction 
  print "<div id=\"main\">";
  print "<h2>&#187; ".$US['w2u-head1']."</h2>";
  print "<h3>".$US['w2u-head2']."...</h3>";
  print "<p>".$US['w2u-txt1']."</p>";
  print "<p>".$US['w2u-txt2']."</p>";

  print '<form name="form" action="'.$file_name.'" method="post">';
  print '<input type="submit" name="Convert_confirm" value="'.$US['w2u-convert-button'].'"></font>';
  print "</form>";
  print "</div>";
}
include_once "includes/footer.php";
?>