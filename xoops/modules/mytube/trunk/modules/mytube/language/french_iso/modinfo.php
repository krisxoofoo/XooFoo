<?php

// Module Info
// The name of this module
define("_MI_XTUBE_NAME","MyTube");

// A brief description of this module
define("_MI_XTUBE_DESC","Module de partage, syndication et publication de vid�os en ligne.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_XTUBE_BNAME1","Vid�os r�centes (t)");
define("_MI_XTUBE_BNAME2","Vid�os r�centes");
define("_MI_XTUBE_BNAME3","Meilleures Vid�os (t)");
define("_MI_XTUBE_BNAME4","Meilleures Vid�os");
define("_MI_XTUBE_BNAME5","Vid�os r�centes (h)");
define("_MI_XTUBE_BNAME6","Vid�os al�atoires");
define("_MI_XTUBE_BNAME7","Vid�os al�atoires (h)");

// Sub menu titles
define("_MI_XTUBE_SMNAME1","Soumettre");
define("_MI_XTUBE_SMNAME2","Populaire");
define("_MI_XTUBE_SMNAME3","Mieux not�es");
define("_MI_XTUBE_SMNAME4","Vid�os r�centes");

// Names of admin menu items
define("_MI_XTUBE_BINDEX","Index");
define("_MI_XTUBE_INDEXPAGE","Gestion de la Page d'Index");
define("_MI_XTUBE_MCATEGORY","Gestion des cat�gories");
define("_MI_XTUBE_MVIDEOS","Gestion des vid�os");
define("_MI_XTUBE_MUPLOADS","Upload d'images");
define("_MI_XTUBE_PERMISSIONS","Permissions");
define("_MI_XTUBE_BLOCKADMIN","Param�tres des blocs");
define("_MI_XTUBE_MVOTEDATA","Votes");

// Title of config items
define('_MI_XTUBE_POPULAR', 'Hits pour �tre populaire');
define('_MI_XTUBE_POPULARDSC', 'Nombre de hits pour que la vid�o soit consid�r�e comme populaire.');

define("_MI_XTUBE_ICONDISPLAY","Affichage populaire et nouveau:");
define("_MI_XTUBE_DISPLAYICONDSC", "S�lectionner la fa�on dont vont �tre affich�es les nouvelles vid�os et celles populaires  ");
define("_MI_XTUBE_DISPLAYICON1", "Afficher sous forme d'ic�ne");
define("_MI_XTUBE_DISPLAYICON2", "Afficher sous forme de texte");
define("_MI_XTUBE_DISPLAYICON3", "Aucun affichage");

define("_MI_XTUBE_DAYSNEW","D�lai en jour pour les nouvelles vid�os:");
define("_MI_XTUBE_DAYSNEWDSC","Nombre de jours pour qu'une vid�o soit consid�r�e comme nouvelle apr�s sa publication.");

define("_MI_XTUBE_DAYSUPDATED","D�lai en jour pour les vid�os mises � jour:");
define("_MI_XTUBE_DAYSUPDATEDDSC","Nombre de jours pendant lesquels une vid�o est consid�r�e comme mise � jour.");

define('_MI_XTUBE_PERPAGE', 'Nombre de vid�os � afficher:');
define('_MI_XTUBE_PERPAGEDSC', 'Nombre de vid�os � afficher dans chaque cat�gorie.');

define("_MI_XTUBE_ADMINPAGE", "Nombre de vid�os � afficher dans l'admin:");
define("_MI_XTUBE_AMDMINPAGEDSC", "Nombre de vid�os � afficher dans la page d'administration du Module:");

define("_MI_XTUBE_ARTICLESSORT", "Ordre par d�faut des vid�os:");
define("_MI_XTUBE_ARTICLESSORTDSC", "S�lectionner l'ordre par d�faut pour la liste des vid�os.");

define("_MI_XTUBE_SORTCATS", "Tri des cat�gories:");
define("_MI_XTUBE_SORTCATSDSC", "S�lectionner la mani�re par laquelle les cat�gories et les sous-cat�gories seront tri�es.");

