<?php

// Module Info
// The name of this module
define("_MI_XTUBE_NAME","MyTube");

// A brief description of this module
define("_MI_XTUBE_DESC","Module de partage, syndication et publication de vidéos en ligne.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_XTUBE_BNAME1","Vidéos récentes (t)");
define("_MI_XTUBE_BNAME2","Vidéos récentes");
define("_MI_XTUBE_BNAME3","Meilleures Vidéos (t)");
define("_MI_XTUBE_BNAME4","Meilleures Vidéos");
define("_MI_XTUBE_BNAME5","Vidéos récentes (h)");
define("_MI_XTUBE_BNAME6","Vidéos aléatoires");
define("_MI_XTUBE_BNAME7","Vidéos aléatoires (h)");

// Sub menu titles
define("_MI_XTUBE_SMNAME1","Soumettre");
define("_MI_XTUBE_SMNAME2","Populaire");
define("_MI_XTUBE_SMNAME3","Mieux notées");
define("_MI_XTUBE_SMNAME4","Vidéos récentes");

// Names of admin menu items
define("_MI_XTUBE_BINDEX","Index");
define("_MI_XTUBE_INDEXPAGE","Gestion de la Page d'Index");
define("_MI_XTUBE_MCATEGORY","Gestion des catégories");
define("_MI_XTUBE_MVIDEOS","Gestion des vidéos");
define("_MI_XTUBE_MUPLOADS","Upload d'images");
define("_MI_XTUBE_PERMISSIONS","Permissions");
define("_MI_XTUBE_BLOCKADMIN","Paramètres des blocs");
define("_MI_XTUBE_MVOTEDATA","Votes");

// Title of config items
define('_MI_XTUBE_POPULAR', 'Hits pour être populaire');
define('_MI_XTUBE_POPULARDSC', 'Nombre de hits pour que la vidéo soit considérée comme populaire.');

define("_MI_XTUBE_ICONDISPLAY","Affichage populaire et nouveau:");
define("_MI_XTUBE_DISPLAYICONDSC", "Sélectionner la façon dont vont être affichées les nouvelles vidéos et celles populaires  ");
define("_MI_XTUBE_DISPLAYICON1", "Afficher sous forme d'icône");
define("_MI_XTUBE_DISPLAYICON2", "Afficher sous forme de texte");
define("_MI_XTUBE_DISPLAYICON3", "Aucun affichage");

define("_MI_XTUBE_DAYSNEW","Délai en jour pour les nouvelles vidéos:");
define("_MI_XTUBE_DAYSNEWDSC","Nombre de jours pour qu'une vidéo soit considérée comme nouvelle après sa publication.");

define("_MI_XTUBE_DAYSUPDATED","Délai en jour pour les vidéos mises à jour:");
define("_MI_XTUBE_DAYSUPDATEDDSC","Nombre de jours pendant lesquels une vidéo est considérée comme mise à jour.");

define('_MI_XTUBE_PERPAGE', 'Nombre de vidéos à afficher:');
define('_MI_XTUBE_PERPAGEDSC', 'Nombre de vidéos à afficher dans chaque catégorie.');

define("_MI_XTUBE_ADMINPAGE", "Nombre de vidéos à afficher dans l'admin:");
define("_MI_XTUBE_AMDMINPAGEDSC", "Nombre de vidéos à afficher dans la page d'administration du Module:");

define("_MI_XTUBE_ARTICLESSORT", "Ordre par défaut des vidéos:");
define("_MI_XTUBE_ARTICLESSORTDSC", "Sélectionner l'ordre par défaut pour la liste des vidéos.");

define("_MI_XTUBE_SORTCATS", "Tri des catégories:");
define("_MI_XTUBE_SORTCATSDSC", "Sélectionner la manière par laquelle les catégories et les sous-catégories seront triées.");

define('_MI_XTUBE_SUBCATS', 'Sous-catégories:');
define('_MI_XTUBE_SUBCATSDSC', 'Sélectionner "Oui" pour afficher les Sous-catégories et "Non" pour les cacher.');

