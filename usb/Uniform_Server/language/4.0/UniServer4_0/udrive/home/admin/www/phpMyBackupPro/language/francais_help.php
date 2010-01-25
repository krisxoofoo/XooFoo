<?php
/*
 +--------------------------------------------------------------------------+
 | phpMyBackupPro                                                           |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2004-2007 by Dirk Randhahn                                 |                               
 | http://www.phpMyBackupPro.net											|
 | version information can be found in definitions.php.                     |
 |                                                                          |
 | This program is free software; you can redistribute it and/or            |
 | modify it under the terms of the GNU General Public License              |
 | as published by the Free Software Foundation; either version 2           |
 | of the License, or (at your option) any later version.                   |
 |                                                                          |
 | This program is distributed in the hope that it will be useful,          |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
 | GNU General Public License for more details.                             |
 |                                                                          |
 | You should have received a copy of the GNU General Public License        |
 | along with this program; if not, write to the Free Software              |
 | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307,USA.|
 +--------------------------------------------------------------------------+
*/
/**
 * @translation     kris_fr (http://www.xoofoo.org)
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8
 *
 * @version         $Id$
**/

chdir("..");
require_once("definitions.php");

echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\"
   \"http://www.w3.org/TR/html4/loose.dtd\">
<html".ARABIC_HTML.">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=".BD_CHARSET_HTML."\">
<link rel=\"stylesheet\" href=\"./../".PMBP_STYLESHEET_DIR.$CONF['stylesheet'].".css\" type=\"text/css\">
<title>phpMyBackupPro - ".F_HELP."</title>
</head>
<body>
<table border=\"0\" cellspacing=\"2\" cellpadding=\"0\" width=\"100%\">\n
<tr><th colspan=\"2\" class=\"active\">";
echo PMBP_image_tag("../".PMBP_IMAGE_DIR."logo.png","phpMyBackupPro PMBP_WEBSITE",PMBP_WEBSITE);
echo "</th></tr>\n";

