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
    'L_ACTION' => "العمل",
    'L_ACTIVATED' => "تفعيل",
    'L_ACTUALLY_INSERTED_RECORDS' => "البدء لآن<b>%s</b> تمت"
    ." اضافة السجلات بنجاح.",
    'L_ACTUALLY_INSERTED_RECORDS_OF' => "البدء لآن  <b>%s</b> of"
    ." <b>%s</b> تمت الاضافة"
    ." بنجاح.",
    'L_ADD' => "Add",
    'L_ADDED' => "اضافة",
    'L_ADD_DB_MANUALLY' => "اضف قاعدة البيانات"
    ." يدويا",
    'L_ADD_RECIPIENT' => "Add recipient",
    'L_ALL' => "الكل",
    'L_ANALYZE' => "Analyze",
    'L_ANALYZING_TABLE' => "ابدأ الجداول "
    ." '<b>%s</b>'اعادة.",
    'L_ASKDBCOPY' => "`%s` هل تريد نسخ قاعدة"
    ." البيانات  `%s`الى"
    ." قاعدة البيانات ?",
    'L_ASKDBDELETE' => "بالمحتوى `%s` هل تريد"
    ." حذف قاعدة البيانات?",
    'L_ASKDBEMPTY' => "هل تريد افراغ قاعدة"
    ." البيانات `%s` ?",
    'L_ASKDELETEFIELD' => "هل انت متأكد انك تريد"
    ." حذف هذا الحقل?",
    'L_ASKDELETERECORD' => "هل انت متأكد انك تريد"
    ." حذف هذا السجل?",
    'L_ASKDELETETABLE' => "حذف الجداول `%s` تاكد"
    ." انه تم ?",
    'L_ASKTABLEEMPTY' => "فارغة `%s` تأكد ان جميع"
    ." الجداول?",
    'L_ASKTABLEEMPTYKEYS' => "هل انت متأكد من من"
    ." تفريغ الجدول  `%s`"
    ." واعادة الفهارس ?",
    'L_ATTACHED_AS_FILE' => "attached as file",
    'L_ATTACH_BACKUP' => "ارفاق الاسناد",
    'L_AUTHORIZE' => "Authorize",
    'L_AUTODELETE' => "حذف ملفات الباك اوب"
    ." اتوماتيكا",
    'L_BACK' => "للخلف",
    'L_BACKUPFILESANZAHL' => "حجم وعدد الملفات في"
    ." دليل الاسناد",
    'L_BACKUPS' => "النسخ الاحتياطي",
    'L_BACKUP_DBS' => "قواعدة البيانات الى"
    ." النسخ الاحتياطي",
    'L_BACKUP_TABLE_DONE' => "Dumping of table `%s` finished. %s"
    ." records have been saved.",
    'L_BACK_TO_OVERVIEW' => "تفاصيل عامة لقاعدة"
    ." البيانات",
    'L_BACK_TO_OVERVIEW' => "تفاصيل عامة لقاعدة"
    ." البيانات",
    'L_CALL' => "Call",
    'L_CANCEL' => "إلغاء الأمر",
    'L_CANT_CREATE_DIR' => "Couldn' لا يستطيع انشاء"
    ." '%s'. 
من فضلك استخدم"
    ." برامج برتكول FTP-لنقل"
    ." الملفات.",
    'L_CHANGE' => "التغيير",
    'L_CHANGEDIR' => "تغيير مياشر",
    'L_CHANGEDIR' => "تغيير الى الدليل",
    'L_CHANGEDIRERROR' => "لا يمكن التغيير"
    ." مباشرة",
    'L_CHANGEDIRERROR' => "لا يمكن تغيير الدليل!",
    'L_CHARSET' => "Charset",
    'L_CHECK' => "فحص الجداول",
    'L_CHECK' => "check",
    'L_CHECK_DIRS' => "فحص الادلة",
    'L_CHOOSE_CHARSET' => "MySQLDumper لا يمكن الكشف"
    ." عن الترميز"
    ." تلقائيالملف النسخ"
    ." الاحتياطي.
<br />يجب"
    ." عليك اختيار الاحرف"
    ." التي تم حفظ النسخ"
    ." الاحتياطي بها.
<br"
    ." />اذا واجهت اي مشكلة"
    ." مع بعض الاحرف في"
    ." الاستعادة يمكنك"
    ." تكرار عملية النسخ"
    ." الاحتياطي واختيار"
    ." مجموعة اخرى.
<br />حظا"
    ." موفقا. ;)",
    'L_CHOOSE_DB' => "اختر قاعدة البيانات",
    'L_CLEAR_DATABASE' => "تنظيف قاعدة البيانات",
    'L_CLOSE' => "Close",
    'L_COLLATION' => "ترتيب",
    'L_COMMAND' => "الاوامر",
    'L_COMMAND' => "امر",
    'L_COMMAND_AFTER_BACKUP' => "Command after backup",
    'L_COMMAND_BEFORE_BACKUP' => "Command before backup",
    'L_COMMENT' => "تعليق",
    'L_COMPRESSED' => "ضغط (gz)",
    'L_CONFBASIC' => "اساسي Parameter",
    'L_CONFIG' => "اعدادات",
    'L_CONFIGFILE' => "تهيئة الملف",
    'L_CONFIGFILES' => "تهيئة الملفات",
    'L_CONFIGURATIONS' => "الاعدادات",
    'L_CONFIG_AUTODELETE' => "حذف تلقائي",
    'L_CONFIG_CRONPERL' => "اعدادت Crondump Perl في "
    ." المخطوطة",
    'L_CONFIG_EMAIL' => "تبليغ بالبريد"
    ." الالكتروني",
    'L_CONFIG_FTP' => "FTP نقل ملفات الاسناد"
    ." بواسطة برنامج",
    'L_CONFIG_HEADLINE' => "اعدادات",
    'L_CONFIG_INTERFACE' => "اللغة والسمات",
    'L_CONFIG_LOADED' => "تهيئة \"%s\" تم"
    ." استيرادها بنجاح.",
    'L_CONFIRM_CONFIGFILE_DELETE' => "هل تريد حذف ملف"
    ." التهيئة فعلا %s?",
    'L_CONFIRM_DELETE_TABLES' => "Really delete the selected tables?",
    'L_CONFIRM_DROP_DATABASES' => "Should the selected databases really"
    ." be deleted?

Attention: all data will"
    ." be deleted! Maybe you should create a"
    ." backup first.",
    'L_CONFIRM_RECIPIENT_DELETE' => "Should the recipient \"%s\" really be"
    ." deleted?",
    'L_CONFIRM_TRUNCATE_DATABASES' => "Should all tables of the selected"
    ." databases really be"
    ." deleted?

