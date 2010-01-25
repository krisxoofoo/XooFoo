<?php
/*
 +--------------------------------------------------------------------------+
 | phpMyBackupPro                                                           |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2004-2007 by Dirk Randhahn                                 |                               
 | http://www.phpMyBackupPro.net                                            |
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

/*basic data*/
define('BD_LANG_SHORTCUT',"fr"); // Utilis� par la fonction php setlocale()
define('BD_DATE_FORMAT',"%x %X"); // Utilis� par la fonction php strftime()
define('BD_CHARSET_HTML',"ISO-8859-1"); // Norme ISO pour la language html
define('BD_CHARSET_EMAIL',"ISO-8859-1"); // Norme ISO pour les caract�res MIME-emails

/*functions.inc.php*/
define('F_START',"D�but");
define('F_CONFIG',"Configuration");
define('F_IMPORT',"Importer");
define('F_BACKUP',"Sauvegardes");
define('F_SCHEDULE',"Sauvegarde programm�e");
define('F_DB_INFO',"Info sur la base de donn�es");
define('F_SQL_QUERY',"Requ�te SQL");
define('F_HELP',"Aide");
define('F_LOGOUT',"D�connexion");
define('F_FOOTER',"Visitez le %ssite du projet phpMyBackupPro%s pour de nouvelles versions et des infos.");
define('F_NOW_AVAILABLE',"Une nouvelle version de phpMyBackupPro est maintenant disponible sur %s".PMBP_WEBSITE."%s");
define('F_SELECT_DB',"Choisissez la base de donn�es � sauvegarder");
define('F_SELECT_ALL',"Tout selectionner");
define('F_COMMENTS',"Commentaires");
define('F_EX_TABLES',"exporter les tables");
define('F_EX_DATA',"exporter les donn�es");
define('F_EX_DROP',"ajouter 'drop table'");
define('F_EX_COMP',"compression");
define('F_EX_OFF',"aucune");
define('F_EX_GZIP',"gzip");
define('F_EX_ZIP',"zip");
define('F_FTP_1',"La connexion FTP a �chou�");
define('F_FTP_2',"Impossible de se connecter avec ce nom d'utilisateur");
define('F_FTP_3',"Echec de l'envoi FTP");
define('F_FTP_4',"Fichier envoy� avec succ�s comme");
define('F_FTP_5',"L'effacement du fichier '%s' sur le FTP a �chou�");
define('F_FTP_6',"Le fichier '%s' a �t� effac� du FTP avec succ�s");
define('F_FTP_7',"Fichier '%s' non disponible sur le serveur FTP");
define('F_MAIL_1',"L'adresse mail n'est pas correct");
define('F_MAIL_2',"Ce mail a �t� envoy� par phpMyBackupPro ".PMBP_VERSION." ".PMBP_WEBSITE." running on");
define('F_MAIL_3',"ne peut pas �tre lu");
define('F_MAIL_4',"Sauvegarde MySQL de");
define('F_MAIL_5',"Le mail n'a pas pu �tre envoy�");
define('F_MAIL_6',"Les fichiers ont �t� envoy� par mail avec succ�s �");
define('F_YES',"oui");
define('F_NO',"non");
define('F_DURATION',"Dur�e");
define('F_SECONDS',"secondes");
define('F_WRONG_FILE',"Il semblerait que ce soit pas le fichier .zip correct, mais il est possible que ce soit un bug dans phpMyBackupPro");
define('F_DEL_FAILED',"La sauvegarde %s ne peut pas �tre effac�e.");

