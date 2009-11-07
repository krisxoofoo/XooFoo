<?php
/*
#############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: Restore MySQL password and default values.
#############################################################################
*/
setcookie('phpMyAdmin', 'FALSE', true, '/apanel/phpMyAdmin/', false, 0); // reset cookie
// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("$us_apanel/includes/.lang").".php";
include_once "includes/header.php";
include_once "includes/secure.php";
include_once "$usf_con_functions";


$file_name = basename(__FILE__);                   // This scripts name

if (@$_POST['Restore_confirm']==$US['mysql-confirm-button']){ // User clicked restore
    $cmd1= 'start ';
    $cmd2= $us_php.'/php-win.exe '.$us_con.'/restore_mysql_password/restore_mysql_password.php'; // Plugins script
    $cmd=$cmd1.$cmd2;
    exec($cmd,$dummy,$return); // Run restore script 

    print "<div id=\"main\">";
    print "<h2>&#187; ".$US['mysql-head1']."</h2>";
    print "<h3>".$US['mysql-head3']."</h3>";
    print "<p>".$US['mysql-txt2']."</p>";
    print "</div>";
}

else{
// Introduction 
  print "<div id=\"main\">";
  print "<h2>&#187; ".$US['mysql-head1']."</h2>";
  print "<h3>".$US['mysql-head2']."</h3>";
  print "<p>".$US['mysql-txt1']."</p>";

  print '<form name="form" action="'.$file_name.'" method="post">';
  print '<input type="submit" name="Restore_confirm" value="'.$US['mysql-confirm-button'].'"></font>';
  print "</form>";
  print "</div>";
}

include_once "includes/footer.php";
?>