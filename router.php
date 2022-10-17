<?php
require_once 'controllers/juegosController.php';
require_once 'controllers/userController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);
    
$juegosController = new juegosController();
$userController = new userController();



switch ($params[0]) {
    case 'home':
        $juegosController->showHome();
        break;
    case 'juego':
        $juegosController->viewJuego($params[1]);
        break;
    case 'createGame':
        $juegosController->createGame();
        break;
    case 'deleteGame':
        $juegosController->deleteGame($params[1]);
        break;
    case 'editView':
        $juegosController->editWindow($params[1]);
        break;
    case 'editGame':
        $juegosController->editGame($params[1]);
        break;
    case 'showCategories':
        $juegosController->showCategories();
        break;
    case 'login':
        $userController->logIn();
        break;
    case 'verify':
        $userController->verifyUser();
        break; 
    case 'logout':
        $userController->logOut();
        break;      

    default:
        echo "404 not found";
        break;
}