list actu
<?php
$title="Back-office Connexion";
$css= ' <link rel="stylesheet" href="styleConnexion.css">';
$menu= true;

ob_start();
?>
<a href="index.php?command=create-actu">create-actu</a><br>

<?php
if (isset($actu) && $actu)
{?>
<h2><?=$actu->titre?></h2>
<p><?=$actu->sujet?></p>
<a href="index.php?command=list-actus">toutes les actus</a>
    <?php
}
else
echo "pas d actu";

$content= ob_get_clean();
require_once './views/base.php';
?>