define('_MI_XTUBE_SUBCATS', 'Sous-cat�gories:');
define('_MI_XTUBE_SUBCATSDSC', 'S�lectionner "Oui" pour afficher les Sous-cat�gories et "Non" pour les cacher.');

define('_MI_XTUBE_EDITOR', "Editeur utilis� (administrateur):");
define('_MI_XTUBE_EDITORCHOICE', "S�lectionner l'�diteur � utiliser du c�t� administration. Si vous avez une installation standard (ex. vous utilisez seulement la classe d'�diteur du core de Xoops, fournie dans le pack standard du core de xoops), alors vous ne pourrez seulement que s�lectionner DHTML ou Compact");
define('_MI_XTUBE_EDITORUSER', "Editeur utilis� (utilisateur):");
define('_MI_XTUBE_EDITORCHOICEUSER', "S�lectionner l'�diteur � utiliser du c�t� utilisateur. Si vous avez une installation standard (ex. vous utilisez seulement la classe d'�diteur du core de Xoops, fournie dans le pack standard du core de xoops), alors vous ne pourrez seulement que s�lectionner DHTML ou Compact");
define("_MI_XTUBE_FORM_DHTML","DHTML");
define("_MI_XTUBE_FORM_COMPACT","Compact");
define("_MI_XTUBE_FORM_SPAW","Spaw Editor");
define("_MI_XTUBE_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_XTUBE_FORM_FCK","FCK Editor");
define("_MI_XTUBE_FORM_KOIVI","Koivi Editor");
define("_MI_XTUBE_FORM_TINYEDITOR","TinyEditor");

define('_MI_XTUBE_USESHOTS', 'Afficher des copies d\'�cran ?');
define('_MI_XTUBE_USESHOTSDSC', 'Choisissez oui pour afficher des copies d\'�cran pour chaque vid�o');

define('_MI_XTUBE_USETHUMBS', 'Utiliser des Miniatures:');
define("_MI_XTUBE_USETHUMBSDSC", "Type d'images support�es : JPG, GIF, PNG.<div style='padding-top: 8px;'>MyTube utilise des miniatures pour les images. Choisissez 'Non' si votre serveur ne supporte pas cette option.</div>");

define("_MI_XTUBE_IMGUPDATE", "Mise � jour des Miniatures ?");
define("_MI_XTUBE_IMGUPDATEDSC", "Si vous avez s�lectionn� l'option, la mise � jour des miniatures se fera � chaque rechargement de la page. Sinon, la premi�re miniature de l'image sera utilis�e ind�finiment<br /><br />");

define('_MI_XTUBE_SHOTWIDTH', 'Largeur de la capture d\'�cran');
define('_MI_XTUBE_SHOTWIDTHDSC', 'Permet de choisir une largeur pour les copies d\'�cran');

define('_MI_XTUBE_SHOTHEIGHT', 'Hauteur de la capture d\'�cran');
define('_MI_XTUBE_SHOTHEIGHTDSC', 'Permet de choisir une hauteur pour les copies d\'�cran');

define('_MI_XTUBE_MAINIMGDIR','R�pertoire principal d\'images');

define('_MI_XTUBE_CATEGORYIMG','R�pertoire d\'upload des cat�gories d\'images');

define('_MI_XTUBE_DATEFORMAT', 'Timestamp:');
define('_MI_XTUBE_DATEFORMATDSC', 'Timestamp par d�faut pour MyTube');

define("_MI_XTUBE_TOTALCHARS", "Nombre total des caract�res pour les descriptions ?");
define("_MI_XTUBE_TOTALCHARSDSC", "Param�trez le nombre total des caract�res pour les descriptions dans la Page d'Index.");

define("_MI_XTUBE_OTHERVIDEOS", "Afficher d'autres vid�os propos�es par le Soumetteur ?");
define("_MI_XTUBE_OTHERVIDEOSDSC", "S�lectionner 'Oui' si d'autres vid�os du Soumetteur doivent �tres affich�es.");

