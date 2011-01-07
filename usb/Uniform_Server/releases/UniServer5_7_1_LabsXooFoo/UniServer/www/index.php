<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Uniform Server <?php
$root= substr($_SERVER["DOCUMENT_ROOT"],0,-4);
include "$root\home\admin\www\includes\.version"; 
?></title>
<meta name="Description" content="Uniform Server 5.7.1-Nano modified Labs.XooFoo." />
<meta name="Keywords" content="Uniform Server, MPG, Mike, Ric, UniServer, Olajide" />
<meta http-equiv="Content-Type" content="text/html" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
<div id="logo">
	<a class="logo1" href="http://www.uniformserver.com/" title="Uniform Server Website"><img src="images/logo.jpg" /></a>
	<a class="logo2" href="http://labs.xoofoo.org" target="_blank" title="Labs XooFoo Website"><img src="/images/labs_logo_black.png" /></a>
</div>

<div id="directories">
<h3>Root Directories - Dossiers à la racine WWW</h3>
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
	<ul style="width:48%; float:left;">
		<li><a class="text1" href="http://localhost/apanel/" title="Cpanel Uniform Server" target="_blank">Cpanel Uniform server</a></li>
		<li><a class="text1" href="http://localhost/apanel/phpMyAdmin/" title="phpMyAdmin" target="_blank">PhpMyAdmin</a></li>
		<li><a class="text1" href="http://localhost/apanel/msd/" title="MySqlDumper" target="_blank">MySqlDumper </a><em>( root and root)</em></li>
		<li><a class="text1" href="http://localhost/apanel/plugins/eaccelerator/control.php" title="Cpanel eAccelerator" target="_blank">Cpanel eAccelerator</a></li>
	</ul>
	<ul style="width:48%; float:right;">
		<li><a class="text1" href="http://localhost/apanel/plugins/apc/apc.php" title="APC Cache Monitor" target="_blank">APC Monitor </a><em>( root and root)</em></li>
		<li><a class="text1" href="http://localhost/apanel/plugins/memcache/memcache.php" title="Memcache Monitor" target="_blank">Memcache Monitor </a><em>( root and root)</em></li>
		<li><a class="text1" href="http://localhost/apanel/phpinfo.php/" title="phpinfo" target="_blank">PhpInfo</a></li>
		<li><a class="text1" href="http://localhost/apanel/plugins/mysqlinfo/mysql_info.php" title="MySQLinfos" target="_blank">MySQL Infos </a><em>( root and root)</em></li>
	</ul>
</div>

</body>
</html>