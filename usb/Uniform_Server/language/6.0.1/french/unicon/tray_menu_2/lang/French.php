<?php
/*
####################################################################
# Name: The Uniform Server Language File for Tray Menu
# Developed By: The Uniform Server Development Team
# Modified Last By: Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# V1.0 25-6-2010
####################################################################
*/

$TM = array(
'title'        => 'Uniform Server',
'close_button' => 'Fermer',

//-----------------------------------------------------------------------------
// Start up pre-check Installation
//-----------------------------------------------------------------------------

'pre_location_title'   => 'Problème d\'installation',
'pre_location_str'     => '
ll semble que vous avez copié le fichier UniTray2 dans un mauvais dossier !
Le dossier correct est : UniServer\\unicon\\',

//-----------------------------------------------------------------------------
// Start up pre-check Space in path
//-----------------------------------------------------------------------------

'space_detected_title'   => 'Un espace a été détecté !',
'space_detected_str'     => '
Un espace a été détecté dans le nom d\'un dossier d\'UniServer

Les espaces ne sont pas permis dans le nom des dossiers.
Corrigez ceci s\'il vous plaît, pour le bon fonctionnement de votre serveur web.

Les raisons de cette restriction proviennent de l\'exécution d\'applications héritées.',

//-----------------------------------------------------------------------------
// Start up pre-check Port in use check
//-----------------------------------------------------------------------------

'port_in_use_title'   => 'Attention ! ces ports sont en cours d\'utilisation !',
'port_in_use_str1'    => 'Port Apache',
'port_in_use_str2'    => 'In use by application',
'port_in_use_str3'    => 'Port Apache SSL',
'port_in_use_str4'    => 'Port MySQL',
'port_in_use_str5'    => '
To start Uniform Server above ports must be free.
Either stop-uninstall offending application.
Or move Uniform Server to different ports.',

//-----------------------------------------------------------------------------
// Start up change MySQL password - Window
//-----------------------------------------------------------------------------

'mysql_password1_title'    => 'Changez le mot de passe MySQL !',
'mysql_password1_str1'      => '
For a development server there is no real need to 
change the MySQL password although it is good
practice to do so.

If you are going to use your servers for production
or put them on the Internet or an intranet it is
imperative to set a new MySQL password. Default
password is known hence your server is compromised.

Click YES to change password (opens a new window)
Or NO to skip password setup.',

'mysql_password2_title'   => 'Mot de passe MySQL',
'mysql_password2_str1'    => 'Nouveau mot de passe MySQL',
'mysql_password2_str2'    => 'Changer le mot de passe MySQL',
'mysql_password2_str3'    => ' Entrez le nouveau mot de passe MySQL',
'mysql_password2_str4'    => ' Lancement du serveur MySQL',
'mysql_password2_str5'    => ' Impossibilité de lancer le serveur MySQL',
'mysql_password2_str6'    => ' Vérification de blocage de port',
'mysql_password2_str7'    => ' Le port MySQL est bloqué',
'mysql_password2_str8'    => ' Impossibilité de se connecter au serveur MySQL',
'mysql_password2_str9'    => ' Impossibilité de sélectionner la base de données',
'mysql_password2_str10'   => ' Mot de passe mis à jour',
'mysql_password2_str11'   => ' 
Il y a eu un problème !
Les changements n\'ont pas été pris en compte.',

//-----------------------------------------------------------------------------
// Start up change Apanel name and password
//-----------------------------------------------------------------------------

'apanel_name_password1_title'    => 'Identifiant et mot de passe pour le panneau d\'Administration !',
'apanel_name_password1_str1'      => '
For a development server there is no real need to
change Apanel\’s name and password. Having to
enter them becomes very annoying when testing.


If you are going to use your servers for production
or put them on the Internet or an intranet it is
imperative to set a new name and password. Defaults
are known hence your server is compromised and 
exposed to cross site-scripting attacks 

Click YES to change name and password
(opens a new window)
Or NO to skip.',

'apanel_name_password2_title'   => 'Identifiant et mot de passe pour le panneau d\'Administration',
'apanel_name_password2_str1'    => 'Identifiant',
'apanel_name_password2_str2'    => 'Mot de passe',
'apanel_name_password2_str3'    => 'Changer l\'identifiant et le mot de passe',
'apanel_name_password2_str4'    => ' Entrez le nouvel identifiant et mot de passe',

'apanel_name_password3_title'   => 'Identifiant ou mot de passe "vide"',
'apanel_name_password3_str1'    => 'Vous ne pouvez utiliser "root" pour l\'identifiant ou le mot de passe',
'apanel_name_password3_str2'    => 'Un identifiant et un mot de passe sont nécessaire',
'apanel_name_password3_str3'    => ' Le fichier du mot de passe a été mis à jour.',
'apanel_name_password3_str4'    => ' Protection activée par fichier .htaccess',

//-----------------------------------------------------------------------------
// Startup options skipped
//-----------------------------------------------------------------------------

'startup_options_skipped_title'    => 'Start-up options skipped!',
'startup_options_skipped_str'      => '
You skipped one or more start-up configuration options.
Next time you start UniTray you will again be prompted.

You can disable prompting in UniTray.ini by setting
nag  = "false" 

Alternatively:
Click YES to automatically disable prompting
Click NO to be prompted next time you start UniTray',

//-----------------------------------------------------------------------------
// Run both servers as a program
//-----------------------------------------------------------------------------

'cmd_server_pall-title' => 'Start/Stop Both Servers',
'cmd_server_pall-str'   => '
This menu item is unavailable for the following reasons:

1 Only Apache running
2 Or only MySQL running
3 Or Apache or MySQL running as a service

Menu item is enabled when

1 Both servers are stopped
2 or both servers running as a standard program',

//-----------------------------------------------------------------------------
// Run Apache server as a program
//-----------------------------------------------------------------------------

'cmd_server_papache-title' => 'Start/Stop Apache Server',
'cmd_server_papache-str'   => '
This menu item is unavailable for the following reason:

1 Apache server running as a service

Menu item is enabled when

1 Apache service is stopped or uninstalled',

//-----------------------------------------------------------------------------
// Run MySQL server as a program
//-----------------------------------------------------------------------------

'cmd_server_pmysql-title' => 'Start/Stop MySQL Server',
'cmd_server_pmysql-str'   => '
This menu item is unavailable for the following reason:

1 MySQL server running as a service

Menu item is enabled when

1 MySQL service is stopped or uninstalled',

//-----------------------------------------------------------------------------
// Run both servers as a service
//-----------------------------------------------------------------------------

'cmd_server_sall-title' => 'Install/Start or Stop/Uninstall Both Services',
'cmd_server_sall-str'   => '
This menu item is unavailable for the following reasons:

1 Only Apache running as a service
2 Or only MySQL running as a service
3 Or Apache or MySQL running as a program

Menu item is enabled when

1 Both servers are stopped
2 or both servers running as a service',

//-----------------------------------------------------------------------------
// Run Apache server as a service
//-----------------------------------------------------------------------------

'cmd_server_sapache-title' => 'Install/Start - Stop/Uninstall Apache Service',
'cmd_server_sapache-str'   => '
This menu item is unavailable for the following reason:

1 Apache server running as a standard program

Menu item is enabled when

1 Apache is not running as a standard program',

//-----------------------------------------------------------------------------
// Run MySQL server as a service
//-----------------------------------------------------------------------------

'cmd_server_smysql-title' => 'Install/Start - Stop/Uninstall MySQL Service',
'cmd_server_smysql-str'   => '
This menu item is unavailable for the following reason:

1 MySQL server running as a standard program

Menu item is enabled when

1 MySQL is not running as a standard program',

//-----------------------------------------------------------------------------
// Uniform server status
//-----------------------------------------------------------------------------
'us_server_status_intro-title'    => 'Server status introduction',
'us_server_status_intro-str1'     => '
This script takes several seconds to run please be patient 

Note: Two tests require Internet access. 
If challenged by your firewall please allow Internet access.

Test1: Attempts to find your IP address as seen from the Internet

Test2: Uses the above IP to determine if your servers are
accessible from the Internet. If your servers are behind a firewall
configure port forwarding. Test2 performs a port forwarding check,
which is independent of your main server.',

'us_server_status-title'  => 'Current Uniform Server Status',
'us_server_status-str1'   => ' Your Internet IP Address = ',
'us_server_status-str2'   => ' Accessible from Internet = ',
'us_server_status-str3'   => ' Cron run status          = ',
'us_server_status-str4'   => ' PHP INI: php.ini file    = ',
'us_server_status-str5'   => ' APACHE SERVER:',
'us_server_status-str6'   => ' Apache port              = ',
'us_server_status-str7'   => ' Apache SSL port          = ',
'us_server_status-str8'   => ' Apache executable name   = ',
'us_server_status-str9'   => ' Apache service name      = ',
'us_server_status-str10'  => ' Apache SSL server        = ',
'us_server_status-str11'  => ' Apache run status        = ',
'us_server_status-str12'  => ' Apache install status    = ',
'us_server_status-str13'  => ' MySQL SERVER:',
'us_server_status-str14'  => ' MySQL port               = ',
'us_server_status-str15'  => ' MySQL executable name    = ',
'us_server_status-str16'  => ' MySQL service name       = ',
'us_server_status-str17'  => ' MySQL run status         = ',
'us_server_status-str18'  => ' MySQL install status     = ',
'us_server_status-str19'  => ' PORT STATUS:',
'us_server_status-str20'  => ' Apache port              = ',
'us_server_status-str21'  => ' Apache SSL port          = ',
'us_server_status-str22'  => ' MySQL port               = ',

'us_server_status-str1a'   => 'Not connected or error!',
'us_server_status-str2a'   => 'YES',
'us_server_status-str2a'   => 'NO!',
'us_server_status-str3a'   => 'Running',
'us_server_status-str3b'   => 'Not running',
'us_server_status-str4a'   => 'Production',
'us_server_status-str4b'   => 'Development',
'us_server_status-str10a'  => 'Enabled',
'us_server_status-str10b'  => 'Disabled',
'us_server_status-str11a'  => 'Running',
'us_server_status-str11b'  => 'Not Running',
'us_server_status-str12a'  => 'Installed as a service',
'us_server_status-str12b'  => 'Installed as a standard program',
'us_server_status-str12c'  => 'Free to install',
'us_server_status-str12d'  => 'Undefined!',
'us_server_status-str17a'  => 'Running',
'us_server_status-str17b'  => 'Not Running',
'us_server_status-str18a'  => 'Installed as a standard program',
'us_server_status-str18b'  => 'Installed as a service',
'us_server_status-str18c'  => 'Free to install',
'us_server_status-str18d'  => 'Undefined!',
'us_server_status-str20a'  => 'In use by this server',
'us_server_status-str20b'  => 'Port Blocked',
'us_server_status-str20c'  => 'In use by another program.',
'us_server_status-str20d'  => 'Is free to use',

//-----------------------------------------------------------------------------
// Apache Syntax check
//-----------------------------------------------------------------------------

'us_apache_syntax-title' => 'Apache Syntax Check',
'us_apache_syntax-str'   => '
Apache configuration syntax check.
Result OK',

//-----------------------------------------------------------------------------
// Run Portable Cron
//-----------------------------------------------------------------------------

'cmd_portable_cron-title' => 'Start/Stop Portable Cron',
'cmd_portable_cron-str'   => '
This menu item is unavailable for the following reason:

1 Apache server not running as a standard program

Menu item is enabled when

1 Apache server is running as a standard program

Note: Edit Cron configuration to enable or add itens to be run. ',
	
//-----------------------------------------------------------------------------
// Apanel Menu Item
//-----------------------------------------------------------------------------

'cmd_apanel-title' => 'Apanel Unavailable',
'cmd_apanel-str'   => '
To enable and run this menu item
please start Apache server.',

//-----------------------------------------------------------------------------
// phpMyAdmin Menu Item
//-----------------------------------------------------------------------------

'cmd_phpmyadmin-title' => 'phpMyAdmin Unavailable',
'cmd_phpmyadmin-str'   => '
To enable and run this menu item:
Please start both Apache and MySQL servers.',

//-----------------------------------------------------------------------------
// WWW root  Display in browser
//-----------------------------------------------------------------------------

'cmd_www_root-title' => 'WWW root Unavailable',
'cmd_www_root-str'   => '
To enable and run this menu item:
Please start Apache server.',

//-----------------------------------------------------------------------------
// SSL root  Display in browser
//-----------------------------------------------------------------------------

'cmd_ssl_root-title' => 'SSL root Unavailable',
'cmd_ssl_root-str'   => '
This menu item is unavailable for the following reason:

1 Apache server not running
2 Or No server certificate 

To create a server certificate
1 Select: Advanced server features 1
2 Run:    Server Certificate and Key Generator',

//-----------------------------------------------------------------------------
// Apache Server Information Menu Item
//-----------------------------------------------------------------------------

'cmd_server_information-title' => 'Apache Server Information Unavailable',
'cmd_server_information-str'   => '
To enable and run this menu item
please start Apache server.',

//-----------------------------------------------------------------------------
// Apache Server Status Menu Item
//-----------------------------------------------------------------------------

'cmd_server_status-title' => 'Apache Server Status Unavailable',
'cmd_server_status-str'   => '
To enable and run this menu item
please start Apache server.',

//-----------------------------------------------------------------------------
// PHP Information Menu Item
//-----------------------------------------------------------------------------

'cmd_php_info-title' => 'PHP Information Unavailable',
'cmd_php_info-str'   => '
To enable and run this menu item
please start Apache server.',

//-----------------------------------------------------------------------------
// MySQL Command Prompt
//-----------------------------------------------------------------------------

'cmd_mysql_cmd_prompt-title' => 'MySQL Command Prompt Unavailable',
'cmd_mysql_cmd_prompt-str'   => '
To run a MySQL Command Prompt please start MySQL server.
Either as a standard program or service.',

//-----------------------------------------------------------------------------
// MySQL password restore
//-----------------------------------------------------------------------------

'mysql_restore_title'    => 'MySQL Restore Password!',
'mysql_restore_str1'    => '
Restores user name to root
Restores password to root.',
'mysql_restore_str2'     => 'Restore MySQL Password.',
'mysql_restore_str3'     => ' Click button to restore',
'mysql_restore_str4'     => ' Stopping MySQL service',
'mysql_restore_str5'     => ' Killing MySQL program',
'mysql_restore_str6'     => ' Failed to stop MySQL',
'mysql_restore_str7'     => ' Starting MySQL with skip grant',
'mysql_restore_str8'     => ' Failed to start MySQL',
'mysql_restore_str9'     => ' Port blocked',
'mysql_restore_str10'    => ' Restoring password',
'mysql_restore_str11'    => ' Unable to connect to server',
'mysql_restore_str12'    => ' Failed to select database',
'mysql_restore_str13'    => ' Problem with MySQL query',
'mysql_restore_str14'    => ' Password restored no errors',

'mysql_restore2_title'   => 'MySQL Restore Password!',
'mysql_restore2_str1'    => ' Password restored',
'mysql_restore2_str2'    => ' 
There was a problem!
No changes made.',

//-----------------------------------------------------------------------------
// MySQL backupt
//-----------------------------------------------------------------------------

'cmd_mysql_backup-title' => 'MySQL Backup Unavailable',
'cmd_mysql_backup-str'   => '
To run a MySQL Backup please start MySQL server.
Either as a standard program or service.',

//-----------------------------------------------------------------------------
// Move servers
//-----------------------------------------------------------------------------

'move_servers1-title' => 'Move Servers',
'move_servers1-str'    => '
This will move servers as follows:

1] Ports are changed
2] Executable names are changed
3] Service names are changed
4] Dependent files are changed to match

