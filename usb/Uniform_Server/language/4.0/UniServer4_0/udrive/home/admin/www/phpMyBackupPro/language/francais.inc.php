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
define('BD_LANG_SHORTCUT',"fr"); // Utilis&eacute; par la fonction php setlocale()
define('BD_DATE_FORMAT',"%x %X"); // Utilis&eacute; par la fonction php strftime()
define('BD_CHARSET_HTML',"utf-8"); // Norme ISO pour la language html
define('BD_CHARSET_EMAIL',"ISO-8859-1"); // Norme ISO pour les caract&egrave;res MIME-emails

/*functions.inc.php*/
define('F_START',"D&eacute;but");
define('F_CONFIG',"Configuration");
define('F_IMPORT',"Importer");
define('F_BACKUP',"Sauvegardes");
define('F_SCHEDULE',"Sauvegarde programm&eacute;e");
define('F_DB_INFO',"Info sur la base de donn&eacute;es");
define('F_SQL_QUERY',"Requ&ecirc;te SQL");
define('F_HELP',"Aide");
define('F_LOGOUT',"D&eacute;connexion");
define('F_FOOTER',"Visitez le %ssite du projet phpMyBackupPro%s pour de nouvelles versions et des infos.");
define('F_NOW_AVAILABLE',"Une nouvelle version de phpMyBackupPro est maintenant disponible sur %s".PMBP_WEBSITE."%s");
define('F_SELECT_DB',"Choisissez la base de donn&eacute;es &agrave; sauvegarder");
define('F_SELECT_ALL',"Tout selectionner");
define('F_COMMENTS',"Commentaires");
define('F_EX_TABLES',"exporter les tables");
define('F_EX_DATA',"exporter les donn&eacute;es");
define('F_EX_DROP',"ajouter 'drop table'");
define('F_EX_COMP',"compression");
define('F_EX_OFF',"aucune");
define('F_EX_GZIP',"gzip");
define('F_EX_ZIP',"zip");
define('F_FTP_1',"La connexion FTP a &eacute;chou&eacute;");
define('F_FTP_2',"Impossible de se connecter avec ce nom d&#39;utilisateur");
define('F_FTP_3',"Echec de l&#39;envoi FTP");
define('F_FTP_4',"Fichier envoy&eacute; avec succ&egrave;s comme");
define('F_FTP_5',"L&#39;effacement du fichier &#39;%s&#39; sur le FTP a &eacute;chou&eacute;");
define('F_FTP_6',"Le fichier &#39;%s&#39; a &eacute;t&eacute; effac&eacute; du FTP avec succ&egrave;s");
define('F_FTP_7',"Fichier &#39;%s&#39; non disponible sur le serveur FTP");
define('F_MAIL_1',"L'adresse mail n&#39;est pas correct");
define('F_MAIL_2',"Ce mail a &eacute;t&eacute; envoy&eacute; par phpMyBackupPro ".PMBP_VERSION." ".PMBP_WEBSITE." running on");
define('F_MAIL_3',"ne peut pas &ecirc;tre lu");
define('F_MAIL_4',"Sauvegarde MySQL de");
define('F_MAIL_5',"Le mail n&#39;a pas pu &ecirc;tre envoy&eacute;");
define('F_MAIL_6',"Les fichiers ont &eacute;t&eacute; envoy&eacute; par mail avec succ&egrave;s &agrave;");
define('F_YES',"oui");
define('F_NO',"non");
define('F_DURATION',"Dur&eacute;e");
define('F_SECONDS',"secondes");
define('F_WRONG_FILE',"Il semblerait que ce soit pas le fichier .zip correct, mais il est possible que ce soit un bug dans phpMyBackupPro");
define('F_DEL_FAILED',"La sauvegarde %s ne peut pas &ecirc;tre effac&eacute;e.");

