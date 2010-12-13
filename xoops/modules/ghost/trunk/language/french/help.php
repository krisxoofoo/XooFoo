<?php
/**
 * Ghost module
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
 * @package	Ghost
 * @since		2.3.0
 * @author 	kris <http://www.xoofoo.org>
 * @version	$Id$
**/

define("_AM_GHOST_HELP1" , "<p><strong>Note:</strong> Cette section d'aide à la création d'un module sera actualisée au fur et à mesure des évolutions futures de <span class='bold italic'>\"Ghost\"</span>.</p>");
define("_AM_GHOST_HELP2" , "
<h4>Clonage du module</h4>
<p>Le module Ghost a été conçu pour rendre son clonage aisé.<br />Pour la procédure ci-dessous, nous considérons que vous travaillez dans un environnement local.</p>
<ol>
	<li>Copiez le fichier <span class='bold italic'>\"clone.php\"</span> se trouvant dans le dossier <span class='bold italic'>\"extras\"</span> à la racine de votre site</li>
	<li>Editez ce fichier, aux lignes 18 à 20, remplacez le terme <span class='bold italic'>\"newname\"</span> par le nom que vous désirez - <u>Pensez à respecter la casse !</u></li>
	<li>Enregistrez le fichier modifié</li>
	<li>Dans la barre d'adresse de votre navigateur internet, lancez : <span class='italic'>http:\\adressedusite\clone.php</span></li>
	<li>Votre module cloné vient d'être créé !</li>
	<li><u>Supprimez le fichier clone.php</u></li>
	<li>Si vous le désirez, vous pouvez changer l'image <span class='italic'>\"images/nomdumodule_slogo.png\"</span>. Vous avez le fichier au format \"psd\" dans le dossier \"docs\" de Ghost</li>
	<li>Installez le module via l'administration de XOOPS, ou commencez à le modifier.</li>
</ol>
");
define("_AM_GHOST_HELP3" , "
<h4>Documentation du dossier \"docs\" de ce module :</h4>
<ul>
	<li><a class='tooltip' rel='external' href='../docs/creation_module_xoops2_v2_en.pdf' title='Module Creation - Basics Doc'>creation_module_xoops2_v2_en.pdf</a></li>
	<li><a class='tooltip' rel='external' href='../docs/creation_module_xoops2_v2_fr.pdf' title='Module Creation - Basics Doc'>creation_module_xoops2_v2_fr.pdf</a></li>
	<li><a class='tooltip' rel='external' href='../docs/xoops_module_structure_function.pdf' title='Module Function Structure'>xoops_module_structure_function.pdf</a></li>
	<li><a class='tooltip' rel='external' href='../docs/smarty_xoops.pdf' title='Smarty Tags Docs'>smarty_xoops.pdf</a></li>
</ul>
");
define("_AM_GHOST_HELP4" , "<h4>Autres documentations</h4>");
define("_AM_GHOST_HELP5" , "
<h3>XOOPS Projet Documentation</h3>
<ul>
	<li><a class='tooltip' rel='external' href='http://xoops.org/modules/mediawiki/index.php/Module_Development_Guide' title='XOOPS Module Development Guide'>XOOP Wiki</a></li>
	<li><a class='tooltip' rel='external' href='http://dev.xoops.org/' title='XOOPS Module Dev Forge'>XOOPS Module Dev Forge</a></li>
	<li><a class='tooltip' rel='external' href='http://sourceforge.net/projects/xoops/files/XOOPS%20Documentation_Development/XOOPS_ModuleDevelopmentGuide/' title='XOOPS Doc Repository on SourceForge'>XOOPS Docs on SourceForge</a></li>
	<li><a class='tooltip' rel='external' href='http://xoops.svn.sourceforge.net/viewvc/xoops/XOOPS_Coding_Standards.html?revision=2554' title='XOOPS Coding Standards'>XOOPS XOOPS Coding Standards</a></li>
</ul>
");
define("_AM_GHOST_HELP6" , "
<h3>XOOPSERS Documentation</h3>
<ul>
	<li><a class='tooltip' rel='external' href='http://www.kaotik.biz' title='Kaotik website'>Tutoriels par Kaotik</a></li>
	<li><a class='tooltip' rel='external' href='http://mark.boyden.name/smartsection.item.3/xoops-developer-documentation-notes.html' title='Notes de Mark Boyden'>Mark Boyden Tutorials</a></li>
	<li><a class='tooltip' rel='external' href='http://tv.xoofoo.org/modules/mytube/viewcat.php?cid=40' title='TV XooFoo Website'>Tutoriels vidéo sur TV.XooFoo</a></li>
</ul>
");
define("_AM_GHOST_HELP7" , "
<h3>Development Documentation</h3>
<ul>
	<li><a class='tooltip' rel='external' href='http://php.net/docs.php' title='Manuel PHP'>PHP</a></li>
	<li><a class='tooltip' rel='external' href='http://dev.mysql.com/doc/refman/5.0/fr/index.html' title='Manuel MySQL'>MySQL</a></li>
	<li><a class='tooltip' rel='external' href='http://www.smarty.net/documentation' title='Smarty Documentation'>Smarty</a></li>
	<li><a class='tooltip' rel='external' href='http://www.w3.org/TR/html4/' title='Html W3C Standards'>Html</a></li>
	<li><a class='tooltip' rel='external' href='http://www.w3.org/Style/CSS/' title='Css W3C Standards'>Css</a></li>
	<li><a class='tooltip' rel='external' href='http://docs.jquery.com/Main_Page' title='jQuery Documentation'>jQuery</a></li>
</ul>
");
?>