A new window will open.
To accept defaults press enter
Alternatively to select desired number press
increment and then enter.

Do you wish to continue?.',

'move_servers2-title' => 'Move Servers',
'move_servers2-str1'   => '--- OLD ---',
'move_servers2-str2'   => '--- NEW ---',


'move_servers2-str3'   => 'Apache port',
'move_servers2-str4'   => 'SSL port ',
'move_servers2-str5'   => 'MySQL port',
'move_servers2-str6'   => 'Apache executable name',
'move_servers2-str7'   => 'MySQL executable name',
'move_servers2-str8'   => 'Apache service name',
'move_servers2-str9'   => 'MySQL  service name',
'move_servers2-str10'  => 'UniTray executable name',
'move_servers2-str11'  => 'Disable eAccelerator ',

'move_servers2-str14'  => 'Reload',
'move_servers2-str15'  => 'Increment',
'move_servers2-str16'  => 'RUN',

'move_servers2-str17'  => ' To use defaults click Run ',
'move_servers2-str18'  => ' Note: Icon, ports and names increments',

//Generic icon

'move_servers3-title' => 'Predefined icons',
'move_servers3-str11'  => '
Please note you have exceed predefined icons (1-9)
A generic icon will be created in folder:',
'move_servers3-str12'  => '
You can edit this icon or create a new one.
New icons remember to name it as above.',

