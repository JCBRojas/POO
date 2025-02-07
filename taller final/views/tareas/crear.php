<?php
session_start();
$_SESSION['user_id'] = 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    button, input, select{
        display: block;
        padding: 5px 10px;
    }
</style>
<body>
    <h1>Registrar Tarea</h1>
    <form action="store.php" method="post">
        <label for="descripcion">descripcion</label>
        <input type="text" name="descripcion" id="descripcion">

        <label for="fecha_creacion">fecha creacion</label>
        <input type="text" name="fecha_creacion" id="fecha_creacion" value="<?=date('Y-m-d')?>">

        <label for="fecha_vencimiento">fecha vencimiento</label>
        <input type="date" name="fecha_vencimiento" id="fecha_vencimiento">

        <label for="estado">estado</label>
        <select name="estado" id="estado">
            <option value="pendiente">pendiente</option>
            <option value="progreso">progreso</option>
            <option value="completada">completada</option>
        </select>

        <label for="categoria">categoria</label>
        <select name="categoria" id="categoria">
            <option value="1">trabajo</option>
            <option value="2">personal</option>
            <option value="3">urgente</option>
        </select>

        <input type="hidden" name="user_id" value="<?=$_SESSION['user_id']?>">

        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>