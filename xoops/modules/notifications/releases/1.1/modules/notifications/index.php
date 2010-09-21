<?php
/**
 * Global Notifications Module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright           The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package          	Global Notifications Module
 * @since               2.3.0
 * @author              Burning <http://www.xoopspro.com> & kris <http://www.xoofoo.org>
 * @version             $Id $
**/

if (file_exists("mainfile.php")) {
include("mainfile.php");
} elseif (file_exists("../mainfile.php")) {
include("../mainfile.php");
} else { 
include("../../mainfile.php");
}
include(XOOPS_ROOT_PATH."/header.php");
global $xoTheme; 
	$xoTheme->addStyleSheet('modules/notifications/css/style.css');
/**
 * ****************************************************************************
 * Copyright (c) Hervé Thouzard of Instant Zero (http://www.instant-zero.com)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Hervé Thouzard of Instant Zero (http://www.instant-zero.com)
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         Xoops
 * @author 			Hervé Thouzard of Instant Zero (http://www.instant-zero.com)
 *
 * ****************************************************************************
 */

/**
 * This script is intended to display, in a centralized place, a list of all the modules
 * notifications so that users can subscribe to any notification in the same place without
 * the need to go in all modules
 */
												
// Filter to limit notifications
$searchPattern = '/.*global.*/';
$fieldsSeparator = ';';
$fieldSeparator = '|';

// **************************************************************************************
// Do not modify anything after this line ***********************************************
// **************************************************************************************
if(!is_object($xoopsUser)) {
	redirect_header('../../index.php', 2, _MD_NOTIFICATION_RESERVED_PLACE);
	exit();
}
												
// Initialisations
$allModules = $userModuleAccess = $allUserAccessibleNotifications = array();
$modules_handler =& xoops_gethandler('module');
$moduleperm_handler =& xoops_gethandler('groupperm');
$config_handler =& xoops_gethandler('config');
$notifications_handler =& xoops_gethandler('notification');

$myts =& MyTextSanitizer::getInstance();

// First we search for all active modules with notifications
$criteria = new CriteriaCompo();
$criteria->add(new Criteria('isactive', 1, '='));
$criteria->add(new Criteria('hasnotification', 1, '='));
$criteria->setSort('name');
$allModules = $modules_handler->getObjects($criteria);
if(count($allModules) == 0) {
	redirect_header('../../index.php', 2, _MD_NOTIFICATION_SORRY_NO_MODULE);
	exit();
}

// Then we just keep modules user can access to
foreach($allModules as $oneModule) {
	if ($moduleperm_handler->checkRight('module_read', $oneModule->getVar('mid'), $xoopsUser->getGroups())) {
		$moduleName = $oneModule->getVar('name');
		$userModuleAccess[$moduleName] = $oneModule;
	}
}
if(count($userModuleAccess) == 0) {	// The current user can't access any module
	redirect_header('../../index.php', 2, _MD_NOTIFICATION_SORRY_NO_MODULE);
	exit();
}

// Arrivé l&agrave;, l'utilisateur a forcément acc&egrave;s &agrave; quelque chose *****************

// Est-ce que l'utilisateur a modifié ses alertes ?
if(isset($_POST['op']) && $_POST['op'] == 'save') {
	if(!isset($_POST['dictionary'])) {
		redirect_header('../../index.php', 2, _MD_NOTIFICATION_DICTIONARY_MISSING);
		exit();
	}
	$uid = $xoopsUser->getVar('uid');
	$dictionary = $_POST['dictionary'];
	// On va supprimer toutes ses alertes actuelles
	$alerts = explode($fieldsSeparator, $dictionary);
	foreach($alerts as $alert) {
		list($moduleId, $category, $event) = explode($fieldSeparator, $alert);
		$criteriaAlert = new CriteriaCompo();
		$criteriaAlert->add(new Criteria('not_modid', $moduleId, '='));
		$criteriaAlert->add(new Criteria('not_category', $category, '='));
		$criteriaAlert->add(new Criteria('not_event', $event, '='));
		$criteriaAlert->add(new Criteria('not_uid', $uid, '='));
		$criteriaAlert->add(new Criteria('not_itemid', 0, '='));
		$notifications_handler->deleteAll($criteriaAlert);
		unset($criteriaAlert);
	}

	// Puis les recréer &agrave; partir de la sélection
	if(isset($_POST['xoops_events'])) {
		$newAlerts = $_POST['xoops_events'];
		foreach($newAlerts as $alert) {
			list($moduleId, $category, $event) = explode($fieldSeparator, $alert);
			$notification = $notifications_handler->create(true);
			$notification->setVar('not_modid', $moduleId);
			$notification->setVar('not_itemid', 0);
			$notification->setVar('not_category', $category);
			$notification->setVar('not_event', $event);
			$notification->setVar('not_uid', $uid);
			$notification->setVar('not_mode', 0);
			$notifications_handler->insert($notification);
			unset($notification);
		}
	}
}

