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
    'L_ACTION' => "Azione",
    'L_ACTIVATED' => "attivato",
    'L_ACTUALLY_INSERTED_RECORDS' => "Finora <b>%s</b> records sono stati"
    ." aggiunti con successo.",
    'L_ACTUALLY_INSERTED_RECORDS_OF' => "Finora <b>%s</b> di <b>%s</b> records"
    ." sono stati aggiunti con successo.",
    'L_ADD' => "Aggiungi",
    'L_ADDED' => "aggiunto",
    'L_ADD_DB_MANUALLY' => "Aggiungi database manualmente",
    'L_ADD_RECIPIENT' => "Aggiungi destinatario",
    'L_ALL' => "tutti",
    'L_ANALYZE' => "Analizza",
    'L_ANALYZING_TABLE' => "La tabella '<b>%s</b>' sta per essere"
    ." ripristinata.",
    'L_ASKDBCOPY' => "Vuoi copiare il database `%s` nel"
    ." database `%s`?",
    'L_ASKDBDELETE' => "Vuoi cancellare il database `%s` con"
    ." tutto il suo contenuto?",
    'L_ASKDBEMPTY' => "Vuoi veramente svuotare il database"
    ." `%s` ?",
    'L_ASKDELETEFIELD' => "Vuoi cancellare il campo?",
    'L_ASKDELETERECORD' => "Sei sicuro di cancellare questo"
    ." record?",
    'L_ASKDELETETABLE' => "Vuoi cancellare la tabella `%s` ?",
    'L_ASKTABLEEMPTY' => "Vuoi svuotare la tabella `%s` ?",
    'L_ASKTABLEEMPTYKEYS' => "Vuoi svuotare la tabella `%s` e"
    ." reimpostare l`indice?",
    'L_ATTACHED_AS_FILE' => "allegato come file",
    'L_ATTACH_BACKUP' => "Allega backup",
    'L_AUTHORIZE' => "Autorizza",
    'L_AUTODELETE' => "Cancella i backup automaticamente",
    'L_BACK' => "indietro",
    'L_BACKUPFILESANZAHL' => "Nella directory di backup ci sono",
    'L_BACKUPS' => "Backups",
    'L_BACKUP_DBS' => "Database di cui fare il backup",
    'L_BACKUP_TABLE_DONE' => "Scaricamento della tabella `%s`"
    ." completato. %s record sono stati"
    ." salvati.",
    'L_BACK_TO_OVERVIEW' => "Riassunto database",
    'L_BACK_TO_OVERVIEW' => "Riepilogo database",
    'L_CALL' => "Chiamata",
    'L_CANCEL' => "Cancella",
    'L_CANT_CREATE_DIR' => "Impossibile creare la directory '%s'."
    ." Createla utilizzando il vostro"
    ." programma FTP.",
    'L_CHANGE' => "cambia",
    'L_CHANGEDIR' => "cambia directory",
    'L_CHANGEDIR' => "Cambia directory",
    'L_CHANGEDIRERROR' => "Impossibile cambiare directory",
    'L_CHANGEDIRERROR' => "Impossibile cambiare directory!",
    'L_CHARSET' => "Set di caratteri",
    'L_CHECK' => "Controlla",
    'L_CHECK' => "verifica",
    'L_CHECK_DIRS' => "verifica le mie directory",
    'L_CHOOSE_CHARSET' => "MySQLDumper non può rilevare"
    ." automaticamente la codifica del file"
    ." di backup.<br /> Devi inserire"
    ." manualmente il set di caratteri"
    ." standard con cui è stato salvato"
    ." questo backup.<br /> Se riscontri dei"
    ." problemi con alcuni caratteri dopo il"
    ." ripristino, puoi ripetere l'operazione"
    ." di backup e quindi scegliere un altro"
    ." set di caratteri. <br />Buona"
    ." fortuna.;)",
    'L_CHOOSE_DB' => "Seleziona database",
    'L_CLEAR_DATABASE' => "Svuota il database",
    'L_CLOSE' => "Chiuso",
    'L_COLLATION' => "Confronta",
    'L_COMMAND' => "Comando",
    'L_COMMAND' => "Comando",
    'L_COMMAND_AFTER_BACKUP' => "Comando dopo il backup",
    'L_COMMAND_BEFORE_BACKUP' => "Comando prima del backup",
    'L_COMMENT' => "Commento",
    'L_COMPRESSED' => "compresso (gz)",
    'L_CONFBASIC' => "Parametri di base",
    'L_CONFIG' => "Configurazione",
    'L_CONFIGFILE' => "File di configurazione",
    'L_CONFIGFILES' => "Files di configurazione",
    'L_CONFIGURATIONS' => "Configurazioni",
    'L_CONFIG_AUTODELETE' => "Cancellazione automatica",
    'L_CONFIG_CRONPERL' => "Impostazioni Crondump per lo script in"
    ." Perl",
    'L_CONFIG_EMAIL' => "Notifica via e-email",
    'L_CONFIG_FTP' => "Trasferimento dei file di backup via"
    ." FTP",
    'L_CONFIG_HEADLINE' => "Configurazione",
    'L_CONFIG_INTERFACE' => "Interfaccia",
    'L_CONFIG_LOADED' => "La configurazione \"%s\" è stata"
    ." importata con successo.",
    'L_CONFIRM_CONFIGFILE_DELETE' => "Vuoi veramente cancellare il file di"
    ." configurazione %s ?",
    'L_CONFIRM_DELETE_TABLES' => "Vuoi veramente cancellare le tabelle"
    ." selezionate?",
    'L_CONFIRM_DROP_DATABASES' => "Vuoi veramente eliminare i database"
    ." selezionati? Attenzione: tutti i dati"
    ." saranno cancellati! E' consigliato"
    ." eseguire un backup prima di procedere.",
    'L_CONFIRM_RECIPIENT_DELETE' => "Vuoi veramente cancellare il"
    ." destinatario \"% s\"?",
    'L_CONFIRM_TRUNCATE_DATABASES' => "Vuoi veramente eliminare tutte le"
    ." tabelle dei database selezionati?"
    ." Attenzione: tutti i dati saranno"
    ." cancellati! E' consigliato eseguire un"
    ." backup prima di procedere.",
    'L_CONFIRM_TRUNCATE_TABLES' => "Vuoi veramente svuotare le tabelle"
    ." selezionate?",
    'L_CONNECT' => "connetti",
    'L_CONNECTIONPARS' => "Parametri di connessione",
    'L_CONNECTTOMYSQL' => "connetti a MySQL",
    'L_CONTINUE_MULTIPART_RESTORE' => "Continua il ripristino multiplo con il"
    ." prossimo file '%'.",
    'L_CONVERTED_FILES' => "Files convertiti",
    'L_CONVERTER' => "Convertitore di Backup",
    'L_CONVERTING' => "Conversione del file",
    'L_CONVERT_FILE' => "File da convertire",
    'L_CONVERT_FILENAME' => "Nome del file di destinazione (senza"
    ." estensione)",
    'L_CONVERT_FILEREAD' => "Lettura file '%s'",
    'L_CONVERT_FINISHED' => "Conversione terminata. Il file '%s' è"
    ." stato scritto con successo.",
    'L_CONVERT_START' => "Inizia la conversione",
    'L_CONVERT_TITLE' => "Converti il file di Dump nel formato"
    ." MSD",
    'L_CONVERT_WRONG_PARAMETERS' => "Parametri errati!  Conversione non"
    ." possibile.",
    'L_CREATE' => "Crea",
    'L_CREATEAUTOINDEX' => "Crea indice automatico",
    'L_CREATEDIRS' => "crea directory",
    'L_CREATE_CONFIGFILE' => "Crea un nuovo file di configurazione",
    'L_CREATE_DATABASE' => "Crea un nuovo database",
    'L_CREATE_TABLE_SAVED' => "Definizione della tabella `%s'"
    ." salvato.",
    'L_CREDITS' => "Crediti/Aiuto",
    'L_CRONSCRIPT' => "Cronscript",
    'L_CRON_COMMENT' => "Inserisci commento",
    'L_CRON_COMPLETELOG' => "Tieni traccia di tutte le operazioni",
    'L_CRON_EXECPATH' => "Percorso degli script Perl",
    'L_CRON_EXTENDER' => "Estensione del file",
    'L_CRON_PRINTOUT' => "Visualizza i risultati",
    'L_CSVOPTIONS' => "Opzioni CSV",
    'L_CSV_EOL' => "Linee separate con",
    'L_CSV_ERRORCREATETABLE' => "Errore nella creazione della tabella"
    ." `%s` !",
    'L_CSV_FIELDCOUNT_NOMATCH' => "Il numero dei campi non corrisponde"
    ." con i dati da importare (%d invece di"
    ." %d).",
    'L_CSV_FIELDSENCLOSED' => "Campi inclusi in",
    'L_CSV_FIELDSEPERATE' => "Campi separati con",
    'L_CSV_FIELDSESCAPE' => "Campi persi con",
    'L_CSV_FIELDSLINES' => "%d campi trovati, totale %d righe",
    'L_CSV_FILEOPEN' => "Apri file CSV",
    'L_CSV_NAMEFIRSTLINE' => "Nomi del campo nella prima riga",
    'L_CSV_NODATA' => "Nessun dato da importare!",
    'L_CSV_NULL' => "Sostituisci NULL con",
    'L_DATASIZE' => "Dimensione dei dati",
    'L_DATASIZE_INFO' => "Questa è la dimensione dei dati"
    ." contenuti nel database, non la"
    ." dimensione del file di backup",
    'L_DAY' => "Giorno",
    'L_DAYS' => "Giorni",
    'L_DB' => "Database",
    'L_DBCONNECTION' => "Connessione al database",
    'L_DBPARAMETER' => "Parametri database",
    'L_DBS' => "Database",
    'L_DB_BACKUPPARS' => "Parametri per il backup del database",
    'L_DB_HOST' => "Ip del database",
    'L_DB_IN_LIST' => "Il database '%s' non può essere"
    ." aggiunto, perchè è già esistente.",
    'L_DB_PASS' => "Password del database",
    'L_DB_SELECT_ERROR' => "<br />Errore:<br />Selezione del"
    ." database <b>",
    'L_DB_SELECT_ERROR2' => "</b> fallito!",
    'L_DB_USER' => "Utente del database",
    'L_DEFAULT_CHARSET' => "Set di caretteri standard",
    'L_DELETE' => "Cancella",
    'L_DELETE_DATABASE' => "Elimina il database",
    'L_DELETE_FILE_ERROR' => "Errore nella cancellazione file"
    ." \"%s\"!",
    'L_DELETE_FILE_SUCCESS' => "Il file \"%s\" è stato cancellato con"
    ." successo.",
    'L_DELETE_HTACCESS' => "Rimuovi la protezione (cancella"
    ." .htaccess)",
    'L_DESELECTALL' => "Deseleziona tutto",
    'L_DIR' => "Directory",
    'L_DISABLEDFUNCTIONS' => "Funzioni disabilitate",
    'L_DISABLEDFUNCTIONS' => "Funzioni disabilitate",
    'L_DO' => "Esegui",
    'L_DOCRONBUTTON' => "Esegui Cronscript Perl",
    'L_DONE' => "Completato!",
    'L_DONT_ATTACH_BACKUP' => "Non allegare backup",
    'L_DOPERLTEST' => "Prova il modulo Perl",
    'L_DOSIMPLETEST' => "Prova Perl",
    'L_DOWNLOAD_FILE' => "Scarica file",
    'L_DO_NOW' => "esegui ora",
    'L_DUMP' => "Backup",
    'L_DUMP_ENDERGEBNIS' => "Il file contiene <b>%s</b> tabelle con"
    ." <b>%s</b> record.<br />",
    'L_DUMP_FILENAME' => "File di backup",
    'L_DUMP_HEADLINE' => "Crea backup...",
    'L_DUMP_NOTABLES' => "Nessuna tabella trovata nel database"
    ." `%s`",
    'L_DUMP_OF_DB_FINISHED' => "Scaricamento del database `%s`"
    ." effettuato",
    'L_DURATION' => "Durata",
    'L_EDIT' => "modifica",
    'L_EHRESTORE_CONTINUE' => "continua e registra gli errori",
    'L_EHRESTORE_STOP' => "ferma",
    'L_EMAIL' => "E-mail",
    'L_EMAILBODY_ATTACH' => "L'allegato contiene il backup del tuo"
    ." Database MySql.<br />Backup del"
    ." database `%s`<br /><br />E' stato"
    ." creato il seguente file:<br /><br />%s"
    ." <br /><br />Distinti saluti<br /><br"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_FOOTER' => "`<br /><br />Distinti saluti<br /><br"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_MP_ATTACH' => "È stato creato un backup"
    ." multipart.<br />I files di backup"
    ." saranno allegati ad email separate!<br"
    ." />Backup del database`%s`
