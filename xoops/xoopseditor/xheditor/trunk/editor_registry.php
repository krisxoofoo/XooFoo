<?php
/**
 * Adapted XHeditor wysiwyg editor
 *
 * @copyright  	 The XOOPS project http://www.xoops.org/
 * @license     	http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package	core
 * @subpackage	xoopseditor
 * @since       	2.5.0
 * @author          Magic.Shao <magic.shao@gmail.com>
*/

return $config = array(
	"name"      =>  "xheditor",
        "class"     =>    "FormXheditor",
        "file"      =>    XOOPS_ROOT_PATH . "/class/xoopseditor/xheditor/xheditor.php",
        "title" 	=>	_XOOPS_EDITOR_XHEDITOR, // display to end user
        "order"     =>    14, // 0 will disable the editor
        "nohtml"    =>    1 // For forms that have "dohtml" disabled
    );
    
?>
