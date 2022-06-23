<?php
require_once './models/models.php';
require_once './database/database.php';

function creerActu($pdo)
{
    if ((!isset($_POST['sujet']))||(!isset($_POST['titre'])))
        require_once './views/actus/view_form_creation_actu.php';
        else
        {
            $actu = new Actu($_POST['sujet'],$_POST['titre'],0);
            ActuDataBase::create($pdo,$actu);
            
        }
}

function afficherListeActus($pdo)
{
    $actus = ActuDataBase::listAll($pdo);
    require_once './views/actus/view_afficher_list_actus.php';
}
function afficherUneActu($numeroActu)
{

}
?>