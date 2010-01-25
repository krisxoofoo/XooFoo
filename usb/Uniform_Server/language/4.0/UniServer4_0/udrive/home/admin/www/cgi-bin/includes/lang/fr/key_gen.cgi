#!/usr/bin/perl

require header;
require secure;

$basedir = $ENV{'DOCUMENT_ROOT'};
$root= substr($basedir, 0, -3)."plugins/key_cert_gen/Run.bat";

`start $root`;

print <<ENDDD;
<div id="main">
<h2>&#187; G&eacute;n&eacute;ration compl&egrave;te du certificat et de la cl&eacute;</h2>
<p>Localisation du Certificat :<br />\\usr\\local\\apache2\\conf\\ssl.crt\\server.crt</p>
<p>Localisation de la cl&eacute; :<br />\\usr\\local\\apache2\\conf\\ssl.key\\server.key</p>
<br />
</div>
ENDDD

require footer;
exit;
