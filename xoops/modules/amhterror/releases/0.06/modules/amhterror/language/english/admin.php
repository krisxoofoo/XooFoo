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
define("_AM_AMHTERR_GENERALSET",	"Preferences");
define("_AM_AMHTERR_GOTOMOD",		"Go to module");
define("_AM_AMHTERR_HELP",			"Help");
define("_AM_AMHTERR_ABOUT",			"About");
define("_AM_AMHTERR_MODULEADMIN",	"admin:");
define("_AM_AMHTERR_INDEX",			"Index");
define("_AM_AMHTERR_ERROR",			"Error messages");


/**
* Form captions
*/
define("_AM_AMHTERR_FRMTTLCAP",		"Error types:");
define("_AM_AMHTERR_FRMCAPHDRID",	"ID");
define("_AM_AMHTERR_FRMCAPHDRTTL",	"Title");
define("_AM_AMHTERR_FRMCAPERRNUM",	"Err. No.");
define("_AM_AMHTERR_FRMCAPNOERRS",	"No error types defined");
define("_AM_AMHTERR_STATUSSHOW",	"Status: Published");
define("_AM_AMHTERR_STATUSHIDE",	"Status: Hidden");
define("_AM_AMHTERR_FRMCAPLNKEDT",	"Click to edit");
define("_AM_AMHTERR_FRMCAPLNKDLT",	"Click to delete");
define("_AM_AMHTERR_CAPDSPLY",		"Display:");
define("_AM_AMHTERR_CAPDSPLYTXT",	"&nbsp;Select to display.");

define("_AM_AMHTERR_CAPTTL",		"Title:");
define("_AM_AMHTERR_CAPERRNUM",		"Error No:");
define("_AM_AMHTERR_CAPMAINTXT",	"Message:");


/**
* errors.php
*/
define("_AM_AMHTERR_ENTCAPADD",		"Add error type:");
define("_AM_AMHTERR_ENTCAPEDIT",	"Edit error type:");
define("_AM_AMHTERR_ENTCAPSAVE",	"Save");
define("_AM_AMHTERR_CODEEXISTS",	"That error code already exists!");


/**
* Misc
*/
define("_AM_AMHTERR_DBUPDATED",		"Database updated!");
define("_AM_AMHTERR_DBNOUPDATED",	"Database not updated!");
define("_AM_AMHTERR_DBCONFMDEL",	"Are you sure you want to delete this item?");


/**
* index.php
*/
define("_AM_AMHTERR_INTRO",		"&nbsp;Info&nbsp;");

define("_AM_AMHTERR_INFO",		"<p><strong>Please note:</strong> This module requires that the server supports .htaccess files (and that .htaccess files are allowed for your account), or some way for you to add custom error message redirects.</p>");

define("_AM_AMHTERR_FILECHK",		"Checking for the .htaccess file:<br />");
define("_AM_AMHTERR_FILEEXISTS",	"<span style=\"color: green; font-weight: bold;\">OK</span>");
define("_AM_AMHTERR_FILENOEXIST",	"<span style=\"color: red; font-weight: bold;\">the .htaccess does not exist - please add this file with the lines added below (please note the full stop at the start - this is part of the filename).</span>");
define("_AM_AMHTERR_ADDCODE",		"You will need to manually add the following lines to the <b>.htaccess</b> file in your XOOPS root directory for the error codes to work.");
define("_AM_AMHTERR_NOCODE",		"<span style=\"color: red; font-weight: bold;\">There are currently no error codes defined.</span>");


/**
* reports.php
*/
define("_AM_AMHTERR_REPORTS",	"Reports");
define("_AM_AMHTERR_REPCAPTTL",	"Reports:");
define("_AM_AMHTERR_REPUSER",	"User");
define("_AM_AMHTERR_REPERRCD",	"Err. Code");
define("_AM_AMHTERR_REPDATE",	"Date");
define("_AM_AMHTERR_REPREFER",	"Referrer");
define("_AM_AMHTERR_REPUAGENT",	"User agent");
define("_AM_AMHTERR_REPADDR",	"User IP");
define("_AM_AMHTERR_REPREQ",	"Page requested");


/**
* about.php
*/
define("_AM_AMHTERR_ABOUTABOUT",	"About");

?>