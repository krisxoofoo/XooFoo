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
 *  Xoops Kernel Class
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Xoops Blocks
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * A block
 *
 * @author Kazumi Ono <onokazu@xoops.org>
 * @copyright copyright (c) 2000 XOOPS.org
 *
 * @package kernel
 */
class XoopsBlock extends XoopsObject
{
    /**
     * constructor
     *
     * @param mixed $id
     **/
    function XoopsBlock($id = null)
    {
        $this->initVar('bid', XOBJ_DTYPE_INT, null, false);
        $this->initVar('mid', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('func_num', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('options', XOBJ_DTYPE_TXTBOX, null, false, 255);
        $this->initVar('name', XOBJ_DTYPE_TXTBOX, null, true, 150);
        //$this->initVar('position', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('title', XOBJ_DTYPE_TXTBOX, null, false, 150);
        $this->initVar('content', XOBJ_DTYPE_TXTAREA, null, false);
        $this->initVar('side', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('weight', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('visible', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('block_type', XOBJ_DTYPE_OTHER, null, false);
        $this->initVar('c_type', XOBJ_DTYPE_OTHER, null, false);
        $this->initVar('isactive', XOBJ_DTYPE_INT, null, false);
        $this->initVar('dirname', XOBJ_DTYPE_TXTBOX, null, false, 50);
        $this->initVar('func_file', XOBJ_DTYPE_TXTBOX, null, false, 50);
        $this->initVar('show_func', XOBJ_DTYPE_TXTBOX, null, false, 50);
        $this->initVar('edit_func', XOBJ_DTYPE_TXTBOX, null, false, 50);
        $this->initVar('template', XOBJ_DTYPE_OTHER, null, false);
        $this->initVar('bcachetime', XOBJ_DTYPE_INT, 0, false);
        $this->initVar('last_modified', XOBJ_DTYPE_INT, 0, false);

        // for backward compatibility
        if (isset($id)) {
            if (is_array($id)) {
                $this->assignVars($id);
            } else {
                $blkhandler =& xoops_gethandler('block');
                $obj =& $blkhandler->get($id);
                foreach(array_keys($obj->getVars()) as $i) {
                    $this->assignVar($obj->getVar($i, 'n'));
                }
            }
        }
    }


    /**
     * Returns Class Base Variable bid
     */
    function id($format = 'N')
    {
        return $this->getVar('bid', $format);
    }

    /**
     * Returns Class Base Variable bid
     */
    function bid($format = '')
    {
        return $this->getVar('bid', $format);
    }

    /**
     * Returns Class Base Variable mid
     */
    function mid($format = '')
    {
        return $this->getVar('mid', $format);
    }

    /**
     * Returns Class Base Variable func_num
     */
    function func_num($format = '')
    {
        return $this->getVar('func_num', $format);
    }

    /**
     * Returns Class Base Variable avatar_id
     */
    function options($format = '')
    {
        return $this->getVar('options', $format);
    }

    /**
     * Returns Class Base Variable name
     */
    function name($format = '')
    {
        return $this->getVar('name', $format);
    }

    /**
     * Returns Class Base Variable title
     */
    function title($format = ''){
        return $this->getVar('title', $format);
    }

    /**
     * Returns Class Base Variable content
     */
    function content($format = '')
    {
        return $this->getVar('content', $format);
    }

    /**
     * Returns Class Base Variable side
     */
    function side($format = '')
    {
        return $this->getVar('side', $format);
    }

    /**
     * Returns Class Base Variable weight
     */
    function weight($format = '')
    {
        return $this->getVar('weight', $format);
    }

    /**
     * Returns Class Base Variable visible
     */
    function visible($format = '')
    {
        return $this->getVar('visible', $format);
    }

    /**
     * Returns Class Base Variable block_type
     */
    function block_type($format = '')
    {
        return $this->getVar('block_type', $format);
    }

    /**
     * Returns Class Base Variable c_type
     */
    function c_type($format = '')
    {
        return $this->getVar('c_type', $format);
    }

    /**
     * Returns Class Base Variable isactive
     */
    function isactive($format = '')
    {
        return $this->getVar('isactive', $format);
    }

    /**
     * Returns Class Base Variable dirname
     */
    function dirname($format = '')
    {
        return $this->getVar('dirname', $format);
    }

    /**
     * Returns Class Base Variable func_file
     */
    function func_file($format = '')
    {
        return $this->getVar('func_file', $format);
    }

    /**
     * Returns Class Base Variable show_func
     */
    function show_func($format= '')
    {
        return $this->getVar('show_func', $format);
    }

    /**
     * Returns Class Base Variable edit_func
     */
    function edit_func($format = '')
    {
        return $this->getVar('edit_func', $format);
    }

    /**
     * Returns Class Base Variable template
     */
    function template($format = '')
    {
        return $this->getVar('template', $format);
    }

    /**
     * Returns Class Base Variable avatar_id
     */
    function bcachetime($format = '')
    {
        return $this->getVar('bcachetime', $format);
    }

    /**
     * Returns Class Base Variable last_modified
     */
    function last_modified($format = '')
    {
        return $this->getVar('last_modified', $format);
    }

    /**
     * return the content of the block for output
     *
     * @param string $format
     * @param string $c_type type of content<br>
     * Legal value for the type of content<br>
     * <ul><li>H : custom HTML block
     * <li>P : custom PHP block
     * <li>S : use text sanitizater (smilies enabled)
     * <li>T : use text sanitizater (smilies disabled)</ul>
     * @return string content for output
     */
    function getContent($format = 'S', $c_type = 'T')
    {
        switch ($format) {
            case 'S':
                if ($c_type == 'H') {
                    return str_replace('{X_SITEURL}', XOOPS_URL . '/', $this->getVar('content', 'N'));
                } else if ($c_type == 'P') {
                    ob_start();
                    echo eval($this->getVar('content', 'N'));
                    $content = ob_get_contents();
                    ob_end_clean();
                    return str_replace('{X_SITEURL}', XOOPS_URL . '/', $content);
                } else if ($c_type == 'S') {
                    $myts =& MyTextSanitizer::getInstance();
                    $content = str_replace('{X_SITEURL}', XOOPS_URL . '/', $this->getVar('content', 'N'));
                    return $myts->displayTarea($content, 0, 1);
                } else {
                    $myts =& MyTextSanitizer::getInstance();
                    $content = str_replace('{X_SITEURL}', XOOPS_URL . '/', $this->getVar('content', 'N'));
                    return $myts->displayTarea($content, 0, 0);
                }
                break;
            case 'E':
                return $this->getVar('content', 'E');
                break;
            default:
                return $this->getVar('content', 'N');
                break;
        }
    }

    /**
     * (HTML-) form for setting the options of the block
     *
     * @return string HTML for the form, FALSE if not defined for this block
     */
    function getOptions()
    {
        if (!$this->isCustom()) {
            $edit_func = $this->getVar('edit_func');
            if (!$edit_func) {
                return false;
            }
            if (file_exists(XOOPS_ROOT_PATH . '/modules/' . $this->getVar('dirname') . '/blocks/' . $this->getVar('func_file'))) {
                if (file_exists(XOOPS_ROOT_PATH . '/modules/' . $this->getVar('dirname') . '/language/' . $GLOBALS['xoopsConfig']['language'] . '/blocks.php')) {
                    include_once XOOPS_ROOT_PATH . '/modules/' . $this->getVar('dirname') . '/language/' . $GLOBALS['xoopsConfig']['language'] . '/blocks.php';
                } else if (file_exists(XOOPS_ROOT_PATH . '/modules/' . $this->getVar('dirname') . '/language/english/blocks.php')) {
                    include_once XOOPS_ROOT_PATH . '/modules/' . $this->getVar('dirname') . '/language/english/blocks.php';
                }
                include_once XOOPS_ROOT_PATH . '/modules/' . $this->getVar('dirname') . '/blocks/' . $this->getVar('func_file');
                $options = explode('|', $this->getVar('options'));
                $edit_form = $edit_func($options);
                if (!$edit_form) {
                    return false;
                }
                return $edit_form;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function isCustom()
    {
        return in_array($this->getVar("block_type"), array(
            'C' ,
            'E'));
    }
}

/**
 * XOOPS block handler class. (Singelton)
 *
 * This class is responsible for providing data access mechanisms to the data source
 * of XOOPS block class objects.
 *
 * @author  Kazumi Ono <onokazu@xoops.org>
 * @copyright copyright (c) 2000 XOOPS.org
 * @package kernel
 * @subpackage block
 */
class XoopsBlockHandler extends XoopsObjectHandler
{
    /**
     * create a new block
     *
     * @see XoopsBlock
     * @param bool $isNew is the new block new??
     * @return object XoopsBlock reference to the new block
     **/
    function &create($isNew = true)
    {
        $block = new XoopsBlock();
        if ($isNew) {
            $block->setNew();
        }
        return $block;
    }

    /**
     * retrieve a specific {@link XoopsBlock}
     *
     * @see XoopsBlock
     * @param int $id bid of the block to retrieve
     * @return object XoopsBlock reference to the block
     **/
    function &get($id)
    {
        $block = false;
        $id = intval($id);
        if ($id > 0) {
            $sql = 'SELECT * FROM ' . $this->db->prefix('newblocks') . ' WHERE bid=' . $id;
            if ($result = $this->db->query($sql)) {
                $numrows = $this->db->getRowsNum($result);
                if ($numrows == 1) {
                    $block = new XoopsBlock();
                    $block->assignVars($this->db->fetchArray($result));
                }
            }
        }
        return $block;
    }

    /**
     * write a new block into the database
     *
     * @param object XoopsBlock $block reference to the block to insert
     * @return bool TRUE if succesful
     **/
    function insert(&$block)
    {
        /**
         * @TODO: Change to if (!(class_exists($this->className) && $obj instanceof $this->className)) when going fully PHP5
         */
        if (!is_a($block, 'xoopsblock')) {
            return false;
        }
        if (!$block->isDirty()) {
            return true;
        }
        if (!$block->cleanVars()) {
            return false;
        }
        foreach ($block->cleanVars as $k => $v) {
            ${$k} = $v;
        }
        if ($block->isNew()) {
            $bid = $this->db->genId('newblocks_bid_seq');
            $sql = sprintf("INSERT INTO %s (bid, mid, func_num, options, name, title, content, side, weight, visible, block_type, c_type, isactive, dirname, func_file, show_func, edit_func, template, bcachetime, last_modified) VALUES (%u, %u, %u, '%s', '%s', '%s', '%s', %u, %u, %u, '%s', '%s', %u, '%s', '%s', '%s', '%s', '%s', %u, %u)", $this->db->prefix('newblocks'), $bid, $mid, $func_num, $options, $name, $title, $content, $side, $weight, $visible, $block_type, $c_type, 1, $dirname, $func_file, $show_func, $edit_func, $template, $bcachetime, time());
        } else {
            $sql = sprintf("UPDATE %s SET func_num = %u, options = '%s', name = '%s', title = '%s', content = '%s', side = %u, weight = %u, visible = %u, c_type = '%s', isactive = %u, func_file = '%s', show_func = '%s', edit_func = '%s', template = '%s', bcachetime = %u, last_modified = %u WHERE bid = %u", $this->db->prefix('newblocks'), $func_num, $options, $name, $title, $content, $side, $weight, $visible, $c_type, $isactive, $func_file, $show_func, $edit_func, $template, $bcachetime, time(), $bid);
        }
        if (!$result = $this->db->query($sql)) {
            return false;
        }
        if (empty($bid)) {
            $bid = $this->db->getInsertId();
        }
        $block->assignVar('bid', $bid);
        return true;
    }

    /**
     * delete a block from the database
     *
     * @param object XoopsBlock $block reference to the block to delete
     * @return bool TRUE if succesful
     **/
    function delete(&$block)
    {
        /**
         * @TODO: Change to if (!(class_exists($this->className) && $obj instanceof $this->className)) when going fully PHP5
         */
        if (!is_a($block, 'xoopsblock')) {
            return false;
        }
        $id = $block->getVar('bid');
        $sql = sprintf("DELETE FROM %s WHERE bid = %u", $this->db->prefix('newblocks'), $id);
        if (!$result = $this->db->query($sql)) {
            return false;
        }
        $sql = sprintf("DELETE FROM %s WHERE block_id = %u", $this->db->prefix('block_module_link'), $id);
        $this->db->query($sql);
        return true;
    }

    /**
     * retrieve array of {@link XoopsBlock}s meeting certain conditions
     * @param object $criteria {@link CriteriaElement} with conditions for the blocks
     * @param bool $id_as_key should the blocks' bid be the key for the returned array?
     * @return array {@link XoopsBlock}s matching the conditions
     **/
    function getObjects($criteria = null, $id_as_key = false)
    {
        $ret = array();
        $limit = $start = 0;
        $sql = 'SELECT DISTINCT(b.bid), b.* FROM ' . $this->db->prefix('newblocks') . ' b LEFT JOIN ' . $this->db->prefix('block_module_link') . ' l ON b.bid=l.block_id';
        if (isset($criteria) && is_subclass_of($criteria, 'criteriaelement')) {
            $sql .= ' ' . $criteria->renderWhere();
            $limit = $criteria->getLimit();
            $start = $criteria->getStart();
        }
        $result = $this->db->query($sql, $limit, $start);
        if (!$result) {
            return $ret;
        }
        while ($myrow = $this->db->fetchArray($result)) {
            $block = new XoopsBlock();
            $block->assignVars($myrow);
            if (!$id_as_key) {
                $ret[] =& $block;
            } else {
                $ret[$myrow['bid']] = & $block;
            }
            unset($block);
        }
        return $ret;
    }

    /**
     * get a list of blocks matchich certain conditions
     *
     * @param string $criteria conditions to match
     * @return array array of blocks matching the conditions
     **/
    function getList($criteria = null)
    {
        $blocks = $this->getObjects($criteria, true);
        $ret = array();
        foreach(array_keys($blocks) as $i) {
            $name = (!$blocks[$i]->isCustom()) ? $blocks[$i]->getVar('name') : $blocks[$i]->getVar('title');
            $ret[$i] = $name;
        }
        return $ret;
    }

     ##################### Deprecated Methods ######################

    /**#@+
     * @deprecated
     */
    function getByModule($moduleid, $asobject = true, $id_as_key = false)
    {
        trigger_error(__CLASS__ . "::" . __FUNCTION__ . ' is deprecated', E_USER_WARNING);
        return false;
    }

    function getAllByGroupModule($groupid, $module_id = 0, $toponlyblock = false, $visible = null, $orderby = 'i.weight,i.instanceid', $isactive = 1)
    {
        trigger_error(__CLASS__ . "::" . __FUNCTION__ . ' is deprecated', E_USER_WARNING);
        return false;
    }

    function getAdminBlocks($groupid, $orderby='i.weight,i.instanceid')
    {
        trigger_error(__CLASS__ . "::" . __FUNCTION__ . ' is deprecated', E_USER_WARNING);
        return false;
    }

    function assignBlocks()
    {
        trigger_error(__CLASS__ . "::" . __FUNCTION__ . ' is deprecated', E_USER_WARNING);
        return false;
    }
    /**#@-*/
}
?>