<?php
require_once '../../config/config.php';

class Tareas extends Conexion{

    public function getAll(){
        $sql = "SELECT tareas.id, tareas.descripcion, tareas.fecha_creacion, tareas.fecha_vencimiento, tareas.estado,
                categorias.nombre as categoria,
                usuarios.nombre as nombre_usuario, usuarios.email
                FROM tareas 
                INNER JOIN categorias ON categorias.id = tareas.categoria_id
                INNER JOIN usuarios ON usuarios.id = tareas.usuario_id
                ";
                $result = $this->conexion->query($sql);
                return $result->fetch_all(MYSQLI_ASSOC);

    }

    public function getTareasById($id){
        $sql = "SELECT tareas.id, tareas.descripcion, tareas.fecha_creacion, tareas.fecha_vencimiento, tareas.estado,
                categorias.nombre as categoria,
                usuarios.nombre as nombre_usuario, usuarios.email
                FROM tareas 
                INNER JOIN categorias ON categorias.id = tareas.categoria_id
                INNER JOIN usuarios ON usuarios.id = tareas.usuario_id

                WHERE tareas.id = $id
                ";
                $result = $this->conexion->query($sql);
                return $result->fetch_assoc();
    }

    public function crear($descripcion,$fecha_creacion,$fecha_vencimiento,$estado,$categoria,  $user_id){
        $sql = "INSERT INTO tareas VALUES(
        null,'$user_id','$descripcion','$fecha_creacion','$fecha_vencimiento','$estado','$categoria' 
        ) ";
        return $this->conexion->query($sql);
    }


}