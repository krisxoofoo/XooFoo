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
D�compressez l'archive et t�l�verser l'ensemble des dossiers et fichiers directement dans le dossier 'modules/system/class/gui/' de votre site

NOTA 1 : pour afficher des blocs dans le cpanel :
- installer le plugin smarty function.block.php (http://www.xuups.com/modules/publisher/item.php?itemid=10) dans root/class/smarty/xoops_plugins/
- �diter le template xo_block.html et saissisez le num�ro des blocs que vous d�sirez afficher
NOTA 2 : vous pouvez d�sactiver ou activer les diff�rents fichiers (en include) du th�me en modifiant les valeurs dans le fichier xo_parameters.html

ATTENTION :
Si vous rencontrez des probl�mes (page blanche, probl�me de menu d�roulant) avec cette interface d'administration, mettez en commentaires les lignes 243 � 245 du fichier zetadigme.php, comme ceci :

                //$rtn['url'] = XOOPS_URL . '/modules/'. $mod->getVar('dirname', 'n') . '/'; //add for sub menus
                //$modOptions = $mod->getAdminMenu();                                        //add for sub menus
                //$rtn['options'] = $modOptions;                                             //add for sub menus