<?php

require_once "../../config/config.php";

class Comentario extends Conexion{


    public function getCommentByIdTarea($id){
        $sql = "SELECT * FROM comentarios WHERE tarea_id = $id "; // Consulta todos los comentario por el campo tarea_id
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function crearComentario($comentario, $tarea_id){

        /**
         * $_SESSION[user_id] es el id del usuario que inició sesion por lo tanto simpre tenemos acceso a este valor desde cualquier archivo
         * por esa razon no lo agregamos en el formulario (tareas/show.php) Line 61.
         * CURDATE() nos permite insertar en la base de datos la fecha actual en la que se inserta el registro en la base de datos. 
         * NO DEBE LLEVAR COMILLAS SIMPLES por que es un metodo propio de PHP
         * tampoco lo agregamos en el formulario (tareas/show.php) Line 61.
         */
        $sql = "INSERT INTO comentarios VALUES(
        NULL, '$tarea_id', '$_SESSION[user_id]', '$comentario', CURDATE()
        ) ";
        return $this->conexion->query($sql);
    }


}