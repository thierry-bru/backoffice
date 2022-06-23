<?php
$title="Back-office Connexion";
$css= ' <link rel="stylesheet" href="styleConnexion.css">';
ob_start();
?>

<?php
$content= ob_get_clean();
require_once './views/base.php';
?>