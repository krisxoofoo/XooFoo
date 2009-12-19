<?php
// === Get MySQL Port =========================================================
// Get MySQL Port from configuration file

  $path = realpath(dirname($_SERVER['config.inc.php'])); 
  $pathArray = explode("\\home",$path);
//  $pathArray = explode("\\home",__DIR__);                 // Path to UniServer 

  $my_ini_file = $pathArray[0]."\usr\local\mysql\my.ini"; // Path to my ini file

  $file = fopen($my_ini_file, "r") or exit("Unable to open file!"); // open ini
  while(!feof($file)){
   $line = fgets($file);                         // Get line
   if (stristr($line,"port=")){                  // Search for string
     $tempArray = explode("=",$line);            // Split at equals 
     $tempArray[1]= ltrim( $tempArray[1], " " ); // clean left
     $tempArray[1]= rtrim( $tempArray[1], " " ); // clean right
     $port_ini = $tempArray[1];
     break;
   }
  }
  fclose($file); // END Get MySQL port number
// ===================================================== END Get MySQL Port ===

// === Get MySQL Password ======================================================
// Get MySQL Password from file

  $password_file = $pathArray[0]."\home\admin\www\mysql_password"; // Path to file

  $fh = fopen($password_file, 'r') or exit("Unable to open file!"); // Open file
  $password = fread($fh, filesize($password_file));   // Read data into variable
  fclose($fh);                                         // close file handle
// ================================================= END Get MySQL Password ===

/* Webserver upload/save/import directories */
 
$cfg['UploadDir'] = $pathArray[0]."\etc\phpmyadmin";   // Directory for uploaded files 
$cfg['SaveDir']   = $pathArray[0]."\etc\phpmyadmin";   // Directory where phpMyAdmin can save exported data
$cfg['docSQLDir'] = $pathArray[0]."\etc";              // Directory for docSQL imports,
$cfg['TempDir']   = $pathArray[0]."\tmp";              // Directory where phpMyAdmin can save temporary files.


/* Servers configuration */
$i = 0;

/* Server: localhost [1] */
$i++;

/* Authentication section */
$cfg['Servers'][$i]['auth_type']       = 'config';  // Authentication method (config, http or cookie based)?
$cfg['Servers'][$i]['user']            = 'root';    // MySQL user
$cfg['Servers'][$i]['password']        = $password; // MySQL password (only needed with 'config' auth_type)
$cfg['Servers'][$i]['AllowNoPassword'] = false;     // Must use password

/* Server parameters */
$cfg['Servers'][$i]['verbose']      = 'Uniform Server'; // Verbose name for this host - leave blank to show the hostname
$cfg['Servers'][$i]['host']         = '127.0.0.1';      // MySQL hostname or IP address
$cfg['Servers'][$i]['port']         = $port_ini;        // Port set in ini See above
$cfg['Servers'][$i]['socket']       = '';               // Leave blank for default socket
$cfg['Servers'][$i]['connect_type'] = 'tcp';            // How to connect to MySQL server ('tcp' or 'socket')
$cfg['Servers'][$i]['extension']    = 'mysqli';         // MySQL extension to use ('mysql' or 'mysqli')
$cfg['Servers'][$i]['compress']     = false;            // No compression


/* PMA User advanced features */
$cfg['Servers'][$i]['controluser']    = 'pma';
$cfg['Servers'][$i]['controlpass']    = '';

/* Advanced features */
$cfg['Servers'][$i]['pmadb']           = 'phpmyadmin';       // Database used for Relation, Bookmark and PDF Features
                                                             // (see scripts/create_tables.sql) - leave blank for no support
$cfg['Servers'][$i]['bookmarktable']   = 'pma_bookmark';     // Bookmark table
$cfg['Servers'][$i]['relation']        = 'pma_relation';     // table to describe the relation between links (see doc)
$cfg['Servers'][$i]['table_info']      = 'pma_table_info';   // table to describe the display fields
$cfg['Servers'][$i]['table_coords']    = 'pma_table_coords'; // table to describe the tables position for the PDF schema
$cfg['Servers'][$i]['pdf_pages']       = 'pma_pdf_pages';    // table to describe pages of relationpdf
$cfg['Servers'][$i]['column_info']     = 'pma_column_info';  // table to store column information
$cfg['Servers'][$i]['history']         = 'pma_history';      // table to store SQL history
$cfg['Servers'][$i]['designer_coords'] = 'pma_designer_coords';

/* End of servers configuration */

/* Other core phpMyAdmin settings */
$cfg['ServerDefault'] = 1;          // Select default server (0 = no default server)
$cfg['blowfish_secret'] = 'us123';  // Passphrase required for 'cookie' auth_type

$cfg['AllowAnywhereRecoding']       = true;
$cfg['DefaultCharset']              = 'utf-8';
$cfg['DefaultLang']                 = 'en-utf-8';   // Default language to use, if not browser-defined or user-defined
$cfg['DefaultConnectionCollation']  = 'utf8_general_ci';

/* Other core phpMyAdmin settings */

$cfg['ExecTimeLimit']           = 600;  // maximum execution time in seconds (0 for no limit)
$cfg['AllowUserDropDatabase']   = TRUE; // show a 'Drop database' link to normal users
$cfg['LoginCookieValidity']     = 1440; // validity of cookie login (in seconds)
$cfg['LeftFrameDBSeparator']    = '_';  // the separator to sub-tree the select-based light menu tree
$cfg['LeftFrameTableSeparator'] = '_';  // Which string will be used to generate table prefixes
$cfg['ShowTooltipAliasDB']      = TRUE; // if ShowToolTip is enabled, this defines that table/db comments
$cfg['ShowTooltipAliasTB']      = TRUE; // are shown (in the left menu and db_details_structure) instead of

// In the main frame, at startup...
$cfg['ShowPhpInfo']           = TRUE;   // information" and "change password" links for
$cfg['ShowChgPassword']       = TRUE;   // simple users or not
$cfg['ShowAll']               = TRUE;   // allows to display all the rows
$cfg['MaxRows']               = 300;    // maximum number of rows to display

/* Export defaults */

$cfg['Export']['asfile']                    = TRUE;
$cfg['Export']['onserver']                  = TRUE;
$cfg['Export']['file_template_table']       = '__TABLE__-tabel_%Y-%m-%d';
$cfg['Export']['file_template_database']    = '__DB__-db_%Y-%m-%d';
$cfg['Export']['file_template_server']      = '__SERVER__-mysql_%Y-%m-%d';

$cfg['Export']['csv_enclosed']              = '&quot;';

$cfg['Export']['sql_if_not_exists']         = FALSE;
$cfg['Export']['sql_columns']               = FALSE;
$cfg['Export']['sql_extended']              = FALSE;


