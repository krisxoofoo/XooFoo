<?php
// $Id$
// ------------------------------------------------------------------------ //
// XOOPS - PHP Content Management System                      //
// Copyright (c) 2000 XOOPS.org                           //
// <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------ //
// This program is free software; you can redistribute it and/or modify     //
// it under the terms of the GNU General Public License as published by     //
// the Free Software Foundation; either version 2 of the License, or        //
// (at your option) any later version.                                      //
// //
// You may not change or alter any portion of this comment or credits       //
// of supporting developers from this source code or any supporting         //
// source code which is considered copyrighted (c) material of the          //
// original comment or credit authors.                                      //
// //
// This program is distributed in the hope that it will be useful,          //
// but WITHOUT ANY WARRANTY; without even the implied warranty of           //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
// GNU General Public License for more details.                             //
// //
// You should have received a copy of the GNU General Public License        //
// along with this program; if not, write to the Free Software              //
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------ //
// Author: Kazumi Ono (AKA onokazu)                                          //
// URL: http://www.myweb.ne.jp/, http://www.xoops.org/, http://jp.xoops.org/ //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //
if (!is_object($xoopsUser) || !is_object($xoopsModule) || !$xoopsUser->isAdmin($xoopsModule->mid())) {
    exit('Access Denied');
}

/**
 *
 * Admin/Authors Functions                             
**/

function displayGroups()
{
    $non_delete_groups = array(XOOPS_GROUP_ADMIN, XOOPS_GROUP_USERS, XOOPS_GROUP_ANONYMOUS);

    xoops_cp_header();
    $member_handler = &xoops_gethandler('member');
    $groups = $member_handler->getGroups();
    $count = count($groups);

    $ret = '<h4>' . _AM_LIST_GROUPS . '</h4>';
    $ret .= '<table width="100%" cellpadding="2" cellspacing="1" class="outer" >
		<tr>
			<th style="width: 4%; text-align: center">' . _XO_AD_GROUP_ID . '</th>
			<th style="width: 20%">' . _XO_AD_GROUP_NAME . '</th>
			<th>' . _XO_AD_GROUP_DESCRIPTION . '</th>
			<th style="width: 15%; text-align: center">' . _XO_AD_GROUP_ACTION . '</th>
		</tr><tr>';
    foreach ($groups as $group) {
        $ret .= '<td class="head" style="text-align: center">' . $group->getVar('groupid') . '</td>';
        $ret .= '<td class="even">' . $group->getVar('name') . '</td>';
        $ret .= '<td class="even">' . $group->getVar('description') . '</td>';
        $ret .= '<td class="even"><a href="admin.php?fct=groups&amp;op=modify&amp;g_id=' . $group->getVar('groupid') . '">' . _AM_MODIFY . '</a>';
        if (in_array($group->getVar('groupid'), array(XOOPS_GROUP_ADMIN, XOOPS_GROUP_USERS, XOOPS_GROUP_ANONYMOUS))) {
            $ret .= '</td></tr>';
        } else {
            $ret .= '&nbsp;<a href="admin.php?fct=groups&amp;op=del&amp;g_id=' . $group->getVar('groupid') . '">' . _AM_DELETE . '</a></td></tr>';
        }
    }
    $ret .= '</table><br />';
    echo $ret;

    echo '<h4>' . _AM_EDITADG . '</h4>';
    $name_value = '';
    $desc_value = '';
    $s_cat_value = '';
    $a_mod_value = array();
    $r_mod_value = array();
    $r_block_value = array();
    $op_value = 'add';
    $submit_value = _AM_CREATENEWADG;
    $g_id_value = '';
    $type_value = '';
    $form_title = _AM_CREATENEWADG;
    include XOOPS_ROOT_PATH . '/modules/system/admin/groups/groupform.php';
    xoops_cp_footer();
}

