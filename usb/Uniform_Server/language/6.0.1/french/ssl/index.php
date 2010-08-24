<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Uniform Server <?php
$root= substr($_SERVER["DOCUMENT_ROOT"],0,-4);
include "$root\home\admin\www\includes\.version"; 
?></title>
<meta name="Description" content="Uniform Server 6.0.1-Carbo." />
<meta name="Keywords" content="Uniform Server, MPG, Mike, Ric, UniServer, Olajide" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>
<body>
<div id="wrap">
  <div id="header"><a href="http://www.uniformserver.com" title=""><img src="images/logo.jpg" align="left" alt="Uniform Server" /></a>
    <h3 style="line-height: 18px; margin-left: 5px;" align="left">
      Uniform Server <?php include "$root\home\admin\www\includes\.version"; ?> <br />
      Apache 2.2.16 <br />
      MySQL 5.1.49 <br />
      PHP 5.3.3 <br />
      SSL Activé <br />
    </h3>
  </div>

<?php
// Get Apache port number
$file = fopen("$root\usr\local\apache2\conf\httpd.conf", "r") or exit("Impossibilité d'ouvrir le fichier !");

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
  <a href="http://localhost:<?php echo $tempArray[1];?>/apanel/">Administration du Serveur</a> - 
  <a href="http://localhost:<?php echo  $tempArray[1];?>/">Revenir en mode non sécurisé</a></div>
  <div id="content">
    <h2>Bienvenue sur Uniform Server</h2>
    <p>Bienvenue sur la page de démarrage par défaut d'Uniform Server.<br />Cette page et tout autre fichier se trouvent à partir du dossier racine du serveur principal "/ssl/". Une aide complémentaire sur 6.x-Carbo peut-être trouvée sur le <a target="_1" href="http://wiki.uniformserver.com/index.php/Category:Uniform_Server_5.3-Nano" title="Wiki Uniform Server Carbo">Wiki</a>.</p>
    <p>&nbsp;</p>
    <h2>Configuration du Serveur</h2>
 <table>
   <tr valign="top">
   <td>
    <ul>
      <li> Apache 2.2.16</li>
      <li> MySQL 5.1.49-community</li>
      <li> PHP 5.3.3</li>
      <li> eAccelerator 1.0-snv425</li>
      <li> phpMyAdmin  3.3.5</li>
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
      <li> Cron - Planificateur de sauvegarde</li>
      <li> DtDNS - Actualisation d'adresse IP</li>
      <li> db_backup - Sauvegarde de base de données</li>
      <li> msmtp - Client Mail pour PHP  </li>
    </ul>
   </td>
   </tr>
  </table>
  </div>
  <div id="divider"> <a target="_1" href="http://www.uniformserver.com" title="Site Officiel Uniform Server">Uniform Server</a> | <a target="_1" href="http://sourceforge.net/project/showfiles.php?group_id=53691&amp;package_id=48193" title="Télécharger Uniform Server">Téléchargement</a> | <a target="_1" href="http://blog.uniformserver.com" title="Blog Uniform Server">Blog</a> | <a target="_1" href="http://wiki.uniformserver.com/index.php/Main_Page" title="Wiki Uniform Server">Wiki</a> | <a target="_1" href="http://forum.uniformserver.com" title="Forum de support Uniform Server">Forum de support</a> </div>
  <br />
  <p>Uniform Server est un package WAMP qui permet de faire tourner un serveur sous Windows XP, Vista et Seven. Il est léger, mobile, facile à télécharger ou à déplacer, et peut également être utilisé comme serveur de production. Les développeurs utilisent également Uniform Server pour tester leurs applications réalisées sous PHP, MySQL, Perl, ou le serveur Apache.</p>
  <p>&nbsp;</p>
  <div id="divider">Développé par "<a href="http://www.uniformserver.com/" title="Site Officiel Uniform Server">The Uniform Server Development Team</a>"</div>
</div>
</div>
</body>
</html>
