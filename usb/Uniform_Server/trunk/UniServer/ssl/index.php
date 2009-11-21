<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Uniform Server <?php
$root= substr($_SERVER["DOCUMENT_ROOT"],0,-4);
include "$root\home\admin\www\includes\.version"; 
?></title>
<meta name="Description" content="Uniform Server 5.4-Nano." />
<meta name="Keywords" content="Uniform Server, MPG, Mike, Ric, UniServer, Olajide" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>
<body>
<div id="wrap">
  <div id="header"><a href="http://www.uniformserver.com"><img src="images/logo.jpg" align="left" alt="Uniform Server" /></a>
    <h3 style="line-height: 18px; margin-left: 5px;" align="left">
      Uniform Server <?php include "$root\home\admin\www\includes\.version"; ?> <br />
      Apache 2.2.14 <br />
      MySQL 5.1.41 <br />
      PHP 5.3.1 <br />
      SSL Enabled <br />
    </h3>
  </div>

<?php
// Get Apache port number
$file = fopen("$root\usr\local\apache2\conf\httpd.conf", "r") or exit("Unable to open file!");

while(!feof($file)){
 $line = fgets($file);                         // Get line
 if (preg_match('/^Listen/', $line)) {
   $tempArray = explode(" ",$line);            // Split at space 
   $tempArray[1]= ltrim( $tempArray[1], " " ); // clean left
   $tempArray[1]= rtrim( $tempArray[1], " " ); // clean right
   break;
 }
}
fclose($file);
// END Get SSL port number
?>

  <div id="menu">
  <a href="http://localhost:<?php echo $tempArray[1];?>/apanel/">Server Administration</a> - 
  <a href="http://localhost:<?php echo  $tempArray[1];?>/">Back to Non-Secure</a></div>
  <div id="content">
    <h2>Welcome to Uniform Server</h2>
    <p>Welcome to the Uniform Server default start page. This page and every other file are being served from the main server root folder, "/ssl/". <br /> Additional support for 5-Nano can be found on the <a target="_1" href="http://wiki.uniformserver.com/index.php/Category:Uniform_Server_5.0-Nano">Wiki</a>.</p>
    <p>&nbsp;</p>
    <h2>Server Specifications</h2>
 <table>
   <tr valign="top">
   <td>
    <ul>
      <li> Apache 2.2.14</li>
      <li> MySQL 5.1.41-community</li>
      <li> PHP 5.3.1</li>
      <li> phpMyAdmin  3.2.3</li>
      <li> ActivePerl 5.10.0.1005 - Plugin</li>
      <li> ActivePerl 5.10.0.1006 - Plugin</li>
      <li> UniTray</li>
    </ul>
   </td>
   <td>
     &nbsp;&nbsp;&nbsp;&nbsp;
   </td>
   <td>
    <ul>
      <li> Cron - Scheduler</li>
      <li> DtDNS - IP address updater</li>
      <li> db_backup - Database back-up</li>
      <li> msmtp - Mail client for PHP  </li>
    </ul>
   </td>
   </tr>
  </table>
  </div>
  <div id="divider"> <a target="_1" href="http://www.uniformserver.com">Uniform Server</a> | <a target="_1" href="http://sourceforge.net/project/showfiles.php?group_id=53691&amp;package_id=48193">Download</a> | <a target="_1" href="http://blog.uniformserver.com">Blog</a> | <a target="_1" href="http://wiki.uniformserver.com/index.php/Main_Page">Wiki</a> | <a target="_1" href="http://forum.uniformserver.com">Support Forum</a> </div>
  <br>
  <p>The Uniform Server is a WAMP package that allows you to run a server on any XP or Vista Windows OS based computer. It is small and mobile to download or move around and can also be used or setup as a production/live server. Developers also use The Uniform Server to test their applications made with either PHP, MySQL, Perl, or the Apache HTTPd Server.</p>
  <p>&nbsp;</p>
  <div id="divider">Developed By <a href="http://www.uniformserver.com/">The Uniform Server Development Team</a></div>
</div>
</div>
</body>
</html>
