
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include('../config/config.php');
include('usuario.php');

$p = new usuario();
$du = mysqli_fetch_object($p->getOne($_GET['id']));

$date = new DateTime($du->fecha);

if(isset($_POST) && !empty($_POST)){
$_POST ['imagen'] = $du->imagen;
if ($_FILES['imagen']['name'] !== '' ){
    $_POST['imagen'] = saveImage($_FILES);
} 


$update = $p->update($_POST);
if($update){
    $mensaje = '<div class="alert alert success" role="alert" > Sesion modificada con exito. </div>';
    
}else{
    $mensaje = '<div class="alert alert danger" role="alert" > Error! </div>';   
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Modificar Sesion </title>
<!-- conexion con boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<!-- conexion con css -->
<link rel="stylesheet" href="../css/styles.css">
<link rel="stylesheet" href="../css/mq.css">

</head>
<body>
<?php include('../menu.php')?>
    <div class="container">

        <?php

        if (isset($mensaje)){
            echo $mensaje;
        }

        ?>
        <h2 class="text-center mb-2">Modificar Solicitud</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="nombres" id="nombres" placeholder="nombres del usuario" class="form-control" value="<?= $du->nombres?>" >
                    <input type="hidden" name="id" value="<?= $du->id?>"/>
                </div>
                <div class="col">
                    <input type="text" name="apellidos" id="apellidos" placeholder="apellidos del usuario" class="form-control" value="<?= $du->apellidos?>"/>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <input type="email" name="email" id="email" placeholder="email del usuario" class="form-control" value="<?= $du->email?>"/>
                </div>
                <div class="col">
                    <input type="number" name="celular" id="celular" placeholder="celular del usuario" class="form-control" value="<?= $du->celular?>">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <textarea id="observaciones" name="observaciones" placeholder="observaciones del usuario" class="form-control" value="<?= $du->observaciones?>"></textarea>
                </div>
                <div class="col">
                    <input type="text" name="empresa" id="empresa" placeholder="empresa usuario" class="form-control" value="<?= $du->empresa?>">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <input type="datetime-local" name="fecha" id="fecha" class="form-control" value="<?= $date->format('Y-m-d\TH:i') ?>">
                </div>
                <div class="col">
                    <input type="file" name="imagen" id="imagen" class="form-control">
                </div>
            </div>
            <button class="btn btn-success">Modificar</button>
        </form>


    </div>

     <!-- Pie de pagina -->


     <section class="seccion7">
  <footer>
    <article class="texto7 article7">
      <address>Derechos reservados por David Rodriguez</address>
      <hr>
      <address>Universidad Iberoamericana</address>
      <hr>
      <address>Bogota - 2023 </address>
  </article>
    <div class="logos2">
      <ul type="none">
      <li><img class="logos1" src="../Imagenes/LOGO FACEBOOK.jpeg" alt=""></li>
      <li><img class="logos1" src="../Imagenes/LOGO INSTAGRAM.png" alt=""></li>
      <li><img class="logos1" src="../Imagenes/LOGO TWITTER.jpeg" alt=""></li>
      <li><img class="logos1" src="../Imagenes/LOGO WHATSAPP.png" alt=""></li>
      </ul>
    </div>
    <article class="texto8 article8">
      <address>Diplomado en desarrollo WEB</address>
      <hr>
      <address>ID Ibero: 100076609</address>
      <hr>
      <address>Copyrigth </address>
  </article>


</footer>
</section>

</body>
</html>