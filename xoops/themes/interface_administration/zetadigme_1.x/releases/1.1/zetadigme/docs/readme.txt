/* $Id: readme.txt 106 2010-01-11 14:30:02Z kris_fr $ */

/****** english ******/ 
Installation:
Decompress the file and upload the whole of the files and files directly to folder 'modules/system/class/gui/' of your site

NOTA 1: To view the blocks in the cpanel: 
- Install the plugin smarty function.block.php (http://www.xuups.com/modules/publisher/item.php?itemid=10) in root/class/smarty/xoops_plugins/
- Edit the template xo_block.html and put Id number of blocks you wish to display
NOTA 2: You can disable or enable different files (include) by changing the values in the file xo_parameters.html

/****** french ******/
Installation :
Décompressez l'archive et téléverser l'ensemble des dossiers et fichiers directement dans le dossier 'modules/system/class/gui/' de votre site

NOTA 1 : pour afficher des blocs dans le cpanel :
- installer le plugin smarty function.block.php (http://www.xuups.com/modules/publisher/item.php?itemid=10) dans root/class/smarty/xoops_plugins/
- éditer le template xo_block.html et saissisez le numéro des blocs que vous désirez afficher
NOTA 2 : vous pouvez désactiver ou activer les différents fichiers (en include) du thème en modifiant les valeurs dans le fichier xo_parameters.html

ATTENTION :
Si vous rencontrez des problèmes (page blanche, problème de menu déroulant) avec cette interface d'administration, mettez en commentaires les lignes 243 à 245 du fichier zetadigme.php, comme ceci :

                //$rtn['url'] = XOOPS_URL . '/modules/'. $mod->getVar('dirname', 'n') . '/'; //add for sub menus
                //$modOptions = $mod->getAdminMenu();                                        //add for sub menus
                //$rtn['options'] = $modOptions;                                             //add for sub menus