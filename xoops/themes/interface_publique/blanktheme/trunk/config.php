<?php
/**
 * XOOPS blank theme configuration file
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright   The Xoops project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @since       2.3
 * @category    Xoops_Theme
 * @package		dev
 * @version     $Id$
 */

/**
 * A complete theme set should include following files:
 *
 * Folder and file skeleton:
 * REQUIRED:
 *  theme.html - complete layout template: header, footer, body, blocks, navigation
 *  simple.html - simplified layout: header, footer, body
 *  empty.html - empty layout with body only
 *  admin.html - backoffice layout
 *  paginator.html - Paginator template
 * OPTIONAL:
 *  navigation.html - generic navigation template, referenced by layout.html
 *  
 * Stylesheet files:
 * REQUIRED:
 *  style.css - main css file
 *  css/form.css - generic form css file
 * OPTIONAL:
 *  css/redirect.css - css file for redirecting page
 *  css/exception.css - css file for error pages
 *  images/loading_indicator.jpg - Indicator image for redirecting page
 */

return array(
	// Version
    "version"       => "1.5",
    // Title of the theme
    "name"          => "BlankTheme",
	// Put a desccription of theme
	"description"	=> "XOOPS Blank Theme for XOOPS, 1/2 or 3 columns, full screen, without additional Javascript"
    // Parent theme to inherate
    "parent"        => "default",
    // Author information: name, email, website
    "author"        => "Theme architecture: Kris <http://www.xoofoo.org>; Resources: XOOPS Design Team",
    // demo information
    "demo"        	=> "http://theme.xoofoo.org/index.php?xoops_theme_select=blanktheme",
    // support information
    "url"			=> "http://www.xoops.org/modules/newbb/",
	//Put the web link for download this theme
	"download"		=> "http://www.xoops.org/modules/extgallery"
	//Put the w3c standard for this theme
	"compliance"	=> "Xhtml 1.0 Transitional - Css 1/2/3"
	//Put the name and extension for the theme changelog
	"changelog"		=> "changelog.txt"
	//Put the name and extension for the theme readme
	"readme"		=> "readme.txt"
    // Screenshot image. If no screenshot is available, the default theme screenshot will be used
    "screenshot"    => "screenshot.png",
    // Thumbails image. If no thumbail is available, the default theme thumbail will be used
    "thumbail"		=> "shot.gif",
    // License or theme images and scripts
    "license"       => "GPL",
    // copyright - footer description
    "copyright"     => "&copy; Xoops.org, maintained by Xoops Design Team",
    // Disable the theme
    "disable"       => false
	// templates paths must start with a "." to be considered relative to the theme folder
	//"canvasTemplate" => "./xotpl/xo_canvas.html",
	//"pageTemplate" => "./xotpl/xo_page.html",
	
    // Types of language constants
    "languages" 	=> array("main", "admin"),
	
	"jsframework" 	=> array("jQuery", "1.4.2"),
	"thmframework" 	=> array("BlankTheme", "1.5"),
	"icoframework" 	=> array("")
);
?>