Attention: all data will be"
    ." deleted! Maybe you want to create a"
    ." backup first.",
    'L_CONFIRM_TRUNCATE_TABLES' => "Really empty the selected tables?",
    'L_CONNECT' => "ربط",
    'L_CONNECTIONPARS' => "تم الاتصال",
    'L_CONNECTTOMYSQL' => "ربط الى MySQL",
    'L_CONTINUE_MULTIPART_RESTORE' => "Continue Multipart-Restore with next"
    ." file '%s'.",
    'L_CONVERTED_FILES' => "Converted Files",
    'L_CONVERTER' => "تحويل النسخ"
    ." الاحتياطي",
    'L_CONVERTING' => "تحويل",
    'L_CONVERT_FILE' => "الملف المحول",
    'L_CONVERT_FILENAME' => "اسم الملف الوجهة"
    ." (بدون الامتداد)",
    'L_CONVERT_FILEREAD' => "قراءة الملف '%s'",
    'L_CONVERT_FINISHED' => "التحويل انتهى, '%s' تم"
    ." التحويل بنجاح.",
    'L_CONVERT_START' => "بداية التحويل",
    'L_CONVERT_TITLE' => "تحويل قاعدة البيانات"
    ." الى صيغة MSD",
    'L_CONVERT_WRONG_PARAMETERS' => "خطأ parameters!  التحويل"
    ." غير محتمل.",
    'L_CREATE' => "انشاء",
    'L_CREATEAUTOINDEX' => "اضف تلقائيا الى"
    ." دليل-Index",
    'L_CREATEDIRS' => "انشاء الادلة",
    'L_CREATE_CONFIGFILE' => "انشاء تهيئة جديده"
    ." للملف",
    'L_CREATE_DATABASE' => "انشاء قاعدة بيانات"
    ." جديده",
    'L_CREATE_TABLE_SAVED' => "Definition of table `%s` saved.",
    'L_CREDITS' => "المعلومات / الدعم",
    'L_CRONSCRIPT' => "Cronscript",
    'L_CRON_COMMENT' => "ادخل تعليقا",
    'L_CRON_COMPLETELOG' => "ناتج السجل الكامل",
    'L_CRON_EXECPATH' => "Path of Perl scripts",
    'L_CRON_EXTENDER' => "امتداد المف",
    'L_CRON_PRINTOUT' => "طباعة النتائج على"
    ." الشاشة.",
    'L_CSVOPTIONS' => "CSV خيارات",
    'L_CSV_EOL' => "خطوط منفصلة",
    'L_CSV_ERRORCREATETABLE' => "`%s` حدث خطأ عند القيام"
    ." بإنشاء الجدول !",
    'L_CSV_FIELDCOUNT_NOMATCH' => "احصاء الحقول لا"
    ." يتطابق مع بيانات"
    ." الاستيراد (%d بدلا من"
    ." %d).",
    'L_CSV_FIELDSENCLOSED' => "تم ارفاق الحقول"
    ." بواسطة",
    'L_CSV_FIELDSEPERATE' => "الحقول فصلت",
    'L_CSV_FIELDSESCAPE' => "تضمين الحقول مع",
    'L_CSV_FIELDSLINES' => "%d الحقول معروفه, كليا"
    ." %d خطوط",
    'L_CSV_FILEOPEN' => "ملف CSVفتح",
    'L_CSV_NAMEFIRSTLINE' => "اسماء الحقول في الخط"
    ." الاول",
    'L_CSV_NODATA' => "لا توجد بيانات"
    ." للاستيراد!",
    'L_CSV_NULL' => "استبدال NULL",
    'L_DATASIZE' => "Size of data",
    'L_DATASIZE_INFO' => "This is the size of the records - not"
    ." the size of the backup file",
    'L_DAY' => "Day",
    'L_DAYS' => "Days",
    'L_DB' => "قاعدة بيانات",
    'L_DBCONNECTION' => "الاتصال بقاعدة"
    ." البيانات",
    'L_DBPARAMETER' => "قاعدة البيانات Parameters",
    'L_DBS' => "قواعد بيانات",
    'L_DB_BACKUPPARS' => "اسناد قواعد البيانات"
    ." Parameter",
    'L_DB_HOST' => "اسم المضيف",
    'L_DB_IN_LIST' => "قاعدة البيانات '%s'"
    ." لايمكن اضافتها ضمن"
    ." القائمة لانها غير"
    ." جاهزة.",
    'L_DB_PASS' => "كلمة مرور مستخدم"
    ." قاعدة البيانات",
    'L_DB_SELECT_ERROR' => "<br />مشكلة:<br />حدد"
    ." قاعدة البيانات <b>",
    'L_DB_SELECT_ERROR2' => "</b> فشل!",
    'L_DB_USER' => "اسم قاعدة البيانات",
    'L_DEFAULT_CHARSET' => "الاعدادات الاصلية",
    'L_DELETE' => "حذف",
    'L_DELETE_DATABASE' => "حذف قاعدة البيانات",
    'L_DELETE_FILE_ERROR' => "Error deleting file \"%s\"!",
    'L_DELETE_FILE_SUCCESS' => "File \"%s\" was deleted successfully.",
    'L_DELETE_HTACCESS' => "إزالة الحماية من"
    ." الدليل (delete .htaccess)",
    'L_DESELECTALL' => "الغاء تحديد الكل",
    'L_DIR' => "دليل",
    'L_DISABLEDFUNCTIONS' => "الوظائف المعطلة",
    'L_DISABLEDFUNCTIONS' => "الوظائف المعطلة",
    'L_DO' => "تنفيذ",
    'L_DOCRONBUTTON' => "تشغيل Perl Cron في"
    ." المخطوطه",
    'L_DONE' => "تم!",
    'L_DONT_ATTACH_BACKUP' => "Don't attach backup",
    'L_DOPERLTEST' => "فحص وحدات Perl",
    'L_DOSIMPLETEST' => "فحص Perl",
    'L_DOWNLOAD_FILE' => "Download file",
    'L_DO_NOW' => "ابدأ الآن",
    'L_DUMP' => "انشاء نسخة من قاعدة"
    ." البيانات",
    'L_DUMP_ENDERGEBNIS' => "محتويات الملف <b>%s</b>"
    ." مع الجداول <b>%s</b>"
    ." السجلات.<br />",
    'L_DUMP_FILENAME' => "ملف النسخ الاحتياطي",
    'L_DUMP_HEADLINE' => "انشاء نسخة احتياطية"
    ." ...",
    'L_DUMP_NOTABLES' => "لم يتم العثور على"
    ." جداول في قاعدة"
    ." البيانات `%s`",
    'L_DUMP_OF_DB_FINISHED' => "Dumping of database `%s` done",
    'L_DURATION' => "Duration",
    'L_EDIT' => "تحرير",
    'L_EHRESTORE_CONTINUE' => "تابع وقم بتسجيل"
    ." الاخطاء",
    'L_EHRESTORE_STOP' => "ايقاف",
    'L_EMAIL' => "E-Mail",
    'L_EMAILBODY_ATTACH' => "المرفق يحتوي على ملف"
    ." النسخ الاحتياطي"
    ." لقاعدة البيانات"
    ." MySQL.<br />نسخ احتياطي"
    ." لقاعدة البيانات `%s`
<br"
    ." /><br />تم انشاء الملف"
    ." التالي:<br /><br />%s <br /><br"
    ." />حظا موفقا  <br /><br"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_FOOTER' => "`<br /><br />حظا موفقا<br"
    ." /><br />MySQLDumper<br />",
    'L_EMAILBODY_MP_ATTACH' => "تم انشاء النسخ"
    ." الاحتياطي المتعدد.<br"
    ." />فواصل بين ملفات"
    ." النسخ الاحتياطي عند"
    ." ارسالها بالبريد"
    ." الالكتروني.<br />النسخ"
    ." الاحتياطي لقاعدة"
    ." البيانات `%s`
<br /><br"
    ." />الملفات التالية"
    ." انشئت:<br /><br />%s <br /><br"
    ." />حظا موفقا<br /><br"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_MP_NOATTACH' => "تم انشاء النسخ"
    ." الاحتياطي المتعدد.<br"
    ." />ملفات النسخ"
    ." الاحتياطي لا يمكن"
    ." ارسالها البريد"
    ." الالكتروني!<br />النسخ"
    ." الاحتياطي لقاعدة"
    ." البيانات `%s`
<br /><br"
    ." />الملفات التالية تم"
    ." انشئت:<br /><br />%s
