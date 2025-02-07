<?php
session_start();
require_once "../../controllers/tareaController.php";
    $tasks = TareaController::index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>listado de tareas</h1>
<a href="crear.php">crear</a>
<br><br>
<table border="1">
        <thead>
            <th>Tarea</th>
            <th>fecha creacion</th>
            <th>vencimiento</th>
            <th>estado</th>
            <th>categoria</th>
            <th>ver</th>
        </thead>
        <tbody>
            <?php   foreach($tasks as $task):    ?>
                <tr>
                    <td><?=$task['descripcion']?></td>
                    <td><?=$task['fecha_creacion']?></td>
                    <td><?=$task['fecha_vencimiento']?></td>
                    <td><?=$task['estado']?></td>
                    <td><?=$task['categoria']?></td>
                    <td> <a href="show.php?id=<?=$task['id']?>">ver</a> </td>
                </tr>
            <?php   endforeach;    ?>
        </tbody>
</table>
    
</body>
</html>