<br /><br"
    ." />I seguenti file sono stati"
    ." creati:<br /><br />%s<br /><br /><br"
    ." />Distinti saluti<br /><br"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_MP_NOATTACH' => "È stato creato un backup"
    ." multipart.<br />I files di backup non"
    ." saranno allegati a questa email!<br"
    ." />Backup del database `%s`
<br /><br"
    ." />I seguenti file sono stati"
    ." creati:<br /><br />%s<br /><br /><br"
    ." />Distinti saluti<br /><br"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_NOATTACH' => "Nessun file allegato a questa"
    ." email!<br />Backup del database"
    ." `%s`
<br /><br />Sono stati creati i"
    ." seguenti file:<br /><br />%s
<br /><br"
    ." />Distinti saluti<br /><br"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_TOOBIG' => "Il file di backup supera la dimensione"
    ." massima di %s e non sarà allegato a"
    ." questa email.<br />Backup del database"
    ." `%s`
<br /><br />I seguenti file sono"
    ." stati creati:<br /><br />%s
<br /><br"
    ." />Distinti saluti<br /><br"
    ." />MySQLDumper<br />",
    'L_EMAIL_ADDRESS' => "Indirizzo e-mail",
    'L_EMAIL_CC' => "Destinatario dell'e-mail in CC",
    'L_EMAIL_MAXSIZE' => "Dimensione massima degli allegati",
    'L_EMAIL_ONLY_ATTACHMENT' => "...solo allegati.",
    'L_EMAIL_RECIPIENT' => "Destinatario dell'e-mail",
    'L_EMAIL_SENDER' => "E-mail del mittente",
    'L_EMAIL_START' => "Inizio invio e-mail",
    'L_EMAIL_WAS_SEND' => "L`e-mail è stata spedita con successo"
    ." a",
    'L_EMPTY' => "Svuota",
    'L_EMPTYKEYS' => "svuota e cancella gli indici",
    'L_EMPTYTABLEBEFORE' => "Svuota la tabella prima",
    'L_EMPTY_DB_BEFORE_RESTORE' => "Cancella le tabelle prima del"
    ." ripristino",
    'L_ENCODING' => "Codifica",
    'L_ENCRYPTION_TYPE' => "Tipo di crittografia",
    'L_ENGINE' => "Motore",
    'L_ENTER_DB_INFO' => "Cliccate prima sul pulsante \"Connetti"
    ." a MySQL\". Solo se nessun database"
    ." viene rilevato, è necessario inserire"
    ." qui il nome.",
    'L_ENTRY' => "Registrazione",
    'L_ERROR' => "Errore",
    'L_ERRORHANDLING_RESTORE' => "Gestione degli errori durante il"
    ." ripristino",
    'L_ERROR_CONFIGFILE_NAME' => "Il file \"%s\" contiene dei caratteri"
    ." non validi.",
    'L_ERROR_DELETING_CONFIGFILE' => "Errore: il file di configurazione %s"
    ." non può essere cancellato!",
    'L_ERROR_LOADING_CONFIGFILE' => "Il file di configurazione \"%s\" non"
    ." può essere caricato.",
    'L_ERROR_LOG' => "Log degli errori",
    'L_ERROR_MULTIPART_RESTORE' => "Ripristino multiplo: impossibile"
    ." trovare il prossimo file '%s'!",
    'L_ESTIMATED_END' => "Fine stimata",
    'L_EXCEL2003' => "Excel dalla versione 2003",
    'L_EXISTS' => "Esistente",
    'L_EXPORT' => "Esporta",
    'L_EXPORTFINISHED' => "Esportazione completata.",
    'L_EXPORTLINES' => "<strong>%s</strong> righe esportate",
    'L_EXPORTOPTIONS' => "Opzioni di esportazione",
    'L_EXTENDEDPARS' => "Parametri estesi",
    'L_FADE_IN_OUT' => "visualizza/nascondi",
    'L_FATAL_ERROR_DUMP' => "Errore fatale: l'istruzione di"
    ." creazione della tabella '%s' nel"
    ." database '%s' non poteva essere letta!",
    'L_FIELDS' => "Campi",
    'L_FIELDS_OF_TABLE' => "Campi della tabella",
    'L_FILE' => "File",
    'L_FILES' => "Files",
    'L_FILESIZE' => "Dimensione file",
    'L_FILE_MANAGE' => "Amministrazione file",
    'L_FILE_OPEN_ERROR' => "Errore: impossibile aprire il file.",
    'L_FILE_SAVED_SUCCESSFULLY' => "Il file è stato correttamente"
    ." salvato.",
    'L_FILE_SAVED_UNSUCCESSFULLY' => "Il file non è stato salvato!",
    'L_FILE_UPLOAD_SUCCESSFULL' => "Il file '%s' è stato caricato con"
    ." successo.",
    'L_FILTER_BY' => "Filtra tramite",
    'L_FM_ALERTRESTORE1' => "Deve il database",
    'L_FM_ALERTRESTORE2' => "essere ripristinato",
    'L_FM_ALERTRESTORE3' => "con i dati contenuti nel file?",
    'L_FM_ALL_BU' => "Tutti i backups",
    'L_FM_ANZ_BU' => "Backups",
    'L_FM_ASKDELETE1' => "Vuoi che il file(s)",
    'L_FM_ASKDELETE2' => "sia veramente cancellato?",
    'L_FM_ASKDELETE3' => "Vuoi effettuare ora la cancellazione"
    ." automatica secondo le regole"
    ." impostate?",
    'L_FM_ASKDELETE4' => "Vuoi cancellare tutti i files di"
    ." backup?",
    'L_FM_ASKDELETE5' => "Vuoi cancellare tutti i file di backup"
    ." con",
    'L_FM_ASKDELETE5_2' => "* ?",
    'L_FM_AUTODEL1' => "Cancellazione automatica: i seguenti"
    ." file sono stati cancellati poichè è"
    ." stato raggiunto il massimo numero di"
    ." file impostato:",
    'L_FM_CHOOSE_ENCODING' => "Scegli la codifica del file di backup:",
    'L_FM_COMMENT' => "Inserisci commento",
    'L_FM_DBNAME' => "Nome del database",
    'L_FM_DELETE' => "Cancella",
    'L_FM_DELETE1' => "Il file",
    'L_FM_DELETE2' => "è stato cancellato con successo.",
    'L_FM_DELETE3' => "non può essere cancellato!",
    'L_FM_DELETEALL' => "Cancella tutti i file di backup",
    'L_FM_DELETEALLFILTER' => "Cancella tutti con",
    'L_FM_DELETEAUTO' => "Esegui la cancellazione automatica"
    ." manualmente",
    'L_FM_DUMPSETTINGS' => "Configurazione",
    'L_FM_DUMP_HEADER' => "Backup",
    'L_FM_FILEDATE' => "Data",
    'L_FM_FILES1' => "Backup Database",
    'L_FM_FILESIZE' => "Dimensione file",
    'L_FM_FILEUPLOAD' => "Carica file",
    'L_FM_FILEUPLOAD' => "Carica il file",
    'L_FM_FREESPACE' => "Spazio libero sul server",
    'L_FM_LAST_BU' => "Ultimo backup",
    'L_FM_NOFILE' => "Non hai selezionato alcun file!",
    'L_FM_NOFILESFOUND' => "Nessun file trovato.",
    'L_FM_RECORDS' => "Record",
    'L_FM_RESTORE' => "Ripristina",
    'L_FM_RESTORE_HEADER' => "Ripristino del database"
    ." `<strong>%s</strong>`",
    'L_FM_SELECTTABLES' => "Scegli le tabelle",
    'L_FM_STARTDUMP' => "Avvia un nuovo backup",
    'L_FM_TABLES' => "Tabelle",
    'L_FM_TOTALSIZE' => "Dimensione totale",
    'L_FM_UPLOADFAILED' => "Il caricamento è fallito!",
    'L_FM_UPLOADFILEEXISTS' => "Esiste gia un file con questo nome!",
    'L_FM_UPLOADFILEREQUEST' => "Prego, selezionare un file.",
    'L_FM_UPLOADFILEREQUEST' => "Scegli un file.",
    'L_FM_UPLOADMOVEERROR' => "Non è stato possibile spostare il"
    ." file selezionato, nella directory di"
    ." upload.",
    'L_FM_UPLOADNOTALLOWED1' => "Questo tipo di file non è supportato.",
    'L_FM_UPLOADNOTALLOWED2' => "I tipi di file validi sono: *.gz e"
    ." *.sql",
    'L_FOUND_DB' => "database trovato:",
    'L_FROMFILE' => "dal file",
    'L_FROMTEXTBOX' => "dal campo testo",
    'L_FTP' => "FTP",
    'L_FTP_ADD_CONNECTION' => "Aggiungi connessione",
    'L_FTP_CHOOSE_MODE' => "Modalità di trasferimento FTP",
    'L_FTP_CONFIRM_DELETE' => "Vuoi veramente che questa connessione"
    ." FTP sia eliminata?",
    'L_FTP_CONNECTION' => "Connessione FTP",
    'L_FTP_CONNECTION_CLOSED' => "Connessione FTP chiusa",
    'L_FTP_CONNECTION_DELETE' => "Cancella connessione",
    'L_FTP_CONNECTION_ERROR' => "La connessione al server '%s', che"
    ." utilizza la porta %s, non può essere"
    ." stabilita",
    'L_FTP_CONNECTION_SUCCESS' => "La connessione al server '%s', che"
    ." utilizza la porta %s, è stata"
    ." stabilita con successo",
    'L_FTP_DIR' => "Directory di upload",
    'L_FTP_FILE_TRANSFER_ERROR' => "Errore nel trasferimento del file '%s'",
    'L_FTP_FILE_TRANSFER_SUCCESS' => "Il file '%s' è stato trasferito con"
    ." successo",
    'L_FTP_LOGIN_ERROR' => "Accesso negato per l'utente '%s'",
    'L_FTP_LOGIN_SUCCESS' => "Accesso come utente '%s' effettuato",
    'L_FTP_OK' => "I parametri FTP sono corretti",
    'L_FTP_OK' => "La connessione è stata eseguita con"
    ." successo.",
    'L_FTP_PASS' => "Password",
    'L_FTP_PASSIVE' => "usa modalità passiva",
    'L_FTP_PASV_ERROR' => "Impossibile passare alla modalità"
    ." passiva!",
    'L_FTP_PASV_SUCCESS' => "Il passaggio alla modalità passiva,"
    ." è avvenuto con successo!",
    'L_FTP_PORT' => "Porta",
    'L_FTP_SEND_TO' => "a <strong>%s</strong><br />in"
    ." <strong>%s</strong>",
    'L_FTP_SERVER' => "Server",
    'L_FTP_SSL' => "Connessione FTP sicura",
    'L_FTP_START' => "Inizio trasferimento FTP",
    'L_FTP_TIMEOUT' => "Timeout connessione",
    'L_FTP_TRANSFER' => "Trasferimento FTP",
    'L_FTP_USER' => "Utente",
    'L_FTP_USESSL' => "usa connessione SSL",
    'L_GENERAL' => "generale",
    'L_GENERAL' => "Generale",
    'L_GZIP' => "Compressione GZip",
    'L_GZIP_COMPRESSION' => "Compressione GZip",
    'L_HOME' => "Pagina iniziale",
    'L_HOUR' => "Ora",
    'L_HOURS' => "Ore",
    'L_HTACC_ACTIVATE_REWRITE_ENGINE' => "Riscrittura attivata",
    'L_HTACC_ADD_HANDLER' => "Aggiungi gestore",
    'L_HTACC_CONFIRM_DELETE' => "Vuoi che la protezione delle directory"
    ." sia scritta adesso?",
    'L_HTACC_CONTENT' => "Contenuto del file",
    'L_HTACC_CREATE' => "Crea protezione directory",
    'L_HTACC_CREATED' => "La protezione delle directory è stata"
    ." inserita.",
    'L_HTACC_CREATE_ERROR' => "Si è verificato un errore nella"
    ." creazione della protezione delle"
    ." directory!<br />Create per favore"
    ." questi 2 file manualmente con il"
    ." seguente contenuto",
    'L_HTACC_CRYPT' => "Crypt max 8 caratteri(Sistemi Unix e"
    ." Linux)",
    'L_HTACC_DENY_ALLOW' => "Impedisci / Permetti",
    'L_HTACC_DIR_LISTING' => "Elenca directory",
    'L_HTACC_EDIT' => "Modifica .htaccess",
    'L_HTACC_ERROR_DOC' => "Errore documento",
    'L_HTACC_EXAMPLES' => "Altri esempi e documentazione",
    'L_HTACC_EXISTS' => "Un file di protezione è già"
    ." esistente! Se ne viene creato uno"
    ." nuovo, il vecchio sarà sovrascritto!",
    'L_HTACC_MAKE_EXECUTABLE' => "Rendi eseguibile",
    'L_HTACC_MD5' => "MD5 (Sistemi Unix e Linux)",
    'L_HTACC_NO_ENCRYPTION' => "Non crittografato (Windows)",
    'L_HTACC_NO_USERNAME' => "Devi inserire un nome!",
    'L_HTACC_PROPOSED' => "Altamente raccomandato",
    'L_HTACC_REDIRECT' => "Reindirizza",
    'L_HTACC_SCRIPT_EXEC' => "Esegui script",
    'L_HTACC_SHA1' => "SHA1 (tutti sistemi)",
    'L_HTACC_WARNING' => "Attenzione! .htaccess ha effetto"
    ." direttamente sul comportamento del"
    ." browser.<br />Se viene usato in"
    ." maniera scorretta le pagine non"
    ." saranno piu accessibili.",
    'L_IMPORT' => "Importare configurazione",
    'L_IMPORT' => "Importa",
    'L_IMPORTIEREN' => "Importa",
    'L_IMPORTOPTIONS' => "Opzioni di importazione",
    'L_IMPORTSOURCE' => "Sorgente di importazione",
    'L_IMPORTTABLE' => "Importa nella tabella",
    'L_IMPORT_NOTABLE' => "Non è stata scelta nessuna tabella"
    ." per l`importazione!",
    'L_IN' => "in",
    'L_INFO_ACTDB' => "Database selezionato",
    'L_INFO_DATABASES' => "Sul server sono presenti i seguenti"
    ." database",
    'L_INFO_DBEMPTY' => "Il database è vuoto!",
    'L_INFO_FSOCKOPEN_DISABLED' => "Su questo server, il comando PHP"
    ." fsockopen() è disabilitato di"
    ." default. Per questa ragione, lo"
    ." scaricamento automatico del pacchetto"
    ." contenente i file della lingua, non è"
    ." possibile. Per superare questo"
    ." inconveniente, è possibile scaricare"
    ." il pacchetto manualmente, estrarre i"
    ." file localmente e caricarli nella"
    ." directory \"language\" della vostra"
    ." installazione  MySQLDumper. In seguito"
    ." la nuova lingua sarà disponibile su"
    ." questo sito.",
    'L_INFO_LASTUPDATE' => "ultimo aggiornamento",
    'L_INFO_LOCATION' => "Adesso ti trovi in",
    'L_INFO_NODB' => "Il database non esiste.",
    'L_INFO_NOPROCESSES' => "nessun processo in esecuzione",
    'L_INFO_NOSTATUS' => "stato non disponibile",
    'L_INFO_NOVARS' => "nessuna variabile disponibile",
    'L_INFO_OPTIMIZED' => "ottimizzato",
    'L_INFO_RECORDS' => "Record",
    'L_INFO_RECORDS' => "record",
    'L_INFO_SIZE' => "Dimensione",
    'L_INFO_SUM' => "Totale",
    'L_INSTALL' => "Installazione",
    'L_INSTALL' => "Installazione",
    'L_INSTALLED' => "Installato",
    'L_INSTALL_HELP_PORT' => "(vuoto = porta di default)",
    'L_INSTALL_HELP_SOCKET' => "(vuoto = Socket di default)",
    'L_IS_WRITABLE' => "E' scrivibile",
    'L_KILL_PROCESS' => "Termina processo",
    'L_LANGUAGE' => "Lingua",
    'L_LASTBACKUP' => "Ultimo backup",
    'L_LOAD' => "Carica impostazioni di default",
    'L_LOAD_DATABASE' => "Ricarica database",
    'L_LOAD_FILE' => "Carica file",
    'L_LOG' => "Log",
    'L_LOGFILENOTWRITABLE' => "Il file di log non può essere"
    ." scritto!",
    'L_LOGFILENOTWRITABLE' => "Impossibile scrivere il file di log!",
    'L_LOGFILES' => "File di log",
    'L_LOG_DELETE' => "Cancella i log",
    'L_MAILERROR' => "Invio dell'email fallito!",
    'L_MAILPROGRAM' => "Programma di invio e-mail",
    'L_MAXSIZE' => "Dimensione massima",
    'L_MAX_BACKUP_FILES_EACH2' => "Per ogni database",
    'L_MAX_EXECUTION_TIME' => "Tempo massimo di esecuzione",
    'L_MAX_UPLOAD_SIZE' => "Dimensione massima del file",
    'L_MAX_UPLOAD_SIZE' => "Dimensione massima del file",
    'L_MAX_UPLOAD_SIZE_INFO' => "Se il tuo file di backup è più"
    ." grande del limite sopra impostato,"
    ." devi caricarlo tramite FTP nella"
    ." cartella \"work/backup\". In seguito"
    ." potrai sceglierlo per iniziare il"
    ." ripristino del database.",
    'L_MEMORY' => "Memoria",
    'L_MESSAGE' => "Messaggio",
    'L_MESSAGE_TYPE' => "Tipo di messaggio",
    'L_MINUTE' => "Minuto",
    'L_MINUTES' => "Minuti",
    'L_MODE_EASY' => "Semplice",
    'L_MODE_EXPERT' => "Avanzato",
    'L_MSD_INFO' => "Informazioni su MySQLDumper",
    'L_MSD_MODE' => "Modalità MySQLDumper",
    'L_MSD_VERSION' => "Versione di MySQLDumper",
    'L_MULTIDUMP' => "Dump multiplo",
    'L_MULTIDUMP_FINISHED' => "Backup di <b>%d</b> Database eseguito",
    'L_MULTIPART_ACTUAL_PART' => "Parte corrente",
    'L_MULTIPART_SIZE' => "Dimensione massima file",
    'L_MULTI_PART' => "Backup in più parti",
    'L_MYSQLVARS' => "Variabili Mysql",
    'L_MYSQL_CLIENT_VERSION' => "MySQL-Client",
    'L_MYSQL_CONNECTION_ENCODING' => "Codifica standard del Server MySQL",
    'L_MYSQL_DATA' => "Dati MySQL",
    'L_MYSQL_VERSION' => "Versione MySQL",
    'L_NAME' => "Nome",
    'L_NAME' => "Nome",
    'L_NEW' => "nuovo",
    'L_NEWTABLE' => "Nuova tabella",
    'L_NEXT_AUTO_INCREMENT' => "Prossimo indice automatico",
    'L_NEXT_AUTO_INCREMENT_SHORT' => "p. ind. aut.",
    'L_NO' => "no",
    'L_NOFTPPOSSIBLE' => "Funzioni FTP non disponibili!",
    'L_NOFTPPOSSIBLE' => "Nessuna funzione FTP disponibile!",
    'L_NOFTPPOSSIBLE' => "Funzione FTP non disponibile!",
    'L_NOGZPOSSIBLE' => "Funzione di compressione non"
    ." disponibili!",
    'L_NOGZPOSSIBLE' => "Poiché Zlib non è installato non"
    ." puoi usare la funzione GZip!",
    'L_NONE' => "nessuno",
    'L_NOREVERSE' => "Prima il piu vecchio",
    'L_NOTAVAIL' => "<em>non disponibile</em>",
    'L_NOTICE' => "Avviso",
    'L_NOTICES' => "Avvisi",
    'L_NOT_ACTIVATED' => "disattivato",
    'L_NOT_SUPPORTED' => "Questo backup non supporta questa"
    ." funzione.",
    'L_NO_DB_FOUND' => "Nessun database trovato"
    ." automaticamente! Verifica i parametri"
    ." di connessione ed inserisci il nome"
    ." del tuo database manualmente.",
    'L_NO_DB_FOUND_INFO' => "La connesione con il database è stata"
    ." stabilita con successo.<br /> I tuoi"
    ." dati utente sono validi e stati"
    ." accettati dal server MySQL.<br />"
    ." Purtroppo MySQLDumper non è in grado"
    ." di trovare alcun database<br />perchè"
    ." lo script di riconoscimento automatico"
    ." è bloccato su alcuni server.<br />"
    ." Devi quindi inserire il nome del tuo"
    ." database manualmente dopo che"
    ." l'installazione è termninata. Clicca"
    ." su \"configurazione\" \"mostra"
    ." parametri di connessione\" ed"
    ." inserisci qui il nome del database.",
    'L_NO_DB_SELECTED' => "Nessun database selezionato.",
    'L_NO_ENTRIES' => "La tabella \"<b>%s</b>\" è vuota e"
    ." non contiene nessun dato.",
    'L_NO_MSD_BACKUPFILE' => "Backup di altri programmi",
    'L_NO_NAME_GIVEN' => "Non hai inserito alcun nome.",
    'L_NR_TABLES_OPTIMIZED' => "%s tabelle sono state ottimizzate.",
    'L_NUMBER_OF_FILES_FORM' => "Cancella per numero di file per"
    ." database",
    'L_OF' => "di",
    'L_OF' => "di",
    'L_OK' => "OK",
    'L_OPTIMIZE' => "Ottimizza",
    'L_OPTIMIZE_TABLES' => "Ottimizza le tabelle prima del backup",
    'L_OPTIMIZE_TABLE_ERR' => "Errore durante la ottimizzazione della"
    ." tabella `%s`.",
    'L_OPTIMIZE_TABLE_SUCC' => "La tabella `%s' è stato ottimizzato"
    ." con successo.",
    'L_OS' => "Sistema operativo",
    'L_PAGE_REFRESHS' => "Pagine rinnovate",
    'L_PASS' => "Password",
    'L_PASSWORD' => "Password",
    'L_PASSWORDS_UNEQUAL' => "Le password non coincidono oppure sono"
    ." vuote!",
    'L_PASSWORD_REPEAT' => "Password (ripeti)",
    'L_PASSWORD_STRENGTH' => "Complessità della password",
    'L_PERLOUTPUT1' => "Valore della variabile"
    ." \"absolute_path_of_configdir\" da"
    ." inserire in crondump.pl",
    'L_PERLOUTPUT2' => "Url per il Browser oppure per un Cron"
    ." esterno",
    'L_PERLOUTPUT3' => "Comandi da inserire nella Shell oppure"
    ." nel Crontab",
    'L_PERL_COMPLETELOG' => "Log Perl completo",
    'L_PERL_LOG' => "Log Perl",
    'L_PHPBUG' => "Bug in zlib ! Compressione"
    ." impossibile!",
    'L_PHPMAIL' => "Funzione PHP mail ()",
    'L_PHP_EXTENSIONS' => "Estensioni PHP",
    'L_PHP_VERSION' => "Versione PHP",
    'L_POP3_PORT' => "Porta  POP3",
    'L_POP3_SERVER' => "Server POP3",
    'L_PORT' => "Porta",
    'L_PORT' => "Porta",
    'L_POSITION_BC' => "al centro in basso",
    'L_POSITION_BL' => "in basso a sinistra",
    'L_POSITION_BR' => "in basso a destra",
    'L_POSITION_MC' => "centrato",
    'L_POSITION_ML' => "centrata a sinistra",
    'L_POSITION_MR' => "centrata a destra",
    'L_POSITION_NOTIFICATIONS' => "Posizione della finestra del messaggio",
    'L_POSITION_TC' => "centrata in alto",
    'L_POSITION_TL' => "in alto a sinistra",
    'L_POSITION_TR' => "in alto a destra",
    'L_PREFIX' => "Prefisso",
    'L_PRIMARYKEYS_CHANGED' => "Chiavi primarie cambiate",
    'L_PRIMARYKEYS_CHANGINGERROR' => "Errore nel cambiamento delle chiavi"
    ." primarie",
    'L_PRIMARYKEYS_SAVE' => "Salva chiavi primarie",
    'L_PRIMARYKEY_CONFIRMDELETE' => "Vuoi veramente cancellare la chiave"
    ." primaria?",
    'L_PRIMARYKEY_DELETED' => "Chiave primaria cancellata",
    'L_PRIMARYKEY_FIELD' => "Campo chiave primaria",
    'L_PRIMARYKEY_NOTFOUND' => "Chiave primaria non trovata",
    'L_PROCESSKILL1' => "Lo script tenta di terminare il"
    ." processo",
    'L_PROCESSKILL2' => "terminare il processo",
    'L_PROCESSKILL3' => "Lo script tenta da",
    'L_PROCESSKILL4' => "sec. di terminare questo processo",
    'L_PROCESS_ID' => "ID processo",
    'L_PROGRESS_FILE' => "Avanzamento file",
    'L_PROGRESS_OVER_ALL' => "Avanzamento totale",
    'L_PROGRESS_OVER_ALL' => "Avanzamento totale",
    'L_PROGRESS_TABLE' => "Avanzamento della tabella",
    'L_PROVIDER' => "Provider",
    'L_PROZESSE' => "Processi",
    'L_RECHTE' => "Permessi",
    'L_RECORDS' => "Record",
    'L_RECORDS_INSERTED' => "<b>%s</b> record sono stati inseriti.",
    'L_RECORDS_PER_PAGECALL' => "Risultati per pagina",
    'L_REFRESHTIME' => "Tempo di aggiornamento",
    'L_REFRESHTIME_PROCESSLIST' => "Intervallo di aggiornamento della"
    ." lista",
    'L_RELOAD' => "Ricarica",
    'L_REMOVE' => "Eliminare",
    'L_REPAIR' => "Ripara",
    'L_RESET' => "Reset",
    'L_RESET_SEARCHWORDS' => "reimposta i termini di ricerca",
    'L_RESTORE' => "Ripristina",
    'L_RESTORE_COMPLETE' => "<b>%s</b> tabelle sono state create.",
    'L_RESTORE_DB' => "Database '<b>%s</b>' sul Server"
    ." '<b>%s</b>'.",
    'L_RESTORE_DB_COMPLETE_IN' => "Il recupero del database '%s' in %s é"
    ." completato.",
    'L_RESTORE_OF_TABLES' => "Scegli le tabelle che devono essere"
    ." ripristinate",
    'L_RESTORE_TABLE' => "Ripristino della tabella '%s'",
    'L_RESTORE_TABLES_COMPLETED' => "Finora <b>%d</b> di <b>%d</b> tabelle"
    ." sono stae create.",
    'L_RESTORE_TABLES_COMPLETED0' => "Finora <b>%d</b> tabelle sono state"
    ." create.",
    'L_REVERSE' => "Prima il piu recente",
    'L_SAFEMODEDESC' => "Poichè PHP è in esecuzione in"
    ." \"safe_mode\" devi creare manualmente"
    ." queste directory utilizzando il tuo"
    ." programma FTP:",
    'L_SAVE' => "Salva",
    'L_SAVEANDCONTINUE' => "Salva e continua con l`installazione",
    'L_SAVE_ERROR' => "Errore: impossibile salvare la"
    ." configurazione.",
    'L_SAVE_SUCCESS' => "La configurazione è stata salvata con"
    ." successo nel file di configurazione"
    ." \"%s\".",
    'L_SAVING_DATA_TO_FILE' => "Salvataggio del contenuto del database"
    ." '%s' nel file '%s'",
    'L_SAVING_DATA_TO_MULTIPART_FILE' => "E' stata raggiunta la dimensione"
    ." massima del file: continuo con il file"
    ." '%s'",
    'L_SAVING_DB_FORM' => "Database",
    'L_SAVING_TABLE' => "Salvataggio tabella",
    'L_SEARCH_ACCESS_KEYS' => "Sfogliare: avanti=ALT+V,"
    ." indietro=ALT+C",
    'L_SEARCH_IN_TABLE' => "Cerca nella tabella",
    'L_SEARCH_NO_RESULTS' => "La ricera di \"<b>%s</b>\" nella"
    ." tabella \"<b>%s</b>\" non ha prodotto"
    ." risultati!",
    'L_SEARCH_OPTIONS' => "Opzioni di ricerca",
    'L_SEARCH_OPTIONS_AND' => "una colonna deve contenere tutti i"
    ." termini da cercare (AND)",
    'L_SEARCH_OPTIONS_CONCAT' => "una riga deve contenere tutti i"
    ." termini da cercare ma questi possono"
    ." essere presenti in ogni colonna (può"
    ." richiedere diverso tempo)",
    'L_SEARCH_OPTIONS_OR' => "una colonna deve contenere almeno un"
    ." termine da cercare (OR)",
    'L_SEARCH_RESULTS' => "La ricera di \"<b>%s</b>\" nella"
    ." tabella \"<b>%s</b>\" ha prodotto i"
    ." seguenti risultati",
    'L_SECOND' => "Secondo",
    'L_SECONDS' => "Secondi",
    'L_SELECT' => "Seleziona",
    'L_SELECTALL' => "Seleziona tutto",
    'L_SELECTED_FILE' => "File selezionato",
    'L_SELECT_FILE' => "Seleziona file",
    'L_SELECT_LANGUAGE' => "Seleziona lingua",
    'L_SENDMAIL' => "Invia e-mail",
    'L_SENDRESULTASFILE' => "Invia il risultato come file",
    'L_SEND_MAIL_FORM' => "Spedisci report via e-mail",
    'L_SERVER' => "Server",
    'L_SERVERCAPTION' => "Visualizza server",
    'L_SETPRIMARYKEYSFOR' => "Imposta una nuova chiave primaria per"
    ." la tabella",
    'L_SHOWING_ENTRY_X_TO_Y_OF_Z' => "Mostra i dati da %s a %s di %s",
    'L_SHOWRESULT' => "Visualizza il risultato",
    'L_SMTP' => "SMTP",
    'L_SMTP_HOST' => "SMTP Server",
    'L_SMTP_PORT' => "Porta SMTP",
    'L_SOCKET' => "Socket",
    'L_SPEED' => "Velocitá",
    'L_SQLBOX' => "Box SQL",
    'L_SQLBOXHEIGHT' => "Altezza del Box SQL",
    'L_SQLLIB_ACTIVATEBOARD' => "attiva Board",
    'L_SQLLIB_BOARDS' => "Boards",
    'L_SQLLIB_DEACTIVATEBOARD' => "disattiva Board",
    'L_SQLLIB_GENERALFUNCTIONS' => "funzioni generali",
    'L_SQLLIB_RESETAUTO' => "reimposta autoincremento",
    'L_SQLLIMIT' => "Numero di record per pagina",
    'L_SQL_ACTIONS' => "Azioni",
    'L_SQL_AFTER' => "dopo",
    'L_SQL_ALLOWDUPS' => "Duplicati consentiti",
    'L_SQL_ATPOSITION' => "inserire nella posizione",
    'L_SQL_ATTRIBUTES' => "Attributi",
    'L_SQL_BACKDBOVERVIEW' => "torna al Riepilogo database",
    'L_SQL_BEFEHLNEU' => "nuovo comando",
    'L_SQL_BEFEHLSAVED1' => "Comando SQL",
    'L_SQL_BEFEHLSAVED2' => "è stato aggiunto",
    'L_SQL_BEFEHLSAVED3' => "è stato salvato",
    'L_SQL_BEFEHLSAVED4' => "è stato spostato su",
    'L_SQL_BEFEHLSAVED5' => "è stato cancellato",
    'L_SQL_BROWSER' => "Browser SQL",
    'L_SQL_CARDINALITY' => "Cardinalità",
    'L_SQL_CHANGED' => "è stato cambiato.",
    'L_SQL_CHANGEFIELD' => "cambia campo",
    'L_SQL_CHOOSEACTION' => "Scegli azione",
    'L_SQL_COLLATENOTMATCH' => "Il set di caratteri e le regolo di"
    ." confronto, non corrispondono!",
    'L_SQL_COLUMNS' => "Colonne",
    'L_SQL_COMMANDS' => "Comandi SQL",
    'L_SQL_COMMANDS_IN' => "righe in",
    'L_SQL_COMMANDS_IN2' => "sec. analizzate",
    'L_SQL_COPYDATADB' => "Copia l`intero database in",
    'L_SQL_COPYSDB' => "Copia la struttura del database",
    'L_SQL_COPYTABLE' => "copia tabella",
    'L_SQL_CREATED' => "è stato creato.",
    'L_SQL_CREATEINDEX' => "crea un nuovo indice",
    'L_SQL_CREATETABLE' => "crea tabella",
    'L_SQL_DATAVIEW' => "Visualizza i dati",
    'L_SQL_DBCOPY' => "Il contenuto del database `%s` è"
    ." stato copiato nel database `%s`.",
    'L_SQL_DBSCOPY' => "La struttura del database `%s` è"
    ." stata copiata nel database `%s`.",
    'L_SQL_DELETED' => "è stato cancellato",
    'L_SQL_DELETEDB' => "Cancella database",
    'L_SQL_DESTTABLE_EXISTS' => "Tabella di destinazione già"
    ." esistente!",
    'L_SQL_EDIT' => "modifica",
    'L_SQL_EDITFIELD' => "Modifica campo",
    'L_SQL_EDIT_TABLESTRUCTURE' => "Modifica struttura della tabella",
    'L_SQL_EMPTYDB' => "Svuota il database",
    'L_SQL_ERROR1' => "Errore nella richiesta:",
    'L_SQL_ERROR2' => "MySQL dice:",
    'L_SQL_EXEC' => "Esegui istruzione SQL",
    'L_SQL_EXPORT' => "Esporta dal database `%s`",
    'L_SQL_FIELDDELETE1' => "Il campo",
    'L_SQL_FIELDNAMENOTVALID' => "Errore: nome del campo non valido",
    'L_SQL_FIRST' => "prima",
    'L_SQL_IMEXPORT' => "Importa / Esporta",
    'L_SQL_IMPORT' => "Importa nel database `%s`",
    'L_SQL_INDEXES' => "Indici",
    'L_SQL_INSERTFIELD' => "inserisci campo",
    'L_SQL_INSERTNEWFIELD' => "inserisci nuovo campo",
    'L_SQL_LIBRARY' => "Libreria SQL",
    'L_SQL_NAMEDEST_MISSING' => "Nome di destinazione mancante!",
    'L_SQL_NEWFIELD' => "Nuovo campo",
    'L_SQL_NODATA' => "nessun record",
    'L_SQL_NODEST_COPY' => "Impossibile copiare senza"
    ." destinazione!",
    'L_SQL_NOFIELDDELETE' => "La cancellazione non è possibile"
    ." perchè le tabelle devono contenere"
    ." almeno un campo.",
    'L_SQL_NOTABLESINDB' => "Nessuna tabella traovata nel database",
    'L_SQL_NOTABLESSELECTED' => "Non ci sono tabelle selezionate !",
    'L_SQL_OPENFILE' => "Aprire il file SQL",
    'L_SQL_OPENFILE_BUTTON' => "Caricare",
    'L_SQL_OUT1' => "Eseguito",
    'L_SQL_OUT2' => "Comandi",
    'L_SQL_OUT3' => "C'erano",
    'L_SQL_OUT4' => "Commenti",
    'L_SQL_OUT5' => "Poiché il risultato contiene piu di"
    ." 5000 righe, esso non è visibile.",
    'L_SQL_OUTPUT' => "Output SQL",
    'L_SQL_QUERYENTRY' => "La query contiene",
    'L_SQL_RECORDDELETED' => "il record è stato cancellato",
    'L_SQL_RECORDEDIT' => "modifica record",
    'L_SQL_RECORDINSERTED' => "Il record è stato aggiunto",
    'L_SQL_RECORDNEW' => "nuovo record",
    'L_SQL_RECORDUPDATED' => "Il record è stato aggiornato",
    'L_SQL_RENAMEDB' => "Rinomina database",
    'L_SQL_RENAMEDTO' => "è stato rinominato in",
    'L_SQL_SCOPY' => "La struttura della tabella `%s` e"
    ." stata copiata in `%s`.",
    'L_SQL_SEARCH' => "Ricerca",
    'L_SQL_SEARCHWORDS' => "Parola(e) da cercare",
    'L_SQL_SELECTTABLE' => "seleziona tabella",
    'L_SQL_SHOWDATATABLE' => "Mostra i dati della tabella",
    'L_SQL_STRUCTUREDATA' => "Struttura e Dati",
    'L_SQL_STRUCTUREONLY' => "solo struttura",
    'L_SQL_TABLEEMPTIED' => "La tabella `%s` e stata cancellata.",
    'L_SQL_TABLEEMPTIEDKEYS' => "La tabella `%s` è stata cancellata e"
    ." l`ìndice è stato reimpostato.",
    'L_SQL_TABLEINDEXES' => "Indici della tabella",
    'L_SQL_TABLENEW' => "Modifica tabelle",
    'L_SQL_TABLENOINDEXES' => "La tabella non contiene indici",
    'L_SQL_TABLENONAME' => "La tabella ha bisogno di un nome!",
    'L_SQL_TABLESOFDB' => "Tabelle del database",
    'L_SQL_TABLEVIEW' => "Mostra tabella",
    'L_SQL_TBLNAMEEMPTY' => "Il nome della tabella non può essere"
    ." vuoto!",
    'L_SQL_TBLPROPSOF' => "Tabella proprietà di",
    'L_SQL_TCOPY' => "La tabella `%s` è stata copiata con i"
    ." dati nella tabella `%s`.",
    'L_SQL_UPLOADEDFILE' => "File caricato:",
    'L_SQL_VIEW_COMPACT' => "Visualizza: compatto",
    'L_SQL_VIEW_STANDARD' => "Visualizza: normale",
    'L_SQL_VONINS' => "da un totale di",
    'L_SQL_WARNING' => "L`esucuzione di comandi SQL potrebbe"
    ." modificare i dati. L`autore non si"
    ." assume alcuna responsabilità per"
    ." danni o perdita di dati.",
    'L_SQL_WASCREATED' => "è stato creato",
    'L_SQL_WASEMPTIED' => "è stato svuotato",
    'L_STARTDUMP' => "Avvia il backup",
    'L_START_RESTORE_DB_FILE' => "Inizio il ripristino del database '%s'"
    ." dal file '%s'.",
    'L_START_SQL_SEARCH' => "inizia ricerca",
    'L_STATUS' => "Stato",
    'L_STATUS' => "Stato",
    'L_STEP' => "Passo",
    'L_SUCCESS_CONFIGFILE_CREATED' => "Il file di configurazione \"%s\" è"
    ." stato creato con successo.",
    'L_SUCCESS_DELETING_CONFIGFILE' => "Il file di configurazione \"%s\" è"
    ." stato cancellato con successo.",
    'L_TABLE' => "Tabella",
    'L_TABLES' => "Tabelle",
    'L_TABLESELECTION' => "Selezione tabella",
    'L_TABLE_CREATE_SUCC' => "La tabella '%' è stata creata con"
    ." successo.",
    'L_TABLE_TYPE' => "Tipo",
    'L_TESTCONNECTION' => "Verifica la connessione",
    'L_THEME' => "Tema",
    'L_TIME' => "Tempo",
    'L_TIMESTAMP' => "Timestamp",
    'L_TITLE_INDEX' => "Indice",
    'L_TITLE_KEY_FULLTEXT' => "Chiave testo pieno",
    'L_TITLE_KEY_PRIMARY' => "Chiave primaria",
    'L_TITLE_KEY_UNIQUE' => "Chiave unica",
    'L_TITLE_MYSQL_HELP' => "Documentazione MySQL",
    'L_TITLE_NOKEY' => "Nessuna chiave",
    'L_TITLE_SEARCH' => "Cerca",
    'L_TITLE_SHOW_DATA' => "Visualizza dati",
    'L_TITLE_UPLOAD' => "Carica file SQL",
    'L_TO' => "fino a",
    'L_TOOLS' => "Strumenti",
    'L_TOOLS' => "Strumenti",
    'L_TOOLS_TOOLBOX' => "Seleziona database / Funzione database"
    ." / Importa - Esporta",
    'L_UNIT_KB' => "KiloByte",
    'L_UNIT_MB' => "MegaByte",
    'L_UNIT_PIXEL' => "Pixel",
    'L_UNKNOWN' => "sconosciuto",
    'L_UNKNOWN_SQLCOMMAND' => "Comando SQL sconosciuto.",
    'L_UPDATE' => "Aggiorna",
    'L_UPTO' => "fino a",
    'L_USERNAME' => "Nome utente",
    'L_USE_SSL' => "Usa SSL",
    'L_VALUE' => "Valore",
    'L_VERSIONSINFORMATIONEN' => "Informazioni sulla versione",
    'L_VIEW' => "visualizza",
    'L_VISIT_HOMEPAGE' => "Visitate il sito web",
    'L_VOM' => "dal",
    'L_WITH' => "con",
    'L_WITHATTACH' => "con allegato",
    'L_WITHOUTATTACH' => "senza allegato",
    'L_WITHPRAEFIX' => "con prefisso",
    'L_WRONGCONNECTIONPARS' => "Parametri di connessione assenti o"
    ." errati!",
    'L_WRONG_CONNECTIONPARS' => "I parametri di connessione sono"
    ." errati!",
    'L_WRONG_RIGHTS' => "Il file o la directory '%s' non è"
    ." scrivibile.<br /> I permessi"
    ." (chmod)non sono correttamente"
    ." impostati o appartengono al"
    ." proprietario sbagliato<br />Impostate"
    ." gli attributi corretti utilizzando il"
    ." vostro programma FTP.<br /> Il file o"
    ." la directory hanno bisogno di essere"
    ." impostati a %s.<br />",
    'L_YES' => "sì",
));
