<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Uniform Server <?php
$root= substr($_SERVER["DOCUMENT_ROOT"],0,-4);
include "$root\home\admin\www\includes\.version"; 
?></title>
<meta name="Description" content="Uniform Server 4.0-Mona." />
<meta name="Keywords" content="Uniform Server, MPG, Mike, Ric, UniServer, Olajide" />
<meta http-equiv="Content-Type" content="text/html" />
<style type="text/css">
<!--
body {
font-family: "Lucida Grande", "Lucida Unicode", Arial, Verdana, sans-serif;
font-size: 10px;
background-color: #4F4F97;
}
a {text-decoration:none;}
a:hover { color:silver; text-transform:uppercase;}
h3 {font-size:1.4em; color:silver;text-shadow: 2px 2px 3px #aaa;}
li {padding-bottom:1em;}
.text1 {font-size: 1.4em;color: White;text-align : left;}
li {list-style:none;}
img {border:0;}
#logo {margin-top:4em; text-align:center;}
#directories {margin:3em auto; width:500px;}
#directories1 {margin:3em auto; width:500px; text-align:center;}
#tools {margin:2em auto; width:500px;}
#tools li {
 	padding-left: 		32px;
 	background-image: 	url(images/component.png);
 	background-repeat: 	no-repeat;
 	background-position: 	left;
 	background-color: 	inherit;
	text-shadow: 2px 2px 3px #aaa;
}
.directories {
	display:block;
	margin-left:			38px;
	padding-left: 		32px;
 	background-image: 	url(images/Websites.png);
 	background-repeat: 	no-repeat;
 	background-position: 	top left;
 	background-color: 	inherit;
	padding-bottom:		1em;
	text-shadow: 2px 2px 3px #aaa;
}
-->
</style>
</head>

<body>
<div id="logo">
<a href="index.php" title="Index"><img src="images/logo.jpg"></a><br /><a href="http://labs.xoofoo.org" target="_blank" title="Labs XooFoo"><img src="/images/labs_logo_black.png"></a>
</div>

<div id="directories">
<h3>Root Directories - Dossiers &#224; la racine WWW</h3>
<?php
$rep=opendir('.');
$bAuMoinsUnRepertoire = false;
while ($file = readdir($rep)){
	if($file != '..' && $file !='.' && $file !=''){ 
		if (is_dir($file)){
			$bAuMoinsUnRepertoire = true;
			print("<div class='directories'><a href='$file/' class='text1'>$file</a></div>");
		}
	}
}
if ($bAuMoinsUnRepertoire == false) {
	print("<div id='directories1'>-&nbsp; No files &nbsp;-</div>");
}
closedir($rep);
clearstatcache();
?>
</div>

<div id="tools">
<h3>Tools - Outils</h3>
<ul><li><a class='text1' href="http://localhost/apanel/phpMyAdmin/" title="phpMyAdmin" target="_blank">phpMyAdmin</a></li>
<li><a class='text1' href="http://localhost/apanel/plugins/eaccelerator/control.php" title="Cpanel eAccelerator" target="_blank">Cpanel eAccelerator</a></li>
<li><a class='text1' href="http://localhost/apanel/phpinfo.php/" title="phpinfo" target="_blank">PhpInfo</a></li>
<li><a class='text1' href="http://localhost/apanel/" title="Cpanel Uniform Server" target="_blank">Cpanel Uniform server</a></li>
</ul>
</div>

</body>
</html>