//Server was moved

'move_servers4-title'  => 'Server was moved',
'move_servers4-str11'  => ' Server successfully moved.',

//Validation

'move_servers5-title' => 'Failed Validation',
'move_servers5-str1'  => ' A feiled was empty!',
'move_servers5-str2'  => '
Invalid port number!
Valid port range 0 to 65535',
'move_servers5-str3'  => ' Ports cannot be identical',
'move_servers5-str4'  => ' You cannot change name only digits',

// Initial start

'move_servers6-title' => 'Move Servers multi-server operation',
'move_servers6-str1'  => '
This menu item is Unavailable because:

Apache running either as a program or service
MySQL running either as a program or service 

To run this menu item please stop both servers
Or Unistall both server services. 
',

//-----------------------------------------------------------------------------
// Server certificate and key generator
//-----------------------------------------------------------------------------

'cert_key1_title'    => 'Server certificate and key generator',

'cert_key1_str1'     => ' C: Country',
'cert_key1_str2'     => 'ST: State or province name',
'cert_key1_str3'     => ' L: Locality',
'cert_key1_str4'     => ' O: Orgaization name',
'cert_key1_str5'     => 'OU: Orgaization unit name',
'cert_key1_str6'     => 'CN: Common name',
'cert_key1_str7'     => 'EA: Email address',
'cert_key1_str8'     => 'Create new key and cert',
'cert_key1_str9'     => 'Defaults',
'cert_key1_str10'    => ' Click Create new key and cert - Defaults are OK',

