/**
 * @version         $Id$
**/

/* Thanks to Mariane and Burning for help and tests */
/* Theme Xdt Standard version 1.1 by kris_fr for Xoops Design Team (http://www.xoops.org) */


/*================= ENGLISH ==================*/
Decompress the file and upload the whole of the files and files directly to folder 'themes' of your site
Nice tools for Xoops Designer :
- Xoops-Styles Module 	--> see http://www.xoops.org/modules/newbb/viewtopic.php?topic_id=70833&forum=16&post_id=325340#forumpost325340
- Web Browser Package 	--> http://tutos.xoofoo.org/modules/mydownloads/visit.php?cid=23&lid=96
- Web Tools Package		--> http://tutos.xoofoo.org/modules/mydownloads/visit.php?cid=23&lid=295
- ColorMatch Remix		--> http://tutos.xoofoo.org/colorcss/

NOTE 1 : To take advantage of the opportunity to add blocks in the footer, you must save the file "function.block.php" in yourSite/class/smarty/xoops_plugins/
NOTE 2 : To enjoy the possibility of adding an insert content in the header in home page, you must verify or fill the following line in the file xo_homepage.html: <{if !$xoops_isuser && $smarty.server.PHP_SELF=='/index.php'}>
- If your site is at the root of the server, put '/index.php',
- If '/foldername/index.php'
- If you have difficulty finding the path, add <{$smarty.server.PHP_SELF}> first line of this file and the information displayed, then remove the line and comments on issues of security
- You can disable or enable different files (include) or zone area (left and right columns, top and bottom block) by changing the values in the file xo_thm_parameters.html
NOTE 3 : you have 5 news smarty balises for use in this theme
- <{$canvas_template}>  for --> themes/themename/xotpl/xo_canvas.html or themes/themename/modules/modulename/xo_canvas.html if this file is overriding
- <{$parameters_template}>  for --> themes/themename/xotpl/xo_thm_parameters.html or themes/themename/modules/modulename/xo_thm_parameters.html if this file is overriding
- <{$xoops_themeurl}>  for -->  urldusite/themes/themename
- <{$xoops_module_theme}> for -->  themename/modules/namemodule
- <{$xoops_module_themeurl}> for -->  siteurl/themes/themename/modules/modulename/
NOTE 4 :
you have in the "extras" folder, 14 files "xo_page.html" to change the position of columns and blocks of content

/*================= FRENCH ==================*/
Installation : une fois l'archive décompressée, il faut téléverser  le dossier du thème (et uniquement celui-ci) dans le répertoire "themes" de votre site.
Outils sympas pour Xoops Designer :
- Xoops-Styles Module 	--> see http://www.frxoops.org/modules/newbb/viewtopic.php?topic_id=32119&forum=15
- Web Browser Package 	--> http://tutos.xoofoo.org/modules/mydownloads/visit.php?cid=23&lid=96
- Web Tools Package		--> http://tutos.xoofoo.org/modules/mydownloads/visit.php?cid=23&lid=295
- ColorMatch Remix		--> http://tutos.xoofoo.org/colorcss/

NOTE 1 : Pour profiter de la possibilité d'ajout de blocs dans le pied de page, vous devez mettre le fichier "function.block.php" dans votresite/class/smarty/xoops_plugins/
NOTE 2 : Pour profiter de la possibilité d'ajout d'un encart de contenu sous le header en page d'accueil, vous devez vérifier ou renseigner la ligne suivante dans le fichier xo_homepage.html : <{if !$xoops_isuser && $smarty.server.PHP_SELF=='/index.php'}>
- si votre site est à la racine du serveur, mettez '/index.php',
- sinon '/nomdudossier/index.php'
- Si vous avez des difficultés à trouver le chemin, insérer <{$smarty.server.PHP_SELF}> en première ligne de ce fichier et les informations s'afficheront, puis retirer la ligne et les commentaires pour des questions de sécurité
- vous pouvez désactiver ou activer les différents fichiers (en include) ou zone du thème (colonnes droite et gauche, blocs hauts et bas) en modifiant les valeurs dans le fichier xo_thm_parameters.html
NOTE 3 : vous avez des 4 nouvelles balises smarty que vous pouvez utiliser avec ce thème
- <{$canvas_template}> affichera --> themes/nomdutheme/xotpl/xo_canvashtml ou themes/nomdutheme/modules/nomdumodule/xo_canvas.html si ce fichier est surchargé
- <{$parameters_template}> affichera --> theme/nomdutheme/xotpl/xo_thm_parameters.html ou themes/nomdutheme/modules/nomdumodule/xo_thm_parameters.html si ce fichier est surchargé
- <{$xoops_themeurl}> affichera -->  urldusite/themes/nomdutheme
- <{$xoops_module_theme}> affichera -->  nomdutheme/modules/nomdumodule
- <{$xoops_module_themeurl}> affichera -->  urldusite/themes/nomdutheme/modules/nomdumodule/
NOTE 4 : vous avez dans le dossier "extras", 14 fichiers "xo_page.html" afin de modifier la position des colonnes de blocs et de contenus