/*index.php*/
define('I_SQL_ERROR',"ERREUR: Veuillez entrer vos donn&eacute;e MySQL correct dans la &#39;configuration&#39;!");
define('I_NAME',"Bienvenue dans phpMyBackupPro");
define('I_WELCOME',"phpMyBackupPro est un logiciel libre sous licence GNU GPL.
En cas de probl&egrave;me consultez l&#39;aide en ligne ou visitez %s.<br /><br />
Choisissez ce que vous voulez faire dans le menu du haut! Si c&#39;est la premi&egrave;re fois que vous utilisez phpMyBackupPro vous devrez commencer par la configuration!
Les droits du r&eacute;pertoire &#39;export&#39; et du fichier &#39;global_conf.php&#39; doivent &ecirc;tre mis &agrave; 0777.");
define('I_CONF_ERROR',"Le fichier ".PMBP_GLOBAL_CONF." est impossible a &eacute;crire !");
define('I_DIR_ERROR',"Le repertoire ".PMBP_EXPORT_DIR." est impossible a &eacute;crire !");
define('I_COMMENT_ERROR',"Le fichier ".PMBP_EXPORT_DIR."comments.dat est impossible a &eacute;crire !");
define('PMBP_I_INFO',"Informations g&eacute;n&eacute;rales");
define('PMBP_I_SERVER',"Serveur");
define('PMBP_I_TIME',"Heure");
define('PMBP_I_PHP_VERS',"Version de PHP");
define('PMBP_I_MEM_LIMIT',"PHP Memory Limit");
define('PMBP_I_SAFE_MODE',"Safe Mode activ&eacute;");
define('PMBP_I_FTP',"Transfert FTP possible");
define('PMBP_I_MAIL',"Envoi d'Emails");
define('PMBP_I_GZIP',"gzip compression possible");
define('PMBP_I_SQL_SERVER',"Serveur MySQL");
define('PMBP_I_SQL_CLIENT',"Client MySQL");
define('PMBP_I_NO_RES',"*Information non r&eacute;cup&eacute;rable*");
define('PMBP_I_LAST_SCHEDULED',"Derni&egrave;re sauvegarde programm&eacute;e");
define('PMBP_I_LAST_LOGIN',"Dernier login");
define('PMBP_I_LAST_LOGIN_ERROR',"Dernier login incorrect");

/*config.php*/
define('C_SITENAME',"Nom du site");
define('C_LANG',"langage");
define('C_SQL_HOST',"Nom d&#39;h&ocirc;te MySQL");
define('C_SQL_USER',"Nom d&#39;utilisateur MySQL");
define('C_SQL_PASSWD',"Mot de passe MySQL");
define('C_SQL_DB',"Seulement cette base de donn&eacute;es");
define('C_FTP_USE',"Utiliser le FTP ?");
define('C_FTP_BACKUP',"utiliser un r&eacute;pertoire de sauvegarde?");
define('C_FTP_REC',"Sauvegarder les r&eacute;pertoires r&eacute;cursivement ?");
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
define('C_DATE',"style de donn&eacute;e");
define('C_DEL_TIME',"effacer les sauvegarde locales apr&egrave;s x jours");
define('C_DEL_NUMBER',"stocker un maximum de x fichier par base de donn&eacute;es");
define('C_TIMELIMIT',"limite de temps php");
define('C_IMPORT_ERROR',"montrer les erreurs d&#39;importation ?");
define('C_NO_LOGIN',"d&eacute;sactiver les fonctions d&#39;authentification ?");
define('C_LOGIN',"Authentification HTTP ?");
define('C_DIR_BACKUP',"activer les sauvegardes de r&eacute;pertoires?");
define('C_DIR_REC',"sauvegarde de r&eacute;pertoire avec sous r&eacute;pertoires?");
define('C_CONFIRM',"niveau de confirmation");
define('C_CONFIRM_1',"vider, effacer, importer");
define('C_CONFIRM_2',"... tout");
define('C_CONFIRM_3',"... TOUT");
define('C_CONFIRM_4',"ne rien confirmer");

define('C_BASIC_VAL',"Configuration de base");
define('C_EXT_VAL',"Configuration &eacute;tendue");
define('PMBP_C_SYSTEM_VAL',"Variables syst&egrave;me");
define('PMBP_C_SYS_WARNING',"Ces variables syst&egrave;mes sont g&eacute;r&eacute;es par phpMyBackupPro. Ne pas les &eacute;diter, &agrave; moins que vous sachiez ce que vous faites!");
define('C_TITLE_SQL',"Donn&eacute;es SQL");
define('C_TITLE_FTP',"Sauvegarde par FTP");
define('C_TITLE_EMAIL',"Sauvegarde par email");
define('C_TITLE_STYLE',"Style de phpMyBackupPro");
define('C_TITLE_DELETE',"Effacement automatique des fichiers de sauvagarde");
define('C_TITLE_CONFIG',"Further configuration items");
define('C_WRONG_TYPE',"est faux !");
define('C_WRONG_SQL',"Donn&eacute;es MySQL erron&eacute;es !");
define('C_WRONG_DB',"Nom de la base MySQL erron&eacute; !");
define('C_WRONG_FTP',"Donn&eacute;es FTP erron&eacute;es !");
define('C_OPEN',"Impossible d&#39;ouvrir");
define('C_WRITE',"Impossible d&#39;&eacute;crire");
define('C_SAVED',"Donn&eacute;es sauvegard&eacute;es avec succ&egrave;s");
define('C_WRITEABLE',"est impossible a &eacute;crire");
define('C_SAVE',"Sauvegarder les donn&eacute;es");

/*import.php*/
define('IM_ERROR',"%d erreur(s) est survenue. Utilisez un &#39;base vide&#39; pour &ecirc;tre sur que la base de donn&eacute;es ne contient aucune tables");
define('IM_SUCCESS',"Import r&eacute;ussi");
define('IM_TABLES',"tables et");
define('IM_ROWS',"enregistrements");

define('B_EMPTIED_ALL',"Toutes les base de donn&eacute;es ont &eacute;t&eacute; effac&eacute;e avec succ&egrave;s");
define('B_EMPTIED',"La base de donn&eacute;es &agrave; &eacute;t&eacute; effac&eacute;e avec succ&egrave;s");
define('B_DELETED',"Le fichier a &eacute;t&eacute; effac&eacute; avec succ&egrave;s");
define('B_DELETED_ALL',"Tous les fichiers ont &eacute;t&eacute; effac&eacute;s avec succ&egrave;s");
define('B_NO_FILES',"Il n&#39;y a aucun fichier de sauvegarde pour l&#39;instant");
define('B_DELETE_ALL_2',"effaces TOUTES les sauvegardes");
define('B_IMPORT_ALL',"importer TOUTES les sauvegardes");
define('B_EMPTY_ALL',"vider TOUTES les bases de donn&eacute;es");
define('B_EMPTY_DB',"vider la base de donn&eacute;es");
define('B_DELETE_ALL',"effacer TOUTES les sauvegardes");
define('B_INFO',"infos");
define('B_VIEW',"voir");
define('B_DOWNLOAD',"t&eacute;l&eacute;charger");
define('B_IMPORT',"importer");
define('B_IMPORT_FRAG',"fragmenter");
define('B_DELETE',"effacer");
define('B_CONF_EMPTY_DB',"Voulez-vous vraiment vider la base de donn&eacute;es ?");
define('B_CONF_DEL_ALL',"Voulez-vous vraiment vider toutes les sauvegardes de cette base de donn&eacute;es ?");
define('B_CONF_IMP',"Voulez-vous vraiment importer cette sauvegarde ?");
define('B_CONF_DEL',"Voulez-vous vraiment effacer cette sauvegarde ?");
define('B_CONF_EMPT_ALL',"Voulez-vous vraiment vider TOUTES les bases de donn&eacute;es ?");
define('B_CONF_IMP_ALL',"Voulez-vous vraiment importer TOUTES les derni&egrave;res sauvegardes ?");
define('B_CONF_DEL_ALL_2',"Voulez-vous vraiment effacer TOUTES les sauvegardes ?");
define('B_LAST_BACKUP',"Derni&egrave;re sauvegarde r&eacute;alis&eacute;e le");
define('B_SIZE_SUM',"Taille totale de toutes les sauvegardes");

/*backup.php*/
define('EX_SAVED',"Fichier sauvegard&eacute; avec succ&egrave;s comme");
define('EX_NO_DB',"Aucune base de donn&eacute;es s&eacute;l&eacute;ctionn&eacute;s");
define('EX_EXPORT',"Sauvegarde");
define('EX_NOT_SAVED',"Impossible de sauvegarde la base de donn&eacute;es %s");
define('EX_DIRS',"S&eacute;lectionner les r&eacute;pertoires de sauvegarde sur le serveur FTP");
define('EX_DIRS_MAN',"Entrer plus r&eacute;pertoires dont le chemins est relatif &agrave; phpMyBackupPro. S&eacute;parer par des  &#39;,&#39;");
define('PMBP_EX_NO_AVAILABLE',"la base de donn&eacute;es %s est indisponible");
define('EX_PACKED',"Mettre tout dans un fichier ZIP");
define('PMBP_EXS_UPDATE_DIRS',"Mise &agrave; jour liste des r&eacute;pertoires");
define('PMBP_EX_NO_ARGV',"Exemple d&#39;utilisation:\n$ php backup.php db1,db2,db3
Pour plus d&#39;exemples lire &#39;SHELL_MODE.txt&#39; dans le r&eacute;pertoire &#39;documentation&#39;");

/*scheduled.php*/
define('EXS_PERIOD',"Choisissez la p&eacute;riode de sauvegarde");
define('EXS_PATH',"Choisissez le repertoire ou le fichier php va &ecirc;tre plac&eacute;");
define('EXS_BACK',"retour");
define('PMBP_EXS_ALWAYS',"&agrave; chaque appel");
define('EXS_HOUR',"heure");
define('EXS_HOURS',"heures");
define('EXS_DAY',"jour");
define('EXS_DAYS',"jours");
define('EXS_WEEK',"semaine");
define('EXS_WEEKS',"semaines");
define('EXS_MONTH',"mois");
define('EXS_SHOW',"Voir le script");
define('PMBP_EXS_INCL',"Ajoutez ce script dans le fichier php qui doit faire le travail de sauvegarde");
define('PMBP_EXS_SAVE',"ou sauvegarder ce script dans un nouveau fichier (&eacute;crasera le fichier existant!)");
define('PMBP_EXS_UPDATE_DIRS',"Listes de r&eacute;pertoire mise &agrave; jour");

/*file_info.php*/
define('INF_INFO',"info");
define('INF_DATE',"Date");
define('INF_DB',"Base de donn&eacute;es");
define('INF_SIZE',"Taille de la sauvegarde");
define('INF_COMP',"Compression");
define('INF_DROP',"Contient des &#39;drop table&#39;");
define('INF_TABLES',"Contient des tables");
define('INF_DATA',"Contient des donn&eacute;es");
define('INF_COMMENT',"Commentaires");
define('INF_NO_FILE',"Aucun fichier s&eacute;l&eacute;ctionn&eacute;");

/*db_status.php*/
define('DB_NAME',"nom de la base de donn&eacute;es");
define('DB_NUM_TABLES',"nombre de table");
define('DB_NUM_ROWS',"nombre d&#39;enregistrements");
define('DB_SIZE',"taille");
define('DB_DIFF',"La taille peut &ecirc;tre diff&eacute;rente de la taille du fichier de sauvegarde !");
define('DB_NO_DB',"Aucune base de donn&eacute;es disponible");
define('DB_TABLES',"infos tables");
define('DB_TAB_TITLE',"tables de la base de donn&eacute;es ");
define('DB_TAB_NAME',"nom de la table");
define('DB_TAB_COLS',"nombre de champs");

/*sql_query.php*/
define('SQ_ERROR',"Une erreur est survenue durant une requ&ecirc;te sur les nombres");
define('SQ_SUCCESS',"Ex&eacute;cut&eacute; avec succ&egrave;s");
define('SQ_RESULT',"R&eacute;sultat de la requ&ecirc;te");
define('SQ_AFFECTED',"Nombre d&#39;enregistrement affect&eacute;s");
define('SQ_WARNING',"Attention: Cette page est uniquement conçu pour envoyer des requ&ecirc;tes sql simple sur la base de donn&eacute;es. Ne pas faire attention peut conduire &agrave; la perte de la base de donn&eacute;es !");
define('SQ_SELECT_DB',"Choisissez une base de donn&eacute;es");
define('SQ_INSERT',"Tapez votre requ&ecirc;te sql ici");
define('SQ_FILE',"Envoyer un fichier sql");
define('SQ_SEND',"Lancer");

/*login.php*/
define('LI_MSG',"Veuillez vous connecter (utilisez votre nom d&#39;utilisateur et voter mot de passe MySQL)");
define('LI_USER',"nom d&#39;utilisateur");
define('LI_PASSWD',"mot de passe");
define('LI_LOGIN',"Connexion");
define('LI_LOGED_OUT',"D&eacute;connect&eacute; en toute s&eacute;curit&eacute;!");
define('LI_NOT_LOGED_OUT',"Pas d&eacute;connect&eacute; sûrement!<br />Pour d&eacute;connecter en toute s&eacute;curit&eacute;, entrer un mot de passe ERRONE");

/*big_import.php*/
define('BI_IMPORTING_FILE',"Le fichier est import&eacute;");
define('BI_INTO_DB',"Dans la banque de donn&eacute;es ");
define('BI_SESSION_NO',"Session Num&eacute;ro ");
define('BI_STARTING_LINE',"De la ligne ");
define('BI_STOPPING_LINE',"Jusqu&#39;&agrave; la ligne ");
define('BI_QUERY_NO',"Nombre de requette SQL effectu&eacute;e : ");
define('BI_BYTE_NO',"Quantit&eacute; d&#39;octets trait&eacute;s");
define('BI_DURATION',"Dur&eacute;e de la derni&egrave;re session");
define('BI_THIS_LAST',"Session actuelle");
define('BI_END',"Fichier sauvegard&eacute;. Importation effectu&eacute; avec succ&egrave;s !");
define('BI_RESTART',"Nouvelle importation du fichier ");
define('BI_SCRIPT_RUNNING',"Le script est en cours... <br />, s&#39;il vous plaît, merci de patientez.");
define('BI_CONTINUE',"Plus loin d&egrave;s la ligne");
define('BI_ENABLE_JS',"Activez le javascript pour continuer");
define('BI_BROKEN_ZIP',"L&#39;archive ZIP semble &ecirc;tre endommag&eacute;e.");
define('BI_WRONG_FILE',"Arr&ecirc;t&eacute; &agrave; la ligne %s. <br />Contient trop de ligne %s . Cela arrive, si la sauvegarde est ecrite sans point-virgule et provoque donc disfonctionnement des instructions SQL ou si la sauvegarde &#39;etendue&#39; contient des instructions &#39;INSERT&#39;!");
?>

