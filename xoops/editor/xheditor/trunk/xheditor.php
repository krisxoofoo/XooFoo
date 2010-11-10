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

xoops_load('XoopsEditor');

class FormXheditor extends XoopsEditor
{
    var $language;
    var $upload = true;
    var $width = "100%";
    var $height = "500px";
    var $toolbarset = "default";
    var $js = '';
    var $langF = 'xheditor-en.min.js';
    /**
     * Constructor
     *
     * @param    array   $configs  Editor Options
     */
    function __construct($configs)
    {
        $this->rootPath = "/class/xoopseditor/xheditor";
        parent::__construct($configs);
        $this->width = isset($this->configs["width"]) ? $this->configs["width"] : $this->width;
        $this->height = isset($this->configs["height"]) ? $this->configs["height"] : $this->height;
        $this->upload = isset($this->configs["upload"]) ? $this->configs["upload"] : $this->upload;
        $this->toolbarset = isset($this->configs["toolbarset"]) ? $this->configs["toolbarset"] : $this->toolbarset;
        $this->js = isset($this->configs["js"]) ? $this->configs["js"] : $this->js;
        $this->langF = isset($this->configs["langF"]) ? $this->configs["langF"] : $this->langF;
    }
    
    function FormXheditor($configs)
    {
        $this->__construct($configs);
    }
    
    /**
     * get language
     *
     * @return    string
     */
    function getLanguage()
    {
        if ($this->language) {
            return $this->language;
        }
        if (defined("_XOOPS_EDITOR_XHEDITOR_LANGUAGE")) {
            $this->language = strtolower(constant("_XOOPS_EDITOR_XHEDITOR_LANGUAGE"));
        } else {
            $this->language = str_replace('_', '-', strtolower(_LANGCODE));
        }
        
        return $this->language;
    }
    
    /**
     * prepare HTML for output
     *
     * @param   bool    decode content?
     * @return  sting HTML
     */
    function render($decode = true)
    {
        $ret = '';
        include_once XOOPS_ROOT_PATH . '/class/xoopseditor/xheditor/xheditor/xheditor.php';
        $oXHeditor = new XHeditor($this->getName());
        $oXHeditor->BasePath     = XOOPS_URL . $this->rootPath. "/xheditor/";
        $oXHeditor->ToolbarSet   = $this->toolbarset;
        $oXHeditor->Width        = $this->width;
        $oXHeditor->Height       = $this->height;
        $oXHeditor->js           = $this->js;
        $oXHeditor->langF        = $this->langF;
        if ($decode) {
            $ts =& MyTextSanitizer::getInstance();
            $oXHeditor->Value = $ts->undoHtmlSpecialChars( $this->getValue() );
        } else {
            $oXHeditor->Value = $this->getValue();
        }

        $ret = $oXHeditor->CreateHtml();
        return $ret;
    }
}
?>
