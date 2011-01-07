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
    'L_ACTION' => "Akce",
    'L_ACTIVATED' => "aktivní",
    'L_ACTUALLY_INSERTED_RECORDS' => "Doposud <b>%s</b> Bylo
 úspěšně"
    ." přidaných záznamů.",
    'L_ACTUALLY_INSERTED_RECORDS_OF' => "Právě <b>%s</b>  záznamů ze"
    ." <b>%s</b>
  bylo úspěšně"
    ." přidáno.",
    'L_ADD' => "Přidat",
    'L_ADDED' => "přidané",
    'L_ADD_DB_MANUALLY' => "Přidat databázi manualně",
    'L_ADD_RECIPIENT' => "Přidat příjemce",
    'L_ALL' => "vše",
    'L_ANALYZE' => "Analyzovat",
    'L_ANALYZING_TABLE' => "Tabulka '<b>%s</b>' se obnovuje.",
    'L_ASKDBCOPY' => "Chcete zkopírovat databázi `%s` k
"
    ." databázi `%s`?",
    'L_ASKDBDELETE' => "Pokud chcete odstranit databázi `%s`"
    ." s
 obsahem?",
    'L_ASKDBEMPTY' => "Chcete vyprázdnit databázi `%s` ?",
    'L_ASKDELETEFIELD' => "Chcete odstranit pole?",
    'L_ASKDELETERECORD' => "Jste si jisti, že chcete smazat"
    ." tento
 záznam?",
    'L_ASKDELETETABLE' => "V případě, že tabulka `%s` bude
"
    ." smazaná?",
    'L_ASKTABLEEMPTY' => "V případě, že tabulka `%s` bude
"
    ." smazaná?",
    'L_ASKTABLEEMPTYKEYS' => "Chcete vymazat tabulku `%s` a
"
    ." resetovat indexy?",
    'L_ATTACHED_AS_FILE' => "připojena jako soubor",
    'L_ATTACH_BACKUP' => "Pripojit zálohu",
    'L_AUTHORIZE' => "Povolit",
    'L_AUTODELETE' => "Smazat zálohy automatick",
    'L_BACK' => "zpět",
    'L_BACKUPFILESANZAHL' => "Počet záloh v adresáři",
    'L_BACKUPS' => "zálohy",
    'L_BACKUP_DBS' => "DB na zálohování",
    'L_BACKUP_TABLE_DONE' => "Záloha tabulky`%s`dokončena.",
    'L_BACK_TO_OVERVIEW' => "Databáze Přehled",
    'L_BACK_TO_OVERVIEW' => "Databáze Přehled",
    'L_CALL' => "Volat",
    'L_CANCEL' => "Konec",
    'L_CANT_CREATE_DIR' => "Nepodařilo se vytvořit adresář"
    ." '%s'.
 
Prosím, vytvořte jej pomocí"
    ." FTP
 klienta",
    'L_CHANGE' => "změna",
    'L_CHANGEDIR' => "změna adresáře",
    'L_CHANGEDIR' => "Změna adresáře",
    'L_CHANGEDIRERROR' => "Změna adresáře nebyla možná",
    'L_CHANGEDIRERROR' => "Nemohu změnit adresář!",
    'L_CHARSET' => "Kódování",
    'L_CHECK' => "Kontrola",
    'L_CHECK' => "kontrola",
    'L_CHECK_DIRS' => "Vytvoření adresářů - work",
    'L_CHOOSE_CHARSET' => "MySQLDumper nemůže zjistit"
    ." kódování
 souboru zálohy"
    ." automaticky.
<br
 />Musíte vybrat"
    ." znakovou sadu, s
 kterou byla tato"
    ." záloha
 vytvořena.
<br"
    ." />Zjistíte-li jakékoliv
 problémy s"
    ." některými znaky po
 restaurování,"
    ." můžete opakovat
 backup-pokrok a"
    ." poté zvolte jinou
 znakovou sadu.
<br"
    ." />Hodně štěstí. ;)",
    'L_CHOOSE_DB' => "Vyberte databázi",
    'L_CLEAR_DATABASE' => "Vyprázdnit databazi",
    'L_CLOSE' => "Zavřít",
    'L_COLLATION' => "Kódování",
    'L_COMMAND' => "Příkaz",
    'L_COMMAND' => "Příkaz",
    'L_COMMAND_AFTER_BACKUP' => "Příkaz po zálohování",
    'L_COMMAND_BEFORE_BACKUP' => "Příkaz před zálohováním",
    'L_COMMENT' => "Komentář",
    'L_COMPRESSED' => "komprimované (gz)",
    'L_CONFBASIC' => "Základní nastavení",
    'L_CONFIG' => "Nastavení",
    'L_CONFIGFILE' => "Nastaveno zálohování",
    'L_CONFIGFILES' => "Nastaveno zálohování",
    'L_CONFIGURATIONS' => "Nastavení",
    'L_CONFIG_AUTODELETE' => "Automazanie",
    'L_CONFIG_CRONPERL' => "Cron zálohování - Nastavení pro"
    ." Perl
 skript",
    'L_CONFIG_EMAIL' => "Email Oznámení",
    'L_CONFIG_FTP' => "FTP Převod záloh mezi ftp",
    'L_CONFIG_HEADLINE' => "Nastavení",
    'L_CONFIG_INTERFACE' => "Jazyk * Vzhled",
    'L_CONFIG_LOADED' => "Nastavení \"%s\" bylo úspěšně"
    ." uloženo.",
    'L_CONFIRM_CONFIGFILE_DELETE' => "Opravdu smazat Nastavení"
    ." zálohování
 %s?",
    'L_CONFIRM_DELETE_TABLES' => "Opravdu smazat vybrané tabulky?",
    'L_CONFIRM_DROP_DATABASES' => "Přejete si vybrané databáze"
    ." opravdu
 vymazat? Upozornění:"
    ." Všechny údaje
 budou vymazány!"
    ." Možná byste měli
 vytvořit zálohu"
    ." .",
    'L_CONFIRM_RECIPIENT_DELETE' => "Přejete si příjemce \"%s\" opravdu"
    ." odstranit?",
    'L_CONFIRM_TRUNCATE_DATABASES' => "Přejete si vymazat všechny tabulky
"
    ." vybraných databází s?"
    ." Upozornění:
 Všechny údaje budou"
    ." vymazány! Možná
 byste měli"
    ." udělat zálohu pro
 pozdější"
    ." obnovení.",
    'L_CONFIRM_TRUNCATE_TABLES' => "Opravdu li vyprázdnit vybrané
"
    ." tabulky?",
    'L_CONNECT' => "připojit",
    'L_CONNECTIONPARS' => "Nastavení připojení",
    'L_CONNECTTOMYSQL' => "Pripojit k MySQL",
    'L_CONTINUE_MULTIPART_RESTORE' => "Spustit vícedílné obnovení zálohy"
    ." 
 '%s' .",
    'L_CONVERTED_FILES' => "Převedené soubory",
    'L_CONVERTER' => "Zálohování Konvert",
    'L_CONVERTING' => "Konverze",
    'L_CONVERT_FILE' => "Soubory, které mají být převedeny",
    'L_CONVERT_FILENAME' => "Jméno cílového souboru (bez"
    ." přípony)",
    'L_CONVERT_FILEREAD' => "Konvertování zálohy '%s'",
    'L_CONVERT_FINISHED' => "Dokončení konverze, '%s' bylo
