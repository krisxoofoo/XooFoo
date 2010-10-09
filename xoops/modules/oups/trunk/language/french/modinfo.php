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
* xoops_version.php
*/
define("_MI_AM_OUPS_NAME",	"Oups & Recherche");
define("_MI_AM_OUPS_DESC",	"Module pour la création de pages personnalisées pour les erreurs Apache, complété d'un formulaire de recherche Google.");

// config options
define("_MI_OUPS_IGNOREADMIN",		"Ignorer les administrateurs :");
define("_MI_OUPS_IGNOREADMINDSC",	"Ne pas enregistrer les rapports erreurs des administrateurs dans la base de données.");
define("_MI_OUPS_REPORTING",		"Désactiver les rapports d'erreurs :");
define("_MI_OUPS_REPORTINGDSC",	"Les sites à forte activité peuvent désactiver le rapport d'erreurs, afin de limiter la charge du serveur.");
define("_MI_OUPS_PAGETTL",			"Titre de la page :");
define("_MI_OUPS_PAGETTLDSC",		"Choix du titre de la page");
define("_MI_OUPS_PAGETTL1",		"Aucun");
define("_MI_OUPS_PAGETTL2",		"Oui : &lt;Erreur; - &lt;Nom du module&gt;");
define("_MI_OUPS_PAGETTL3",		"Oui : &lt;Recherche&gt; - &lt;Nom du module&gt;");
define("_MI_OUPS_DATEFRMT",		"Format de date :");
define("_MI_OUPS_DATEFRMTDSC",		'Défini le format de date dans les rapports.<br /><em>Visualiser la page <a href="http://www.php.net/date" rel="external">"format de date"</a> du manuel PHP, pour les différentes méthodes d\'affichage que vous pouvez utiliser.</em>');
define("_MI_OUPS_NUMREPS",			"Nombre de rapports :");
define("_MI_OUPS_NUMREPSDSC",		"Nombre de rapports à afficher.");
define("_MI_OUPS_LINEBRKS",			"Activer le saut de ligne dans les messages :");
define("_MI_OUPS_LINEBRKSDSC",		"Activation des sauts de ligne automatique dans les messages<br /><em>(Note : cela peut causer des dysfonctionnements avec certains éditeurs HTML)</em>.");


/**
* Admin navbar
*/
define("_MI_OUPS_GENERALSET",	"Préférences");
define("_MI_OUPS_GOTOMOD",	"Aller au module");
define("_MI_OUPS_HELP",		"Aide");
define("_MI_OUPS_MODULEADMIN",	"Administration:");
define("_MI_OUPS_INDEX",		"Index");


/**
* Admin menu
*/
define("_MI_OUPS_MENU1",	"Index");
define("_MI_OUPS_MENU2",	"Messages d'erreurs");
define("_MI_OUPS_MENU3",	"Rapports");

/**
 * @translation     Communauté Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8 sans Bom
 *
 * @Translator      kris - http://www.xoofoo.org
 *
 * @version         $Id $
**/
?>