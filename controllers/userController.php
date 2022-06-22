<?php
    function createUser()
    {
        if (!isset($_POST['pseudo']))
            require_once './../backoffice/views/users/view_form_inscription.php';
        else
        {
            var_dump($_POST);
            $user = new User($_POST['pseudo'],$_POST['email'],$_POST['password'],0);
            echo "user:".$user;
        }
    }

    function login()
    {
        require_once './../backoffice/views/users/view_form_connexion.php';
    }
?>