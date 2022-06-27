<?php
require_once './models/models.php';
require_once './database/database.php';

function creerActu()
{
    if ((!isset($_POST['sujet']))||(!isset($_POST['titre'])))
        require_once './views/actus/view_form_creation_actu.php';
        else
        {
            $actu = new Actu($_POST['sujet'],$_POST['titre'],0);
            ActuDataBase::create($actu);
        }
        header("location:index.php");
}

function afficherListeActus()
{
    var_dump($_SESSION);
    if (isset($_SESSION['isAdmin'])&&($_SESSION['isAdmin']))
        $actus = ActuDataBase::listAll();
        else
        $actus = ActuDataBase::list(1);
    require_once './views/actus/view_afficher_list_actus.php';
}
function afficherUneActu()
{
    if (!isset($_GET['id']))
        require_once './views/actus/view_afficher_list_actus.php';
    else
    {

        $actu = ActuDataBase::read($_GET['id']);
        if ($actu)
            require_once './views/actus/view_afficher_actu.php';
        else
        {
            require_once './views/actus/view_afficher_list_actus.php'; 
        }
    }
}
function modifierUneActu()
{
    if (!isset($_GET['id']))
        require_once './views/actus/view_afficher_list_actus.php';
    else
    {
        if ((!isset($_POST['sujet']))||(!isset($_POST['titre']))||(!isset($_POST['etat'])))
        {
            $actu = ActuDataBase::read($_GET['id']);
            if ($actu)
            
                require_once './views/actus/view_form_edit_actu.php';
            else
            {
                require_once './views/actus/view_afficher_list_actus.php'; 
            }
        }
        else
        {
            $actu = new Actu($_POST['sujet'],$_POST['titre'],$_POST['etat'],$_POST['id']);
            ActuDataBase::update($actu);
            require_once './views/actus/view_edit_success.php'; 
        }
       
    }
}
?>