define("_MI_XTUBE_SHOWSBOOKMARKS", "Afficher les signets Sociaux ?");
define("_MI_XTUBE_SHOWSBOOKMARKSDSC", "S�lectionner 'Oui' si vous voulez afficher les ic�nes des signets Sociaux sous les vid�os.");

define("_MI_XTUBE_USEMETADESCR", "G�n�rateur des meta descriptions :");
define("_MI_XTUBE_USEMETADSC", "En activant cette option, les meta descriptions seront bas�es sur les descriptions des vid�os.");

define("_MI_XTUBE_USERTAGDESCR", "Les utilisateurs peuvent soumettre des Tags :");
define("_MI_XTUBE_USERTAGDSC", "S�lectionner 'Oui' si vous voulez autoriser les utilisateurs � soumettre des Tags.");

define('_MI_XTUBE_SHOWDISCLAIMER', 'Afficher le disclaimer avant la proposition d\'un utilisateur ?');
define('_MI_XTUBE_SHOWDISCLAIMERDSC', 'Avant qu\'un utilisateur propose une vid�o');

define('_MI_XTUBE_DISCLAIMER', 'Texte du disclaimer:');

define('_MI_XTUBE_SHOWVIDEODISCL', 'Afficher le disclaimer avant de voir la vid�o ?');
define('_MI_XTUBE_SHOWVIDEODISCLDSC', 'Voir les r�glements avant de visualiser la vid�o');

define('_MI_XTUBE_VIDEODISCLAIMER', 'Entrer le texte du disclaimer de la vid�o:');

define('_MI_XTUBE_COPYRIGHT', 'Information Copyright :');
define('_MI_XTUBE_COPYRIGHTDSC', 'Afficher le copyright dans les pages des vid�os.');

define('_MI_XTUBE_CHECKHOST', 'D�sactiver les liens directes des vid�os depuis d\'autres sites web ? (leeching)');
define('_MI_XTUBE_REFERERS', 'Liste des sites autoris�s <br />S�par�s par "#"');
define("_MI_XTUBE_ANONPOST","Proposition des utilisateurs anonymes:");
define("_MI_XTUBE_ANONPOSTDSC","Permettre aux utilisateurs anonymes de proposer et/ou uploader sur votre site Web ?");
define('_MI_XTUBE_AUTOAPPROVE','Approbation automatique des vid�os');
define('_MI_XTUBE_AUTOAPPROVEDSC','Choisissez la m�thode d\'approbation des vid�os sans mod�ration.');

define('_MI_XTUBE_MAXFILESIZE','Taille d\'upload (KB)');
define('_MI_XTUBE_MAXFILESIZEDSC','Taille maximale autoris�e pour les vid�os upload�es.');
define('_MI_XTUBE_IMGWIDTH','Largeur maximum des images upload�es');
define('_MI_XTUBE_IMGWIDTHDSC','Largeur maximum des images upload�es pour les vid�os');
define('_MI_XTUBE_IMGHEIGHT','Hauteur maximale des images upload�es');
define('_MI_XTUBE_IMGHEIGHTDSC','Hauteur maximale des images upload�es pour les vid�os');

define('_MI_XTUBE_UPLOADDIR','R�pertoire d\'upload (Sans slash � la fin)');
define('_MI_XTUBE_ALLOWSUBMISS','Soumission des utilisateurs :');
define('_MI_XTUBE_ALLOWSUBMISSDSC','Autoriser les utilisateurs � soumettre des vid�os');
define('_MI_XTUBE_ALLOWUPLOADS','Upload des utilisateurs:');
define('_MI_XTUBE_ALLOWUPLOADSDSC','Autoriser les utilisateurs � uploader directement des vid�os sur le site');
define('_MI_XTUBE_SCREENSHOTS','R�pertoire des copies d\'�cran');

define("_MI_XTUBE_SUBMITART", "Soumission des vid�os :");
define("_MI_XTUBE_SUBMITARTDSC", "S�lectionner les groupes autoris�s � soumettre de nouvelles vid�os.");
define("_MI_XTUBE_RATINGGROUPS", "Estimation des vid�os :");
define("_MI_XTUBE_RATINGGROUPSDSC", "S�lectionner les groupes autoris�s � estimer des vid�os.");

