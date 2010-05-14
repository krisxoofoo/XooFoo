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
   $xoTheme->addMeta( 'meta', 'keywords', "Put here keyword, keyword1, keyword2, keyword3, etc.");
   $xoTheme->addMeta( 'meta', 'description', "Put here the page description line that often appears in search results.");
}

if ( is_object($xoopsTpl) ) {
$xoopsTpl->assign( 'xoBlocks' , 0 );  //=> tous les blocs - All blocks
	
//$xoopsTpl->append( 'xoBlocks', array( 'canvas_top' => 0 ), true );
//$xoopsTpl->append( 'xoBlocks', array( 'canvas_right' => 0 ), true );
//$xoopsTpl->append( 'xoBlocks', array( 'canvas_left' => 0 ), true );
//$xoopsTpl->append( 'xoBlocks', array( 'page_topleft' => 0 ), true );
//$xoopsTpl->append( 'xoBlocks', array( 'page_topcenter' => 0 ), true );
//$xoopsTpl->append( 'xoBlocks', array( 'page_topright' => 0 ), true );
//$xoopsTpl->append( 'xoBlocks', array( 'page_bottomleft' => 0 ), true );
//$xoopsTpl->append( 'xoBlocks', array( 'page_bottomcenter' => 0 ), true );
//$xoopsTpl->append( 'xoBlocks', array( 'page_bottomright' => 0 ), true );	
//$xoopsTpl->append( 'xoBlocks', array( 'canvas_bottom ' => 0 ), true );
}

//Votre code php si vous devez en intégrer - Your php code if you must integrate
?>
<!-- Votre code html si vous devez en intégrer ( sans les balises html, head, title et body)  - Your html if you must incorporate (without html tags, head, body and title) -->

<?php
include(XOOPS_ROOT_PATH."/footer.php");
?>
