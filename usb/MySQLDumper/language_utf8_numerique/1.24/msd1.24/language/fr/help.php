<div id="content">
<h3>Sur ce projet</h3>
l&#39;id&#233;e pour ce projet est venue de Daniel Schlichtholz.<p>Il a ouvert en 2004 le forum <a href="http://forum.mysqldumper.de" target="_blank">MySQLDumper</a> et rapidement d&#39;autres d&#233;veloppeurs ont &#233;crit de nouveaux scripts ou bien &#233;largi les scripts de Daniel. En peu de temps le simple script de sauvegarde est devenu un imposant projet.<p>Si vous avez des propositions d&#39;am&#233;liorations vous pouvez les communiquer dans le Forum MySQLDumper <a href="http://forum.mysqldumper.de" target="_blank">http://forum.mysqldumper.de</a>. <p>Nous vous souhaitons beaucoup de plaisir avec ce projet.<br /><p><h4>l&#39;&#233;quipe de MySQLDumper</h4>

<table><tr><td><img src="images/logo.gif" alt="MySQLDumper" border="0"></td><td valign="top">
Daniel Schlichtholz</td></tr></table>
<br />

<h3>Aide MySQLDumper</h3>

<h4>T&#233;l&#233;chargement</h4>
Vous venez de t&#233;l&#233;charger ce script sur le page d&#39;accueil de MySQLDumper.<br />
Nous vous conseillons de visiter r&#233;guli&#232;rement la page d&#39;accueil, afin d&#39;acc&#233;der aux mises &#224; jour et au support.<br />
l&#39;adresse est: <a href="http://forum.mysqldumper.de" target="_blank">
http://forum.mysqldumper.de
</a>

