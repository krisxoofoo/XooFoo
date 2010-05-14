<?php
if (file_exists("mainfile.php")) {
include("mainfile.php");
} elseif (file_exists("../mainfile.php")) {
include("../mainfile.php");
} else { 
include("../../mainfile.php");
}
include(XOOPS_ROOT_PATH."/header.php");
$xoopsTpl->assign( 'xoops_showrblock', 0); // 1 = Avec blocs de droite - 0 = Sans blocs de droite
$xoopsTpl->assign( 'xoops_showlblock', 0); // 1 = Avec blocs de gauche - 0 = Sans blocs de gauche

//Votre code php si vous devez en intégrer

?>

Votre texte et/ou code html sans les balises html, head, title et 
body celles ci étant déja générées elles se retrouveraient en double... .. .

<?php
$xoopsTpl->assign('xoops_pagetitle', 'le titre de ma page pour le référencement');
include(XOOPS_ROOT_PATH."/footer.php");
?>
