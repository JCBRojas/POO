<?php

require_once "../../models/comentario.php";

class ComentarioController{

    public static function show(){  // Muestra todos los comentarios que tiene la tarea por el campo tarea_id
        $tarea_id = $_GET['id']; // recive del index el id de la tarea para consultarlo en la tabla comentarios (tareas/index.php)

        $comentarioModel = new Comentario();
        return $comentarioModel->getCommentByIdTarea($tarea_id); // retorna todos los comentarios encontrados de esa tarea_id
         
    }

    public static function store(){     // registra el comentario en la tabla comentarios
        $comentario = $_POST['comentario'];
        $tarea_id = $_POST['tarea_id'];
        $comentarioModel = new Comentario();
        $result =  $comentarioModel->crearComentario($comentario, $tarea_id); // se le envia solo el comentario y el id de la tarea
                                                                            // el user_id y la fecha se envían automaticamente

        if($result){
            header("location:../tareas/show.php?id=$tarea_id"); //  se redirecciona a la tarea donde se creo el comentario
                                                                // se le envía tambien el id que tenia esa tarea
                                                                // la ruta SHOW($id) siempre recive un parametro por eso se le envía el id de la tarea
        }
        
    }

}