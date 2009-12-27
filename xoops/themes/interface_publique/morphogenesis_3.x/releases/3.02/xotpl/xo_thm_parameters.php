<?php
include_once $GLOBALS['xoops']->path('class/theme.php');
include_once $GLOBALS['xoops']->path('class/theme_blocks.php');

// Theme name
	<{assign var=theme_name value=$xoTheme->folderName}>
// Directory html blocks files or additional html files by include
	<{assign var=theme_name value=$xoTheme->folderName|cat:'/xotpl'}>
// Directory html plugins files
	<{assign var=theme_plugin value=$xoTheme->folderName|cat:'/xoplugins'}>
// Directory html javascript files
	<{assign var=theme_js value=$xoTheme->folderName|cat:'/js'}>




// parameters for the positioning of blocks top and bottom
	// Center blocks display order valid values are:  lrc (left right / center) lcr (left center right) clr (center / left right)
	$xoopsTpl->assign('theme_top_order', 'lrc'); 
	$xoopsTpl->assign('theme_bottom_order', 'lrc');

// Setting this to 0 will remove the display toggle button on all browsers
	$xoopsTpl->assign('theme_left_toggle', '1'); 
	$xoopsTpl->assign('theme_right_toggle', '1');
	$xoopsTpl->assign('theme_homepage_toggle', '1');

// Setting this to 0 will remove the display link for view all on all browsers	 
	$xoopsTpl->assign('theme_viewall_block', '1');
	$xoopsTpl->assign('theme_viewall_content', '1');
	
// Setting this to 0 will remove the display the topheader	
	$xoopsTpl->assign('theme_view_topheader', '1');
	// for remove the display the language choice in topheader	
	$xoopsTpl->assign('theme_view_languagechoice', '1');	
	// for remove the display the searchbar in topheader
	$xoopsTpl->assign('theme_view_searchbar', '1');	
	// for remove the display the userbar in topheader	
	$xoopsTpl->assign('theme_view_userbar', '1');
	// for remove the display the userbar in topheader	
	$xoopsTpl->assign('theme_view_accessibilitybar', '1');
// Setting this to 0 will remove the display the horizontal menu globalnav	
	$xoopsTpl->assign('theme_view_globalnav', '1');
// Setting this to 0 will remove the display the homepage/homebox	
	$xoopsTpl->assign('theme_view_homepage', '1');
// Setting this to 0 will remove the display the left column	
	$xoopsTpl->assign('theme_view_leftcolumn', '1');
// Setting this to 0 will remove the display the right column	
	$xoopsTpl->assign('theme_view_rightcolumn', '1');
// Setting this to 0 will remove the display the topblock content	
	$xoopsTpl->assign('theme_view_topblock', '1');
// Setting this to 0 will remove the display the bottomblock content	
	$xoopsTpl->assign('theme_view_bottomblock', '1');
// Setting this to 0 will remove the display the breadcrumb	
	$xoopsTpl->assign('theme_view_breadcrumb', '1');
// Setting this to 0 will remove the display the socialbookmark bar	
	$xoopsTpl->assign('theme_view_socialbookmark', '1');
// Setting this to 0 will remove the display the blockfooter in footer	
	$xoopsTpl->assign('theme_view_blockfooter', '1');
// Setting this to 0 will remove the display the w3cblock in footer	
	$xoopsTpl->assign('theme_view_w3cblockfooter', '1');
// Setting this to 0 will remove the display the baradmin	
	$xoopsTpl->assign('theme_view_baradmin', '1');
?>