'cert_key2_title'    => 'CA Detected!',
'cert_key2_str1'     => '
CA Check

It looks like you are using your own CA to avoid overwriting your
current server certificate and key this script has terminated.

To create a new server certificate and key use the CA script.',

'cert_key3_title'    => 'A server certificate exists!',
'cert_key3_str1'     => '
Certificate check

You have already created a server certificate and key!
Are you sure you want to delete and create new ones?.',

'cert_key4_title'    => 'New certificate and key installed',
'cert_key4_str1'     => 'Creating a private key and signing request',
'cert_key4_str2'     => 'Copying new certificate and key to Server',
'cert_key4_str3'     => '
Certificate and key installed on Server

Location:   
Certificate:  usr/local/apache2/conf/ssl.crt/server.crt
Key:          usr/local/apache2/conf/ssl.key/server.key 

Certificate Signing Request location:
UniServer\unicon\tray_menu_2/server.csr 


You must now restart the servers to enable the new configuration.',

//-----------------------------------------------------------------------------
// PHP switch production development
//-----------------------------------------------------------------------------

'php_ini1_title'   => 'PHP.ini Configuration file',

'php_ini1_str1'    => 'php.ini changed to Production',
'php_ini1_str2'    => 'php.ini changed to Development',

//-----------------------------------------------------------------------------
// Perl Control
//-----------------------------------------------------------------------------