"
    ." úspěšné.",
    'L_CONVERT_START' => "Začít konvertovat",
    'L_CONVERT_TITLE' => "Převést zálohu na MSD Format",
    'L_CONVERT_WRONG_PARAMETERS' => "Špatné nastavení! Převod není
"
    ." možný.",
    'L_CREATE' => "Vytvořit",
    'L_CREATEAUTOINDEX' => "Vytvořit Auto-Index",
    'L_CREATEDIRS' => "Vytvořit Adresáře",
    'L_CREATE_CONFIGFILE' => "Vytvoriť nové nastavenie",
    'L_CREATE_DATABASE' => "Vytvořit nové nastavení",
    'L_CREATE_TABLE_SAVED' => "Definice tabulky `%s` uložena.",
    'L_CREDITS' => "Pomoc",
    'L_CRONSCRIPT' => "Cron script",
    'L_CRON_COMMENT' => "Zadejte komentář",
    'L_CRON_COMPLETELOG' => "Log kompletní výstup",
    'L_CRON_EXECPATH' => "Cesta skriptů Perl",
    'L_CRON_EXTENDER' => "Přípona zálohy",
    'L_CRON_PRINTOUT' => "Tiskový výstup na obrazovku.",
    'L_CSVOPTIONS' => "CSV Možnosti",
    'L_CSV_EOL' => "Samostatné řádky s",
    'L_CSV_ERRORCREATETABLE' => "Chyba při vytváření tabulky `%s` !",
    'L_CSV_FIELDCOUNT_NOMATCH' => "Počet polí nesouhlasí s údaji o
"
    ." přesunu (%d na místo %d).",
    'L_CSV_FIELDSENCLOSED' => "Oblastech ohraničených",
    'L_CSV_FIELDSEPERATE' => "Oblasti oddělenými",
    'L_CSV_FIELDSESCAPE' => "Fields escaped with",
    'L_CSV_FIELDSLINES' => "%d pole znal, zcela %d linky",
    'L_CSV_FILEOPEN' => "Otevřít CSV soubor",
    'L_CSV_NAMEFIRSTLINE' => "Názvy polí v první linii",
    'L_CSV_NODATA' => "Nebyly nalezeny žádné data pro
"
    ." import!",
    'L_CSV_NULL' => "Nahradit NULL s",
    'L_DATASIZE' => "Velikost dat",
    'L_DATASIZE_INFO' => "Toto je velikost dat - ne velikost
"
    ." souboru zálohy",
    'L_DAY' => "Den",
    'L_DAYS' => "Dny",
    'L_DB' => "Databáze",
    'L_DBCONNECTION' => "Databaza Připojení",
    'L_DBPARAMETER' => "Údaje k Databázi",
    'L_DBS' => "Databáze",
    'L_DB_BACKUPPARS' => "Nastavení zálohování databáze",
    'L_DB_HOST' => "Hostitel",
    'L_DB_IN_LIST' => "Databázi '%s' se nepodařilo"
    ." přidat,
 protože již existuje.",
    'L_DB_PASS' => "Heslo",
    'L_DB_SELECT_ERROR' => "<br />Chyba:<br />Výběr z databáze"
    ." <b>",
    'L_DB_SELECT_ERROR2' => "</b> selhal!",
    'L_DB_USER' => "Uživatel",
    'L_DEFAULT_CHARSET' => "Předvolená znaková sada",
    'L_DELETE' => "Smazat",
    'L_DELETE_DATABASE' => "Smazat databázi",
    'L_DELETE_FILE_ERROR' => "Chyba při odstraňovaní zálohy"
    ." \"%s\"!",
    'L_DELETE_FILE_SUCCESS' => "Záloha \"%s\" byla úspěšně"
    ." odstraněna.",
    'L_DELETE_HTACCESS' => "Odstranit ochranu adresářů (smazat
"
    ." .htaccess)",
    'L_DESELECTALL' => "Zrušit výběr",
    'L_DIR' => "Adresář",
    'L_DISABLEDFUNCTIONS' => "Blokována Funkce",
    'L_DISABLEDFUNCTIONS' => "Blokovaná Funkce",
    'L_DO' => "Vykonat",
    'L_DOCRONBUTTON' => "Spustit Perl Cron skript",
    'L_DONE' => "Hotovo!",
    'L_DONT_ATTACH_BACKUP' => "Nepřipojovat zálohování",
    'L_DOPERLTEST' => "Test Perl Modul",
    'L_DOSIMPLETEST' => "Test Perl",
    'L_DOWNLOAD_FILE' => "Stáhnout soubor",
    'L_DO_NOW' => "Nyní běží",
    'L_DUMP' => "Záloha",
    'L_DUMP_ENDERGEBNIS' => "Záloha obsahuje <b>%s</b> tabulek a
"
    ." <b>%s</b> záznamů.<br />",
    'L_DUMP_FILENAME' => "Název zalohy",
    'L_DUMP_HEADLINE' => "Vytvářím zálohu ...",
    'L_DUMP_NOTABLES' => "Nebyly nalezeny žádné tabulky v"
    ." databázi
 `<b>%s</b>`",
    'L_DUMP_OF_DB_FINISHED' => "Zálohování databáze `%s`"
    ." dokončené",
    'L_DURATION' => "Doba trvání",
    'L_EDIT' => "upraviť",
    'L_EHRESTORE_CONTINUE' => "pokračovat v přepisování a
"
    ." nahrávání chyby",
    'L_EHRESTORE_STOP' => "stop",
    'L_EMAIL' => "Mail",
    'L_EMAILBODY_ATTACH' => "Příloha obsahuje zálohu
"
    ." MySQL-Databáze.<br />Zálohování
"
    ." databáze `%s`
<br /><br"
    ." />Následující
 soubor byl"
    ." vytvořen:<br /><br />%s <br
 /><br"
    ." />>S pozdravem<br /><br
