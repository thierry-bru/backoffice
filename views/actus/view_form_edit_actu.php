<?php
$title="Back-office Connexion";
$css= ' <link rel="stylesheet" href="styleConnexion.css">';
$menu= true;

ob_start();
?>
<form method="POST">
    <input type="hidden" name="command" value="update-actu">
    <input type="hidden" name="id" value="<?=$actu->getId()?>">
    <input type="text" name="titre" id="titre" value="<?=$actu->titre?>">
    <textarea name="sujet" id="sujet" cols="30" rows="10"><?=$actu->sujet?></textarea>
    <select name="etat" id="etat">
        <option value="0" <?=$actu->isSelected(0)?>>Brouillon</option>
        <option value="1"<?=$actu->isSelected(1)?>>Publié</option>
        <option value="2"<?=$actu->isSelected(2)?>>Supprimé</option>
    </select>
    <button>Sauvegarder</button>
</form>
<?php
$content= ob_get_clean();
require_once './views/base.php';
?>