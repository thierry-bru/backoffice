<?php
require_once './models/models.php';
require_once './database/database.php';


    function createUser($pdo)
    {
        if (!isset($_POST['pseudo']))
            require_once './../backoffice/views/users/view_form_inscription.php';
        else
        {
          //  var_dump($_POST);
            $user = new User($_POST['pseudo'],$_POST['email'],$_POST['password'],0);
            
           // $userDB = new UserDataBase();
            //$userDB->create($pdo,$user);
            UserDataBase::create($pdo,$user);
            require_once './views/users/view_user_create.php';
        }
    }

    function login()
    {
        require_once './../views/users/view_form_connexion.php';
    }
?>