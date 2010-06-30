<?php
/**
 * Adminer Module based on Ghost Module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright           The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package          Adminer Module
 * @since               2.3.0
 * @author              Kris <http://www.xoofoo.org>
 * @version             $Id$
**/

if (file_exists("mainfile.php")) {
include("mainfile.php");
} elseif (file_exists("../mainfile.php")) {
include("../mainfile.php");
} else { 
include("../../mainfile.php");
}
include(XOOPS_ROOT_PATH."/header.php");
?>
<h1 style="text-align:center;">Database MySQL Tools & Management</h1>
<div style="margin-top: 2em; text-align:center;">
<div><img src="images/logo_adminer.png" alt="Adminer"/></div>
<div style="display:block; width:50%; float:left;"><a rel="external" href="mysql.php" title="Database Management"><img src="images/database.png" alt=""/></a></div>
<div style="display:block; width:50%; float:left;"><a rel="external" href="editor.php" title="Database Editor"><img src="images/database_edit.png" alt=""/></a></div>
<div style="display:block;"><a rel="external" href="include/bigdump.php" title="Database Big Dump"><img src="images/database_dump.png" alt=""/></a></div>
<p style="text-align:right;"><a rel="external" href="http://www.adminer.org/" title="Adminer.org">More info ...</a> and <a rel="external" href="http://php.vrana.cz/architecture-of-adminer.php" title="Architecture of Adminer">more ...</a></p>
</div>
<?php
include(XOOPS_ROOT_PATH."/footer.php");
?>
