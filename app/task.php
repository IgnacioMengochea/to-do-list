<?php
require_once './app/db.php';

function showTask(){
    require_once 'templates/header.php';

    $tasks = getTasks();
    require 'templates/form_alta.php';
    ?>
    <ul class="list-group">
    <?php foreach($tasks as $task){ ?>
        <li class="list-group-item">
            <b><?php echo $task ->titulo; ?></b> | (Prioridad <?php echo $task ->prioridad?>)
        </li>
    <?php } ?>

    </ul>
    
    <?php
    require_once 'templates/footer.php';
}

function addTask(){

    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];

    $id = insertTask($title, $description, $priority);    
    
    if($id){
        header('Location: /agregar');
    }else{
        echo "Error al insertar la tarea...";
    }
    

}