'perl_control1_title'   => 'Perl not installed',

'perl_control1_str1'    => '
Perl not installed

Download one of the following plugins from SourceForge:

Mini Perl V5.1_mini_perl.exe
Full Perl V5.1_full_perl.exe

Once loaded this menu item will be available.',

'perl_control2_title'   => 'Perl Control',
'perl_control2_str1'    => 'Force Perl Shebang Update',
'perl_control2_str2'    => 'Perl win2unix + Shebang Update',
'perl_control2_str3'    => 'View Index page',
'perl_control2_str4'    => ' Select an option',

'perl_control3_title'   => 'Perl Shebang Updated',
'perl_control3_str1'    => '
Updated shebang in files: *.pl and *.cgi
For folder UniServer\cgi-bin and all sub-folders.',
'perl_control3_str2'    => ' Can not view page Apache not running',
'perl_control3_str3'    => ' index.pl page not found?',

'perl_control4_title'   => 'win2unix complete',
'perl_control4_str1'    => '
New folder created UniServer/cgi-bin-unix
Copied all folders and files from cgi-bin to cgi-bin-unix

Updated end of lines to Unix format
Updated shebang in files: *.pl and *.cgi to Unix
',

//-----------------------------------------------------------------------------
// Passwords htaccess and put servers on-line window
//-----------------------------------------------------------------------------

