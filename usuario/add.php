<?php
  include_once('../config/config.php');
  include('usuario.php');

  if(isset($_POST) && !empty($_POST)){
    $p = new usuario();

    if ($_FILES['imagen']['name'] !==''){
        $_POST['imagen'] = saveImage($_FILES);

    }
    $save = $p->save($_POST);
    if ($save){
        $mensaje = '<div class="alert alert-success"> Sesion registrada </div>';
    } else{
        $mensaje = '<div class="alert alert-danger"> Error al registrar </div>';
    }


  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuario</title>
<!-- conexion con boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

 <!-- conexion con css -->
 <link rel="stylesheet" href="../css/styles.css">
 <link rel="stylesheet" href="../css/mq.css">

</head>
<body>
    <?php include('../menu.php')?>


<!-- Nombre de la pagina -->

<h1 class="titulo1">ALMACENAMIENTO Y SOLICITUD DE TRANSPORTE</h1>

<!-- Carrusel para pagina 1 -->
    <section>

      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../Imagenes/Imagen 4 carrusel.jpeg" class="d-block w-100" alt="..." width="900px" height="400px">
          </div>
          <div class="carousel-item">
            <img src="../Imagenes/Imagen 5 carrusel.jpeg" class="d-block w-100" alt="..." width="900px" height="400px">
          </div>
          <div class="carousel-item">
            <img src="../Imagenes/Imagen 6 carrusel.jpeg" class="d-block w-100" alt="..." width="900px" height="400px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    
<!-- Seccion numero 1 -->

<section class="seccion1">

<article class="texto1 article1">
  <h1>Almacenamiento</h1>
  <p>Cubre las actividades del almacén relacionadas con guardar, proteger y conservar correctamente las mercancías durante el periodo de tiempo que sea necesario. También trata la gestión, transporte, ubicación, manipulación y acondicionamiento de las mismas desde su recepción hasta su expedición.</p>
</article>
  <img class="imagen1" src="../Imagenes/Imagen centrada 2.jpeg" alt="">
<article class="texto1 article1">
    <h1>Maquinaria empleada</h1>
    <p>Los principales equipos para la logística de las bodegas son el montacarga, estibadoras, apiladores, plataformas, entre otros componentes son esenciales para el trabajo en los almacenes y cada uno tiene sus características y aplicaciones en los distintos procesos.</p>
</article>
<hr> 

<!-- Seccion numero 2 -->

<section class="seccion3">

<article class="texto3 article3">
  <h1>Somos expertos en transportar</h1>
  <p>Nos especializamos en poder transportar y almacenar cuaquier tipo de mercancia, con el fin de brinar el servicio mas confiable del mercado.</p>
  <div class="boton">
              <a href="https://www.ar-racking.com/co/blog/tipos-de-carga-y-como-almacenarlas/" target="_blank">
                  <div> MAS INFO</div>
              </a>
</article>

<div class="list-group lista1">
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
    Gases
  </button>
  <button type="button" class="list-group-item list-group-item-action">Liquidos</button>
  <button type="button" class="list-group-item list-group-item-action">Ligeras</button>
  <button type="button" class="list-group-item list-group-item-action">Granel</button>
  <button type="button" class="list-group-item list-group-item-action">Peligrosa</button>
  <button type="button" class="list-group-item list-group-item-action">Perecedera</button>
  <button type="button" class="list-group-item list-group-item-action">Delicada</button>


</div>


<table class="table tabla1">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Ciudad</th>
    <th scope="col">Cantidad Bodegas</th>
    <th scope="col">Empleados</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row">1</th>
    <td>Medellin</td>
    <td>10 sites</td>
    <td>150</td>
  </tr>
  <tr>
    <th scope="row">2</th>
    <td>Barranquilla</td>
    <td>2 sites</td>
    <td>15</td>
  </tr>
  <tr>
    <th scope="row">3</th>
    <td>Pasto</td>
    <td>3 sites</td>
    <td>20</td>
  </tr>
  <tr>
    <th scope="row">4</th>
    <td>Bucaramanga</td>
    <td>6 sites</td>
    <td>70</td>
  </tr>
  <tr>
    <th scope="row">5</th>
    <td>Cali</td>
    <td>15 sites</td>
    <td>200</td>
  </tr>
</tbody>
</table>


</section>
<hr>

<!-- Seccion numero 3 -->

<section class="seccion5">

<article class="texto5 article5">
    <h1>¿Quienes somos?</h1>
    <p>Somos una empresa dedicada al transporte y almacenamiento de mercancias con el fin de agilizar los procesos logisticos de las compañias. contamos con una amplia gama de vehiculos que agilizan las entregas en el territorio nacional.</p>
</article>

<img class="imagen2" src="../Imagenes/imagen hoja 2.png" alt="">
<img class="imagen3" src="../Imagenes/imagen hoja 2 2.jpeg" alt="">

</section>

<hr>
<!-- Formulario de registro -->
<section class="seccion9">
    <div class="container">

        <?php

        if (isset($mensaje)){
            echo $mensaje;
        }

        ?>




        <h2 class="text-center mb-2">Registra Tu Solicitud</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="nombres" id="nombres" placeholder="nombres del usuario" class="form-control">
                </div>
                <div class="col">
                    <input type="text" name="apellidos" id="apellidos" placeholder="apellidos del usuario" class="form-control">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <input type="email" name="email" id="email" placeholder="email del usuario" class="form-control">
                </div>
                <div class="col">
                    <input type="number" name="celular" id="celular" placeholder="celular del usuario" class="form-control">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <textarea id="observaciones" name="observaciones" placeholder="observaciones del usuario" class="form-control"></textarea>
                </div>
                <div class="col">
                    <input type="text" name="empresa" id="empresa" placeholder="empresa usuario" class="form-control">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <input type="datetime-local" name="fecha" id="fecha" class="form-control">
                </div>
                <div class="col">
                    <input type="file" name="imagen" id="imagen" class="form-control">
                </div>
            </div>
            <button class="btn btn-success">Registrar</button>
        </form>


    </div>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>