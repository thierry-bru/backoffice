
<?php
$title="Back-office ERROR";
$css= ' <link rel="stylesheet" href="styleConnexion.css">';
$menu= true;

ob_start();
?>
Erreur: <?=$msgErreur?>

<?php
$content= ob_get_clean();
require_once './views/base.php';
?>