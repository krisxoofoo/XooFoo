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
define("_MI_SPAMREFERER_DESC" , "Portage du script Stop Spam Referer pour XOOPS");

// Admin menu links
define("_MI_SPAMREFERER_MANAGER_INDEX" , "Index");
define("_MI_SPAMREFERER_MANAGER_INDEX_DESC" , "Page d'index de l'administration du module");
define("_MI_SPAMREFERER_MANAGER_ABOUT" , "Au Sujet");
define("_MI_SPAMREFERER_MANAGER_ABOUT_DESC" , "A propos de ce module");
define("_MI_SPAMREFERER_MANAGER_HELP" , "Aide");
define("_MI_SPAMREFERER_MANAGER_HELP_DESC" , "Aide à l'utilisation du module");

// Config Settings - parameters
define("_MI_SPAMREFERER_CONF1" , "Site en production ? ");
define("_MI_SPAMREFERER_CONF1_DESC" , "Valeurs : true ou false<br />true = oui    -     false = non");
define("_MI_SPAMREFERER_CONF1_DEFAULT" , "true");

define("_MI_SPAMREFERER_CONF2" , "Adresses IP à bannir ?");
define("_MI_SPAMREFERER_CONF2_DESC" , "exemple de mode de saisie : '10.0.0.1', 10.0.0.2', '10.0.0.3', 10.0.0.4' ");
define("_MI_SPAMREFERER_CONF2_DEFAULT" , "");

define("_MI_SPAMREFERER_CONF3" , "Adresses IP toujours autorisées : ");
define("_MI_SPAMREFERER_CONF3_DESC" , "exemple de mode de saisie : '192.', '127.0', 'localhost' ");
define("_MI_SPAMREFERER_CONF3_DEFAULT" , "'192.', '127.0', 'localhost' ");

define("_MI_SPAMREFERER_CONF4" , "Liste noire de domaines : ");
define("_MI_SPAMREFERER_CONF4_DESC" , "exemple de mode de saisie : 'domaine1.com', 'domaine2.fr', 'domaine3.com', 'domaine4.fr'");
define("_MI_SPAMREFERER_CONF4_DEFAULT" , "");

define("_MI_SPAMREFERER_CONF5" , "Liste noire de termes utilisés : ");
define("_MI_SPAMREFERER_CONF5_DESC" , "exemple de mode de saisie : 'poker23', 'nude', 'tralala', 'blablabla'");
define("_MI_SPAMREFERER_CONF5_DEFAULT" , "");

?>