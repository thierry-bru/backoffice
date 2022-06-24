<?php
require_once './controllers/controllers.php';

session_start();
/**
 * ROUTAGE / routing
 */
//Utilisateur non connecté
if (!isset($_SESSION['isConnected'])|| !$_SESSION['isConnected'])
    login();

if (!isset($_REQUEST['command']))
{   
    afficherListeActus();
}
else
{
    switch ($_REQUEST['command']) {
        case 'login':
            if (isset($_SESSION['isConnected']) &&($_SESSION['isConnected']))
                afficherListeActus();
            else
                login();   
            break;
        case 'register':
            createUser();
            break;
        case 'create-actu':
            creerActu();
            break;
        case 'list-actus':
            afficherListeActus();
            break;
        case 'afficher-actu':
            afficherUneActu();
            break;
        case 'update-actu':
                modifierUneActu();
                break;
        case 'logout':
            logout();
            break;
        default:
            # code...
            break;
    }
}
