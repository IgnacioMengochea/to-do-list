<?php
    function getTasks(){
        $db = new PDO('mysql:host=localhost;dbname=db_todolist;charset=utf8','root','');
        $query = $db->prepare('SELECT * FROM tareas');
        $query->execute();

        $tasks = $query->fetchAll(PDO::FETCH_OBJ);

        return $tasks;
    } 
?>