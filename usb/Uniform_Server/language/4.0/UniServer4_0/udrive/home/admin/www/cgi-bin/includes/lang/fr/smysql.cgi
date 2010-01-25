#!/usr/bin/perl

require header;
require secure;

print "
<div id=\"main\">
<h2>&#187; Arr&ecirc;t de MySQL</h2>
<h3>Arr&ecirc;ter MySQL</h3>
<p>";

&check_mysql;
if ($run) {
  	&stop_mysql;
  	print "Serveur MySQL arr&ecirc;t&eacute;.<br>";
} 

else {
  	if ($ENV{'QUERY_STRING'}eq"F"){
		&stop_mysql;
		print "Serveur MySQL a &eacute;t&eacute; forc&eacute; d\'arr&ecirc;ter.";
		print "<br>";
  	} 

  	else {
		print <<ENDDD;
		Serveur MySQL n\'&eacute;tait pas d&eacute;marr&eacute;.<br />Mais si vous pensez que cela est &eacute;trange, cliquez sur ce <a href="$ENV{SCRIPT_NAME}?F">lien</a><br />
ENDDD
  	}
}

print <<ENDDD;
</p>
</div>
ENDDD

require footer;

exit;

sub check_mysql(){
 	$res = system "\\home\\admin\\program\\pskill.exe", "mysqld-opt.exe";
 	if ($res == 0){$run=1} 
	else {$run=0}
}
sub stop_mysql(){
  	open (PASS,"../../../../mysql_password");
  	$password=<PASS>;
  	close (PASS);
  	system "/home/admin/program/uniserv.exe \"\\usr\\local\\mysql\\bin\\mysqladmin.exe --user=root --password=$password shutdown\"";
}