<br /><br"
    ." />حظا موفقا<br /><br"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_NOATTACH' => "الملفات لايمكن"
    ." ارسالها بالبريد"
    ." الالكتروني!<br />النسخ"
    ." الاحتياطي لقاعدة"
    ." البيانات `%s`
<br /><br"
    ." />الملفات التالية"
    ." انشئت:<br /><br />%s
<br /><br"
    ." />حظا موفقا<br /><br"
    ." />MySQLDumper<br />",
    'L_EMAILBODY_TOOBIG' => "الحجم الاقصى للملف"
    ." تجاوز الحد المسموح"
    ." به %s لا يمكن ارسال"
    ." المرفقات الى البريد"
    ." الالكتروني  .<br"
    ." />النسخ الاحتياطي"
    ." لقاعدة البيانات "
    ." `%s`
<br /><br />الملفات"
    ." التالية انشئت:<br /><br"
    ." />%s
<br /><br />حظا موفقا<br"
    ." /><br />MySQLDumper<br />",
    'L_EMAIL_ADDRESS' => "E-Mail-Address",
    'L_EMAIL_CC' => "نسخة كربونية-الى"
    ." المستلم",
    'L_EMAIL_MAXSIZE' => "الحجم الاقصى"
    ." للمرفقات",
    'L_EMAIL_ONLY_ATTACHMENT' => "... المرفقات فقط.",
    'L_EMAIL_RECIPIENT' => "عنوان البريد"
    ." الالكتروني",
    'L_EMAIL_SENDER' => "عنوان مرسل البريد"
    ." الالكتروني",
    'L_EMAIL_START' => "Starting to send e-mail",
    'L_EMAIL_WAS_SEND' => "البريد الالكتروني"
    ." ارسل بنجاح الى",
    'L_EMPTY' => "افراغ",
    'L_EMPTYKEYS' => "تفريغ واعادة الادلة",
    'L_EMPTYTABLEBEFORE' => "قبل افراغ الجدول",
    'L_EMPTY_DB_BEFORE_RESTORE' => "حذف الجداول قبل"
    ." تنفيذ عملية"
    ." الاستعادة",
    'L_ENCODING' => "الترميز",
    'L_ENCRYPTION_TYPE' => "نوع التشفير",
    'L_ENGINE' => "Engine",
    'L_ENTER_DB_INFO' => "First click the button \"Connect to"
    ." MySQL\". Only if no database could be"
    ." detected you need to provide a"
    ." database name here.",
    'L_ENTRY' => "ادخال",
    'L_ERROR' => "خطأ",
    'L_ERRORHANDLING_RESTORE' => "حدث خطأ اثناء"
    ." المعالجة",
    'L_ERROR_CONFIGFILE_NAME' => "الملف بإسم \"%s\" يحتوي"
    ." على احرف غير صحيحه.",
    'L_ERROR_DELETING_CONFIGFILE' => "خطا: لا يستطيع حذف"
    ." ملف التهيئة %s!",
    'L_ERROR_LOADING_CONFIGFILE' => "لا يستطيع تحميل ملف"
    ." التهيئة \"%s\".",
    'L_ERROR_LOG' => "خطا السجل",
    'L_ERROR_MULTIPART_RESTORE' => "Multipart-Restore: couldn't finde the"
    ." next file '%s'!",
    'L_ESTIMATED_END' => "Estimated end",
    'L_EXCEL2003' => "Excel fromاكسل  2003",
    'L_EXISTS' => "Exists",
    'L_EXPORT' => "تصدير",
    'L_EXPORTFINISHED' => "الصيغة النهائية.",
    'L_EXPORTLINES' => "<قوي>%s</strong> تم تصدير"
    ." الخطوط",
    'L_EXPORTOPTIONS' => "خيارات التصدير",
    'L_EXTENDEDPARS' => "امتداد Parameter",
    'L_FADE_IN_OUT' => "عرض فتح/اغلاق",
    'L_FATAL_ERROR_DUMP' => "خطأ فادح: انشاء -"
    ." بيانات من الجدول '%s'"
    ." في قاعدة البيانات '%s'"
    ." لا يمكن القراءة!<br"
    ." />
