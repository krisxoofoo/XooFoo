<?php
/*
 * Suico theme
 * In memory of Marcello Brandao
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license 3.0
 * @package         themes
 * @since           2.5.x
 * @author          Kris <http://www.xoofoo.org/>
 * @maintained      The XOOPS Project http://sourceforge.net/projects/xoops/
 *
 * @version         $Id
*/

// system_notification_select.html
define("THEME_SHOWHIDE_NOTIFICATION",	"Afficher/Cacher");
define("THEME_SHOWHIDE_NOTIFICATION_DESC",	"Afficher ou cacher les options de Notification");
define("THEME_RSS",						"Alimentations du fil RSS");
define("THEME_SEARCH",					"Recherche");
define("THEME_DESC_SEARCH",				"Recherche sur le site");
define("THEME_KEYWORDS",				"Saisissez les mots-cl&#233;s");

// blockszone and centerblocks.html
define("THEME_THISBLOCK_EDIT",			"Editer le bloc");
define("THEME_VIEWALL",					"Tout afficher");

/* ------------------- xo_globalnav.html ---------------------- */
define("THEME_NAVTITLE",				"Navigation");

define("THEME_HOME",					"Accueil");
define("THEME_HOME_DESC",				"Revenir &#224; l&#39;accueil");

define("THEME_MODULE1",					"Articles");
define("THEME_MODULE1_DESC",			"Voir les news");

define("THEME_MODULE2",					"Forum");
define("THEME_MODULE2_DESC",			"Visiter les Forums du site");

define("THEME_MODULE3",					"Galerie");
define("THEME_MODULE3_DESC",			"Visiter les Galeries Photos");

define("THEME_MODULE4",					"Vid&#233;os");
define("THEME_MODULE4_DESC",			"Regarder les Vid&#233;os publi&#233;es");

define("THEME_MODULE5",					"Liens Web");
define("THEME_MODULE5_DESC",			"Visiter nos Liens web favoris");

define("THEME_MODULE6",					"T&#233;l&#233;chargements");
define("THEME_MODULE6_DESC",			"T&#233;l&#233;charger nos fichiers");

define("THEME_MODULE7",					"");
define("THEME_MODULE7_DESC",			"");

define("THEME_MODULE8",					"");
define("THEME_MODULE8_DESC",			"");

define("THEME_MODULE9",					"");
define("THEME_MODULE9_DESC",			"");

// noms des modules dans globalnav.html en mode anonyme
define("THEME_MODULE1a",				"");
define("THEME_MODULE1a_DESC",			"");
define("THEME_MODULE2a",				"");
define("THEME_MODULE2a_DESC",			"");

define("THEME_CONTACT",					"Contact");
define("THEME_CONTACT_DESC",			"Nous contacter ?");
define("THEME_SITEMAP",					"Plan du site");

// xo_userbar.html
define("THEME_REGISTER",				"Cr&#233;er un compte ?");
define("THEME_REMEMBER",				"Se rappeller de moi ?");
define("THEME_PSEUDO",					"Pseudo");
define("THEME_DESC_PSEUDO",				"Saisissez votre Pseudo");
define("THEME_PASSWORD",				"Mot de passe");
define("THEME_DESC_PASSWORD",			"Saisissez votre mot de passe");
define("THEME_CONNECT",					"Connexion");
define("THEME_LOSTACCOUNT",				"Mot de passe perdu ?"); // add for suico theme
define("THEME_CLOSEPOPUP",				"Fermer la fen&#234;tre"); // add for suico theme

define("THEME_WELLCOME",				"Bienvenue");
define("THEME_PROFILE",					"Voir son profil");
define("THEME_NOTIFICATION",			"voir ses notifications");
define("THEME_MESSAGE",					"Voir ses messages");
define("THEME_YOUHAVE",					"Vous avez");
define("THEME_NOTREAD",					"message(s) non lu(s)");
define("THEME_MYACCOUNT",				"Mon compte");
define("THEME_PRIVATE",					"Acc&#232;s Priv&#233;");

define("THEME_UFROM",					"R&#233;sidence"); // add for suico theme
define("THEME_UOCCUPAT",				"Profession"); // add for suico theme
define("THEME_UINTEREST",				"Centre d&#39;int&#233;r&#234;ts"); // add for suico theme
define("THEME_UINFOS",					"Informations"); // add for suico theme
define("THEME_UREGDATE",				"Membre depuis"); // add for suico theme
define("THEME_UPOSTS",					"Nbr de Posts"); // add for suico theme
define("THEME_ULASTLOGIN",				"Derni&#232;re connexion"); // add for suico theme

define("THEME_UEDITPROFILE",			"Editer son profil"); // add for suico theme
define("THEME_UEDITAVATAR",				"Changer son image"); // add for suico theme
define("THEME_UEDITPASSWORD",			"Modifier son mot de passe"); // add for suico theme

/* ------------------- xo_footerstatic.html ------------------- */
define("_THEME_INBOX",            		"Voir vos messages");
define("_THEME_INBOX_NOTREAD",    		"message(s) non lu(s)");
define("_THEME_NOTIFICATIONS",   		"Voir vos notifications");
define("_THEME_PROFILE",         		"Voir votre profil");
define("_THEME_ADMINISTRATION",  		"Administration");
define("_THEME_LOGOUT",          		"D&#233;connexion");
define("THEME_EDITPROFILE",				"Editer son profil");
define("THEME_USER",					"Utilisateurs");
define("THEME_CPHOME",					"Administration");
define("THEME_BANS",					"G&#233;rer les banni&#232;res publicitaires");
define("THEME_BKAD",					"G&#233;;rer les blocs");
define("THEME_ADGS",					"G&#233;rer les groupes");
define("THEME_PREF",					"Pr&#233;f&#233;rences");
define("THEME_INSTALLEDMODULES",		"G&#233;rer les modules install&#233;s");
define("THEME_IMAGES",					"Images");
define("THEME_MDAD",					"Modules");
define("THEME_SMLS",					"G&#233;rer les &#233;moticônes");
define("THEME_RANK",					"Rang des utilisateurs");
define("THEME_EUSER",					"Editer les utilisateurs");
define("THEME_FINDUSER",				"Chercher un utilisateur");
define("THEME_MLUS",					"Envoyer un courriel");
define("THEME_AVATARS",					"G&#233;rer les avatars");
define("THEME_TPLS",					"G&#233;rer les templates");
define("THEME_COMMENTS",				"G&#233;rer les commentaires");
define("THEME_ADMTOOLS",				"Outils"); // add for xoops 2.5.0
define("THEME_ADMFILES",				"Gestionnaire de fichiers"); // add for xoops 2.5.0
define("THEME_ADMCLEAN",				"Op&#233;rations de maintenance"); // add for xoops 2.5.0
define("THEME_SYSSETTING",				"Options Module Syst&#232;me"); // add for xoops 2.5.0
define("THEME_UPTOP",					"Remonter en haut de page"); // add for xoops 2.5.0
		
?>