define("_MI_XTUBE_QUALITY", "Qualit� des miniatures :");
define("_MI_XTUBE_QUALITYDSC", "Qualit� inf�rieure : 0 Sup�rieure : 100");
define("_MI_XTUBE_KEEPASPECT", "Conserver le ratio de l'image");
define("_MI_XTUBE_KEEPASPECTDSC", "");

define("_MI_XTUBE_TITLE", "Titre");
define("_MI_XTUBE_RATING", "Estimation");
define("_MI_XTUBE_WEIGHT", "Position");
define("_MI_XTUBE_POPULARITY", "Popularit�");
define("_MI_XTUBE_SUBMITTED2", "Date de soumission");

// Text for notifications
define('_MI_XTUBE_GLOBAL_NOTIFY', 'G�n�rale');
define('_MI_XTUBE_GLOBAL_NOTIFYDSC', 'Options de notification globales des vid�os.');
define('_MI_XTUBE_CATEGORY_NOTIFY', 'Cat�gorie');
define('_MI_XTUBE_CATEGORY_NOTIFYDSC', 'Options de notification qui s\'appliquent aux vid�os de la cat�gorie courante.');
define('_MI_XTUBE_VIDEO_NOTIFY', 'Vid�o');
define('_MI_XTUBE_FILE_NOTIFYDSC', 'Options de notification qui s\'appliquent � la vid�o en cours.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFY', 'Nouvelle cat�gorie');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notifiez-moi quand une cat�gorie de fichiers est cr��e.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Recevoir une notification quand une cat�gorie de fichiers est cr��e');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle cat�gorie de vid�os');

define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFY', 'Demande de modifications');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP', 'Notifiez-moi de toute demande de modification de vid�o');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC', 'Recevoir une notification quand une modification de vid�o est demand�e.');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Demande de modification de vid�o');

define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFY', 'Vid�os bris�es');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP', 'Notifiez-moi de tout rapport de vid�o bris�e');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC', 'Recevoir une notication quand un rapport de vid�o bris�e est rapport�.');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Vid�o bris�e signal�e');

define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY', 'Vid�os soumises');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP', 'Notifiez-moi des nouvelles soumissions de vid�os (en attente d\'approbation).');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC', 'Recevoir une notification des nouvelles vid�os soumises (en attente d\'approbation).');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vid�o soumise');

define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFY', 'Nouvelles vid�os');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP', 'Notifiez-moi d�s qu\'une nouvelle vid�o est publi�e.');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC', 'Recevoir une notification quand une nouvelle vid�o est publi�e.');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vid�o');

define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFY', 'Vid�os soumises');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notifiez-moi d�s qu\'une nouvelle vid�o est publi�e (en attente d\'approbation) dans cette cat�gorie.');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Recevoir une notification quand une nouvelle vid�o est publi�e (en attente d\'approbation) dans cette cat�gorie.');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vid�o publi� dans cette cat�gorie');

define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFY', 'Nouvelles vid�os');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP', 'Notifiez-moi d�s qu\'une nouvelle vid�o est publi�e dans cette cat�gorie.');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC', 'Recevoir une notification quand une nouvelle vid�o est publi�e dans cette cat�gorie.');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vid�o dans cette cat�gorie');

define('_MI_XTUBE_VIDEO_APPROVE_NOTIFY', 'Vid�o approuv�e');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYCAP', 'Notifiez-moi d�s que cette vid�o est approuv�e.');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYDSC', 'Recevoir une notification d�s que cette vid�o est approuv�e.');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Vid�o approuv�e');

