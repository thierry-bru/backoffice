<?php
$title="Back-office Connexion";
$css= ' <link rel="stylesheet" href="styleConnexion.css">';
$menu= true;

ob_start();
?>
le nouvel utilisateur <?=$user->pseudo?> a été créé
<?php
$content= ob_get_clean();
require_once './views/base.php';
?>