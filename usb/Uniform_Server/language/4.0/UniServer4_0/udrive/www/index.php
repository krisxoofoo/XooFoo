<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- 	@translation     kris_f (http://www.xoofoo.org)
	@specification   _LANGCODE: fr
	@specification   _CHARSET: UTF-8
	 @version         $Id$
-->

<title>Uniform Server <?php
$root= substr($_SERVER["DOCUMENT_ROOT"],0,-4);
include "$root\home\admin\www\includes\.version"; 
?></title>
<meta name="Description" content="Uniform Server 4.0-Mona." />
<meta name="Keywords" content="Uniform Server, MPG, Mike, Ric, UniServer, Olajide" />
<meta http-equiv="Content-Type" content="text/html" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>
<body>


<div id="wrap">
  <div id="header"><a href="http://www.uniformserver.com"><img src="images/logo.jpg" align="left" alt="Uniform Server" /></a>
    <h3 style="line-height: 18px; margin-left: 5px;" align="left">
      Uniform Server <?php include "$root\home\admin\www\includes\.version"; ?> <br />
      Apache 2.2.11 <br />
      MySQL 5.1.30 <br />
      PHP 5.2.8 <br />
      UniController 2.0 <br />
    </h3>
  </div>

  <div id="menu">
  <a href="http://localhost/apanel/">Administration Serveur</a>
<?php 
   $filename = $root.'/usr/local/apache2/conf/ssl.crt/server.crt';
   if (file_exists($filename)) { 
     print " - <a href=\"https://localhost\">Visualiser les pages s&eacute;curis&eacute;es</a>"; 
   }
   else { 
    print ""; 
   } 
   ?>
</div>

  <div id="content">
    <h2>Bienvenue sur Uniform Server</h2>
    <p>Bienvenue sur la page par d&eacute;faut de d&eacute;marrage d&#39;Uniform Server. Cette page et tous les autres fichiers sont accessibles &agrave; partir du dossier racine du serveur : "/www/". <br /> Un Support additionnel peut &ecirc;tre trouv&eacute; sur ce <a href="http://wiki.uniformserver.com">Wiki</a>.</p>
    <p>&nbsp;</p>
    <h2>Sp&eacute;cifications Serveur</h2>
    <ul>
      <li> Apache 2.2.11</li>
      <li> MySQL 5.1.30-community</li>
      <li> PHP 5.2.8</li>
      <li> phpMyBackupPro 2.1</li>
      <li> phpMyAdmin  3.0.1.1</li>
      <li> ActivePerl 5,10,0,1003</li>
      <li> UniController 2.0</li>
    </ul>

  </div>
  <div id="divider"> <a target="_1" href="http://www.uniformserver.com" title="Site Web Uniform Server">Uniform Server</a> | <a target="_1" href="http://sourceforge.net/project/showfiles.php?group_id=53691&amp;package_id=48193" title="Espace de t&eacute;l&eacute;chargement SourceForge">T&eacute;l&eacute;chargement</a> | <a target="_1" href="http://blog.uniformserver.com" title="Visitez le Blog">Blog</a> | <a target="_1" href="http://wiki.uniformserver.com/index.php/Main_Page" title="Parcourir le Wiki">Wiki</a> | <a target="_1" href="http://forum.uniformserver.com" title="Parcourir les forums de supports">Forum de Support</a> </div>
  <br>
  <p>Uniform Server est un serveur WAMP qui vous permet de faire tourner un serveur sur un ordinateur &eacute;quip&eacute; de Windows XP ou Vista. Il est l&eacute;ger et mobile et peut &eacute;galement &ecirc;tre utilis&eacute; comme serveur de d&eacute;veloppement en local ou sur un serveur en production. Les d&eacute;veloppeurs utilisent fr&eacute;quemment Uniform Server comme environnement de tests de leurs applications d&eacute;velopp&eacute;es pour PHP, MySQL, Perl, Apache ou un serveur HTTPD.</p>
  <p>&nbsp;</p>
  <div id="divider">D&eacute;velopp&eacute; par <a href="http://www.uniformserver.com/" title="Visitez le site internet Uniform Server">The Uniform Server Development Team</a></div>
</div>
</div>
</body>
</html>
