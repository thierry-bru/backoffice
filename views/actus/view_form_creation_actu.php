<?php
$title="Back-office Connexion";
$css= ' <link rel="stylesheet" href="styleConnexion.css">';
ob_start();
?>
<form method="POST">
    <input type="hidden" name="command" value="create-actu">
    <input type="text" name="titre" id="titre" placeholder="Titre de l'actualité">
    <textarea name="sujet" id="sujet" cols="30" rows="10"></textarea>
    <button>Créer</button>
</form>
<?php
$content= ob_get_clean();
require_once './views/base.php';
?>