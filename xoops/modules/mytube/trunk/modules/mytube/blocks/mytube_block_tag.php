<?php
function mytube_tag_block_cloud_show( $options ) {
        $mydirname = basename( dirname( dirname( __FILE__ ) ) );
        include_once XOOPS_ROOT_PATH . '/modules/' . $mydirname . '/include/functions.php';
        if ( xtube_tag_module_included() ) {
          include_once XOOPS_ROOT_PATH . '/modules/tag/blocks/block.php';
          return tag_block_cloud_show( $options, $mydirname );
        }
}
function mytube_tag_block_cloud_edit( $options ) {
        $mydirname = basename( dirname( dirname( __FILE__ ) ) );
        include_once XOOPS_ROOT_PATH . '/modules/' . $mydirname . '/include/functions.php';
        if ( xtube_tag_module_included() ) {
          include_once XOOPS_ROOT_PATH . '/modules/tag/blocks/block.php';
          return tag_block_cloud_edit( $options );
        }
}
function mytube_tag_block_top_show( $options ) {
        $mydirname = basename( dirname( dirname( __FILE__ ) ) );
        include_once XOOPS_ROOT_PATH . '/modules/' . $mydirname . '/include/functions.php';
        if ( xtube_tag_module_included() ) {
          include_once XOOPS_ROOT_PATH . '/modules/tag/blocks/block.php';
          return tag_block_top_show( $options, $mydirname );
        }
}
function mytube_tag_block_top_edit( $options ) {
        $mydirname = basename( dirname( dirname( __FILE__ ) ) );
        include_once XOOPS_ROOT_PATH . '/modules/' . $mydirname . '/include/functions.php';
        if ( xtube_tag_module_included() ) {
          include_once XOOPS_ROOT_PATH . '/modules/tag/blocks/block.php';
          return tag_block_top_edit( $options );
        }
}
?>