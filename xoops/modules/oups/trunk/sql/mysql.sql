# $Id$

#//  ------------------------------------------------------------------------ //
#//  Author: Andrew Mills                                                     //
#//  Email:  ajmills@sirium.net                                         //
#//	 About:  This file is part of the AM HTError module for Xoops v2.          //
#//                                                                           //
#//  ------------------------------------------------------------------------ //
#//                XOOPS - PHP Content Management System                      //
#//                    Copyright (c) 2000 XOOPS.org                           //
#//                       <http://www.xoops.org/>                             //
#//  ------------------------------------------------------------------------ //
#//  This program is free software; you can redistribute it and/or modify     //
#//  it under the terms of the GNU General Public License as published by     //
#//  the Free Software Foundation; either version 2 of the License, or        //
#//  (at your option) any later version.                                      //
#//                                                                           //
#//  You may not change or alter any portion of this comment or credits       //
#//  of supporting developers from this source code or any supporting         //
#//  source code which is considered copyrighted (c) material of the          //
#//  original comment or credit authors.                                      //
#//                                                                           //
#//  This program is distributed in the hope that it will be useful,          //
#//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
#//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
#//  GNU General Public License for more details.                             //
#//                                                                           //
#//  You should have received a copy of the GNU General Public License        //
#//  along with this program; if not, write to the Free Software              //
#//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
#//  ------------------------------------------------------------------------ //

-- 
-- Table structure for table `<prefix>_oups_errors`
-- 

CREATE TABLE `oups_errors` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `uid` int(10) unsigned NOT NULL default '0',
  `error` varchar(10) default NULL,
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `referer` varchar(250) default NULL,
  `useragent` varchar(250) default NULL,
  `remoteaddr` varchar(250) default NULL,
  `requested` varchar(250) default NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;


-- --------------------------------------------------------

-- 
-- Table structure for table `<prefix>_oups_msgs`
-- 

CREATE TABLE `oups_msgs` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(250) default NULL,
  `errornum` varchar(5) NOT NULL default '0',
  `text` text,
  `showme` enum('0','1') NOT NULL default '1',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

-- 
-- Dumping data for table `<prefix>_oups_msgs`
-- 

INSERT INTO `oups_msgs` VALUES (1, 'Error 404 - Document Not Found', '404', '<p style="font-weight: bold; text-align: center">The page you requested could not be found.</p>\r\n\r\n<p>You may not be able to find the requested page because:</p>\r\n\r\n<ul>\r\n<li>The page no longer exists.</li>\r\n<li>The address/page name was mis-typed.</li>\r\n<li>You followed an incorrect, or out of date link on another site.</li>\r\n<li>You followed an out of date search engine listing, or personal bookmark/favourite.</li>\r\n</ul>\r\n\r\n<p>Please try visiting the <a href="/">home page</a>, or use the search function below to find the page you were after.</p>\r\n', '1');
INSERT INTO `oups_msgs` VALUES (2, 'Error 500 - Server error', '500', '<p style="font-weight: bold; text-align: center;">The server encountered an internal error and was unable to complete your request.</p>', '1');
INSERT INTO `oups_msgs` VALUES (3, 'Error 403 - Forbidden', '403', '<p style="font-weight: bold; text-align: center;">You do not have permission to access the requested directory/file.</p>', '1');
