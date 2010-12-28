<?php
/**
 * This file is part of MySQLDumper released under the GNU/GPL 2 license
  * http://www.mysqldumper.net
 * 
 * @package       MySQLDumper
 * @subpackage    Languages
 * @version       $Rev$
 * @author        $Author$
 * @lastmodified  $Date$
  */
$lang=array_merge($lang, array(
    'L_ACTION' => "Aktion",
    'L_ACTIVATED' => "aktiverat",
    'L_ACTUALLY_INSERTED_RECORDS' => "Hittills har <b>%s</b> dataposter"
    ." överförts.",
    'L_ACTUALLY_INSERTED_RECORDS_OF' => "Hittills har <b>%s</b> av <b>%s</b>"
    ." dataposter överförts.",
    'L_ADD' => "Lägg till",
    'L_ADDED' => "adderat",
    'L_ADD_DB_MANUALLY' => "Lägg till databas manuellt",
    'L_ADD_RECIPIENT' => "Lägg till mottagare",
    'L_ALL' => "alla",
    'L_ANALYZE' => "Analysera",
    'L_ANALYZING_TABLE' => "För närvarande analyseras datan i"
    ." tabell '<b>%s</b>'.",
    'L_ASKDBCOPY' => "Vill du kopiera innehållet i"
    ." databasen `%s` till databasen `%s`?",
    'L_ASKDBDELETE' => "Vill du verkligen radera databasen"
    ." `%s` samt dess innehåll?",
    'L_ASKDBEMPTY' => "Vill du verkligen tömma databasen"
    ." `%s`?",
    'L_ASKDELETEFIELD' => "Skall fältet verkligen raderas?",
    'L_ASKDELETERECORD' => "Skall dataposten verkligen raderas?",
    'L_ASKDELETETABLE' => "Skall tabellen `%s` verkligen raderas?",
    'L_ASKTABLEEMPTY' => "Skall tabellen `%s` verkligen tömmas?",
    'L_ASKTABLEEMPTYKEYS' => "Skall tabellen `%s` tömmas och"
    ." indexen återställas?",
    'L_ATTACHED_AS_FILE' => "bifoga som fil",
    'L_ATTACH_BACKUP' => "Bifoga backup",
    'L_AUTHORIZE' => "Auktorisera",
    'L_AUTODELETE' => "Automatisk radering av backup-filer",
    'L_BACK' => "tillbaka",
    'L_BACKUPFILESANZAHL' => "I backup-mappen finns",
    'L_BACKUPS' => "backup(er)",
    'L_BACKUP_DBS' => "backup av databaser",
    'L_BACKUP_TABLE_DONE' => "Backup av tabellen `%s` avslutad. %s"
    ." poster har säkrats.",
    'L_BACK_TO_OVERVIEW' => "Databasöversikt",
    'L_BACK_TO_OVERVIEW' => "Databasöversikt",
    'L_CALL' => "Anrop",
    'L_CANCEL' => "Avbryt",
    'L_CANT_CREATE_DIR' => "Mappen '%s' kunde ej skapas. Skapa den"
    ." med ditt FTP-program.",
    'L_CHANGE' => "redigera",
    'L_CHANGEDIR' => "Hoppa till mapp",
    'L_CHANGEDIR' => "Hoppa till mapp",
    'L_CHANGEDIRERROR' => "Hopp till mapp ej möjligt",
    'L_CHANGEDIRERROR' => "Kunde ej hoppa till mapp!",
    'L_CHARSET' => "Teckensats",
    'L_CHECK' => "Kontrollera",
    'L_CHECK' => "kontrollera",
    'L_CHECK_DIRS' => "kontrollera mina mappar",
    'L_CHOOSE_CHARSET' => "Tyvärr kunde ej fastställas"
    ." automatiskt med vilken teckensats"
    ." denna backupfil har skapats.<br />Du"
    ." måste ange koderingen manuellt.<br"
    ." />Därefter ställer MySQLDumper in"
    ." förbindelseparametrarna till"
    ." MySQL-servern till den valda"
    ." teckensatsen och startar"
    ." återställningen.<br />Om datan"
    ." återges med fel specialtecken efter"
    ." återställningen så bör du upprepa"
    ." återställningen med en annan"
    ." inställning för teckensatsen.<br"
    ." />Lycka till.",
    'L_CHOOSE_DB' => "Välj databas",
    'L_CLEAR_DATABASE' => "Töm databasen",
    'L_CLOSE' => "Stäng",
    'L_COLLATION' => "Sortering",
    'L_COMMAND' => "Kommando",
    'L_COMMAND' => "Kommando",
    'L_COMMAND_AFTER_BACKUP' => "Kommando efter backup",
    'L_COMMAND_BEFORE_BACKUP' => "Kommando före backup",
    'L_COMMENT' => "Kommentar",
    'L_COMPRESSED' => "komprimerat (gz)",
    'L_CONFBASIC' => "Grundinställningar",
    'L_CONFIG' => "Konfigurering",
    'L_CONFIGFILE' => "Konfigureringsfil",
    'L_CONFIGFILES' => "Konfigureringsfiler",
    'L_CONFIGURATIONS' => "Inställningar",
    'L_CONFIG_AUTODELETE' => "Automatisk radering",
    'L_CONFIG_CRONPERL' => "Crondump-inställningar för"
    ." Perl-skriptet",
    'L_CONFIG_EMAIL' => "Epostmeddelande",
    'L_CONFIG_FTP' => "FTP-överföring av backup-filen",
    'L_CONFIG_HEADLINE' => "Konfigurering",
    'L_CONFIG_INTERFACE' => "Gränssnitt",
    'L_CONFIG_LOADED' => "Konfigureringen \"%s\" har laddats.",
    'L_CONFIRM_CONFIGFILE_DELETE' => "Ska konfigureringsfilen %s verkligen"
    ." raderas?",
    'L_CONFIRM_DELETE_TABLES' => "Ska de valda tabellerna verkligen"
    ." raderas?",
    'L_CONFIRM_DROP_DATABASES' => "Ska de valda databaserna verkligen"
    ." raderas? OBS: all data går förlorad"
    ." och kan ej återställas! Skapa först"
    ." en backup!",
    'L_CONFIRM_RECIPIENT_DELETE' => "Ska mottagaren \"%s\" verkligen tas"
    ." bort",
    'L_CONFIRM_TRUNCATE_DATABASES' => "Ska de valda databaserna verkligen"
    ." tömmas? OBS: alla tabeller går"
    ." förlorade och kan ej återställas!"
    ." Skapa först en backup!",
    'L_CONFIRM_TRUNCATE_TABLES' => "Ska de valda tabellerna verkligen"
    ." tömmas?",
    'L_CONNECT' => "förbind",
    'L_CONNECTIONPARS' => "Förbindelse-parametrar",
    'L_CONNECTTOMYSQL' => "förbind med mysql",
    'L_CONTINUE_MULTIPART_RESTORE' => "Fortsätt mulipart-återställningen"
    ." med nästa fil '%s'.",
    'L_CONVERTED_FILES' => "Konverterade filer",
    'L_CONVERTER' => "Backup-konverterare",
    'L_CONVERTING' => "Konvertering",
    'L_CONVERT_FILE' => "fil som skall konverteras",
    'L_CONVERT_FILENAME' => "Målfilens namn (utan filändelse)",
    'L_CONVERT_FILEREAD' => "Filen '%s' läses in",
    'L_CONVERT_FINISHED' => "Konverteringen avslutad, '%s' har"
    ." skapats.",
    'L_CONVERT_START' => "Starta konvertering",
    'L_CONVERT_TITLE' => "Konvertera dump till MSD-formatet",
    'L_CONVERT_WRONG_PARAMETERS' => "Fel parametrar! Konverteringen kan ej"
    ." genomföras.",
    'L_CREATE' => "skapa",
    'L_CREATEAUTOINDEX' => "Skapa auto-index",
    'L_CREATEDIRS' => "skapar mappar",
    'L_CREATE_CONFIGFILE' => "Skapa en ny konfigureringsfil",
    'L_CREATE_DATABASE' => "skapa ny databas",
    'L_CREATE_TABLE_SAVED' => "Definition av tabellen `%s` sparad.",
    'L_CREDITS' => "Credits / Hjälp",
    'L_CRONSCRIPT' => "Cronskript",
    'L_CRON_COMMENT' => "Mata in kommentar",
    'L_CRON_COMPLETELOG' => "Logga hela utmatningen",
    'L_CRON_EXECPATH' => "Perl-skriptens sökväg",
    'L_CRON_EXTENDER' => "Skriptets filändelse",
    'L_CRON_PRINTOUT' => "Textutmatning",
    'L_CSVOPTIONS' => "CSV-optioner",
    'L_CSV_EOL' => "Raderna separerade med",
    'L_CSV_ERRORCREATETABLE' => "Fel när tabellen `%s` skulle skapas!",
    'L_CSV_FIELDCOUNT_NOMATCH' => "Antalet tabell-fält stämmer ej"
    ." överens med antalet som skall"
    ." importeras (%d istället för %d).",
    'L_CSV_FIELDSENCLOSED' => "Fält inneslutna av",
    'L_CSV_FIELDSEPERATE' => "Fält separerade med",
    'L_CSV_FIELDSESCAPE' => "Fält escaped från",
    'L_CSV_FIELDSLINES' => "%d fält fastställda, totalt %d rader",
    'L_CSV_FILEOPEN' => "Öppna CSV-fil",
    'L_CSV_NAMEFIRSTLINE' => "Fältnamn i första raden",
    'L_CSV_NODATA' => "Ingen data kunde hittas för import!",
    'L_CSV_NULL' => "Ersätt NULL med",
    'L_DATASIZE' => "Datastorlek",
    'L_DATASIZE_INFO' => "Detta är dataposternas storlek - inte"
    ." backupfilens storlek",
    'L_DAY' => "Dag",
    'L_DAYS' => "Dagar",
    'L_DB' => "Databas",
    'L_DBCONNECTION' => "Databas-förbindelse",
    'L_DBPARAMETER' => "Databas-parametrar",
    'L_DBS' => "Databaser",
    'L_DB_BACKUPPARS' => "Backup-inställningar för databas",
    'L_DB_HOST' => "Databas-hostnamn",
    'L_DB_IN_LIST' => "Databasen '%s' kunde ej läggas till"
    ." eftersom den redan existerar.",
    'L_DB_PASS' => "Databas-lösenord",
    'L_DB_SELECT_ERROR' => "<br />Fel:<br /> val av databasen '<b>",
    'L_DB_SELECT_ERROR2' => "</b>' misslyckades!",
    'L_DB_USER' => "Databas-användare",
    'L_DEFAULT_CHARSET' => "Standardteckensats",
    'L_DELETE' => "Radera",
    'L_DELETE_DATABASE' => "Radera databas",
    'L_DELETE_FILE_ERROR' => "Filen \"%s\" kunde ej raderas!",
    'L_DELETE_FILE_SUCCESS' => "Filen \"%s\" har raderats.",
    'L_DELETE_HTACCESS' => "Avlägsna mappskyddet (radera"
    ." .htaccess-filen)",
    'L_DESELECTALL' => "Avmarkera alla",
    'L_DIR' => "Mapp",
    'L_DISABLEDFUNCTIONS' => "Deaktiverade funktioner",
    'L_DISABLEDFUNCTIONS' => "Deaktiverade funktioner",
    'L_DO' => "utför",
    'L_DOCRONBUTTON' => "Utför Perl-cronscript",
    'L_DONE' => "Färdig!",
    'L_DONT_ATTACH_BACKUP' => "Bifoga ej backupfilen",
    'L_DOPERLTEST' => "Testa Perl-modulerna",
    'L_DOSIMPLETEST' => "Testa Perl",
    'L_DOWNLOAD_FILE' => "Ladda hem filen",
    'L_DO_NOW' => "utför nu",
    'L_DUMP' => "Backup",
    'L_DUMP_ENDERGEBNIS' => "<b>%s</b> tabeller med totalt"
    ." <b>%s</b> dataposter har säkrats.<br"
    ." />",
    'L_DUMP_FILENAME' => "Backup-fil",
    'L_DUMP_HEADLINE' => "skapa backup ...",
    'L_DUMP_NOTABLES' => "Inga tabeller hittades i databasen"
    ." `%s`.",
    'L_DUMP_OF_DB_FINISHED' => "Backup av databasen `%s` avslutad",
    'L_DURATION' => "Längd",
    'L_EDIT' => "redigera",
    'L_EHRESTORE_CONTINUE' => "fortsätt och protokollera fel",
    'L_EHRESTORE_STOP' => "stoppa",
    'L_EMAIL' => "E-post",
    'L_EMAILBODY_ATTACH' => "Här kommer backupen av din"
    ." MySQLdatabas.<br />Backup av databasen"
    ." `%s`
<br /><br />Följande fil har"
    ." skapats:<br /><br />%s <br /><br />Med"
    ." vänliga hälsningar<br /><br"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_FOOTER' => "<br /><br /><br />Med vänliga"
    ." hälsningar<br /><br />MySQLDumper<br"
    ." />",
    'L_EMAILBODY_MP_ATTACH' => "En multipart-backup har skapats.<br"
    ." />Backupen levereras i separata"
    ." mail!<br />Backup av databasen"
    ." `%s`
<br /><br />Följande filer har"
    ." skapats:<br /><br />%s<br /><br /><br"
    ." />Med vänliga hälsningar<br /><br"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_MP_NOATTACH' => "En multipart-backup har skapats.<br"
    ." />Backuperna levereras EJ som bilaga i"
    ." mail!<br />Backup av databasen"
    ." `%s`
<br /><br />Följande filer har"
    ." skapats:<br /><br />%s<br /><br /><br"
    ." />Med vänliga hälsningar<br /><br"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_NOATTACH' => "Backuperna levereras EJ som bilaga i"
    ." mail!<br />Backup av databasen `%s`"
    ." <br /><br />Följande filer har"
    ." skapats:<br /><br />%s<br /><br /><br"
    ." />Med vänliga hälsningar<br /><br"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_TOOBIG' => "Backupen överskrider den maximala"
    ." storleken på %s och har därför ej"
    ." bifogats.<br />Backup av databasen"
    ." `%s` <br /><br />Följande fil har"
    ." skapats:<br /><br />%s <br /><br"
    ." />Vänliga hälsningar<br />Din"
    ." MySQLDumper<br />",
    'L_EMAIL_ADDRESS' => "Epost-adress",
    'L_EMAIL_CC' => "CC-mottagare",
    'L_EMAIL_MAXSIZE' => "Bilagans maximala storlek",
    'L_EMAIL_ONLY_ATTACHMENT' => "... endast bilagan",
    'L_EMAIL_RECIPIENT' => "Epostadress",
    'L_EMAIL_SENDER' => "Meddelandets avsändare",
    'L_EMAIL_START' => "Startar e-postförsändelse",
    'L_EMAIL_WAS_SEND' => "Epostmeddelandet har skickats till",
    'L_EMPTY' => "Töm",
    'L_EMPTYKEYS' => "töm och återställ index",
    'L_EMPTYTABLEBEFORE' => "Töm tabellen före",
    'L_EMPTY_DB_BEFORE_RESTORE' => "Radera databasen före"
    ." återställningen",
    'L_ENCODING' => "Kodering",
    'L_ENCRYPTION_TYPE' => "Krypteringssätt",
    'L_ENGINE' => "Engine",
    'L_ENTER_DB_INFO' => "Klicka först på knappen \"förbind"
    ." med mysql\". Endast om denna"
    ." förbindelse ej fungerar behöver du"
    ." mata in data här.",
    'L_ENTRY' => "Post",
    'L_ERROR' => "Fel",
    'L_ERRORHANDLING_RESTORE' => "Felhantering under återställning",
    'L_ERROR_CONFIGFILE_NAME' => "Filnamnet \"%s\" innehåller ogiltiga"
    ." tecken.",
    'L_ERROR_DELETING_CONFIGFILE' => "Fel: konfigureringsfilen %s kunde ej"
    ." raderas!",
    'L_ERROR_LOADING_CONFIGFILE' => "Konfigureringsfilen \"%s\" kunde ej"
    ." laddas.",
    'L_ERROR_LOG' => "Fel-logg",
    'L_ERROR_MULTIPART_RESTORE' => "Multipart-återställning: kunde ej"
    ." hitta filen '%s'!",
    'L_ESTIMATED_END' => "Uppskattat slut",
    'L_EXCEL2003' => "Excel från och med 2003",
    'L_EXISTS' => "Existerar",
    'L_EXPORT' => "Export",
    'L_EXPORTFINISHED' => "Exporten avslutad.",
    'L_EXPORTLINES' => "<strong>%s</strong> rader har"
    ." exporterats",
    'L_EXPORTOPTIONS' => "Exportoptioner",
    'L_EXTENDEDPARS' => "Ytterligare parametrar",
    'L_FADE_IN_OUT' => "visa/dölj",
    'L_FATAL_ERROR_DUMP' => "Kritiskt fel: CREATE-kommandot i"
    ." tabellen '%s' i databasen '%s' kunde"
    ." ej läsas!",
    'L_FIELDS' => "Fält",
    'L_FIELDS_OF_TABLE' => "Fält i tabellen",
    'L_FILE' => "Fil",
    'L_FILES' => "Filer",
    'L_FILESIZE' => "Filstorlek",
    'L_FILE_MANAGE' => "Administrering",
    'L_FILE_OPEN_ERROR' => "Fel: filen kunde ej öppnas.",
    'L_FILE_SAVED_SUCCESSFULLY' => "Filen har sparats.",
    'L_FILE_SAVED_UNSUCCESSFULLY' => "Filen kunde ej sparas!",
    'L_FILE_UPLOAD_SUCCESSFULL' => "Filen '%s' har laddats upp.",
    'L_FILTER_BY' => "Filtra efter",
    'L_FM_ALERTRESTORE1' => "Ska databasen",
    'L_FM_ALERTRESTORE2' => "återställas med innehållet i filen",
    'L_FM_ALERTRESTORE3' => "?",
    'L_FM_ALL_BU' => "alla backuper",
    'L_FM_ANZ_BU' => "Antal backuper",
    'L_FM_ASKDELETE1' => "Vill du verkligen radera filen"
    ." (filerna)",
    'L_FM_ASKDELETE2' => "?",
    'L_FM_ASKDELETE3' => "Vill du utföra den automatiska"
    ." raderingen enligt de inställda"
    ." reglerna nu?",
    'L_FM_ASKDELETE4' => "Vill du radera alla backupfiler nu?",
    'L_FM_ASKDELETE5' => "Vill du radera alla backupfiler med",
    'L_FM_ASKDELETE5_2' => "* nu?",
    'L_FM_AUTODEL1' => "Automatisk radering: följande filer"
    ." raderades på grund av maximalt antal"
    ." filer:",
    'L_FM_CHOOSE_ENCODING' => "Välj backupfilens kodering",
    'L_FM_COMMENT' => "Mata in en kommentar",
    'L_FM_DBNAME' => "Databasens namn",
    'L_FM_DELETE' => "Radera valda filer",
    'L_FM_DELETE1' => "Filen",
    'L_FM_DELETE2' => "har raderats.",
    'L_FM_DELETE3' => "kunde ej raderas!",
    'L_FM_DELETEALL' => "Radera alla backupfiler",
    'L_FM_DELETEALLFILTER' => "Radera alla med",
    'L_FM_DELETEAUTO' => "Genomför automatisk radering manuellt",
    'L_FM_DUMPSETTINGS' => "Backup-inställningar",
    'L_FM_DUMP_HEADER' => "Backup",
    'L_FM_FILEDATE' => "Datum",
    'L_FM_FILES1' => "Databas-backuper",
    'L_FM_FILESIZE' => "Filstorlek",
    'L_FM_FILEUPLOAD' => "Ladda upp fil",
    'L_FM_FILEUPLOAD' => "Ladda upp fil",
    'L_FM_FREESPACE' => "Ledigt utrymme på servern",
    'L_FM_LAST_BU' => "Senaste backup",
    'L_FM_NOFILE' => "Du har ej valt någon fil!",
    'L_FM_NOFILESFOUND' => "Ingen fil hittades.",
    'L_FM_RECORDS' => "Poster",
    'L_FM_RESTORE' => "Återställning",
    'L_FM_RESTORE_HEADER' => "Återställning av databasen"
    ." `<strong>%s</strong>`",
    'L_FM_SELECTTABLES' => "Val av bestämda tabeller",
    'L_FM_STARTDUMP' => "Starta ny backup",
    'L_FM_TABLES' => "Tabeller",
    'L_FM_TOTALSIZE' => "Total storlek",
    'L_FM_UPLOADFAILED' => "Uppladdningen har tyvärr misslyckats!",
    'L_FM_UPLOADFILEEXISTS' => "Det existerar redan en fil med samma"
    ." namn!",
    'L_FM_UPLOADFILEREQUEST' => "Ange en fil.",
    'L_FM_UPLOADFILEREQUEST' => "Ange en fil.",
    'L_FM_UPLOADMOVEERROR' => "Den uppladdade filen kunde ej flyttas"
    ." till rätt mapp.",
    'L_FM_UPLOADNOTALLOWED1' => "Denna filtyp är ej tillåten.",
    'L_FM_UPLOADNOTALLOWED2' => "Tillåtna filtyper: *.gz och *.sql",
    'L_FOUND_DB' => "hittad databas:",
    'L_FROMFILE' => "ur fil",
    'L_FROMTEXTBOX' => "ur textfält",
    'L_FTP' => "FTP",
    'L_FTP_ADD_CONNECTION' => "Lägg till förbindelse",
    'L_FTP_CHOOSE_MODE' => "FTP-överföringsläge",
    'L_FTP_CONFIRM_DELETE' => "Ska denna FTP-förbindelse verkligen"
    ." raderas?",
    'L_FTP_CONNECTION' => "FTP-förbindelse",
    'L_FTP_CONNECTION_CLOSED' => "FTP-förbindelsen stängd",
    'L_FTP_CONNECTION_DELETE' => "Förbindelsen har raderats",
    'L_FTP_CONNECTION_ERROR' => "Förbindelsen till servern '%s' över"
    ." port %s kunde ej upprättas",
    'L_FTP_CONNECTION_SUCCESS' => "Förbindelsen till servern '%s' över"
    ." port %s har upprättats",
    'L_FTP_DIR' => "Uppladdningsmapp",
    'L_FTP_FILE_TRANSFER_ERROR' => "Överföringen av filen '%s'"
    ." misslyckades",
    'L_FTP_FILE_TRANSFER_SUCCESS' => "Filen '%s' har överförts",
    'L_FTP_LOGIN_ERROR' => "Inloggning som användare '%s'"
    ." avvisades",
    'L_FTP_LOGIN_SUCCESS' => "Inloggad som användare '%s'",
    'L_FTP_OK' => "FTP-parametrara är ok.",
    'L_FTP_OK' => "Förbindelsen kunde skapas.",
    'L_FTP_PASS' => "Lösenord",
    'L_FTP_PASSIVE' => "använd passivt läge",
    'L_FTP_PASV_ERROR' => "Kunde ej byta läge till passivt"
    ." FTP-läge",
    'L_FTP_PASV_SUCCESS' => "Läge inställt till passivt FTP-läge",
    'L_FTP_PORT' => "Port",
    'L_FTP_SEND_TO' => "till <strong>%s</strong><br />i"
    ." <strong>%s</strong>",
    'L_FTP_SERVER' => "Server",
    'L_FTP_SSL' => "Säker SSL-FTP-förbindelse",
    'L_FTP_START' => "Startar FTP-överföring",
    'L_FTP_TIMEOUT' => "Förbindelse-timeout",
    'L_FTP_TRANSFER' => "FTP-överföring",
    'L_FTP_USER' => "Användare",
    'L_FTP_USESSL' => "använd SSL-förbindelse",
    'L_GENERAL' => "allmänt",
    'L_GENERAL' => "Allmänt",
    'L_GZIP' => "GZIP-komprimering",
    'L_GZIP_COMPRESSION' => "GZIP-komprimering",
    'L_HOME' => "Hem",
    'L_HOUR' => "Timme",
    'L_HOURS' => "Timmar",
    'L_HTACC_ACTIVATE_REWRITE_ENGINE' => "Aktivera rewrite",
    'L_HTACC_ADD_HANDLER' => "Lägg till handler",
    'L_HTACC_CONFIRM_DELETE' => "Ska mappskyddet skapas nu?",
    'L_HTACC_CONTENT' => "Filens innehåll",
    'L_HTACC_CREATE' => "Skapa mappskydd",
    'L_HTACC_CREATED' => "Mappskyddet har skapats.",
    'L_HTACC_CREATE_ERROR' => "Ett fel uppträdde när mappskyddet"
    ." skulle skapas!<br />Skapa filerna"
    ." manuellt med följande innehåll",
    'L_HTACC_CRYPT' => "Crypt (Linux och Unix-system)",
    'L_HTACC_DENY_ALLOW' => "Deny / Allow",
    'L_HTACC_DIR_LISTING' => "Mapp-listning",
    'L_HTACC_EDIT' => "Editera .htaccess-skyddet",
    'L_HTACC_ERROR_DOC' => "Fel-dokument",
    'L_HTACC_EXAMPLES' => "ytterligare exempel och dokumentation",
    'L_HTACC_EXISTS' => "Mappskydd existerar redan. Det gamla"
    ." skrivs över om du skapar ett nytt!",
    'L_HTACC_MAKE_EXECUTABLE' => "Gör utförbart",
    'L_HTACC_MD5' => "MD5 (Linux och Unix-system)",
    'L_HTACC_NO_ENCRYPTION' => "ingen kryptering (Windows)",
    'L_HTACC_NO_USERNAME' => "Du måste mata in ett namn!",
    'L_HTACC_PROPOSED' => "Rekommenderas starkt",
    'L_HTACC_REDIRECT' => "Redirect",
    'L_HTACC_SCRIPT_EXEC' => "Utför skriptet",
    'L_HTACC_SHA1' => "SHA1 (alla system)",
    'L_HTACC_WARNING' => "OBS! .htaccess har direkt inverkan på"
    ." servern.<br />Om .htaccess ställs in"
    ." på fel sätt kan sidan ej nås.",
    'L_IMPORT' => "Importera konfigureringen",
    'L_IMPORT' => "Import",
    'L_IMPORTIEREN' => "importera",
    'L_IMPORTOPTIONS' => "Importoptioner",
    'L_IMPORTSOURCE' => "Importkälla",
    'L_IMPORTTABLE' => "Import till tabellen",
    'L_IMPORT_NOTABLE' => "Ingen tabell har valts för importen!",
    'L_IN' => "i",
    'L_INFO_ACTDB' => "Aktuell databas",
    'L_INFO_DATABASES' => "Följande databas(er) finns på"
    ." MySQL-servern",
    'L_INFO_DBEMPTY' => "Databasen är tom!",
    'L_INFO_FSOCKOPEN_DISABLED' => "På denna server har PHP-funktionen"
    ." fsockopen() deaktiverats i serverns"
    ." konfigurering, därför kan"
    ." språkpaketen ej laddas ner"
    ." automatiskt. Du kan dock ladda ner"
    ." önskade paket manuellt, packa upp och"
    ." ladda upp paketen till mappen"
    ." \"language\" med ditt FTP-program."
    ." Därefter kan du välja det nya"
    ." språket.",
    'L_INFO_LASTUPDATE' => "senaste uppdatering",
    'L_INFO_LOCATION' => "Du befinner dig på",
    'L_INFO_NODB' => "Databasen existerar ej",
    'L_INFO_NOPROCESSES' => "inga aktuella processer",
    'L_INFO_NOSTATUS' => "ingen status",
    'L_INFO_NOVARS' => "inga variabler",
    'L_INFO_OPTIMIZED' => "optimerat",
    'L_INFO_RECORDS' => "Dataposter",
    'L_INFO_RECORDS' => "dataposter",
    'L_INFO_SIZE' => "Storlek",
    'L_INFO_SUM' => "Totalt",
    'L_INSTALL' => "Installation",
    'L_INSTALL' => "Installation",
    'L_INSTALLED' => "Installerat",
    'L_INSTALL_HELP_PORT' => "(tom = standardport)",
    'L_INSTALL_HELP_SOCKET' => "(tom = standardsocket)",
    'L_IS_WRITABLE' => "Är skrivbart",
    'L_KILL_PROCESS' => "Avsluta processen",
    'L_LANGUAGE' => "Språk",
    'L_LASTBACKUP' => "Senaste backup",
    'L_LOAD' => "Grundinställningar",
    'L_LOAD_DATABASE' => "Ladda om databaserna",
    'L_LOAD_FILE' => "Ladda fil",
    'L_LOG' => "Logg",
    'L_LOGFILENOTWRITABLE' => "Loggfil kan ej skrivas!",
    'L_LOGFILENOTWRITABLE' => "Loggfilen kan ej skrivas!",
    'L_LOGFILES' => "Loggfiler",
    'L_LOG_DELETE' => "Radera loggen",
    'L_MAILERROR' => "Tyvärr uppträdde ett fel när"
    ." epostmeddelandet skickades!",
    'L_MAILPROGRAM' => "Epostprogram",
    'L_MAXSIZE' => "max. storlek",
    'L_MAX_BACKUP_FILES_EACH2' => "för varje databas",
    'L_MAX_EXECUTION_TIME' => "Maximal exekveringstid",
    'L_MAX_UPLOAD_SIZE' => "Maximal filstorlek",
    'L_MAX_UPLOAD_SIZE' => "Maximal filstorlek",
    'L_MAX_UPLOAD_SIZE_INFO' => "Om din backup-fil är större än det"
    ." angivna värdet så måste du ladda"
    ." upp den till mappen \"work/backup\""
    ." via FTP. Därefter visas filen här i"
    ." översikten och kan väljas för"
    ." återställning.",
    'L_MEMORY' => "Minne",
    'L_MESSAGE' => "Meddelande",
    'L_MESSAGE_TYPE' => "Typ av meddelande",
    'L_MINUTE' => "minut",
    'L_MINUTES' => "minuter",
    'L_MODE_EASY' => "Enkel",
    'L_MODE_EXPERT' => "Expert",
    'L_MSD_INFO' => "MySQLDumper-informationer",
    'L_MSD_MODE' => "MySQLDumper-läge",
    'L_MSD_VERSION' => "MySQLDumper-version",
    'L_MULTIDUMP' => "Multidump",
    'L_MULTIDUMP_FINISHED' => "<b>%d</b> databaser har säkrats",
    'L_MULTIPART_ACTUAL_PART' => "Aktuell delfil",
    'L_MULTIPART_SIZE' => "Maximal filstorlek",
    'L_MULTI_PART' => "Backup uppdelad i flera filer",
    'L_MYSQLVARS' => "MySQL-variabler",
    'L_MYSQL_CLIENT_VERSION' => "MySQL-klient",
    'L_MYSQL_CONNECTION_ENCODING' => "MySQL-serverns standardkodering",
    'L_MYSQL_DATA' => "MySQL-data",
    'L_MYSQL_VERSION' => "MySQL-version",
    'L_NAME' => "Namn",
    'L_NAME' => "Namn",
    'L_NEW' => "ny",
    'L_NEWTABLE' => "ny tabell",
    'L_NEXT_AUTO_INCREMENT' => "Nästa automatiska index",
    'L_NEXT_AUTO_INCREMENT_SHORT' => "n. auto-index",
    'L_NO' => "nej",
    'L_NOFTPPOSSIBLE' => "Det står inga FTP-funktioner till"
    ." förfogande!",
    'L_NOFTPPOSSIBLE' => "Det står inga FTP-funktioner till"
    ." förfogande!",
    'L_NOFTPPOSSIBLE' => "Du har inga FTP-funktioner!",
    'L_NOGZPOSSIBLE' => "Det står inga komprimeringsfunktioner"
    ." till förfogande!",
    'L_NOGZPOSSIBLE' => "Det står inga GZIP-funktioner till"
    ." förfogande eftersom zlib ej har"
    ." installerats!",
    'L_NONE' => "inga",
    'L_NOREVERSE' => "Äldsta posten först",
    'L_NOTAVAIL' => "<em>existerar ej</em>",
    'L_NOTICE' => "Hänvisning",
    'L_NOTICES' => "Hänvisningar",
    'L_NOT_ACTIVATED' => "ej aktiverat",
    'L_NOT_SUPPORTED' => "Denna backup har inget stöd för den"
    ." funktionen.",
    'L_NO_DB_FOUND' => "Inga databaser hittades. Gå till"
    ." förbindelseparametrarna och ange"
    ." databasens namn.",
    'L_NO_DB_FOUND_INFO' => "Förbindelsen till databasen kunde"
    ." upprättas.<br />Dina"
    ." inloggningsinformationer är giltiga"
    ." har accepterats av MySQL-servern.<br"
    ." />Tyvärr kunde MySQLDumper inte hitta"
    ." några databaser.<br />Automatisk"
    ." detektering spärras av vissa"
    ." webbhotell.<br />Du måste ange"
    ." databasen efter installationen,"
    ." menypunkt \"Konfigurering\" \"Visa"
    ." förbindelseparametrar\".<br"
    ." />Genomför detta steg omedelbart"
    ." efter installationen.",
    'L_NO_DB_SELECTED' => "Ingen databas har valts.",
    'L_NO_ENTRIES' => "Tabellen \"<b>%s</b>\" är tom och har"
    ." inga poster.",
    'L_NO_MSD_BACKUPFILE' => "Filer skapade med andra program",
    'L_NO_NAME_GIVEN' => "Du har ej angivit något namn.",
    'L_NR_TABLES_OPTIMIZED' => "%s tabeller har optimerats.",
    'L_NUMBER_OF_FILES_FORM' => "Antal backup-filer per databas",
    'L_OF' => "av",
    'L_OF' => "av",
    'L_OK' => "OK",
    'L_OPTIMIZE' => "Optimera",
    'L_OPTIMIZE_TABLES' => "Optimera tabellerna före backup",
    'L_OPTIMIZE_TABLE_ERR' => "Fel under optimering av tabellen `%s`.",
    'L_OPTIMIZE_TABLE_SUCC' => "Tabellen `%s` har uppdaterats.",
    'L_OS' => "Operativsystem",
    'L_PAGE_REFRESHS' => "sidvisningar",
    'L_PASS' => "Lösenord",
    'L_PASSWORD' => "Lösenord",
    'L_PASSWORDS_UNEQUAL' => "Lösenorden är ej identiska eller"
    ." tomma!",
    'L_PASSWORD_REPEAT' => "Upprepa lösenord",
    'L_PASSWORD_STRENGTH' => "Lösenordets säkerhet",
    'L_PERLOUTPUT1' => "Angivelse i crondump.pl för"
    ." absolute_path_of_configd",
    'L_PERLOUTPUT2' => "Browseradress eller adress för extern"
    ." crontab",
    'L_PERLOUTPUT3' => "Shelladress eller adress för crontab",
    'L_PERL_COMPLETELOG' => "Perl-Complete-logg",
    'L_PERL_LOG' => "Perl-logg",
    'L_PHPBUG' => "Bugg i zlib! Komprimering kan ej"
    ." utföras!",
    'L_PHPMAIL' => "PHP-funktion mail()",
    'L_PHP_EXTENSIONS' => "PHP-extensioner",
    'L_PHP_VERSION' => "PHP-version",
    'L_POP3_PORT' => "POP3-port",
    'L_POP3_SERVER' => "POP3-server",
    'L_PORT' => "Port",
    'L_PORT' => "Port",
    'L_POSITION_BC' => "nere i mitten",
    'L_POSITION_BL' => "nere till vänster",
    'L_POSITION_BR' => "nere till höger",
    'L_POSITION_MC' => "i mitten",
    'L_POSITION_ML' => "i mitten till vänster",
    'L_POSITION_MR' => "i mitten till höger",
    'L_POSITION_NOTIFICATIONS' => "Meddelanderutans position",
    'L_POSITION_TC' => "uppe i mitten",
    'L_POSITION_TL' => "uppe till vänster",
    'L_POSITION_TR' => "uppe till höger",
    'L_PREFIX' => "Prefix",
    'L_PRIMARYKEYS_CHANGED' => "Den primära nyckeln har ändrats",
    'L_PRIMARYKEYS_CHANGINGERROR' => "Ett fel uppträdde när den primära"
    ." nyckeln skulle ändras",
    'L_PRIMARYKEYS_SAVE' => "Spara primärnycklar",
    'L_PRIMARYKEY_CONFIRMDELETE' => "Vill du verkligen radera"
    ." primärnyckeln?",
    'L_PRIMARYKEY_DELETED' => "Den primära nyckeln har raderats",
    'L_PRIMARYKEY_FIELD' => "Nyckelfält",
    'L_PRIMARYKEY_NOTFOUND' => "Den primära nyckeln kunde ej hittas",
    'L_PROCESSKILL1' => "Försöker avsluta process",
    'L_PROCESSKILL2' => ".",
    'L_PROCESSKILL3' => "Sedan",
    'L_PROCESSKILL4' => "sekund(er) försöks avsluta process",
    'L_PROCESS_ID' => "Process-ID",
    'L_PROGRESS_FILE' => "Framsteg fil",
    'L_PROGRESS_OVER_ALL' => "Genomfört totalt",
    'L_PROGRESS_OVER_ALL' => "Framsteg totalt",
    'L_PROGRESS_TABLE' => "Genomfört av tabell",
    'L_PROVIDER' => "Provider",
    'L_PROZESSE' => "Processer",
    'L_RECHTE' => "Rättigheter",
    'L_RECORDS' => "Dataposter",
    'L_RECORDS_INSERTED' => "<b>%s</b> dataposter har överförts.",
    'L_RECORDS_PER_PAGECALL' => "Dataposter per sidoladdning",
    'L_REFRESHTIME' => "Aktualiseringsintervall",
    'L_REFRESHTIME_PROCESSLIST' => "Processlistans aktualiseringsintervall",
    'L_RELOAD' => "Ladda om",
    'L_REMOVE' => "Avlägsna",
    'L_REPAIR' => "Reparera",
    'L_RESET' => "Återställa",
    'L_RESET_SEARCHWORDS' => "Återställ inmatningen",
    'L_RESTORE' => "Återställning",
    'L_RESTORE_COMPLETE' => "<b>%s</b> tabeller har skapats.",
    'L_RESTORE_DB' => "Databas '<b>%s</b>' på server"
    ." '<b>%s</b>'.",
    'L_RESTORE_DB_COMPLETE_IN' => "Återställning av databasen '%s'"
    ." avslutad i %s.",
    'L_RESTORE_OF_TABLES' => "Återställning av bestämda tabeller",
    'L_RESTORE_TABLE' => "Återställning av tabellen '%s'",
    'L_RESTORE_TABLES_COMPLETED' => "Hittills har <b>%d</b> av <b>%d</b>"
    ." tabeller skapats.",
    'L_RESTORE_TABLES_COMPLETED0' => "Hittills har <b>%d</b> av <b>%d</b>"
    ." tabeller skapats.",
    'L_REVERSE' => "Nyaste posten först",
    'L_SAFEMODEDESC' => "Eftersom PHP utförs med optionen"
    ." \"safe_mode=on\" på denna server"
    ." måste följande mappar skapas"
    ." manuellt med ett FTP-program:",
    'L_SAVE' => "Spara",
    'L_SAVEANDCONTINUE' => "spara och fortsätt installationen",
    'L_SAVE_ERROR' => "Inställningarna kunde ej sparas!",
    'L_SAVE_SUCCESS' => "Inställningarna har sparats i"
    ." konfigureringsfilen \"%s\".",
    'L_SAVING_DATA_TO_FILE' => "Sparar data ur databasen '%s' i filen"
    ." '%s'",
    'L_SAVING_DATA_TO_MULTIPART_FILE' => "Maximal filstorlek uppnådd:"
    ." fortsätter med filen '%s'",
    'L_SAVING_DB_FORM' => "Databas",
    'L_SAVING_TABLE' => "Sparar tabellen",
    'L_SEARCH_ACCESS_KEYS' => "Bläddra: framåt=ALT+V,"
    ." tillbaka=ALT+C",
    'L_SEARCH_IN_TABLE' => "Sök i tabell",
    'L_SEARCH_NO_RESULTS' => "Sökningen på \"<b>%s</b>\" i"
    ." tabellen \"<b>%s</b>\" gav inga"
    ." träffar!",
    'L_SEARCH_OPTIONS' => "Sökinställningar",
    'L_SEARCH_OPTIONS_AND' => "en kolumn måste innehålla alla"
    ." sökord (OCH-sökning)",
    'L_SEARCH_OPTIONS_CONCAT' => "en datapost måste innehålla alla"
    ." sökord, dessa kan dock befinna sig i"
    ." olika kolumner (stor"
    ." serverbelastning!)",
    'L_SEARCH_OPTIONS_OR' => "en kolumn måste innehålla minst ett"
    ." sökord (ELLER-sökning)",
    'L_SEARCH_RESULTS' => "Sökningen på \"<b>%s</b>\" i"
    ." tabellen \"<b>%s</b>\" gav följande"
    ." resultat",
    'L_SECOND' => "Sekund",
    'L_SECONDS' => "sekunder",
    'L_SELECT' => "Välj",
    'L_SELECTALL' => "markera alla",
    'L_SELECTED_FILE' => "Vald fil",
    'L_SELECT_FILE' => "Välj fil",
    'L_SELECT_LANGUAGE' => "Välj språk",
    'L_SENDMAIL' => "Sendmail",
    'L_SENDRESULTASFILE' => "Skicka resultatet som fil",
    'L_SEND_MAIL_FORM' => "Skicka epost",
    'L_SERVER' => "Server",
    'L_SERVERCAPTION' => "Visning av server",
    'L_SETPRIMARYKEYSFOR' => "Sätt nya primärnycklar för tabellen",
    'L_SHOWING_ENTRY_X_TO_Y_OF_Z' => "Visa post %s till %s av %s",
    'L_SHOWRESULT' => "Visa resultatet",
    'L_SMTP' => "SMTP",
    'L_SMTP_HOST' => "SMTP-server",
    'L_SMTP_PORT' => "SMTP-port",
    'L_SOCKET' => "Socket",
    'L_SPEED' => "Hastighet",
    'L_SQLBOX' => "SQL-box",
    'L_SQLBOXHEIGHT' => "SQL-fältets höjd",
    'L_SQLLIB_ACTIVATEBOARD' => "Aktivera forumet",
    'L_SQLLIB_BOARDS' => "Forum",
    'L_SQLLIB_DEACTIVATEBOARD' => "Deaktivera forumet",
    'L_SQLLIB_GENERALFUNCTIONS' => "allmäna funktioner",
    'L_SQLLIB_RESETAUTO' => "återställ auto-värde",
    'L_SQLLIMIT' => "Antal datasatser per sida",
    'L_SQL_ACTIONS' => "Aktioner",
    'L_SQL_AFTER' => "efter",
    'L_SQL_ALLOWDUPS' => "Tillåt duplikat",
    'L_SQL_ATPOSITION' => "infoga vid position",
    'L_SQL_ATTRIBUTES' => "Attribut",
    'L_SQL_BACKDBOVERVIEW' => "tillbaka till databas-översikten",
    'L_SQL_BEFEHLNEU' => "nytt kommando",
    'L_SQL_BEFEHLSAVED1' => "SQL-kommando",
    'L_SQL_BEFEHLSAVED2' => "har lagts till",
    'L_SQL_BEFEHLSAVED3' => "har sparats",
    'L_SQL_BEFEHLSAVED4' => "har flyttats upp",
    'L_SQL_BEFEHLSAVED5' => "har raderats",
    'L_SQL_BROWSER' => "SQL-läsare",
    'L_SQL_CARDINALITY' => "Kardinalitet",
    'L_SQL_CHANGED' => "har ändrats.",
    'L_SQL_CHANGEFIELD' => "ändra fält",
    'L_SQL_CHOOSEACTION' => "Välj aktion",
    'L_SQL_COLLATENOTMATCH' => "Teckensats och sortering passar ej"
    ." ihop!",
    'L_SQL_COLUMNS' => "Kolumner",
    'L_SQL_COMMANDS' => "SQL-kommandon",
    'L_SQL_COMMANDS_IN' => "rader bearbetade i",
    'L_SQL_COMMANDS_IN2' => "sekund(er).",
    'L_SQL_COPYDATADB' => "Kopiera hela databasen till",
    'L_SQL_COPYSDB' => "Kopiera databasens struktur",
    'L_SQL_COPYTABLE' => "Kopiera tabellen",
    'L_SQL_CREATED' => "har skapats.",
    'L_SQL_CREATEINDEX' => "skapa nytt index",
    'L_SQL_CREATETABLE' => "skapa tabell",
    'L_SQL_DATAVIEW' => "Datavy",
    'L_SQL_DBCOPY' => "Innehållet i databas `%s` har"
    ." kopierats till databas `%s`.",
    'L_SQL_DBSCOPY' => "Strukturen i databas `%s` har"
    ." kopierats till databas `%s`.",
    'L_SQL_DELETED' => "har raderats.",
    'L_SQL_DELETEDB' => "Radera databasen",
    'L_SQL_DESTTABLE_EXISTS' => "Måltabellen existerar redan!",
    'L_SQL_EDIT' => "bearbeta",
    'L_SQL_EDITFIELD' => "Bearbeta fält",
    'L_SQL_EDIT_TABLESTRUCTURE' => "Bearbeta tabellens struktur",
    'L_SQL_EMPTYDB' => "Töm databasen",
    'L_SQL_ERROR1' => "Fel i förfrågningen:",
    'L_SQL_ERROR2' => "MySQL svarar:",
    'L_SQL_EXEC' => "Utför SQL-kommandot",
    'L_SQL_EXPORT' => "Export ur databasen `%s`",
    'L_SQL_FIELDDELETE1' => "Fältet",
    'L_SQL_FIELDNAMENOTVALID' => "Fel: fältnamnet ej giltigt",
    'L_SQL_FIRST' => "först",
    'L_SQL_IMEXPORT' => "Import/export",
    'L_SQL_IMPORT' => "Import till databasen `%s`",
    'L_SQL_INDEXES' => "Index",
    'L_SQL_INSERTFIELD' => "infoga fält",
    'L_SQL_INSERTNEWFIELD' => "infoga nytt fält",
    'L_SQL_LIBRARY' => "SQL-bibliotek",
    'L_SQL_NAMEDEST_MISSING' => "Namn saknas för måldatabasen!",
    'L_SQL_NEWFIELD' => "Nytt fält",
    'L_SQL_NODATA' => "inga dataposter",
    'L_SQL_NODEST_COPY' => "Utan mål kan kopiering ej utföras!",
    'L_SQL_NOFIELDDELETE' => "Radering ej möjlig eftersom en tabell"
    ." måste innehålla minst ett fält.",
    'L_SQL_NOTABLESINDB' => "Det finns inga tabeller i databasen",
    'L_SQL_NOTABLESSELECTED' => "Inga tabeller har valts!",
    'L_SQL_OPENFILE' => "Öppna SQL-fil",
    'L_SQL_OPENFILE_BUTTON' => "Ladda upp",
    'L_SQL_OUT1' => "Det har utförts",
    'L_SQL_OUT2' => "kommandon",
    'L_SQL_OUT3' => "Det fanns",
    'L_SQL_OUT4' => "kommantarer",
    'L_SQL_OUT5' => "Eftersom resultatet har över 5000"
    ." rader visas det ej här.",
    'L_SQL_OUTPUT' => "SQL-resultat",
    'L_SQL_QUERYENTRY' => "Frågan innehåller",
    'L_SQL_RECORDDELETED' => "Dataposten har raderats",
    'L_SQL_RECORDEDIT' => "ändra dataposten",
    'L_SQL_RECORDINSERTED' => "Dataposten har sparats",
    'L_SQL_RECORDNEW' => "infoga datapost",
    'L_SQL_RECORDUPDATED' => "Dataposten har ändrats",
    'L_SQL_RENAMEDB' => "Ombenämn databas",
    'L_SQL_RENAMEDTO' => "har ombenämnts till",
    'L_SQL_SCOPY' => "Tabellenstrukturen i `%s` har"
    ." kopierats till tabellen `%s`.",
    'L_SQL_SEARCH' => "Sökning",
    'L_SQL_SEARCHWORDS' => "Sökord",
    'L_SQL_SELECTTABLE' => "välj tabell",
    'L_SQL_SHOWDATATABLE' => "Visa datan i tabellen",
    'L_SQL_STRUCTUREDATA' => "Struktur och data",
    'L_SQL_STRUCTUREONLY' => "endast struktur",
    'L_SQL_TABLEEMPTIED' => "Tabellen `%s` har tömts.",
    'L_SQL_TABLEEMPTIEDKEYS' => "Tabellen `%s` har tömts och index har"
    ." återställts.",
    'L_SQL_TABLEINDEXES' => "Index i tabellen",
    'L_SQL_TABLENEW' => "Bearbeta tabeller",
    'L_SQL_TABLENOINDEXES' => "Tabellen innehåller inga index",
    'L_SQL_TABLENONAME' => "Tabellen måste ha ett namn!",
    'L_SQL_TABLESOFDB' => "Tabeller i databasen",
    'L_SQL_TABLEVIEW' => "Tabellvy",
    'L_SQL_TBLNAMEEMPTY' => "Tabellens namn får ej vara tomt!",
    'L_SQL_TBLPROPSOF' => "Tabellegenskaper för",
    'L_SQL_TCOPY' => "Tabell `%s` kopierades med datan till"
    ." tabell `%s`.",
    'L_SQL_UPLOADEDFILE' => "laddad fil:",
    'L_SQL_VIEW_COMPACT' => "Visning: kompakt",
    'L_SQL_VIEW_STANDARD' => "Visning: normal",
    'L_SQL_VONINS' => "av totalt",
    'L_SQL_WARNING' => "Utförs SQL-kommandon kan detta"
    ." förändra data! Autorn ansvarar ej"
    ." för förlust av data.",
    'L_SQL_WASCREATED' => "har skapats",
    'L_SQL_WASEMPTIED' => "har tömts",
    'L_STARTDUMP' => "Starta backup",
    'L_START_RESTORE_DB_FILE' => "Påbörjar återställningen av"
    ." databasen '%s' ur filen '%s'.",
    'L_START_SQL_SEARCH' => "Starta sökningen",
    'L_STATUS' => "Status",
    'L_STATUS' => "Status",
    'L_STEP' => "Steg",
    'L_SUCCESS_CONFIGFILE_CREATED' => "Konfigureringsfilen \"%s\" har"
    ." skapats.",
    'L_SUCCESS_DELETING_CONFIGFILE' => "Konfigureringsfilen \"%s\" har"
    ." raderats.",
    'L_TABLE' => "Tabell",
    'L_TABLES' => "Tabeller",
    'L_TABLESELECTION' => "Välj tabeller",
    'L_TABLE_CREATE_SUCC' => "Tabellen '%s' har skapats.",
    'L_TABLE_TYPE' => "Typ",
    'L_TESTCONNECTION' => "Testa förbindelsen",
    'L_THEME' => "Stil",
    'L_TIME' => "Tid",
    'L_TIMESTAMP' => "Tidstämpel",
    'L_TITLE_INDEX' => "Index",
    'L_TITLE_KEY_FULLTEXT' => "Fulltextnyckel",
    'L_TITLE_KEY_PRIMARY' => "Primär nyckel",
    'L_TITLE_KEY_UNIQUE' => "Unik nyckel",
    'L_TITLE_MYSQL_HELP' => "MySQL dokumentation",
    'L_TITLE_NOKEY' => "Ingen nyckel",
    'L_TITLE_SEARCH' => "Sök",
    'L_TITLE_SHOW_DATA' => "Visa data",
    'L_TITLE_UPLOAD' => "Ladda upp SQL-fil",
    'L_TO' => "till",
    'L_TOOLS' => "Verktyg",
    'L_TOOLS' => "Verktyg",
    'L_TOOLS_TOOLBOX' => "Välj databas / Databasfunktioner /"
    ." Import/Export",
    'L_UNIT_KB' => "Kilobyte",
    'L_UNIT_MB' => "Megabyte",
    'L_UNIT_PIXEL' => "Pixel",
    'L_UNKNOWN' => "okänd",
    'L_UNKNOWN_SQLCOMMAND' => "Okänt SQL-kommando:",
    'L_UPDATE' => "Aktualisera",
    'L_UPTO' => "upp till",
    'L_USERNAME' => "Användarnamn",
    'L_USE_SSL' => "Använd SSL",
    'L_VALUE' => "Innehåll",
    'L_VERSIONSINFORMATIONEN' => "Versionsinformationer",
    'L_VIEW' => "visa",
    'L_VISIT_HOMEPAGE' => "Besök hemsidan",
    'L_VOM' => "den",
    'L_WITH' => "med",
    'L_WITHATTACH' => "med bilaga",
    'L_WITHOUTATTACH' => "utan bilaga",
    'L_WITHPRAEFIX' => "med prefix",
    'L_WRONGCONNECTIONPARS' => "Fel eller inga"
    ." förbindelse-parametrar!",
    'L_WRONG_CONNECTIONPARS' => "Fel förbindelseparametrar!",
    'L_WRONG_RIGHTS' => "Filen eller mappen '%s' kan ej skrivas"
    ." till.<br />Antingen har den fel ägare"
    ." (Owner) eller fel behörigheter"
    ." (Chmod).<br />Ställ in rätt attribut"
    ." med ett FTP-program. <br />Filen eller"
    ." mappen måste ha %s.<br />",
    'L_YES' => "ja",
));
