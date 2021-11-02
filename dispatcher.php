<?php
const SERVER_NAME = 'localhost';
const DB_NAME = 'rentacar';
const DB_USER = 'MYSQL_USER';
const DB_PASS = 'MYSQL_PASSWORD';
try {
    spl_autoload_register(function ($Class) {
        require_once 'models/' . $Class . '.php';
    });

    $dbc = new Db(SERVER_NAME, DB_NAME, DB_USER, DB_PASS);
    if (!isset($dbc)):
        throw new Exception('Impossible de se connecter !');
    endif;
//    include 'index.php';
    $aParamsURL = explode('/', $_SERVER['REQUEST_URI']);
    switch ($aParamsURL[1]) {
        case 'jsoncar':
            include 'controllers/jsonCarController.php';
            break;
        case 'carlist':
            include 'index.php';
            include 'controllers/carListController.php';
            break;
        case 'carsingle':
            include 'controllers/carSingleController.php';
            break;
        case 'carupdate':
            include 'index.php';
            include 'controllers/carUpdateController.php';
            break;
        case 'cardelete':
            include 'index.php';
            include 'controllers/carDeleteController.php';
            break;
        case 'caradd':
            include 'index.php';
            include 'controllers/carAddController.php';
            break;
        default:
            include 'index.php';
            include 'controllers/errorPageController.php';
    }
} catch (Exception $e) {
    include 'controllers/errorController.php';
}

