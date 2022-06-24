list actu
<?php
$title="Back-office Success";
$css= ' <link rel="stylesheet" href="styleConnexion.css">';
$menu= true;
ob_start();
?>
Mise à jour réussie: <?=$actu->titre?>/<?=$actu->etat?>
<a href="index.php?command=create-actu">create-actu</a><br>
<a href="index.php?command=list-actus">toutes les actus</a>

<?php

echo "pas d actu";

$content= ob_get_clean();
require_once './views/base.php';
?>