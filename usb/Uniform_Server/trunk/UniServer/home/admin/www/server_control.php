<?php
/*
###############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: Server control when Apache and MySQL are run as a standard program.
###############################################################################
*/
setcookie('phpMyAdmin', 'FALSE', true, '/apanel/phpMyAdmin/', false, 0); // reset cookie

// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("$us_apanel/includes/.lang").".php";
include_once "$usf_con_functions";
include_once "includes/header.php";
include_once "includes/secure.php";

$file_name = basename(__FILE__); // This scripts name required for links

print "<div id=\"main\">";       // Required by all sections

//=== Stop Servers ============================================================

if(@$_GET['sel']=='stop_servers'){
// Display stop servers confirmation
  print "<h2>&#187; ".$US['server-stop-head1']."</h2>";
  print "<h3>".$US['server-stop-head1']."...</h3>";
  print "<p>".$US['server-stop-txt1']."</p>";

  print '<form name="form" action="'.$file_name.'" method="post">';
  print '<input type="submit" name="Stop_confirm" value="'.$US['server-confirm-button'].'"></font>';
  print "</form>";
  print "</div>";
}

if(@$_POST['Stop_confirm']==$US['server-confirm-button']){
// Confirmed by user stop servers
  print "<h2>&#187; ".$US['server-stop-head1']."</h2>";
  print "<h3>".$US['server-stop-head2']."...</h3>";
  print "<p>".$US['server-stop-txt2']."</p>";
  print "<p>".$US['server-stop-txt3']."</p>";

  set_mysql_tracker('free');  // Update tracker before stopping Apache
  stop_mysql();               // Stop MySQL server
  set_apache_tracker('free'); // Update tracker before stopping Apache
  stop_apache();              // Stop Apache server
  print "</div>";             // This keeps it clean
}                              

//=== Start MySQL server ======================================================
if(@$_GET['sel']=='start_mysql'){
// Display MySQL server start confirmation

  print "<h2>&#187; ".$US['start-mysql-head1']."</h2>";
  print "<h3>".$US['start-mysql-head1']."</h3>";
  print "<p>".$US['start-mysql-txt1']."</p>";

  print '<form name="form" action="'.$file_name.'" method="post">';
  print '<input type="submit" name="start_mysql_confirm" value="'.$US['start-mysql-button'].'"></font>';
  print "</form>";
  print "</div>";
}

if(@$_POST['start_mysql_confirm']==$US['start-mysql-button']){
//=== User confirmed MySQL server start

  print "<h2>&#187; ".$US['start-mysql-head1']."</h2>";
  print "<h3>".$US['start-mysql-head2']."...</h3>";

  if(mysql_running()){                            // Is MySQL running
    print "<p>".$US['start-mysql-txt2']."</p>";   // yes: Inform user already is running 
  }
  else{                                           // no: Server not running
    start_mysql();                                //     start server 
    print "<p>".$US['start-mysql-txt3']."</p>";   //     inform user
  }
  print "</div>";
}
//=============================================================================

//=== Stop MySQL server =======================================================
if(@$_GET['sel']=='stop_mysql'){
// Display MySQL server stop confirmation
  print "<h2>&#187; ".$US['stop-mysql-head1']."</h2>";
  print "<h3>".$US['stop-mysql-head1']."</h3>";
  print "<p>".$US['stop-mysql-txt1']."</p>";

  print '<form name="form" action="'.$file_name.'" method="post">';
  print '<input type="submit" name="stop_mysql_confirm" value="'.$US['stop-mysql-button'].'"></font>';
  print "</form>";
  print "</div>";
}

if(@$_POST['stop_mysql_confirm']==$US['stop-mysql-button']){
//=== User confirmed MySQL server stop
  print "<h2>&#187; ".$US['stop-mysql-head1']."</h2>";
  print "<h3>".$US['stop-mysql-head2']."...</h3>";

  if(!mysql_running()){                         // Is MySQL stopped
    print "<p>".$US['stop-mysql-txt3']."</p>";  // yes: Inform user already stopped 
  }

  else{                                         // no: Running
    stop_mysql();                               // start MySQL server
    print "<p>".$US['stop-mysql-txt2']."</p>";  // inform user server stopped
  }
  print "</div>";
}
//=============================================================================

include_once "includes/footer.php";
?>