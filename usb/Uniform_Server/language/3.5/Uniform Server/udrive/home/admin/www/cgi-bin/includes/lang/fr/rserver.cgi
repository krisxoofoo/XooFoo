#!/usr/bin/perl

require header;
require secure;

print "
<div id=\"main\">
<h2>&#187; Red&eacute;marrage du serveur</h2>
<h3>Red&eacute;marrage...</h3>
<p>";

if ($ENV{'QUERY_STRING'}eq"M"){
  	$res=`net top mysql`;
  	$res=`net start mysql`;

  	print "<h2>Le service MySQL a &eacute;t&eacute; red&eacute;marr&eacute;.</h2>";
}

if ($ENV{'QUERY_STRING'}ne""){
  	print <<ENDDD;
  	<script language="JavaScript">
	<!--
  	window.location = '../../../../start.php';
  	// -->
  	</script>
  	</p>
  	</div>
ENDDD
}

if  ($ENV{'QUERY_STRING'}eq"A"){
  	print "<h2>Le service APACHE a &eacute;t&eacute; red&eacute;marr&eacute;.</h2>";

  	$res=`net stop Apache2`;
  	exec "net start Apache2";
  	exit;
}

print <<ENDDD;
Ce script va red&eacute;marrer les services.
<br />
Ceci peut prendre un peu de temps.
<br />
<br />
Vous &ecirc;tes certain --> <a href="$ENV{SCRIPT_NAME}?A">Red&eacute;marrage Service "Apache2"</a>
<br />
Vous &ecirc;tes certain --> <a href="$ENV{SCRIPT_NAME}?M">Red&eacute;marrage Service "MySQL"</a>
</p>
</div>
ENDDD

require footer;

exit;