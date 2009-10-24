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
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

if (! class_exists('XoopsFormRadio')) {
    xoops_load('xoopsformradio');
}

/**
 * Yes/No radio buttons.
 *
 * A pair of radio buttons labelled _YES and _NO with values 1 and 0
 *
 * @author 			Kazumi Ono <onokazu@xoops.org>
 * @author 			Taiwen Jiang <phppp@users.sourceforge.net>
 * @author 			John Neill <catzwolf@xoops.org>
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/ 
 * @package 		kernel
 * @subpackage 		form
 */
class XoopsFormRadioYN extends XoopsFormRadio
{
    /**
     * Constructor
     *
     * @param string $caption
     * @param string $name
     * @param string $value Pre-selected value, can be "0" (No) or "1" (Yes)
     * @param string $yes String for "Yes"
     * @param string $no String for "No"
     */
    function XoopsFormRadioYN($caption, $name, $value = null, $yes = _YES, $no = _NO)
    {
        $this->XoopsFormRadio($caption, $name, $value);
        $this->addOption(1, $yes);
        $this->addOption(0, $no);
    }
}

?>