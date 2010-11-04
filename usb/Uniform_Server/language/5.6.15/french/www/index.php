<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Uniform Server <?php
$root= substr($_SERVER["DOCUMENT_ROOT"],0,-4);
include "$root\home\admin\www\includes\.version"; 
?></title>
<meta name="Description" content="Uniform Server 5.6.15-Nano." />
<meta name="Keywords" content="Uniform Server, MPG, Mike, Ric, UniServer, Olajide" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>
<body>

<div id="wrap">
  <div id="header" style="height : 80px;"><a href="http://www.uniformserver.com"><img src="images/logo.jpg" align="left" alt="Uniform Server" /></a>
    <h3 style="line-height: 18px; margin-left: 5px;" align="left">
      Uniform Server <?php include "$root\home\admin\www\includes\.version"; ?> <br />
    </h3>
    <h2 style="text-align:center; font-size:20px; line-height: 20px; margin-left: 5px;margin-top: 5px;" align="left">
      Translation <br />
      By: Kris 
    </h2>
  </div>

<?php
// Get SSL port number
$file = fopen("$root\usr\local\apache2\conf\ssl.conf", "r") or exit("Unable to open file!");

while(!feof($file)){
 $line = fgets($file);                         // Get line
 if (stristr($line,"Listen")){                 // Search for string
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
  <a href="http://<?php echo  getenv("HTTP_HOST");?>/apanel/">Administration du serveur</a>
<?php 
   $filename = $root.'/usr/local/apache2/conf/ssl.crt/server.crt';
   if (file_exists($filename)) { 
     print " - <a href=\"https://localhost:".$tempArray[1]."\">View Secure Pages</a>"; 
   }
   else { 
    print ""; 
   } 
   ?>
</div>

<div align="center" ;>
<img src="images/translation.gif" alt="Uniform Server" width="500" height="170" alt="Translation" />
</div>

  <div id="content" style="margin-top: 0px; padding-top: 0px;"  >
    <h2>Bienvenue sur Uniform Server</h2>
    <p>Bienvenue sur la page de d&#233;marrage par d&#233;faut d&#39;Uniform Server.<br />Cette page et tout autre fichier se trouvent &#224; partir du dossier racine du serveur principal &#34;/www/&#34;. Une aide compl&#233;mentaire sur 5.6.x-Nano peut-&#234;tre trouv&#233;e sur le <a target="_1" href="http://wiki.uniformserver.com/index.php/Category:Uniform_Server_5.3-Nano">Wiki</a>.</p>


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
