<?php
/**
 * Adapted CLeditor editor
 *
 * @copyright  	 The XOOPS project http://www.xoops.org/
 * @license     	http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package	core
 * @subpackage	xoopseditor
 * @since       	2.4.5
 * @author          	kris <http://www.xoofoo.org>
 */

xoops_load('XoopsEditor');

/**
 * Constructor
 *
 * @param        string  $caption      Caption
 * @param        string  $name         "name" attribute
 * @param        string  $value        Initial text
 * @param        string  $width        iframe width
 * @param        string  $height       iframe height
 * @param        array   $options  Toolbar Options
 */
class XoopsFormCleditor extends XoopsEditor
{
    var $language = _LANGCODE;
    var $width;
    var $height;
    var $editor;
    // PHP 5 Constructor
    function __construct($configs)
    {
        $current_path = __FILE__;
        if ( DIRECTORY_SEPARATOR != "/" ) {
            $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
        }
        $this->rootPath = "/class/xoopseditor/cleditor";
        parent::__construct($configs);
        //$this->XoopsFormTextArea($configs['caption'], $configs['name'], $configs['value']);
        $this->width = $configs['width'];
        $this->height = $configs['height'];
    }

    // PHP 4 Constructor
    function XoopsFormCleditor($configs)
    {
        $this->__construct($configs);
    }

    function getName()
    {
        return $this->name;
    }

    function setName($value)
    {
        $this->name = $value;
    }

    /**
     * get textarea width
     *
     * @return  string
     */
    function getWidth()
    {
        return $this->width;
    }

    /**
     * get textarea height
     *
     * @return  string
     */
    function getHeight()
    {
        return $this->height;
    }

    /**
     * get language
     *
     * @return  string
     */
    function getLanguage()
    {
        return str_replace('_','-',strtolower($this->language));
    }

    /**
     * set language
     *
     * @return  null
     */
    function setLanguage($lang='en')
    {
        $this->language = $lang;
    }

    /**
     * Get initial content
     *
     * @param        bool    $encode To sanitizer the text? Default value should be "true"; however we have to set "false" for backward compat
     * @return        string
     */
    function getValue() {
        return strtr(htmlspecialchars_decode($this->_value) , array("\n" => '<br />', "\r\n" =>'<br />'));
    }

    /**
     * Renders the Javascript function needed for client-side for validation
     *
     * @return    string
     */
    function renderValidationJS()
    {
        if ($this->isRequired() && $eltname = $this->getName()) {
            $eltcaption = $this->getCaption();
            $eltmsg = empty($eltcaption) ? sprintf( _FORM_ENTER, $eltname ) : sprintf( _FORM_ENTER, $eltcaption );
            $eltmsg = str_replace('"', '\"', stripslashes( $eltmsg ) );
            $ret = "\n";
            $ret.= "if ( myform.{$eltname}.value == '' || myform.{$eltname}.value == '<br />' )";
            $ret.= "{ window.alert(\"{$eltmsg}\"); myform.{$eltname}.focus(); return false; }";
            return $ret;
            }
        return '';
    }

    /**
     * prepare HTML for output
     *
     * @return  sting HTML
     */
    function render()
    {
        static $isJsLoaded = false;
        $ret = "\n";
        if(!$isJsLoaded)
        {
            $GLOBALS['xoTheme']->addStylesheet( XOOPS_URL . '/class/xoopseditor/cleditor/cleditor/jquery.cleditor.css' );
            $GLOBALS['xoTheme']->addScript('browse.php?Frameworks/jquery/jquery.js');
            $GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/cleditor/cleditor/jquery.cleditor.min.js' );
            $GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/cleditor/cleditor/jquery.cleditor.advancedtable.min.js' );
            $GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/cleditor/cleditor/jquery.cleditor.xhtml.min.js' );
            $GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/cleditor/cleditor/jquery.cleditor.icon.min.js' );
            //$GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/cleditor/cleditor/jquery.cleditor.bbcode.min.js' );
            $isJsLoaded = true;
        }
	/*
	$ret.= "<script type='text/javascript' charset='utf-8'>\n";
        $ret.= "jQuery(document).ready(function(){\n";
        $ret.= "       jQuery('#".$this->getName()."').cleditor();\n";
        $ret.= "   });\n";
	$ret.= "</script>\n";
	*/
	$ret.= "<script type='text/javascript'>\n";
        $ret.= "jQuery(document).ready(function(){\n";
        $ret.= "      jQuery.cleditor.defaultOptions.width = 450;\n";
        $ret.= "   	jQuery.cleditor.defaultOptions.height = 250;\n";
        //$ret.= "   	jQuery.cleditor.defaultOptions.controls = 'bold italic underline strikethrough';\n";
        $ret.= "       jQuery('#".$this->getName()."').cleditor();\n";
        $ret.= "   });\n";

        $ret.= "</script>\n";
	
	$ret.= "<textarea class='".$this->getName()."' name='".$this->getName()."' id='".$this->getName()."' ".$this->getExtra()."style='width:".$this->getWidth().";height:".$this->getHeight().";'>" . $this->getValue() . "</textarea>";
        return $ret ;		
    }
}
?>