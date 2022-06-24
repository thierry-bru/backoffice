<?php
$title="Back-office Connexion";
$css= ' <link rel="stylesheet" href="styleConnexion.css">';
$menu= true;

ob_start();
?>

<form method="POST">
<input type="hidden" name="command" value="create-actu">
  <div class="form-group">
    <label for="titre">Titre de l'actualité</label>
    <input type="text" class="form-control" id="titre" aria-describedby="emailHelp" placeholder="Donnez un titre à l'actualité">
    <small id="emailHelp" class="form-text text-muted">Donnez un titre explicite à cette actualité. Cela sera affiché dans la liste</small>
  </div>
  <div class="form-group">
    <label for="sujet">Actualité</label>
    <textarea class="form-control" name="sujet" id="sujet" cols="30" rows="10"></textarea>
 </div>
  <button type="submit" class="btn btn-primary">Créer</button>
</form>
<?php
$content= ob_get_clean();
require_once './views/base.php';
?>