'htaccess1_title'   => 'Passwords htaccess local remote access',

'htaccess1_frame_1' => ' SERVER ROOT WWW Folder UniServer\www ',
'htaccess1_frame_2' => ' SERVER ROOT SSL Folder UniServer\ssl ',
'htaccess1_frame_3' => ' APANEL Folder UniServer\home\admin\www ',

'htaccess1_str1'    => 'Name:',
'htaccess1_str2'    => 'Password:',
'htaccess1_str3'    => 'Change name password',
'htaccess1_str4'    => 'Change >>',
'htaccess1_str5'    => 'Test',

'htaccess1_str6'    => 'Password Disabled',
'htaccess1_str7'    => 'Password Enabled',
'htaccess1_str8'    => 'Local Access',
'htaccess1_str9'    => 'On-line Access',
'htaccess1_str10'   => 'View in browser',
'htaccess1_str11'   => 'On-line access',

'htaccess2_title'   => 'Put Servers On-line. Optionally Password protect',
'htaccess2_str1'    => '
Overview:
This page allows you to put your server on-line or restrict access.
to local host (default). Optionally set a name and password.
restricting access to root www root ssl and Apanel.

1] Button “E” allows you to directly edit each “.htaccess file.
   Alternatively use short cut buttons on the right

2] After entering a name and password press “Change name
   password” button this updates corresponding password file

3] Enable and disable password protection
   Use button on right to toggle between enable and disable
   Enabled: A name and password is required to access server
   Disabled: Authentication not required.

4] Local or on-line access.
   Use button on right to toggle between server access 
   Local access: Restricts server access to local user only.
   On-Line: Any Internet user can access server.

NOTE:
Setting Apanel to on-line forces a name/password to be used.',

'htaccess3_title'   => 'Blank Name or Password',
'htaccess3_str1'    => 'Both a name and password required',

'htaccess4_title'   => 'Name Password Updated',
'htaccess4_str1'    => '
1] Name and password have been updated

2] Enable and disable password protection\n";
   Use button on right to toggle between enable and disable
   Enabled:  A name and password is required to access server
   Disabled: No name and password required to access server

3] Local or on-line access.\n";
   Use button on right to toggle between enable and disable
   Local access: Restricts server access to local user only.
   On-Line:      Any Internet user can access server.',

'htaccess5_title'   => 'Name Password Updated - Apanel',
'htaccess5_str1'    => '
1] Name and password have been updated

2] Enable and disable password protection
   Use button on right to toggle between enable and disable
   Enabled:  A name and password is required to access server
   Disabled: No name and password required to access server

