<?php
/**
 * Adapted elRTE wysiwyg editor
 *
 * @copyright  	 The XOOPS project http://www.xoops.org/
 * @license     	http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package	core
 * @subpackage	xoopseditor
 * @since       	2.4.5
 * @author		Taiwen Jiang <phppp@users.sourceforge.net>
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
class XoopsFormElrte extends XoopsEditor
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
        $this->rootPath = "/class/xoopseditor/elrte";
        parent::__construct($configs);
        //$this->XoopsFormTextArea($configs['caption'], $configs['name'], $configs['value']);
        $this->width = $configs['width'];
        $this->height = $configs['height'];
    }

    // PHP 4 Constructor
    function XoopsFormElrte($configs)
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
            $GLOBALS['xoTheme']->addStylesheet( XOOPS_URL . '/class/xoopseditor/elrte/elrte/js/ui-themes/smoothness/jquery-ui-1.8.5.custom.css' );
            $GLOBALS['xoTheme']->addStylesheet( XOOPS_URL . '/class/xoopseditor/elrte/elrte/css/elrte.full.css' );
            //$GLOBALS['xoTheme']->addStylesheet( XOOPS_URL . '/class/xoopseditor/elrte/elfinder/js/ui-themes/base/ui.all.css' );
            //$GLOBALS['xoTheme']->addStylesheet( XOOPS_URL . '/class/xoopseditor/elrte/elfinder/css/elfinder.css' );

            $GLOBALS['xoTheme']->addScript('browse.php?Frameworks/jquery/jquery.js');
            $GLOBALS['xoTheme']->addScript('browse.php?Frameworks/jquery/plugins/jquery.ui.js');
            $GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/elrte/elrte/js/elrte.min.js' );
            // load language file
            $GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/elrte/elrte/js/i18n/elrte.'.$this->getLanguage().'.js' );
            //$GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/elrte/elfinder/js/elfinder.min.js' );
            //$GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/elrte/elfinder/js/i18n/elfinder.'.$this->getLanguage().'.js' );
            $isJsLoaded = true;
        }
        $ret.= "<script type='text/javascript' charset='utf-8'>\n";
        $ret.= "jQuery().ready(function() {\n";
        //$ret.= "	jQuery('selector').elrte({\n";
        //$ret.= "		// ... elrte options\n";
        //$ret.= "		fmOpen : function(callback) {\n";
        //$ret.= "		jQuery('<div id=\"myelfinder\" />').elfinder({\n";
        //$ret.= "		url : '".XOOPS_URL."/class/xoopseditor/elrte/elfinder/connectors/php/connector.php',\n";
        //$ret.= "       	lang : '".$this->getLanguage()."',\n"; // set your language
        //$ret.= "		dialog : { width : 900, modal : true, title : 'Files' },\n";  // open in dialog window
        //$ret.= "		closeOnEditorCallback : true,\n"; // close after file select
        //$ret.= "		editorCallback : callback \n";  // pass callback to file manager
        //$ret.= "		})\n";
        //$ret.= "	}\n";
        //$ret.= "})\n";
        $ret.= "       var opts = {\n";
        $ret.= "       lang : '".$this->getLanguage()."',\n"; // set your language
        $ret.= "       styleWidthCss : false,\n";
        $ret.= "       height : 450,\n";
        $ret.= "        toolbar : 'maxi'\n";
        $ret.= "        };\n";
	// create editor
        $ret.= "        jQuery('#".$this->getName()."').elrte(opts);\n";
        $ret.= "        });\n";
        $ret.= "</script>\n";
	
		
	$ret.= "<div class='".$this->getName()."' name='".$this->getName()."' id='".$this->getName()."' ".$this->getExtra()."style='width:".$this->getWidth().";height:".$this->getHeight().";'>" . $this->getValue() . "</div>";
        return $ret ;		
    }
}
?>
