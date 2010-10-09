<?php
/**
 * Oups Module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright        The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         Oups Module
 * @since		2.5.0
 * @author            Andrew Mills <ajmills@sirius.net>
 * @version            $Id $
**/

/**
* Admin navbar
*/
define("_AM_OUPS_GENERALSET",		"Preferences");
define("_AM_OUPS_GOTOMOD",		"Go to module");
define("_AM_OUPS_HELP",			"Help");
define("_AM_OUPS_ABOUT",			"About");
define("_AM_OUPS_MODULEADMIN",	"admin:");
define("_AM_OUPS_INDEX",			"Index");
define("_AM_OUPS_ERROR",			"Error messages");

/**
* Form captions
*/
define("_AM_OUPS_FRMTTLCAP",		"Error types:");
define("_AM_OUPS_FRMCAPHDRID",	"ID");
define("_AM_OUPS_FRMCAPHDRTTL",	"Title");
define("_AM_OUPS_FRMCAPERRNUM",	"Err. No.");
define("_AM_OUPS_FRMCAPNOERRS",	"No error types defined");
define("_AM_OUPS_STATUSSHOW",	"Status: Published");
define("_AM_OUPS_STATUSHIDE",	"Status: Hidden");
define("_AM_OUPS_FRMCAPLNKEDT",	"Click to edit");
define("_AM_OUPS_FRMCAPLNKDLT",	"Click to delete");
define("_AM_OUPS_CAPDSPLY",		"Display:");
define("_AM_OUPS_CAPDSPLYTXT",	"&nbsp;Select to display.");
define("_AM_OUPS_CAPTTL",		"Title:");
define("_AM_OUPS_CAPERRNUM",		"Error No:");
define("_AM_OUPS_CAPMAINTXT",	"Message:");

/**
* errors.php
*/
define("_AM_OUPS_ENTCAPADD",		"Add error type:");
define("_AM_OUPS_ENTCAPEDIT",	"Edit error type:");
define("_AM_OUPS_ENTCAPSAVE",	"Save");
define("_AM_OUPS_CODEEXISTS",	"That error code already exists!");

/**
* Misc
*/
define("_AM_OUPS_DBUPDATED",		"Database updated!");
define("_AM_OUPS_DBNOUPDATED",	"Database not updated!");
define("_AM_OUPS_DBCONFMDEL",	"Are you sure you want to delete this item?");

/**
* index.php
*/
define("_AM_OUPS_INTRO",		"&nbsp;Info&nbsp;");
define("_AM_OUPS_INFO",		"<p><strong>Please note:</strong> This module requires that the server supports .htaccess files (and that .htaccess files are allowed for your account), or some way for you to add custom error message redirects.</p>");
define("_AM_OUPS_FILECHK",		"Checking for the .htaccess file:<br />");
define("_AM_OUPS_FILEEXISTS",	"<span style=\"color: green; font-weight: bold;\">OK</span>");
define("_AM_OUPS_FILENOEXIST",	"<span style=\"color: red; font-weight: bold;\">the .htaccess does not exist - please add this file with the lines added below (please note the full stop at the start - this is part of the filename).</span>");
define("_AM_OUPS_ADDCODE",		"You will need to manually add the following lines to the <b>.htaccess</b> file in your XOOPS root directory for the error codes to work.");
define("_AM_OUPS_NOCODE",		"<span style=\"color: red; font-weight: bold;\">There are currently no error codes defined.</span>");

/**
* reports.php
*/
define("_AM_OUPS_REPORTS",	"Reports");
define("_AM_OUPS_REPCAPTTL",	"Reports:");
define("_AM_OUPS_REPUSER",	"User");
define("_AM_OUPS_REPERRCD",	"Err. Code");
define("_AM_OUPS_REPDATE",	"Date");
define("_AM_OUPS_REPREFER",	"Referrer");
define("_AM_OUPS_REPUAGENT",	"User agent");
define("_AM_OUPS_REPADDR",	"User IP");
define("_AM_OUPS_REPREQ",	"Page requested");

/**
* about.php
*/
define("_AM_OUPS_ABOUTABOUT",	"About");
define("_AM_OUPS_ABOUTDSC",	"<strong>Oups</strong> is a module that helps integrate server error messages, and a Google websearch into your XOOPS site.");
define("_AM_OUPS_VERSIONINFO",	"Version Info");
define("_AM_OUPS_VERSIONNUM",	"Version");
define("_AM_OUPS_VERSIONCHECK",	"Update");
define("_AM_OUPS_VERSIONCHECKDSC",	"Check for updates");
define("_AM_OUPS_SUPPORTTITLE",	"Support, feature requests and comments");
define("_AM_OUPS_SUPPORT",	"Support Forums:");
define("_AM_OUPS_SUPPORTDSC",	"The <a href=\"http://www.xoops.org/modules/newbb/\" rel=\"external\">Xoops.org forums</a> is the preferred support method, I aim to answer all support requests as soon as  possible.");
define("_AM_OUPS_MAIL",	"E-mail:");
define("_AM_OUPS_MAILDSC",	"I can also be contacted via the <a href=\"http://labs.xoofoo.org/modules/contact/\" rel=\"external\">contact form on the web site</a>.");
define("_AM_OUPS_SUPPORTMORE",	"General:");
define("_AM_OUPS_SUPPORTMOREDSC",	"Please also check the forums, FAQs and Article pages to see if your problem and/or question has already been answered. ");
define("_AM_OUPS_CREDIT",	"Credits");
define("_AM_OUPS_CREDITDSC1",	"<a href=''http://support.sirium.net/ title='' rel='external'>Andrew Mills</a> for initial work on AM HTError module");
define("_AM_OUPS_CREDITDSC2",	"<a href='http://tutorialzine.com' title='tutorialzine.com' rel=''external>Tzine</a> and <a href='http://www.google.com' title='Google' rel=''external>Google</a> for WebSearch form");
?>