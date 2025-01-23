<?php
require_once '../../controllers/UsuarioController.php';
$usuario = UsuarioController::show();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    button, input{
        display: block;
        padding: 5px 10px;
    }
</style>
<body>
    <h1>Editar Usuario</h1>
    <form method="post" action="actualizar.php">
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" id="nombres" value="<?=$usuario['nombre']?>">
        <label for="email">Correo</label>
        <input type="email" name="email" id="email" value="<?=$usuario['email']?>">
        <br>
        <input type="hidden" name="id" value="<?=$usuario['id']?>">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>