ksort($userModuleAccess);

echo "<div id='gn-container'>";
echo "<h1>"._MD_NOTIFICATION_PAGE_TITLE."</h1>";
echo "<p class='gn-description-page boxshadow bradius10'>"._MD_NOTIFICATION_SUBTITLE."</p>";
echo "<form method='post' name='frmGlobalNotifications' id='frmGlobalNotifications' action='".XOOPS_URL.'/modules/notifications/'.basename(__FILE__)."' />";

foreach($userModuleAccess as $moduleName => $oneModuleWithAccess) {
	$modId = $oneModuleWithAccess->getVar('mid');

	// Recherche de la configuration du module (est-ce que les notifications sont actives ?)
	$criteriaModule = new CriteriaCompo();
	$criteriaModule->add(new Criteria('conf_name', 'notification_enabled', '='));
	$criteriaModule->add(new Criteria('conf_modid', $modId, '='));
	$configurations = $configurations2 = array();
	$configurations = $config_handler->getConfigs($criteriaModule);
	$ok = false;
	$selectedNotifications = array();

	if(count($configurations) > 0) {
		if($configurations[0]->getVar('conf_value') != 0) {
			// Les notifications sont actives, reste &agrave; voir si le webmaster en a sélectionné quelques unes
			$criteriaModule2 = new CriteriaCompo();
			$criteriaModule2->add(new Criteria('conf_name', 'notification_events', '='));
			$criteriaModule2->add(new Criteria('conf_modid', $modId, '='));
			$configurations2 = $config_handler->getConfigs($criteriaModule2);
			if(count($configurations2) > 0) {
				$selectedNotifications = unserialize(trim($configurations2[0]->getVar('conf_value', 'N')));
				$ok = true;
			}
		}
	}
	if(!$ok) {
		continue;
	}
	// Si je suis encore l&agrave;, c'est qu'on a des notifications d'activées
	$allNotifications = $activeNotifications = $eventsForUser = array();
	$allNotifications = $oneModuleWithAccess->getInfo('notification');
	// Vérification des notifications présentes
	$events = $allNotifications['event'];
	foreach($events as $event) {
		//var_dump($event);
		// Déj&agrave;, on ne prend que les év&egrave;nements globaux
		if(preg_match($searchPattern, strtolower($event['category'])) > 0) {
			$searchEvent = $event['category'].'-'.$event['name'];
			if(in_array($searchEvent, $selectedNotifications)) {	// Ensuite on vérifie que la notification est active
				if(isset($event['admin_only'])) {	// Derni&egrave;re vérification, est-ce une notification pour les webmaster uniquement
					if(intval($event['admin_only']) == 1 && $xoopsUser->isAdmin($modId)) {
						$eventsForUser[] = $event;
					}
				} else {
					$eventsForUser[] = $event;
				}
			}
		}
	}

	if(count($eventsForUser) > 0) {
		$count = 0;
		$events = $eventsForUser;
		echo "<h2>".$oneModuleWithAccess->getVar('name')."</h2>";
		echo "<table>";

		foreach($events as $event) {
			$additionnal  ='';
			$eventName = $modId.$fieldSeparator.$event['category'].$fieldSeparator.$event['name'];
			$allUserAccessibleNotifications[] = $eventName;
			if(isset($event['admin_only']) && intval($event['admin_only']) == 1) {
				$additionnal = _MD_NOTIFICATION_FOR_ADMIN_ONLY;
			}
			// On recherche si l'utilisateur est inscrit &agrave; cette notification
			$checked = '';
			if($notifications_handler->isSubscribed($event['category'], 0, $event['name'], $modId, $xoopsUser->getVar('uid'))) {
				$checked = "checked='checked'";
			}
			echo "<tr class='gn-module-notifs-line'>\n<td><input type='checkbox' name='xoops_events[]' id='xoops_events[]' value='$eventName' $checked /></td><td>".$event['title'].' '.$additionnal."<br /><span class='gn-notif-description'>".$event['description']."</span></td>\n</tr>\n";
		}
		echo "</table>";
	}
}
echo "<div style='text-align:center;'><input type='hidden' name='op' id='op' value='save' /><input type='submit' name='btngo' value='"._MD_NOTIFICATION_UPDATE."' /></div>";
if(count($allUserAccessibleNotifications) > 0) {
	echo "<input type='hidden' name='dictionary' id='dictionary' value='".implode($fieldsSeparator, $allUserAccessibleNotifications)."' />";
}
echo "</form>\n";
echo "</div>";

include(XOOPS_ROOT_PATH."/footer.php");
?>