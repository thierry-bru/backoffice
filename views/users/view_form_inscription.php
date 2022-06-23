<?php
$title="Back-office Connexion";
$css= ' <link rel="stylesheet" href="styleConnexion.css">';
ob_start();
?>
<form method="POST">
    <input type="text" name="pseudo" id="pseudo">
    <input type="text" name="email" id="email">
    <input type="password" name="password" id="password">
    <button>s'inscrire</button>
</form>
<?php
$content= ob_get_clean();
require_once './views/base.php';
?>