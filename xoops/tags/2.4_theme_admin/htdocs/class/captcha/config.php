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
 * CAPTCHA configurations for Image mode
 *
 * Based on DuGris' SecurityImage
 *
 * @copyright       The XOOPS project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         class
 * @subpackage      CAPTCHA
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * This keeping config in files has really got to stop. If we can't actually put these into
 * the actual XOOPS config then we should do this.
 */
return $config = array(
    'disabled' => false,  // Disable CAPTCHA
    'mode' => 'image',  // default mode
    'name' => 'xoopscaptcha',  // captcha name
    'skipmember' => true,  // Skip CAPTCHA check for members
    'maxattempt' => 10,  // Maximum attempts for each session
    'num_chars' => 4,  // Maximum characters
    'rule_text' => _CAPTCHA_RULE_TEXT,
    'maxattempt_text' => _CAPTCHA_MAXATTEMPTS);

?>