"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_FOOTER' => "`<br /><br />S pozdravem<br /><br
"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_MP_ATTACH' => "Rozdělená Záloha byla"
    ." vytvořena.<br
 />Záložní soubory"
    ." jsou připojeny na
 samostatné"
    ." e-maily.<br />Zálohování
 databáze"
    ." `%s`
<br /><br />Následující
"
    ." soubory byly vytvořeny:<br /><br"
    ." />%s
 <br /><br />S pozdravem<br"
    ." /><br
 />MySQLDumper<br />",
    'L_EMAILBODY_MP_NOATTACH' => "Rozdělená Záloha byla"
    ." vytvořena.<br
 />Záložné súbory"
    ." nie sú pripojené
 na tento"
    ." e-mail!<br />Zálohování
 databáze"
    ." `%s`
<br /><br />Následující
"
    ." soubory byly vytvořeny:<br /><br
"
    ." />%s
<br /><br />S pozdravem<br /><br
"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_NOATTACH' => "Soubory nejsou připojeny na tento
"
    ." e-mail!<br />Zálohování databáze
"
    ." `%s`
<br /><br />Následující"
    ." soubory
 byly vytvořeny:<br /><br"
    ." />%s
<br /><br
 />S pozdravem<br /><br"
    ." />MySQLDumper<br
 />",
    'L_EMAILBODY_TOOBIG' => "Záložní soubor překročil"
    ." maximální
 velikost % s, a nebyl"
    ." připojen k
 tomuto e-mailu.<br"
    ." />Zálohování
 databáze `%s`
<br"
    ." /><br />Následující
 soubor byl"
    ." vytvořený:<br /><br />%s
<br
 /><br"
    ." />S pozdravem<br /><br
"
    ." />MySQLDumper<br />",
    'L_EMAIL_ADDRESS' => "E-mailová adresa",
    'L_EMAIL_CC' => "E-mail přijímající CC",
    'L_EMAIL_MAXSIZE' => "Maximální velikost přílohy",
    'L_EMAIL_ONLY_ATTACHMENT' => "pouze přiloženou zálohu.",
    'L_EMAIL_RECIPIENT' => "Příjemce",
    'L_EMAIL_SENDER' => "Adresa odesílatele e-mailu",
    'L_EMAIL_START' => "Spustit odesílání e-mailů",
    'L_EMAIL_WAS_SEND' => "E-mail byl úspěšně odeslán",
    'L_EMPTY' => "Vyprázdniť",
    'L_EMPTYKEYS' => "prázdné a reset indexy",
    'L_EMPTYTABLEBEFORE' => "Prázdné tabulky před",
    'L_EMPTY_DB_BEFORE_RESTORE' => "Odstranit tabulky před obnovením",
    'L_ENCODING' => "Kódování",
    'L_ENCRYPTION_TYPE' => "Druh šifrování",
    'L_ENGINE' => "Typ",
    'L_ENTER_DB_INFO' => "Nejdřív kliknite na tlačidlo"
    ." \"Připojit k
 MySQL\". Zde zadejte"
    ." název databáze pouze
 tehdy když se"
    ." nedá připojit k
 databázi.",
    'L_ENTRY' => "Vstup",
    'L_ERROR' => "Chyba",
    'L_ERRORHANDLING_RESTORE' => "Ošetření chyb při obnovování",
    'L_ERROR_CONFIGFILE_NAME' => "Záloha \"%s\" obsahuje neplatné"
    ." znaky.",
    'L_ERROR_DELETING_CONFIGFILE' => "Chyba: nelze odstranit
 konfigurační"
    ." soubor %s!",
    'L_ERROR_LOADING_CONFIGFILE' => "Nepodařilo se načíst konfigurační"
    ." soubor \"%s\".\"",
    'L_ERROR_LOG' => "Chyba Logu",
    'L_ERROR_MULTIPART_RESTORE' => "Vícedílná-Obnova: Nemohu najít
"
    ." další Zalohovací soubor '%s'!",
    'L_ESTIMATED_END' => "Předpokládané ukončení",
    'L_EXCEL2003' => "Excel od roku 2003",
    'L_EXISTS' => "Existuje",
    'L_EXPORT' => "Export",
    'L_EXPORTFINISHED' => "Export ukončen.",
    'L_EXPORTLINES' => "<strong>%s</strong> lines exported",
    'L_EXPORTOPTIONS' => "Volby exportu",
    'L_EXTENDEDPARS' => "Rozšířené Nastavení",
    'L_FADE_IN_OUT' => "Zobrazit on/off",
    'L_FATAL_ERROR_DUMP' => "Vážná chyba: Zpráva o vytvoření
"
    ." tabulky '%s' v databazi '%s' se nedá
"
    ." číst!",
    'L_FIELDS' => "Oblasti",
    'L_FIELDS_OF_TABLE' => "Oblasti tabulky",
    'L_FILE' => "Záloha",
    'L_FILES' => "Zálohy",
    'L_FILESIZE' => "Velikost zálohy",
    'L_FILE_MANAGE' => "Správa záloh",
    'L_FILE_OPEN_ERROR' => "Chyba: Nemohu vytvořit zálohu.",
    'L_FILE_SAVED_SUCCESSFULLY' => "Záloha byla úspěšně uložena.",
    'L_FILE_SAVED_UNSUCCESSFULLY' => "Zálohu se nepodařilo uložit!",
    'L_FILE_UPLOAD_SUCCESSFULL' => "Záloha '%s' byla úspěšně"
    ." uložena.",
    'L_FILTER_BY' => "Filtrovat podle",
    'L_FM_ALERTRESTORE1' => "Chystáte se obnovit databázi",
    'L_FM_ALERTRESTORE2' => "vybrána záloha pro obnovení",
    'L_FM_ALERTRESTORE3' => "Přejete si ji obnovit?",
    'L_FM_ALL_BU' => "Všechny Zálohy",
    'L_FM_ANZ_BU' => "Zálohy",
    'L_FM_ASKDELETE1' => "Vybrali jste zalohu (y)",
    'L_FM_ASKDELETE2' => "Přejete si opravdu odstranit?",
    'L_FM_ASKDELETE3' => "Chcete smazat automazání a nastavit
"
    ." nová pravidla pro automazání?",
    'L_FM_ASKDELETE4' => "Chcete smazat všechny zálohy?",
    'L_FM_ASKDELETE5' => "Chcete smazat všechny zálohy s
"
    ." příponou",
    'L_FM_ASKDELETE5_2' => "*  Nyní odstranit?",
    'L_FM_AUTODEL1' => "Automazaní: Následující zálohy"
    ." byly
 vymazány, protože maximální
"
    ." ponechání záloh na ftp je:",
    'L_FM_CHOOSE_ENCODING' => "Vyberte kódování souboru zálohy",
    'L_FM_COMMENT' => "Zadejte komentář",
    'L_FM_DBNAME' => "Název databáze",
    'L_FM_DELETE' => "Smazat",
    'L_FM_DELETE1' => "Záloha",
    'L_FM_DELETE2' => "byla úspěšně odstraněna.",
    'L_FM_DELETE3' => "nelze odstranit!",
    'L_FM_DELETEALL' => "Smazat Všechny zálohy",
    'L_FM_DELETEALLFILTER' => "Smazat vše s",
    'L_FM_DELETEAUTO' => "Automazaní spustit manuálně",
    'L_FM_DUMPSETTINGS' => "Záloha Nastavení",
    'L_FM_DUMP_HEADER' => "Záloha",
    'L_FM_FILEDATE' => "Datum",
    'L_FM_FILES1' => "Záloha databáze",
    'L_FM_FILESIZE' => "Velikost",
    'L_FM_FILEUPLOAD' => "Nahrát zálohovaný soubor",
    'L_FM_FILEUPLOAD' => "Nahrát zálohovaný soubor",
    'L_FM_FREESPACE' => "Volné místo Serveru",
    'L_FM_LAST_BU' => "Poslední záloha",
    'L_FM_NOFILE' => "Nevybrali jste zálohu na obnovení!",
    'L_FM_NOFILESFOUND' => "Nebyla nalezena žádná záloha.",
    'L_FM_RECORDS' => "Záznamů",
    'L_FM_RESTORE' => "Obnovit",
    'L_FM_RESTORE_HEADER' => "Obnova databáze `<strong>%s</strong>`",
    'L_FM_SELECTTABLES' => "Vybrat tabulky",
    'L_FM_STARTDUMP' => "Spustit novou zálohu",
    'L_FM_TABLES' => "Tabulek",
    'L_FM_TOTALSIZE' => "Celková velikost",
    'L_FM_UPLOADFAILED' => "Nahrávání selhalo!",
    'L_FM_UPLOADFILEEXISTS' => "Záloha se stejným názvem již"
    ." existuje
 !",
    'L_FM_UPLOADFILEREQUEST' => "prosím, vyberte soubor.",
    'L_FM_UPLOADFILEREQUEST' => "prosím, vyberte soubor.",
    'L_FM_UPLOADMOVEERROR' => "Nepodařilo se přesunout zálohu do
"
    ." zvoleného adresáře .",
    'L_FM_UPLOADNOTALLOWED1' => "Tento typ zálohy není podporován.",
    'L_FM_UPLOADNOTALLOWED2' => "Platné typy jsou: *.gz a *.sql-súbor",
    'L_FOUND_DB' => "Nalezená db",
    'L_FROMFILE' => "ze souboru",
    'L_FROMTEXTBOX' => "od textového pole",
    'L_FTP' => "FTP",
    'L_FTP_ADD_CONNECTION' => "Přidat připojení",
    'L_FTP_CHOOSE_MODE' => "FTP Přesun Mód",
    'L_FTP_CONFIRM_DELETE' => "Chcete toto FTP připojení opravdu
"
    ." zrušit?",
    'L_FTP_CONNECTION' => "FTP-připojení",
    'L_FTP_CONNECTION_CLOSED' => "FTP-Připojení ukončeno",
    'L_FTP_CONNECTION_DELETE' => "Odstranit připojení",
    'L_FTP_CONNECTION_ERROR' => "Připojení na server '% s' pomocí
"
    ." portu% s nemoholo být stanovené",
    'L_FTP_CONNECTION_SUCCESS' => "Připojení na server '% s' pomocí
"
    ." portu% s bylo založeno úspěšně",
    'L_FTP_DIR' => "Nahrát adresář",
    'L_FTP_FILE_TRANSFER_ERROR' => "Převod zálohy '% s' byl chybný",
    'L_FTP_FILE_TRANSFER_SUCCESS' => "Záloha '% s' byla převedena"
    ." úspěšně",
    'L_FTP_LOGIN_ERROR' => "Registrace jako uživatel '% s' byla
"
    ." zamítnuta",
    'L_FTP_LOGIN_SUCCESS' => "Registrace jako uživatel '% s' byla
"
    ." úspěšná",
    'L_FTP_OK' => "FTP údaje jsou ok",
    'L_FTP_OK' => "FTP údaje jsou ok",
    'L_FTP_PASS' => "Heslo",
    'L_FTP_PASSIVE' => "používat pasivní mód",
    'L_FTP_PASV_ERROR' => "Změna v pasivním režimu FTP nebyla
"
    ." úspěšná",
    'L_FTP_PASV_SUCCESS' => "Změna v pasivním režimu FTP byla
"
    ." úspěšná",
    'L_FTP_PORT' => "Port",
    'L_FTP_SEND_TO' => "z <strong>%s</strong><br /> do
"
    ." <strong>%s</strong>",
    'L_FTP_SERVER' => "Servr",
    'L_FTP_SSL' => "Bezpečné SSL FTP připojení",
    'L_FTP_START' => "Spuštění FTP přenos",
    'L_FTP_TIMEOUT' => "Připojení Timeout",
    'L_FTP_TRANSFER' => "FTP Převod",
    'L_FTP_USER' => "Uživatel",
    'L_FTP_USESSL' => "použít SSL připojení",
    'L_GENERAL' => "Všeobecn",
    'L_GENERAL' => "všeobecné",
    'L_GZIP' => "GZip komprese",
    'L_GZIP_COMPRESSION' => "GZip Komprese",
    'L_HOME' => "Obsa",
    'L_HOUR' => "Hodin",
    'L_HOURS' => "Hodin",
    'L_HTACC_ACTIVATE_REWRITE_ENGINE' => "Povolit přepisován",
    'L_HTACC_ADD_HANDLER' => "Zadejte dodavatel",
    'L_HTACC_CONFIRM_DELETE' => "Přejete si vytvořit adresář"
    ." ochrany",
    'L_HTACC_CONTENT' => "Obsah soubor",
    'L_HTACC_CREATE' => "Vytvořit adresář ochran",
    'L_HTACC_CREATED' => "Adresář ochrany byl vytvořen",
    'L_HTACC_CREATE_ERROR' => "Došlo k chybě při vytváření"
    ." adresáře
 ochrany!<br />Prosím"
    ." vytvořte ručně 2
 soubory s"
    ." následujícím obsahe",
    'L_HTACC_CRYPT' => "Crypt 8 Chars max (Linux and
"
    ." Unix-Systems",
    'L_HTACC_DENY_ALLOW' => "Vypnout / Zapnou",
    'L_HTACC_DIR_LISTING' => "Výpis adresář",
    'L_HTACC_EDIT' => "Upravit .htacces",
    'L_HTACC_ERROR_DOC' => "Chyba Dokument",
    'L_HTACC_EXAMPLES' => "Další příklady a dokumentac",
    'L_HTACC_EXISTS' => "V současnosti již existuje"
    ." adresář
 ochrany. Když vytvoříte"
    ." nový, tím
 přepíšete starý",
    'L_HTACC_MAKE_EXECUTABLE' => "Umožnit proveden",
    'L_HTACC_MD5' => "MD5 (Linux and Unix-Systems",
    'L_HTACC_NO_ENCRYPTION' => "čistí text, ne Cryption (Windows",
    'L_HTACC_NO_USERNAME' => "Musíte zadat jméno",
    'L_HTACC_PROPOSED' => "Naléhavé doporučen",
    'L_HTACC_REDIRECT' => "Přesměrován",
    'L_HTACC_SCRIPT_EXEC' => "Spuštění skript",
    'L_HTACC_SHA1' => "SHA1 (all Systems",
    'L_HTACC_WARNING' => "Pozor! . Htaccess přímo ovlivňuje
"
    ." chování prohlížeče. <br /> Při
"
    ." nesprávném obsahu, může být že
"
    ." vaše stránky již nebudou dostupn",
    'L_IMPORT' => "Import Nastavenia",
    'L_IMPORT' => "Import Nastavenia",
    'L_IMPORTIEREN' => "Import",
    'L_IMPORTOPTIONS' => "Import Možnosti",
    'L_IMPORTSOURCE' => "Import Zdroj",
    'L_IMPORTTABLE' => "Import v tabulce",
    'L_IMPORT_NOTABLE' => "Nebyly vybrány Tabulky pro import!",
    'L_IN' => "v",
    'L_INFO_ACTDB' => "Zvolená Databáz",
    'L_INFO_DATABASES' => "Tyto databáze jsou na serveru",
    'L_INFO_DBEMPTY' => "Databáze je prázdná",
    'L_INFO_FSOCKOPEN_DISABLED' => "Na tomto serveru PHP-příkaz"
    ." fsockopen
 () je zakázána"
    ." konfigurace serveru.
 Protože toto"
    ." automatické stahování
 jazykových"
    ." balíčků není možné.
 Pokud"
    ." chcete toto obejít, můžete si
"
    ." stáhnout packack ručně, extrahujte"
    ." jej
 do vašeho počítače a nahrajte"
    ." je do
 adresáře \"language\" vaší
"
    ." instalace MySQLDumper. Pak nový
"
    ." jazyk balíček je k dispozici na
"
    ." této stránce",
    'L_INFO_LASTUPDATE' => "Poslední aktualizac",
    'L_INFO_LOCATION' => "Vaše místo j",
    'L_INFO_NODB' => "databáze neexistuje",
    'L_INFO_NOPROCESSES' => "žádné běžící proces",
    'L_INFO_NOSTATUS' => "nejsou k dispozici žádné zprávy o
"
    ." stav",
    'L_INFO_NOVARS' => "ukazatele není k dispozic",
    'L_INFO_OPTIMIZED' => "optimalizovan",
    'L_INFO_RECORDS' => "zázna",
    'L_INFO_RECORDS' => "Záznamů",
    'L_INFO_SIZE' => "Velikos",
    'L_INFO_SUM' => "celke",
    'L_INSTALL' => "Instalace",
    'L_INSTALL' => "Instalace",
    'L_INSTALLED' => "Nainstalované",
    'L_INSTALL_HELP_PORT' => "(prázdný = Default Port)",
    'L_INSTALL_HELP_SOCKET' => "(prázdný = Default Socket)",
    'L_IS_WRITABLE' => "Nenainstalované",
    'L_KILL_PROCESS' => "Ukončit proce",
    'L_LANGUAGE' => "Jazyk",
    'L_LASTBACKUP' => "Poslední záloh",
    'L_LOAD' => "Nahrát výchozí nastavení",
    'L_LOAD_DATABASE' => "Znovu načíst databáz",
    'L_LOAD_FILE' => "Nahrát soubo",
    'L_LOG' => "Lo",
    'L_LOGFILENOTWRITABLE' => "Nelze zapsat log souboru",
    'L_LOGFILENOTWRITABLE' => "Nelze zapsat log souboru !",
    'L_LOGFILES' => "Nahrát soubor",
    'L_LOG_DELETE' => "Smazat Log",
    'L_MAILERROR' => "Odeslání e-mailu selhalo!",
    'L_MAILPROGRAM' => "Mail program",
    'L_MAXSIZE' => "max. Velikost",
    'L_MAX_BACKUP_FILES_EACH2' => "Pro každou databáz",
    'L_MAX_EXECUTION_TIME' => "Maximální doba realizac",
    'L_MAX_UPLOAD_SIZE' => "Maximální velikost",
    'L_MAX_UPLOAD_SIZE' => "Maximální velikost",
    'L_MAX_UPLOAD_SIZE_INFO' => "Pokud je vaše záloha větší, jako"
    ." je výše uvedená omezení,musíte ji"
    ."  nahrát pomocí FTP do adresáře"
    ." \"work/backup\". 
Po tomto můžete"
    ." pokračovat.",
    'L_MEMORY' => "Pamě",
    'L_MESSAGE' => "Oznámen",
    'L_MESSAGE_TYPE' => "Správy - typ",
    'L_MINUTE' => "Minut",
    'L_MINUTES' => "Minut",
    'L_MODE_EASY' => "Jednoduch",
    'L_MODE_EXPERT' => "Odborní",
    'L_MSD_INFO' => "MySQL Dumpe",
    'L_MSD_MODE' => "MySQLDumper-Mód",
    'L_MSD_VERSION' => "MySQLDumper-Verz",
    'L_MULTIDUMP' => "Zálohování na část",
    'L_MULTIDUMP_FINISHED' => "Zálohování Databáze <b>% d </ b>"
    ." dokončeno",
    'L_MULTIPART_ACTUAL_PART' => "Podle aktuálního soubor",
    'L_MULTIPART_SIZE' => "Maximální velikost záloh",
    'L_MULTI_PART' => "Rozdělení záloh",
    'L_MYSQLVARS' => "MySQL Ukazatel",
    'L_MYSQL_CLIENT_VERSION' => "MySQL-Klien",
    'L_MYSQL_CONNECTION_ENCODING' => "Standardní kódování MySQL-Serv",
    'L_MYSQL_DATA' => "MySQL-Data",
    'L_MYSQL_VERSION' => "MySQL-Verz",
    'L_NAME' => "Název",
    'L_NAME' => "Název",
    'L_NEW' => "nov",
    'L_NEWTABLE' => "Nová tabulka",
    'L_NEXT_AUTO_INCREMENT' => "Další automatický index",
    'L_NEXT_AUTO_INCREMENT_SHORT' => "n. Auto-Index",
    'L_NO' => "n",
    'L_NOFTPPOSSIBLE' => "Neexistují žádné FTP funkce!",
    'L_NOFTPPOSSIBLE' => "Neexistují žádné FTP funkce",
    'L_NOFTPPOSSIBLE' => "Neexistují žádné FTP funkce!",
    'L_NOGZPOSSIBLE' => "Nejsou žádné kompresní funkce k
"
    ." dispozici!",
    'L_NOGZPOSSIBLE' => "Vzhledem k tomu, Zlib není
"
    ." nainstalován, nelze použít
"
    ." gzip-Funkce",
    'L_NONE' => "žádn",
    'L_NOREVERSE' => "Nejstarší záznam první",
    'L_NOTAVAIL' => "<em>nie je k dispozícii</em",
    'L_NOTICE' => "Poznámka",
    'L_NOTICES' => "Oznámeni",
    'L_NOT_ACTIVATED' => "neaktivn",
    'L_NOT_SUPPORTED' => "Táto záloha nepodporuje túto"
    ." funkciu.",
    'L_NO_DB_FOUND' => "Nepodarilo sa nájsť žiadne"
    ." databázy!
Prosím zadajte údaje"
    ." pripojenia a názov vašej databázy"
    ." ručne.",
    'L_NO_DB_FOUND_INFO' => "Pripojenie k databáze bol úspešne
"
    ." nadviazané.<br />
Vaše"
    ." užívateľské dáta sú platné a"
    ." boli prijaté
 MySQL-Server.<br"
    ." />
MySQLDumper ale nebola schopná"
    ." nájsť žiadnu
 databázu.<br"
    ." />
Automatická detekcia
 pomocou"
    ." skriptu je blokovaný na
 niektorých"
    ." serveroch.<br />
Musíte
 zadať"
    ." názov databázy ručne po
"
    ." dokončení inštalácie.
Kliknite na"
    ." \"nastavenie\" \"Pripojenie Parameter"
    ." -
 display\" a zadajte názov"
    ." databázy tu.",
    'L_NO_DB_SELECTED' => "Neexistuje žiadna zvolená databáza.",
    'L_NO_ENTRIES' => "Tabulka \"<b>%s</b>\" je prázdna a"
    ." nemá žiadny záznam.",
    'L_NO_MSD_BACKUPFILE' => "Zálohovanie iných skriptov",
    'L_NO_NAME_GIVEN' => "Nezadali ste meno",
    'L_NR_TABLES_OPTIMIZED' => "%s tabuľiek bolo optimalizovaných.",
    'L_NUMBER_OF_FILES_FORM' => "Zmazať podľa počtu záloh v jednej
"
    ." databáze",
    'L_OF' => "z",
    'L_OF' => "z",
    'L_OK' => "O",
    'L_OPTIMIZE' => "Optimalizovať",
    'L_OPTIMIZE_TABLES' => "Optimalizovať tabuľky pred
"
    ." Zálohovaním",
    'L_OPTIMIZE_TABLE_ERR' => "Chyba Optimalizácie tabuľky `%s`.",
    'L_OPTIMIZE_TABLE_SUCC' => "Tabuľka `%s` bola úspešne
"
    ." optimalizovaná.",
    'L_OS' => "Operačný syste",
    'L_PAGE_REFRESHS' => "Obnovená stránk",
    'L_PASS' => "Heslo",
    'L_PASSWORD' => "Heslo",
    'L_PASSWORDS_UNEQUAL' => "Heslá nie sú zhodné alebo prázdne",
    'L_PASSWORD_REPEAT' => "Heslo (opakovať)",
    'L_PASSWORD_STRENGTH' => "Sila hesla",
    'L_PERLOUTPUT1' => "Vstup do crondump.pl pre
"
    ." absolute_path_of_configdir",
    'L_PERLOUTPUT2' => "URL pre prehliadače alebo pre"
    ." externú
 prácu Cron",
    'L_PERLOUTPUT3' => "Príkazové pre Shell alebo pre"
    ." crontab",
    'L_PERL_COMPLETELOG' => "Perl-kompletné-Log",
    'L_PERL_LOG' => "Perl-Log",
    'L_PHPBUG' => "Chyba v zlib!Nemožno kompresie",
    'L_PHPMAIL' => "PHP-Mail Funkcia()",
    'L_PHP_EXTENSIONS' => "PHP-Extension",
    'L_PHP_VERSION' => "PHP-Verzi",
    'L_POP3_PORT' => "POP3-Port",
    'L_POP3_SERVER' => "POP3-Server",
    'L_PORT' => "Port",
    'L_PORT' => "Por",
    'L_POSITION_BC' => "dole v strede",
    'L_POSITION_BL' => "vľavo dole",
    'L_POSITION_BR' => "vpravo dole",
    'L_POSITION_MC' => "Stred-stred",
    'L_POSITION_ML' => "V strede vľavo",
    'L_POSITION_MR' => "V strede vpravo",
    'L_POSITION_NOTIFICATIONS' => "Pozícia oznámenia - okná",
    'L_POSITION_TC' => "hore v strede",
    'L_POSITION_TL' => "vľavo hore",
    'L_POSITION_TR' => "v pravo hore",
    'L_PREFIX' => "Prefi",
    'L_PRIMARYKEYS_CHANGED' => "Primárne kľúče zmenené",
    'L_PRIMARYKEYS_CHANGINGERROR' => "Chyba pri zmene primárneho kľúča",
    'L_PRIMARYKEYS_SAVE' => "Uložiť primárne kľúč",
    'L_PRIMARYKEY_CONFIRMDELETE' => "Naozaj zmazať primárny kľúč",
    'L_PRIMARYKEY_DELETED' => "Primárny kľúč odstránený",
    'L_PRIMARYKEY_FIELD' => "Pole Primárneho kľúč",
    'L_PRIMARYKEY_NOTFOUND' => "Primárny kľúč nenájdený",
    'L_PROCESSKILL1' => "Snažíme sa dokončiť proce",
    'L_PROCESSKILL2' => "do konca",
    'L_PROCESSKILL3' => "Skript sa pokúsi o",
    'L_PROCESSKILL4' => "sec. ukončiť tento proce",
    'L_PROCESS_ID' => "Process ID",
    'L_PROGRESS_FILE' => "Pokrok súbor",
    'L_PROGRESS_OVER_ALL' => "Celkový pokrok",
    'L_PROGRESS_OVER_ALL' => "Celkový pokrok",
    'L_PROGRESS_TABLE' => "Záloha db / tabuľky",
    'L_PROVIDER' => "Poskytovate",
    'L_PROZESSE' => "Proces",
    'L_RECHTE' => "Oprávneni",
    'L_RECORDS' => "Záznamo",
    'L_RECORDS_INSERTED' => "<b>%s</b> záznamov vložených.",
    'L_RECORDS_PER_PAGECALL' => "Záznamov na stránk",
    'L_REFRESHTIME' => "Aktualizácia času",
    'L_REFRESHTIME_PROCESSLIST' => "Update interval proces zoznamu",
    'L_RELOAD' => "Reloa",
    'L_REMOVE' => "Odstrániť",
    'L_REPAIR' => "Opraviť",
    'L_RESET' => "Rese",
    'L_RESET_SEARCHWORDS' => "reset hľadané slová",
    'L_RESTORE' => "Obnov",
    'L_RESTORE_COMPLETE' => "<b>%s</b> tabuľiek vytvorených.",
    'L_RESTORE_DB' => "Databáza '<b>%s</b>' on '<b>%s</b>'.",
    'L_RESTORE_DB_COMPLETE_IN' => "Obnovenie databázy '%s' in %s
"
    ." ukončené.",
    'L_RESTORE_OF_TABLES' => "Vyberte tabuľky ktoré majú byť
"
    ." obnovené",
    'L_RESTORE_TABLE' => "Obnova tabuľky '%s' dokončená",
    'L_RESTORE_TABLES_COMPLETED' => "Práve <b>%d</b> tabuliek zo <b>%d</b>"
    ." 
 bolo vytvorených.",
    'L_RESTORE_TABLES_COMPLETED0' => "<b>%d</b> Tabuliek bolo vytvorených",
    'L_REVERSE' => "Posledný záznam prvý",
    'L_SAFEMODEDESC' => "Pretože PHP je spustená v safe_mode
"
    ." musíte tieto adresáre vytvoriť"
    ." ručne
 pomocou FTP-Programu:",
    'L_SAVE' => "Uloži",
    'L_SAVEANDCONTINUE' => "Uložiť a pokračovať v inštalácii",
    'L_SAVE_ERROR' => "Chyba - nemôžem uložiť nastavenie!",
    'L_SAVE_SUCCESS' => "Nastavenie bolo úspešne uložené"
    ." do
 nastavenia zálohovania \"%s\".",
    'L_SAVING_DATA_TO_FILE' => "Ukladanie dát z databázy '% s' do
"
    ." zálohy '% s'",
    'L_SAVING_DATA_TO_MULTIPART_FILE' => "Maximálna veľkosť zálohy bola
"
    ." dosiahnutá: Pokračovanie v zálohe"
    ." '%
 s'",
    'L_SAVING_DB_FORM' => "Databáz",
    'L_SAVING_TABLE' => "Uložené tabuľky",
    'L_SEARCH_ACCESS_KEYS' => "Prehľadávať: dopredu = ALT + V,
"
    ." dozadu = ALT + C",
    'L_SEARCH_IN_TABLE' => "Vyhľadávanie v tabuľke",
    'L_SEARCH_NO_RESULTS' => "Vyhľadávanie \"<b>%s</b>\" v"
    ." tabuľke
 \"<b>%s</b>\" nenašlo"
    ." žiadne
 výsledky!",
    'L_SEARCH_OPTIONS' => "Možnosti hľadania",
    'L_SEARCH_OPTIONS_AND' => "kolónka musí obsahovať všetky
"
    ." hľadané slová (AND-search)",
    'L_SEARCH_OPTIONS_CONCAT' => "riadok musí obsahovať všetky
"
    ." hľadané slová, ale môžu byť v
"
    ." každom stĺpci (môže to nejaký"
    ." čas
 trvať)",
    'L_SEARCH_OPTIONS_OR' => "stĺpce musia mať jeden z"
    ." hľadaných
 slov (OR-search)",
    'L_SEARCH_RESULTS' => "Vyhľadávanie \"<b>%s</b>\" v"
    ." tabuľke
 \"<b>%s</b>\" prináša"
    ." nasledujúce
 výsledky",
    'L_SECOND' => "Sekun",
    'L_SECONDS' => "Sekún",
    'L_SELECT' => "Vybra",
    'L_SELECTALL' => "Vybrať všetko",
    'L_SELECTED_FILE' => "Vybrantá záloha",
    'L_SELECT_FILE' => "Vyberte zálohu",
    'L_SELECT_LANGUAGE' => "Vyberte jazyk",
    'L_SENDMAIL' => "Odoslať e-mail",
    'L_SENDRESULTASFILE' => "odoslať výsledok ako súbor",
    'L_SEND_MAIL_FORM' => "Poslať e-mail správu",
    'L_SERVER' => "Serve",
    'L_SERVERCAPTION' => "Zobraziť Serve",
    'L_SETPRIMARYKEYSFOR' => "Nastavte nové primárne kľúče na
"
    ." tabuľk",
    'L_SHOWING_ENTRY_X_TO_Y_OF_Z' => "Zobrazené dáta %s / %s zo %s",
    'L_SHOWRESULT' => "Zobraziť výsledky",
    'L_SMTP' => "SMTP",
    'L_SMTP_HOST' => "SMTP-Server",
    'L_SMTP_PORT' => "SMTP-Port",
    'L_SOCKET' => "Socke",
    'L_SPEED' => "Rýchlos",
    'L_SQLBOX' => "SQL-Box",
    'L_SQLBOXHEIGHT' => "Výška SQL-Box",
    'L_SQLLIB_ACTIVATEBOARD' => "aktivovať stránku",
    'L_SQLLIB_BOARDS' => "Stránka",
    'L_SQLLIB_DEACTIVATEBOARD' => "deactivovat stránku",
    'L_SQLLIB_GENERALFUNCTIONS' => "všeobecné funkcie",
    'L_SQLLIB_RESETAUTO' => "Auto-Reset hodnoty",
    'L_SQLLIMIT' => "Počet záznamov každej stránky",
    'L_SQL_ACTIONS' => "Akcia",
    'L_SQL_AFTER' => "po",
    'L_SQL_ALLOWDUPS' => "Duplikáty povolené",
    'L_SQL_ATPOSITION' => "vložiť na pozíciu",
    'L_SQL_ATTRIBUTES' => "Atribúty",
    'L_SQL_BACKDBOVERVIEW' => "Späť na prehľad",
    'L_SQL_BEFEHLNEU' => "Nový príkaz",
    'L_SQL_BEFEHLSAVED1' => "SQL Príkaz",
    'L_SQL_BEFEHLSAVED2' => "bola pridaná",
    'L_SQL_BEFEHLSAVED3' => "bol uložený",
    'L_SQL_BEFEHLSAVED4' => "bol presunutý do",
    'L_SQL_BEFEHLSAVED5' => "bol zrušený",
    'L_SQL_BROWSER' => "SQ",
    'L_SQL_CARDINALITY' => "Mohutnosť",
    'L_SQL_CHANGED' => "bol zmenený.",
    'L_SQL_CHANGEFIELD' => "zmeniť pole",
    'L_SQL_CHOOSEACTION' => "Vyberte si akciu",
    'L_SQL_COLLATENOTMATCH' => "Charset a znášanie nesedí"
    ." dohromady!",
    'L_SQL_COLUMNS' => "Stĺpcov",
    'L_SQL_COMMANDS' => "SQL príkaz",
    'L_SQL_COMMANDS_IN' => "Riadky",
    'L_SQL_COMMANDS_IN2' => "Second(s) spracované.",
    'L_SQL_COPYDATADB' => "Kopírovať celú databázu pre",
    'L_SQL_COPYSDB' => "Kópia Štruktúra databázy",
    'L_SQL_COPYTABLE' => "kopírovať tabuľku",
    'L_SQL_CREATED' => "bol vytvorený",
    'L_SQL_CREATEINDEX' => "vytvoriť nový index",
    'L_SQL_CREATETABLE' => "vytvoriť tabuľku",
    'L_SQL_DATAVIEW' => "Zobrazenie dát",
    'L_SQL_DBCOPY' => "Obsah databázy `%s` bol kopírovaný"
    ." k
 databáze `%s`.",
    'L_SQL_DBSCOPY' => "Štruktúra databázy `%s` bola
"
    ." kopírovaná k databáze `%s`.",
    'L_SQL_DELETED' => "bol zrušený",
    'L_SQL_DELETEDB' => "Odstrániť databázy",
    'L_SQL_DESTTABLE_EXISTS' => "Tabuľka určenia existuje !",
    'L_SQL_EDIT' => "uprava",
    'L_SQL_EDITFIELD' => "Upravit pole",
    'L_SQL_EDIT_TABLESTRUCTURE' => "Upraviť štruktúry tabuľky",
    'L_SQL_EMPTYDB' => "Prázdne databázy",
    'L_SQL_ERROR1' => "Chyba v dotaze",
    'L_SQL_ERROR2' => "MySQL hovorí",
    'L_SQL_EXEC' => "Vykonať SQL Príkaz",
    'L_SQL_EXPORT' => "Export z databázy `%s`",
    'L_SQL_FIELDDELETE1' => "Pole",
    'L_SQL_FIELDNAMENOTVALID' => "Chyba: Žiadny platný názov poľa",
    'L_SQL_FIRST' => "prvá",
    'L_SQL_IMEXPORT' => "Import-Export",
    'L_SQL_IMPORT' => "Import v databáze `%s`",
    'L_SQL_INDEXES' => "Indexy",
    'L_SQL_INSERTFIELD' => "vložiť pole",
    'L_SQL_INSERTNEWFIELD' => "vložiť nové pole",
    'L_SQL_LIBRARY' => "SQL Knižnica",
    'L_SQL_NAMEDEST_MISSING' => "Meno miesto určenia chýba !",
    'L_SQL_NEWFIELD' => "Nové pole",
    'L_SQL_NODATA' => "žiadne záznamy",
    'L_SQL_NODEST_COPY' => "Žiadne kopírovanie bez určenia !",
    'L_SQL_NOFIELDDELETE' => "Zmazať, nie je možné, pretože
"
    ." tabuľky musí obsahovať aspoň"
    ." jedno
 pole.",
    'L_SQL_NOTABLESINDB' => "Nenašli sa žiadne tabuľky v"
    ." databáze",
    'L_SQL_NOTABLESSELECTED' => "Nie sú vybrané žiadne tabuľky !",
    'L_SQL_OPENFILE' => "Otvoriť SQL-Súbor",
    'L_SQL_OPENFILE_BUTTON' => "Nahrať",
    'L_SQL_OUT1' => "Prevedené",
    'L_SQL_OUT2' => "Príkazy",
    'L_SQL_OUT3' => "Tam boli",
    'L_SQL_OUT4' => "Komentár",
    'L_SQL_OUT5' => "Vzhľadom k tomu, výstup obsahuje"
    ." viac
 ako 5000 riadkov nie je"
    ." zobrazená.",
    'L_SQL_OUTPUT' => "SQL Výstup",
    'L_SQL_QUERYENTRY' => "Dotaz obsahuje",
    'L_SQL_RECORDDELETED' => "Záznam bol zmazaný",
    'L_SQL_RECORDEDIT' => "upraviť záznam",
    'L_SQL_RECORDINSERTED' => "Záznam bol pridaný",
    'L_SQL_RECORDNEW' => "nový záznam",
    'L_SQL_RECORDUPDATED' => "Záznam bol aktualizovaný",
    'L_SQL_RENAMEDB' => "Premenovať Databázu",
    'L_SQL_RENAMEDTO' => "bol premenovaný na",
    'L_SQL_SCOPY' => "Štruktúra tabuľky `%s` bola
"
    ." kopírovaná k tabuľke `%s`.",
    'L_SQL_SEARCH' => "Hľadať",
    'L_SQL_SEARCHWORDS' => "Hľadané slovo(s)",
    'L_SQL_SELECTTABLE' => "vyberte tabuľku",
    'L_SQL_SHOWDATATABLE' => "Ukázať Dáta v tabuľke",
    'L_SQL_STRUCTUREDATA' => "Štruktúra a dát",
    'L_SQL_STRUCTUREONLY' => "Iba Štruktúra",
    'L_SQL_TABLEEMPTIED' => "Tabuľka `%s` bola zmazaná.",
    'L_SQL_TABLEEMPTIEDKEYS' => "Tabuľka `%s` bola zmazaná a indexi
"
    ." boli resetované.",
    'L_SQL_TABLEINDEXES' => "Indexy v tabuľke",
    'L_SQL_TABLENEW' => "Úpravy tabuľky",
    'L_SQL_TABLENOINDEXES' => "Žiadene indexy v tabuľke",
    'L_SQL_TABLENONAME' => "Tabuľka potrebuje meno!",
    'L_SQL_TABLESOFDB' => "Tabulka databázy",
    'L_SQL_TABLEVIEW' => "Zobraziť Tabuľky",
    'L_SQL_TBLNAMEEMPTY' => "Názov tabuľky nesmie't byť"
    ." prázdne!",
    'L_SQL_TBLPROPSOF' => "Vlastnosti tabuľky",
    'L_SQL_TCOPY' => "Tabuľka `%s` bola kopírovaná s
"
    ." dátami k tabuľke `%s`.",
    'L_SQL_UPLOADEDFILE' => "Nahrať zálohu:",
    'L_SQL_VIEW_COMPACT' => "Zobraziť: kompaktné",
    'L_SQL_VIEW_STANDARD' => "Zobraziť: standard",
    'L_SQL_VONINS' => "celkom",
    'L_SQL_WARNING' => "Vykonávanie príkazov SQL môžete
"
    ." manipulovať s dátami. Pamätajte!
"
    ." Autori, nenesú žiadnu zodpovednosť"
    ." za
 poškodenie alebo stratu dát.",
    'L_SQL_WASCREATED' => "bol vytvorený",
    'L_SQL_WASEMPTIED' => "bol vyprázdnený",
    'L_STARTDUMP' => "Spustiť",
    'L_START_RESTORE_DB_FILE' => "Spustenie obnovenia databázy '%s' zo
"
    ." zálohy '%s'.",
    'L_START_SQL_SEARCH' => "začať hľadať",
    'L_STATUS' => "Sta",
    'L_STATUS' => "Sta",
    'L_STEP' => "Krok",
    'L_SUCCESS_CONFIGFILE_CREATED' => "Nastavenie zálohovania %s bolo
"
    ." úspešne vytvorené.",
    'L_SUCCESS_DELETING_CONFIGFILE' => "Nastavenie zálohovania %s bolo
"
    ." úspešne odstránené.",
    'L_TABLE' => "Tabulk",
    'L_TABLES' => "Tabulie",
    'L_TABLESELECTION' => "Tabuľka výberu",
    'L_TABLE_CREATE_SUCC' => "Tabuľka '%s'  bola úspešne
"
    ." vytvorená",
    'L_TABLE_TYPE' => "Ty",
    'L_TESTCONNECTION' => "Test pripojeni",
    'L_THEME' => "Tema",
    'L_TIME' => "Ča",
    'L_TIMESTAMP' => "Časový interva",
    'L_TITLE_INDEX' => "Index",
    'L_TITLE_KEY_FULLTEXT' => "Fulltext key",
    'L_TITLE_KEY_PRIMARY' => "Primary key",
    'L_TITLE_KEY_UNIQUE' => "Unique key",
    'L_TITLE_MYSQL_HELP' => "MySQL Dokumentácia",
    'L_TITLE_NOKEY' => "Žiadne key",
    'L_TITLE_SEARCH' => "Hľadať",
    'L_TITLE_SHOW_DATA' => "Zobraziť údaj",
    'L_TITLE_UPLOAD' => "Nahrať SQL súbor",
    'L_TO' => "d",
    'L_TOOLS' => "Nástroje",
    'L_TOOLS' => "Nástroje",
    'L_TOOLS_TOOLBOX' => "Vybrať databázu / Funkcie Databázy"
    ." /
 Import - Export",
    'L_UNIT_KB' => "KB",
    'L_UNIT_MB' => "MB",
    'L_UNIT_PIXEL' => "Px",
    'L_UNKNOWN' => "neznám",
    'L_UNKNOWN_SQLCOMMAND' => "neznámy SQL-Príkaz",
    'L_UPDATE' => "Aktualizovať",
    'L_UPTO' => "až",
    'L_USERNAME' => "Užívaťeľské meno",
    'L_USE_SSL' => "Použiť SSL",
    'L_VALUE' => "Hodnot",
    'L_VERSIONSINFORMATIONEN' => "Verzi",
    'L_VIEW' => "zobrazi",
    'L_VISIT_HOMEPAGE' => "Ísť na obsa",
    'L_VOM' => "bol",
    'L_WITH' => "s",
    'L_WITHATTACH' => "sa pripojiť",
    'L_WITHOUTATTACH' => "bez prikladajú",
    'L_WITHPRAEFIX' => "prefix",
    'L_WRONGCONNECTIONPARS' => "Parametre pripojenia zlé alebo
"
    ." chýbajúce",
    'L_WRONG_CONNECTIONPARS' => "Parametre pripojenia sú mylné !",
    'L_WRONG_RIGHTS' => "Do adresára'%s' nemožno"
    ." zapisovať.<br
 />
Práva (chmod), nie"
    ." sú nastavené
 správne, alebo je"
    ." zlý vlastník.<br
 />
Prosí nastavte"
    ." správne atribúty
 pomocou FTP"
    ." klienta.<br />
Súbor alebo
 adresár"
    ." musí byť nastavený na %s.<br
 /",
    'L_YES' => "áno",
));
