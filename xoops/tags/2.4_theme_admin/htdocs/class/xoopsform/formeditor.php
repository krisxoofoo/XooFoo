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
 *  Xoops Form Class Elements
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/ 
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      form
 * @since           2.0.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

if (! class_exists('XoopsFormTextArea')) {
    xoops_load('xoopsformtextarea');
}

/**
 * Xoops Form Editor
 *
 * @author 		Taiwen Jiang <phppp@users.sourceforge.net>
 * @author 		John Neill <catzwolf@xoops.org>
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/ 
 * @package 	kernel
 * @subpackage 	form
 * @access 		public
 */
class XoopsFormEditor extends XoopsFormTextArea
{
    var $editor;
    
    /**
     * Constructor
     *
     * @param string $caption Caption
     * @param string $name Name for textarea field
     * @param string $value Initial text
     * @param array $configs configures: editor - editor identifier; name - textarea field name; width, height - dimensions for textarea; value - text content
     * @param bool $noHtml use non-WYSIWYG eitor onfailure
     * @param string $OnFailure editor to be used if current one failed
     */
    function XoopsFormEditor($caption, $name, $configs = null, $nohtml = false, $OnFailure = '')
    {
        // Backward compatibility: $name -> editor name; $configs['name'] -> textarea field name
        if (! isset($configs['editor'])) {
            $configs['editor'] = $name;
            $name = $configs['name'];
            // New: $name -> textarea field name; $configs['editor'] -> editor name; $configs['name'] -> textarea field name
        } else {
            $configs['name'] = $name;
        }
        $this->XoopsFormTextArea($caption, $name);
        xoops_load('XoopsEditorHandler');
        $editor_handler = XoopsEditorHandler::getInstance();
        $this->editor = $editor_handler->get($configs['editor'], $configs, $nohtml, $OnFailure);
    }
    
    /**
     * renderValidationJS
     * TEMPORARY SOLUTION to 'override' original renderValidationJS method
     * with custom XoopsEditor's renderValidationJS method
     */
    function renderValidationJS()
    {
        if (is_object($this->editor) && $this->isRequired()) {
            if (method_exists($this->editor, 'renderValidationJS')) {
                $this->editor->setName($this->getName());
                $this->editor->setCaption($this->getCaption());
                $this->editor->_required = $this->isRequired();
                $ret = $this->editor->renderValidationJS();
                return $ret;
            } else {
                parent::renderValidationJS();
            }
        }
        return false;
    }
    
    /**
     * XoopsFormEditor::render()
     *
     * @return
     */
    function render()
    {
        if (is_object($this->editor)) {
            return $this->editor->render();
        }
    }
}

?>
