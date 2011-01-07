<?php
/*
####################################################################
# Name: The Uniform Server Language System Array 1.1
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) 
# Web: http://www.uniformserver.com
####################################################################
*/

# Beta Feature, Currently For Debugging Only
#require_once 'array.php';

$US = array(
    	'title' => 'Uniform Server',
	'apanel' => 'Admin Panel',
	'dev-team' => 'The Uniform Server Development Team',

	//--------------------------------------------------------------------------------------------
	// Source Code
	//--------------------------------------------------------------------------------------------

	'code-show' => 'View Source Code',
	'code-source' => 'Viewing Source Code',
	'code-back' => 'Close View',
	
	//--------------------------------------------------------------------------------------------
	// Navigation
	//--------------------------------------------------------------------------------------------
	
	// Basic
	'nav-home' => 'Home',
	'nav-web' => 'Uniform Server Website',
	'nav-secure' => 'Server Security',
	'nav-phpinfo' => 'phpinfo()',
	'nav-cgienv' => 'Perl Envirnonment',
	'nav-status' => 'Apache Status',
	'nav-info' => 'Apache Info',
	'nav-update' => 'Version Check',
	// Server Control
	'nav-start' => 'Server Control',
	// Server Control - Service
	'nav-uservers' => 'Uninstall Services',
	'nav-rapaches' => 'Restart Apache service',
	'nav-rmysqls' => 'Restart MySQL service',
	// Server Control - Standard Program
	'nav-sserver' => 'Stop Servers',
	'nav-rmysql' => 'Run MySQL',
	'nav-smysql' => 'Stop MySQL',
	// Configurations
	'nav-config' => 'Configurations',
	'nav-aconfig' => 'Apache Configuration',
	'nav-pconfig' => 'PHP Configuration',
	'nav-vhost' => 'Admin Virtual Host',
	'nav-apsetup' => 'Admin Panel Configuration',
	'nav-psetup' => 'Private Server Configuration',
	'nav-sslpsetup' => 'Private Secure Server Config',
	'nav-mqsetup' => 'MySQL Server Configuration',

	// Tools Navigation
	'nav-tools' => 'Tools',
	'nav-pma' => 'phpMyAdmin',
	'nav-elog' => 'Error Log Viewer',
	'nav-u2w' => 'Win - Unix Converter',
	'nav-smig' => 'Server Migration',
	'nav-key' => 'Server Key & Cert Gen',
	'nav-mysqlrestore' => 'Restore MySQL Password',

	// Plugins Navigation
	'nav-plugins' => 'Plugin Manager',
	'nav-pear' => 'Install Pear',
	'nav-eaccelerator' => 'eAccelerator cPanel',
	'nav-apc' => 'Interface APC Cache',
	'nav-memcache' => 'Interface Memcache',
	// Misc Navigation
	'nav-misc' => 'Miscellaneous',
	'nav-sup' => 'Online Support',
	// Documentation
	'nav-docs1' => 'Documentation',
	'nav-sdoc' => 'Server Documentation',
	'nav-docs2' => 'On-line Documentation',
	'nav-udoc' => 'Uniform Server User Guide',
	'nav-wiki' => 'Uniform Server Wiki',
	'nav-phdoc' => 'PHP Documentation',
	'nav-mydoc' => 'MySQL Documentation',
	'nav-pedoc' => 'Perl Documentation',
	'nav-apdoc' => 'Documentation APC',
	'nav-medoc' => 'Documentation Memcache',
	'nav-xddoc' => 'Documentation Xdebug',
	// Languages
	'nav-langs' => 'Languages',

	//--------------------------------------------------------------------------------------------
	// Home
	//--------------------------------------------------------------------------------------------
	
	'main-head' => 'Admin Panel '. $us_apanel_version .'',
	'main-text' => '
	Welcome to Uniform Server '. $us_version .'!. This is the administration section of the server and 	
	you can control your server from here. 
    	Though we are still working on adding new features, improvements, and fixing bugs on this panel, it is fully stable 
    	and complete. It is also easy to use and very user friendly.
	<br />
	You can also translate this Admin Panel into your own language easily, and if you will like to
	do so, please upload a copy to our <a href="http://sourceforge.net/tracker/?atid=799696&group_id=53691&func=browse" target="_sf">
	SourceForge Translation Tracking System</a> for others to download.
	<br />
	The translations for older versions of this Admin Panel will not work! Click the link on top to download the new version if available.
	<br />
  	Also, new things have been added and some taken out and some functions may not 	
	work if the required plugin is not installed or available. 
	<br />
	Please report all bugs and errors on our <a href="http://forum.uniformserver.com/" target="_forum">forum</a>.
 	<br />
	<br />
	Thanks 
 	<br />
	<a href="http://www.uniformserver.com/" target="_home">The Uniform Server Development Team</a>',
	'main-secure' => 'Security Checklist',
	'main-text-0' => 'Change the username/password for the Admin Panel <a href="apsetup.php">here</a>',
	'main-text-1' => 'Change the username/password for the server <a href="psetup.php">here</a>',
	'main-text-2' => 'Change the root password for mysql by editing <a href="mqsetup.php">here</a>',
	'main-text-3' => 'Run the <a href="security.php">Security Console</a> and see if everything is OK.',
	'main-text-4' => 'Change the username/password for the SSL server <a href="sslpsetup.php">here</a>',
	
	//--------------------------------------------------------------------------------------------
	// Update
	//--------------------------------------------------------------------------------------------
	
	'update-head' => 'Uniform Server Version Check',
	'update-check' => 'Checking Version...',
	'update-notfound' => '
         Version file could not be found on the Uniform Server!
         <br />
         Or
         <br />
         The Unifrom Server is off-line!
         <br />
         Or
         <br />
         You are not connected to the Internet!
         <br />',

	'update-true' => '
	Installed version of the Uniform Server is the latest one.
	<br />
	You don\'t need to update it.
	<br />',
	'update-false' => 'A Newer version of the Uniform Server is available!',
	'update-new' => 'New Version',
	'update-yours' => 'Installed Version',
	'update-get' => 'You can get the newer version from our website by clicking the link below.',
	
	//--------------------------------------------------------------------------------------------
	// Server Control - Standard program
	//--------------------------------------------------------------------------------------------
	
	'server-stop-head1' => 'Stop Servers',
	'server-stop-head2' => 'Stopping servers',
	'server-stop-txt1'  => 'This script will stop Apache and MySQL servers',
	'server-stop-txt2'  => 'The Servers are stopping please wait for a beep to confirm!',
	'server-stop-txt3'  => 'Thank you for using <a href="http://www.uniformserver.com/">The Uniform Server</a>.',
	'server-confirm-button'  => 'Confirm',

	'start-mysql-head1'  => 'Start MySQL Server',
	'start-mysql-head2'  => 'Starting the MySQL server.',
	'start-mysql-txt1'   => 'This script will start the MySQL server.',
	'start-mysql-txt2'   => 'MySQL server already running.',
	'start-mysql-txt3'   => 'The MySQL server was started you can continue using the server.',
        'start-mysql-button' => 'Start MySQL Server',

	'stop-mysql-head1'  => 'Stop MySQL Server',
	'stop-mysql-head2'  => 'Stopping the MySQL server.',
	'stop-mysql-txt1'   => 'This script will stop the MySQL server.',
	'stop-mysql-txt2'   => 'The MySQL server was stopped.',
	'stop-mysql-txt3'   => 'MySQL server not running.',
        'stop-mysql-button' => 'Stop MySQL Server',

	//--------------------------------------------------------------------------------------------
	// Server Control - Services
	//--------------------------------------------------------------------------------------------

	'service-apache-head1' => 'Restart Apache Service',
	'service-apache-head2' => 'Restarting Apache service',
	'service-apache-txt1'  => 'This script will restart the Apache service.',
	'service-apache-txt2'  => 'It will take a some time',
	'service-apache-txt3'  => 'The Apache service is restarting please wait <br /> Between 2-10 seconds!' ,
	'service-apache-txt4'  => 'Apanel will reload to reflect any server configuration changes.',

	'service-mysql-head1' => 'Restart MySQL Service',
	'service-mysql-head2' => 'The MySQL service was restarted.',
	'service-mysql-txt1'  => 'This script will restart the MySQL service.',
	'service-mysql-txt2'  => 'It will take some time',
	'service-mysql-txt3'  => 'The MySQL service was restarted you can continue using the server.',

        'service-confirm-button'  => 'Confirm',
	
	//--------------------------------------------------------------------------------------------
	// Apache Configuration
	//--------------------------------------------------------------------------------------------
	
	'aconfig-head' => 'Apache Configuration',
	'aconfig-conf' => 'Configure Apache',
	'aconfig-sname' => 'Server Name',
	'aconfig-wemail' => 'Server Admin Email',
	'aconfig-difiles' => 'Directory Index Files',
	'aconfig-ssi' => 'Server Side Includes',
	'aconfig-ssig' => 'Server Signature',
        'aconfig-listen' => 'Listen',
	'aconfig-text-0' => 'something',
	'aconfig-text-1' => '
	The changes have been successfully saved. <br /> Changes will take effect after server restart!',
	'aconfig-save' => 'Save',
	'aconfig-module' => 'At the moment PHP is loaded as Apache module.',
	'aconfig-cgi' => 'At the moment PHP scripts are executed though Apache CGI interface.',
	'aconfig-help' => '?',	

	//--------------------------------------------------------------------------------------------
	// PHP Configuration
	//--------------------------------------------------------------------------------------------
	
	'pconfig-head' => 'PHP Configuration',
	'pconfig-conf' => 'Configure PHP',
	'pconfig-smode' => 'Safe Mode',
	'pconfig-rg' => 'Register Globals',
	'pconfig-mtexec' => 'Maximum Script Execute Time (s.)',
	'pconfig-mmexec' => 'Maximum Memory Amount (MB)',
	'pconfig-ssig' => 'Show PHP In Server Signature',
	'pconfig-perror' => 'Print Errors',
	'pconfig-mpsize' => 'Maximum Post Size',
	'pconfig-musize' => 'Maximum Upload Size',
	'pconfig-text-0' => 'something',
	'pconfig-text-1' => '
	The changes have been successfully saved. <br /> Changes will take effect after server restart!',
	'pconfig-save' => 'Save',
	'pconfig-module' => 'At the moment PHP is loaded as Apache module.',
	'pconfig-cgi' => 'At the moment PHP scripts are executed though Apache CGI interface.',
	'pconfig-help' => '?',	

	//--------------------------------------------------------------------------------------------
	// VHost Manager
	//--------------------------------------------------------------------------------------------

	'vhost-head' => 'Virtual Host',
	'vhost-setup' => 'Virtual Host Setup',
	'vhost-settings' => 'Virtual Host Settings',
	'vhost-text-0' => 'You have',
	'vhost-text-1' => 'hosts in your httpd.conf file:',
	'vhost-text-2' => 'Error in hosts file:',
	'vhost-text-3' => 'All hostnames exist in hosts file!',
	'vhost-new' => '
	Use this new and cool tool to add more virtual hosts to your server without having to edit
	the httpd.conf file yourself.',
	'vhost-new-ex' => '(ex. newhost.localhost)',
	'vhost-name' => 'Name:',
	'vhost-path' => 'Path to DocumentRoot:',
	'vhost-path-ex' => '(ex. c:/www/newhost)',
	'vhost-opt' => 'Optional additions:',
	'vhost-opt-ex' => '(ex. error_log etc.)',
	'vhost-dne' => 'does not exist',
	'vhost-make' => 'Create VHost',
	'vhost-error-1' => 'Error in path to your hosts-file!',
	'vhost-error-2' => 'Error in path to your httpd.conf!',
	'vhost-text-4' => 'Safe_mode is On, so restart Apache manually!',
	'vhost-credit' => 'Script By Sukos',

	//--------------------------------------------------------------------------------------------
	// Error Log Viewer
	//--------------------------------------------------------------------------------------------

	'elog-viewer-head1' => 'Error Log Viewer',
	'elog-viewer-head2' => 'Viewing Error Log File',

	//--------------------------------------------------------------------------------------------
	// Win to Unix Converter
	//--------------------------------------------------------------------------------------------

	'w2u-head1' => 'Windows to Unix Converter',
	'w2u-head2' => 'Convert Windows Perl Files',
	'w2u-head3' => 'Converted Windows Perl Files',

	'w2u-txt1' => 'If you have problems executing your cgi scripts on Unix.<br />
         This program will convert cgi scripts from Windows to Unix format Dec(#10#13=>#13).<br>Hex 0D0A to 0A',

	'w2u-txt2' => 'Instruction: <br />After execution you can pick up scripts ready for execution
        on a Unix machine from the \\cgi-bin-unix\\ directory.<br />',

	'w2u-txt3' => 'Files converted: <br />They are located in folder \\cgi-bin-unix\\ ',

        'w2u-convert-button'  => 'Convert',


	//--------------------------------------------------------------------------------------------
	// Server Certificate and Key Generation
	//--------------------------------------------------------------------------------------------
	
	'cert-head1' => 'Server Certificate and Key Generation',
	'cert-head2' => 'Verify Generation',
	'cert-head3' => 'Unable to run Certificate and Key Generation.',
	'cert-head4' => 'Certificate and Key Generation Complete.',

	'cert-txt1' => 'Click on Generate! and follow instructions.',
	'cert-txt2' => 'Services are not allowed to interact with the desktop. <br />You need to run this script manually:',
        'cert-txt3' => 'Alternatively use UniTray.',
	'cert-txt4' => 'Cirtificate location:',
	'cert-txt5' => 'Key location:',

        'cert-confirm-button'  => 'Generate',
	
	//--------------------------------------------------------------------------------------------
	// MySQL restore password
	//--------------------------------------------------------------------------------------------
	
	'mysql-head1' => 'MySQL restore password',
	'mysql-head2' => 'Verify Restore',
	'mysql-head3' => 'MySQL password restored.',

	'mysql-txt1' => 'Click on Restore! Restore will take several seconds.',
	'mysql-txt2' => 'Password restored you can continue using the server..',

        'mysql-confirm-button'  => 'Restore MySQL Password',

	//--------------------------------------------------------------------------------------------
	// Server Security Console
	//--------------------------------------------------------------------------------------------

	'secure1-head' => 'Security Alert!',
	'secure1-sub' => 'Possible Attack',
	'secure1-text-0' => 'IP ADDRESS is not 127.0.0.1, but',
	'secure1-text-1' => 'Note: HTTP_REFERER is',
	'secure1-text-2' => 'To disable this warning set $unisecure to 0 in: /home/admin/www/includes/config.inc.php',

	//--------------------------------------------------------------------------------------------
	// Admin Panel Setup
	//--------------------------------------------------------------------------------------------

	'apsetup-head' => 'Admin Panel Configuration',
	'apsetup-sub-0' => 'User Management',
	'apsetup-text-0' => 'Setup the username and password for the Admin Panel here. Please note that you might have 
	to activate this feature in the /home/admin/www/.htaccess file.',
	'apsetup-user' => 'Username',
	'apsetup-pass' => 'Password',
	'apsetup-change' => 'Change',
	'apsetup-success' => 'The Admin Panel username/password has been changed to the new values:',

	//--------------------------------------------------------------------------------------------
	// Private Server Setup
	//--------------------------------------------------------------------------------------------

	'psetup-head' => 'Private Server Configuration',
	'psetup-sub-0' => 'User Management',
	'psetup-text-0' => 'Setup the username and password for your Private Server here. Please note that you might have 
	to activate this feature in the /www/.htaccess file.',
	'psetup-user' => 'Username',
	'psetup-pass' => 'Password',
	'psetup-change' => 'Change',
	'psetup-success' => 'Your Private Server username/password has been changed to the new values:',

	//--------------------------------------------------------------------------------------------
	// Private Secure Server Setup (SSL)
	//--------------------------------------------------------------------------------------------

	'sslpsetup-head' => 'Private Secure Server Configuration (SSL)',
	'sslpsetup-sub-0' => 'User Management',
	'sslpsetup-text-0' => 'Setup the username and password for your Private Secure Server here. Please note that you might have 
	to activate this feature in the /ssl/.htaccess file.',
	'sslpsetup-user' => 'Username',
	'sslpsetup-pass' => 'Password',
	'sslpsetup-change' => 'Change',
	'sslpsetup-success' => 'Your Private Secure Server username/password has been changed to the new values:',

	//--------------------------------------------------------------------------------------------
	// MySQL Setup
	//--------------------------------------------------------------------------------------------

	'mqsetup-head' => 'MySQL Server Configuration',
	'mqsetup-sub-0' => 'User Management',
	'mqsetup-text-0' => 'Setup the MySQL password here. After changing the MySQL password, please note that you <b>
	must restart both Apache and MySQL servers.</b>',
	'mqsetup-pass' => 'MySQL Password',
	'mqsetup-change' => 'Change',
	'mqsetup-success' => 'Your MySQL password has been changed to the new value:',

	//--------------------------------------------------------------------------------------------
	// Server Security Center
	//--------------------------------------------------------------------------------------------

	'secure-head' => 'Security Center',
	'secure-sub-0' => 'User Management Security',
	'secure-sub-1' => 'Server Security',
	'secure-text-0' => 'This part of the security center will check all user management settings to make sure that 
	everything is set. It will tell you if something needs to be changed.',
	'secure-text-1' => 'SECURITY MSG',
	'secure-text-2' => 'STATUS',
	'secure-text-3' => 'Admin Panel',
	'secure-text-X' => 'If the username/password is still set to root, then you probably need to change this 
	by clicking the UNSECURE link.',
	'secure-text-sslX' => 'Unsecure indicates you do not have a server certificate or key. Create new ones by clicking the UNSECURE link.',
	'secure-secure' => 'SECURE',
	'secure-unsecure' => 'UNSECURE',
	'secure-text-7' => 'If the password is still set to root, then you probably need to change this by clicking the UNSECURE link.',
	'secure-text-8' => 'This part of the security center will check and make sure the server settings are appropriate and set corectly.',
	'secure-text-9' => 'PHP Safe Mode',
	'secure-text-10' => 'This checks to see if PHP is running in SAFE MODE. Now, PHP does not have to run in SAFE MODE, but 
	if you want the extra security, you can set it by clicking on the UNSECURE link.',
	'secure-text-p' => 'Personal Server',
	'secure-text-sslp' => 'Personal Secure Server (SSL)',
	'secure-text-sslcertp' => 'Server Certificate and Key (SSL)',
	'secure-text-s' => 'MySQL Server',
	'secure-text-11' => 'Admin Panel Access',
	'secure-text-12' => 'Server Access',
	'secure-text-12ssl' => 'Server Access (SSL)',
	'secure-text-13' => 'While this is another feature that is not throughly important as other features are in place against
	outside access to the Admin Panel, this checks to see if your Admin Panel is secured using the Auth method. Please change this 
	by editing the '.$us_apanel.'/.htaccess file.',
	'secure-text-14' => 'If you are running your server in Production Mode, Skip this one. If not and you would like to
	add more security to the server by blocking it using the Auth method, then change this in by editing the '.$us_www.'/.htaccess file.',
	'secure-text-14ssl' => 'If you are running your server in Production Mode, Skip this one. If not and you would like to
	add more security to the server by blocking it using the Auth method, then change this in by editing the '.$us_ssl.'/.htaccess file.',
	'secure-view' => 'Local View',
	'secure-look' => 'Due to the fact that some PC\'s have a different hostname set rather than localhost, we use the IP method here. This
	checks to make sure that you are viewing the Admin Panel (this) from local.',
);  

# Beta Feature, Currently For Debugging Only
#array2table($US, true);
?>