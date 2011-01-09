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
<p>Stop spam Referer was written in PHP to assume the bests performances.<br />htaccess file cause a signifiant CPU server side. Loss of performance for the website using this formule throught .htaccess</p>
<p>In the case oh a large number of keywords and domain names are used, .htaccess have a signifiant impact of your performances, SSR prevent it .</p>
<p>As a reminder to ban some domain names by keywords by .htaccess file, this simple code will do nicely</p>
<div class='xoopsCode'><pre>
RewriteCond %{HTTP_REFERER} (baccarat|casino|cheap) [NC]
RewriteRule ^.* %{HTTP_REFERER} [L,E=nolog:1]
</pre></div>
");
define("_AM_SPAMREFERER_HELP2" , "
<p>Via the module's preferences, you can customize and improve this tool by creating your own lists:</p>
<ul>
<li>IP addresses or domains to banish</li>
<li>keyword to prohibit attention anyway, because this function is powerful and it could banish thousands of domains via a simple key words (so the thousands of possibilities).</li>
</ul>
");
define("_AM_SPAMREFERER_HELP3" , "You will find help on using this tool on the site of <a href='http://www.stop-spam-referer.info/index.php?name=Docs' title='Stop Spam Referer Website' rel='external'>its author</a>.");
define("_AM_SPAMREFERER_HELP4" , "");

?>