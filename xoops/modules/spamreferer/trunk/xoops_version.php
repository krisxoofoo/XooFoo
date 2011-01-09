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

$module_dirname = basename( dirname( __FILE__ ) ) ;

$modversion["name"] 	=  _MI_SPAMREFERER_NAME;
$modversion["version"] 	= 1.0;
$modversion["description"] 	= _MI_SPAMREFERER_DESC;
$modversion["author"] 	= "Kris - http://www.xoofoo.org";
$modversion["credits"]	= "Cyril Levert - http://www.stop-spam-referer.info";
$modversion["help"] 		= "";
$modversion["dirname"] 	= $module_dirname;
$modversion["image"] 	= "images/" . $module_dirname . "_slogo.png";
$modversion["license"] 	= "GNU General Public License";
$modversion["license_url"]	= "http://www.gnu.org/licenses/gpl.html";
$modversion["official"] 	= 0;
$modversion["author_website_url"]	= "http://labs.xoofoo.org";
$modversion["author_website_name"]	= "Laboratoire XooFoo";

//about
$modversion["demo_site_url"]			= "";
$modversion["demo_site_name"]			= "";
$modversion["module_website_url"]		= "http://labs.xoofoo.org";
$modversion["module_website_name"]	= "Labs XooFoo";
$modversion["module_release"]			= "10 Jan 2011";
$modversion["module_status"]			= "Beta";

// Admin Menu
$modversion["system_menu"] = 1 ;
$modversion["hasAdmin"] 	= 1; // active = 1
$modversion["adminindex"] = "admin/index.php";
$modversion["adminmenu"] = "admin/menu.php";

// Menu
$modversion["hasMain"] 		= 0; // active = 1

// Config
/*
$i = 1;
$modversion["config"][$i]["name"]		= "spamrefererconf1";
$modversion["config"][$i]["title"]			= "_MI_SPAMREFERER_CONF1";
$modversion["config"][$i]["description"]	= "_MI_SPAMREFERER_CONF1_DESC";
$modversion["config"][$i]["formtype"]		= "textbox";
$modversion["config"][$i]["valuetype"]		= "text";
$modversion["config"][$i]["default"]		= _MI_SPAMREFERER_CONF1_DEFAULT;
$i++;
$modversion["config"][$i]["name"]		= "spamrefererconf2";
$modversion["config"][$i]["title"]			= "_MI_SPAMREFERER_CONF2";
$modversion["config"][$i]["description"]	= "_MI_SPAMREFERER_CONF2_DESC";
$modversion["config"][$i]["formtype"]		= "textarea";
$modversion["config"][$i]["valuetype"]		= "textarea";
$modversion["config"][$i]["default"]		= _MI_SPAMREFERER_CONF2_DEFAULT;
$i++;
$modversion["config"][$i]["name"]		= "spamrefererconf3";
$modversion["config"][$i]["title"]			= "_MI_SPAMREFERER_CONF3";
$modversion["config"][$i]["description"]	= "_MI_SPAMREFERER_CONF3_DESC";
$modversion["config"][$i]["formtype"]		= "textarea";
$modversion["config"][$i]["valuetype"]		= "textarea";
$modversion["config"][$i]["default"]		= _MI_SPAMREFERER_CONF3_DEFAULT;
$i++;
$modversion["config"][$i]["name"]		= "spamrefererconf4";
$modversion["config"][$i]["title"]			= "_MI_SPAMREFERER_CONF4";
$modversion["config"][$i]["description"]	= "_MI_SPAMREFERER_CONF4_DESC";
$modversion["config"][$i]["formtype"]		= "textarea";
$modversion["config"][$i]["valuetype"]		= "textarea";
$modversion["config"][$i]["default"]		= _MI_SPAMREFERER_CONF4_DEFAULT;
$i++;
$modversion["config"][$i]["name"]		= "spamrefererconf5";
$modversion["config"][$i]["title"]			= "_MI_SPAMREFERER_CONF5";
$modversion["config"][$i]["description"]	= "_MI_SPAMREFERER_CONF5_DESC";
$modversion["config"][$i]["formtype"]		= "textarea";
$modversion["config"][$i]["valuetype"]		= "textarea";
$modversion["config"][$i]["default"]		= _MI_SPAMREFERER_CONF5_DEFAULT;
*/
// Templates
$i = 1;
$modversion["templates"][$i]["file"] 		= "admin/". $module_dirname . "_admin_index.html";
$modversion["templates"][$i]["description"] 	= _MI_SPAMREFERER_MANAGER_INDEX_DESC;
$i++;
$modversion["templates"][$i]["file"] 		= "admin/". $module_dirname . "_admin_about.html";
$modversion["templates"][$i]["description"] 	= _MI_SPAMREFERER_MANAGER_ABOUT_DESC;
$i++;
$modversion["templates"][$i]["file"] 		= "admin/". $module_dirname . "_admin_help.html";
$modversion["templates"][$i]["description"] 	= _MI_SPAMREFERER_MANAGER_HELP_DESC;

?>