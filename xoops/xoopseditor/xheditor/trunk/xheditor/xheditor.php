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

class XHeditor
{
    /**
     * Name of the XHeditor instance.
     *
     * @access protected
     * @var string
     */
    public $InstanceName ;
    /**
     * Path to XHeditor relative to the document root.
     *
     * @var string
     */
    public $BasePath ;
    /**
     * Width of the XHeditor.
     * Examples: 100%, 600
     *
     * @var mixed
     */
    public $Width ;
    /**
     * Height of the XHeditor.
     * Examples: 400, 50%
     *
     * @var mixed
     */
    public $Height ;
    /**
     * Name of the toolbar to load.
     *
     * @var string
     */
    public $ToolbarSet ;
    /**
     * Initial value.
     *
     * @var string
     */
    public $Value ;
    /**
     * Name of the js to load.
     *
     * @var string
     */
    public $js ;
    /**
     * Name of the language to load.
     *
     * @var string
     */
    public $language ;
    /**
     * This is where additional configuration can be passed.
     * Example:
     * $oXHeditor->Config['EnterMode'] = 'br';
     *
     * @var array
     */
    public $Config ;
    /**
     * Main Constructor.
     * Refer to the _samples/php directory for examples.
     *
     * @param string $instanceName
     */
    public function __construct( $instanceName )
    {
    	$this->InstanceName	= $instanceName ;
    	$this->BasePath	= '/xheditor/' ;
    	$this->Width		= '100%' ;
    	$this->Height		= '200' ;
    	$this->ToolbarSet	= 'default' ;
    	$this->Value		= '' ;
	$this->js			= '' ; 
	$this->langF 		= 'xheditor-en.min.js';
    	$this->Config		= array() ;
    }
    /**
     * Display XHeditor.
     *
     */
    public function Create()
    {
        echo $this->CreateHtml() ;
    }
    /**
     * Return the HTML code required to run XHeditor.
     *
     * @return string
     */
    public function CreateHtml()
    {
      	$HtmlValue = $this->Value;
      	$Html = '' ;
        $Html .= $this->getJQuery();
        
      	if ( strpos( $this->Width, '%' ) === false )
      		$WidthCSS = $this->Width . 'px' ;
      	else
      		$WidthCSS = $this->Width ;
      
      	if ( strpos( $this->Height, '%' ) === false )
      		$HeightCSS = $this->Height . 'px' ;
      	else
      		$HeightCSS = $this->Height ;
	
        $Html .= $this->getXHeditorLanguage($this->langF);
      	$Html .= "<textarea name=\"{$this->InstanceName}\" rows=\"12\" cols=\"80\" style=\"width: {$WidthCSS}; height: {$HeightCSS}\" class=\"xheditor {skin:'{$this->ToolbarSet}'}\">{$HtmlValue}</textarea>" ;
      	return $Html ;
    }
    /**
     * Return the JQuery code required to run XHeditor.
     *
     * @return string
     */
    public function getJQuery($js = '')
    { 
	static $isJsLoaded = false;
		$JQuery = "\n";
		if(!$isJsLoaded)
		{
			$GLOBALS["xoTheme"]->addScript("browse.php?Frameworks/jquery/jquery.js");
			$isJsLoaded = true;
		}
	return $JQuery;
    }
    public function getXHeditorLanguage($lang)
    { 
        $EditorLang = "";
        $EditorLang .= "<script type='text/javascript' src='{$this->BasePath}js/{$lang}'></script>";
        return $EditorLang;
    }
}
?>
