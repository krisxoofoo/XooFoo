<?php
// $Id$
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// Author: Kazumi Ono (AKA onokazu)                                          //
// URL: http://www.myweb.ne.jp/, http://www.xoops.org/, http://jp.xoops.org/ //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //

if ( !is_object($xoopsUser) || !is_object($xoopsModule) || !$xoopsUser->isAdmin($xoopsModule->mid()) ) {
    exit("Access Denied");
} else {
    include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";
    $op = "form";
	$limit = 100;
	
    if (!empty($_POST['op']) && $_POST['op'] == "send") {
        $op =  $_POST['op'];
    }

    if ( !$GLOBALS['xoopsSecurity']->check() || $op == "form" ) {
        xoops_cp_header();
        //OpenTable();
        if ($op != "form" && $error_msg = $GLOBALS['xoopsSecurity']->getErrors(true)) {
            echo "<div class='errorMsg'>{$error_msg}</div>";
        }
        $display_criteria = 1;
        include XOOPS_ROOT_PATH."/modules/system/admin/mailusers/mailform.php";
        $form->display();
        //CloseTable();
        xoops_cp_footer();
    }

    if ($op == "send" && !empty($_POST['mail_send_to'])) {
        $added = array();
        $added_id = array();
        $criteria = array();
        $count_criteria = 0; // user count via criteria;
        if ( !empty($_POST['mail_inactive']) ) {
            $criteria[] = "level = 0";
        } else {
            if (!empty($_POST['mail_mailok'])) {
                $criteria[] = 'user_mailok = 1';
            }
            if ( !empty($_POST['mail_lastlog_min']) ) {
                $f_mail_lastlog_min = trim($_POST['mail_lastlog_min']);
                $time = mktime(0,0,0,substr($f_mail_lastlog_min,5,2),substr($f_mail_lastlog_min,8,2),substr($f_mail_lastlog_min,0,4));
                if ( $time > 0 ) {
                    $criteria[] = "last_login > $time";
                }
            }
            if ( !empty($_POST['mail_lastlog_max']) ) {
                $f_mail_lastlog_max = trim($_POST['mail_lastlog_max']);
                $time = mktime(0,0,0,substr($f_mail_lastlog_max,5,2),substr($f_mail_lastlog_max,8,2),substr($f_mail_lastlog_max,0,4));
                if ( $time > 0 ) {
                    $criteria[] = "last_login < $time";
                }
            }
            if ( !empty($_POST['mail_idle_more']) && is_numeric($_POST['mail_idle_more']) ) {
                $f_mail_idle_more = intval(trim($_POST['mail_idle_more']));
                $time = 60 * 60 * 24 * $f_mail_idle_more;
                $time = time() - $time;
                if ( $time > 0 ) {
                    $criteria[] = "last_login < $time";
                }
            }
            if ( !empty($_POST['mail_idle_less']) && is_numeric($_POST['mail_idle_less']) ) {
                $f_mail_idle_less = intval(trim($_POST['mail_idle_less']));
                $time = 60 * 60 * 24 * $f_mail_idle_less;
                $time = time() - $time;
                if ( $time > 0 ) {
                    $criteria[] = "last_login > $time";
                }
            }
        }
        if ( !empty($_POST['mail_regd_min']) ) {
            $f_mail_regd_min = trim($_POST['mail_regd_min']);
            $time = mktime(0,0,0,substr($f_mail_regd_min,5,2),substr($f_mail_regd_min,8,2),substr($f_mail_regd_min,0,4));
            if ( $time > 0 ) {
                $criteria[] = "user_regdate > $time";
            }
        }
        if ( !empty($_POST['mail_regd_max']) ) {
            $f_mail_regd_max = trim($_POST['mail_regd_max']);
            $time = mktime(0,0,0,substr($f_mail_regd_max,5,2),substr($f_mail_regd_max,8,2),substr($f_mail_regd_max,0,4));
            if ( $time > 0 ) {
                $criteria[] = "user_regdate < $time";
            }
        }
        if ( !empty($criteria) || !empty($_POST['mail_to_group']) ) {
            $criteria_object = new CriteriaCompo();
            $criteria_object->setStart( @$_POST['mail_start'] );
            $criteria_object->setLimit( $limit );
            foreach ($criteria as $c) {
                list ($field, $op, $value) = split(' ', $c);
                $crit = new Criteria($field, $value, $op);
                $crit->prefix = "u";
                $criteria_object->add($crit, 'AND');
            }
            $member_handler =& xoops_gethandler('member');
            $groups = empty($_POST['mail_to_group']) ? array() : array_map("intval", $_POST['mail_to_group']);
            $getusers = $member_handler->getUsersByGroupLink($groups, $criteria_object, true);
            $count_criteria = $member_handler->getUserCountByGroupLink($groups, $criteria_object);
            foreach ($getusers as $getuser) {
                if ( !in_array($getuser->getVar("uid"), $added_id) ) {
                    $added[] = $getuser;
                    $added_id[] = $getuser->getVar("uid");
                }
            }
        }
        if ( !empty($_POST['mail_to_user']) ) {
            foreach ($_POST['mail_to_user'] as $to_user) {
                if ( !in_array($to_user, $added_id) ) {
                    $added[] = new XoopsUser($to_user);
                    $added_id[] = $to_user;
                }
            }
        }
        $added_count = count($added);
        xoops_cp_header();
        //OpenTable();
        if ( $added_count > 0 ) {
            $myts =& MyTextSanitizer::getInstance();
            $xoopsMailer =& xoops_getMailer();
            for ( $i = 0; $i < $added_count; $i++) {
                $xoopsMailer->setToUsers($added[$i]);
            }
            $xoopsMailer->setFromName($myts->stripSlashesGPC($_POST['mail_fromname']));
            $xoopsMailer->setFromEmail($myts->stripSlashesGPC($_POST['mail_fromemail']));
            $xoopsMailer->setSubject($myts->stripSlashesGPC($_POST['mail_subject']));
            $xoopsMailer->setBody($myts->stripSlashesGPC($_POST['mail_body']));
            if ( in_array("mail", $_POST['mail_send_to']) ) {
                $xoopsMailer->useMail();
            }
            if ( in_array("pm", $_POST['mail_send_to']) && empty($_POST['mail_inactive']) ) {
                $xoopsMailer->usePM();
            }
            $xoopsMailer->send(true);
            echo $xoopsMailer->getSuccess();
            echo $xoopsMailer->getErrors();


            if ( $count_criteria > $limit ) {
                $form = new XoopsThemeForm(_AM_SENDMTOUSERS, "mailusers", "admin.php?fct=mailusers", 'post', true);
                if ( !empty($_POST['mail_to_group']) ) {
                    foreach ( $_POST['mail_to_group'] as $mailgroup) {
                        $group_hidden = new XoopsFormHidden("mail_to_group[]", $mailgroup);
                        $form->addElement($group_hidden);
                    }
                }
                $inactive_hidden = new XoopsFormHidden("mail_inactive", @$_POST['mail_inactive']);
                $lastlog_min_hidden = new XoopsFormHidden("mail_lastlog_min", $myts->htmlSpecialChars($myts->stripSlashesGPC($_POST['mail_lastlog_min'])));
                $lastlog_max_hidden = new XoopsFormHidden("mail_lastlog_max", $myts->htmlSpecialChars($myts->stripSlashesGPC($_POST['mail_lastlog_max'])));
                $regd_min_hidden = new XoopsFormHidden("mail_regd_min", $myts->htmlSpecialChars($myts->stripSlashesGPC($_POST['mail_regd_min'])));
                $regd_max_hidden = new XoopsFormHidden("mail_regd_max", $myts->htmlSpecialChars($myts->stripSlashesGPC($_POST['mail_regd_max'])));
                $idle_more_hidden = new XoopsFormHidden("mail_idle_more", $myts->htmlSpecialChars($myts->stripSlashesGPC($_POST['mail_idle_more'])));
                $idle_less_hidden = new XoopsFormHidden("mail_idle_less", $myts->htmlSpecialChars($myts->stripSlashesGPC($_POST['mail_idle_less'])));
                $fname_hidden = new XoopsFormHidden("mail_fromname", $myts->htmlSpecialChars($myts->stripSlashesGPC($_POST['mail_fromname'])));
                $femail_hidden = new XoopsFormHidden("mail_fromemail", $myts->htmlSpecialChars($myts->stripSlashesGPC($_POST['mail_fromemail'])));
                $subject_hidden = new XoopsFormHidden("mail_subject", $myts->htmlSpecialChars($myts->stripSlashesGPC($_POST['mail_subject'])));
                $body_hidden = new XoopsFormHidden("mail_body", $myts->htmlSpecialChars($myts->stripSlashesGPC($_POST['mail_body'])));
                $start_hidden = new XoopsFormHidden("mail_start", $_POST['mail_start'] + $limit);
                $mail_mailok_hidden = new XoopsFormHidden("mail_mailok", $myts->htmlSpecialChars($myts->stripSlashesGPC( @$_POST['mail_mailok'] )));
                $op_hidden = new XoopsFormHidden("op", "send");
                $submit_button = new XoopsFormButton("", "mail_submit", _AM_SENDNEXT, "submit");
                $sent_label = new XoopsFormLabel(_AM_SENT, sprintf(_AM_SENTNUM, $_POST['mail_start']+1, $_POST['mail_start'] + $limit, $count_criteria + $added_count - $limit));
                $form->addElement($sent_label);
                $form->addElement($inactive_hidden);
                $form->addElement($lastlog_min_hidden);
                $form->addElement($lastlog_max_hidden);
                $form->addElement($regd_min_hidden);
                $form->addElement($regd_max_hidden);
                $form->addElement($idle_more_hidden);
                $form->addElement($idle_less_hidden);
                $form->addElement($fname_hidden);
                $form->addElement($femail_hidden);
                $form->addElement($subject_hidden);
                $form->addElement($body_hidden);
                $form->addElement($op_hidden);
                $form->addElement($start_hidden);
                $form->addElement($mail_mailok_hidden);
                if (isset($_POST['mail_send_to']) && is_array($_POST['mail_send_to'])) {
                	foreach ($_POST['mail_send_to'] as $v) {
                		$form->addElement(new XoopsFormHidden("mail_send_to[]", $v));
                	}
                } else {
                	$to_hidden = new XoopsFormHidden("mail_send_to", 'mail');
                	$form->addElement($to_hidden);
                }
                $form->addElement($submit_button);
                $form->display();
            } else {
                echo "<h4>"._AM_SENDCOMP."</h4>";
            }
        } else {
            echo "<h4>"._AM_NOUSERMATCH."</h4>";
        }
        //CloseTable();
        xoops_cp_footer();
    }
}
?>
