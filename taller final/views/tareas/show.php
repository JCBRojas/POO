<?php
    session_start();
    require_once '../../controllers/tareaController.php';   // controlador para tareas
    require_once '../../controllers/comentarioController.php';  // controlador para comentarios
    $tarea = TareaController::show(); // Consulta la tarea seleccionada
    $comentarios = ComentarioController::show(); // consulta los comentarios de la tarea seleccionada
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: #eff2f4;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
    }
    .contenedor{
        margin:auto;
        width: 40%;
        padding:10px 20px;
        background-color: white;
    }
    .comentarios{
        padding:0px 8px 10px 0px;
    }
    small{
        font-size: 12px;
        color: #92999f;
        display: block;
    }
    p{
        margin: 2px;
        color: #393939;
    }
    .badge{
        background-color: orange;
        border-radius: 5px;
        padding: 2px 3px;
        color:rgb(43, 43, 43);
        font-size: 14px;
        font-weight: bold;
    }
</style>
<body>
<div class="contenedor">
    <a href="index.php">Atras</a>
    <!-- Imprime los datos de la tarea seleccionada  -->
    <h1>Tarea </h1> 
    <h3><?=$tarea['descripcion']?> </h3> 
    <p>fecha:  <?=$tarea['fecha_creacion']?>  </p>
    <p>vencimiento: <?=$tarea['fecha_vencimiento']?> </p>
    <p>estado: <span class="badge"> <?=$tarea['estado']?> </span> </p>
    <p>categorias: <?=$tarea['categoria']?>  </p>

    <div class="comentarios">
        <br>

     <form action="../comentarios/store.php" method="post"> <!-- se envia al archivo store.php para ejecutar el controlador de comentarioController -->
        <input type="text" name="comentario" id="comentario" placeholder="Agregar comentario">
        <input type="hidden" name="tarea_id" id="tarea_id" value="<?=$tarea['id'];?>">
        <!-- 
            se envía el id de la tarea oculto y el comentario que ingresa el usuario
            el boton para enviar es opcional, solo escribiendo el comentario y presionar enter se envia la información
            el dato de la fecha y el id del usuario se va a enviar automaticamente en el Modelo del comentario(Models/comentario.php) en la funcion: crearComentario()
          -->
    </form>

    <h4>comentarios</h4>
        <?php   foreach($comentarios as $comentario): ?>

            <!-- Imprime todos los comentarios que tenga ela tarea seleccionada con la fecha en que se creo el comentario -->

            <small><?=$comentario['fecha']?> :  <?=$comentario['comentario']?></small>

        <?php endforeach; ?>
    </div>
    


</div>

</body>
</html>