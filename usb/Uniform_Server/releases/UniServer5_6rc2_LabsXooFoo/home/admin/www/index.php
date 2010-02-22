<?php
/*
####################################################
# Name: The Uniform Server Admin Panel 2.0
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) 
# Web: http://www.uniformserver.com
####################################################
*/

// Includes
include_once "includes/config.inc.php";
include_once US_APANEL_WWW."/includes/lang/".file_get_contents("$us_apanel/includes/.lang").".php"; 

if(file_get_contents("$us_apanel/includes/.lang") == "")
{
	header("Location: lang.php?en");	
	exit();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title><?php echo  $US['title']?> <?php include('includes/.version'); ?></title>
<meta name="author" content="Olajide Olaolorun" />
<meta http-equiv="page-enter" content="blendtrans(duration=0.1)" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="<?php echo  $apanel; ?>/js/main.js"></script>
<link href="<?php echo  $apanel; ?>/css/main.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="<?php echo  $apanel; ?>/favicon.ico" />
	  <link title="Homepage" href="./index.php" rel="top" />
	  <link title="Up" href="./index.php" rel="up" />
 	  <link title="First page" href="./index.php" rel="first" />
	  <link title="Previous page" href="./index.php" rel="previous" />
	  <link title="Next page" href="./index.php" rel="next" />
	  <link title="Last page" href="./index.php" rel="last" />
	  <link title="Table of contents" href="./index.php" rel="toc" />
	  <link title="Site map" href="./index.php" rel="index" />
</head>


<frameset rows="100,*" marginwidth="0" marginheight="0" frameborder="0" border="0" borderwidth="0">
    <frame src="header.php" name="header" scrolling="no" noresize="noresize" id="header" />
<frameset cols="225,*" marginwidth="0" marginheight="0" frameborder="0" border="0" borderwidth="0">
    <frame src="navigation.php" name="navigation" scrolling="auto" noresize="noresize" id="navigation" />
    <frame src="start.php" name="content" scrolling="auto" noresize="noresize" id="content" />
</frameset>
</frameset>
 
<noframes> 
<body bgcolor="#4F4F97">
<h1>Frame Support Needed</h1>
</body>
</noframes>
</html>
