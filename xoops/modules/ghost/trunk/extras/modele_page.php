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
?>
<html>
<head>
<title>Votre Titre</title>
<link href="<{$xoops_themecss}>" rel="stylesheet" type="text/css">
</head>
<body class="comments" width=98%>

*** ceci est un essai pour voir la feuille de style ***

</body>
</html>

<?php
$xoopsTpl->assign('xoops_pagetitle', 'le titre de ma page pour le référencement');
include(XOOPS_ROOT_PATH."/footer.php");
?>
