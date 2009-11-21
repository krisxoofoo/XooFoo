<?php
/*
#############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: Restarts services either Apache or MySQL.
#        Uses page refresh for Apache restart. 
#        If uninstall, stops services and removes them.
#############################################################################
*/

// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("$us_apanel/includes/.lang").".php";
include_once "includes/secure.php";
include_once "$usf_con_functions";


$file_name = basename(__FILE__);          // This scripts name required for link

$Apache_service = $us_apache_service_name;
$MySQL_service  = $us_mysql_service_name;
$Apache_exe     = get_apache_exe($us_apache_bin);
$Apache_port    = get_apache_port();

//=== User click Apache Confirm link ======================================================
// Restarting Apache service takes some time hence meta-tag page refresh. After changing
// server configuration a service restart is required, if a port change was made this must
// be reflected in the meta-tag.

// Rebuild host
if(preg_match("/(.*:)/", $_SERVER['HTTP_HOST'],$matches)){ // Is port included (discard)  
  $a= $matches[1].$Apache_port;                            // yes: add port 
}
else{                                                      // no:
   $a = $_SERVER['HTTP_HOST'].':'.$Apache_port;            // add : and port
}

if(@$_POST['Apache_confirm']==$US['service-confirm-button']){  // yes: Set page refresh timer
   $set_meta='<meta http-equiv="refresh" content="2;url=http://'.$a.'/apanel/services_control.php?sel=A2" />';
}
else{                                                         // no: Refresh not required
   $set_meta='';
}
//=== Page Header ==========================================================================
// Note: inserts refresh timer if Apache service restart confirmed.
$ptxt = <<<EOT
  <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
  <html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">
  <head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8 " />
  <meta name="author" content="Olajide Olaolorun" />
  <meta http-equiv="page-enter" content="blendtrans(duration=0.1)" />
  <meta http-equiv="Content-Type" content="text/html" />
  $set_meta 
  <link href="http://$a/apanel/css/main.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
EOT;
print $ptxt;

print "<div id=\"main\">";   // Required by all



//=== Restart Apache service ===================================================
if(@$_GET['sel']=='Apache'){
// Display Apache service restart confirmation
  print "<h2>&#187; ".$US['service-apache-head1']."</h2>";
  print "<h3>".$US['service-apache-head1']."</h3>";
  print "<p>".$US['service-apache-txt1']."</p>";
  print "<p>".$US['service-apache-txt2']."</p>";

  print '<form name="form" action="'.$file_name.'" method="post">';
  print '<input type="submit" name="Apache_confirm" value="'.$US['service-confirm-button'].'"></font>';
  print "</form>";
  print "</div>";
}

if(@$_POST['Apache_confirm']==$US['service-confirm-button']){
// Confirmed by user restart Apache service
  print "<h2>&#187; ".$US['service-apache-head1']."</h2>";
  print "<h3>".$US['service-apache-head2']."...</h3>";
  print "<p>".$US['service-apache-txt3']."</p>";
  print "<p>".$US['service-apache-txt4']."</p>";

  //=== Restart Apache services
  $cmd ="start $us_apache_bin/".get_apache_exe()." -k graceful";
  pclose(popen($cmd,'r'));                   // detatch and run command 
  print "</div>";
}

//=== User clicked the confirmation link.
// When the above page times out it calls this refresh page which forces
// a complete Apanel reload. If Apache ports had been changed links
// reflect this change. Hence a full index page reload. 

if (@$_GET['sel']=='A2'){                        // Apache service

  print "<script language=\"javascript\">";
  print "top.location.href = \"http://$a/apanel/index.php\";";
  print "</script>";

  print "</div>";
}

//=== Restart MySQL service ====================================================
if(@$_GET['sel']=='MySQL'){
// Display MySQL service restart confirmation
  print "<h2>&#187; ".$US['service-mysql-head1']."</h2>";
  print "<h3>".$US['service-mysql-head1']."</h3>";
  print "<p>".$US['service-mysql-txt1']."</p>";
  print "<p>".$US['service-mysql-txt2']."</p>";

  print '<form name="form" action="'.$file_name.'" method="post">';
  print '<input type="submit" name="Mysql_confirm" value="'.$US['service-confirm-button'].'"></font>';
  print "</form>";
  print "</div>";
}

if(@$_POST['Mysql_confirm']==$US['service-confirm-button']){
//=== User confirmed MySQL service restart
  print "<h2>&#187; ".$US['service-mysql-head1']."</h2>";
  print "<h3>".$US['service-mysql-head2']."...</h3>";
  print "<p>".$US['service-mysql-txt3']."</p>";

  $cmd = "net stop ".$MySQL_service;       // Stop service command 
  exec($cmd,$dummy,$return);               // Run command 

  $cmd = "net start ".$MySQL_service;      // Start service command 
  exec($cmd,$dummy,$return);               // Run command 
  print "</div>";
}
//==============================================================================
include_once "includes/footer.php";
?>