/*index.php*/
define('I_SQL_ERROR',"ERREUR: Veuillez entrer vos donn�e MySQL correct dans la 'configuration'!");
define('I_NAME',"Bienvenue dans phpMyBackupPro");
define('I_WELCOME',"phpMyBackupPro est un logiciel libre sous licence GNU GPL.<br>
En cas de probl�me consultez l'aide en ligne ou visitez %s.<br><br>
Choisissez ce que vous voulez faire dans le menu du haut! Si c'est la premi�re fois que vous utilisez phpMyBackupPro vous devrez commencer par la configuration!
Les droits du r�pertoire 'export' et du fichier 'global_conf.php' doivent �tre mis � 0777.");
define('I_CONF_ERROR',"Le fichier ".PMBP_GLOBAL_CONF." est impossible a �crire !");
define('I_DIR_ERROR',"Le repertoire ".PMBP_EXPORT_DIR." est impossible a �crire !");
define('I_COMMENT_ERROR',"Le fichier ".PMBP_EXPORT_DIR."comments.dat est impossible a �crire !");
define('PMBP_I_INFO',"Informations g�n�rales");
define('PMBP_I_SERVER',"Serveur");
define('PMBP_I_TIME',"Heure");
define('PMBP_I_PHP_VERS',"Version de PHP");
define('PMBP_I_MEM_LIMIT',"PHP Memory Limit");
define('PMBP_I_SAFE_MODE',"Safe Mode activ�");
define('PMBP_I_FTP',"Transfert FTP possible");
define('PMBP_I_MAIL',"Envoi d'Emails");
define('PMBP_I_GZIP',"gzip compression possible");
define('PMBP_I_SQL_SERVER',"Serveur MySQL");
define('PMBP_I_SQL_CLIENT',"Client MySQL");
define('PMBP_I_NO_RES',"*Information non r�cup�rable*");
define('PMBP_I_LAST_SCHEDULED',"Derni�re sauvegarde programm�e");
define('PMBP_I_LAST_LOGIN',"Dernier login");
define('PMBP_I_LAST_LOGIN_ERROR',"Dernier login incorrect");

/*config.php*/
define('C_SITENAME',"Nom du site");
define('C_LANG',"langage");
define('C_SQL_HOST',"Nom d'h�te MySQL");
define('C_SQL_USER',"Nom d'utilisateur MySQL");
define('C_SQL_PASSWD',"Mot de passe MySQL");
define('C_SQL_DB',"Seulement cette base de donn�es");
define('C_FTP_USE',"Utiliser le FTP?");
define('C_FTP_BACKUP',"utiliser un r�pertoire de sauvegarde?");
define('C_FTP_REC',"Sauvegarder les r�pertoires r�cursivement?");
define('C_FTP_SERVER',"Serveur FTP (url ou IP)");
define('C_FTP_USER',"Utilisateur FTP");
define('C_FTP_PASSWD',"Mot de passe FTP");
define('C_FTP_PATH',"Chemin FTP");
define('C_FTP_PASV',"utiliser le mode ftp passif ?");
define('C_FTP_PORT',"port FTP");
define('C_FTP_DEL',"effacer les fichier sur le serveur FTP");
define('C_EMAIL_USE',"Utiliser le mail ?");
define('C_EMAIL',"adresse mail");
define('C_STYLESHEET',"habillage");
define('C_DATE',"style de donn�e");
define('C_DEL_TIME',"effacer les sauvegarde locales apr�s x jours");
define('C_DEL_NUMBER',"stocker un maximum de x fichier par base de donn�es");
define('C_TIMELIMIT',"limite de temps php");
define('C_IMPORT_ERROR',"montrer les erreurs d'importation ?");
define('C_NO_LOGIN',"d�sactiver les fonctions d'authentification ?");
define('C_LOGIN',"Authentification HTTP ?");
define('C_DIR_BACKUP',"activer les sauvegardes de r�pertoires?");
define('C_DIR_REC',"sauvegarde de r�pertoire avec sous r�pertoires?");
define('C_CONFIRM',"niveau de confirmation");
define('C_CONFIRM_1',"vider, effacer, importer");
define('C_CONFIRM_2',"... tout");
define('C_CONFIRM_3',"... TOUT");
define('C_CONFIRM_4',"ne rien confirmer");

define('C_BASIC_VAL',"Configuration de base");
define('C_EXT_VAL',"Configuration �tendue");
define('PMBP_C_SYSTEM_VAL',"Variables syst�me");
define('PMBP_C_SYS_WARNING',"Ces variables syst�mes sont g�r�es par phpMyBackupPro. Ne pas les �diter, � moins que vous sachiez ce que vous faites!");
define('C_TITLE_SQL',"Donn�es SQL");
define('C_TITLE_FTP',"Sauvegarde par FTP");
define('C_TITLE_EMAIL',"Sauvegarde par email");
define('C_TITLE_STYLE',"Style de phpMyBackupPro");
define('C_TITLE_DELETE',"Effacement automatique des fichiers de sauvagarde");
define('C_TITLE_CONFIG',"Further configuration items");
define('C_WRONG_TYPE',"est faux !");
define('C_WRONG_SQL',"Donn�es MySQL erron�es !");
define('C_WRONG_DB',"Nom de la base MySQL erron� !");
define('C_WRONG_FTP',"Donn�es FTP erron�es !");
define('C_OPEN',"Impossible d'ouvrir");
define('C_WRITE',"Impossible d'�crire");
define('C_SAVED',"Donn�es sauvegard�es avec succ�s");
define('C_WRITEABLE',"est impossible a �crire");
define('C_SAVE',"Sauvegarder les donn�es");

/*import.php*/
define('IM_ERROR',"%d erreur(s) est survenue. Utilisez un 'base vide' pour �tre sur que la base de donn�es ne contient aucune tables");
define('IM_SUCCESS',"Import r�ussi");
define('IM_TABLES',"tables et");
define('IM_ROWS',"enregistrements");

define('B_EMPTIED_ALL',"Toutes les base de donn�es ont �t� effac�e avec succ�s");
define('B_EMPTIED',"La base de donn�es � �t� effac�e avec succ�s");
define('B_DELETED',"Le fichier a �t� effac� avec succ�s");
define('B_DELETED_ALL',"Tous les fichiers ont �t� effac�s avec succ�s");
define('B_NO_FILES',"Il n'y a aucun fichier de sauvegarde pour l'instant");
define('B_DELETE_ALL_2',"effaces TOUTES les sauvegardes");
define('B_IMPORT_ALL',"importer TOUTES les sauvegardes");
define('B_EMPTY_ALL',"vider TOUTES les bases de donn�es");
define('B_EMPTY_DB',"vider la base de donn�es");
define('B_DELETE_ALL',"effacer TOUTES les sauvegardes");
define('B_INFO',"infos");
define('B_VIEW',"voir");
define('B_DOWNLOAD',"t�l�charger");
define('B_IMPORT',"importer");
define('B_IMPORT_FRAG',"fragmenter");
define('B_DELETE',"effacer");
define('B_CONF_EMPTY_DB',"Voulez-vous vraiment vider la base de donn�es ?");
define('B_CONF_DEL_ALL',"Voulez-vous vraiment vider toutes les sauvegardes de cette base de donn�es ?");
define('B_CONF_IMP',"Voulez-vous vraiment importer cette sauvegarde ?");
define('B_CONF_DEL',"Voulez-vous vraiment effacer cette sauvegarde ?");
define('B_CONF_EMPT_ALL',"Voulez-vous vraiment vider TOUTES les bases de donn�es ?");
define('B_CONF_IMP_ALL',"Voulez-vous vraiment importer TOUTES les derni�res sauvegardes ?");
define('B_CONF_DEL_ALL_2',"Voulez-vous vraiment effacer TOUTES les sauvegardes ?");
define('B_LAST_BACKUP',"Derni�re sauvegarde r�alis�e le");
define('B_SIZE_SUM',"Taille totale de toutes les sauvegardes");

/*backup.php*/
define('EX_SAVED',"Fichier sauvegard� avec succ�s comme");
define('EX_NO_DB',"Aucune base de donn�es s�l�ctionn�s");
define('EX_EXPORT',"Sauvegarde");
define('EX_NOT_SAVED',"Impossible de sauvegarde la base de donn�es %s");
define('EX_DIRS',"S�lectionner les r�pertoires de sauvegarde sur le serveur FTP");
define('EX_DIRS_MAN',"Entrer plus r�pertoires dont le chemins est relatif � phpMyBackupPro. S�parer par des  ','");
define('PMBP_EX_NO_AVAILABLE',"la base de donn�es %s est indisponible");
define('EX_PACKED',"Mettre tout dans un fichier ZIP");
define('PMBP_EXS_UPDATE_DIRS',"Mise � jour liste des r�pertoires");
define('PMBP_EX_NO_ARGV',"Exemple d'utilisation:\n$ php backup.php db1,db2,db3
Pour plus d'exemples lire 'SHELL_MODE.txt' dans le r�pertoire 'documentation'");

/*scheduled.php*/
define('EXS_PERIOD',"Choisissez la p�riode de sauvegarde");
define('EXS_PATH',"Choisissez le repertoire ou le fichier php va �tre plac�");
define('EXS_BACK',"retour");
define('PMBP_EXS_ALWAYS',"� chaque appel");
define('EXS_HOUR',"heure");
define('EXS_HOURS',"heures");
define('EXS_DAY',"jour");
define('EXS_DAYS',"jours");
define('EXS_WEEK',"semaine");
define('EXS_WEEKS',"semaines");
define('EXS_MONTH',"mois");
define('EXS_SHOW',"Voir le script");
define('PMBP_EXS_INCL',"Ajoutez ce script dans le fichier php qui doit faire le travail de sauvegarde");
define('PMBP_EXS_SAVE',"ou sauvegarder ce script dans un nouveau fichier (�crasera le fichier existant!)");
define('PMBP_EXS_UPDATE_DIRS',"Listes de r�pertoire mise � jour");

/*file_info.php*/
define('INF_INFO',"info");
define('INF_DATE',"Date");
define('INF_DB',"Base de donn�es");
define('INF_SIZE',"Taille de la sauvegarde");
define('INF_COMP',"Compression");
define('INF_DROP',"Contient des 'drop table'");
define('INF_TABLES',"Contient des tables");
define('INF_DATA',"Contient des donn�es");
define('INF_COMMENT',"Commentaires");
define('INF_NO_FILE',"Aucun fichier s�l�ctionn�");

/*db_status.php*/
define('DB_NAME',"nom de la base de donn�es");
define('DB_NUM_TABLES',"nombre de table");
define('DB_NUM_ROWS',"nombre d'enregistrements");
define('DB_SIZE',"taille");
define('DB_DIFF',"La taille peut �tre diff�rente de la taille du fichier de sauvegarde !");
define('DB_NO_DB',"Aucune base de donn�es disponible");
define('DB_TABLES',"infos tables");
define('DB_TAB_TITLE',"tables de la base de donn�es ");
define('DB_TAB_NAME',"nom de la table");
define('DB_TAB_COLS',"nombre de champs");

/*sql_query.php*/
define('SQ_ERROR',"Une erreur est survenue durant une requ�te sur les nombres");
define('SQ_SUCCESS',"Ex�cut� avec succ�s");
define('SQ_RESULT',"R�sultat de la requ�te");
define('SQ_AFFECTED',"Nombre d'enregistrement affect�s");
define('SQ_WARNING',"Attention: Cette page est uniquement con�u pour envoyer des requ�tes sql simple sur la base de donn�es. Ne pas faire attention peut conduire � la perte de la base de donn�es !");
define('SQ_SELECT_DB',"Choisissez une base de donn�es");
define('SQ_INSERT',"Tapez votre requ�te sql ici");
define('SQ_FILE',"Envoyer un fichier sql");
define('SQ_SEND',"Lancer");

/*login.php*/
define('LI_MSG',"Veuillez vous connecter (utilisez votre nom d'utilisateur et voter mot de passe MySQL)");
define('LI_USER',"nom d'utilisateur");
define('LI_PASSWD',"mot de passe");
define('LI_LOGIN',"Connexion");
define('LI_LOGED_OUT',"D�connect� en toute s�curit�!");
define('LI_NOT_LOGED_OUT',"Pas d�connect� s�rement!<br>Pour d�connecter en toute s�curit�, entrer un mot de passe ERRONE");

/*big_import.php*/
define('BI_IMPORTING_FILE',"Le fichier est import�");
define('BI_INTO_DB',"Dans la banque de donn�es ");
define('BI_SESSION_NO',"Session N�");
define('BI_STARTING_LINE',"De la ligne ");
define('BI_STOPPING_LINE',"Jusqu'� la ligne ");
define('BI_QUERY_NO',"Nombre de requette SQL effectu�e : ");
define('BI_BYTE_NO',"Quantit� d'octets trait�s");
define('BI_DURATION',"Dur�e de la derni�re session");
define('BI_THIS_LAST',"Session actuelle");
define('BI_END',"Fichier sauvegard�. Importation effectu� avec succ�s !");
define('BI_RESTART',"Nouvelle importation du fichier ");
define('BI_SCRIPT_RUNNING',"Le script est en cours... <br>, s'il vous pla�t, merci de patientez.");
define('BI_CONTINUE',"Plus loin d�s la ligne");
define('BI_ENABLE_JS',"Activez le javascript pour continuer");
define('BI_BROKEN_ZIP',"L'archive ZIP semble �tre endommag�e.");
define('BI_WRONG_FILE',"Arr�t� � la ligne %s. <br>Contient trop de ligne %s . Cela arrive, si la sauvegarde est ecrite sans point-virgule et provoque donc disfonctionnement des instructions SQL ou si la sauvegarde 'etendue' contient des instructions 'INSERT'!");
?>

