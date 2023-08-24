<?php

/*
Conexion directa con la base de datos 
*/
class database{
    public $host = 'localhost';//SERVIDOR
    public $user = 'root';//USUARIO PHP MYADMIN
    public $pass = '';//CONTRASEÑA PHP MYADMIN
    public $db = 'transportes';//BASE DE DATOS
    public $conexion;

    function connectToDatabase(){
        $this->conexion = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if(mysqli_connect_error()){
            echo 'error de conexion' . mysqli_connect_error(); 

        }

        return $this->conexion;
    }


}


?>
