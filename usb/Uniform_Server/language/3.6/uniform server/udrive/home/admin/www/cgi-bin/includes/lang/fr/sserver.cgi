#!/usr/bin/perl

require header;
require secure;

print <<ENDDD;
<div id="main">
<h2>&#187; Arr&ecirc;t du Serveur</h2>
<h3>Arr&ecirc;ter compl&eacutetement le serveur</h3>
<p>Le serveur est maintenant totalement arr&ecirc;t&eacute;.<br /><br />Merci d&#39;utiliser <a href="http://www.uniformserver.com/">Uniform Server</a>.<br /><br /></p>
</div>
ENDDD

$res = system "\\home\\admin\\program\\pskill.exe", "mysqld-opt.exe";

if ($res == 0){
  	open (PASS,"../../../../mysql_password");
  	$password=<PASS>;
  	close (PASS);
  	system "/home/admin/program/uniserv.exe \"\\usr\\local\\mysql\\bin\\mysqladmin.exe --user=root --password=$password shutdown\"";
}

unlink("../usr/local/apache2/logs/httpd.pid");
system "del \\usr\\local\\apache2\\logs\\httpd.pid";

exec "\\home\\admin\\program\\pskill Apache.exe c";

require footer;
exit;
