<?php
require_once './app/db.php';

function showTask(){
    require_once 'templates/header.php';

    $tasks = getTasks();
    
    foreach($tasks as $task){
        echo $task ->titulo;
    }

    require_once 'templates/footer.php';
}
