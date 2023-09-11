<?php

require_once 'Task.php'; 

// define('BASE_URL','//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// tabla de ruteo
// home -> showTask()
// tabla -> tablaMultiplicar($num)

$action = 'home'; // accion por defecto
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}

// parsea la accion para separar accion real de parametros
$params = explode('/', $action);

switch ($params[0]){
    case 'home':
        showTask();
        break;
    case 'tabla':
        tablaMultiplicar($params[1]);
        break;
    default:
        echo "404 Page Not Found";
}