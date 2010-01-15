<?php
// $Id: admin.php 28 2009-12-06 01:09:24Z kris_fr $

define('_AD_SYSOPTIONS','ÎíÇÑÇÊ ÇáÇÏÇÑÉ');
define('_AD_INSTALLEDMODULES','ÇáÈÑÇãÌ ÇáãËÈÊÉ');

define('_AD_XOOPSTHEMES','ËíãÇÊ ÒææÈÓ');
define('_AD_XOOPSMODULES','ÈÑÇãÌ ÒææÈÓ');
define('_AD_INTERESTSITES','ÒææÈÓ');
define('_AD_LOCALSUPPORT','ÇáÏÇÚã ÇáÑÓãí');
define('_XOOPS_WEBSITE','www.arabxoops.com');
define('_SOURCEFORGE','Sourceforge');
define('_AD_XDONATIONS','ÊÈÑÚÇÊ');

define("THEME_WELLCOME",				"ÇåáÇ Èß");
define("THEME_PROFILE",					"ãÔÇåÏÉ ÇáãáÝ ÇáÔÎÕí");
define("THEME_EDITPROFILE",				"ÊÚÏíá ÇáãáÝ ÇáÔÎÕí");
define("THEME_NOTIFICATION",			"ÇáÊÈáíÛÇÊ");
define("THEME_MESSAGE",					"ÇáÑÓÇÆá ÇáÎÇÕÉ");
define("THEME_YOUHAVE",					"áÏíß");
define("THEME_NOTREAD",					"ÑÓÇÆá ÛíÑ ãÞÑæÁÉ");
define("THEME_MYACCOUNT",				"ÍÓÇÈí ÇáÔÎÕí");
define("THEME_SEARCH",					"ÈÍË");
define("THEME_DESC_SEARCH",				"ÈÍË Ýí");
define("THEME_KEYWORDS",				"ßáãÇÊ ÇáÈÍË");
define("THEME_UPTOP",					"ÇÚáì ÇáÕÝÍÉ");
define("THEME_USER",					"ÇáÇÚÖÇÁ");

define('_MD_VERSION','ÇáäÓÎÉ');
define('_MD_VERSION_XOOPS','äÓÎÉ ÒææÈÓ');
define('_MD_VERSION_PHP','PHP ÇÕÏÇÑÉ');
define('_MD_VERSION_MYSQL','mySQL ÇÕÏÇÑÉ');
define('_MD_Server_API','Server API');
define('_MD_OS','OS');
define('_MD_ABOUT','Íæá ÒææÈÓ');
define('_MD_ABOUT_TEXT','ÒææÈÓ åí äÙÇã ãÝÊæÍ ÇáãÕÏÑ ãÌÇäí ãßÊæÈ ÈáÛÉ Èí ÇÊÔ Èí. ÊÕáÍ ÒææÈÓ áÈäÇÁ ÌãíÚ ÇäæÇÚ ÇáãæÇÞÚ ÔÑßÇÊ, ÊÌÇÑÉ ãæÇÞÚ ÔÎÕíÉ æÛíÑåÇ . áãÚÑÝÉ ÇáãÒíÏ <a href="http://www.xoops.org/modules/wfchannel/" rel="external">Íæá ÒææÈÓ</a> Þã ÈÒíÇÑÉ åÐÇ ÇáÑÇÈØ.');
define('_MD_XOOPS_LINKS','ÑæÇÈØ ÒææÈÓ');

define('_MD_XOOPSPROJECT','ÒææÈÓ');
define('_MD_LOCALSUPPORT','ÇáÏÇÚã ÇáÑÓãí');
define('_MD_XOOPSCORE','äÓÎÉ ÒææÈÓ');
define('_MD_XOOPSTHEME','ËíãÇÊ ÒææÈÓ');
define('_MD_XOOPSWIKI','ÒææÈÓ æíßí');
define('_MD_XOOPSBOOKS','ßÊÈ ÒææÈÓ');
define('_MD_NEWMODULE','ÈÑÇãÌ ÌÏíÏÉ');
define('_MD_XOOPSFAQ','ÇáÇÓÆáÉ ÇáãÊßÑÑÉ');
define('_MD_CODESVN','ßæÏ SVN');
define('_MD_REPORTBUG','ÇÎÈÑäÇ Úä Îáá');
define('_MD_XGIFTSHOP','ãÊÌÑ ÇáåÏÇíÇ ÇáÎÇÕÉ ÈÒææÈÓ');
define('_MD_XDONATIONS','ÊÈÑÚ áÒææÈÓ');
define('_MD_XDONATIONS_TEXT','<h2>äÌÊÇÌ áÏÚãß ãä ÝÖáß ÊÈÑÚ áäÇ!</h2>
ÇÐÇ ÇÍÈÈÊ äÙÇã ÒææÈÓ æÊæÏ ÏÚãå áãÒíÏ ãä ÇáÊÞÏã , íãßäß ÇáÊÈÑÚ áãÄÓÓÉ ÒææÈÓ ÚÈÑ ÍÓÇÈß ÇáÈÇí ÈÇá!.<br />
ÊÈÑÚÇÊß ÓÊÓÇåã ÍÊãÇõÝí ÊØæíÑ äÙÇã ÒææÈÓ.<br />
ãÄÓÓÉ ÒææÈÓ åí ãÄÓÓÉ ÛíÑ ÑÈÍíÉ ãÓÌáÉ Ýí ÇáæáÇíÇÊ ÇáãÊÍÏÉ ÇáÇãíÑßíÉ!<br />
ÓÊÙåÑ ÇÓãÇÁ ÌãíÚ ÇáãÊÈÑÚíä ßÇÕÏÞÇÁ áÒææÈÓ Ýí ÇáãæÞÚ<br />
ááÊÈÑÚ ãä ÝÖáß ÇÖÛØ <a href="http://www.xoops.org/modules/xdonations/" rel="external">åäÇ</a>');
define('_MD_MOVETOBLUE','ÊÑßíÈ ÇáÈÑÇãÌ ÇáÑÆíÓíÉ');
define('_MD_MOVETOBLUE_LINK','http://www.arabxoops.com/modules/mydownloads/');
?>