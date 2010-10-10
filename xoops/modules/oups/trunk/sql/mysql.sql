# $Id$

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
) ENGINE=MyISAM;


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
) ENGINE=MyISAM;

-- 
-- Dumping data for table `<prefix>_oups_msgs`
-- 
INSERT INTO `oups_msgs` VALUES (1, 'Error 301 - Moved Permanently', '301', '<p style="font-weight: bold; text-align: center;">The requested resource has been assigned a new permanent URI and any future references to this resource SHOULD use one of the returned URIs.</p>\r\n\r\n<p>Please try visiting the <a href="/">home page</a>, or use the search function below to find the page you were after.</p>\r\n', '1');
INSERT INTO `oups_msgs` VALUES (2, 'Error 302 - Found', '302', '<p style="font-weight: bold; text-align: center;">The requested resource resides temporarily under a different URI.</p>\r\n\r\n<p>Please try visiting the <a href="/">home page</a>, or use the search function below to find the page you were after.</p>\r\n', '1');
INSERT INTO `oups_msgs` VALUES (3, 'Error 400 - Bad request', '400', '<p style="font-weight: bold; text-align: center">The request could not be understood by the server due to malformed syntax.<br />The client SHOULD NOT repeat the request without modifications</p>\r\n\r\n<p>Please try visiting the <a href="/">home page</a>, or use the search function below to find the page you were after.</p>\r\n', '1');
INSERT INTO `oups_msgs` VALUES (4, 'Error 401 - Unauthorized', '401', '<p style="font-weight: bold; text-align: center">The request requires user authentication.</p>\r\n\r\n<p>Please connect you on <a href="/user.php">Login page</a>.</p>\r\n', '1');
INSERT INTO `oups_msgs` VALUES (5, 'Error 403 - Document Not Found', '403', '<p style="font-weight: bold; text-align: center;">You do not have permission to access the requested directory/file.</p>', '1');
INSERT INTO `oups_msgs` VALUES (6, 'Error 404 - Document Not Found', '404', '<p style="font-weight: bold; text-align: center">The page you requested could not be found.</p>\r\n\r\n<p>You may not be able to find the requested page because:</p>\r\n\r\n<ul>\r\n<li>The page no longer exists.</li>\r\n<li>The address/page name was mis-typed.</li>\r\n<li>You followed an incorrect, or out of date link on another site.</li>\r\n<li>You followed an out of date search engine listing, or personal bookmark/favourite.</li>\r\n</ul>\r\n\r\n<p>Please try visiting the <a href="/">home page</a>, or use the search function below to find the page you were after.</p>\r\n', '1');
INSERT INTO `oups_msgs` VALUES (7, 'Error 405 - Method Not Allowed', '405', '<p style="font-weight: bold; text-align: center;">The method specified in the Request-Line is not allowed for the resource identified by the Request-URI.</p>', '1');
INSERT INTO `oups_msgs` VALUES (8, 'Error 408 - Request Timeout', '408', '<p style="font-weight: bold; text-align: center;">The client did not produce a request within the time that the server was prepared to wait.</p>', '1');
INSERT INTO `oups_msgs` VALUES (9, 'Error 409 - Conflict', '409', '<p style="font-weight: bold; text-align: center;">The request could not be completed due to a conflict with the current state of the resource.</p>', '1');
INSERT INTO `oups_msgs` VALUES (10, 'Error 410 - Gone', '410', '<p style="font-weight: bold; text-align: center;">The requested resource is no longer available at the server and no forwarding address is known.</p>', '1');
