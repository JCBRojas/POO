<?php
    require_once '../../controllers/UsuarioController.php';
    $listaUsuarios = UsuarioController::index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de usuarios</h1>

    <a href="crear.php">Registar usuario</a><br><br>


    <table border="1">
    <thead>
        <th>Nombres</th>
        <th>Correo</th>
        <th>edit</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
    <?php foreach($listaUsuarios as $usuarios):  ?>
       <tr>
        <td> <?=$usuarios['nombre']?><br></td>
        <td> <?=$usuarios['email']?><br></td>
        <td> <a href="editar.php?id=<?=$usuarios['id']?>">editar</a> </td> <!-- se le envia al controlador el id del usuario a editar    -->
        <td> <a href="eliminar.php?id=<?=$usuarios['id']?>">eliminar</a> </td><!-- se le envia al controlador el id del usuario a eliminar   -->
       </tr>

    <?php endforeach;  ?>
    </tbody>
    </table>
</body>
</html>