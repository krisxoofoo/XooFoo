﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
      MySQL 5.1.40 <br />
      PHP 5.3.1RC3.0 <br />
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
  <a href="http://localhost:<?php echo $tempArray[1];?>/apanel/">Administration du serveur</a> - 
  <a href="http://localhost:<?php echo  $tempArray[1];?>/">	Revenir en mode non-s&#233;curis&#233;</a></div>
  <div id="content">
    <h2>Bienvenue sur Uniform Server</h2>
    <p>Bienvenue sur la page de d&#233;marrage par d&#233;faut d&#39;Uniform Server.<br />Cette page et tout autre fichier se trouvent &#224; partir du dossier racine du serveur principal &#34;/ssl/&#34;.<br />Une aide compl&#233;mentaire sur 5-Nano peut-&#234;tre trouv&#233;e sur le <a target="_1" href="http://wiki.uniformserver.com/index.php/Category:Uniform_Server_5.0-Nano">Wiki</a>.</p>
    <p>&nbsp;</p>
    <h2>Sp&#233;cifications du serveur</h2>
 <table>
   <tr valign="top">
   <td>
    <ul>
      <li> Apache 2.2.14</li>
      <li> MySQL 5.1.40-community</li>
      <li> PHP 5.3.1RC3</li>
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
      <li> Cron - Planification</li>
      <li> DtDNS - Mise &#224; jour adresse IP</li>
      <li> db_backup - Sauvegarde Base de donn&#233;es</li>
      <li> msmtp - Client Mail pour PHP  </li>
    </ul>
   </td>
   </tr>
  </table>
  </div>
  <div id="divider"> <a target="_1" href="http://www.uniformserver.com">Uniform Server</a> | <a target="_1" href="http://sourceforge.net/project/showfiles.php?group_id=53691&amp;package_id=48193">T&#233;l&#233;chargement</a> | <a target="_1" href="http://blog.uniformserver.com">Blog</a> | <a target="_1" href="http://wiki.uniformserver.com/index.php/Main_Page">Wiki</a> | <a target="_1" href="http://forum.uniformserver.com">Forum de Support</a> </div>
  <br />
  <p>Uniform Server est un package WAMP qui permet de faire tourner un serveur sous Windows XP ou Vista. Il est l&#233;ger, mobile, facile &#224; t&#233;l&#233;charger ou &#224; d&#233;placer, et peut &#233;galement &#234;tre utilis&#233; comme serveur de production. Les d&#233;veloppeurs utilisent &#233;galement Uniform Server pour tester leurs applications r&#233;alis&#233;es sous PHP, MySQL, Perl, ou le serveur httpd Apache.</p>
  <p>&nbsp;</p>
  <div id="divider">D&#233;velopp&#233; par <a href="http://www.uniformserver.com/" target="_1">The Uniform Server Development Team</a></div>
</div>
</div>
</body>
</html>
