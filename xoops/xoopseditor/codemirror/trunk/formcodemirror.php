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
 *  CodeMirror adapter for XOOPS
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         class
 * @subpackage      editor
 * @since           2.4.x
 * @author          Rota Lucio <lucio.rota@gmail.com>
 * @version         $Id$
 */

xoops_load('XoopsEditor');

class XoopsFormCodemirror extends XoopsEditor
{
    var $rootpath;
    var $config = array();
    var $setting = array();
    var $language = _LANGCODE;
    var $width = '100%';
    var $height = '500px';
    var $syntax = 'html';
    
    /**
     * Constructor
     *
     * @param    array   $configs  Editor Options
     */
    function __construct($configs)
    {
        $this->rootPath = "/class/xoopseditor/codemirror";
        parent::__construct($configs);
        $this->width = isset($this->configs["width"]) ? $this->configs["width"] : $this->width;
        $this->height = isset($this->configs["height"]) ? $this->configs["height"] : $this->height;
        $this->syntax = isset($this->configs["syntax"]) ? $this->configs["syntax"] : $this->syntax;
    }

    function XoopsFormCodemirror($configs)
    {
        $this->__construct($configs);
    }

    function setConfig( $config )
    {
        foreach ($config as $key => $val) {
            $this->config[$key] = $val;
        }
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
     * @return    string
     */
    function getLanguage()
    {
        if ($this->language) {
            return $this->language;
        }
        if (defined("_XOOPS_EDITOR_CODEMIRROR_LANGUAGE")) {
            $this->language = strtolower(constant("_XOOPS_EDITOR_CODEMIRROR_LANGUAGE"));
        } else {
            $this->language = str_replace('_', '-', strtolower(_LANGCODE));
        }

        return $this->language;
    }

    /**
     * Get initial content
     *
     * @param        bool    $encode To sanitizer the text? Default value should be "true"; however we have to set "false" for backward compat
     * @return        string
     */
    function getValue() {
        //return strtr(htmlspecialchars_decode($this->_value) , array("\n" => '<br />', "\r\n" =>'<br />'));
        return $this->_value;
    }

    /**
     * prepare HTML for output
     *
     * @param   bool    decode content?
     * @return  sting HTML
     */
    function render($decode = true)
    {
        static $isCodemirrorJsLoaded = false;
        $ret = "\n";
        if(!$isCodemirrorJsLoaded)
        {
            $ret.= "<script type='text/javascript' src='" . XOOPS_URL . "/class/xoopseditor/codemirror/CodeMirror/js/codemirror.js'></script>\n";
            $ret.= "<script type='text/javascript' src='" . XOOPS_URL . "/class/xoopseditor/codemirror/CodeMirror/js/mirrorframe.js'></script>\n";

            $ret.= "<style type='text/css'>
                        .CodeMirror-line-numbers {
                            width: 2.2em;
                            color: #000;
                            background-color: #eee;
                            text-align: right;
                            font-family: monospace;
                            font-size: 10pt;
                            margin: 0.4em;
                            padding-right: 0.4em;
                            padding-top: 0.4em;
                            }
                        div.CodeMirror-wrapping {
                            }
                        .codemirror-iframe {
                            background: transparent;
                            color: black;
                            }
                        .codemirror-container {
                            border:1px solid black;
                            }
                    </style>
            \n";
        }

        $this->setting['path'] = XOOPS_URL . $this->rootPath . '/CodeMirror/js/';
        $this->setting['height'] = $this->height;
        $this->setting['language'] = $this->language;
        //$this->setting['width'] = $this->width; DO NOT SET width in this way...
        $this->setting['indentUnit'] = 4;
        $this->setting['tabMode'] = 'shift';
        $this->setting['readOnly'] = isset($this->configs["readonly"]) ? $this->configs["readonly"] : FALSE;
        
        define('_CODEMIRROR_CSS_PATH', XOOPS_URL . $this->rootPath . '/CodeMirror/css/');
        switch ($this->syntax) {
            case 'css' :
                $this->setting['parserfile'] = 'parsecss.js';
                $this->setting['stylesheet'] = _CODEMIRROR_CSS_PATH . 'csscolors.css';
                $this->setting['continuousScanning'] = 500;
                $this->setting['lineNumbers'] = TRUE;
                $this->setting['textWrapping'] = FALSE;
                break;
            case 'js' :
                $this->setting['parserfile'] = array ('tokenizejavascript.js', 'parsejavascript.js');
                $this->setting['stylesheet'] = _CODEMIRROR_CSS_PATH . 'jscolors';
                $this->setting['continuousScanning'] = 500;
                $this->setting['autoMatchParens'] = TRUE;
                $this->setting['lineNumbers'] = TRUE;
                $this->setting['textWrapping'] = FALSE;
                $this->setting['autoMatchParens'] = TRUE;
                break;
            case 'html' :
                $this->setting['parserfile'] = 'parsexml.js';
                $this->setting['stylesheet'] = _CODEMIRROR_CSS_PATH . 'xmlcolors.css';
                $this->setting['continuousScanning'] = 500;
                $this->setting['lineNumbers'] = TRUE;
                break;
/*
            case 'sql' :
                $this->setting['parserfile'] = 'parsesql.js';
                $this->setting['stylesheet'] = _CODEMIRROR_CSS_PATH . 'sqlcolors.css';
                $this->setting['continuousScanning'] = 500;
                $this->setting['autoMatchParens'] = TRUE;
                $this->setting['lineNumbers'] = TRUE;
                $this->setting['textWrapping'] = FALSE;
                break;
*/
            case 'sql' : // courtesy of John Benediktsson
                $this->setting['parserfile'] = '../contrib/sql/js/parsesql.js';
                $this->setting['stylesheet'] = _CODEMIRROR_CSS_PATH . '../contrib/sql/css/sqlcolors.css';
                $this->setting['continuousScanning'] = 500;
                $this->setting['autoMatchParens'] = TRUE;
                $this->setting['lineNumbers'] = TRUE;
                $this->setting['textWrapping'] = FALSE;
                break;
/*
            case 'php' :
                $this->setting['parserfile'][] = 'tokenizephp.js';
                $this->setting['parserfile'][] = 'parsephp.js';
                $this->setting['stylesheet'] = _CODEMIRROR_CSS_PATH . 'phpcolors.css';
                $this->setting['continuousScanning'] = 500;
                $this->setting['autoMatchParens'] = TRUE;
                $this->setting['lineNumbers'] = TRUE;
                $this->setting['textWrapping'] = FALSE;
                break;
*/
            case 'php' : // courtesy of Yahoo!
                $this->setting['parserfile'][] = 'parsexml.js';
                $this->setting['parserfile'][] = 'parsecss.js';
                $this->setting['parserfile'][] = 'tokenizejavascript.js';
                $this->setting['parserfile'][] = 'parsejavascript.js';
                $this->setting['parserfile'][] = '../contrib/php/js/tokenizephp.js';
                $this->setting['parserfile'][] = '../contrib/php/js/parsephp.js';
                $this->setting['parserfile'][] = '../contrib/php/js/parsephphtmlmixed.js';
                $this->setting['stylesheet'][] = _CODEMIRROR_CSS_PATH . 'xmlcolors.css';
                $this->setting['stylesheet'][] = _CODEMIRROR_CSS_PATH . 'jscolors.css';
                $this->setting['stylesheet'][] = _CODEMIRROR_CSS_PATH . 'csscolors.css';
                $this->setting['stylesheet'][] = _CODEMIRROR_CSS_PATH . '../contrib/php/css/phpcolors.css';
                $this->setting['continuousScanning'] = 500;
                $this->setting['autoMatchParens'] = TRUE;
                $this->setting['lineNumbers'] = TRUE;
                $this->setting['textWrapping'] = FALSE;
                break;
            default :
                $this->setting['parserfile'] = array('parsexml.js', 'parsecss.js', 'tokenizejavascript.js', 'parsejavascript.js', 'tokenizephp.js', 'parsephp.js', 'parsephphtmlmixed.js');
                $this->setting['stylesheet'] = array(_CODEMIRROR_CSS_PATH . 'xmlcolors.css', _CODEMIRROR_CSS_PATH . 'jscolors.css', _CODEMIRROR_CSS_PATH . 'csscolors.css', _CODEMIRROR_CSS_PATH . 'phpcolors.css');
                $this->setting['continuousScanning'] = 500;
                $this->setting['lineNumbers'] = TRUE;
                $this->setting['textWrapping'] = FALSE;
                break;
            }
        //$ret.= "<input type='button' value='Search' onclick='editor_" . $this->getName() . "[\"search\"].call(editor_" . $this->getName() . ");' />";
        $ret.= "<div class='codemirror-container' width:" . $this->width . ";'>";
        $ret.= "<textarea name='" . $this->getName() . "' id='" . $this->getName() . "' rows='" . $this->getRows() . "' cols='" . $this->getCols() . "' " . $this->getExtra() . " style='width:" . $this->getWidth() . ";height:" . $this->getHeight() . ";'>" . $this->getValue() . "</textarea>\n";
        $ret.= "</div>";
        $ret.= "<script type='text/javascript'>\n";
        
        $ret.= "  var textarea_" . $this->getName() . " = document.getElementById('" . $this->getName() . "');\n";
        $ret.= "  var editor_" . $this->getName() . " = new MirrorFrame(CodeMirror.replace(textarea_" . $this->getName() . "), {\n";
        $ret.= "content: textarea_" . $this->getName() . ".value,";

        foreach ($this->setting as $key => $val) {
            $ret .= $key . ":";
            if ($val === TRUE) {
                $ret.= "true,";
            } elseif ($val === FALSE) {
                $ret .= "false,";
            } elseif (is_array($val)) {
                $ret .= "[";
                foreach ($val as $valkey => $valval) $val[$valkey] = "'" . $valval . "'";
                $ret .= implode(',', $val);
                $ret .= "],";
            } else {
                $ret .= "'{$val}',";
            }
            $ret .= "\n";
        }

        $ret.= "  });\n";
        $ret.= "</script>\n";
        return $ret;
    }
}
?>
