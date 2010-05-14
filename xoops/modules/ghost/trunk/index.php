<?php
if (file_exists("mainfile.php")) {
include("mainfile.php");
} elseif (file_exists("../mainfile.php")) {
include("../mainfile.php");
} else { 
include("../../mainfile.php");
}
include(XOOPS_ROOT_PATH."/header.php");
if(isset($xoTheme) && is_object($xoTheme)) {
   $xoopsTpl->assign('xoops_sitename','Put here the page title, visible at the top of the browser');
   $xoopsTpl->assign('xoops_pagetitle', 'Put here your page title');
   $xoTheme->addMeta( 'meta', 'keywords', 'Put here keyword, keyword1, keyword2, keyword3, etc.');
   $xoTheme->addMeta( 'meta', 'description', 'Put here the page description line that often appears in search results.');
}

//Votre code php si vous devez en intégrer - Your php code if you must integrate
?>
Votre code html si vous devez en intégrer ( sans les balises html, head, title et body)<br />Your html if you must incorporate (without html tags, head, body and title)

<?php
include(XOOPS_ROOT_PATH."/footer.php");
?>
