<?php
// $Id$
//  ------------------------------------------------------------------------ //
//  Author: Andrew Mills                                                     //
//  Email:  ajmills@sirium.net                                               //
//	About:           //
//                                                                           //
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

/** 
* Admin navbar
*/
define("_AM_AMHTERR_GENERALSET",	"Préférences");
define("_AM_AMHTERR_GOTOMOD",	"Aller au module");
define("_AM_AMHTERR_HELP",			"Aide");
define("_AM_AMHTERR_ABOUT",		"Au Sujet");
define("_AM_AMHTERR_MODULEADMIN",	"Administration");
define("_AM_AMHTERR_INDEX",		"Index");
define("_AM_AMHTERR_ERROR",		"Messages d'erreurs");

/**
* Form captions
*/
define("_AM_AMHTERR_FRMTTLCAP",		"Types d'erreur :");
define("_AM_AMHTERR_FRMCAPHDRID",		"ID");
define("_AM_AMHTERR_FRMCAPHDRTTL",	"Titre");
define("_AM_AMHTERR_FRMCAPERRNUM",	"Err. N°");
define("_AM_AMHTERR_FRMCAPNOERRS",	"Aucun  type d'erreur n'a été défini");
define("_AM_AMHTERR_STATUSSHOW",	"	Activé");
define("_AM_AMHTERR_STATUSHIDE",		"Désactivé");
define("_AM_AMHTERR_FRMCAPLNKEDT",	"Editer");
define("_AM_AMHTERR_FRMCAPLNKDLT",	"Effacer");
define("_AM_AMHTERR_CAPDSPLY",		"Publication :");
define("_AM_AMHTERR_CAPDSPLYTXT",		"&nbsp;Activer la mise en ligne");

define("_AM_AMHTERR_CAPTTL",			"Titre :");
define("_AM_AMHTERR_CAPERRNUM",		"Erreur N° :");
define("_AM_AMHTERR_CAPMAINTXT",		"Message :");

/**
* errors.php
*/
define("_AM_AMHTERR_ENTCAPADD",		"Ajouter un type d'erreur :");
define("_AM_AMHTERR_ENTCAPEDIT",		"Formulaire d'édition du message");
define("_AM_AMHTERR_ENTCAPSAVE",		"Sauvegarder");
define("_AM_AMHTERR_CODEEXISTS",		"Le code d'erreur est déjà présent !");

/**
* Misc
*/
define("_AM_AMHTERR_DBUPDATED",		"Base de données mise à jour");
define("_AM_AMHTERR_DBNOUPDATED",	"La base de données n'a pu être mise à jour !");
define("_AM_AMHTERR_DBCONFMDEL",		"Etes-vous certain de vouloir effacer cette entrée ?");

/**
* index.php
*/
define("_AM_AMHTERR_INTRO",		"&nbsp;Information&nbsp;");
define("_AM_AMHTERR_INFO",		"<p><strong>Note :</strong> Afin de pouvoir personnaliser les redirections pour les messages d'erreurs, il est nécessaire que votre serveur supporte les fichiers <em>.htaccess</em>, et que ceux-ci soient autorisés pour votre compte.</p>");
define("_AM_AMHTERR_FILECHK",		"Vérification de l'utilisation d'un fichier .htaccess sur :  ");
define("_AM_AMHTERR_FILEEXISTS",	"<span style=\"color: green; font-weight: bold;\"> : Présent</span>");
define("_AM_AMHTERR_FILENOEXIST",	"<span style=\"color: red; font-weight: bold;\">le fichier <em>.htaccess</em> n'est pas présent - S'il vous plait, veuillez créer le fichier et y insérer les lignes ci-dessous.</span>");
define("_AM_AMHTERR_ADDCODE",		"Dans le fichier <em>.htaccess</em> se trouvant à la racine de votre XOOPS, vous devrez manuellement y insérer les lignes ci-dessous, afin que le module soit opérationnel.");
define("_AM_AMHTERR_NOCODE",		"<span style=\"color: red; font-weight: bold;\">Il n'y a actuellement aucun code d'erreur de définis.</span>");
define("_AM_OUPS_HTACCESSWARNING", "Sur certaines configurations de serveur, vous pouvez être amené à mettre \"<em>http://monadresseurl</em>\" pour rediriger la page d'erreur dans votre fichier <em>.htaccess</em>");

/**
* reports.php
*/
define("_AM_AMHTERR_REPORTS",		"Rapports");
define("_AM_AMHTERR_REPCAPTTL",	"Détails des rapports d'erreurs");
define("_AM_AMHTERR_REPUSER",		"Utilisateur");
define("_AM_AMHTERR_REPERRCD",	"Code Erreur");
define("_AM_AMHTERR_REPDATE",		"Date");
define("_AM_AMHTERR_REPREFER",	"Réferrant");
define("_AM_AMHTERR_REPUAGENT",	"Agent de l'utilisateur");
define("_AM_AMHTERR_REPADDR",		"IP de l'utilisateur");
define("_AM_AMHTERR_REPREQ",		"Page demandée");

/**
* about.php
*/
define("_AM_AMHTERR_ABOUTABOUT",	"Au Sujet");

/**
 * @translation     Communauté Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: ISO-8859-1
 *
 * @Translator      kris - http://www.xoofoo.org
 *
 * @version         $Id $
**/
?>