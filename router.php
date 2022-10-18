<?php
require_once './controllers/streamingcontrollers.php';
require_once './controllers/pelicontrollers.php';
require_once './controllers/logincontrollers.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'home'; 

if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}


$params = explode('/', $action);


switch ($params[0]) {
    case 'login':
        $controllerLogin= new loginController();
        $controllerLogin->showLogin();
        break;
    case 'validate':
        $controllerLogin = new LoginController();
        $controllerLogin->validateUser();
        break;
    
    case 'logout':
        $controllerLogin = new loginController();
        $controllerLogin->logout();
        break;
            
    case 'home':
        $controller = new PeliController();
        $controller->showPeli();
        $controller = new StreamingController();
        $controller->showStreaming();    
        break;
    case 'agregar':
        $controller = new PeliController();
        $controller->addPeli();
        break;
    case 'delete':
        $controller = new PeliController();
        $id_peliculas = $params[1];
        $controller->deletePeli($id_peliculas);
        break;  
    default:
        echo('404 Page not found');
        break;
}
