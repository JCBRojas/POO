<?php

require_once "../../models/tarea.php";

class TareaController{

    public static function index(){
        $tareaModel = new Tareas();
        return $tareaModel->getAll();
    }

    public static function show(){
        $id = $_GET['id'];
        $tareaModel = new Tareas();
        return $tareaModel->getTareasById($id);
    }

    public static function store(){
        $descripcion = $_POST['descripcion'];
        $fecha_creacion = $_POST['fecha_creacion'];
        $fecha_vencimiento = $_POST['fecha_vencimiento'];
        $estado = $_POST['estado'];
        $categoria = $_POST['categoria'];
        $user_id = $_POST['user_id'];

        $tareaModel = new Tareas();
        $result = $tareaModel->crear($descripcion,$fecha_creacion,$fecha_vencimiento,$estado,$categoria,$user_id);
        if($result){
            header('location:index.php');
        }
        else{
            echo "Error en el insertar";
        }
    }

}