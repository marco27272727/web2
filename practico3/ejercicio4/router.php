<?php 
require_once 'app/task.php';

define('BASE_URL','//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'listar'; //accion por defecto
if (!empty($_GET['action'])){
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]){
    case 'listar':
        showPayments();
        break;
    case 'agregar':
        addRecord();
        break;
    default:
        echo "404 page not found";
        break;
}