define('_MI_XTUBE_AUTHOR_INFO', "Informations sur le d�veloppeur");
define('_MI_XTUBE_AUTHOR_NAME', "D�veloppeur");
define('_MI_XTUBE_AUTHOR_DEVTEAM', "Equipe de d�veloppement");
define('_MI_XTUBE_AUTHOR_WEBSITE', "Site web du d�veloppeur");
define('_MI_XTUBE_AUTHOR_EMAIL', "E-mail du d�veloppeur");
define('_MI_XTUBE_AUTHOR_CREDITS', "Cr�dits");
define('_MI_XTUBE_MODULE_INFO', "Informations sur le d�veloppement du module");
define('_MI_XTUBE_MODULE_STATUS', "Statut du d�veloppement");
define('_MI_XTUBE_MODULE_DEMO', "Site de d�monstration");
define('_MI_XTUBE_MODULE_SUPPORT', "Site officiel de support");
define('_MI_XTUBE_MODULE_BUG', "Rapporter un bug pour ce module");
define('_MI_XTUBE_MODULE_FEATURE', "Sugg�rez une nouvelle fonction pour ce module");
define('_MI_XTUBE_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_XTUBE_RELEASE', "Date de mise � jour: ");
define('_MI_XTUBE_ICONS_CREDITS', "Ic�nes par");
define('_MI_WFL_AUTHOR_CREDITS', "Cr�dits");

define('_MI_XTUBE_MODULE_MAILLIST', "Mailing liste de WF-Projet");
define('_MI_XTUBE_MODULE_MAILANNOUNCEMENTS', "Mailing liste des nouvelles");
define('_MI_XTUBE_MODULE_MAILBUGS', "Mailing Liste des rapports de bugs");
define('_MI_XTUBE_MODULE_MAILFEATURES', "Mailing Liste des fonctionnalit�s");
define('_MI_XTUBE_MODULE_MAILANNOUNCEMENTSDSC', "Obtenir les derni�res nouvelles de WF-Projet.");
define('_MI_XTUBE_MODULE_MAILBUGSDSC', "Suivi des bugs et de la Mailing liste des soumissions");
define('_MI_XTUBE_MODULE_MAILFEATURESDSC', "Mailing liste des demandes de nouvelles fonctionnalit�s.");

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

define('_MI_XTUBE_AUTHOR_CREDITSTEXT',"L'�quipe WF-Projects.");
define('_MI_XTUBE_AUTHOR_BUGFIXES', "Historique des bugs corrig�s");

define('_MI_XTUBE_COPYRIGHTIMAGE', "");

// version 1.02
define("_MI_XTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_XTUBE_FORM_DHTMLEXT", "DHTML Extended");

// Version 1.03
define('_MI_XTUBE_DATEFORMATADMIN', 'Timestamp administration :');
define('_MI_XTUBE_DATEFORMATADMINDSC', 'Administration par d�faut du Timestamp pour MyTube');

// Version 1.04 RC-1
define('_MI_XTUBE_VIDEODIR', 'R�pertoire d\'upload des Vid�os :');
define('_MI_XTUBE_VIDEODIRDSC', 'Configurez le r�pertoire pour les fichiers vid�os pour MyTube');
define('_MI_XTUBE_VIDEOIMGDIR', 'R�pertoire d\'upload des captures d\'�cran des Vid�os:');
define('_MI_XTUBE_VIDEOIMGDIRDSC', 'Configurez le r�pertoire pour les captures d\'�cran des fichiers vid�os pour MyTube');
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
define( "_MI_XTUBE_CATCOLUMNS", "S�lectionner le nombre de colonnes pour la cat�gorie:" );
define( "_MI_XTUBE_CATCOLUMNSDSC", "S�lectionner le nombre de colonnes, le nombre par d�faut est 2" );
define( "_MI_XTUBE_RATINGDISPLAY", "Afficher le syst�me de votes?" );
define( "_MI_XTUBE_RATINGDISPLAYDSC", "S�lectionnez <em>Oui</em> pour afficher le syst�me de votes. S�lectionnez <em>Non</em> si vous ne voulez pas afficher le syst�me de votes." );
define( "_MI_XTUBE_AUTOPLAY", "Lancer automatiquement la vid�o" );
define( "_MI_XTUBE_AUTOPLAYDSC", "S�lectionnez <em>Oui</em> pour que les vid�oclips se lancent automatiquement." );
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