define('_MI_XTUBE_EDITOR', "Editeur utilisé (administrateur):");
define('_MI_XTUBE_EDITORCHOICE', "Sélectionner l'éditeur à utiliser du côté administration. Si vous avez une installation standard (ex. vous utilisez seulement la classe d'éditeur du core de Xoops, fournie dans le pack standard du core de xoops), alors vous ne pourrez seulement que sélectionner DHTML ou Compact");
define('_MI_XTUBE_EDITORUSER', "Editeur utilisé (utilisateur):");
define('_MI_XTUBE_EDITORCHOICEUSER', "Sélectionner l'éditeur à utiliser du côté utilisateur. Si vous avez une installation standard (ex. vous utilisez seulement la classe d'éditeur du core de Xoops, fournie dans le pack standard du core de xoops), alors vous ne pourrez seulement que sélectionner DHTML ou Compact");
define("_MI_XTUBE_FORM_DHTML","DHTML");
define("_MI_XTUBE_FORM_COMPACT","Compact");
define("_MI_XTUBE_FORM_SPAW","Spaw Editor");
define("_MI_XTUBE_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_XTUBE_FORM_FCK","FCK Editor");
define("_MI_XTUBE_FORM_KOIVI","Koivi Editor");
define("_MI_XTUBE_FORM_TINYEDITOR","TinyEditor");

define('_MI_XTUBE_USESHOTS', 'Afficher des copies d\'écran ?');
define('_MI_XTUBE_USESHOTSDSC', 'Choisissez oui pour afficher des copies d\'écran pour chaque vidéo');

define('_MI_XTUBE_USETHUMBS', 'Utiliser des Miniatures:');
define("_MI_XTUBE_USETHUMBSDSC", "Type d'images supportées : JPG, GIF, PNG.<div style='padding-top: 8px;'>MyTube utilise des miniatures pour les images. Choisissez 'Non' si votre serveur ne supporte pas cette option.</div>");

define("_MI_XTUBE_IMGUPDATE", "Mise à jour des Miniatures ?");
define("_MI_XTUBE_IMGUPDATEDSC", "Si vous avez sélectionné l'option, la mise à jour des miniatures se fera à chaque rechargement de la page. Sinon, la première miniature de l'image sera utilisée indéfiniment<br /><br />");

define('_MI_XTUBE_SHOTWIDTH', 'Largeur de la capture d\'écran');
define('_MI_XTUBE_SHOTWIDTHDSC', 'Permet de choisir une largeur pour les copies d\'écran');

define('_MI_XTUBE_SHOTHEIGHT', 'Hauteur de la capture d\'écran');
define('_MI_XTUBE_SHOTHEIGHTDSC', 'Permet de choisir une hauteur pour les copies d\'écran');

define('_MI_XTUBE_MAINIMGDIR','Répertoire principal d\'images');

define('_MI_XTUBE_CATEGORYIMG','Répertoire d\'upload des catégories d\'images');

define('_MI_XTUBE_DATEFORMAT', 'Timestamp:');
define('_MI_XTUBE_DATEFORMATDSC', 'Timestamp par défaut pour MyTube');

define("_MI_XTUBE_TOTALCHARS", "Nombre total des caractères pour les descriptions ?");
define("_MI_XTUBE_TOTALCHARSDSC", "Paramétrez le nombre total des caractères pour les descriptions dans la Page d'Index.");

define("_MI_XTUBE_OTHERVIDEOS", "Afficher d'autres vidéos proposées par le Soumetteur ?");
define("_MI_XTUBE_OTHERVIDEOSDSC", "Sélectionner 'Oui' si d'autres vidéos du Soumetteur doivent êtres affichées.");

define("_MI_XTUBE_SHOWSBOOKMARKS", "Afficher les signets Sociaux ?");
define("_MI_XTUBE_SHOWSBOOKMARKSDSC", "Sélectionner 'Oui' si vous voulez afficher les icônes des signets Sociaux sous les vidéos.");

define("_MI_XTUBE_USEMETADESCR", "Générateur des meta descriptions :");
define("_MI_XTUBE_USEMETADSC", "En activant cette option, les meta descriptions seront basées sur les descriptions des vidéos.");

define("_MI_XTUBE_USERTAGDESCR", "Les utilisateurs peuvent soumettre des Tags :");
define("_MI_XTUBE_USERTAGDSC", "Sélectionner 'Oui' si vous voulez autoriser les utilisateurs à soumettre des Tags.");

define('_MI_XTUBE_SHOWDISCLAIMER', 'Afficher le disclaimer avant la proposition d\'un utilisateur ?');
define('_MI_XTUBE_SHOWDISCLAIMERDSC', 'Avant qu\'un utilisateur propose une vidéo');