3] Local or on-line access.
   Use button on right to toggle between server access 
   Local access: Restricts server access to local user only.
   On-Line: Any Internet user can access server.

NOTE:
Step 3 selecting on-line access forces a name/password to be used.
You can override this restriction. At your own risk',

'htaccess6_title'   => 'Apache not running',
'htaccess6_str1'    => '
Cannot display in browser!
Please start Apache server.',

'htaccess7_title'   => 'SSL Not Enabled',
'htaccess7_str1'    => '
Cannot display in browser!
Please enable SSL',

//-----------------------------------------------------------------------------
// VHOST Window
//-----------------------------------------------------------------------------

'vhost1_title'   => 'Virtual Host',

'vhost1_frame_1' => ' Virtual Host Setup ',
'vhost1_frame_2' => '  List of Hosts  ',

'vhost1_str1'    => 'Host Name:',
'vhost1_str2'    => 'Document Root:',
'vhost1_str3'    => 'Additions:',
'vhost1_str4'    => 'Update Vhost',
'vhost1_str5'    => 'Create Vhost',
'vhost1_str6'    => 'Cancel',
'vhost1_str7'    => 'Delete Vhost',
'vhost1_str8'    => 'Edit Vhost',
'vhost1_str9'    => 'Browser View',
'vhost1_str10'   => 'Cancel',

'vhost1_str11'   => 'Folder',
'vhost1_str12'   => 'Error Log ',
'vhost1_str13'   => 'Custom Log',
'vhost1_str14'   => ' Vhost Updated',
'vhost1_str15'   => ' You can create a new Vhost',
'vhost1_str16'   => ' Selected Vhost deleted',
'vhost1_str17'   => ' Please edit or add additionl information and press Update button',
'vhost1_str18'   => ' Viewing host  ',

//-- pop-ups
'vhost2_title'   => 'Host Name',
'vhost2_str1'    => '
Host name is the address you type into
browser to access your web site
excluding the http:// part.

For example 1:
Full Internet address: http://www.me.com
Host name: www.me.com

For example 2:
Full Internet address: http://uniserver.co.uk
Host name: uniserver.co.uk',

'vhost3_title'   => 'Document Root',
'vhost3_str1'    => '
Document root is the full path to a folder.
Apache will serve a host web site from this
folder.

The script will replace any backward slashes
with forward slashes.

Either type the path in alternatively, use
the “Folder” button. In the popup navigate
to and select required folder click
OK to accept.',

'vhost4_title'   => 'Additional Apache Directives',
'vhost4_str1'    => '
Additional Apache Directives
Each Vhost inherits settings from the mai
server configuration.

Placing these directives in a Vhost will
override main servers settings allowing each
Vhost to be indecently tailored.

For example:  error_log etc.

Example 2: You may require code between the dotted lines:.\

<VirtualHost *:80>
    ServerName my_domain.com
    DocumentRoot "D:/websites/site1"
----------------------------------------------------
<Directory "D:/websites/site">
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Order allow,deny
    Allow from all
</Directory>
----------------------------------------------------
</VirtualHost>',

'vhost5_title'   => 'Blank Host Name',
'vhost5_str1'    => 'Please enter a host name',

'vhost6_title'   => 'View in browser',
'vhost6_str1'    => '
To view site
Please restart Apache',

'vhost5_title'   => 'Blank Host Name',
'vhost5_str1'    => 'Please enter a host name',

'vhost7_title'   => 'Main Root Foler',
'vhost7_str1'    => '
You cannot create another main server root folder.
Either add a new folder to the main root folder
Or select or enter a new path',

'vhost8_title'   => 'Blank Root folder',
'vhost8_str1'    => 'Please enter a root folder',

'vhost9_title'   => 'Delete Root Folder',
'vhost9_str1'    => '
Would you like to delete
The associated root folder for this site?

Folder',

'vhost10_title'   => 'Apache not running',
'vhost10_str1'    => '
Cannot display host in browser!
Please start Apache server',

'vhost11_title'   => 'No Selection',
'vhost11_str1'    => '
Please select a host and
then press “Browser View"',

); //END 
?>