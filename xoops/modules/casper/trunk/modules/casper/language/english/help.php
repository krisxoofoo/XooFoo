<?php
/**
 * Casper module
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
 * @package	Casper
 * @since		2.3.0
 * @author 	kris <http://www.xoofoo.org>
 * @version	$Id: xoops_version.php 273 2010-05-14 14:40:51Z kris_fr $
**/

define("_AM_CASPER_HELP1" , "<p><strong>Note:</strong>This section helps to create a module will be updated as and when future developments of <span class='bold italic'>\"Casper\"</span>.</p>");
define("_AM_CASPER_HELP2" , "
<h4>Cloning Module</h4>
<p>Casper module was designed to make it easy cloning<br />In the proceedings below, we believe that you work in a local environment.</p>
<ol>
	<li>Copy the <span class='bold italic'>\"casper\"</span> folder found in the <span class='bold italic'>\"xoops_lib/modules/\"</span> folder into <span class='bold italic'>\"rootsite/modules/casper/\"</span></li>
	<li>Copy the file <span class='bold italic'>\"clone.php\"</span> found in the <span class='bold italic'>\"extras\"</span> folder at the root of your site</li>
	<li>Edit this file, lines 18-20, replace the word <span class='bold italic'>\"newname\"</span> with the name you want - <u>Think case sensitive!</u></li>
	<li>Save the edited file</li>
	<li>In the address bar of your browser, run: <span class='italic'>http:\\websiteurl\clone.php</span></li>
	<li>First process has been realized !</li>
	<li><u>Delete the file clone.php and the <span class='bold italic'>\"casper\"</span> folder</u> pasted earlier</li>
	<li>Move the \"rootsite/modules/newname/<span class='bold italic'>newname</span>/\" folder into <span class='bold italic'>\"xoops_lib/modules/\"</span></li>
	<li>If you wish, you can change the image <span class='italic'>\"images/modulename_slogo.png\"</span>. You can file as \"psd\" in the \"docs\" folder of Casper</li>
	<li>Install the module in XOOPS administration, or start to change.</li>
</ol>
");
define("_AM_CASPER_HELP3" , "
<h4>In \"docs\" folder of this module:</h4>
<ul>
	<li><a class='tooltip' rel='external' href='../docs/creation_module_xoops2_v2_en.pdf' title='Module Creation - Basics Doc'>creation_module_xoops2_v2_en.pdf</a></li>
	<li><a class='tooltip' rel='external' href='../docs/creation_module_xoops2_v2_fr.pdf' title='Module Creation - Basics Doc'>creation_module_xoops2_v2_fr.pdf</a></li>
	<li><a class='tooltip' rel='external' href='../docs/xoops_module_structure_function.pdf' title='Module Function Structure'>xoops_module_structure_function.pdf</a></li>
	<li><a class='tooltip' rel='external' href='../docs/smarty_xoops.pdf' title='Smarty Tags Docs'>smarty_xoops.pdf</a></li>
</ul>
");
define("_AM_CASPER_HELP4" , "<h4>Others documentations</h4>");
define("_AM_CASPER_HELP5" , "
<h3>XOOPS Projet Documentation</h3>
<ul>
	<li><a class='tooltip' rel='external' href='http://xoops.org/modules/mediawiki/index.php/Module_Development_Guide' title='XOOPS Module Development Guide'>XOOP Wiki</a></li>
	<li><a class='tooltip' rel='external' href='http://dev.xoops.org/' title='XOOPS Module Dev Forge'>XOOPS Module Dev Forge</a></li>
	<li><a class='tooltip' rel='external' href='http://sourceforge.net/projects/xoops/files/XOOPS%20Documentation_Development/XOOPS_ModuleDevelopmentGuide/' title='XOOPS Doc Repository on SourceForge'>XOOPS Docs on SourceForge</a></li>
	<li><a class='tooltip' rel='external' href='http://xoops.svn.sourceforge.net/viewvc/xoops/XOOPS_Coding_Standards.html?revision=2554' title='XOOPS Coding Standards'>XOOPS XOOPS Coding Standards</a></li>
</ul>
");
define("_AM_CASPER_HELP6" , "
<h3>XOOPSERS Documentation</h3>
<ul>
	<li><a class='tooltip' rel='external' href='http://www.kaotik.biz' title='Kaotik website'>Kaotik Tutorials</a></li>
	<li><a class='tooltip' rel='external' href='http://mark.boyden.name/smartsection.item.3/xoops-developer-documentation-notes.html' title='Mark Boyden Website'>Mark Boyden Tutorials</a></li>
	<li><a class='tooltip' rel='external' href='http://tv.xoofoo.org/modules/mytube/viewcat.php?cid=40' title='TV XooFoo Website'>Video Tutorials on TV.XooFoo</a></li>
</ul>
");
define("_AM_CASPER_HELP7" , "
<h3>Development Documentation</h3>
<ul>
	<li><a class='tooltip' rel='external' href='http://php.net/docs.php' title='PHP Manual'>PHP</a></li>
	<li><a class='tooltip' rel='external' href='http://dev.mysql.com/doc/refman/5.0/fr/index.html' title='MySQL Manual'>MySQL</a></li>
	<li><a class='tooltip' rel='external' href='http://www.smarty.net/documentation' title='Smarty Documentation'>Smarty</a></li>
	<li><a class='tooltip' rel='external' href='http://www.w3.org/TR/html4/' title='Html W3C Standards'>Html</a></li>
	<li><a class='tooltip' rel='external' href='http://www.w3.org/Style/CSS/' title='Css W3C Standards'>Css</a></li>
	<li><a class='tooltip' rel='external' href='http://docs.jquery.com/Main_Page' title='jQuery Documentation'>jQuery</a></li>
</ul>
");

?>