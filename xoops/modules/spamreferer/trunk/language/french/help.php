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

define("_AM_SPAMREFERER_HELP1" , "
<p><strong>Stop Spam Referer</strong> a été écrit en PHP pour palier au défaut que le .htaccess provoque : une consommation CPU importante coté serveur, générant ainsi une perte de performances du site internet utilisant la formule via .htaccess</p>
</p>Dans le cas d'un nombre important de mots clefs et de domaines interdits le fichier .htaccess ne peut plus remplir son office sans un impact important sur les performances, ce que ce script PHP évitera.</p>
</p>Pour rappel pour interdire quelques mots clefs via un .htaccess, ce simple code fera très bien l'affaire:</p>
<div class='xoopsCode'><pre>
RewriteCond %{HTTP_REFERER} (baccarat|casino|cheap) [NC]
RewriteRule ^.* %{HTTP_REFERER} [L,E=nolog:1]
</pre></div>
");
define("_AM_SPAMREFERER_HELP2" , "
<p>Via les préférences du module, vous pouvez personnaliser et améliorer cet outil, en créant vos propres listes :</p>
<ul>
<li>d'adresses IP ou domaines à bannir,</li>
<li>de mots clés à interdire, attention tout de même, car cette fonction est puissante et l'on risque de bannir des milliers de domaines via un simple mots clef (donc les milliers de possibilités).</li>
</ul>
 ");
define("_AM_SPAMREFERER_HELP3" , " Vous trouvez de l'aide concernant l'utilisation de cet outil sur le site de <a href='http://www.stop-spam-referer.info/index.php?name=Docs' title='Stop Spam Referer Website' rel='external'>son auteur</a>.");
define("_AM_SPAMREFERER_HELP4" , " ");
?>