define('_MI_XTUBE_DISCLAIMER', 'Texte du disclaimer:');

define('_MI_XTUBE_SHOWVIDEODISCL', 'Afficher le disclaimer avant de voir la vidéo ?');
define('_MI_XTUBE_SHOWVIDEODISCLDSC', 'Voir les règlements avant de visualiser la vidéo');

define('_MI_XTUBE_VIDEODISCLAIMER', 'Entrer le texte du disclaimer de la vidéo:');

define('_MI_XTUBE_COPYRIGHT', 'Information Copyright :');
define('_MI_XTUBE_COPYRIGHTDSC', 'Afficher le copyright dans les pages des vidéos.');

define('_MI_XTUBE_CHECKHOST', 'Désactiver les liens directes des vidéos depuis d\'autres sites web ? (leeching)');
define('_MI_XTUBE_REFERERS', 'Liste des sites autorisés <br />Séparés par "#"');
define("_MI_XTUBE_ANONPOST","Proposition des utilisateurs anonymes:");
define("_MI_XTUBE_ANONPOSTDSC","Permettre aux utilisateurs anonymes de proposer et/ou uploader sur votre site Web ?");
define('_MI_XTUBE_AUTOAPPROVE','Approbation automatique des vidéos');
define('_MI_XTUBE_AUTOAPPROVEDSC','Choisissez la méthode d\'approbation des vidéos sans modération.');

define('_MI_XTUBE_MAXFILESIZE','Taille d\'upload (KB)');
define('_MI_XTUBE_MAXFILESIZEDSC','Taille maximale autorisée pour les vidéos uploadées.');
define('_MI_XTUBE_IMGWIDTH','Largeur maximum des images uploadées');
define('_MI_XTUBE_IMGWIDTHDSC','Largeur maximum des images uploadées pour les vidéos');
define('_MI_XTUBE_IMGHEIGHT','Hauteur maximale des images uploadées');
define('_MI_XTUBE_IMGHEIGHTDSC','Hauteur maximale des images uploadées pour les vidéos');

define('_MI_XTUBE_UPLOADDIR','Répertoire d\'upload (Sans slash à la fin)');
define('_MI_XTUBE_ALLOWSUBMISS','Soumission des utilisateurs :');
define('_MI_XTUBE_ALLOWSUBMISSDSC','Autoriser les utilisateurs à soumettre des vidéos');
define('_MI_XTUBE_ALLOWUPLOADS','Upload des utilisateurs:');
define('_MI_XTUBE_ALLOWUPLOADSDSC','Autoriser les utilisateurs à uploader directement des vidéos sur le site');
define('_MI_XTUBE_SCREENSHOTS','Répertoire des copies d\'écran');

define("_MI_XTUBE_SUBMITART", "Soumission des vidéos :");
define("_MI_XTUBE_SUBMITARTDSC", "Sélectionner les groupes autorisés à soumettre de nouvelles vidéos.");
define("_MI_XTUBE_RATINGGROUPS", "Estimation des vidéos :");
define("_MI_XTUBE_RATINGGROUPSDSC", "Sélectionner les groupes autorisés à estimer des vidéos.");

define("_MI_XTUBE_QUALITY", "Qualité des miniatures :");
define("_MI_XTUBE_QUALITYDSC", "Qualité inférieure : 0 Supérieure : 100");
define("_MI_XTUBE_KEEPASPECT", "Conserver le ratio de l'image");
define("_MI_XTUBE_KEEPASPECTDSC", "");

define("_MI_XTUBE_TITLE", "Titre");
define("_MI_XTUBE_RATING", "Estimation");
define("_MI_XTUBE_WEIGHT", "Position");
define("_MI_XTUBE_POPULARITY", "Popularité");
define("_MI_XTUBE_SUBMITTED2", "Date de soumission");

