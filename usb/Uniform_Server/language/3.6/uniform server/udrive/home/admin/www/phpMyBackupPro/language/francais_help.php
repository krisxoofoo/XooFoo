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
/*
 +--------------------------------------------------------------------------+
 | phpMyBackupPro French translation                                        |
 +--------------------------------------------------------------------------+
 | French translation 2.1                                                   |
 | (c) A. Christophe 2007                                                   |
 +--------------------------------------------------------------------------+
*/

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
    $html="Cliquez sur l'aide des différentes pages pour avoir une aide spécifique à chaque page.<br>
    Vous pouvez trouver plus d'informations ici : <a href=\"".PMBP_WEBSITE."\" target=\"_blank\">".PMBP_WEBSITE."</a><br>
    Veuillez signaler les bugs ou erreurs de traduction à l'adresse ci-dessus.";
    break;
    case 'config.php': $filename=F_CONFIG;
    $html="Il y a deux niveau de configuration: celle de base et l'étendue. Vous n'avez pas besoin de tenir compte de la configuration étendue.
	Le * signale que la case ne doit pas être vide.<br><br>
    ".PMBP_I_SERVER.": Serveur utilisé par PhpMyBackupPro<br>
    "."PHP".": Version de PHP et Informations sur les modules et fonctions PHP.
    Vérification si le mode 'safe' est activé, la limite mémoire de PHP, si le format de compression de type gzip est possibles et peut être envoyé par e-mails et si la fonction FTP est disponible.<br>
	Configuration de base :<br>
    "."MySQL".": Version de MySQL serveur et MySQL client.<br> 
    ".F_BACKUP.": Affiche la dernière sauvegarde réalisée, la dernière sauvegarde programmée.<Br>
    ".LI_LOGIN.": Derniere connection - IP : .";
    break;
    case 'config.php': $filename=F_CONFIG;
    $html="Il y a deux pages de configuration : la configuration de base et la configuration étendue. Vous ne devez pas vous soucier de la configuration étendue.
    Le signe(caractère) * indique les champs obligatoire.<br><br>
	Configuration de base :<br>
	".C_SITENAME.": Donne un nom au système comme par ex. 'serveur de production'.<br>
	".C_LANG.": Change la langue de phpMyBackupPro. Vous pouvez télécharger plusieurs packs de langue sur le site du projet phpMyBackupPro.<br>
	".C_SQL_HOST.": Entrez le nom d'hôte de MySQL ex. 'localhost'.<br>
	".C_SQL_USER.": Entrez votre nom d'utilisateur MySQL.<br>
	".C_SQL_PASSWD.": Entrez votre mot de passe MySQL.<br>
	".C_SQL_DB.": Si vous ne souhaitez utiliser qu'une base de données sur le serveur, vous pouvez entrer le nom de la base de données ici.<br>
	".C_FTP_USE.": Cochez ceci si vous souhaitez utiliser les fonctions FTP pour envoyer vos sauvegarde automatiquement vers un serveur FTP.<br>
 	".C_FTP_BACKUP.": Cochez ceci si vous souhaitez utiliser les fonctions FTP de backup de répertoire.<br>
	".C_FTP_REC.": Cochez ceci si vous souhaitez sauvegarder les sous-répertoires.<br>
	".C_FTP_SERVER.": Entrez l'IP ou l'URL de votre serveur FTP.<br>
	".C_FTP_USER.": Entrez votre nom d'utilisateur FTP.<br>
	".C_FTP_PASSWD.": Entrez votre mot de passe FTP.<br>
	".C_FTP_PATH.": Entrez un chemin vers un répertoire sur le serveur FTP ou les sauvegardes vont être stockées.<br>
	".C_FTP_PASV.": Cochez ceci pour utiliser le FTP passif.<br>
	".C_FTP_PORT.": Entrez le port par lequel le serveur FTP est disponible. Le port 21 est par défaut.<br>
	".C_FTP_DEL.": Cochez ceci pour effacer les sauvegarde sur le serveur FTP automatiquement lorsqu'elles sont effacée en local.<br>
	".C_EMAIL_USE.": Cochez ceci pour envoyer les sauvegardes automatiquement par mail.<br>
	".C_EMAIL.": Entrez l'adresse mail à laquelle vous souhaitez envoyer la sauvegarde.<br><br>
	Configuration étendue :<br>
	".C_STYLESHEET.": Choisissez une feuille de style pour phpMyBackupPro. Vous pouvez télécharger et envoyer des feuilles de style sur le site du projet phpMyBackupPro.<br>
	".C_DATE.": Choisissez votre format de date préféré.<br>
	".C_LOGIN.": Vous pouvez basculer en authentification HTTP si vous voulez.<br>
    ".C_DEL_TIME.": Configure le nombre de jours après lesquels la sauvegarde est automatiquement effacée. Laissez vide ou à 0 pour désactiver cette fonction.<br>
	".C_DEL_NUMBER.": Configure le nombre maximum de sauvegarde stockées pour chaque base de données.<br>
	".C_TIMELIMIT.": Augmente la limite de temps de PHP si vous avez des problèmes en faisant des sauvegardes ou des imports. Ceci n'aura aucune conséquence si le 'safe mode' de PHP est sur 'on'.<br>
	".C_CONFIRM.": Choisissez quelles actions de l'import doivent être confirmées.<br>
	".C_IMPORT_ERROR.": Cochez ceci pour recevoir une liste des erreurs d'importation si cela se produit.<br>
    ".C_DIR_BACKUP.": Répertoire ou seront stocké les sauvegardes.<br>
	".C_DIR_REC.": Cochez ceci si vous souhaitez sauvegarder récursivement tous les sous-répertoires.<br>
	".C_NO_LOGIN.": Cochez ceci si vous voulez désactiver la fonction de login. Cette opération n'est pas recommandé car n'importe qui pourrait avoir accès à vos bases de données !<br><br>
	Variables système:<br>
	Ici vous pouvez modifier les valeurs des variables système interne de phpMyBackupPro. Changez quelque chose seulement si vous savez ce que vous faite.
	Vous trouverez plus d'aide dans le fichier de documentation 'SYSTEM_VARIABLES.txt'.";
    break;
    case 'import.php': $filename=F_IMPORT;
    $html="Ici vous pouvez voir tous les fichiers de sauvegarde stocké localement actuellement.<br>
    Vous aurez plus d'informations en cliquant sur 'infos'.<br>
    En cliquant sur <b><i>'".B_VIEW."'</i></b>, vous pouvez lire le fichier de sauvegarde<br>
    Pour télécharger le fichier de sauvegarde cliquer <b><i>'".B_DOWNLOAD."'</i></b>.<br>
    Cliquez sur <b><i>'".B_IMPORT."'</i></b> pour ré-importer le fichier dans la base de donnée. Avant ça vous pouvez vider la base de données en cliquant sur <b><i>'".B_EMPTY_DB."'</i></b><br>
    Pour effacer un fichier de sauvegarde, cliquez sur <b><i>'effacer'</i></b>. Vous pouvez effacer tous les fichiers de sauvegarde associés à une base de données en cliquant sur <b><i>'".B_DELETE_ALL."'</i></b>.<br><br>
    Cliquez sur <b><i>'".B_EMPTY_ALL."'</i></b> pour vider toutes les bases de données disponibles, <br>
    cliquez sur <b><i>'".B_IMPORT_ALL."'</i></b> pour importer toutes les dernières sauvegardes de chaque bases de données,<br>
    cliquez sur <b><i>'".B_DELETE_ALL."'</i></b> pour effacer tous les fichiers de sauvegardes disponibles.";
    break;
    case 'backup.php': $filename=F_BACKUP;
    $html="Ici vous pouvez choisir les bases de données que vous souhaitez sauvegarder.<br>
    Un commentaire sera sauvegardé pour chaque fichier de sauvegarde.<br>
    Vous pouvez choisir de sauvegarder la structure de la table, les données ou les deux.<br>
    Ajouter un 'drop table if exists ...' à chaque table en cliquant sur 'add drop table'<br>
    Vous pouvez aussi choisir le format de compression pour le fichier de sauvegarde. Il est possible que sur votre système, tous les formats ne soient pas disponibles.
    Le format zip est encore expérimental. Confirmez-moi si la sauvegarde zip marche correctement !<br><br>
   	Si vous avez activé la fonciton de sauvegarde FTP, Vous pouvez aussi sauvegarder tout les répertoire sur votre serveur FTP.<br>
  	Les répertoire choisis ici et leurs fichiers seront copiés sur le '".C_FTP_PATH."' configuré sur la page '".F_CONFIG."'.<br>
  	Il n'est pas possible de compresser ou d'envoyer par mail les fichiers. La liste des répertoires est générée une seule fois au login. Si vous voulez
  	mettre à jour la liste, cliquez sur '".PMBP_EXS_UPDATE_DIRS."'.";
    break;
    case 'scheduled.php': $filename=F_SCHEDULE;
    $html="Pour automatiser une sauvegarde, vous pouvez générer un code à inclure dans un script PHP existant.<br>
    Lorsque ce script sera chargé, la sauvegarde commencera automatiquement. Vous pouvez décider de la fréquence à laquelle la sauvegarde s'effectuera.<br><br>
    Ensuite, choisissez l'endroit ou le script sera enregistré pour être exécuté par la suite. Le répertoire phpMyBackupPro.".PMBP_VERSION." ne doit plus être changé après ça !
	(Si vous avez des connaissances en programmation PHP vous pourrez changer le chemin plus tard.)<br><br>
	Un click sur '".EXS_SHOW."' va vous montrer le script généré, vous pouvez l'utiliser pour faire une sauvegarde programmée. Copiez le code et insérez le dans un fichier existant,
	ou utilisez '".C_SAVE."' pour sauvegarder le script automatiquement là ou vous avec renseigné le nom du fichier ! Ceci écrasera un éventuel fichier existant sous le même nom !<br>
	Note : Le fichier doit être dans le répertoire que vous avez choisi dans la page précédente pour que ça marche correctement !<br>
    La sauvegarde marchera uniquement si quelqu'un ouvre le script ! Vous pouvez l'insérer dans un fichier PHP existant ou dans une frame invisible.<br><br>
    Toute la configuration que vous avez fait marchera avec ce script !<br> Vous trouverez plus d'information à propos de la sauvegarde dans l'aide de la partie 'sauvegarde'.";
    break;
    case 'db_info.php': $filename=F_DB_INFO;
    $html="Ici vous pouvez voir un petit résumé de vos bases de données.<br><br>
    Dans la colonne 'nombre d'enregistrements' vous trouverez le nombre total d'enregistrements de toutes les tables.<br>
    Si une base de données contient des tables, vous pouvez cliquer sur 'infos tables' pour connaître les noms, le nombre de champs, le nombre d'enregistrements et la taille de toutes les tables des bases de donnée respectives.<br>
    Les tailles peuvent être différentes de la taille des fichiers de sauvegarde et ce parce qu'ils contiennent les données additionnelles du fichier de sauvegarde.";
    break;
    case 'sql_query.php': $filename=F_SQL_QUERY;
    $html="Cette page est faite pour exécuter des requêtes simples sur la base de donnée.<br><br>
    Vous pouvez choisir la base de données sur laquelle la requete va être exécutée.<br>
    Vous pouvez entrer une ou plusieurs requêtes sql dans la boite de dialogue.<br>
    Les requetes comme 'select ...' vont retourner une table comme réponse.<br>
    Quelques requêtes comme 'delete ...' vont uniquement vous dire '".SQ_SUCCESS."'<br><br>
    Si vous exécutez un fichier de plusieurs requêtes, vous aurez un message d'erreur pour chaque erreur survenues ! (et il peut y en avoir beaucoup !)<br>
    Le dernier message d'erreur contient une liste de toutes les requetes à l'origine d'une erreur. Un 'F' avant un numéro de requête signifie que cette requête était dans le fichier.<br><br>
    Ces fonctions ne sont pas encore matures ! Il n'y a aucune garantie que toutes les requêtes correctes soient exécutées avec succès !";
    break;
    default: $html="Désolé, aucune aide disponible pour cette page.";
}

echo "<tr>\n<td>\n";
if ($filename) echo "<br><div class=\"bold_left\">Aide pour ".$filename.":</div><br>\n";
echo $html;
echo "</td>\n</tr>\n</table>\n</body>\n</html>";
?>
