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
include 'header.php';
xoops_cp_header();

loadModuleAdminMenu(4, "");

$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : (isset($_REQUEST['id']) ? "edit" : 'list');

$handler =& xoops_getmodulehandler('regstep');
switch ($op ) {
    case "list":
        $GLOBALS['xoopsTpl']->assign('steps', $handler->getObjects(null, true, false) );
        $template_main = "profile_admin_steplist.html";
        break;

    case "new":
        $obj =& $handler->create();
        include_once "../include/forms.php";
        $form = profile_getStepForm($obj);;
        $form->display();
        break;

    case "edit":
        $obj =& $handler->get($_REQUEST['id']);
        include_once "../include/forms.php";
        $form = profile_getStepForm($obj);;
        $form->display();
        break;

    case "save":
        if ( isset($_REQUEST['id'])  ) {
            $obj =& $handler->get($_REQUEST['id']);
        } else {
            $obj =& $handler->create();
        }
        $obj->setVar('step_name', $_REQUEST['step_name']);
        $obj->setVar('step_order', $_REQUEST['step_order']);
        $obj->setVar('step_desc', $_REQUEST['step_desc']);
        $obj->setVar('step_save', $_REQUEST['step_save']);
        if ( $handler->insert($obj)  ) {
            redirect_header('step.php', 3, sprintf(_PROFILE_AM_SAVEDSUCCESS, _PROFILE_AM_STEP) );
        }
        echo $obj->getHtmlErrors();
        $form = $obj->getForm();
        $form->display();
        break;

    case "delete":
        $obj =& $handler->get($_REQUEST['id']);
        if ( isset($_REQUEST['ok']) && $_REQUEST['ok'] == 1 ) {
            if ( $handler->delete($obj)  ) {
                redirect_header('step.php', 3, sprintf(_PROFILE_AM_DELETEDSUCCESS, _PROFILE_AM_STEP) );
            } else {
                echo $obj->getHtmlErrors();
            }
        } else {
            xoops_confirm(array('ok' => 1, 'id' => $_REQUEST['id'], 'op' => 'delete'), $_SERVER['REQUEST_URI'], sprintf(_PROFILE_AM_RUSUREDEL, $obj->getVar('step_name') ));
        }
        break;
}

if ( !empty($template_main)  ) {
    $GLOBALS['xoopsTpl']->display("db:{$template_main}");
}

xoops_cp_footer();
?>