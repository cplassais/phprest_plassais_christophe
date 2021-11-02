<?php
const SERVER_NAME = 'localhost';
const DB_NAME = 'student';
const DB_USER = 'student';
const DB_PASS = 'student';
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
        case 'jsonsubject':
            include 'controllers/subject/jsonSubjectController.php';
            break;
        case 'subjectlist':
            include 'index.php';
            include 'controllers/subject/subjectListController.php';
            break;
        case 'subjectsingle':
            include 'index.php';
            include 'controllers/subject/subjectSingleController.php';
            break;
        case 'subjectupdate':
            include 'index.php';
            include 'controllers/subject/subjectUpdateController.php';
            break;
        case 'subjectdelete':
            include 'index.php';
            include 'controllers/subject/subjectDeleteController.php';
            break;
        case 'subjectadd':
            include 'index.php';
            include 'controllers/subject/subjectAddController.php';
            break;
        case 'subjectduplicate':
            include 'index.php';
            include 'controllers/subject/subjectDuplicateController.php';
            break;
        default:
            include 'index.php';
            include 'controllers/errorPageController.php';
    }
} catch (Exception $e) {
    include 'controllers/errorController.php';
}

