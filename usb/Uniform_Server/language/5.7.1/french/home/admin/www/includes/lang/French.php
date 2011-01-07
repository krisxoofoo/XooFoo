<?php
/*
####################################################################
# Name: The Uniform Server Language System Array 1.1
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) 
# Web: http://www.uniformserver.com
# French translation: Kris
####################################################################
*/

# Beta Feature, Currently For Debugging Only
#require_once 'array.php';

$US = array(
    'title' => 'Uniform Server',
	'apanel' => 'Interface d&#39;administration',
	'dev-team' => 'Equipe de d&#233;veloppement d&#39;Uniform Server',

	//--------------------------------------------------------------------------------------------
	// Source Code
	//--------------------------------------------------------------------------------------------

	'code-show' => 'Voir le code source',
	'code-source' => 'Visualisation du code source',
	'code-back' => 'Fermer la fen&#234;tre',
	
	//--------------------------------------------------------------------------------------------
	// Navigation
	//--------------------------------------------------------------------------------------------
	
	// Basic
	'nav-home' => 'Accueil',
	'nav-web' => 'Site Officiel d&#39;Uniform Server',
	'nav-secure' => 'S&#233;curit&#233; Serveur',
	'nav-phpinfo' => 'phpinfo()',
	'nav-cgienv' => 'Environnement &#34;Perl&#34;',
	'nav-status' => 'Status &#34;Apache&#34;',
	'nav-info' => 'Infos &#34;Apache&#34;',
	'nav-update' => 'Rechercher une mise à jour',
	// Start
	'nav-start' => 'Contr&#244;le Serveur',
	// Server Control - Service
	'nav-uservers' => 'D&#233;sinstaller les services',
	'nav-rapaches' => 'Relancer le service &#34;Apache&#34;',
	'nav-rmysqls' => 'Relancer le service &#34;MySQL&#34;',
	// Server Control - Standard Program
	'nav-sserver' => 'Stopper le serveur',
	'nav-rmysql' => 'D&#233;marrer &#34;MySQL&#34;',
	'nav-smysql' => 'Stopper &#34;MySQL&#34;',
	// Configurations
	'nav-config' => 'Configuration',
	'nav-aconfig' => 'Apache',
	'nav-pconfig' => 'PHP',
	'nav-vhost' => 'Gestion &#34;H&#244;te Virtuel&#34;',
	'nav-apsetup' => 'Panneau d&#39;Administration',
	'nav-psetup' => 'Serveur &#34;Priv&#233;&#34;',
	'nav-sslpsetup' => 'S&#233;curit&#233; Serveur &#34;Priv&#233;&#34;',
	'nav-mqsetup' => 'Serveur &#34;MySQL&#34;',
	// Tools Navigation
	'nav-tools' => 'Outils',
	'nav-pma' => 'Gestion phpMyAdmin',
	'nav-elog' => 'Voir les logs d&#39;erreurs',
	'nav-u2w' => 'Convertisseur Win - Unix',
	'nav-smig' => 'Migration de serveur',
	'nav-key' => 'Serveur Key & Cert Gen',
	'nav-mysqlrestore' => 'Restaurer le mot de passe &#34;MySQL&#34;',
	// Plugins Navigation
	'nav-plugins' => 'Gestionnaire de Plugins',
	'nav-pear' => 'Installation de &#34;Pear&#34;',
	'nav-eaccelerator' => 'cPanel eAccelerator ',
	// Misc Navigation
	'nav-misc' => 'Divers',
	'nav-sup' => 'Support en ligne',
	// Documentation
	'nav-docs1' => 'Documentation',
	'nav-sdoc' => 'Documentation Serveur',
	'nav-docs2' => 'Documentation en ligne',
	'nav-udoc' => 'Guide de l&#39;utilisateur Uniform Server',
	'nav-wiki' => 'Wiki Uniform Server',
	'nav-phdoc' => 'Documentation PHP',
	'nav-mydoc' => 'Documentation MySQL',
	'nav-pedoc' => 'Documentation Perl',
	// Languages
	'nav-langs' => 'Langues',

	//--------------------------------------------------------------------------------------------
	// Home
	//--------------------------------------------------------------------------------------------
	
	'main-head' => 'Panneau d&#39;Administration '. $us_apanel_version .'',
	'main-text' => '
	Bienvenue dans Uniform Server '. $us_version .' ! Ceci est la section de gestion du serveur, vous pouvez le contr&#244;ler et/ou le param&#233;trer à partir cette interface d&#39;administration.<br />Actuellement ce gestionnaire est en version ALPHA, toutefois il est complet et fonctionnel. Nous l&#39;avons voulu facile d&#39;utilisation et convivial.<br />Vous pouvez &#233;galement traduire cette interface d&#39;administration dans votre langue. Si vous le r&#233;alisez, nous vous demandons de faire partager ce travail, en nous d&#233;posant une copie sur notre <a href="http://sourceforge.net/tracker/?atid=799696&group_id=53691&func=browse" target="_sf" title="SourceForge Translation Tracking">SourceForge Translation Tracking System</a> pour de prochains t&#233;l&#233;chargements.<br />Les traductions des pr&#233;c&#233;dentes versions ne sont plus fonctionnelles ! Cliquez sur le lien ci-dessus pour t&#233;l&#233;charger les mises à jour de celles-ci.<br />En outre, de nouvelles fonctions ont &#233;t&#233; ajout&#233;es et certaines am&#233;lior&#233;es. Certaines peuvent ne pas fonctionner sous certains environnements ou n&#233;cessiter l&#39;installation de plugins.<br />S&#39;il vous pla&#238;t, reporter tout bug et erreur sur notre <a href="http://forum.uniformserver.com/" target="_forum" title="Forum Uniform Server">forum</a>.<br /><br />Merci d&#39;avance<br /><a href="http://www.uniformserver.com/" target="_home">L&#39;&#233;quipe de d&#233;veloppement d&#39;Uniform Server</a>',
	'main-secure' => 'Checklist &#34;S&#233;curit&#233;&#34;',
	'main-text-0' => 'Changer le pseudo/mot de passe pour le panneau d&#39;administration <a href="apsetup.php" title="Modifier le pseudo et/ou mot de passe">ICI</a>',
	'main-text-1' => 'Changer le pseudo/mot de passe pour le serveur <a href="psetup.php" title="Modifier le pseudo et/ou mot de passe">ICI</a>',
	'main-text-2' => 'Changer le mot de passe &#34;root&#34; pour mysql en l&#39;&#233;ditant <a href="mqsetup.php" title="Modifier le mot de passe du root">ICI</a>',
	'main-text-3' => 'D&#233;marrer la <a href="security.php" title="Ouvrir la console de s&#233;curit&#233;">Console de S&#233;curit&#233;</a> et v&#233;rifier si tout est OK.',
	'main-text-4' => 'Changer le pseudo/mot de passe pour le serveur &#34;SSL&#34; <a href="sslpsetup.php">ICI</a>',
		
	//--------------------------------------------------------------------------------------------
	// Update
	//--------------------------------------------------------------------------------------------
	
	'update-head' => 'Rechercher une mise à jour d&#39;Uniform Server',
	'update-check' => 'V&#233;rification de la Version...',
	'update-notfound' => '
         Le fichier de version Uniform Server n&#39;a pas &#233;t&#233; trouv&#233; !
         <br />
         Ou
         <br />
         Uniform Server est hors-ligne !
         <br />
         Ou
         <br />
         Vous n&#39;&#234;tes pas connect&#233; à Internet!
         <br />',

	'update-true' => 'La version install&#233;e d&#39;Uniform Server est la derni&egrave;re.<br />Vous n&#39;avez pas besoin de mise à jour.<br />',
	'update-false' => 'Une nouvelle version d&#39;Uniform Server a &#233;t&#233; publi&#233;e !',
	'update-new' => 'Nouvelle version',
	'update-yours' => 'Version install&#233;e',
	'update-get' => 'Vous pouvez t&#233;l&#233;charger la nouvelle version depuis notre site en suivant ce lien.',
	
	//--------------------------------------------------------------------------------------------
	// Server Control - Standard program
	//--------------------------------------------------------------------------------------------
	
	'server-stop-head1' => 'Arr&#234;tez les serveurs',
	'server-stop-head2' => 'Arr&#234;t des serveurs',
	'server-stop-txt1'  => 'Ce script va arr&#234;ter les serveurs &#34;Apache&#34; et &#34;MySQL&#34;',
	'server-stop-txt2'  => 'Les serveurs sont arr&#234;t&#233;s, s&#39;il vous plaît attendez le bip de confirmation !',
	'server-stop-txt3'  => 'Merci d&#39;utiliser <a href="http://www.uniformserver.com/" rel="external">Uniform Server</a>.',
	'server-confirm-button'  => 'Confirmez',

	'start-mysql-head1'  => 'Lancer le serveur &#34;MySQL&#34;',
	'start-mysql-head2'  => 'Le serveur &#34;MySQL&#34; est lanc&#233;.',
	'start-mysql-txt1'   => 'Ce script va lancer le serveur &#34;MySQL&#34;.',
	'start-mysql-txt2'   => 'Le serveur &#34;MySQL&#34; est maintenant op&#233;rationnel.',
	'start-mysql-txt3'   => 'Le serveur &#34;MySQL&#34; a &#233;t&#233; d&#233;marr&#233;, vous pouvez maintenant l&#39;utiliser.',
    'start-mysql-button' => 'Lancez &#34;MySQL&#34;',

	'stop-mysql-head1'  => 'Arr&#234;ter le serveur &#34;MySQL&#34;',
	'stop-mysql-head2'  => 'Arr&#234;t du serveur &#34;MySQL&#34;.',
	'stop-mysql-txt1'   => 'Ce script va arr&#234;ter le serveur &#34;MySQL&#34;.',
	'stop-mysql-txt2'   => 'Le serveur &#34;MySQL&#34; est arr&#234;t&#233;.',
	'stop-mysql-txt3'   => 'Le serveur &#34;MySQL&#34; n&#39;est pas op&#233;rationnel.',
    'stop-mysql-button' => 'Stoppez &#34;MySQL&#34;',

	//--------------------------------------------------------------------------------------------
	// Server Control - Services
	//--------------------------------------------------------------------------------------------

	'service-apache-head1' => 'Relancer le service &#34;Apache&#34;',
	'service-apache-head2' => 'Red&#233;marrage du service &#34;Apache&#34;',
	'service-apache-txt1'  => 'Ce script va relancer le service &#34;Apache&#34;.',
	'service-apache-txt2'  => 'Ceci peut prendre un peu de temps',
	'service-apache-txt3'  => 'Le service &#34;Apache&#34; red&#233;marrage, attendez un peu <br /> Entre 2-10 secondes !' ,
	'service-apache-txt4'  => 'Apanel va &#234;tre recharg&#233;e pour prendre en compte la nouvelle configuration du serveur.',

	'service-mysql-head1' => 'Relancer le service &#34;MySQL&#34;',
	'service-mysql-head2' => 'Le service &#34;MySQL&#34; a &#233;t&#233; red&#233;marr&#233;.',
	'service-mysql-txt1'  => 'Ce script va relancer le service &#34;MySQL&#34;.',
	'service-mysql-txt2'  => 'Celà peut prendre un peu de temps',
	'service-mysql-txt3'  => 'Le service &#34;MySQL&#34; a &#233;t&#233; red&#233;marr&#233;, vous pouvez continuer à utiliser le serveur.',

    'service-confirm-button'  => 'Confirmez',
	
	//--------------------------------------------------------------------------------------------
	// Apache Configuration
	//--------------------------------------------------------------------------------------------
	
	'aconfig-head' => 'Configuration &#34;Apache&#34;',
	'aconfig-conf' => 'Param&#233;tres &#34;Apache&#34;',
	'aconfig-sname' => 'Nom du serveur',
	'aconfig-wemail' => 'Courriel de l&#39;Administrateur',
	'aconfig-difiles' => 'R&#233;pertoire des fichiers index',
	'aconfig-ssi' => 'Inclusion c&#244;t&#233; serveur',
	'aconfig-ssig' => 'Etat du Serveur',
    'aconfig-listen' => 'Port',
	'aconfig-text-0' => 'Autre',
	'aconfig-text-1' => 'Les changements ont &#233;t&#233; sauvegard&#233;s avec succ&egrave;s. <br />Ils seront pris en compte apr&egrave;s red&#233;marrage du serveur !',
	'aconfig-save' => 'Sauvegarder',
	'aconfig-module' => 'Actuellement PHP est charg&#233; comme module d&#39;Apache.',
	'aconfig-cgi' => 'Actuellement les scripts PHP sont ex&#233;cut&#233;s en compl&#233;ment de l&#39;interface CGI d&#39;Apache.',
	'aconfig-help' => '?',	


	//--------------------------------------------------------------------------------------------
	// PHP Configuration
	//--------------------------------------------------------------------------------------------
	
	'pconfig-head' => 'Configuration PHP',
	'pconfig-conf' => 'Param&#233;tres PHP',
	'pconfig-smode' => 'Safe Mode',
	'pconfig-rg' => 'Register Globals',
	'pconfig-mtexec' => 'Temps (s.) maximum d&#39;ex&#233;cution d&#39;un script',
	'pconfig-mmexec' => 'Taille (MB) maximum de la m&#233;moire',
	'pconfig-ssig' => 'Afficher PHP dans l&#39;&#233;tat du serveur',
	'pconfig-perror' => 'Erreurs d&#39;impression',
	'pconfig-mpsize' => 'Taille Maximum des Posts',
	'pconfig-musize' => 'Taille Maximum de t&#233;l&#233;versement',
	'pconfig-text-0' => 'Autre',
	'pconfig-text-1' => 'Les changements ont &#233;t&#233; sauvegard&#233;s avec succ&egrave;s.<br />Ils seront pris en compte apr&egrave;s red&#233;marrage du serveur !',
	'pconfig-save' => 'Sauvegarder',
	'pconfig-module' => 'En ce moment PHP est charg&#233; comme module d&#39;Apache.',
	'pconfig-cgi' => 'Actuellement les scripts PHP sont ex&#233;cut&#233;s en compl&#233;ment de l&#39;interface CGI d&#39;Apache.',
	'pconfig-help' => '?',	


	//--------------------------------------------------------------------------------------------
	// VHost Manager
	//--------------------------------------------------------------------------------------------

	'vhost-head' => 'H&#244;te virtuel',
	'vhost-setup' => 'Gestion des H&#244;tes virtuels',
	'vhost-settings' => 'Pr&#233;f&#233;rences des h&#244;tes virtuels',
	'vhost-text-0' => 'Vous avez',
	'vhost-text-1' => 'h&#244;te(s) dans votre fichier httpd.conf :',
	'vhost-text-2' => 'Erreur dans le dossier &#34;h&#244;te&#34; :',
	'vhost-text-3' => 'Tous les noms sont pr&#233;sent dans votre fichier de configuration httpd.conf !',
	'vhost-new' => 'Utilisez cet outil pour ajouter des h&#244;tes virtuels sans avoir à &#233;diter vous-m&#234;me le fichier httpd.conf.',
	'vhost-new-ex' => '(ex. newhost.localhost)',
	'vhost-name' => 'Nom :',
	'vhost-path' => 'Chemin physique vers le dossier de l&#39;h&#244;te :',
	'vhost-path-ex' => '(ex. c:/www/newhost)',
	'vhost-opt' => 'Options additionnelles :',
	'vhost-opt-ex' => '(ex. error_log etc.)',
	'vhost-dne' => 'n&#39;existe pas',
	'vhost-make' => 'Cr&#233;er',
	'vhost-error-1' => 'Erreur dans la description du chemin de votre h&#244;te virtuel!',
	'vhost-error-2' => 'Erreur dans le chemin de votre httpd.conf!',
	'vhost-text-4' => 'Safe_mode est sur &#34;On&#34;, il faut red&#233;marrer Apache manuellement !',
	'vhost-credit' => 'Script par Sukos',

	//--------------------------------------------------------------------------------------------
	// Error Log Viewer
	//--------------------------------------------------------------------------------------------

	'elog-viewer-head1' => 'Erreur de visualisation du journal',
	'elog-viewer-head2' => 'Affichage d&#39;erreur dans le fichier journal',
	//--------------------------------------------------------------------------------------------
	// Win to Unix Converter
	//--------------------------------------------------------------------------------------------

	'w2u-head1' => 'Windows vers Unix Converter',
	'w2u-head2' => 'Convertir des fichiers Windows Perl',
	'w2u-head3' => 'Fichiers Windows Perl convertis',

	'w2u-txt1' => 'Si vous avez des probl&#232;mes d&#39;ex&#233;cution de vos scripts CGI sur Unix.<br />Ce programme vous permet de convertir les scripts CGI à partir de Windows vers Unix format Dec(#10#13=>#13).<br>Hex 0D0A vers 0A',

	'w2u-txt2' => 'Instruction : <br />Apr&#232;s ex&#233;cution, vous aurez des scripts pr&#234;ts à &#234;tre ex&#233;cut&#233;s sur une machine Unix à partir du r&#233;pertoire \\cgi-bin-unix\\.<br />',

	'w2u-txt3' => 'Fichiers convertis',
    'w2u-convert-button'  => 'Conversion',



	//--------------------------------------------------------------------------------------------
	// Server Certificate and Key Generation
	//--------------------------------------------------------------------------------------------
	
	'cert-head1' => 'Certificat Serveur et g&#233;n&#233;ration de cl&#233;',
	'cert-head2' => 'V&#233;rifier la G&#233;n&#233;ration',
	'cert-head3' => 'Impossibilit&#233; de lancer la g&#233;n&#233;ration du certificat et de la cl&#233;.',
	'cert-head4' => 'G&#233;n&#233;ration du certificat et de la cl&#233; r&#233;alis&#233;e.',

	'cert-txt1' => 'Cliquez sur &#34;G&#233;n&#233;rez !&#34; et suivez les instructions.',
	'cert-txt2' => 'Les services ne sont pas autoris&#233;s à interagir avec le bureau.<br />Vous avez besoin de lancer manuellement le script :',
    'cert-txt3' => 'Utiliser alternativement UniTray.',
	'cert-txt4' => 'Localisation du certificat :',
	'cert-txt5' => 'Localisation de la cl&#233; :',

	'cert-confirm-button' => 'G&#233;n&#233;rez !',

	//--------------------------------------------------------------------------------------------
	// MySQL restore password
	//--------------------------------------------------------------------------------------------
	
	'mysql-head1' => 'Restauration du mot de passe &#34;MySQL&#34;',
	'mysql-head2' => 'V&#233;rifier la restauration',
	'mysql-head3' => 'Mot de passe &#34;MySQL&#34; restaur&#233;.',

	'mysql-txt1' => 'Cliquer sur &#34;Restaurez&#34; ! ceci prend quelques secondes.',
	'mysql-txt2' => 'Le mot de passe a &#233;t&#233; restaur&#233;, vous pouvez continuer à utiliser le serveur..',

    'mysql-confirm-button'  => 'Restaurez !',
	
	//--------------------------------------------------------------------------------------------
	// Server Security Console
	//--------------------------------------------------------------------------------------------

	'secure1-head' => 'Alerte de S&#233;curit&#233; !',
	'secure1-sub' => 'Attaque possible',
	'secure1-text-0' => 'L&#39;adresse IP n&#39;est pas 127.0.0.1, mais',
	'secure1-text-1' => 'Note : HTTP_REFERER est',
	'secure1-text-2' => 'Pour d&#233;sactiver ce message d&#39;alerte, mettre $unisecure sur &#34;0&#34; dans : /home/admin/www/includes/config.inc.php',

	//--------------------------------------------------------------------------------------------
	// Admin Panel Setup
	//--------------------------------------------------------------------------------------------

	'apsetup-head' => 'Panneau de Configuration',
	'apsetup-sub-0' => 'Gestion des utilisateurs',
	'apsetup-text-0' => 'Param&#233;trez ici, le pseudo et le mot de passe pour l&#39;interface d&#39;administration. Veuillez noter que vous devez avoir activer cette fonction dans le fichier --> /home/admin/www/.htaccess.',
	'apsetup-user' => 'Pseudo',
	'apsetup-pass' => 'Mot de passe',
	'apsetup-change' => 'Modifier',
	'apsetup-success' => 'Le pseudo/mot de passe du panneau d&#39;administration ont &#233;t&#233; modifi&#233;s avec ces nouvelles valeurs :',

	//--------------------------------------------------------------------------------------------
	// Private Server Setup
	//--------------------------------------------------------------------------------------------

	'psetup-head' => 'Configuration du Serveur Priv&#233;',
	'psetup-sub-0' => 'Gestion des utilisateurs',
	'psetup-text-0' => 'Param&#233;trez ici, le pseudo et le mot de passe pour le serveur priv&#233;. Veuillez noter que vous devez avoir activer cette fonction dans le fichier --> /home/admin/www/.htaccess.',
	'psetup-user' => 'Pseudo',
	'psetup-pass' => 'Mot de passe',
	'psetup-change' => 'Modifier',
	'psetup-success' => 'Le pseudo/mot de passe du serveur priv&#233; ont &#233;t&#233; modifi&#233;s avec ces nouvelles valeurs :',


	//--------------------------------------------------------------------------------------------
	// Private Secure Server Setup
	//--------------------------------------------------------------------------------------------

	'sslpsetup-head' => 'Configuration Serveur Priv&#233; S&#233;curis&#233; (SSL)',
	'sslpsetup-sub-0' => 'Gestion utilisateur',
	'sslpsetup-text-0' => 'Installation de l&#39;identifiant et mot de passe pour votre serveur s&#233;curis&#233; priv&#233;. S&#39;il vous pla&#238;t noter que vous devrez peut-&#234;tre activer cette fonction dans le fichier /wwws/.htaccess',
	'sslpsetup-user' => 'Identifiant',
	
	'sslpsetup-pass' => 'Mot de passe',
	'sslpsetup-change' => 'Modifier',
	'sslpsetup-success' => 'Votre identifiant et mot de passe pour le serveur s&#233;curis&#233; ont &#233;t&#233; chang&#233; par ces nouvelles valeurs :',

	//--------------------------------------------------------------------------------------------
	// MySQL Setup
	//--------------------------------------------------------------------------------------------

	'mqsetup-head' => 'Configuration du serveur &#34;MySQL&#34;',
	'mqsetup-sub-0' => 'Gestion des utilisateurs',
	'mqsetup-text-0' => 'Param&#233;trez ici le mot de passe &#34;MySQL&#34;. Apr&egrave;s changement de celui-ci, veuillez noter que <strong> vous devez stopper le serveur en utilisant le fichier &#34;Stop.bat&#34;</strong> et le red&#233;marrer ensuite.',
	
	'mqsetup-pass' => 'Mot de passe &#34;MySQL&#34;',
	'mqsetup-change' => 'Modifier',
	'mqsetup-success' => 'Votre mot de passe &#34;MySQL&#34; a &#233;t&#233; chang&#233; par cette nouvelle valeur :',

	//--------------------------------------------------------------------------------------------
	// Server Security Center
	//--------------------------------------------------------------------------------------------

	'secure-head' => 'Centre de S&#233;curit&#233;',
	'secure-sub-0' => 'Gestion S&#233;curit&#233; &#34;Utilisateur&#34;',
	'secure-sub-1' => 'S&#233;curit&#233; du serveur',
	'secure-text-0' => 'Cette section du centre de s&#233;curit&#233; v&#233;rifiera tous les r&#233;glages de gestion des utilisateurs, pour s&#39;assurer que tout est r&#233;gl&#233;. Elle vous indiquera si quelque chose doit &#234;tre modifi&#233;e.',
	
	'secure-text-1' => 'Message S&#233;curit&#233;',
	'secure-text-2' => 'Status',
	'secure-text-3' => 'Panneau d&#39;administration',
	'secure-text-X' => 'Si le pseudo/mot de passe n&#39;est encore param&#233;tr&#233;, vous devriez certainement changer ceci en cliquant sur le lien &#34;NON-SECURISE&#34;.',
	'secure-secure' => 'S&#233;curis&#233;',
	'secure-unsecure' => 'Non-s&#233;curis&#233;',
	'secure-text-7' => 'Si le mot de passe n&#39;est encore param&#233;tr&#233;, vous devriez certainement changer ceci en cliquant sur le lien &#34;NON-SECURISE&#34;.',
	'secure-text-8' => 'Cette section du centre de s&#233;curit&#233; v&#233;rifiera si les pr&#233;f&#233;rences et param&#233;tres du serveur sont corrects et appropri&#233;s.',
	'secure-text-9' => 'Safe Mode PHP',
	'secure-text-10' => 'Cette v&#233;rification regarde si PHP d&#233;marre en &#34;SAFE MODE&#34;. Maintenant, PHP ne doit pas fonctionner en SAFE MODE, mais si vous voulez une s&#233;curit&#233; suppl&#233;mentaire, vous pouvez la r&#233;gler en cliquant sur le lien &#34;NON-SECURISE&#34;.',
	'secure-text-p' => 'Serveur &#34;personnel&#34;',
	'secure-text-s' => 'Serveur &#34;MySQL&#34;',
	'secure-text-11' => 'Acc&egrave;s au Panneau d&#39;administration',
	'secure-text-12' => 'Acc&egrave;s au serveur',
	'secure-text-12ssl' => 'Acc&#232;s Serveur (SSL)',
	'secure-text-13' => 'Bien que ce param&#233;tre ne soit pas plus important que les autres en place contre l&#39;acc&egrave;s à l&#39;interface d&#39;administration depuis l&#39;ext&#233;rieur, ceci v&#233;rifiera si cette derni&egrave;re est prot&#233;g&#233;e par une m&#233;thode d&#39;Authentification. Veuillez modifier ceci en &#233;ditant le fichier --> '.$us_apanel.'/.htaccess file.',
	'secure-text-14' => 'Si vous utilisez votre serveur en production, sauter ceci. Si vous voulez ajouter plus de s&#233;curit&#233; au serveur en le bloquant par une m&#233;thode d&#39;Authentification, alors &#233;diter le fichier --> '.$server_path.'/.htaccess',
	'secure-text-14ssl' => 'Si vous utilisez votre serveur en mode production, sauter ceci. Si vous souhaitez ajouter plus de s&#233;curit&#233; au serveur en bloquant à l&#39;aide de la m&#233;thode Auth, changer cela en modifiant le fichier --> '.$us_ssl.'/.htaccess.',
	'secure-view' => 'Vue locale',
	'secure-look' => '&#233;tant donn&#233; que certains PC ont un nom d&#39;h&#244;te par d&#233;faut diff&#233;rent de &#34;localhost&#34;, nous pouvons employer ici la m&#233;thode par adresse IP. Ceci v&#233;rifiera que nous sommes s&ucirc;r d&#39;acc&#233;der à l&#39;interface d&#39;administration en local.',
);  

# Beta Feature, Currently For Debugging Only
#array2table($US, true);
?>