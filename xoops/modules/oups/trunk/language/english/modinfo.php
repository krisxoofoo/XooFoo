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
define("_MI_AM_OUPS_NAME",	"Oups & Search");
define("_MI_AM_OUPS_DESC",	"A XOOPS Apache error module with a google searchbox.");

// config options
define("_MI_OUPS_IGNOREADMIN",		"Ignore admins:");
define("_MI_OUPS_IGNOREADMINDSC",	"Do not add error reports into the database for admins.");
define("_MI_OUPS_REPORTING",			"Turn off error reports:");
define("_MI_OUPS_REPORTINGDSC",		"Busy sites may want to turn off error reporting if the report page gets too large.");
define("_MI_OUPS_PAGETTL",			"Page title:");
define("_MI_OUPS_PAGETTLDSC",		"Put the error title in the page's title");
define("_MI_OUPS_PAGETTL1",			"None");
define("_MI_OUPS_PAGETTL2",			"Yes: &lt;Apache errors&gt; - &lt;module name&gt;");
define("_MI_OUPS_PAGETTL3",			"Yes: &lt;Web Search&gt; - &lt;module name&gt;");
define("_MI_OUPS_DATEFRMT",			"Date format:");
define("_MI_OUPS_DATEFRMTDSC",		'Date format in reports. See PHP\'s <a href="http://www.php.net/date" rel="external">date format page</a> for the different date format characters you can use.');
define("_MI_OUPS_NUMREPS",			"Number of reports:");
define("_MI_OUPS_NUMREPSDSC",		"The numbers of reports to show.");
define("_MI_OUPS_LINEBRKS",			"Message line breaks:");
define("_MI_OUPS_LINEBRKSDSC",		"Turn on auto line breaks in message errors (can cause problems with some HTML).");


/**
* Admin navbar
*/
define("_MI_OUPS_GENERALSET",	"Preferences");
define("_MI_OUPS_GOTOMOD",		"Go to module");
define("_MI_OUPS_HELP",			"Help");
define("_MI_OUPS_MODULEADMIN",	"admin:");
define("_MI_OUPS_INDEX",			"Index");


/**
* Admin menu
*/
define("_MI_OUPS_MENU1",	"Index");
define("_MI_OUPS_MENU2",	"Error messages");
define("_MI_OUPS_MENU3",	"Reports");


?>