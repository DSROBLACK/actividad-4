<?php 

include_once('../config/config.php');
include('usuario.php');

$p = new usuario();
$data = $p->getAll();

if( isset($_GET['id']) && !empty($_GET['id'])){
  $remove = $p->delete($_GET['id']);
  if($remove){
    header('Location: '.ROOT.'/usuario/index.php');

  }else{
    $mensaje = '<div class="alert alert-danger" role="alert"> Error al eliminar </div>';
  }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
    <!-- conexion con boostrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
<!-- conexion con css -->
<link rel="stylesheet" href="../css/styles.css">
<link rel="stylesheet" href="../css/mq.css">

</head>
<body>
<?php include('../menu.php')?>

<!-- Nombre de la pagina -->

<h1 class="titulo1">NUESTRA HISTORIA Y CERTIFICACIONES</h1>

<!-- Parte 2 de la pagina de Internet PAG3  -->
<section class="seccion6">

<article class="texto6 article6">
  <h1>Mision</h1>
  <p>Proveer un servicio ágil, eficiente y seguro, en el que los clientes disfruten de una atención personalizada transportes de calidad, con una gama amplia de rutas a nivel nacional y precios accesibles.</p>
</article>
  <img class="imagen4" src="../Imagenes/MISION.jpeg" alt="">
<article class="texto6 article6">
    <h1>Vision</h1>
    <p>Movernos hacia un crecimiento rentable permitiendo alcanzar rutas poco transitadas o de difícil acceso, dejando como prioridad la atención de calidad a nuestros clientes, responsabilidad y agilidad en los procesos.</p>
</article>
<img class="imagen5" src="../Imagenes/VISION.png" alt="">
<hr> 

<!-- pendiente por terminar esta seccion -->
<section>
  <div class="card cartas1" style="width: 18rem;">
    <iframe width="286" height="315" src="https://www.youtube.com/embed/iM7gUJ75_8w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="card-body">
      <h5 class="card-title">Control de inventarios</h5>
      <p class="card-text">Sistema que permite realizar una gestión de las existencias de un almacén, tanto en la entrada como en la permanencia o la salida. El objetivo final es la optimización de los costes y conseguir que el uso de las existencias sea el mejor.</p>

    </div>
  </div>

  <div class="card cartas2" style="width: 18rem;">
    <iframe width="286" height="315" src="https://www.youtube.com/embed/yk8r8T4Vy8U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="card-body">
      <h5 class="card-title">Funcion del empaque</h5>
      <p class="card-text">El empaque es un sistema de elementos que facilita la expedición, distribución, almacenamiento, comunicación, presentación, uso y desuso del producto empacado.</p>
    </div>
  </div>
<hr>

</section>

<!-- Lista de solicitudes -->
<section class="seccion9">
    <div class="container">
        <h2 class="text-center mb-2">Lista de Servicios</h2>
        <div class=row>
            <?php 
            while($pt = mysqli_fetch_object($data)){
                $date = $pt->fecha;
                echo "<div class='col'>";
                  echo "<div class='border border-success p-2>";
                    echo "<h5> <img src='".ROOT."/images/$pt->imagenes' width='50' heigth='50' /> $pt->nombres $pt->apellidos </h5>";
                    echo "<p> <b>Fecha:</b> ".date('D', strtotime($date) ) ." ". date('d-M-Y H:i', strtotime($date)) ."</p>";
                    echo "<div class='text-center'>";
                      echo "<a class='btn btn-primary' href='".ROOT."/usuario/edit.php?id=$pt->id'> Modificar </a> - <a class='btn btn-danger' href='".ROOT."/usuario/index.php?id=$pt->id'>Eliminar</a>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
    <hr>
    </section>
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