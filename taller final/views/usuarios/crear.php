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
    <h1>Registrar Usuario</h1>
    <form action="store.php" method="post">
        <label for="nombres">nombres</label>
        <input type="text" name="nombres" id="nombres">
        <label for="email">email</label>
        <input type="email" name="email" id="email">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>