قم بفحص المشاكل في"
    ." هذا الجدول.",
    'L_FIELDS' => "الحقول",
    'L_FIELDS_OF_TABLE' => "Fields of table",
    'L_FILE' => "ملف",
    'L_FILES' => "Files",
    'L_FILESIZE' => "حجم الملف",
    'L_FILE_MANAGE' => "مدير الملفات",
    'L_FILE_OPEN_ERROR' => "خطأ: لا يمكن فتح"
    ." الملف.",
    'L_FILE_SAVED_SUCCESSFULLY' => "The file has been saved successfully.",
    'L_FILE_SAVED_UNSUCCESSFULLY' => "The file couldn't be saved!",
    'L_FILE_UPLOAD_SUCCESSFULL' => "The file '%s' was uploaded"
    ." successfully.",
    'L_FILTER_BY' => "Filter by",
    'L_FM_ALERTRESTORE1' => "هل تريد تنفيذ"
    ." هذاالاجراء على قاعدة"
    ." البيانات",
    'L_FM_ALERTRESTORE2' => "استعادة الجداول"
    ." والسجلات من الملف",
    'L_FM_ALERTRESTORE3' => "?",
    'L_FM_ALL_BU' => "كل النسخ الاحتياطي",
    'L_FM_ANZ_BU' => "النسخ الاحتياطي",
    'L_FM_ASKDELETE1' => "هل تريد تنفيذ هذا"
    ." الاجراء على الملف",
    'L_FM_ASKDELETE2' => "وحذف الملف فعلا?",
    'L_FM_ASKDELETE3' => "هل تريد تمكين الحذف"
    ." التلقائي وتهيئة"
    ." قواعد البانات الآن?",
    'L_FM_ASKDELETE4' => "هل تريد حذف جميع"
    ." ملفات النسخ"
    ." الاحتياطي?",
    'L_FM_ASKDELETE5' => "هل تريد حذف جميع"
    ." ملفات النسخ"
    ." الاحتياطي مع",
    'L_FM_ASKDELETE5_2' => "* ?",
    'L_FM_AUTODEL1' => "الحذف التلقائي:"
    ." الملفات التالية تم"
    ." حذفها لتجاوزها الحد"
    ." الاقصى المسموح به :",
    'L_FM_CHOOSE_ENCODING' => "اختر ترميز لملف"
    ." النسخ الاحتياطي",
    'L_FM_COMMENT' => "ادخل تعليقا",
    'L_FM_DBNAME' => "اسم قاعدة البيانات",
    'L_FM_DELETE' => "حذف",
    'L_FM_DELETE1' => "الملف",
    'L_FM_DELETE2' => "تم الحذف بنجاح.",
    'L_FM_DELETE3' => "لا يستطيع الحذف!",
    'L_FM_DELETEALL' => "حذف جميع ملفات النسخ"
    ." الاحتياطي",
    'L_FM_DELETEALLFILTER' => "حذف الكل مع",
    'L_FM_DELETEAUTO' => "تمكين الحذف التلقائي"
    ." يدويا",
    'L_FM_DUMPSETTINGS' => "تهيئة في المخطوطه",
    'L_FM_DUMP_HEADER' => "نسخ احتياطي",
    'L_FM_FILEDATE' => "تأريخ الملف",
    'L_FM_FILES1' => "قاعدة بيانات النسخ"
    ." الاحتياطي",
    'L_FM_FILESIZE' => "حجم الملف",
    'L_FM_FILEUPLOAD' => "ارسال ملف",
    'L_FM_FILEUPLOAD' => "رفع ملف",
    'L_FM_FREESPACE' => "المساحة الخالية على"
    ." الخادم",
    'L_FM_LAST_BU' => "النسخ الاحتياطي"
    ." الاخير",
    'L_FM_NOFILE' => "انت لم تقم بإختيار اي"
    ." ملف!",
    'L_FM_NOFILESFOUND' => "الملف غير موجود.",
    'L_FM_RECORDS' => "السجلات",
    'L_FM_RESTORE' => "استعادة",
    'L_FM_RESTORE_HEADER' => "استعادة من قاعدة"
    ." البيانات `<strong>%s</strong>`",
    'L_FM_SELECTTABLES' => "تحديد الجداول",
    'L_FM_STARTDUMP' => "بدء نسخ احتياطي جديد",
    'L_FM_TABLES' => "الجداول",
    'L_FM_TOTALSIZE' => "الحجم الكلي",
    'L_FM_UPLOADFAILED' => "عملية الارسال فشلت!",
    'L_FM_UPLOADFILEEXISTS' => "يوجد ملف بنفس الاسم"
    ." بالفعل !",
    'L_FM_UPLOADFILEREQUEST' => "من فضلك اختر ملف.",
    'L_FM_UPLOADFILEREQUEST' => "رجاء اختر الملف.",
    'L_FM_UPLOADMOVEERROR' => "الملف المحدد الذي تم"
    ." تحديده لا يمكن نقله"
    ." الى دليل الارسال.",
    'L_FM_UPLOADNOTALLOWED1' => "هذا النوع من الملفات"
    ." غير مدعوم.",
    'L_FM_UPLOADNOTALLOWED2' => "الصيغ المدعومه هي: *.gz"
    ." و *.sql-ملفات",
    'L_FOUND_DB' => "العثور على قاعدة"
    ." بيانات",
    'L_FROMFILE' => "ملف",
    'L_FROMTEXTBOX' => "صندوق النص",
    'L_FTP' => "FTP",
    'L_FTP_ADD_CONNECTION' => "Add connection",
    'L_FTP_CHOOSE_MODE' => "FTP وضع نقل الملفات",
    'L_FTP_CONFIRM_DELETE' => "Should this FTP-Connection really be"
    ." deleted?",
    'L_FTP_CONNECTION' => "FTP-Connection",
    'L_FTP_CONNECTION_CLOSED' => "FTP-Connection closed",
    'L_FTP_CONNECTION_DELETE' => "Delete connection",
    'L_FTP_CONNECTION_ERROR' => "The connection to server '%s' using"
    ." port %s couldn't be established",
    'L_FTP_CONNECTION_SUCCESS' => "The connection to server '%s' using"
    ." port %s was established successfully",
    'L_FTP_DIR' => "رفع الى الدليل",
    'L_FTP_FILE_TRANSFER_ERROR' => "Transfer of file '%s' was faulty",
    'L_FTP_FILE_TRANSFER_SUCCESS' => "The file '%s' was transferred"
    ." successfully",
    'L_FTP_LOGIN_ERROR' => "Login as user '%s' was denied",
    'L_FTP_LOGIN_SUCCESS' => "Login as user '%s' was successfull",
    'L_FTP_OK' => "FTPيفضل برتكول",
    'L_FTP_OK' => "تم الاتصال بنجاح.",
    'L_FTP_PASS' => "كلمة المرور",
    'L_FTP_PASSIVE' => "استخدام الوضع السلبي",
    'L_FTP_PASV_ERROR' => "Switching to passive mode was"
    ." unsuccessful",
    'L_FTP_PASV_SUCCESS' => "Switching to passive mode was"
    ." successfull",
    'L_FTP_PORT' => "المنفذ",
    'L_FTP_SEND_TO' => "من <strong>%s</strong><br /> الى"
    ." <strong>%s</strong>",
    'L_FTP_SERVER' => "الخادم",
    'L_FTP_SSL' => "اتصال SSL FTP الآمن",
    'L_FTP_START' => "Starting FTP transfer",
    'L_FTP_TIMEOUT' => "انتهاء الفترة"
    ." الزمنية",
    'L_FTP_TRANSFER' => "FTP نقل بواسطة برنامج",
    'L_FTP_USER' => "اسم المستخدم",
    'L_FTP_USESSL' => "استخدام اتصال SSL"
    ." الآمن",
    'L_GENERAL' => "عام",
    'L_GENERAL' => "عام",
    'L_GZIP' => "GZip ضغط",
    'L_GZIP_COMPRESSION' => "GZip ضغط",
    'L_HOME' => "الرئيسة",
    'L_HOUR' => "Hour",
    'L_HOURS' => "Hours",
    'L_HTACC_ACTIVATE_REWRITE_ENGINE' => "تفعيل اعادة الكتابة",
    'L_HTACC_ADD_HANDLER' => "اضف عملية",
    'L_HTACC_CONFIRM_DELETE' => "يجب كتابة البيانات"
    ." لحماية الدليل ?",
    'L_HTACC_CONTENT' => "محتويات الملف",
    'L_HTACC_CREATE' => "انشاء اسم مستخدم"
    ." وكلمة مرور لحماية"
    ." الدليل",
    'L_HTACC_CREATED' => "تم انشاء بيانات"
    ." حماية الدليل.",
    'L_HTACC_CREATE_ERROR' => "حدث خطأ أثناء إنشاء"
    ." دليل حماية !<br />يرجى"
    ." كتابة وتهيئة الملفات"
    ." التالية يدويا في"
    ." المحتوى",
    'L_HTACC_CRYPT' => "Crypt (Linux and Unix-Systems)",
    'L_HTACC_DENY_ALLOW' => "تعطيل / سماح",
    'L_HTACC_DIR_LISTING' => "اداراجها في الدليل",
    'L_HTACC_EDIT' => "تحرير .htaccess",
    'L_HTACC_ERROR_DOC' => "انشاء وثيقة للخطأ",
    'L_HTACC_EXAMPLES' => "امثلة وتفاصيل اكثر",
    'L_HTACC_EXISTS' => "تم الحصول على حماية"
    ." الدليل. اذا قمت"
    ." بإنشاء مستخدم جديد"
    ." البيانات الاقدم سوف"
    ." تكتب !",
    'L_HTACC_MAKE_EXECUTABLE' => "اجعلها قابله للتنفيذ",
    'L_HTACC_MD5' => "MD5 (Linux and Unix-Systems)",
    'L_HTACC_NO_ENCRYPTION' => "plain text, no cryption (Windows)",
    'L_HTACC_NO_USERNAME' => "انت يجب ان تدخل"
    ." المستخدم !",
    'L_HTACC_PROPOSED' => "موصي به بشدة"
    ." وللأهمية القصوي",
    'L_HTACC_REDIRECT' => "اعادة توجيه",
    'L_HTACC_SCRIPT_EXEC' => "تنفيذ البرنامج النصي",
    'L_HTACC_SHA1' => "SHA1 (all Systems)",
    'L_HTACC_WARNING' => "انتبه! فإن. htaccess يؤثر"
    ." بشكل مباشر على"
    ." المتصفح .<br />مع وجود"
    ." محتوى غير صحيح ، هذه"
    ." الصفحات قد لا تكون"
    ." متاحة.",
    'L_IMPORT' => "استيراد الوظائف",
    'L_IMPORT' => "استيراد",
    'L_IMPORTIEREN' => "استيراد",
    'L_IMPORTOPTIONS' => "خيارات الاستيراد",
    'L_IMPORTSOURCE' => "مصدر الاستيراد",
    'L_IMPORTTABLE' => "استيراد من جدول",
    'L_IMPORT_NOTABLE' => "لا يوجد جداول في "
    ." التحديد المستورد!",
    'L_IN' => "في",
    'L_INFO_ACTDB' => "قاعدة البيانات"
    ." الفعلية",
    'L_INFO_DATABASES' => "قاعدة البيانات"
    ." التالية (s) على الخادم"
    ." الخاص بك:",
    'L_INFO_DBEMPTY' => "قاعدة البيانات فارغة"
    ." !",
    'L_INFO_FSOCKOPEN_DISABLED' => "On this server the PHP command"
    ." fsockopen() is disabled by the"
    ." server's configuration. Because of"
    ." this the automatic download of"
    ." language packs is not possible. To"
    ." bypass this, you can download packages"
    ." manually, extract them locally and"
    ." upload them to the directory"
    ." \"language\" of your MySQLDumper"
    ." installation. Afterwards the new"
    ." language pack is available on this"
    ." site.",
    'L_INFO_LASTUPDATE' => "اخر تحديث",
    'L_INFO_LOCATION' => "الموقع الخاص بك هو",
    'L_INFO_NODB' => "قاعدة البيانات غير"
    ." موجوده.",
    'L_INFO_NOPROCESSES' => "لا توجد عمليات جارية",
    'L_INFO_NOSTATUS' => "لا توجد نتائج متوفره",
    'L_INFO_NOVARS' => "لا متغيرات متوفره",
    'L_INFO_OPTIMIZED' => "الافضل",
    'L_INFO_RECORDS' => "سجلات",
    'L_INFO_RECORDS' => "السجلات",
    'L_INFO_SIZE' => "الحجم",
    'L_INFO_SUM' => "المجموع",
    'L_INSTALL' => "التركيب",
    'L_INSTALL' => "تركيب",
    'L_INSTALLED' => "Installed",
    'L_INSTALL_HELP_PORT' => "(empty = Default Port)",
    'L_INSTALL_HELP_SOCKET' => "(empty = Default Socket)",
    'L_IS_WRITABLE' => "Is writable",
    'L_KILL_PROCESS' => "Stop process",
    'L_LANGUAGE' => "اللغة",
    'L_LASTBACKUP' => "الاسناد الاخير",
    'L_LOAD' => "استعادة الاعدادات"
    ." الافتراضية",
    'L_LOAD_DATABASE' => "اعد تحميل قواعد"
    ." البيانات",
    'L_LOAD_FILE' => "Load file",
    'L_LOG' => "السجل",
    'L_LOGFILENOTWRITABLE' => "لا يستطيع الكتابة"
    ." الى ملف السجل !",
    'L_LOGFILENOTWRITABLE' => "لا يمكن الكتابة الى"
    ." ملف السجل !",
    'L_LOGFILES' => "Logfiles",
    'L_LOG_DELETE' => "حذف مدخلات السجل",
    'L_MAILERROR' => "فشل ارسال البريد"
    ." الالكتروني!",
    'L_MAILPROGRAM' => "برنامج البريد",
    'L_MAXSIZE' => "الاقصى. الحجم",
    'L_MAX_BACKUP_FILES_EACH2' => "بالنسبة لكل قاعدة"
    ." بيانات",
    'L_MAX_EXECUTION_TIME' => "Max execution time",
    'L_MAX_UPLOAD_SIZE' => "الحد الاقصى لحجم"
    ." الملف",
    'L_MAX_UPLOAD_SIZE' => "الحجم الاقصى للملف",
    'L_MAX_UPLOAD_SIZE_INFO' => "إذا كان ملف النسخ"
    ." الاحتياطي هو اكبر من"
    ." الحد المسموح به"
    ." أعلاه ، يجب عليك"
    ." ارساله عبر برامج "
    ." بروتوكول نقل الملفات"
    ." اف تي بي إلى دليل"
    ." \"work/backup\". 
