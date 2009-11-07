<?php
/**
 * Sets the php error reporting - Please do not change this line!
 */
if (!isset($old_error_reporting)) {
    error_reporting(E_ALL);
    @ini_set('display_errors', '1');
}

/**
 * Your phpMyAdmin URL.
 */
$cfg['PmaAbsoluteUri'] = (!empty($HTTPS) ? 'https' : 'http') . '://' . $_SERVER['SERVER_NAME'] . (!empty($_SERVER['SERVER_PORT']) ? ':' . $_SERVER['SERVER_PORT'] : '') . substr($_SERVER['SCRIPT_NAME'], 0, strrpos($_SERVER['SCRIPT_NAME'], '/')+1);
#$cfg['PmaAbsoluteUri'] = $_SERVER['HTTP_HOST'] . '/apanel/phpMyAdmin/';

/**
 * Disable the default warning that is displayed on the DB Details Structure page if
 * any of the required Tables for the relationfeatures could not be found
 */
$cfg['PmaNoRelation_DisableWarning']  = FALSE;

/**
 * The 'cookie' auth_type uses blowfish algorithm to encrypt the password. If
 * at least one server configuration uses 'cookie' auth_type, enter here a
 * passphrase that will be used by blowfish. The maximum length seems to be 46
 * characters.
 */
$cfg['blowfish_secret'] = '';

// === Get MySQL Port ftom configuration file
// MPG When run as a service Disk ENV will not be set. However
// we do not know if a user placed the server in sub-folders
// hence drive must include sub-folders 
  $path = realpath(dirname($_SERVER['config.inc.php'])); 
  $pathArray = explode("\\home",$path); 
  $drive="$pathArray[0]"; //drive letter and any sub-folders 
  $drive=str_replace("\\","/",$drive); //change backslash to forward slash
  $my_cnf_file = "$drive/usr/local/mysql/my.cnf";                 // MySQL configuration file

  $file = fopen($my_cnf_file, "r") or exit("Unable to open file!");

  while(!feof($file)){
   $line = fgets($file);                         // Get line
   if (stristr($line,"port=")){                  // Search for string
     $tempArray = explode("=",$line);            // Split at equals 
     $tempArray[1]= ltrim( $tempArray[1], " " ); // clean left
     $tempArray[1]= rtrim( $tempArray[1], " " ); // clean right
     break;
   }
  }
  fclose($file); // END Get MySQL port number
// === END Get MySQL Port ftom configuration file


/**
 * Server(s) configuration
 */
$i = 0;
// The $cfg['Servers'] array starts with $cfg['Servers'][1].  Do not use $cfg['Servers'][0].
// You can disable a server config entry by setting host to ''.
$i++;
$cfg['Servers'][$i]['host']          = 'localhost';  // MySQL hostname or IP address
$cfg['Servers'][$i]['port']          = $tempArray[1]; // Taken from config file See above
$cfg['Servers'][$i]['socket']        = '';           // Path to the socket - leave blank for default socket
$cfg['Servers'][$i]['connect_type']  = 'tcp';        // How to connect to MySQL server ('tcp' or 'socket')
$cfg['Servers'][$i]['extension']     = 'mysqli';     // The php MySQL extension to use ('mysql' or 'mysqli')
$cfg['Servers'][$i]['auth_type']     = 'config';    // Authentication method (config, http or cookie based)?
$cfg['Servers'][$i]['user']          = 'root';      // MySQL user
$cfg['Servers'][$i]['password']      = implode ('', file ('../mysql_password'));                   // MySQL password (only needed
                                                    // with 'config' auth_type)
$cfg['Servers'][$i]['only_db']       = '';          // If set to a db-name, only
                                                    // this db is displayed in left frame
                                                    // It may also be an array of db-names, where sorting order is relevant.
$cfg['Servers'][$i]['verbose']       = 'Uniform Server';          // Verbose name for this host - leave blank to show the hostname

$cfg['Servers'][$i]['pmadb']         = 'phpmyadmin';       // Database used for Relation, Bookmark and PDF Features
                                                           // (see scripts/create_tables.sql) - leave blank for no support
$cfg['Servers'][$i]['bookmarktable'] = 'pma_bookmark';     // Bookmark table
$cfg['Servers'][$i]['relation']      = 'pma_relation';     // table to describe the relation between links (see doc)
$cfg['Servers'][$i]['table_info']    = 'pma_table_info';   // table to describe the display fields
$cfg['Servers'][$i]['table_coords']  = 'pma_table_coords'; // table to describe the tables position for the PDF schema
$cfg['Servers'][$i]['pdf_pages']     = 'pma_pdf_pages';    // table to describe pages of relationpdf
$cfg['Servers'][$i]['column_info']   = 'pma_column_info';  // table to store column information
$cfg['Servers'][$i]['history']       = 'pma_history';      // table to store SQL history
$cfg['Servers'][$i]['designer_coords'] = 'pma_designer_coords';

