<?
/*
####################################################################
# Name: The Uniform Server Language System Array 1.1
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) 
# Web: http://www.uniformserver.com
# French translation : Kris - http://www.xoofoo.org
####################################################################
*/

# Beta Feature, Currently For Debugging Only
#require_once 'array.php';

$US = array(
    	'title' => 'Uniform Server',
	'apanel' => 'Interface d\'administration',
	'dev-team' => 'Equipe de d&eacute;veloppement d\'Uniform Server',

	//--------------------------------------------------------------------------------------------
	// Source Code
	//--------------------------------------------------------------------------------------------

	'code-show' => 'Voir le code source',
	'code-source' => 'Visualisation du code source',
	'code-back' => 'Fermer la fen&ecirc;tre',
	
	//--------------------------------------------------------------------------------------------
	// Navigation
	//--------------------------------------------------------------------------------------------
	
	// Basic
	'nav-home' => 'Accueil',
	'nav-web' => 'Site Officiel d\'Uniform Server',
	'nav-secure' => 'S&eacute;curit&eacute; Serveur',
	'nav-phpinfo' => 'phpinfo()',
	'nav-cgienv' => 'Environnement "Perl"',
	'nav-status' => 'Status "Apache"',
	'nav-info' => 'Infos "Apache"',
	'nav-update' => 'Rechercher une mise &agrave; jour',
	// Start
	'nav-start' => 'Contr&ocirc;le Serveur',
	'nav-sserver' => 'Fermer le serveur',
	'nav-rmysql' => 'D&eacute;marrer "MySQL"',
	'nav-smysql' => 'Stopper "MySQL"',
	'nav-rserver' => 'Red&eacute;marrer les Services',
	// Configurations
	'nav-config' => 'Configuration',
	'nav-aconfig' => 'Apache',
	'nav-pconfig' => 'PHP',
	'nav-vhost' => 'Gestion "H&ocirc;te Virtuel"',
	'nav-apsetup' => 'Panneau d\'Administration',
	'nav-psetup' => 'Serveur "Priv&eacute;"',
	'nav-mqsetup' => 'Serveur "MySQL"',
	// Tools Navigation
	'nav-tools' => 'Outils',
	'nav-pma' => 'Gestion phpMyAdmin',
	'nav-pmbp' => 'Gestion phpMyBackupPro',
	'nav-elog' => 'Voir les logs d\'erreurs',
	'nav-u2w' => 'Convertisseur Win - Unix',
	'nav-del' => 'Purge du serveur',
	'nav-down' => 'Gestion T&eacute;l&eacute;versement',
	'nav-smig' => 'Migration de serveur',
	// Plugins Navigation
	'nav-plugins' => 'Gestionnaire de Plugins',
	'nav-pear' => 'Installation de "Pear"',
	'nav-eaccelerator' => 'cPanel "eAccelerator"',
	// Misc Navigation
	'nav-misc' => 'Divers',
	'nav-sup' => 'Support en ligne',
	// Documentation
	'nav-docs' => 'Documentation',
	'nav-udoc' => 'Manuel de l\'utilisateur',
	'nav-ucen' => 'Centre Uniform Server',
	'nav-sdoc' => 'Documentation "Serveur"',
	'nav-phdoc' => 'Documentation "PHP"',
	'nav-mydoc' => 'Documentation "MySQL"',
	'nav-pedoc' => 'Documentation "Perl"',
	// Languages
	'nav-langs' => 'Langues',

	//--------------------------------------------------------------------------------------------
	// Home
	//--------------------------------------------------------------------------------------------
	
	'main-head' => 'Panneau d\'Administration '. $version .'',
	'main-text' => '
	Bienvenue dans Uniform Server '. $uniserver .' !. Ceci est la section de gestion du serveur, vous pouvez le contr&ocirc;ler et/ou le param&eacute;trer &agrave; partir cette interface d\'administration.<br />
    	Actuellement ce gestionnaire est en version ALPHA, toutefois il est complet et fonctionnel. Nous l\'avons voulu facile d\'utilisation et convivial.
	<br />
	Vous pouvez &eacute;galement traduire cette interface d\'administration dans votre langue. Si vous le r&eacute;alisez, nous vous demandons de faire partager ce travail, en nous d&eacute;posant une copie sur notre <a href="http://sourceforge.net/tracker/?atid=799696&group_id=53691&func=browse" target="_sf" title="SourceForge Translation Tracking">
	SourceForge Translation Tracking System</a> pour de prochains t&eacute;l&eacute;chargements.
	<br />
	Les traductions des pr&eacute;c&eacute;dentes version ne sont plus fonctionnelles ! Cliquez sur le lien ci-dessus pour t&eacute;l&eacute;charger les mises &agrave; jour de celles-ci.
	<br />
  	En outre, de nouvelles fonctions ont &eacute;t&eacute; ajout&eacute;es et certaines am&eacute;lior&eacute;es. Certaines peuvent ne pas fonctionner sous certains environnements ou n&eacute;cessiter l\'installation de plugins. 
	<br />
	S\'il vous pla&icirc;t, reporter tout bug et erreur sur notre <a href="http://forum.uniformserver.com/" target="_forum" title="Forum Uniform Server">forum</a>.
 	<br />
	<br />
	Merci d\'avance 
 	<br />
	<a href="http://www.uniformserver.com/" target="_home">L\'&eacute;quipe de d&eacute;veloppement d\'Uniform Server</a>',
	'main-secure' => 'V&eacute;rification "S&eacute;curit&eacute;"',
	'main-text-0' => 'Changer le pseudo/mot de passe pour le panneau d\'administration <a href="apsetup.php" title="Modifier le pseudo et/ou mot de passe">ICI</a>',
	'main-text-1' => 'Changer le pseudo/mot de passe pour le serveur <a href="psetup.php" title="Modifier le pseudo et/ou mot de passe">ICI</a>',
	'main-text-2' => 'Changer le mot de passe "root" pour mysql en l\'&eacute;ditant <a href="mqsetup.php" title="Modifier le mot de passe du root">ICI</a>',
	'main-text-3' => 'D&eacute;marrer la <a href="security.php" title="Ouvrir la console de s&eacute;curit&eacute;">Console de S&eacute;curit&eacute;</a> et v&eacute;rifier si tout est OK.',
	
	//--------------------------------------------------------------------------------------------
	// Update
	//--------------------------------------------------------------------------------------------
	
	'update-head' => 'Chercher une mise &agrave; jour d\'Uniform Server',
	'update-check' => 'V&eacute;rification de la Version...',
	'update-true' => '
	La version install&eacute;e d\'Uniform Server est la derni&egrave;re.
	<br />
	Vous n\'avez pas besoin de mise &agrave; jour.
	<br />',
	'update-false' => 'Une nouvelle version d\'Uniform Server a &eacute;t&eacute; publi&eacute;e !',
	'update-new' => 'Nouvelle version',
	'update-yours' => 'Version install&eacute;e',
	'update-get' => 'Vous pouvez t&eacute;l&eacute;charger la nouvelle version depuis notre site en suivant ce lien.',
	
	//--------------------------------------------------------------------------------------------
	// Server Shutdown
	//--------------------------------------------------------------------------------------------
	
	'stop-head' => 'Fermeture du Serveur',
	'stop-shut' => 'V&eacute;rification de la fermeture',
	'stop-killing' => 'Cliquez sur "Fermez !" et le serveur sera automatiquement arr&ecirc;t&eacute;.',
	'stop-stop' => 'Fermez !',
	
	//--------------------------------------------------------------------------------------------
	// Downlaod Manager
	//--------------------------------------------------------------------------------------------
	
	'down-head' => 'Gestionnaire de t&eacute;l&eacute;versement',
	'down-aval' => 'T&eacute;l&eacute;versement de mises &agrave; jour, plugins, et addons.',
	'down-text' => '
	Cette fonctionnalit&eacute; est toujours &agrave; l\'&eacute;tude. Quand elle sera ajout&eacute;e, vous serez en mesure de t&eacute;l&eacute;verser des plugins, addons, et/ou patches pour votre serveur. Certains de ceux-ci auront &eacute;galement un "installateur" qui vous permettra de les monter automatiquement ou manuellement.',
	
	//--------------------------------------------------------------------------------------------
	// Apache Configuration
	//--------------------------------------------------------------------------------------------
	
	'aconfig-head' => 'Configuration Apache',
	'aconfig-conf' => 'Param&eacute;tres Apache',
	'aconfig-sname' => 'Nom du serveur',
	'aconfig-wemail' => 'Email de l\'Administrateur',
	'aconfig-difiles' => 'Dossier des fichiers index',
	'aconfig-ssi' => 'Inclusion c&ocirc;t&eacute; serveur',
	'aconfig-ssig' => 'Etat du Serveur',
        'aconfig-listen' => 'Port',
	'aconfig-text-0' => 'Autre',
	'aconfig-text-1' => '
	Les changements ont &eacute;t&eacute; sauvegard&eacute;s avec succ&egrave;s. <br /> Ils seront pris en compte apr&egrave;s red&eacute;marrage du serveur !',
	'aconfig-save' => 'Sauvegarder',
	'aconfig-module' => 'Actuellement PHP est charg&eacute; comme module d\'Apache.',
	'aconfig-cgi' => 'Actuellement les scripts PHP sont ex&eacute;cut&eacute;s en compl&eacute;ment de l\'interface CGI d\'Apache.',
	'aconfig-help' => '?',	

	//--------------------------------------------------------------------------------------------
	// PHP Configuration
	//--------------------------------------------------------------------------------------------
	
	'pconfig-head' => 'Configuration PHP',
	'pconfig-conf' => 'Param&eacute;tres PHP',
	'pconfig-smode' => 'Safe Mode',
	'pconfig-rg' => 'Register Globals',
	'pconfig-mtexec' => 'Temps (s.) maximum d\'ex&eacute;cution d\'un script',
	'pconfig-mmexec' => 'Taille (MB) maximum de la m&eacute;moire',
	'pconfig-ssig' => 'Afficher PHP dans l\'&eacute;tat du serveur',
	'pconfig-perror' => 'Erreurs d\'impression',
	'pconfig-mpsize' => 'Taille Maximum Post',
	'pconfig-musize' => 'Taille Maximum de t&eacute;l&eacute;versement',
	'pconfig-text-0' => 'Autre',
	'pconfig-text-1' => '
	Les changements ont &eacute;t&eacute; sauvegard&eacute;s avec succ&egrave;s.<br />Ils seront pris en compte apr&egrave;s red&eacute;marrage du serveur !',
	'pconfig-save' => 'Sauvegarder',
	'pconfig-module' => 'En ce moment PHP est charg&eacute; comme module d\'Apache.',
	'pconfig-cgi' => 'Actuellement les scripts PHP sont ex&eacute;cut&eacute;s en compl&eacute;ment de l\'interface CGI d\'Apache.',
	'pconfig-help' => '?',	

	//--------------------------------------------------------------------------------------------
	// VHost Manager
	//--------------------------------------------------------------------------------------------

	'vhost-head' => 'H&ocirc;te virtuel',
	'vhost-setup' => 'Gestion des H&ocirc;tes virtuels',
	'vhost-settings' => 'Pr&eacute;f&eacute;rences des h&ocirc;tes virtuels',
	'vhost-text-0' => 'Vous avez',
	'vhost-text-1' => 'h&ocirc;te(s) dans votre fichier httpd.conf :',
	'vhost-text-2' => 'Erreur dans le dossier "h&ocirc;te" :',
	'vhost-text-3' => 'Tous les noms sont pr&eacute;sent dans votre fichier de configuration httpd.conf !',
	'vhost-new' => '
	Utilisez cet outil pour ajouter des h&ocirc;tes virtuels sans avoir &agrave; &eacute;diter vous-m&ecirc;me le fichier httpd.conf.',
	'vhost-new-ex' => '(ex. newhost.localhost)',
	'vhost-name' => 'Nom :',
	'vhost-path' => 'Chemin physique vers le dossier de l\'h&ocirc;te :',
	'vhost-path-ex' => '(ex. c:/www/newhost)',
	'vhost-opt' => 'Options additionnelles :',
	'vhost-opt-ex' => '(ex. error_log etc.)',
	'vhost-dne' => 'n\'existe pas',
	'vhost-make' => 'Cr&eacute;er',
	'vhost-error-1' => 'Erreur dans la description du chemin de votre h&ocirc;te virtuel!',
	'vhost-error-2' => 'Erreur dans le chemin de votre httpd.conf!',
	'vhost-text-4' => 'Safe_mode est sur "On", il faut red&eacute;marrer Apache manuellement !',
	'vhost-credit' => 'Script par Sukos',

	//--------------------------------------------------------------------------------------------
	// Server Migration
	//--------------------------------------------------------------------------------------------

	'smig-head' => 'Migration Serveur ',
	'smig-sub' => 'Outils de Migration [BETA FEATURE]',
	'smig-text-0' => 'Cet outil de migration vous aide &agrave; migrer d\'un serveur &agrave; un autre.
	Il vous permet de migrer d\'un autre serveur (ou d\'une pr&eacute;c&eacute;dente installation d\'Uniform Server) vers celui-ci.
	<br />
	<b>Ce script peut &ecirc;tre d&eacute;marr&eacute; via "localhost" pour un meilleur r&eacute;sultat</b>',
	'smig-text-1' => 'La suite est pour indiquer la localisation WWW [htdocs] du serveur que vous d&eacute;sirez migrer. 
	Vous ne pouvez choisir de migrer que seulement un fichier ou un dossier.',
	'smig-text-2' => 'Ceci migrera votre base de donn&eacute;es mysql de l\'ancien serveur vers le nouveau. Avant d\'utiliser cette &eacute;tape, veuillez noter que des probl&egrave;mes <b> peuvent se poser si vous avez le m&ecirc;me nom de base de donn&eacute;es entre l\'ancien et le nouveau serveur</b>.',
	'smig-success' => 'La migration a eu lieu avec succ&egrave;s ! Allez v&eacute;rifier maintenant pour &ecirc;tre s&ucirc;r, s\'il vous pla&icirc;t.',
	'smig-www' => 'Localisation WWW [htdocs]',
	'smig-mysql' => 'Dossier des bases de donn&eacute;es MySQL',

	//--------------------------------------------------------------------------------------------
	// Server Security Console
	//--------------------------------------------------------------------------------------------

	'secure1-head' => 'Alerte de S&eacute;curit&eacute; !',
	'secure1-sub' => 'Attaque possible',
	'secure1-text-0' => 'L\'adresse IP n\'est pas 127.0.0.1, mais',
	'secure1-text-1' => 'Note : HTTP_REFERER est',
	'secure1-text-2' => 'Pour d&eacute;sactiver ce message d\'alerte, mettre $unisecure sur "0" dans : /home/admin/www/includes/config.inc.php',

	//--------------------------------------------------------------------------------------------
	// Admin Panel Setup
	//--------------------------------------------------------------------------------------------

	'apsetup-head' => 'Panneau de Configuration',
	'apsetup-sub-0' => 'Gestion des utilisateurs',
	'apsetup-text-0' => 'Param&eacute;trer ici, le pseudo et le mot de passe pour l\'interface d\'administration. Veuillez noter que vous devez avoir activer cette fonction dans le fichier --> /home/admin/www/.htaccess.',
	'apsetup-user' => 'Pseudo',
	'apsetup-pass' => 'Mot de passe',
	'apsetup-change' => 'Modifier',
	'apsetup-success' => 'Le pseudo/mot de passe du panneau d\'administration ont &eacute;t&eacute; modifi&eacute;s avec ces nouvelles valeurs :',

	//--------------------------------------------------------------------------------------------
	// Private Server Setup
	//--------------------------------------------------------------------------------------------

	'psetup-head' => 'Configuration du Serveur Priv&eacute;',
	'psetup-sub-0' => 'Gestion des utilisateurs',
	'psetup-text-0' => 'Param&eacute;trer ici, le pseudo et le mot de passe pour le serveur priv&eacute;. Veuillez noter que vous devez avoir activer cette fonction dans le fichier --> /home/admin/www/.htaccess.',
	'psetup-user' => 'Pseudo',
	'psetup-pass' => 'Mot de passe',
	'psetup-change' => 'Modifier',
	'psetup-success' => 'Le pseudo/mot de passe du serveur priv&eacute; ont &eacute;t&eacute; modifi&eacute;s avec ces nouvelles valeurs :',

	//--------------------------------------------------------------------------------------------
	// MySQL Setup
	//--------------------------------------------------------------------------------------------

	'mqsetup-head' => 'Configuration du serveur MySQL',
	'mqsetup-sub-0' => 'Gestion des utilisateurs',
	'mqsetup-text-0' => 'Param&eacute;trer ici le mot de passe "MySQL". Apr&egrave;s changement de celui-ci, veuillez noter que <b> vous devez stopper le serveur en utilisant le fichier "Stop.bat"</b> et le red&eacute;marrer ensuite.',
	'mqsetup-pass' => 'Mot de passe "MySQL"',
	'mqsetup-change' => 'Modifier',
	'mqsetup-success' => 'Votre mot de passe "MySQL" a &eacute;t&eacute; chang&eacute; par cette nouvelle valeur :',

	//--------------------------------------------------------------------------------------------
	// Server Security Center
	//--------------------------------------------------------------------------------------------

	'secure-head' => 'Centre de S&eacute;curit&eacute;',
	'secure-sub-0' => 'Gestion S&eacute;curit&eacute; Utilisateur',
	'secure-sub-1' => 'S&eacute;curit&eacute; du serveur',
	'secure-text-0' => 'Cette section du centre de s&eacute;curit&eacute; v&eacute;rifiera tous les r&eacute;glages de gestion des utilisateurs, pour s\'assurer que tout est r&eacute;gl&eacute;. Elle vous indiquera si quelque chose doit &ecirc;tre modifi&eacute;e.',
	'secure-text-1' => 'MSG SECURITE',
	'secure-text-2' => 'STATUS',
	'secure-text-3' => 'Panneau d\'administration',
	'secure-text-X' => 'Si le pseudo/mot de passe n\'est encore param&eacute;tr&eacute;, vous devriez certainement changer ceci en cliquant sur le lien "NON-SECURISE".',
	'secure-secure' => 'SECURISE',
	'secure-unsecure' => 'NON-SECURISE',
	'secure-text-7' => 'Si le mot de passe n\'est encore param&eacute;tr&eacute;, vous devriez certainement changer ceci en cliquant sur le lien "NON-SECURISE".',
	'secure-text-8' => 'Cette section du centre de s&eacute;curit&eacute; v&eacute;rifiera si les pr&eacute;f&eacute;rences et param&eacute;tres du serveur sont corrects et appropri&eacute;s.',
	'secure-text-9' => 'Safe Mode PHP',
	'secure-text-10' => 'Cette v&eacute;rification regarde si PHP d&eacute;marre en "SAFE MODE". Maintenant, PHP ne doit pas fonctionner en SAFE MODE, mais si vous voulez une s&eacute;curit&eacute; suppl&eacute;mentaire, vous pouvez la r&eacute;gler en cliquant sur le lien "NON-SECURISE".',
	'secure-text-p' => 'Serveur personnel',
	'secure-text-s' => 'Serveur MySQL',
	'secure-text-11' => 'Acc&egrave;s au Panneau d\'administration',
	'secure-text-12' => 'Acc&egrave;s au serveur',
	'secure-text-13' => 'Bien que ce param&eacute;tre ne soit pas plus important que les autres en place contre l\'acc&egrave;s &agrave; l\'interface d\'administration depuis l\'ext&eacute;rieur, ceci v&eacute;rifiera si cette derni&egrave;re est prot&eacute;g&eacute;e par une m&eacute;thode d\'Authentification. Veuillez modifier ceci en &eacute;ditant le fichier --> '.$apanel_path.'/.htaccess',
	'secure-text-14' => 'Si vous utilisez votre serveur en production, sauter ceci. Sinon, si vous voulez ajouter plus de s&eacute;curit&eacute; au serveur en le bloquant par une m&eacute;thode d\'Authentification, alors &eacute;diter le fichier --> '.$server_path.'/.htaccess',
	'secure-view' => 'Vue locale',
	'secure-look' => '&eacute;tant donn&eacute; que certains PC ont un nom d\'h&ocirc;te par d&eacute;faut diff&eacute;rent de "localhost", nous pouvons employer ici la m&eacute;thode par adresse IP. Ceci v&eacute;rifiera que nous sommes s&ucirc;r d\'acc&eacute;der &agrave; l\'interface d\'administration en local.',
);  

# Beta Feature, Currently For Debugging Only
#array2table($US, true);
?>