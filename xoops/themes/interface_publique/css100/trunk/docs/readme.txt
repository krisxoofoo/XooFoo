/**
 * @version         $Id
**/

/* Thanks to Snow77, Skalpa and Leostotch for the initial work, Dugris and Burning for help and tests */
/* Theme Css100 version 1.0 by kris (http://www.xoofoo.org and http://www.frxoops.org) */

/**** Version fran�aise ****/
Css100 est un gabarit pour r�aliser vos th�mes pour XOOPS
L'architecture int�gre les �volutions des derni�res et futures versions du CMS
Pour vos commentaires, suggestions et bugs vous pouvez aller sur les forums de support de Xoops France (http://www.frxoops.org) ou du Projet (http://www.xoops.org)
Il existe un wiki concernant ce th�me et ses fichiers � cette adresse http://labs.xoofoo.org

Installation :
D�compressez l'archive et t�l�verser l'ensemble des dossiers et fichiers directement dans le dossier 'themes' de votre site
NOTE 1 : Pour profiter de la possibilit� d'ajout de blocs dans le pied de page, vous devez mettre le fichier "function.block.php" dans votresite/class/smarty/xoops_plugins/
NOTE 2 : Pour profiter de la possibilit� d'ajout d'un encart de contenu sous le header en page d'accueil, vous devez v�rifier ou renseigner la ligne suivante dans le fichier xo_homepage.html : <{if !$xoops_isuser && $smarty.server.PHP_SELF=='/index.php'}>
- si votre site est � la racine du serveur, mettez '/index.php',
- sinon '/nomdudossier/index.php'
- Si vous avez des difficult�s � trouver le chemin, ins�rer <{$smarty.server.PHP_SELF}> en premi�re ligne de ce fichier et les informations s'afficheront, puis retirer la ligne et les commentaires pour des questions de s�curit�
- vous pouvez d�sactiver ou activer les diff�rents fichiers (en include) ou zone du th�me (colonnes droite et gauche, blocs hauts et bas) en modifiant les valeurs dans le fichier xo_thm_parameters.html


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

/**** Vers�o de Portugues ****/

O Css100 � um molde para realizar seu tema para XOOPS
A arquitetura integra as evolu��es das �ltimas e vers�es futuras do CMS
Para seus feeback e erros voc� pode ir nos forums da sustenta��o de Xoops France (http://www.frxoops.org) ou o projeto (http://www.xoops.org)
H� um wiki a respeito deste tema e de suas limas no este adresss http://labs.xoofoo.org 

Instala��o:
Decompress a lima e upload o todo das limas e de limas diretamente � raiz de seu local



/**** Versione Italiano ****/

La Css100 � un modello per effettuare il vostro tema per XOOPS
L'architettura integra gli sviluppi di ultime e versioni future del CMS
Per il vostri feeback ed errori di programma potete andare sulle tribune di supporto di Xoops Francia (http://www.frxoops.org) o progetto (http://www.xoops.org) l� � un wiki riguardo a questo tema ed ai sui archivi al questo adresss http://labs.xoofoo.org 

Impianto:
Decomprimere l'archivio ed upload il tutto degli archivi e degli archivi direttamente alla radice del vostro luogo



/**** versi�n espa�ola ****/

La Css100 es un patr�n para realizar su tema para XOOPS
La configuraci�n integra la evoluci�n de las versiones pasadas y futuras del CMS
Para su feeback y fallos de funcionamiento usted puede ir en los foros del apoyo de Xoops Francia (http://www.frxoops.org) o el proyecto (http://www.xoops.org) all� es un wiki referente este tema y a sus ficheros en este los adresss http://labs.xoofoo.org 

Instalaci�n:
Descomprimir el fichero y cargar por teletratamiento el conjunto de los ficheros y de los ficheros directo a la ra�z de su sitio



/**** Deutsche Fassung ****/

Css100 ist eine Schablone, zum Ihres Themas f�r XOOPS durchzuf�hren
Architektur integriert die Entwicklungen der letzten und zuk�nftigen Versionen des CMS
Ihr feeback und Marken k�nnen Sie auf die Foren des Tr�gers von Xoops Frankreich (http://www.frxoops.org) oder das Projekt (http://www.xoops.org) dort anstreben ist ein wiki hinsichtlich dieses Themas und seiner Dateien an diesem adresss http://labs.xoofoo.org 

Einbau:
Die Datei dekomprimieren und das Ganze der Dateien und der Dateien direkt zur Wurzel Ihrer Sites zur�ckladen



/**** Nederlandse versie ****/

De Css100 is een malplaatje om uw thema voor XOOPS uit te voeren
De architectuur integreert de evoluties van the last en toekomstige versies van CMS
Voor uw feeback en insecten kunt u go on de forums van steun van Xoops Frankrijk (http://www.frxoops.org) of het Project (http://www.xoops.org) zijn Er een wiki betreffende dit thema en zijn dossiers bij dit adresss http://labs.xoofoo.org 

Installatie:
Decompresseer het dossier en upload the whole of de dossiers en dossiers rechtstreeks aan de wortel van uw plaats



/**** wersja wersja ****/

Css100 byc szablon tw�j temat dla XOOPS
Architektura integrowac the ewolucja the ostatni i przyszlosciowy wersja the CMS
Dla tw�j feeback i pluskwa ty m�c na the forum poparcie Xoops Francja (http://www.frxoops.org) lub the Projekt (http://www.xoops.org) Tam� byc wiki ten temat i sw�j kartoteka przy ten adresss http://labs.xoofoo.org 

Instalacja:
Decompress the kartoteka i upload the calosc the kartoteka i kartoteka bezposrednio the korzen tw�j miejsce


/**** persian version ****//**** ??? ????? ****/
?????????? (?? ??????) ?? ?????? ???? ????? ???? ??? ???? ????????? ???? ??? ?? ?????? ??? ?????? ????? ???? ? ???? ??????? ?? ?? ?? ?? ???? ??????? ? ??????? ??? ???? ???? ???? ? ??? ????????? ?? ????????? ???????? ???? ????? (www.irxoops.org) ?? ????? ?? (www.xoops.org) ?????? ????.
?? ???? ?? ???? ???? ???? ?? ?? ??? ???? ? ???????? ?? ?????? ????? ?? ???? ???:
http://labs.xoofoo.org 
