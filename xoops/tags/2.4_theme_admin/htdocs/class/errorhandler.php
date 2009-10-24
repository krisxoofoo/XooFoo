<?php
/**
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Xoops Editor usage guide
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      core
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

load_language('errors');

include_once $GLOBALS['xoops']->path('class/logger.php');

/**
 * Xoops ErrorHandler
 * 
 * Backward compatibility code, do not use this class directly
 * 
 * @package kernel
 * @subpackage core
 * @author Kazumi Ono <onokazu@xoops.org>
 * @author John Neill <catzwolf@xoops.org>
 * @copyright copyright (c) 2000-2003 XOOPS.org
 */
class XoopsErrorHandler extends XoopsLogger
{
    /**
     * Activate the error handler
     */
    function activate($showErrors = false)
    {
        $this->activated = $showErrors;
    }
    
    /**
     * Render the list of errors
     */
    function renderErrors()
    {
        return $this->dump('errors');
    }
}

?>