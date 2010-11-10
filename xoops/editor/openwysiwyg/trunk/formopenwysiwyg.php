<?php
/**
 * Adapted openwysiwyg editor
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
class XoopsFormOpenwysiwyg extends XoopsEditor
{
    var $language = _LANGCODE;
    var $width;
    var $height;
    var $imgurl;
    var $cssurl;
    var $popurl;
    var $popimgurl;
    var $poplinkurl;
    // PHP 5 Constructor
    function __construct($configs)
    {
        $current_path = __FILE__;
        if ( DIRECTORY_SEPARATOR != "/" ) {
            $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
        }
        $this->rootPath = "/class/xoopseditor/openwysiwyg";
        parent::__construct($configs);
        $this->width = $configs['width'];
        $this->height = $configs['height'];
	$this->imgurl = $this->config["imgurl"] . XOOPS_URL. "/class/xoopseditor/openwysiwyg/openwysiwyg/images/";
	$this->cssurl = $this->config["cssurl"] . XOOPS_URL. "/class/xoopseditor/openwysiwyg/openwysiwyg/styles/";
	$this->popurl = $this->config["popurl"] . XOOPS_URL. "/class/xoopseditor/openwysiwyg/openwysiwyg/popups/";
	$this->popimgurl = $this->config["popimgurl"] . XOOPS_URL. "/class/xoopseditor/openwysiwyg/openwysiwyg/addons/imagelibrary/insert_image.php";
	$this->poplinkurl = $this->config["poplinkurl"] . XOOPS_URL. "/class/xoopseditor/openwysiwyg/openwysiwyg/addons/linklibrary/insert_hyperlink.php";
    }
    // PHP 4 Constructor
    function XoopsFormOpenwysiwyg($configs)
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
		$GLOBALS['xoTheme']->addStylesheet( XOOPS_URL . '/class/xoopseditor/openwysiwyg/openwysiwyg/styles/wysiwyg.css' );
		//$GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/openwysiwyg/openwysiwyg/scripts/wysiwyg.js' );
		$GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/openwysiwyg/openwysiwyg/scripts/wysiwyg.min.js' );
		$GLOBALS['xoTheme']->addScript( XOOPS_URL . '/class/xoopseditor/openwysiwyg/openwysiwyg/scripts/wysiwyg-settings.js' );
        }
	$ret.= "<textarea class='".$this->getName()." openwysiwyg' name='".$this->getName()."' id='".$this->getName()."' ".$this->getExtra()."style='width:".$this->getWidth().";height:".$this->getHeight().";'>" . $this->getValue() . "</textarea>\n";
        $ret.= "<script type='text/javascript'>\n";
        $ret.= "    var mysettings = new WYSIWYG.Settings();\n";
        $ret.= "		mysettings.ImagesDir = '" . $this->imgurl . "';\n";
        $ret.= "		mysettings.CSSFile = '" . $this->cssurl . "';\n";
        $ret.= "		mysettings.PopupsDir = '" . $this->popurl . "';\n";
        $ret.= "    		mysettings.PreviewWidth = '695px';\n";
        $ret.= "    		mysettings.PreviewHeight = '500px';\n";
        $ret.= "    		mysettings.Width = '".$this->getWidth()."';\n";
        $ret.= "    		mysettings.Height = '".$this->getHeight()."';\n";
        $ret.= "    		mysettings.ImagePopupFile = '" . $this->popimgurl . "';\n";
        $ret.= "    		mysettings.ImagePopupWidth = 600;\n";
        $ret.= "    		mysettings.ImagePopupHeight = 245;\n";
        $ret.= "    		mysettings.LinkPopupFile = '" . $this->poplinkurl . "';\n";
        $ret.= "    		mysettings.LinkPopupWidth = 600;\n";
        $ret.= "    		mysettings.LinkPopupHeight = 245;\n";
        $ret.= "    		\n";
        $ret.= "    WYSIWYG.attach('".$this->getName()."' , mysettings); \n";
        $ret.= "    \n";
        $ret.= "    \n";
        $ret.= "</script>\n";		
        return $ret ;		
    }
}
?>