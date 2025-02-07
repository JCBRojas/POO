<?php
require_once '../../models/usuario.php';

class UsuarioController{

    public static function index(){
        $usuarioModel = new Usuario(); // se conecta al modelo Usuario(model/usuario.php)
        $usuarios = $usuarioModel->getAll();
        return $usuarios;
    }

    public static function show(){
        $id = $_GET['id']; // Obtenemos el id del usuario a buscar en la etiqueta ( <a>editar</a> ) en el archivo usuarios/index.php
        $usuarioModel = new Usuario(); // se conecta al modelo Usuario(model/usuario.php)
        $usuario = $usuarioModel->getUserById($id); // ejecuta el metodo getUserById() del modelo model/usuario.php
        return $usuario;
    }

    public static function store(){
        /**
         * se almacenan los datos en variables
         * se encripta la contraseña
         */
        $nombre = $_POST['nombres'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $usuarioModel = new Usuario();// se conecta al modelo Usuario(model/usuario.php)
        $result = $usuarioModel->crear($nombre, $email, $password); // se le envian los datos al Modelo para que se registren en la DB
       
        if($result){ // si existe $result significa que el registro fue exitoso
            header('location:index.php'); // se redirecciona al index
        }else{
            //si no existe $result significa que tenemos un error en nuesta sentencia o no le estamos enviando los parametros correctos al modelo
            header('location:crear.php');
        }
    }

    public static function update(){
        $nombre = $_POST['nombres'];
        $email = $_POST['email'];
        $id = $_POST['id'];

        $usuarioModel = new Usuario();// se conecta al modelo Usuario(model/usuario.php)
        $result = $usuarioModel->actualizar($id, $nombre, $email); // se envia el id del usuario a validar y los campos que necesitamos actualizar
        if($result){
            header('location:index.php');// se redirecciona al index
        }else{
            //si no existe $result significa que tenemos un error en nuesta sentencia o no le estamos enviando los parametros correctos al modelo
            echo "error en la sentencia";
        }
    }

    public static function destroy(){
        $id = $_GET['id'];

        $usuarioModel = new Usuario();// se conecta al modelo Usuario(model/usuario.php)
        $result = $usuarioModel->eliminar($id);
        if($result){
            header('location:index.php');
        }else{
            echo "error en la sentencia eliminar";
        }
    }

}