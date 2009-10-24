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
 * @subpackage      Xoop Forms class
 * @since           2.3.0
 * @author          Skalpa Keo <skalpa@xoops.org>
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

include_once $GLOBALS['xoops']->path('class/xoopsblock.php');
include_once $GLOBALS['xoops']->path('class/template.php');

/**
 * xos_logos_PageBuilder main class
 *
 * @package xos_logos
 * @subpackage xos_logos_PageBuilder
 * @author Skalpa Keo
 * @since 2.3.0
 */
class xos_logos_PageBuilder
{
    var $theme = false;
    var $blocks = array();

    /**
     * xos_logos_PageBuilder::xoInit()
     *
     * @param array $options
     * @return
     */
    function xoInit($options = array())
    {
        $this->retrieveBlocks();
        if ($this->theme) {
            $this->theme->template->assign_by_ref('xoBlocks', $this->blocks);
        }
        return true;
    }

    /**
     * Called before a specific zone is rendered
     */
    function preRender($zone = '')
    {
    }
    /**
     * Called after a specific zone is rendered
     */
    function postRender($zone = '')
    {
    }

    /**
     * xos_logos_PageBuilder::retrieveBlocks()
     *
     * @return
     */
    function retrieveBlocks()
    {
        global $xoopsConfig;
        $xoopsPreload =& XoopsPreload::getInstance();

        $startMod = ($xoopsConfig['startpage'] == '--') ? 'system' : $xoopsConfig['startpage'];
        if (isset($GLOBALS['xoopsModule']) && is_object($GLOBALS['xoopsModule'])) {
            list ($mid, $dirname) = array(
                $GLOBALS['xoopsModule']->getVar('mid') ,
                $GLOBALS['xoopsModule']->getVar('dirname'));
            $isStart = (substr($_SERVER['PHP_SELF'], - 9) == 'index.php' && $xoopsConfig['startpage'] == $dirname);
        } else {
            list ($mid, $dirname) = array(
                0 ,
                'system');
            $isStart = ! empty($GLOBALS['xoopsOption']['show_cblock']);
        }

        $groups = (isset($GLOBALS['xoopsUser']) && is_object($GLOBALS['xoopsUser'])) ? $GLOBALS['xoopsUser']->getGroups() : array(
            XOOPS_GROUP_ANONYMOUS);

        $oldzones = array(
            XOOPS_SIDEBLOCK_LEFT => 'canvas_left' ,
            XOOPS_SIDEBLOCK_RIGHT => 'canvas_right' ,
            XOOPS_CENTERBLOCK_LEFT => 'page_topleft' ,
            XOOPS_CENTERBLOCK_CENTER => 'page_topcenter' ,
            XOOPS_CENTERBLOCK_RIGHT => 'page_topright' ,
            XOOPS_CENTERBLOCK_BOTTOMLEFT => 'page_bottomleft' ,
            XOOPS_CENTERBLOCK_BOTTOM => 'page_bottomcenter' ,
            XOOPS_CENTERBLOCK_BOTTOMRIGHT => 'page_bottomright');
        foreach ($oldzones as $zone) {
            $this->blocks[$zone] = array();
        }
        if ($this->theme) {
            $template = &$this->theme->template;
            $backup = array(
                $template->caching ,
                $template->cache_lifetime);
        } else {
            $template = new XoopsTpl();
        }
        $xoopsblock = new XoopsBlock();
        $block_arr = array();
        $block_arr = $xoopsblock->getAllByGroupModule($groups, $mid, $isStart, XOOPS_BLOCK_VISIBLE);
        $xoopsPreload->triggerEvent('core.class.theme_blocks.retrieveBlocks', array(&$this, &$template, &$block_arr));
        foreach ($block_arr as $block) {
            $side = $oldzones[$block->getVar('side')];
            if ($var = $this->buildBlock($block, $template)) {
                $this->blocks[$side][$var["id"]] = $var;
            }
        }
        if ($this->theme) {
            list ($template->caching, $template->cache_lifetime) = $backup;
        }
    }

    /**
     * xos_logos_PageBuilder::generateCacheId()
     *
     * @param mixed $cache_id
     * @return
     */
    function generateCacheId($cache_id)
    {
        if ($this->theme) {
            $cache_id = $this->theme->generateCacheId($cache_id);
        }
        return $cache_id;
    }

    /**
     * xos_logos_PageBuilder::buildBlock()
     *
     * @param mixed $xobject
     * @param mixed $template
     * @return
     */
    function buildBlock($xobject, &$template)
    {
        // The lame type workaround will change
        // bid is added temporarily as workaround for specific block manipulation
        $block = array(
            'id' => $xobject->getVar('bid') ,
            'module' => $xobject->getVar('dirname') ,
            'title' => $xobject->getVar('title') ,
            // 'name'        => strtolower( preg_replace( '/[^0-9a-zA-Z_]/', '', str_replace( ' ', '_', $xobject->getVar( 'name' ) ) ) ),
            'weight' => $xobject->getVar('weight') ,
            'lastmod' => $xobject->getVar('last_modified'));

        $bcachetime = intval($xobject->getVar('bcachetime'));
        if (empty($bcachetime)) {
            $template->caching = 0;
        } else {
            $template->caching = 2;
            $template->cache_lifetime = $bcachetime;
        }
        $template->setCompileId($xobject->getVar('dirname', 'n'));
        $tplName = ($tplName = $xobject->getVar('template')) ? "db:$tplName" : 'db:system_block_dummy.html';
        $cacheid = $this->generateCacheId('blk_' . $xobject->getVar('bid'));
        /**
         * , $xobject->getVar( 'show_func', 'n' )
         */

        $xoopsLogger =& XoopsLogger::getInstance();
        if (!$bcachetime || !$template->is_cached($tplName, $cacheid)) {
            $xoopsLogger->addBlock($xobject->getVar('name'));
            if ($bresult = $xobject->buildBlock()) {
                $template->assign('block', $bresult);
                $block['content'] = $template->fetch($tplName, $cacheid);
            } else {
                $block = false;
            }
        } else {
            $xoopsLogger->addBlock($xobject->getVar('name'), true, $bcachetime);
            $block['content'] = $template->fetch($tplName, $cacheid);
        }
        $template->setCompileId();
        return $block;
    }
}

?>