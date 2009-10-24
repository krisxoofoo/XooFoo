<?php
/**
 * Extended User Profile
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         profile
 * @since           2.3.0
 * @author          Jan Pedersen
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 */

defined('XOOPS_ROOT_PATH') or die("XOOPS root path not defined");

class ProfileVisibility extends XoopsObject
{
    function __construct()
    {
        $this->initVar('field_id', XOBJ_DTYPE_INT);
        $this->initVar('user_group', XOBJ_DTYPE_INT);
        $this->initVar('profile_group', XOBJ_DTYPE_INT);
    }

    function ProfileVisibility()
    {
        $this->__construct();
    }
}

class ProfileVisibilityHandler extends XoopsPersistableObjectHandler
{
    function __construct($db)
    {
        parent::__construct($db, 'profile_visibility', 'profilevisibility', 'field_id');
    }

    /**
     * get all objects matching a condition
     *
     * @param   object      $criteria {@link CriteriaElement} to match
     * @param   array       $fields     variables to fetch
     * @param   bool        $asObject     flag indicating as object, otherwise as array
     * @param   bool        $id_as_key use the ID as key for the array
     * @return  array of objects/array {@link XoopsObject}
     */
    function &getAll($criteria = null)
    {
        $limit = null;
        $start = null;
        $sql = "SELECT * FROM `{$this->table}`";
        if (isset($criteria) && is_subclass_of($criteria, "criteriaelement")) {
            $sql .= " " . $criteria->renderWhere();
            if ($groupby = $criteria->getGroupby()) {
                $sql .= " " . $groupby;
            }
            if ($sort = $criteria->getSort()) {
                $sql .= " ORDER BY {$sort} " . $criteria->getOrder();
                $orderSet = true;
            }
            $limit = $criteria->getLimit();
            $start = $criteria->getStart();
        }
        if (empty($orderSet)) {
            $sql .= " ORDER BY `{$this->keyName}` DESC";
        }
        $result = $this->db->query($sql, $limit, $start);
        $ret = array();
        while ($row = $this->db->fetchArray($result)) {
            $ret[$row['field_id']][] = $row;
        }
        return $ret;
    }

    /**
     * Get fields visible to the $user_groups on a $profile_groups profile
     *
     * @param array $profile_groups groups of the user to be accessed
     * @param array $user_groups    groups of the visitor, default as $GLOBALS['xoopsUser']
     *
     * @return array
     */
    function getVisibleFields($profile_groups, $user_groups = null)
    {
        $profile_groups[] = $user_groups[] = 0;
        $sql = "SELECT field_id FROM {$this->table} WHERE profile_group IN (" . implode(',', $profile_groups) . ")";
        $sql .= " AND user_group IN (" . implode(',', $user_groups) . ")";
        $field_ids = array();
        if ($result = $this->db->query($sql)) {
            while (list($field_id) = $this->db->fetchRow($result)) {
                $field_ids[] = $field_id;
            }
        }
        return $field_ids;
    }
}
?>