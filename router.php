<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'app/task.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'listar';
if(!empty($_GET['action'])){
    $action = $_GET['action'];
}

$params = explode('/' , $action);

switch($params[0]){
    case'listar':
        getTasks();
        break;

    default:   
        echo"Error 404";
        break;
}