<?php
/**
 * Adapted HtmlBox editor
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
class XoopsFormHtmlbox extends XoopsEditor
{
    var $language = _LANGCODE;
    var $width;
    var $height;
    var $toolbars = " [
	    [
		// Cut, Copy, Paste
		'separator','cut','copy','paste',
		// Undo, Redo
		'separator','undo','redo',
		// Bold, Italic, Underline, Strikethrough, Sup, Sub
		'separator','bold','italic','underline','strike','sup','sub',
		// Left, Right, Center, Justify
		'separator','justify','left','center','right',
		// Ordered List, Unordered List, Indent, Outdent
		'separator','ol','ul','indent','outdent',
		// Hyperlink, Remove Hyperlink, Image
		'separator','link','unlink','image'
		],
		[// Show code
		'separator','code',
        // Formats, Font size, Font family, Font color, Font, Background
        'separator','formats','fontsize','fontfamily',
		'separator','fontcolor','highlight',
		],
		[
		//Strip tags
		'separator','removeformat','striptags','hr','paragraph',
		// Styles, Source code syntax buttons
		'separator','quote','styles','syntax'
		]
	],";
    var $urlimg;
    var $skin = "blue";
    var $editor;
    // PHP 5 Constructor
    function __construct($configs)
    {
        $current_path = __FILE__;
        if ( DIRECTORY_SEPARATOR != "/" ) {
            $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
        }
        $this->rootPath = "/class/xoopseditor/htmlbox";
        parent::__construct($configs);
        $this->width = $configs['width'];
        $this->height = $configs['height'];
        $this->toolbars = isset($this->configs["toolbars"]) ? $this->configs["toolbars"] : $this->toolbars;
        //$this->urlimg = isset($this->configs["urlimg"]) ? $this->configs["urlimg"] : $this->urlimg;
        $this->skin = isset($this->configs["skin"]) ? $this->configs["skin"] : $this->skin;
	$this->urlimg = $this->config["urlimg"] . XOOPS_URL. "/class/xoopseditor/htmlbox/htmlbox/images/";
    }
    // PHP 4 Constructor
    function XoopsFormHtmlbox($configs)
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
		$GLOBALS['xoTheme']->addStylesheet( XOOPS_URL . '/class/xoopseditor/htmlbox/htmlbox/htmlbox.css' );
		$GLOBALS['xoTheme']->addScript('browse.php?Frameworks/jquery/jquery.js');
		$GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/htmlbox/htmlbox/htmlbox.colors.js' );
		$GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/htmlbox/htmlbox/htmlbox.styles.js' );
		$GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/htmlbox/htmlbox/htmlbox.syntax.js' );
		$GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/htmlbox/htmlbox/xhtml.js' );
		$GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/htmlbox/htmlbox/htmlbox.js' );
        }
	$ret.= "<textarea class='".$this->getName()." htmlbox' name='".$this->getName()."' id='".$this->getName()."' ".$this->getExtra()."style='width:".$this->getWidth().";height:".$this->getHeight().";'>" . $this->getValue() . "</textarea>\n";
        $ret.= "<script type='text/javascript'>\n";
        $ret.= "    jQuery('#".$this->getName()."').css({height:'".$this->getHeight()."', width:'".$this->getWidth()."'}).htmlbox({\n";
        $ret.= "    toolbars: " . $this->toolbars . " \n";
        $ret.= "    idir: '" . $this->urlimg . "' , \n";
        $ret.= "    skin: '" . $this->skin . "' \n";
        $ret.= "    });";
        $ret.= "</script>\n";		
        return $ret ;		
    }
}
?>