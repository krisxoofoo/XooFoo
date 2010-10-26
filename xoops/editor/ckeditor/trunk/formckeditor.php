<?php 
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 *  CKeditor adapter for XOOPS
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         class
 * @subpackage      editor
 * @since           2.3.0
 * @author          Rota Lucio <lucio.rota@gmail.com>
 */

/**
 * Check if browser is compatible with CKeditor.
 * Return true if is compatible.
 *
 * @return boolean
 */
function CKeditor_IsCompatibleBrowser()
{
	if ( isset( $_SERVER ) ) {
		$sAgent = $_SERVER['HTTP_USER_AGENT'] ;
	}
	else {
		global $HTTP_SERVER_VARS ;
		if ( isset( $HTTP_SERVER_VARS ) ) {
			$sAgent = $HTTP_SERVER_VARS['HTTP_USER_AGENT'] ;
		}
		else {
			global $HTTP_USER_AGENT ;
			$sAgent = $HTTP_USER_AGENT ;
		}
	}

	if ( strpos($sAgent, 'MSIE') !== false && strpos($sAgent, 'mac') === false && strpos($sAgent, 'Opera') === false )
	{
		$iVersion = (float)substr($sAgent, strpos($sAgent, 'MSIE') + 5, 3) ;
		return ($iVersion >= 6) ;
	}
	else if ( strpos($sAgent, 'Gecko/') !== false )
	{
		$iVersion = (int)substr($sAgent, strpos($sAgent, 'Gecko/') + 6, 8) ;
		return ($iVersion >= 20030210) ;
	}
	else if ( strpos($sAgent, 'Opera/') !== false )
	{
		$fVersion = (float)substr($sAgent, strpos($sAgent, 'Opera/') + 6, 4) ;
		return ($fVersion >= 9.5) ;
	}
	else if ( preg_match( "|AppleWebKit/(\d+)|i", $sAgent, $matches ) )
	{
		$iVersion = $matches[1] ;
		return ( $matches[1] >= 522 ) ;
	}
	else
		return false ;
}

xoops_load('XoopsEditor');

class XoopsFormCkeditor extends XoopsEditor
{
    var $language;

    /**
     * Constructor
     *
     * @param    array   $configs  Editor Options
     */
    function __construct($configs)
    {
        $this->rootPath = "/class/xoopseditor/ckeditor";
        parent::__construct($configs);
        $this->width = isset($this->configs["width"]) ? $this->configs["width"] : $this->width;
        $this->height = isset($this->configs["height"]) ? $this->configs["height"] : $this->height;
        $this->upload = isset($this->configs["upload"]) ? $this->configs["upload"] : $this->upload;
        $this->toolbarset = isset($this->configs["toolbarset"]) ? $this->configs["toolbarset"] : $this->toolbarset;
    }
    
    function XoopsFormCkeditor($configs)
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
        if (defined("_XOOPS_EDITOR_CKEDITOR_LANGUAGE")) {
            $this->language = strtolower(constant("_XOOPS_EDITOR_CKEDITOR_LANGUAGE"));
        } else {
            $this->language = str_replace('_', '-', strtolower(_LANGCODE));
        }
        
        return $this->language;
    }

    /**
     * get language direction
     *
     * @return    string
     */
    function getLangdirection()
    {
        if ($this->langdirection) {
            return $this->langdirection;
        }
        if (defined("_XOOPS_EDITOR_CKEDITOR_LANGDIRECTION")) {
            $this->langdirection = strtolower(constant("_XOOPS_EDITOR_CKEDITOR_LANGDIRECTION"));
        } else {
            $this->langdirection = "ltr";
        }
        
        return $this->langdirection;
    }

    /**
     * prepare HTML for output
     *
     * @param   bool    decode content?
     * @return  sting HTML
     */
    function render($decode = true)
    {
        $config = array();
        $config[] = 'customConfig              : "' . XOOPS_URL . $this->rootPath . '/ckconfig-xoops.js"';
        $config[] = 'language                  : "' . $this->getLanguage() . '"';
//        $config[] = 'contentsLangDirection     : "' . $this->getLangdirection() . '"';
//        $config[] = 'contentsCss               : "' . XOOPS_URL . $this->rootPath . '/css/mysitestyles.css"';

        $config[] = 'filebrowserBrowseUrl      : "' . XOOPS_URL . $this->rootPath . '/ckfinder/ckfinder.html"';
        $config[] = 'filebrowserImageBrowseUrl : "' . XOOPS_URL . $this->rootPath . '/ckfinder/ckfinder.html?Type=Images"';
        $config[] = 'filebrowserFlashBrowseUrl : "' . XOOPS_URL . $this->rootPath . '/ckfinder/ckfinder.html?Type=Flash"';
        $config[] = 'filebrowserUploadUrl      : "' . XOOPS_URL . $this->rootPath . '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files"';
        $config[] = 'filebrowserImageUploadUrl : "' . XOOPS_URL . $this->rootPath . '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images"';
        $config[] = 'filebrowserFlashUploadUrl : "' . XOOPS_URL . $this->rootPath . '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash"';

        $ret = '';
        $ret = '<script type="text/javascript" src="'.XOOPS_URL . $this->rootPath . '/ckeditor/ckeditor.js"></script>'; 
        $ret.= '<span id="' . $this->getName() . '_span"></span>';
        $ret.= '<textarea id="' . $this->getName() . '" name="' . $this->getName() . '" cols="' . $this->width . '" rows="' . $this->height . '">' . $this->getValue() . '</textarea>';
        $ret.= '<script type="text/javascript">';
//        $ret.= 'var BACKGROUND_COLOR = "#E7E7E7";'; // default
//        $ret.= 'var element = document.getElementById("' . $this->getName() . '_span").parentNode;';
//        $ret.= 'if (element.currentStyle)';
//        $ret.= '    BACKGROUND_COLOR = element.currentStyle["backgroundColor"];'; // IE
//        $ret.= 'else if (window.getComputedStyle)';
//        $ret.= '    BACKGROUND_COLOR = document.defaultView.getComputedStyle(element,null).backgroundColor;'; // Firefox
        $ret.= 'CKEDITOR.replace( "' . $this->getName() . '",{';
//        $ret.= 'uiColor : BACKGROUND_COLOR';
        $ret.= 'uiColor : "transparent"';
        $ret.= ',';
        $ret.= implode(',', $config );
        $ret.= '});';
        $ret.= '</script>';
        return $ret;
    }

    /**
     * Check if compatible
     *
     * @return
     */
    function isActive()
    {
    return CKeditor_IsCompatibleBrowser();
    }
}
?>
