<?php

include_once('../config/config.php');
include('../config/database.php');

class usuario{

    public $conexion;

    function __construct()

    {
        $db = new database();
        $this->conexion = $db->connectToDatabase();
    }

    function save($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
        $observaciones = $params['observaciones'];
        $empresa = $params['empresa'];
        $fecha = $params['fecha'];
        $imagen = $params['imagen'];

        $insert = "INSERT INTO usuarios VALUES (NULL, '$nombres', '$apellidos', '$email', $celular, '$observaciones', '$empresa', '$imagen', '$fecha' )"; 

        return mysqli_query($this->conexion, $insert);


    }

  function getAll(){
    $sql = "SELECT * FROM usuarios ORDER BY fecha ASC";
    return mysqli_query($this->conexion, $sql);
  }

  function getOne($id)
  {

    $sql = "SELECT * FROM usuarios WHERE id = $id";
    return mysqli_query($this->conexion, $sql);


  }

  function update($params){

        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
        $observaciones = $params['observaciones'];
        $empresa = $params['empresa'];
        $fecha = $params['fecha'];
        $imagen = $params['imagen'];
        $id = $params['id'];


        $update = " UPDATE usuarios SET nombres='$nombres', apellidos='$apellidos', email='$email', celular=$celular, observaciones='$observaciones', empresa='$empresa', fecha='$fecha', imagen='$imagen' WHERE id=$id ";

        return mysqli_query($this->conexion, $update);



  }

  function delete($id){
  $delete = "DELETE FROM usuarios WHERE id = $id";
  return mysqli_query($this->conexion, $delete);
}

}
 



?>