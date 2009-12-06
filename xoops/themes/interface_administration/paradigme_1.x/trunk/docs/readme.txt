/* $Id$ */

/****** english ******/ 
To view the blocks in the cpanel: 
- Install the plugin smarty function.block.php (http://www.xuups.com/modules/publisher/item.php?itemid=10) in root/class/smarty/xoops_plugins/
- Copy the file xo_block.html to "extras" in "xotpl" 
- Remove the comments to activate the template xo_block.html 
- Edit the template xo_block.html and put Id number of blocks you wish to display

/****** french ******/
Pour afficher des blocs dans le cpanel :
- installer le plugin smarty function.block.php (http://www.xuups.com/modules/publisher/item.php?itemid=10) dans root/class/smarty/xoops_plugins/
- copier le fichier xo_block.html du dossier "extras" dans "xotpl"
- retirer les commentaires pour activer le template xo_block.html
- éditer le template xo_block.html et saissisez le numéro des blocs que vous désirez afficher


ATTENTION :
Si vous rencontrez des problèmes (page blanche, problème de menu déroulant) avec cette interface d'administration, mettez en commentaires les lignes 243 à 245 du fichier paradigme.php, comme ceci :

                //$rtn['url'] = XOOPS_URL . '/modules/'. $mod->getVar('dirname', 'n') . '/'; //add for sub menus
                //$modOptions = $mod->getAdminMenu();                                        //add for sub menus
                //$rtn['options'] = $modOptions;                                             //add for sub menus