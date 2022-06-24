<?php
$title="Back-office Connexion";
$css= ' <link rel="stylesheet" href="styleConnexion.css">';
$menu= true;
ob_start();
?>


<?php
if (isset($actus) && $actus && (count($actus)>0))
{


    foreach ($actus as $actu)
    {
        ?>
        <div class="col-2 card-group">
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h2 class="card-title"><?=$actu['titre']?></h2>
    <p class="card-text"><?=$actu['sujet']?></p>
    <a href="index.php?command=afficher-actu&id=<?=$actu['id']?>" class="btn btn-primary"> Details</a>
    <a href="index.php?command=update-actu&id=<?=$actu['id']?>" class="btn btn-primary">Editer</a>
  </div>
</div>
        </div>
    <?php
    }
}
else
echo "pas d actu";

$content= ob_get_clean();
require_once './views/base.php';
?>