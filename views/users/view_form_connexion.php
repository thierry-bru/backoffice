
<?php
$title="Back-office Connexion";
$css= ' <link rel="stylesheet" href="styleConnexion.css">';
$menu= false;

ob_start();
?>
<form method="POST">
 <div class="container">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/backoffice/assets/images/taking-notes.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Connexion</h5>
    <p class="card-text">
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email">
        l<abel for="password">Mot de passe</label>
        <input class="form-control" type="password" name="password" id="password">
    </p>
    <button class="btn btn-primary">Connecter</button>
    <a href="index.php?command=register" class="btn btn-secondary">Créer un compte</a>
  </div>
</div>
    </form>
</div>
<?php
$content= ob_get_clean();
require_once './views/base.php';
?>