<h4>Syst&#232;me requis</h4>
Le script travaille sur tous les serveurs (Windows, Linux...)<br />
ayant PHP >= version 4.3.4 avec GZip, MySQL (&#224; partir de la version 3.23), JavaScript (doit &#234;tre activ&#233;).

<a href="install.php?language=fr" target="_top"><h4>Installation</h4></a>
l&#39;installation est simple.
D&#233;compresser l&#39;archive dans un r&#233;pertoire quelconque.<br />
Envoyer tous les fichiers sur votre espace web. (exemple:Dans le niveau le plus bas [R&#233;pertoire du serveur/]MySQLDumper)<br />
... c&#39;est termin&#233;!<br />
Maintenant il suffit d&#39;appeler MySQLDumper en saisissant l&#39;adresse suivante dans votre navigateur "http://mon-site-web/MySQLDumper"<br />
afin de terminer l&#39;installation. Il suffit maintenant de suivre les instructions.<br />
<br /><strong>Remarque:</strong><br /><i>Si votre espace web &#224; la fonction PHP Safemode activ&#233;, le script ne pourra pas cr&#233;er les r&#233;pertoires.<br />
Vous devrez le faire manuellement afin que MySqlDump puisse sauvegarder les donn&#233;es dans les r&#233;pertoires.<br /> 
Le script s&#39;arr&#234;tera avec un message en cons&#233;quence!<br />
Apr&#232;s avoir cr&#233;e les r&#233;pertoires (d&#39;apr&#232;s les informations re&#231;ues), le programme fonctionnera normalement et sans restrictions.</i>

<a name="perl"></a><h4>Mode d&#39;emploi du script Perl</h4>
La plupart ont un r&#233;pertoire cgi-bin, qui permet d&#39;ex&#233;cuter en Perl. <br />
Vous pouvez y acc&#233;der dans la majeur partie des cas en saisissant l&#39;adresse suivante dans votre navigateur http://www.domaine.com/cgi-bin/. <br />
<br />
Dans ce cas veuillez suivre les &#233;tapes suivantes:<br /><br />

1. Appeler la page &#39;Sauvegarde&#39; dans MySQLDumper. <br />
2. Copier le chemin qui se trouve derri&#232;re le texte: crondump.pl pour $absolute_path_of_configdir: <br />
3. Ouvrir le fichier &#34;crondump.pl&#34; dans un &#233;diteur <br />
4. et transmettre le chemin que vous venez de copier pr&#232;s de absolute_path_of_configdir (sans espace) <br />
5. Sauvegarder crondump.pl <br />
6. Copier crondump.pl, ainsi que perltest.pl et simpletest.pl dans le r&#233;pertoire cgi-bin (Mode-ASCII par FTP) <br />
7. Donner les droits CHMOD 755 <br />
7b. Si l&#39;extension .cgi est d&#233;sir&#233;e, changer pour les trois fichiers l&#39;extension de .pl vers .cgi (action renommer) <br />
8. Appeller la configuraion dans MySQLDumper<br />
9. Choisir la page script Cron <br />
10. Changer le chemin d&#39;ex&#233;cution Perl vers /cgi-bin/ <br />
10b. Si les scripts ont l&#39;extension .cgi, changer l&#39;extension vers .cgi <br />
11. et sauvegarder la configuration <br /><br />

Voila, c&#39;est termin&#233;, les scripts s&#39;ex&#233;cutent maintenant d&#39;apr&#232;s la page de sauvegarde.<br /><br />

Si vous pouvez ex&#233;cuter Perl de tous les fichiers, il vous suffit de suivre les &#233;tapes suivantes:<br /><br />

1. Appeler dans MySQLDumper la page &#39;Sauvegarde&#39; et cliquer &#34;Backup Perl&#34;. <br />
2. Copier le chemin qui se trouve derri&#232;re le texte: crondump.pl pour $absolute_path_of_configdir: <br />
3. Ouvrir le fichier &#34;crondump.pl&#34; dans un &#233;diteur <br />
4. et transmettre le chemin que vous avez copi&#233; pr&#232;s de absolute_path_of_configdir (sans espace) <br />
5. Sauvegarder crondump.pl <br />
6. Donner les droits CHMOD 755 <br />
6b. Si l&#39;extension .cgi est d&#233;sir&#233;e, changer pour les trois fichiers l&#39;extension de .pl vers .cgi (action renommer)  <br />
(eventuellement 10b+11 ci-desus)<br />
<br />

Les utilisateurs de Windows doivent changer pour tous les scripts la premi&#232;re ligne o&#249; est stipul&#233; le chemin du programme Perl. Exemple: <br />
&#224; la place de: #!/usr/bin/perl -w <br />
remplacer par: #!C:\perl\bin\perl.exe -w <br />

<h4>Navigation</h4><ul>

<h6>Menu d&#233;roulant</h6>
Dans le menu d&#233;roulant vous s&#233;lectionnez la base de donn&#233;es.<br />
Toutes les actions suivantes se rapportent cette base de donn&#233;es.

<h6>Page d&#39;accueil</h6>
Vous trouverez ici des informations sur votre syst&#232;me, les diff&#233;rentes versions install&#233;es et des d&#233;tails sur la configuration des bases de donn&#233;es.<br />
La s&#233;lection d&#39;une base de donn&#233;es vous donnent de plus amples informations sur le nombre de tables, le nombre de paquets, la taille et la derni&#232;re mise &#224; jour.

<h6>Configuration</h6>
Ici vous pouvez &#233;diter, sauvegarder votre configuration ou bien r&#233;installer la configuration standard.
<ul><br />
	<li><a name="conf1"></a><strong>Configurer la base de donn&#233;es:</strong> Liste des bases de donn&#233;es configur&#233;es. La base de donn&#233;es active est list&#233;e en <strong>caract&#232;res gras</strong>. </li>
	<li><a name="conf2"></a><strong>Pr&#233;fix des tables:</strong> Ici vous pouvez d&#233;finir (pour chaque base de donn&#233;e) un pr&#233;fix. C&#39;est un filtre, qui permet de s&#233;lectionner lors de la sauvegarde les tables contenant le pr&#233;fix d&#233;fini (exemple: Toutes les tables qui commencent avec &#34;phpBB_&#34;). Si vous d&#233;sirer sauvgarder toutes les tables, laisser ce champ libre.</li>
	<li><a name="conf3"></a><strong>Compression GZip:</strong> Ici vous pouvez activer la compression de fichier. Nous vous conseillons la compression, car les fichiers sont plus petit et n&#233;cessitent moins de place.</li>
	<li><a name="conf5"></a><strong>Courriel avec pi&#232;ces jointes:</strong> Si vous avez activ&#233; cette option, vous recevrez apr&#232;s la cr&#233;ation de la copie de sauvegarde un courriel avec la copie de sauvegarde en pi&#232;ce jointe (Attention, la compression doit &#234;tre imp&#233;rativement activ&#233;e, sinon la pi&#232;ce jointe risque d&#39;&#234;tre trop volumineuse et ne pourra eventuellement pas &#234;tre envoy&#233;e avec le courriel!)</li>
	<li><a name="conf6"></a><strong>Adresse &#233;lectronique:</strong> Destinataire du courriel</li>
	<li><a name="conf7"></a><strong>Exp&#233;diteur du courriel:</strong> C&#39;est l&#39;adresse de l&#39;exp&#233;diteur qui apparaitra dans le courriel</li>
	<li><a name="conf13"></a><strong>Transfert FTP: </strong>Si cette option est activ&#233;e, apr&#232;s la cr&#233;ation de la copie de sauvegarde, celle-ci sera envoy&#233;e par FTP sur un serveur.</li>
	<li><a name="conf14"></a><strong>Serveur FTP: </strong>l&#39;adresse du serveur FTP (exemple: ftp.mybackups.com)</li>
	<li><a name="conf15"></a><strong>Port du serveur FTP: </strong>Port du serveur FTP (en g&#233;n&#233;ral 21)</li>
	<li><a name="conf16"></a><strong>Utilisateur FTP: </strong>Le nom de l&#39;utilisateur du compte FTP</li>
	<li><a name="conf17"></a><strong>Mot de passe FTP: </strong>Le mot de passe du compte FTP </li>
	<li><a name="conf18"></a><strong>R&#233;pertoire de t&#233;l&#233;chargement FTP: </strong>Le r&#233;pertoire dans lequel la copie de sauvegarde doit &#234;tre copi&#233;e (il doit exister des droits afin de pouvoir t&#233;l&#233;charger vers le serveur!)</li>
	<li><a name="conf8"></a><strong>Suppression automatique de la copie de sauvegarde:</strong> Si cette option est activ&#233;e, les sauvegardes les plus anciennes seront supprim&#233;e d&#39;apr&#232;s les options choisies. La combinaison d&#39;options n&#39;est pas possible.</li>
	<li><a name="conf10"></a><strong>Nombre de copie de sauvegarde:</strong> La valeur > 0 supprime toutes les copies de sauvegardes les plus anciennes except&#233; le nombre d&#233;fini dans ce champ</li>
	<li><a name="conf11"></a><strong>Langue:</strong> Ici vous d&#233;finissez la langue de votre interface.</li>
</ul>

<h6>Administration</h6>
Ici s&#39;ex&#233;cutent les actions.<br />
Toutes les copies de sauvegarde sont visibles ici.
Pour les actions de restauration ou de suppression on doit s&#233;lectionner un fichier.
<UL>
	<li><strong>Restauration:</strong> La copie de sauvegarde s&#233;lectionn&#233;e sera restaur&#233;e.</li>
	<li><strong>Suppression:</strong> La copie de sauvegarde s&#233;lectionn&#233;e sera supprim&#233;e.</li>
	<li><strong>Ex&#233;cuter une nouvelle copie de sauvegarde:</strong> Ex&#233;cution d&#39;une nouvelle copie de sauvegarde (Dump) d&#39;apr&#232;s les param&#232;tres du menu "Configuration".</li>
</UL>

<h6>Journal</h6>
Le journal vous permet de voir et de supprimer les entr&#233;es.

<h6>Cr&#233;dits / Aide</h6>
Cette page.
</ul>