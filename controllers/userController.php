<?php
require_once './models/models.php';
require_once './database/database.php';


    function createUser()
    {
        if (!isset($_POST['pseudo']))
            require_once './views/users/view_form_inscription.php';
        else
        {
            $user = new User($_POST['pseudo'],$_POST['email'],$_POST['password'],0);
            
           // $userDB = new UserDataBase();
            //$userDB->create($pdo,$user);
            UserDataBase::create($user);
            require_once './views/users/view_user_create.php';
        }
    }

    function login()
    {

        if ((!isset($_POST['email'])||(!isset($_POST['password']))))
            require_once './views/users/view_form_connexion.php';
        else
        {
            $userConnected = UserDataBase::checkLogin($_POST['email'],$_POST['password']);
            if ($userConnected)
            {
                $_SESSION['isConnected']=true;
                $_SESSION['userID']= $userConnected->getId();
                $_SESSION['isAdmin']= $userConnected->isAdmin();
                $_SESSION['pseudo']= $userConnected->pseudo;
                require_once './views/actus/view_afficher_list_actus.php';
                ///Applications/MAMP/htdocs/backoffice/views/actus/view_afficher_list_actus.php
            }
            else
            {
                require_once './views/users/view_form_connexion.php';
            }

        }
    }
    function logout()
    {
        unset( $_SESSION['isConnected']);
        unset( $_SESSION['userID']);
        unset( $_SESSION['isAdmin']);
        unset( $_SESSION['pseudo']);
        
            require_once './views/users/view_form_connexion.php';
    }
?>