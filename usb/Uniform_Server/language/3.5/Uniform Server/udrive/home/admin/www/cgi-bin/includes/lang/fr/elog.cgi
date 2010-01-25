#!/usr/bin/perl

##### ERROR LOG FILE LOCATION #####
# 
$logfile = "/usr/local/apache2/logs/error.log";
#
###################################

require header;
require secure;

print "
<div id=\"main\">
<h2>&#187; Visualisation des logs d\'erreurs</h2>
<h3>Affichage du fichier des logs d\'erreure</h3>
<p>";

open (LOG, "$logfile")|| die "Impossible d\'ouvrir le fichier !\n";
@log = <LOG>;
close (LOG);

@log=reverse(@log);
splice @log, 4096;

foreach $logs (@log) {
  	print "- $logs <br />";
}

print "
</p>
</div>";

require footer;

exit;