بعد ذلك"
    ." يمكنك تحديد ملف"
    ." الاستعادة ومشاهدة"
    ." بداية التقدم.",
    'L_MEMORY' => "Memory",
    'L_MESSAGE' => "Message",
    'L_MESSAGE_TYPE' => "Message type",
    'L_MINUTE' => "Minute",
    'L_MINUTES' => "Minutes",
    'L_MODE_EASY' => "Easy",
    'L_MODE_EXPERT' => "Expert",
    'L_MSD_INFO' => "MySQLDumper معلومات",
    'L_MSD_MODE' => "MySQLDumper-Mode",
    'L_MSD_VERSION' => "MySQLDumper-Version",
    'L_MULTIDUMP' => "Multidump",
    'L_MULTIDUMP_FINISHED' => "النسخ الاحتياطي لـ"
    ." <b>%d</b> لقاعدة"
    ." البيانات انتهى",
    'L_MULTIPART_ACTUAL_PART' => "Actual Part",
    'L_MULTIPART_SIZE' => "الحجم الاقصى للملف",
    'L_MULTI_PART' => "تعدد النسخ الاحتياطي",
    'L_MYSQLVARS' => "MySQL متغيرات",
    'L_MYSQL_CLIENT_VERSION' => "MySQL-Client",
    'L_MYSQL_CONNECTION_ENCODING' => "معيار الترميز"
    ." القياسي في MySQL-Server",
    'L_MYSQL_DATA' => "MySQL-بيانات",
    'L_MYSQL_VERSION' => "MySQL-Version",
    'L_NAME' => "Name",
    'L_NAME' => "الاسم",
    'L_NEW' => "جديد",
    'L_NEWTABLE' => "جدول جديد",
    'L_NEXT_AUTO_INCREMENT' => "Next automatic index",
    'L_NEXT_AUTO_INCREMENT_SHORT' => "n. auto index",
    'L_NO' => "لا",
    'L_NOFTPPOSSIBLE' => "لا يجد لديك وظائف"
    ." بروتوكول نقل الملفات"
    ." FTP  !",
    'L_NOFTPPOSSIBLE' => "لم يكن لديك وظائف"
    ." بروتوكول نقل الملفات"
    ." !",
    'L_NOFTPPOSSIBLE' => "FTP لا تتوفر لديك"
    ." وظائف نقل الملفات"
    ." بواسطة برتوكول  !",
    'L_NOGZPOSSIBLE' => "لا يوجد لديك وظائف"
    ." ضغط الملفات  !",
    'L_NOGZPOSSIBLE' => "Zlib لم يتم تركيبها  ،"
    ." لا يمكنك استخدام - GZip"
    ." وظائف!",
    'L_NONE' => "لا شيئ",
    'L_NOREVERSE' => "بيانات الدخول الاقدم",
    'L_NOTAVAIL' => "<em>غير متوفر</em>",
    'L_NOTICE' => "Notice",
    'L_NOTICES' => "ملاحظات",
    'L_NOT_ACTIVATED' => "لم يتم التفعيل",
    'L_NOT_SUPPORTED' => "النسخ الاحتياطي هذا"
    ." لا يدعم هذه الوظيفة.",
    'L_NO_DB_FOUND' => "لم استطع العثور على"
    ." قاعدة البيانات"
    ." تلقائيا!
مع مزيد من"
    ." التفاصيل أدخل اسم"
    ." قاعدة البيانات"
    ." يدويا.",
    'L_NO_DB_FOUND_INFO' => "تم الاتصال بقاعدة"
    ." البيانات بنجاح.<br"
    ." />
تم قبول بيانات"
    ." المستخدم الخصة بك لـ"
    ." MySQL-Server.<br />
لم يستطيع"
    ." العثور على اية قاعدة"
    ." بيانات.<br />