function modifyGroup($g_id)
{
    $userstart = $memstart = 0;
    if (!empty($_POST['userstart'])) {
        $userstart = intval($_POST['userstart']);
    } elseif (!empty($_GET['userstart'])) {
        $userstart = intval($_GET['userstart']);
    }
    if (!empty($_POST['memstart'])) {
        $memstart = intval($_POST['memstart']);
    } elseif (!empty($_GET['memstart'])) {
        $memstart = intval($_GET['memstart']);
    }
    xoops_cp_header();
    echo '<a href="admin.php?fct=groups">' . _AM_GROUPSMAIN . '</a>&nbsp;<span style="font-weight:bold;">&raquo;&raquo;</span>&nbsp;' . _AM_MODIFYADG . '<br /><br />';
    $member_handler = &xoops_gethandler('member');
    $thisgroup = $member_handler->getGroup($g_id);
    $name_value = $thisgroup->getVar("name", "E");
    $desc_value = $thisgroup->getVar("description", "E");
    $moduleperm_handler = &xoops_gethandler('groupperm');
    $a_mod_value = $moduleperm_handler->getItemIds('module_admin', $thisgroup->getVar('groupid'));
    $r_mod_value = $moduleperm_handler->getItemIds('module_read', $thisgroup->getVar('groupid'));

    $gperm_handler = &xoops_gethandler('groupperm');
    $r_block_value = $gperm_handler->getItemIds('block_read', $g_id);
    $op_value = "update";
    $submit_value = _AM_UPDATEADG;
    $g_id_value = $thisgroup->getVar("groupid");
    $type_value = $thisgroup->getVar("group_type", "E");
    $form_title = _AM_MODIFYADG;
    if (XOOPS_GROUP_ADMIN == $g_id) {
        $s_cat_disable = true;
    }

    $sysperm_handler = &xoops_gethandler('groupperm');
    $s_cat_value = $sysperm_handler->getItemIds('system_admin', $g_id);

    include XOOPS_ROOT_PATH . "/modules/system/admin/groups/groupform.php";
    echo "<br /><h4>" . _AM_EDITMEMBER . "</h4>";
    $usercount = $member_handler->getUserCount(new Criteria('level', 0, '>'));
    $member_handler = &xoops_gethandler('member');
    $membercount = $member_handler->getUserCountByGroup($g_id);
    if ($usercount < 200 && $membercount < 200) {
        // do the old way only when counts are small
        $mlist = array();
        $members = $member_handler->getUsersByGroup($g_id, false);
        if (count($members) > 0) {
            $member_criteria = new Criteria('uid', "(" . implode(',', $members) . ")", "IN");
            $member_criteria->setSort('uname');
            $mlist = $member_handler->getUserList($member_criteria);
        }
        $criteria = new Criteria('level', 0, '>');
        $criteria->setSort('uname');
        $userslist = $member_handler->getUserList($criteria);
        $users = array_diff($userslist, $mlist);
        echo '<table class="outer">
        <tr><th align="center">' . _AM_NONMEMBERS . '<br />';

        echo '</th><th></th><th align="center">' . _AM_MEMBERS . '<br />';
        echo '</th></tr>
        <tr><td class="even">
        <form action="admin.php" method="post">
        <select name="uids[]" size="10" multiple="multiple">' . "\n";
        foreach ($users as $u_id => $u_name) {
            echo '<option value="' . $u_id . '">' . $u_name . '</option>' . "\n";
        }
        echo '</select>';
        echo "</td><td align='center' class='odd'>
        <input type='hidden' name='op' value='addUser' />
        " . $GLOBALS['xoopsSecurity']->getTokenHTML() . "
        <input type='hidden' name='fct' value='groups' />
        <input type='hidden' name='groupid' value='" . $thisgroup->getVar("groupid") . "' />
        <input type='submit' name='submit' value='" . _AM_ADDBUTTON . "' />
        </form><br />
        <form action='admin.php' method='post' />
        <input type='hidden' name='op' value='delUser' />
        " . $GLOBALS['xoopsSecurity']->getTokenHTML() . "
        <input type='hidden' name='fct' value='groups' />
        <input type='hidden' name='groupid' value='" . $thisgroup->getVar("groupid") . "' />
        <input type='submit' name='submit' value='" . _AM_DELBUTTON . "' />
        </td>
        <td class='even'>";
        echo "<select name='uids[]' size='10' multiple='multiple'>";
        foreach ($mlist as $m_id => $m_name) {
            echo '<option value="' . $m_id . '">' . $m_name . '</option>' . "\n";
        }
        echo "</select>";
        echo '</td></tr>
        </form>
        </table>';
    } else {
        $members = $member_handler->getUsersByGroup($g_id, false, 200, $memstart);
        $mlist = array();
        if (count($members) > 0) {
            $member_criteria = new Criteria('uid', "(" . implode(',', $members) . ")", "IN");
            $member_criteria->setSort('uname');
            $mlist = $member_handler->getUserList($member_criteria);
        }
        echo '<a href="' . XOOPS_URL . '/modules/system/admin.php?fct=findusers&amp;group=' . $g_id . '">' . _AM_FINDU4GROUP . '</a><br />';
        echo '<form action="admin.php" method="post">
        <table class="outer">
        <tr><th align="center">' . _AM_MEMBERS . '<br />';
        $nav = new XoopsPageNav($membercount, 200, $memstart, "memstart", "fct=groups&amp;op=modify&amp;g_id=" . $g_id);
        echo $nav->renderNav(4);
        echo "</th></tr>
        <tr><td class='even' align='center'>
        <input type='hidden' name='op' value='delUser' />
        <input type='hidden' name='fct' value='groups' />
        <input type='hidden' name='groupid' value='" . $thisgroup->getVar("groupid") . "' />
        <input type='hidden' name='memstart' value='" . $memstart . "' />
        " . $GLOBALS['xoopsSecurity']->getTokenHTML() . "
        <select name='uids[]' size='10' multiple='multiple'>";
        foreach ($mlist as $m_id => $m_name) {
            echo '<option value="' . $m_id . '">' . $m_name . '</option>' . "\n";
        }
        echo "</select><br />
        <input type='submit' name='submit' value='" . _DELETE . "' />
        </td></tr>
        </table>
        </form>";
    }
    // CloseTable();
    xoops_cp_footer();
}

?>