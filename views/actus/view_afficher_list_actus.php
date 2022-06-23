list actu
<?php
$title="Back-office Connexion";
$css= ' <link rel="stylesheet" href="styleConnexion.css">';
ob_start();
?>
<a href="index.php?command=create-actu">create-actu</a><br>

<?php
if ($actus && (($actus->rowCount())>0))
{
    foreach ($actus as $actu)
    {
        ?>
<?=$actu['text']?>

    <?php
    }
}
else
echo "pas d actu";

$content= ob_get_clean();
require_once './views/base.php';
?>