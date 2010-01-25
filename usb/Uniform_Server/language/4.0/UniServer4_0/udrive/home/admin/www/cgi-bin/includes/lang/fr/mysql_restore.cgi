#!/usr/bin/perl

require header;
require secure;

$basedir = $ENV{'DOCUMENT_ROOT'};
$root= substr($basedir, 0, -3)."plugins/restore_mysql_password/Run.bat";

`start $root`;

print <<ENDDD;
<div id="main">
<h2>&#187; Mot de passe MySQL restaur&eacute;.</h2>

<p>S&#39;il vous pla&icirc;t arr&ecirc;rer et red&eacute;marrer les serveurs</p>

<br />

</div>
ENDDD

require footer;
exit;
