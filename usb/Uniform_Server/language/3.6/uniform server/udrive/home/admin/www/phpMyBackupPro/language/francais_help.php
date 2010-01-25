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
    $html="Cliquez sur l'aide des diff�rentes pages pour avoir une aide sp�cifique � chaque page.<br>
    Vous pouvez trouver plus d'informations ici : <a href=\"".PMBP_WEBSITE."\" target=\"_blank\">".PMBP_WEBSITE."</a><br>
    Veuillez signaler les bugs ou erreurs de traduction � l'adresse ci-dessus.";
    break;
    case 'config.php': $filename=F_CONFIG;
    $html="Il y a deux niveau de configuration: celle de base et l'�tendue. Vous n'avez pas besoin de tenir compte de la configuration �tendue.
	Le * signale que la case ne doit pas �tre vide.<br><br>
    ".PMBP_I_SERVER.": Serveur utilis� par PhpMyBackupPro<br>
    "."PHP".": Version de PHP et Informations sur les modules et fonctions PHP.
    V�rification si le mode 'safe' est activ�, la limite m�moire de PHP, si le format de compression de type gzip est possibles et peut �tre envoy� par e-mails et si la fonction FTP est disponible.<br>
	Configuration de base :<br>
    "."MySQL".": Version de MySQL serveur et MySQL client.<br> 
    ".F_BACKUP.": Affiche la derni�re sauvegarde r�alis�e, la derni�re sauvegarde programm�e.<Br>
    ".LI_LOGIN.": Derniere connection - IP : .";
    break;
    case 'config.php': $filename=F_CONFIG;
    $html="Il y a deux pages de configuration : la configuration de base et la configuration �tendue. Vous ne devez pas vous soucier de la configuration �tendue.
    Le signe(caract�re) * indique les champs obligatoire.<br><br>
	Configuration de base :<br>
	".C_SITENAME.": Donne un nom au syst�me comme par ex. 'serveur de production'.<br>
	".C_LANG.": Change la langue de phpMyBackupPro. Vous pouvez t�l�charger plusieurs packs de langue sur le site du projet phpMyBackupPro.<br>
	".C_SQL_HOST.": Entrez le nom d'h�te de MySQL ex. 'localhost'.<br>
	".C_SQL_USER.": Entrez votre nom d'utilisateur MySQL.<br>
	".C_SQL_PASSWD.": Entrez votre mot de passe MySQL.<br>
	".C_SQL_DB.": Si vous ne souhaitez utiliser qu'une base de donn�es sur le serveur, vous pouvez entrer le nom de la base de donn�es ici.<br>
	".C_FTP_USE.": Cochez ceci si vous souhaitez utiliser les fonctions FTP pour envoyer vos sauvegarde automatiquement vers un serveur FTP.<br>
 	".C_FTP_BACKUP.": Cochez ceci si vous souhaitez utiliser les fonctions FTP de backup de r�pertoire.<br>
	".C_FTP_REC.": Cochez ceci si vous souhaitez sauvegarder les sous-r�pertoires.<br>
	".C_FTP_SERVER.": Entrez l'IP ou l'URL de votre serveur FTP.<br>
	".C_FTP_USER.": Entrez votre nom d'utilisateur FTP.<br>
	".C_FTP_PASSWD.": Entrez votre mot de passe FTP.<br>
	".C_FTP_PATH.": Entrez un chemin vers un r�pertoire sur le serveur FTP ou les sauvegardes vont �tre stock�es.<br>
	".C_FTP_PASV.": Cochez ceci pour utiliser le FTP passif.<br>
	".C_FTP_PORT.": Entrez le port par lequel le serveur FTP est disponible. Le port 21 est par d�faut.<br>
	".C_FTP_DEL.": Cochez ceci pour effacer les sauvegarde sur le serveur FTP automatiquement lorsqu'elles sont effac�e en local.<br>
	".C_EMAIL_USE.": Cochez ceci pour envoyer les sauvegardes automatiquement par mail.<br>
	".C_EMAIL.": Entrez l'adresse mail � laquelle vous souhaitez envoyer la sauvegarde.<br><br>
	Configuration �tendue :<br>
	".C_STYLESHEET.": Choisissez une feuille de style pour phpMyBackupPro. Vous pouvez t�l�charger et envoyer des feuilles de style sur le site du projet phpMyBackupPro.<br>
	".C_DATE.": Choisissez votre format de date pr�f�r�.<br>
	".C_LOGIN.": Vous pouvez basculer en authentification HTTP si vous voulez.<br>
    ".C_DEL_TIME.": Configure le nombre de jours apr�s lesquels la sauvegarde est automatiquement effac�e. Laissez vide ou � 0 pour d�sactiver cette fonction.<br>
	".C_DEL_NUMBER.": Configure le nombre maximum de sauvegarde stock�es pour chaque base de donn�es.<br>
	".C_TIMELIMIT.": Augmente la limite de temps de PHP si vous avez des probl�mes en faisant des sauvegardes ou des imports. Ceci n'aura aucune cons�quence si le 'safe mode' de PHP est sur 'on'.<br>
	".C_CONFIRM.": Choisissez quelles actions de l'import doivent �tre confirm�es.<br>
	".C_IMPORT_ERROR.": Cochez ceci pour recevoir une liste des erreurs d'importation si cela se produit.<br>
    ".C_DIR_BACKUP.": R�pertoire ou seront stock� les sauvegardes.<br>
	".C_DIR_REC.": Cochez ceci si vous souhaitez sauvegarder r�cursivement tous les sous-r�pertoires.<br>
	".C_NO_LOGIN.": Cochez ceci si vous voulez d�sactiver la fonction de login. Cette op�ration n'est pas recommand� car n'importe qui pourrait avoir acc�s � vos bases de donn�es !<br><br>
	Variables syst�me:<br>
	Ici vous pouvez modifier les valeurs des variables syst�me interne de phpMyBackupPro. Changez quelque chose seulement si vous savez ce que vous faite.
	Vous trouverez plus d'aide dans le fichier de documentation 'SYSTEM_VARIABLES.txt'.";
    break;
    case 'import.php': $filename=F_IMPORT;
    $html="Ici vous pouvez voir tous les fichiers de sauvegarde stock� localement actuellement.<br>
    Vous aurez plus d'informations en cliquant sur 'infos'.<br>
    En cliquant sur <b><i>'".B_VIEW."'</i></b>, vous pouvez lire le fichier de sauvegarde<br>
    Pour t�l�charger le fichier de sauvegarde cliquer <b><i>'".B_DOWNLOAD."'</i></b>.<br>
    Cliquez sur <b><i>'".B_IMPORT."'</i></b> pour r�-importer le fichier dans la base de donn�e. Avant �a vous pouvez vider la base de donn�es en cliquant sur <b><i>'".B_EMPTY_DB."'</i></b><br>
    Pour effacer un fichier de sauvegarde, cliquez sur <b><i>'effacer'</i></b>. Vous pouvez effacer tous les fichiers de sauvegarde associ�s � une base de donn�es en cliquant sur <b><i>'".B_DELETE_ALL."'</i></b>.<br><br>
    Cliquez sur <b><i>'".B_EMPTY_ALL."'</i></b> pour vider toutes les bases de donn�es disponibles, <br>
    cliquez sur <b><i>'".B_IMPORT_ALL."'</i></b> pour importer toutes les derni�res sauvegardes de chaque bases de donn�es,<br>
    cliquez sur <b><i>'".B_DELETE_ALL."'</i></b> pour effacer tous les fichiers de sauvegardes disponibles.";
    break;
    case 'backup.php': $filename=F_BACKUP;
    $html="Ici vous pouvez choisir les bases de donn�es que vous souhaitez sauvegarder.<br>
    Un commentaire sera sauvegard� pour chaque fichier de sauvegarde.<br>
    Vous pouvez choisir de sauvegarder la structure de la table, les donn�es ou les deux.<br>
    Ajouter un 'drop table if exists ...' � chaque table en cliquant sur 'add drop table'<br>
    Vous pouvez aussi choisir le format de compression pour le fichier de sauvegarde. Il est possible que sur votre syst�me, tous les formats ne soient pas disponibles.
    Le format zip est encore exp�rimental. Confirmez-moi si la sauvegarde zip marche correctement !<br><br>
   	Si vous avez activ� la fonciton de sauvegarde FTP, Vous pouvez aussi sauvegarder tout les r�pertoire sur votre serveur FTP.<br>
  	Les r�pertoire choisis ici et leurs fichiers seront copi�s sur le '".C_FTP_PATH."' configur� sur la page '".F_CONFIG."'.<br>
  	Il n'est pas possible de compresser ou d'envoyer par mail les fichiers. La liste des r�pertoires est g�n�r�e une seule fois au login. Si vous voulez
  	mettre � jour la liste, cliquez sur '".PMBP_EXS_UPDATE_DIRS."'.";
    break;
    case 'scheduled.php': $filename=F_SCHEDULE;
    $html="Pour automatiser une sauvegarde, vous pouvez g�n�rer un code � inclure dans un script PHP existant.<br>
    Lorsque ce script sera charg�, la sauvegarde commencera automatiquement. Vous pouvez d�cider de la fr�quence � laquelle la sauvegarde s'effectuera.<br><br>
    Ensuite, choisissez l'endroit ou le script sera enregistr� pour �tre ex�cut� par la suite. Le r�pertoire phpMyBackupPro.".PMBP_VERSION." ne doit plus �tre chang� apr�s �a !
	(Si vous avez des connaissances en programmation PHP vous pourrez changer le chemin plus tard.)<br><br>
	Un click sur '".EXS_SHOW."' va vous montrer le script g�n�r�, vous pouvez l'utiliser pour faire une sauvegarde programm�e. Copiez le code et ins�rez le dans un fichier existant,
	ou utilisez '".C_SAVE."' pour sauvegarder le script automatiquement l� ou vous avec renseign� le nom du fichier ! Ceci �crasera un �ventuel fichier existant sous le m�me nom !<br>
	Note : Le fichier doit �tre dans le r�pertoire que vous avez choisi dans la page pr�c�dente pour que �a marche correctement !<br>
    La sauvegarde marchera uniquement si quelqu'un ouvre le script ! Vous pouvez l'ins�rer dans un fichier PHP existant ou dans une frame invisible.<br><br>
    Toute la configuration que vous avez fait marchera avec ce script !<br> Vous trouverez plus d'information � propos de la sauvegarde dans l'aide de la partie 'sauvegarde'.";
    break;
    case 'db_info.php': $filename=F_DB_INFO;
    $html="Ici vous pouvez voir un petit r�sum� de vos bases de donn�es.<br><br>
    Dans la colonne 'nombre d'enregistrements' vous trouverez le nombre total d'enregistrements de toutes les tables.<br>
    Si une base de donn�es contient des tables, vous pouvez cliquer sur 'infos tables' pour conna�tre les noms, le nombre de champs, le nombre d'enregistrements et la taille de toutes les tables des bases de donn�e respectives.<br>
    Les tailles peuvent �tre diff�rentes de la taille des fichiers de sauvegarde et ce parce qu'ils contiennent les donn�es additionnelles du fichier de sauvegarde.";
    break;
    case 'sql_query.php': $filename=F_SQL_QUERY;
    $html="Cette page est faite pour ex�cuter des requ�tes simples sur la base de donn�e.<br><br>
    Vous pouvez choisir la base de donn�es sur laquelle la requete va �tre ex�cut�e.<br>
    Vous pouvez entrer une ou plusieurs requ�tes sql dans la boite de dialogue.<br>
    Les requetes comme 'select ...' vont retourner une table comme r�ponse.<br>
    Quelques requ�tes comme 'delete ...' vont uniquement vous dire '".SQ_SUCCESS."'<br><br>
    Si vous ex�cutez un fichier de plusieurs requ�tes, vous aurez un message d'erreur pour chaque erreur survenues ! (et il peut y en avoir beaucoup !)<br>
    Le dernier message d'erreur contient une liste de toutes les requetes � l'origine d'une erreur. Un 'F' avant un num�ro de requ�te signifie que cette requ�te �tait dans le fichier.<br><br>
    Ces fonctions ne sont pas encore matures ! Il n'y a aucune garantie que toutes les requ�tes correctes soient ex�cut�es avec succ�s !";
    break;
    default: $html="D�sol�, aucune aide disponible pour cette page.";
}

echo "<tr>\n<td>\n";
if ($filename) echo "<br><div class=\"bold_left\">Aide pour ".$filename.":</div><br>\n";
echo $html;
echo "</td>\n</tr>\n</table>\n</body>\n</html>";
?>
