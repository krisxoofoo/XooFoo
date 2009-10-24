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
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

if (! class_exists('XoopsFormElement')) {
    xoops_load('xoopsformelement');
}

/**
 * A textarea
 *
 * @author 		Kazumi Ono <onokazu@xoops.org>
 * @author 		John Neill <catzwolf@xoops.org>
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/ 
 * @package 	kernel
 * @subpackage 	form
 * @access 		public
 */
class XoopsFormTextArea extends XoopsFormElement
{
    /**
     * number of columns
     *
     * @var int
     * @access private
     */
    var $_cols;
    
    /**
     * number of rows
     *
     * @var int
     * @access private
     */
    var $_rows;
    
    /**
     * initial content
     *
     * @var string
     * @access private
     */
    var $_value;
    
    /**
     * Constuctor
     *
     * @param string $caption caption
     * @param string $name name
     * @param string $value initial content
     * @param int $rows number of rows
     * @param int $cols number of columns
     */
    function XoopsFormTextArea($caption, $name, $value = "", $rows = 5, $cols = 50)
    {
        $this->setCaption($caption);
        $this->setName($name);
        $this->_rows = intval($rows);
        $this->_cols = intval($cols);
        $this->setValue($value);
    }
    
    /**
     * get number of rows
     *
     * @return int
     */
    function getRows()
    {
        return $this->_rows;
    }
    
    /**
     * Get number of columns
     *
     * @return int
     */
    function getCols()
    {
        return $this->_cols;
    }
    
    /**
     * Get initial content
     *
     * @param bool $encode To sanitizer the text? Default value should be "true"; however we have to set "false" for backward compat
     * @return string
     */
    function getValue($encode = false)
    {
        return $encode ? htmlspecialchars($this->_value) : $this->_value;
    }
    
    /**
     * Set initial content
     *
     * @param  $value string
     */
    function setValue($value)
    {
        $this->_value = $value;
    }
    
    /**
     * prepare HTML for output
     *
     * @return sting HTML
     */
    function render()
    {
        return "<textarea name='" . $this->getName() . "' id='" . $this->getName() . "'  title='" . $this->getTitle() . "' rows='" . $this->getRows() . "' cols='" . $this->getCols() . "'" . $this->getExtra() . ">" . $this->getValue() . "</textarea>";
    }
}

?>