// If you have more than one server configured, you can set $cfg['ServerDefault']
// to any one of them to autoconnect to that server when phpMyAdmin is started,
// or set it to 0 to be given a list of servers without logging in
// If you have only one server configured, $cfg['ServerDefault'] *MUST* be
// set to that server.
$cfg['ServerDefault'] = 1;              // Default server (0 = no default server)


/**
 * Other core phpMyAdmin settings
 */
$cfg['ExecTimeLimit']           = 600;    // maximum execution time in seconds (0 for no limit)
$cfg['AllowUserDropDatabase']   = TRUE;   // show a 'Drop database' link to normal users
$cfg['LoginCookieValidity']     = 1440;   // validity of cookie login (in seconds)
$cfg['LeftFrameDBSeparator']  = '_';      // the separator to sub-tree the select-based light menu tree
$cfg['LeftFrameTableSeparator']= '_';     // Which string will be used to generate table prefixes
$cfg['ShowTooltipAliasDB']    = TRUE;     // if ShowToolTip is enabled, this defines that table/db comments
$cfg['ShowTooltipAliasTB']    = TRUE;     // are shown (in the left menu and db_details_structure) instead of

// In the main frame, at startup...
$cfg['ShowPhpInfo']           = TRUE;    // information" and "change password" links for
$cfg['ShowChgPassword']       = TRUE;    // simple users or not
$cfg['ShowAll']               = TRUE;    // allows to display all the rows
$cfg['MaxRows']               = 300;     // maximum number of rows to display

/**
 * Export defaults
 */

$cfg['Export']['asfile']                    = TRUE;
$cfg['Export']['onserver']                  = TRUE;
$cfg['Export']['file_template_table']       = '__TABLE__-tabel_%Y-%m-%d';
$cfg['Export']['file_template_database']    = '__DB__-db_%Y-%m-%d';
$cfg['Export']['file_template_server']      = '__SERVER__-mysql_%Y-%m-%d';

$cfg['Export']['csv_enclosed']              = '&quot;';

$cfg['Export']['sql_if_not_exists']         = FALSE;
$cfg['Export']['sql_columns']               = FALSE;
$cfg['Export']['sql_extended']              = FALSE;


/**
 * Type of MySQL documentation:
 *   old        - old style used in phpMyAdmin 2.3.0 and sooner
 *   searchable - "Searchable, with user comments"
 *   chapters   - "HTML, one page per chapter"
 *   big        - "HTML, all on one page"
 *   none       - do not show documentation links
 */
$cfg['MySQLManualType'] = 'searchable';


/**
 * Language and charset conversion settings
 */
// Default language to use, if not browser-defined or user-defined
//$cfg['DefaultLang'] = 'en-iso-8859-1';
$cfg['DefaultLang']   = 'en-utf-8';

// Default charset to use for recoding of MySQL queries, does not take
// any effect when charsets recoding is switched off by
// $cfg['AllowAnywhereRecoding'] or in language file
// (see $cfg['AvailableCharsets'] to possible choices, you can add your own)
//$cfg['DefaultCharset'] = 'iso-8859-1';
$cfg['DefaultCharset']   = 'utf-8';

// Allow charset recoding of MySQL queries, must be also enabled in language
// file to make harder using other language files than unicode.
// Default value is FALSE to avoid problems on servers without the iconv
// extension and where dl() is not supported
$cfg['AllowAnywhereRecoding'] = TRUE;

// Specify some parameters for iconv used in charset conversion. See iconv
// documentation for details:
// http://www.gnu.org/software/libiconv/documentation/libiconv/iconv_open.3.html
$cfg['IconvExtraParams'] = '';

$cfg['DefaultConnectionCollation']  = 'utf8_general_ci';

/**
 * Customization & design
 *
 * The graphical settings are now located in themes/themename/layout.inc.php
 */

$cfg['TextareaAutoSelect']  = TRUE;         // autoselect when clicking in the textarea of the querybox
$cfg['DefaultPropDisplay']  = 'horizontal'; // default display direction for altering/
                                            // creating columns (tbl_properties)
                                            // (horizontal|vertical)

//-----------------------------------------------------------------------------

/**
 * Webserver upload/save/import directories
 */
 
$cfg['UploadDir']     = $drive.'/etc/phpmyadmin';   // Directory for uploaded files 
$cfg['SaveDir']       = $drive.'/etc/phpmyadmin';   // Directory where phpMyAdmin can save exported data
$cfg['docSQLDir']     = $drive.'/etc';              // Directory for docSQL imports,
$cfg['TempDir']       = $drive.'/tmp';              // Directory where phpMyAdmin can save temporary files.

