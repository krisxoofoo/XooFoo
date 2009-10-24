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

xoops_load('XoopsFormCalendar');

/**
 * A text field with calendar popup
 *
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @author          John Neill <catzwolf@xoops.org>
 * @author          Laurent JEN <dugris@afux.org>
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @package         kernel
 * @subpackage      form
 * @access          public
 */

class XoopsFormTextDateSelect extends XoopsFormCalendar
{
    /**
     * XoopsFormTextDateSelect::XoopsFormTextDateSelect()
     *
     * @param mixed $caption
     * @param mixed $name
     * @param integer $size
     * @param mixed $value
     */
    function XoopsFormTextDateSelect($caption, $name, $size = 15, $value = '')
    {
        $this->XoopsFormCalendar($caption, $name, $size, $value);
    }
}

?>