<?php
/*
#############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: Generate server key and certificate.
#############################################################################
*/

// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("$us_apanel/includes/.lang").".php";
include_once "includes/header.php";
include_once "includes/secure.php";
include_once "$usf_con_functions";

$file_name = basename(__FILE__);                   // This scripts name

if (@$_POST['Generate_confirm']==$US['cert-confirm-button']){ // User clicked generate

  if(get_apache_tracker() == "service"){            // Is Apache running as a service
                                                    // yes: Running as service
    print "<div id=\"main\">";
    print "<h2>&#187; ".$US['cert-head1']."</h2>";
    print "<h3>".$US['cert-head3']."</h3>";
    print "<p>".$US['cert-txt2']."</p>";
    print "<p>$us_con/key_cert_gen/Run.bat</p>";
    print "<p>".$US['cert-txt3']."</p>";
    print "</div>";
  }
  else{                                             // no: standard program

    $cmd1= 'start ';
    $cmd2= $us_con.'/key_cert_gen/Run.bat';        // Plugins script
    $cmd=$cmd1.$cmd2;
    exec($cmd,$dummy,$return);                     // Run command 

    print "<div id=\"main\">";
    print "<h2>&#187; ".$US['cert-head1']."</h2>";
    print "<h3>".$US['cert-head4']."</h3>";

    print "<p>".$US['cert-txt4']."</p>";
    print "<p>$us_apache/conf/ssl.crt/server.crt</p>";
    print "<p>".$US['cert-txt5']."</p>";
    print "<p>$us_apache/conf/ssl.key/server.key</p>";
    print "</div>";
  }
}

else{
// Introduction 
  print "<div id=\"main\">";
  print "<h2>&#187; ".$US['cert-head1']."</h2>";
  print "<h3>".$US['cert-head2']."</h3>";
  print "<p>".$US['cert-txt1']."</p>";

  print '<form name="form" action="'.$file_name.'" method="post">';
  print '<input type="submit" name="Generate_confirm" value="'.$US['cert-confirm-button'].'"></font>';
  print "</form>";
  print "</div>";
}
include_once "includes/footer.php";
?>
