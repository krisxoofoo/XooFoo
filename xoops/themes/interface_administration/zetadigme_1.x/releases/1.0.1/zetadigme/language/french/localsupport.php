<?php
// $Id: localsupport.php 3860 2009-11-09 21:35:53Z kris_fr $

$menu = array();

$menu[] = array(
    'link'      => 'http://www.afux.org',
    'title'     => 'AFUX',
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/paradigme/icons/xoops.png'
);

$menu[] = array(
    'link'      => 'http://www.afux.org/modules/xdonations/',
    'title'     => _AD_XDONATIONS,
    'absolute'  => 1
);

$menu[] = array(
    'link'      => 'http://sourceforge.net/projects/xfr/',
    'title'     => _SOURCEFORGE,
    'absolute'  => 1
);

$menu[] = array(
    'link'      => 'http://www.frxoops.org',
    'title'     => 'Xoops France',
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/paradigme/icons/xoops.png'
);

$menu[] = array(
    'link'      => 'http://www.frxoops.org/modules/library/',
    'title'     => _AD_XOOPSTHEMES,
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/paradigme/icons/tweb.png'
);

$menu[] = array(
    'link'      => 'http://www.frxoops.org/modules/modules-search/',
    'title'     => _AD_XOOPSMODULES,
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/paradigme/icons/xoops.png'
);

return $menu;

/**
 * @translation     AFUX (Association Francophone des Utilisateurs de Xoops) <http://www.afux.org/>
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8
 *
 * @version         $Id: localsupport.php 3860 2009-11-09 21:35:53Z kris_fr $
**/
?>