// choose help text
switch(preg_replace("'^.*/'","",$_GET['script'])) {
    case 'index.php': $filename=F_START;
    $html="Cliquez sur l&#39;aide des diff&eacute;rentes pages pour avoir une aide sp&eacute;cifique &agrave; chaque page.<br />
    Vous pouvez trouver plus d&#39;informations ici : <a href=\"".PMBP_WEBSITE."\" target=\"_blank\">".PMBP_WEBSITE."</a><br />
    Veuillez signaler les bugs ou erreurs de traduction &agrave; l&#39;adresse ci-dessus.";
    break;
    case 'config.php': $filename=F_CONFIG;
    $html="Il y a deux niveau de configuration: celle de base et l&#39;&eacute;tendue. Vous n&#39;avez pas besoin de tenir compte de la configuration &eacute;tendue.
	Le * signale que la case ne doit pas &ecirc;tre vide.<br /><br />
    ".PMBP_I_SERVER.": Serveur utilis&eacute; par PhpMyBackupPro<br />
    "."PHP".": Version de PHP et Informations sur les modules et fonctions PHP.
    V&eacute;rification si le mode &#39;safe&#39; est activ&eacute;, la limite m&eacute;moire de PHP, si le format de compression de type gzip est possible et peut &ecirc;tre envoy&eacute; par e-mails et si la fonction FTP est disponible.<br />
	Configuration de base :<br />
    "."MySQL".": Version de MySQL serveur et MySQL client.<br /> 
    ".F_BACKUP.": Affiche la derni&egrave;re sauvegarde r&eacute;alis&eacute;e, la derni&egrave;re sauvegarde programm&eacute;e.<br />
    ".LI_LOGIN.": Derniere connection - IP : .";
    break;
    case 'config.php': $filename=F_CONFIG;
    $html="Il y a deux pages de configuration : la configuration de base et la configuration &eacute;tendue. Vous ne devez pas vous soucier de la configuration &eacute;tendue.
    Le signe(caract&egrave;re) * indique les champs obligatoire.<br /><br />
	Configuration de base :<br />
	".C_SITENAME.": Donne un nom au syst&egrave;me comme par ex. &#39;serveur de production&#39;.<br />
	".C_LANG.": Change la langue de phpMyBackupPro. Vous pouvez t&eacute;l&eacute;charger plusieurs packs de langue sur le site du projet phpMyBackupPro.<br />
	".C_SQL_HOST.": Entrez le nom d&#39;hôte de MySQL ex. &#39;localhost&#39;.<br />
	".C_SQL_USER.": Entrez votre nom d&#39;utilisateur MySQL.<br />
	".C_SQL_PASSWD.": Entrez votre mot de passe MySQL.<br />
	".C_SQL_DB.": Si vous ne souhaitez utiliser qu&#39;une base de donn&eacute;es sur le serveur, vous pouvez entrer le nom de la base de donn&eacute;es ici.<br />
	".C_FTP_USE.": Cochez ceci si vous souhaitez utiliser les fonctions FTP pour envoyer vos sauvegarde automatiquement vers un serveur FTP.<br />
 	".C_FTP_BACKUP.": Cochez ceci si vous souhaitez utiliser les fonctions FTP de backup de r&eacute;pertoire.<br />
	".C_FTP_REC.": Cochez ceci si vous souhaitez sauvegarder les sous-r&eacute;pertoires.<br />
	".C_FTP_SERVER.": Entrez l&#39;IP ou l&#39;URL de votre serveur FTP.<br />
	".C_FTP_USER.": Entrez votre nom d&#39;utilisateur FTP.<br />
	".C_FTP_PASSWD.": Entrez votre mot de passe FTP.<br />
	".C_FTP_PATH.": Entrez un chemin vers un r&eacute;pertoire sur le serveur FTP ou les sauvegardes vont &ecirc;tre stock&eacute;es.<br />
	".C_FTP_PASV.": Cochez ceci pour utiliser le FTP passif.<br />
	".C_FTP_PORT.": Entrez le port par lequel le serveur FTP est disponible. Le port 21 est par d&eacute;faut.<br />
	".C_FTP_DEL.": Cochez ceci pour effacer les sauvegarde sur le serveur FTP automatiquement lorsqu&#39;elles sont effac&eacute;e en local.<br />
	".C_EMAIL_USE.": Cochez ceci pour envoyer les sauvegardes automatiquement par mail.<br />
	".C_EMAIL.": Entrez l&#39;adresse mail &agrave; laquelle vous souhaitez envoyer la sauvegarde.<br /><br />
	Configuration &eacute;tendue :<br />
	".C_STYLESHEET.": Choisissez une feuille de style pour phpMyBackupPro. Vous pouvez t&eacute;l&eacute;charger et envoyer des feuilles de style sur le site du projet phpMyBackupPro.<br />
	".C_DATE.": Choisissez votre format de date pr&eacute;f&eacute;r&eacute;.<br />
	".C_LOGIN.": Vous pouvez basculer en authentification HTTP si vous voulez.<br />
    ".C_DEL_TIME.": Configure le nombre de jours apr&egrave;s lesquels la sauvegarde est automatiquement effac&eacute;e. Laissez vide ou &agrave; 0 pour d&eacute;sactiver cette fonction.<br />
	".C_DEL_NUMBER.": Configure le nombre maximum de sauvegarde stock&eacute;es pour chaque base de donn&eacute;es.<br />
	".C_TIMELIMIT.": Augmente la limite de temps de PHP si vous avez des probl&egrave;mes en faisant des sauvegardes ou des imports. Ceci n&#39;aura aucune cons&eacute;quence si le &#39;safe mode&#39; de PHP est sur &#39;on&#39;.<br />
	".C_CONFIRM.": Choisissez quelles actions de l&#39;import doivent &ecirc;tre confirm&eacute;es.<br />
	".C_IMPORT_ERROR.": Cochez ceci pour recevoir une liste des erreurs d&#39;importation si cela se produit.<br />
    ".C_DIR_BACKUP.": R&eacute;pertoire ou seront stock&eacute; les sauvegardes.<br />
	".C_DIR_REC.": Cochez ceci si vous souhaitez sauvegarder r&eacute;cursivement tous les sous-r&eacute;pertoires.<br />
	".C_NO_LOGIN.": Cochez ceci si vous voulez d&eacute;sactiver la fonction de login. Cette op&eacute;ration n&#39;est pas recommand&eacute; car n&#39;importe qui pourrait avoir acc&egrave;s &agrave; vos bases de donn&eacute;es !<br /><br />
	Variables syst&egrave;me:<br />
	Ici vous pouvez modifier les valeurs des variables syst&egrave;me interne de phpMyBackupPro. Changez quelque chose seulement si vous savez ce que vous faite.
	Vous trouverez plus d&#39;aide dans le fichier de documentation &#39;SYSTEM_VARIABLES.txt&#39;.";
    break;
    case 'import.php': $filename=F_IMPORT;
    $html="Ici vous pouvez voir tous les fichiers de sauvegarde stock&eacute; localement actuellement.<br />
    Vous aurez plus d&#39;informations en cliquant sur &#39;infos&#39;.<br />
    En cliquant sur <strong><i>&#39;".B_VIEW."&#39;</i></strong>, vous pouvez lire le fichier de sauvegarde<br />
    Pour t&eacute;l&eacute;charger le fichier de sauvegarde cliquer <strong><i>&#39;".B_DOWNLOAD."&#39;</i></strong>.<br />
    Cliquez sur <strong><i>&#39;".B_IMPORT."&#39;</i></strong> pour r&eacute;-importer le fichier dans la base de donn&eacute;e. Avant ça vous pouvez vider la base de donn&eacute;es en cliquant sur <strong><i>&#39;".B_EMPTY_DB."&#39;</i></strong><br />
    Pour effacer un fichier de sauvegarde, cliquez sur <strong><i>&#39;effacer&#39;</i></strong>. Vous pouvez effacer tous les fichiers de sauvegarde associ&eacute;s &agrave; une base de donn&eacute;es en cliquant sur <strong><i>&#39;".B_DELETE_ALL."&#39;</i></strong>.<br /><br />
    Cliquez sur <strong><i>&#39;".B_EMPTY_ALL."&#39;</i></strong> pour vider toutes les bases de donn&eacute;es disponibles, <br />
    cliquez sur <strong><i>&#39;".B_IMPORT_ALL."&#39;</i></strong> pour importer toutes les derni&egrave;res sauvegardes de chaque bases de donn&eacute;es,<br />
    cliquez sur <strong><i>&#39;".B_DELETE_ALL."&#39;</i></strong> pour effacer tous les fichiers de sauvegardes disponibles.";
    break;
    case 'backup.php': $filename=F_BACKUP;
    $html="Ici vous pouvez choisir les bases de donn&eacute;es que vous souhaitez sauvegarder.<br />
    Un commentaire sera sauvegard&eacute; pour chaque fichier de sauvegarde.<br />
    Vous pouvez choisir de sauvegarder la structure de la table, les donn&eacute;es ou les deux.<br />
    Ajouter un &#39;drop table if exists ...&#39; &agrave; chaque table en cliquant sur &#39;add drop table&#39;<br />
    Vous pouvez aussi choisir le format de compression pour le fichier de sauvegarde. Il est possible que sur votre syst&egrave;me, tous les formats ne soient pas disponibles.
    Le format zip est encore exp&eacute;rimental. Confirmez-moi si la sauvegarde zip marche correctement !<br /><br />
   	Si vous avez activ&eacute; la fonciton de sauvegarde FTP, Vous pouvez aussi sauvegarder tout les r&eacute;pertoire sur votre serveur FTP.<br />
  	Les r&eacute;pertoire choisis ici et leurs fichiers seront copi&eacute;s sur le &#39;".C_FTP_PATH."&#39; configur&eacute; sur la page &#39;".F_CONFIG."&#39;.<br />
  	Il n&#39;est pas possible de compresser ou d&#39;envoyer par mail les fichiers. La liste des r&eacute;pertoires est g&eacute;n&eacute;r&eacute;e une seule fois au login. Si vous voulez
  	mettre &agrave; jour la liste, cliquez sur &#39;".PMBP_EXS_UPDATE_DIRS."&#39;.";
    break;
    case 'scheduled.php': $filename=F_SCHEDULE;
    $html="Pour automatiser une sauvegarde, vous pouvez g&eacute;n&eacute;rer un code &agrave; inclure dans un script PHP existant.<br />
    Lorsque ce script sera charg&eacute;, la sauvegarde commencera automatiquement. Vous pouvez d&eacute;cider de la fr&eacute;quence &agrave; laquelle la sauvegarde s&#39;effectuera.<br /><br />
    Ensuite, choisissez l&#39;endroit ou le script sera enregistr&eacute; pour &ecirc;tre ex&eacute;cut&eacute; par la suite. Le r&eacute;pertoire phpMyBackupPro.".PMBP_VERSION." ne doit plus &ecirc;tre chang&eacute; apr&egrave;s ça !
	(Si vous avez des connaissances en programmation PHP vous pourrez changer le chemin plus tard.)<br /><br />
	Un click sur &#39;".EXS_SHOW."&#39; va vous montrer le script g&eacute;n&eacute;r&eacute;, vous pouvez l&#39;utiliser pour faire une sauvegarde programm&eacute;e. Copiez le code et ins&eacute;rez le dans un fichier existant,
	ou utilisez &#39;".C_SAVE."&#39; pour sauvegarder le script automatiquement l&agrave; ou vous avec renseign&eacute; le nom du fichier ! Ceci &eacute;crasera un &eacute;ventuel fichier existant sous le m&ecirc;me nom !<br />
	Note : Le fichier doit &ecirc;tre dans le r&eacute;pertoire que vous avez choisi dans la page pr&eacute;c&eacute;dente pour que ça marche correctement !<br />
    La sauvegarde marchera uniquement si quelqu&#39;un ouvre le script ! Vous pouvez l&#39;ins&eacute;rer dans un fichier PHP existant ou dans une frame invisible.<br /><br />
    Toute la configuration que vous avez fait marchera avec ce script !<br /> Vous trouverez plus d&#39;information &agrave; propos de la sauvegarde dans l&#39;aide de la partie &#39;sauvegarde&#39;.";
    break;
    case 'db_info.php': $filename=F_DB_INFO;
    $html="Ici vous pouvez voir un petit r&eacute;sum&eacute; de vos bases de donn&eacute;es.<br /><br />
    Dans la colonne &#39;nombre d&#39;enregistrements&#39; vous trouverez le nombre total d&#39;enregistrements de toutes les tables.<br />
    Si une base de donn&eacute;es contient des tables, vous pouvez cliquer sur &#39;infos tables&#39; pour conna&icirc;tre les noms, le nombre de champs, le nombre d&#39;enregistrements et la taille de toutes les tables des bases de donn&eacute;e respectives.<br />
    Les tailles peuvent &ecirc;tre diff&eacute;rentes de la taille des fichiers de sauvegarde et ce parce qu&#39;ils contiennent les donn&eacute;es additionnelles du fichier de sauvegarde.";
    break;
    case 'sql_query.php': $filename=F_SQL_QUERY;
    $html="Cette page est faite pour ex&eacute;cuter des requ&ecirc;tes simples sur la base de donn&eacute;e.<br /><br />
    Vous pouvez choisir la base de donn&eacute;es sur laquelle la requ&ecirc;te va &ecirc;tre ex&eacute;cut&eacute;e.<br />
    Vous pouvez entrer une ou plusieurs requ&ecirc;tes sql dans la boite de dialogue.<br />
    Les requ&ecirc;tes comme &#39;select ...&#39; vont retourner une table comme r&eacute;ponse.<br />
    Quelques requ&ecirc;tes comme &#39;delete ...&#39; vont uniquement vous dire &#39;".SQ_SUCCESS."&#39;<br /><br />
    Si vous ex&eacute;cutez un fichier de plusieurs requ&ecirc;tes, vous aurez un message d&#39;erreur pour chaque erreur survenues ! (et il peut y en avoir beaucoup !)<br />
    Le dernier message d&#39;erreur contient une liste de toutes les requ&ecirc;tes &agrave; l&#39;origine d&#39;une erreur. Un &#39;F&#39; avant un num&eacute;ro de requ&ecirc;te signifie que cette requ&ecirc;te &eacute;tait dans le fichier.<br /><br />
    Ces fonctions ne sont pas encore matures ! Il n&#39;y a aucune garantie que toutes les requ&ecirc;tes correctes soient ex&eacute;cut&eacute;es avec succ&egrave;s !";
    break;
    default: $html="D&eacute;sol&eacute;, aucune aide disponible pour cette page.";
}

echo "<tr>\n<td>\n";
if ($filename) echo "<br /><div class=\"bold_left\">Aide pour ".$filename.":</div><br />\n";
echo $html;
echo "</td>\n</tr>\n</table>\n</body>\n</html>";
?>
