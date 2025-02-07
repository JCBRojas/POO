<?php

class Conexion {

    protected $db = 'mvc_example';
    protected $server = 'localhost';
    protected $user = 'root';
    protected $password = 'root';
    protected $conexion;

    public function __construct()
    {
        $this->conexion = new mysqli($this->server, $this->user, $this->password, $this->db); // conexion a la base de datos
        if($this->conexion->connect_error){
            // imprime error si encuentra fallas en la conexion
            die("Error en la conexión" . $this->conexion->connect_error );
        }
    }


}
