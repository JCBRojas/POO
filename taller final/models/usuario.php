<?php
require_once '../../config/config.php';

class Usuario extends Conexion{

    public function getAll(){
        $sql = "SELECT * FROM usuarios";    // Sentencia SQL
        $result = $this->conexion->query($sql); // Ejecuta la sentencia SQL
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

    public function getUserById($id){ // es la misma ruta SHOW($id)
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $result = $this->conexion->query($sql);
        return $result->fetch_assoc(); // fetch_object()  = fetch_assoc esta opcion es mejor para trabajar los datos con [] ejemplo: $result['nombres'] y no $result->nombres
                        //nos permite utilizar tanto el foreach() como el fetch_assoc() con ($result['nombres'])
                        // retornamos el resultado para utilizarlo en el controlador y mostrarlo en la vista
    }

    public function crear($nombre, $email, $password){ // es la misma ruta STORE($request)
        $sql = "INSERT INTO usuarios VALUES (null, '$nombre', '$email', '$password') ";
        return $this->conexion->query($sql) ; // se ejecuta la sentencia SQL y se retorna al controlador para mostrar un mensaje personaliado
        //  return $sql;
    }

    public function actualizar($id, $nombre, $email){
        $sql = "UPDATE usuarios SET nombre = '$nombre', email = '$email' WHERE id = $id ";
        return $this->conexion->query($sql);// se ejecuta la sentencia SQL y se retorna al controlador para mostrar un mensaje personaliado
    }

    public function eliminar($id){
        $sql = "DELETE FROM usuarios WHERE id = $id";
        return $this->conexion->query($sql);
    }

}

/***
 * Cuándo usar fetch_all(MYSQLI_ASSOC)?
 *  Cuando esperas que tu consulta retorne varios registros (más de una fila).
 * 
 */
    

   