// Text for notifications
define('_MI_XTUBE_GLOBAL_NOTIFY', 'Générale');
define('_MI_XTUBE_GLOBAL_NOTIFYDSC', 'Options de notification globales des vidéos.');
define('_MI_XTUBE_CATEGORY_NOTIFY', 'Catégorie');
define('_MI_XTUBE_CATEGORY_NOTIFYDSC', 'Options de notification qui s\'appliquent aux vidéos de la catégorie courante.');
define('_MI_XTUBE_VIDEO_NOTIFY', 'Vidéo');
define('_MI_XTUBE_FILE_NOTIFYDSC', 'Options de notification qui s\'appliquent à la vidéo en cours.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFY', 'Nouvelle catégorie');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notifiez-moi quand une catégorie de fichiers est créée.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Recevoir une notification quand une catégorie de fichiers est créée');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle catégorie de vidéos');

define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFY', 'Demande de modifications');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP', 'Notifiez-moi de toute demande de modification de vidéo');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC', 'Recevoir une notification quand une modification de vidéo est demandée.');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Demande de modification de vidéo');

define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFY', 'Vidéos brisées');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP', 'Notifiez-moi de tout rapport de vidéo brisée');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC', 'Recevoir une notication quand un rapport de vidéo brisée est rapporté.');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Vidéo brisée signalée');

define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY', 'Vidéos soumises');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP', 'Notifiez-moi des nouvelles soumissions de vidéos (en attente d\'approbation).');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC', 'Recevoir une notification des nouvelles vidéos soumises (en attente d\'approbation).');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vidéo soumise');

define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFY', 'Nouvelles vidéos');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP', 'Notifiez-moi dès qu\'une nouvelle vidéo est publiée.');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC', 'Recevoir une notification quand une nouvelle vidéo est publiée.');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vidéo');

define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFY', 'Vidéos soumises');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notifiez-moi dès qu\'une nouvelle vidéo est publiée (en attente d\'approbation) dans cette catégorie.');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Recevoir une notification quand une nouvelle vidéo est publiée (en attente d\'approbation) dans cette catégorie.');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vidéo publié dans cette catégorie');

define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFY', 'Nouvelles vidéos');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP', 'Notifiez-moi dès qu\'une nouvelle vidéo est publiée dans cette catégorie.');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC', 'Recevoir une notification quand une nouvelle vidéo est publiée dans cette catégorie.');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vidéo dans cette catégorie');

define('_MI_XTUBE_VIDEO_APPROVE_NOTIFY', 'Vidéo approuvée');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYCAP', 'Notifiez-moi dès que cette vidéo est approuvée.');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYDSC', 'Recevoir une notification dès que cette vidéo est approuvée.');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Vidéo approuvée');

define('_MI_XTUBE_AUTHOR_INFO', "Informations sur le développeur");
define('_MI_XTUBE_AUTHOR_NAME', "Développeur");
define('_MI_XTUBE_AUTHOR_DEVTEAM', "Equipe de développement");
define('_MI_XTUBE_AUTHOR_WEBSITE', "Site web du développeur");
define('_MI_XTUBE_AUTHOR_EMAIL', "E-mail du développeur");
define('_MI_XTUBE_AUTHOR_CREDITS', "Crédits");
define('_MI_XTUBE_MODULE_INFO', "Informations sur le développement du module");
define('_MI_XTUBE_MODULE_STATUS', "Statut du développement");
define('_MI_XTUBE_MODULE_DEMO', "Site de démonstration");
define('_MI_XTUBE_MODULE_SUPPORT', "Site officiel de support");
define('_MI_XTUBE_MODULE_BUG', "Rapporter un bug pour ce module");
define('_MI_XTUBE_MODULE_FEATURE', "Suggérez une nouvelle fonction pour ce module");
define('_MI_XTUBE_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_XTUBE_RELEASE', "Date de mise à jour: ");
define('_MI_XTUBE_ICONS_CREDITS', "Icônes par");
define('_MI_WFL_AUTHOR_CREDITS', "Crédits");

define('_MI_XTUBE_MODULE_MAILLIST', "Mailing liste de WF-Projet");
define('_MI_XTUBE_MODULE_MAILANNOUNCEMENTS', "Mailing liste des nouvelles");
define('_MI_XTUBE_MODULE_MAILBUGS', "Mailing Liste des rapports de bugs");
define('_MI_XTUBE_MODULE_MAILFEATURES', "Mailing Liste des fonctionnalités");
define('_MI_XTUBE_MODULE_MAILANNOUNCEMENTSDSC', "Obtenir les dernières nouvelles de WF-Projet.");
define('_MI_XTUBE_MODULE_MAILBUGSDSC', "Suivi des bugs et de la Mailing liste des soumissions");
define('_MI_XTUBE_MODULE_MAILFEATURESDSC', "Mailing liste des demandes de nouvelles fonctionnalités.");

