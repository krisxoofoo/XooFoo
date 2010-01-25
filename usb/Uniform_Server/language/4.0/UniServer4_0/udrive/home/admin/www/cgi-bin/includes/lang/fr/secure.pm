package secure;

# If you want to disable security check - comment the following lines with #.

if (($ENV{HTTP_REFERER}!~/^http[s]?:\/\/localhost\/apanel/)&&($ENV{HTTP_REFERER}!~/^http[s]?:\/\/127\.0\.0\.\d+\/apanel/)){
	print "
	<div id=\"main\">
	<h2>&#187; Alerte de S&eacute;curit&eacute; !</h2>
	<h3>Attaque possible</h3>
	<p>HTTP_REFERER n&#39;est pas localhost, mais '<strong>".$ENV{HTTP_REFERER}."</strong>'.<br /><br />Pour d&eacute;sactiver ce message, modifier le fichier : /home/admin/www/cgi-bin/includes/lang/fr/secure.pm</p>
	</div>"; 

require footer;

exit;
};

return 1;