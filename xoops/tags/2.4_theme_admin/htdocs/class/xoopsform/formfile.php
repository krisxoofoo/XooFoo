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

/**
 * A file upload field
 *
 * @author 		Kazumi Ono <onokazu@xoops.org>
 * @author 		John Neill <catzwolf@xoops.org>
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/ 
 * @package 	kernel
 * @subpackage 	form
 * @access 		public
 */
class XoopsFormFile extends XoopsFormElement
{
    /**
     * Maximum size for an uploaded file
     *
     * @var int
     * @access private
     */
    var $_maxFileSize;
    
    /**
     * Constructor
     *
     * @param string $caption Caption
     * @param string $name "name" attribute
     * @param int $maxfilesize Maximum size for an uploaded file
     */
    function XoopsFormFile($caption, $name, $maxfilesize)
    {
        $this->setCaption($caption);
        $this->setName($name);
        $this->_maxFileSize = intval($maxfilesize);
    }
    
    /**
     * Get the maximum filesize
     *
     * @return int
     */
    function getMaxFileSize()
    {
        return $this->_maxFileSize;
    }
    
    /**
     * prepare HTML for output
     *
     * @return string HTML
     */
    function render()
    {
        return '<input type="hidden" name="MAX_FILE_SIZE" value="' . $this->getMaxFileSize() . '" /><input type="file" name="' . $this->getName() . '" id="' . $this->getName() . '"' . '" title="' . $this->getTitle() . '" ' .$this->getExtra() . ' /><input type="hidden" name="xoops_upload_file[]" id="xoops_upload_file[]" value="' . $this->getName() . '" />';
    }
}

?>