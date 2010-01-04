/**
 * @version         $Id
**/

/* Thanks to Snow77, Skalpa and Leostotch for the initial work, Dugris and Burning for help and tests */
/* Theme Css100 version 1.0 by kris (http://www.xoofoo.org and http://www.frxoops.org) */

/**** Version française ****/
Css100 est un gabarit pour réaliser vos thèmes pour XOOPS
L'architecture intègre les évolutions des dernières et futures versions du CMS
Pour vos commentaires, suggestions et bugs vous pouvez aller sur les forums de support de Xoops France (http://www.frxoops.org) ou du Projet (http://www.xoops.org)
Il existe un wiki concernant ce thème et ses fichiers à cette adresse http://labs.xoofoo.org

Installation :
Décompressez l'archive et téléverser l'ensemble des dossiers et fichiers directement dans le dossier 'themes' de votre site
NOTE 1 : Pour profiter de la possibilité d'ajout de blocs dans le pied de page, vous devez mettre le fichier "function.block.php" dans votresite/class/smarty/xoops_plugins/
NOTE 2 : Pour profiter de la possibilité d'ajout d'un encart de contenu sous le header en page d'accueil, vous devez vérifier ou renseigner la ligne suivante dans le fichier xo_homepage.html : <{if !$xoops_isuser && $smarty.server.PHP_SELF=='/index.php'}>
- si votre site est à la racine du serveur, mettez '/index.php',
- sinon '/nomdudossier/index.php'
- Si vous avez des difficultés à trouver le chemin, insérer <{$smarty.server.PHP_SELF}> en première ligne de ce fichier et les informations s'afficheront, puis retirer la ligne et les commentaires pour des questions de sécurité
- vous pouvez désactiver ou activer les différents fichiers (en include) ou zone du thème (colonnes droite et gauche, blocs hauts et bas) en modifiant les valeurs dans le fichier xo_thm_parameters.html


/**** English version ****/
Css100 is a template to carry out your theme for XOOPS
Architecture integrates the evolutions of the last and future versions of the CMS
For your feeback and bugs you can go on the forums of support of Xoops France (http://www.frxoops.org) or the Project (http://www.xoops.org)
There is a wiki concerning this theme and its files at this adresss http://labs.xoofoo.org 

Installation:
Decompress the file and upload the whole of the files and files directly to folder 'themes' of your site
NOTE 1 : To take advantage of the opportunity to add blocks in the footer, you must save the file "function.block.php" in yourSite/class/smarty/xoops_plugins/
NOTE 2 : To enjoy the possibility of adding an insert content in the header in home page, you must verify or fill the following line in the file xo_homepage.html: <{if !$xoops_isuser && $smarty.server.PHP_SELF=='/index.php'}>
- If your site is at the root of the server, put '/index.php',
- If '/foldername/index.php'
- If you have difficulty finding the path, add <{$smarty.server.PHP_SELF}> first line of this file and the information displayed, then remove the line and comments on issues of security
- You can disable or enable different files (include) or zone area (left and right columns, top and bottom block) by changing the values in the file xo_thm_parameters.html

/**** Versão de Portugues ****/

O Css100 é um molde para realizar seu tema para XOOPS
A arquitetura integra as evoluções das últimas e versões futuras do CMS
Para seus feeback e erros você pode ir nos forums da sustentação de Xoops France (http://www.frxoops.org) ou o projeto (http://www.xoops.org)
Há um wiki a respeito deste tema e de suas limas no este adresss http://labs.xoofoo.org 

Instalação:
Decompress a lima e upload o todo das limas e de limas diretamente à raiz de seu local



/**** Versione Italiano ****/

La Css100 è un modello per effettuare il vostro tema per XOOPS
L'architettura integra gli sviluppi di ultime e versioni future del CMS
Per il vostri feeback ed errori di programma potete andare sulle tribune di supporto di Xoops Francia (http://www.frxoops.org) o progetto (http://www.xoops.org) là è un wiki riguardo a questo tema ed ai sui archivi al questo adresss http://labs.xoofoo.org 

Impianto:
Decomprimere l'archivio ed upload il tutto degli archivi e degli archivi direttamente alla radice del vostro luogo



/**** versión española ****/

La Css100 es un patrón para realizar su tema para XOOPS
La configuración integra la evolución de las versiones pasadas y futuras del CMS
Para su feeback y fallos de funcionamiento usted puede ir en los foros del apoyo de Xoops Francia (http://www.frxoops.org) o el proyecto (http://www.xoops.org) allí es un wiki referente este tema y a sus ficheros en este los adresss http://labs.xoofoo.org 

Instalación:
Descomprimir el fichero y cargar por teletratamiento el conjunto de los ficheros y de los ficheros directo a la raíz de su sitio



/**** Deutsche Fassung ****/

Css100 ist eine Schablone, zum Ihres Themas für XOOPS durchzuführen
Architektur integriert die Entwicklungen der letzten und zukünftigen Versionen des CMS
Ihr feeback und Marken können Sie auf die Foren des Trägers von Xoops Frankreich (http://www.frxoops.org) oder das Projekt (http://www.xoops.org) dort anstreben ist ein wiki hinsichtlich dieses Themas und seiner Dateien an diesem adresss http://labs.xoofoo.org 

Einbau:
Die Datei dekomprimieren und das Ganze der Dateien und der Dateien direkt zur Wurzel Ihrer Sites zurückladen



/**** Nederlandse versie ****/

De Css100 is een malplaatje om uw thema voor XOOPS uit te voeren
De architectuur integreert de evoluties van the last en toekomstige versies van CMS
Voor uw feeback en insecten kunt u go on de forums van steun van Xoops Frankrijk (http://www.frxoops.org) of het Project (http://www.xoops.org) zijn Er een wiki betreffende dit thema en zijn dossiers bij dit adresss http://labs.xoofoo.org 

Installatie:
Decompresseer het dossier en upload the whole of de dossiers en dossiers rechtstreeks aan de wortel van uw plaats



/**** wersja wersja ****/

Css100 byc szablon twój temat dla XOOPS
Architektura integrowac the ewolucja the ostatni i przyszlosciowy wersja the CMS
Dla twój feeback i pluskwa ty móc na the forum poparcie Xoops Francja (http://www.frxoops.org) lub the Projekt (http://www.xoops.org) Tam  byc wiki ten temat i swój kartoteka przy ten adresss http://labs.xoofoo.org 

Instalacja:
Decompress the kartoteka i upload the calosc the kartoteka i kartoteka bezposrednio the korzen twój miejsce


/**** persian version ****//**** ??? ????? ****/
?????????? (?? ??????) ?? ?????? ???? ????? ???? ??? ???? ????????? ???? ??? ?? ?????? ??? ?????? ????? ???? ? ???? ??????? ?? ?? ?? ?? ???? ??????? ? ??????? ??? ???? ???? ???? ? ??? ????????? ?? ????????? ???????? ???? ????? (www.irxoops.org) ?? ????? ?? (www.xoops.org) ?????? ????.
?? ???? ?? ???? ???? ???? ?? ?? ??? ???? ? ???????? ?? ?????? ????? ?? ???? ???:
http://labs.xoofoo.org 
