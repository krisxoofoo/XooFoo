<?php
/**
 * SpamReferer module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright	The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package	SpamReferer
 * @since		2.3.0
 * @author 	kris <http://www.xoofoo.org>
 * @version	$Id$
**/

// Module Info

// The name of this module
define("_MI_SPAMREFERER_NAME" , "SpamReferer");

// A brief description of this module
define("_MI_SPAMREFERER_DESC" , "Stop Spam Referer script portability to XOOPS");

// Admin menu links
define("_MI_SPAMREFERER_MANAGER_INDEX" , "Index");
define("_MI_SPAMREFERER_MANAGER_INDEX_DESC" , "Module Administration index page");
define("_MI_SPAMREFERER_MANAGER_ABOUT" , "About");
define("_MI_SPAMREFERER_MANAGER_ABOUT_DESC" , "About this module");
define("_MI_SPAMREFERER_MANAGER_HELP" , "Help");
define("_MI_SPAMREFERER_MANAGER_HELP_DESC" , "Help pour module usage");

// Config Settings
define("_MI_SPAMREFERER_CONF1" , "Production mode? ");
define("_MI_SPAMREFERER_CONF1_DESC" , "Values : true or false<br />true = yes    -     false = no");
define("_MI_SPAMREFERER_CONF1_DEFAULT" , "true");

define("_MI_SPAMREFERER_CONF2" , "IP blocker? ");
define("_MI_SPAMREFERER_CONF2_DESC" , "example: '10.0.0.1', 10.0.0.2', '10.0.0.3', 10.0.0.4' ");
define("_MI_SPAMREFERER_CONF2_DEFAULT" , "");

define("_MI_SPAMREFERER_CONF3" , "Add domains name in your own white list? ");
define("_MI_SPAMREFERER_CONF3_DESC" , "example: '192.', '127.0', 'localhost' ");
define("_MI_SPAMREFERER_CONF3_DEFAULT" , "'192.', '127.0', 'localhost' ");

define("_MI_SPAMREFERER_CONF4" , "Add new domains name in your blacklist? ");
define("_MI_SPAMREFERER_CONF4_DESC" , "example: 'domaine1.com', 'domaine2.fr', 'domaine3.com', 'domaine4.fr'");
define("_MI_SPAMREFERER_CONF4_DEFAULT" , "");

define("_MI_SPAMREFERER_CONF5" , "Blacklist domain names by keywords? ");
define("_MI_SPAMREFERER_CONF5_DESC" , "example: 'poker23', 'nude', 'tralala', 'blablabla'");
define("_MI_SPAMREFERER_CONF5_DEFAULT" , "");

?>