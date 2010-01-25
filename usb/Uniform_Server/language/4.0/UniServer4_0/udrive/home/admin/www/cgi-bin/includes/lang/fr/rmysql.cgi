#!/usr/bin/perl

require header;
require secure;

print "
<div id=\"main\">
<h2>&#187; D&eacute,marage MySQL</h2>
<h3>Lancer MySQL</h3>
<p>";

&check_mysql;
if ($run) {
  	if ($ENV{'QUERY_STRING'}eq"F"){
		&start_mysql;
		print "Le serveur MySQL a &eacute;t&eacute; forc&eacute; de d&eacute;marrer.";
		print "<br />";
  	}

  	else {
		print <<ENDDD;
		Le serveur MySQL &eacute;tait en fonctionnement.<br />Mais si vous pensez que ceci est &eacute;trange, cliquez sur ce <a href="$ENV{SCRIPT_NAME}?F">lien</a><br /></p>
 		</div>
ENDDD
  	}
} 

else {
  	print <<ENDDD;
  	Le serveur MySQL est d&eacute;marr&eacute;.</p>
  	</div>
ENDDD
  	require footer;
  	&start_mysql;
}

require footer;

exit;

sub check_mysql(){
 	$res = system "\\home\\admin\\program\\pskill.exe", "mysqld-opt.exe";
 	if ($res == 0){$run=1} 
	else {$run=0}
}

sub start_mysql(){
 	exec "/usr/local/mysql/bin/mysqld-opt.exe --defaults-file=/usr/local/mysql/my.cnf\"";
}