define('_MI_XTUBE_WARNINGTEXT', "THE SOFTWARE IS PROVIDED BY MCDONALD \"AS IS\" AND \"WITH ALL FAULTS.\"
MCDONALD MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, MCDONALD MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN McDonalds Store WEBSITE. IN NO
EVENT WILL MCDONALD BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
MCDONALD HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_XTUBE_AUTHOR_CREDITSTEXT',"L'équipe WF-Projects.");
define('_MI_XTUBE_AUTHOR_BUGFIXES', "Historique des bugs corrigés");

define('_MI_XTUBE_COPYRIGHTIMAGE', "");

// version 1.02
define("_MI_XTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_XTUBE_FORM_DHTMLEXT", "DHTML Extended");

// Version 1.03
define('_MI_XTUBE_DATEFORMATADMIN', 'Timestamp administration :');
define('_MI_XTUBE_DATEFORMATADMINDSC', 'Administration par défaut du Timestamp pour MyTube');

// Version 1.04 RC-1
define('_MI_XTUBE_VIDEODIR', 'Répertoire d\'upload des Vidéos :');
define('_MI_XTUBE_VIDEODIRDSC', 'Configurez le répertoire pour les fichiers vidéos pour MyTube');
define('_MI_XTUBE_VIDEOIMGDIR', 'Répertoire d\'upload des captures d\'écran des Vidéos:');
define('_MI_XTUBE_VIDEOIMGDIRDSC', 'Configurez le répertoire pour les captures d\'écran des fichiers vidéos pour MyTube');
define('_MI_XTUBE_FLVPLAYER_CREDITS', 'FLV Player');
define('_MI_XTUBE_FLVPLAYER_CREDITDSC', 'JW FLV Media Player by LongTail Video (Jeroen Wijering)');
define('_MI_XTUBE_VUPLOADS', 'Video upload');
define('_MI_XTUBE_CATEGORYIMGDSC', '');
define('_MI_XTUBE_MAINIMGDIRDSC', '');
define('_MI_XTUBE_BNAME8', 'MyTube Sponsor Statistics' );

// Version 1.04 RC-2
define('_MI_XTUBE_MODULE_MANUAL', 'Manual:' );
define('_MI_XTUBE_MODULE_MANUALWIKI', 'Wiki Manual' );
define('_MI_XTUBE_MODULE_REQUESTNEWFEATURE', 'Request a new feature' );
define('_MI_XTUBE_MODULE_SUBMITBUG', 'Submit a Bug' );
define("_MI_XTUBE_BNAME9","MyTube Tag Cloud");
define("_MI_XTUBE_BNAME10","MyTube Top Tags");
define('_MI_XTUBE_FLVPLAYER_MANUAL', 'FLV Player Manual');
define('_MI_XTUBE_FLVPLAYER_WIKI', 'JW Player Wiki');

// Version 1.05 RC-1
define( "_MI_XTUBE_CATCOLUMNS", "Sélectionner le nombre de colonnes pour la catégorie:" );
define( "_MI_XTUBE_CATCOLUMNSDSC", "Sélectionner le nombre de colonnes, le nombre par défaut est 2" );
define( "_MI_XTUBE_RATINGDISPLAY", "Afficher le système de votes?" );
define( "_MI_XTUBE_RATINGDISPLAYDSC", "Sélectionnez <em>Oui</em> pour afficher le système de votes. Sélectionnez <em>Non</em> si vous ne voulez pas afficher le système de votes." );
define( "_MI_XTUBE_AUTOPLAY", "Lancer automatiquement la vidéo" );
define( "_MI_XTUBE_AUTOPLAYDSC", "Sélectionnez <em>Oui</em> pour que les vidéoclips se lancent automatiquement." );
define( '_MI_XTUBE_VERSION', 'Version' );
define( '_MI_XTUBE_LICENSE', 'License' );
define( '_MI_XTUBE_LICENSEDSC', 'GNU General Public License (GPL) - a copy of the GNU license is enclosed (license.txt).' );

/**
 * @translation     AFUX (Association Francophone des Utilisateurs de Xoops) <http://www.afux.org/>
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: ISO-8859-1
 *
 * @version         $Id$
**/
?>