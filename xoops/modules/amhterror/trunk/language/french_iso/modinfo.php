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
define("_MI_AM_HTERROR_NAME",	"AM HTError");
define("_MI_AM_HTERROR_DESC",	"Module pour la création de pages personnalisées pour les erreurs Apache.");

// config options
define("_MI_AMHTERR_IGNOREADMIN",		"Ignorer les administrateurs :");
define("_MI_AMHTERR_IGNOREADMINDSC",	"Ne pas enregistrer les rapports erreurs des administrateurs dans la base de données.");
define("_MI_AMHTERR_REPORTING",		"Désactiver les rapports d'erreurs :");
define("_MI_AMHTERR_REPORTINGDSC",	"Les sites à forte activité peuvent désactiver le rapport d'erreurs, afin de limiter la charge du serveur.");
define("_MI_AMHTERR_PAGETTL",			"Titre de la page :");
define("_MI_AMHTERR_PAGETTLDSC",		"Choix du titre de la page");
define("_MI_AMHTERR_PAGETTL1",			"Aucun");
define("_MI_AMHTERR_PAGETTL2",			"Oui : &lt;Nom du module&gt; - &lt;Erreur&gt;");
define("_MI_AMHTERR_PAGETTL3",			"Oui : &lt;Erreur&gt; - &lt;Nom du module&gt;");
define("_MI_AMHTERR_DATEFRMT",			"Format de date :");
define("_MI_AMHTERR_DATEFRMTDSC",		'Défini le format de date dans les rapports.<br /><em>Visualiser la page <a href="http://www.php.net/date" rel="external">"format de date"</a> du manuel PHP, pour les différentes méthodes d\'affichage que vous pouvez utiliser.</em>');
define("_MI_AMHTERR_NUMREPS",			"Nombre de rapports :");
define("_MI_AMHTERR_NUMREPSDSC",		"Nombre de rapports à afficher.");
define("_MI_AMHTERR_LINEBRKS",			"Activer le saut de ligne dans les messages :");
define("_MI_AMHTERR_LINEBRKSDSC",		"Activation des sauts de ligne automatique dans les messages<br /><em>(Note : cela peut causer des dysfonctionnements avec certains éditeurs HTML)</em>.");


/**
* Admin navbar
*/
define("_MI_AMHTERR_GENERALSET",	"Préférences");
define("_MI_AMHTERR_GOTOMOD",		"Aller au module");
define("_MI_AMHTERR_HELP",			"Aide");
define("_MI_AMHTERR_MODULEADMIN",	"Administration:");
define("_MI_AMHTERR_INDEX",		"Index");


/**
* Admin menu
*/
define("_MI_AMHTERROR_MENU1",	"Index");
define("_MI_AMHTERROR_MENU2",	"Error messages");
define("_MI_AMHTERROR_MENU3",	"Reports");

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