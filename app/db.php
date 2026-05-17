<?php
    function getConection(){
        return new PDO('mysql:host=localhost;dbname=db_todolist;charset=utf8','root','');
    }
    
    function getTasks(){
        $db = getConection();
        $query = $db->prepare('SELECT * FROM tareas');
        $query->execute();

        $tasks = $query->fetchAll(PDO::FETCH_OBJ);

        return $tasks;
    } 

    function insertTask($title, $description, $priority){
        $db = getConection();

        $query = $db->prepare('INSERT INTO tareas(titulo, descripcion, prioridad) VALUES(?, ?, ?)');
        $query->execute([$title, $description, $priority]);

        return $db->lastInsertId();
    }
?>