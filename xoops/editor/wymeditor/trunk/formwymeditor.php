<?php
/**
 * Adapted WYMeditor wysiwyg editor
 *
 * @author      luciorota (lucio.rota@gmail.com)
 *
 * @package
 * @subpackage
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
class XoopsFormWYMeditor extends XoopsEditor
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
        $this->rootPath = "/class/xoopseditor/wymeditor";
        parent::__construct($configs);
        //$this->XoopsFormTextArea($configs['caption'], $configs['name'], $configs['value']);
        $this->width = $configs['width'];
        $this->height = $configs['height'];
    }

    // PHP 4 Constructor
    function XoopsFormSpaw($configs)
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
            //$eltname = $this->getName();
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
            $ret.= "<link rel='stylesheet' type='text/css' media='screen' href='".XOOPS_URL."/class/xoopseditor/wymeditor/wymeditor/skins/default/screen.css' />\n";
            $ret.= "<script type='text/javascript' src='".XOOPS_URL."/class/xoopseditor/wymeditor/jquery/jquery.js'></script>\n";
            $ret.= "<script type='text/javascript' src='".XOOPS_URL."/class/xoopseditor/wymeditor/wymeditor/jquery.wymeditor.pack.js'></script>\n";
            // load language file
            $ret.= "<script type='text/javascript' src='".XOOPS_URL."/class/xoopseditor/wymeditor/wymeditor/lang/".$this->getLanguage().".js'></script>\n";
            // load the plugin
            //$ret.= "<script type='text/javascript' src='".XOOPS_URL."/class/xoopseditor/wymeditor/wymeditor/plugins/hovertools/jquery.wymeditor.hovertools.js'></script>\n";
            //$ret.= "<script type='text/javascript' src='".XOOPS_URL."/class/xoopseditor/wymeditor/wymeditor/plugins/hovertools/jquery.wymeditor.tidy.js'></script>\n";
            $isJsLoaded = true;
        }

        $ret.= "<textarea class='".$this->getName()."' name='".$this->getName()."' id='".$this->getName()."' rows='".$this->getRows()."' cols='".$this->getCols()."' ".$this->getExtra()." style='width:".$this->getWidth().";height:".$this->getHeight().";display:none;'></textarea>";
        $ret.= "<script type='text/javascript'>\n";
        $ret.= "jQuery(function()\n";
        $ret.= "        {\n";
        $ret.= "        jQuery('.".$this->getName()."').wymeditor({\n";
        $ret.= "                html: '".$this->getValue()."',\n";
        $ret.= "                stylesheet: '".XOOPS_URL."/class/xoopseditor/wymeditor/styles.css',\n";
        $ret.= "                lang: '".$this->getLanguage()."',\n";
        //postInit is executed after WYMeditor initialization
        //'wym' is the current WYMeditor instance
        //we generally activate plugins after WYMeditor initialization
        $ret.= "                postInit: function(wym){\n";
        //activate 'hovertools' plugin which gives advanced feedback to the user:
        $ret.= "                        wym.hovertools();\n";
        //activate the 'tidy' plugin, which cleans up the HTML
        $ret.= "                        var wymtidy = wym.tidy();wymtidy.init();\n";
        $ret.= "                        }\n";
        $ret.= "                });\n";
        $ret.= "        });\n";
        $ret.= "</script>\n";
        return $ret;
    }
}
?>
