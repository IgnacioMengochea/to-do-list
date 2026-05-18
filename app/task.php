<?php
require_once './app/db.php';

function showTask(){
    require_once 'templates/header.php';

    $tasks = getTasks();
    require 'templates/form_alta.php';
    ?>
    <ul class="list-group">
    <?php foreach($tasks as $task){ ?>
        <li class="list-group-item item-task">
            <div>
            <b><?php echo $task ->titulo; ?></b> | (Prioridad <?php echo $task ->prioridad?>)
            </div>
            <div class="action">
                <a href="eliminar/<?php echo $task->$id ?>" type="button" class='btn btn-danger ml-auto' >Borrar</a>
            </div>
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
        header('Location: ./listar');
    }else{
        echo "Error al insertar la tarea...";
    }
    

}

function removeTask($id){
    deleteTask($id);
    header('Location: ./listar');
}
