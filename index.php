<?php
require_once './controllers/controllers.php';
$pdo = pdo_connect();
/**
 * ROUTAGE / routing
 */
if (!isset($_REQUEST['command']))
{
    login();   
}
else
{
    switch ($_REQUEST['command']) {
        case 'login':
            # code...
            break;
        case 'register':
            createUser($pdo);
            break;
        case 'create-actu':
            break;
        case 'list-actus':
            break;
        case 'afficher-actu':
            break;
        default:
            # code...
            break;
    }
}