البحث"
    ." التلقائي لا يمكن من"
    ." قبل الخادم.<br />
انت"
    ." يجب أن تدخل اسم قاعدة"
    ." البيانات يدويا بعد"
    ." الانتهاء من"
    ." التركيب.
اضغط هنا"
    ." \"configuration\" \"Connection"
    ." Parameter - display\" وتدخل"
    ." اسم قاعدة البيانات"
    ." هناك.",
    'L_NO_DB_SELECTED' => "No database selected.",
    'L_NO_ENTRIES' => "الجدول \"<b>%s</b>\" فارغ"
    ." او انه لايمكن الوصل"
    ." اليه.",
    'L_NO_MSD_BACKUPFILE' => "النسخ الاحتياطي"
    ." لمخطوطات اخرى",
    'L_NO_NAME_GIVEN' => "You didn't enter a name.",
    'L_NR_TABLES_OPTIMIZED' => "%s تم اصلاح وتحسين"
    ." الجداول.",
    'L_NUMBER_OF_FILES_FORM' => "احذف الملفات بعد",
    'L_OF' => "من",
    'L_OF' => "مغلق",
    'L_OK' => "موافق",
    'L_OPTIMIZE' => "افضل الجداول",
    'L_OPTIMIZE_TABLES' => "تحسين الجداول قبل"
    ." عملية النسخ"
    ." الاحتياطي",
    'L_OPTIMIZE_TABLE_ERR' => "Error optimizing table `%s`.",
    'L_OPTIMIZE_TABLE_SUCC' => "Optimized table `%s` successfully.",
    'L_OS' => "Operating system",
    'L_PAGE_REFRESHS' => "Pageviews",
    'L_PASS' => "كلمة المرور",
    'L_PASSWORD' => "Password",
    'L_PASSWORDS_UNEQUAL' => "كلمات السر ليست"
    ." متطابقة او فارغة !",
    'L_PASSWORD_REPEAT' => "Password (repeat)",
    'L_PASSWORD_STRENGTH' => "Password strength",
    'L_PERLOUTPUT1' => "الدخول في  crondump.pl"
    ." مسموح_عن"
    ." طريق_التهيئة في"
    ." الدليل",
    'L_PERLOUTPUT2' => "عنوان المتصفح او"
    ." المشغل الخارجي"
    ." لوظائف Cron",
    'L_PERLOUTPUT3' => "سطر الاوامر في الشل "
    ." او علامة التبويب Cron",
    'L_PERL_COMPLETELOG' => "Perl-Complete-Log",
    'L_PERL_LOG' => "Perl-Log",
    'L_PHPBUG' => "مشكلة في zlib ! عملية"
    ." الضغط غير ممكنه!",
    'L_PHPMAIL' => "PHP-Function mail()",
    'L_PHP_EXTENSIONS' => "PHP-Extensions",
    'L_PHP_VERSION' => "PHP-Version",
    'L_POP3_PORT' => "POP3-Port",
    'L_POP3_SERVER' => "POP3-Server",
    'L_PORT' => "منفذ",
    'L_PORT' => "Port",
    'L_POSITION_BC' => "bottom center",
    'L_POSITION_BL' => "bottom left",
    'L_POSITION_BR' => "bottom right",
    'L_POSITION_MC' => "center center",
    'L_POSITION_ML' => "middle left",
    'L_POSITION_MR' => "middle right",
    'L_POSITION_NOTIFICATIONS' => "Position of notification window",
    'L_POSITION_TC' => "top center",
    'L_POSITION_TL' => "top left",
    'L_POSITION_TR' => "top right",
    'L_PREFIX' => "قبل تحديد الجداول",
    'L_PRIMARYKEYS_CHANGED' => "Primary keys changed",
    'L_PRIMARYKEYS_CHANGINGERROR' => "Error changing primary keys",
    'L_PRIMARYKEYS_SAVE' => "Save primary keys",
    'L_PRIMARYKEY_CONFIRMDELETE' => "Really delete primary key?",
    'L_PRIMARYKEY_DELETED' => "Primary key deleted",
    'L_PRIMARYKEY_FIELD' => "Primary key field",
    'L_PRIMARYKEY_NOTFOUND' => "Primary key not found",
    'L_PROCESSKILL1' => "المخطوطة تحاول افشال"
    ." العملية",
    'L_PROCESSKILL2' => "فشلت.",
    'L_PROCESSKILL3' => "المخطوطة تحاول منذ",
    'L_PROCESSKILL4' => "دقائق.لافشال العملية",
    'L_PROCESS_ID' => "Process ID",
    'L_PROGRESS_FILE' => "Progress file",
    'L_PROGRESS_OVER_ALL' => "الوصف الشامل ا",
    'L_PROGRESS_OVER_ALL' => "التقدم الشامل",
    'L_PROGRESS_TABLE' => "وصف متقدم للجدول",
    'L_PROVIDER' => "مقدمه",
    'L_PROZESSE' => "العمليات",
    'L_RECHTE' => "الرخصة",
    'L_RECORDS' => "سجلات",
    'L_RECORDS_INSERTED' => "<b>%s</b> ادراج سجلات.",
    'L_RECORDS_PER_PAGECALL' => "Records per pagecall",
    'L_REFRESHTIME' => "Refresh time",
    'L_REFRESHTIME_PROCESSLIST' => "Refreshing time of the process list",
    'L_RELOAD' => "اعد التحميل",
    'L_REMOVE' => "Remove",
    'L_REPAIR' => "Repair",
    'L_RESET' => "تراجع",
    'L_RESET_SEARCHWORDS' => "اعد كتابة كلمات"
    ." البحث",
    'L_RESTORE' => "استعادة قاعدة"
    ." البيانات",
    'L_RESTORE_COMPLETE' => "<b>%s</b> انشاء الجداول.",
    'L_RESTORE_DB' => "قاعدة البيانات"
    ." '<b>%s</b>' على '<b>%s</b>'.",
    'L_RESTORE_DB_COMPLETE_IN' => "Restoring of database '%s' finished in"
    ." %s.",
    'L_RESTORE_OF_TABLES' => "اختر الجداول التي"
    ." تريد استعادتها",
    'L_RESTORE_TABLE' => "Restoring of table '%s'",
    'L_RESTORE_TABLES_COMPLETED' => "البدء لآن <b>%d</b> of"
    ." <b>%d</b> تم انشاء"
    ." الجداول.",
    'L_RESTORE_TABLES_COMPLETED0' => "البدء لآن <b>%d</b> تم"
    ." انشاء الجداول.",
    'L_REVERSE' => "بيانات الدخول"
    ." الاخيره",
    'L_SAFEMODEDESC' => "السبب PHP يعمل في"
    ." الوضع الآمن فأنت"
    ." تحتاج لإنشاء الادلة"
    ." التالية يدويا"
    ." بأستخدام برامج نقل"
    ." الملفات  FTP-Programms:",
    'L_SAVE' => "حفظ",
    'L_SAVEANDCONTINUE' => "حفظ ومتابعة التركيب",
    'L_SAVE_ERROR' => "خطأ - غير قادر على حفظ"
    ." الاعدادات!",
    'L_SAVE_SUCCESS' => "حفظ الاعدادات.",
    'L_SAVING_DATA_TO_FILE' => "Saving data of database '%s' to file"
    ." '%s'",
    'L_SAVING_DATA_TO_MULTIPART_FILE' => "Maximum filesize reached: proceeding"
    ." with file '%s'",
    'L_SAVING_DB_FORM' => "قاعدة البيانات",
    'L_SAVING_TABLE' => "حفظ الجدول",
    'L_SEARCH_ACCESS_KEYS' => "استعرض واستخدم"
    ." المفاتيح التالية :"
    ." forwardللامام =ALT+V,"
    ." backwardsالتراجع"
    ." للخلف=ALT+C",
    'L_SEARCH_IN_TABLE' => "بحث في الجدول",
    'L_SEARCH_NO_RESULTS' => "عملية البحث \"<b>%s</b>\""
    ." في الجدول \"<b>%s</b>\" لم"
    ." تجلب اي نتائج!",
    'L_SEARCH_OPTIONS' => "خيارات البحث",
    'L_SEARCH_OPTIONS_AND' => "العمود يجب ان يحتوي"
    ." على جميع كلمات البحث "
    ." (و-البحث)",
    'L_SEARCH_OPTIONS_CONCAT' => "الصف يجب ان يحتوي على"
    ." كل كلمات البحث ولكن"
    ." يمكن ان يكونوا في اي"
    ." عمود(يمكن ان يستغرق"
    ." بعض الوقت)",
    'L_SEARCH_OPTIONS_OR' => "يجب ان يحتوي العمود"
    ." على احدى كلمات البحث"
    ." (او-بحث)",
    'L_SEARCH_RESULTS' => "عملية البحث \"<b>%s</b>\""
    ." في الجدول \"<b>%s</b>\""
    ." جلبت النتائج التالية",
    'L_SECOND' => "Second",
    'L_SECONDS' => "Seconds",
    'L_SELECT' => "Select",
    'L_SELECTALL' => "تحديد الكل",
    'L_SELECTED_FILE' => "اختر ملف",
    'L_SELECT_FILE' => "Select file",
    'L_SELECT_LANGUAGE' => "Select language",
    'L_SENDMAIL' => "Sendmail",
    'L_SENDRESULTASFILE' => "ارسال نتيجة الملف",
    'L_SEND_MAIL_FORM' => "ارسال تقرير بالبريد"
    ." الالكتروني",
    'L_SERVER' => "الخادم",
    'L_SERVERCAPTION' => "عرض الخادم",
    'L_SETPRIMARYKEYSFOR' => "Set new primary keys for table",
    'L_SHOWING_ENTRY_X_TO_Y_OF_Z' => "Showing entry %s to %s of %s",
    'L_SHOWRESULT' => "عرض النتائج",
    'L_SMTP' => "SMTP",
    'L_SMTP_HOST' => "SMTP-Host",
    'L_SMTP_PORT' => "SMTP-Port",
    'L_SOCKET' => "توصيل",
    'L_SPEED' => "Speed",
    'L_SQLBOX' => "SQL-Box",
    'L_SQLBOXHEIGHT' => "ارتفاع الصندوق  SQL-Box",
    'L_SQLLIB_ACTIVATEBOARD' => "تمكين قائمة",
    'L_SQLLIB_BOARDS' => "القوائم",
    'L_SQLLIB_DEACTIVATEBOARD' => "تعطيل قائمة",
    'L_SQLLIB_GENERALFUNCTIONS' => "الوظائف العامة",
    'L_SQLLIB_RESETAUTO' => "اعادة"
    ." تلقائية-للزيادة",
    'L_SQLLIMIT' => "احصاء السجلات لكل"
    ." صفحة",
    'L_SQL_ACTIONS' => "الاجراءات",
    'L_SQL_AFTER' => "after",
    'L_SQL_ALLOWDUPS' => "Duplicates allowed",
    'L_SQL_ATPOSITION' => "insert at position",
    'L_SQL_ATTRIBUTES' => "الصفات",
    'L_SQL_BACKDBOVERVIEW' => "عودة الى نظرة عامة",
    'L_SQL_BEFEHLNEU' => "امر جديد",
    'L_SQL_BEFEHLSAVED1' => "SQL امر",
    'L_SQL_BEFEHLSAVED2' => "تمت الاضافة",
    'L_SQL_BEFEHLSAVED3' => "تم الحفظ",
    'L_SQL_BEFEHLSAVED4' => "تم النقل للاعلى",
    'L_SQL_BEFEHLSAVED5' => "تم الحذف",
    'L_SQL_BROWSER' => "SQL-استعرض",
    'L_SQL_CARDINALITY' => "Cardinality",
    'L_SQL_CHANGED' => "تم التعديل.",
    'L_SQL_CHANGEFIELD' => "change field",
    'L_SQL_CHOOSEACTION' => "اختر اجراء",
    'L_SQL_COLLATENOTMATCH' => "البيانات والترتيب لا"
    ." تتطابق مع بعضها!",
    'L_SQL_COLUMNS' => "الاعمدة",
    'L_SQL_COMMANDS' => "SQL اوامر",
    'L_SQL_COMMANDS_IN' => "في الخطوط",
    'L_SQL_COMMANDS_IN2' => "sec. parsed.",
    'L_SQL_COPYDATADB' => "نسخة كاملة لقاعدة"
    ." البيانات الى",
    'L_SQL_COPYSDB' => "نسخة من اعمدة قاعدة"
    ." البيانات",
    'L_SQL_COPYTABLE' => "نسخ جدول",
    'L_SQL_CREATED' => "تمت الاضافة.",
    'L_SQL_CREATEINDEX' => "create new index",
    'L_SQL_CREATETABLE' => "انشاء جدول",
    'L_SQL_DATAVIEW' => "عرض البيانات",
    'L_SQL_DBCOPY' => "The Content of Database `%s` was"
    ." copied in Database `%s`.",
    'L_SQL_DBSCOPY' => "The Structure of Database `%s` was"
    ." copied in Database `%s`.",
    'L_SQL_DELETED' => "تم الحذف",
    'L_SQL_DELETEDB' => "حذف قاعدة البيانات",
    'L_SQL_DESTTABLE_EXISTS' => "اتجاه الجدول موجود !",
    'L_SQL_EDIT' => "تعديل",
    'L_SQL_EDITFIELD' => "Edit field",
    'L_SQL_EDIT_TABLESTRUCTURE' => "تحرير اعمدة الجدول",
    'L_SQL_EMPTYDB' => "افراغ قاعدة البيانات",
    'L_SQL_ERROR1' => "خطأ في الاستعلام:",
    'L_SQL_ERROR2' => "MySQL وصف الحاله:",
    'L_SQL_EXEC' => "SQLتنفيذ بيانات",
    'L_SQL_EXPORT' => "تصدير من قاعدة"
    ." البيانات `%s`",
    'L_SQL_FIELDDELETE1' => "الحقل",
    'L_SQL_FIELDNAMENOTVALID' => "خطأ: اسم الحقل غير"
    ." صحيح",
    'L_SQL_FIRST' => "first",
    'L_SQL_IMEXPORT' => "تصدير-استيراد",
    'L_SQL_IMPORT' => "`%s`استيراد من قاعدة"
    ." البيانات",
    'L_SQL_INDEXES' => "Indices",
    'L_SQL_INSERTFIELD' => "insert field",
    'L_SQL_INSERTNEWFIELD' => "insert new field",
    'L_SQL_LIBRARY' => "SQL معلومات",
    'L_SQL_NAMEDEST_MISSING' => "اسم الوجهة مفقود !",
    'L_SQL_NEWFIELD' => "New field",
    'L_SQL_NODATA' => "لا سجلات",
    'L_SQL_NODEST_COPY' => "لايمكن النسخ بدون"
    ." تحديد الاتجاه !",
    'L_SQL_NOFIELDDELETE' => "الحذف غير ممكن لان"
    ." الجداول يجب ان تحتوي"
    ." على حقل واحد على"
    ." الاقل.",
    'L_SQL_NOTABLESINDB' => "لا توجد اي جداول في"
    ." قاعدة البيانات التي"
    ." حددتها",
    'L_SQL_NOTABLESSELECTED' => "لم يتم اختيار اي"
    ." جداول !",
    'L_SQL_OPENFILE' => "فتح SQL-ملف",
    'L_SQL_OPENFILE_BUTTON' => "ارسال",
    'L_SQL_OUT1' => "تنفيذ",
    'L_SQL_OUT2' => "الاوامر",
    'L_SQL_OUT3' => "It had",
    'L_SQL_OUT4' => "التعليقات",
    'L_SQL_OUT5' => "اذا كان الناتج يحتوي"
    ." على أكثر من 5000 من"
    ." الخطوط فلن يتم عرضها.",
    'L_SQL_OUTPUT' => "SQL ناتج",
    'L_SQL_QUERYENTRY' => "الاستعلام يتضمن",
    'L_SQL_RECORDDELETED' => "تم حذف السجل",
    'L_SQL_RECORDEDIT' => "تحرير السجل",
    'L_SQL_RECORDINSERTED' => "تمت اصافة السجل",
    'L_SQL_RECORDNEW' => "سجل جديد",
    'L_SQL_RECORDUPDATED' => "تم تحديث السجل",
    'L_SQL_RENAMEDB' => "تغيير اسم قاعدة"
    ." البيانات",
    'L_SQL_RENAMEDTO' => "was renamed to",
    'L_SQL_SCOPY' => "`%s` اعمدة الجدول `%s`تم"
    ." نسخها الى الجدول.",
    'L_SQL_SEARCH' => "بحث",
    'L_SQL_SEARCHWORDS' => "كلمة البحث(s)",
    'L_SQL_SELECTTABLE' => "select table",
    'L_SQL_SHOWDATATABLE' => "Show Data of Table",
    'L_SQL_STRUCTUREDATA' => "الاعمدة والبيانات",
    'L_SQL_STRUCTUREONLY' => "فقط الاعمدة",
    'L_SQL_TABLEEMPTIED' => "الجدول `%s` تم حذفه.",
    'L_SQL_TABLEEMPTIEDKEYS' => "الجدول `%s` تم حذفه"
    ." وتمت اعادة الفهارس.",
    'L_SQL_TABLEINDEXES' => "Indexes of table",
    'L_SQL_TABLENEW' => "تحرير الجداول",
    'L_SQL_TABLENOINDEXES' => "No Indexes in Table",
    'L_SQL_TABLENONAME' => "الجدول يحتاج الى اسم!",
    'L_SQL_TABLESOFDB' => "الجداول في قاعدة"
    ." البيانات",
    'L_SQL_TABLEVIEW' => "عرض الجدول",
    'L_SQL_TBLNAMEEMPTY' => "اسم الجدول لا يمكن ان"
    ." يكون فارغا!",
    'L_SQL_TBLPROPSOF' => "Table properties of",
    'L_SQL_TCOPY' => "`%s` بيانات الجدول"
    ." `%s`تم نسخها الى"
    ." الجدول.",
    'L_SQL_UPLOADEDFILE' => "تنزيل ملف:",
    'L_SQL_VIEW_COMPACT' => "View: compact",
    'L_SQL_VIEW_STANDARD' => "View: standard",
    'L_SQL_VONINS' => "الجميع",
    'L_SQL_WARNING' => "تنفيذ اوامر SQL يمكن"
    ." ان يتم معالجة"
    ." البيانات والتلاعب"
    ." بها . انتبه لذلك !"
    ." المبرمجون لا يتحملون"
    ." اي مسؤلية جراء فقدان"
    ." او تلف اي ملفات .",
    'L_SQL_WASCREATED' => "تم الانشاء",
    'L_SQL_WASEMPTIED' => "was emptied",
    'L_STARTDUMP' => "بدء النسخ الاحتياطي",
    'L_START_RESTORE_DB_FILE' => "Starting restore of database '%s' from"
    ." file '%s'.",
    'L_START_SQL_SEARCH' => "بداية البحث",
    'L_STATUS' => "الحالة",
    'L_STATUS' => "الحالة",
    'L_STEP' => "خطوة",
    'L_SUCCESS_CONFIGFILE_CREATED' => "ملف التهيئة \"%s\" تم"
    ." انشاؤه بنجاح.",
    'L_SUCCESS_DELETING_CONFIGFILE' => "ملف التهيئة \"%s\" تم"
    ." حذفه بنجاح.",
    'L_TABLE' => "جدول",
    'L_TABLES' => "جداول",
    'L_TABLESELECTION' => "تحديد جدول",
    'L_TABLE_CREATE_SUCC' => "The table '%s' has been created"
    ." successfully.",
    'L_TABLE_TYPE' => "Type",
    'L_TESTCONNECTION' => "اختبار الاتصال",
    'L_THEME' => "Theme",
    'L_TIME' => "Time",
    'L_TIMESTAMP' => "Timestamp",
    'L_TITLE_INDEX' => "الرئيسة",
    'L_TITLE_KEY_FULLTEXT' => "مفتاح النص الكامل",
    'L_TITLE_KEY_PRIMARY' => "المفتاح الاساسي",
    'L_TITLE_KEY_UNIQUE' => "مفتاح فريد",
    'L_TITLE_MYSQL_HELP' => "MySQL وثائق",
    'L_TITLE_NOKEY' => "لا مفتاح",
    'L_TITLE_SEARCH' => "بحث",
    'L_TITLE_SHOW_DATA' => "Show data",
    'L_TITLE_UPLOAD' => "ارسال ملف SQL",
    'L_TO' => "الى",
    'L_TOOLS' => "الادوات",
    'L_TOOLS' => "اداوات",
    'L_TOOLS_TOOLBOX' => "اختيار قاعدة"
    ." البيانات /  مهام /"
    ." استيراد - تصدير قاعدة"
    ." بيانات",
    'L_UNIT_KB' => "KiloByte",
    'L_UNIT_MB' => "MegaByte",
    'L_UNIT_PIXEL' => "Pixel",
    'L_UNKNOWN' => "غير معروف",
    'L_UNKNOWN_SQLCOMMAND' => "مجهول SQL-امر",
    'L_UPDATE' => "Update",
    'L_UPTO' => "رفع الى",
    'L_USERNAME' => "Username",
    'L_USE_SSL' => "Use SSL",
    'L_VALUE' => "القيمة",
    'L_VERSIONSINFORMATIONEN' => "معلومات النسخة",
    'L_VIEW' => "عرض",
    'L_VISIT_HOMEPAGE' => "Visit Homepage",
    'L_VOM' => "في",
    'L_WITH' => "مع",
    'L_WITHATTACH' => "ارفاق تعليق",
    'L_WITHOUTATTACH' => "بدون تعليق",
    'L_WITHPRAEFIX' => "بالبادئة",
    'L_WRONGCONNECTIONPARS' => "مشكلة او لا يوجد ربط !",
    'L_WRONG_CONNECTIONPARS' => "معايير الاتصال خاطئه"
    ." !",
    'L_WRONG_RIGHTS' => "الملف او الدليل '%s'"
    ." لايمكن الكتابة فيه.<br"
    ." />
الحقوق (chmod)ليست"
    ." المجموعة  او ان"
    ." المكلية غير صحيحة.<br"
    ." />
استخدم برامج"
    ." بروتكول  FTP-لنقل"
    ." ملفاتك.<br />
الملف او"
    ." الدليل من الضروري ان"
    ." يستعدا %s.<br />",
    'L_YES' => "نعم",
));
