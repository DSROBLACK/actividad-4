<?php

include('config/config.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transportes</title>
<!-- conexion con boostrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

 <!-- Tipo de letra  -->

 <link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@700&display=swap" rel="stylesheet">

  <!-- conexion con css -->

 <link rel="stylesheet" href="./css/styles.css">

</head>
<body>
  <!-- barra de navegacion de la pagina -->
   <?php 
   include('menu.php')
   ?>

  <!-- Nombre de la pagina web -->
    
        <h1 class="titulo1">TRANSPORTES "DSROBLACK-GLOBAL IMPACT"</h1>
    

  <!-- Carrusel para pagina 1 -->

  <section>

        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Imagenes/Imagen 1 carrusel.jpeg" class="d-block w-100" alt="..." width="900px" height="400px">
            </div>
            <div class="carousel-item">
              <img src="Imagenes/Imagen 2 carrusel.jpeg" class="d-block w-100" alt="..." width="900px" height="400px">
            </div>
            <div class="carousel-item">
              <img src="Imagenes/Imagen 3 carrusel.jpeg" class="d-block w-100" alt="..." width="900px" height="400px">
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
            <h1>Distribucion Urbana</h1>
            <p>La movilidad o distribucion urbana es el conjunto de desplazamientos, tanto de personas como de mercancías, que se producen en una ciudad con el objetivo de recorrer la distancia que separa un lugar de otro.</p>
        </article>
            <img class="imagen1" src="Imagenes/imagen centrada 1.jpeg" alt="">
          <article class="texto1 article1">
              <h1>Distribucion Nacional</h1>
              <p> El Transporte de Carga por carretera es un pilar fundamental en la dinámica de la economía del país, ya que se constituye en la herramienta básica para colocar los productos al alcance del consumidor en el territorio nacional o en el extranjero.</p>
          </article>
<hr> 

<!-- Seccion numero 2 -->



<section class="seccion2">

<h1 class="titulo2">¿Que transportamos y como lo hacemos?</h1>

<article class="texto2 article2">
<h2>Tipos de Cargues</h2>
            <p>La carga es un conjunto de bienes o mercancías protegidas por un embalaje apropiado que facilita su rápida movilización.</p>
            <div class="boton">
                <a href="https://www.noatumlogistics.com/es/tipos-transporte-mercancias/" target="_blank">
                    <div> MAS INFO</div>
                </a>
</article>
</section>
<hr>

<!-- Seccion numero 3 -->

<section class="seccion3">

<article class="texto3 article3">
    <h1>Ciudades y Tarifas</h1>
    <p> Ofrecemos las mejores tarifas para el movimiento de sus productos a nivel nacional, alcanzando y generando un cubrimiento de los 32 departamentos.</p>
</article>

  <div class="list-group lista1">
    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
      Medellin
    </button>
    <button type="button" class="list-group-item list-group-item-action">Cali</button>
    <button type="button" class="list-group-item list-group-item-action">Pasto</button>
    <button type="button" class="list-group-item list-group-item-action">Barranquilla</button>
    <button type="button" class="list-group-item list-group-item-action">Bucaramanga</button>
    <button type="button" class="list-group-item list-group-item-action">Ibague</button>
    <button type="button" class="list-group-item list-group-item-action">Neiva</button>


  </div>


<table class="table tabla1">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Expreso NHR</th>
      <th scope="col">Compartido NHR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Medellin</td>
      <td>$1.100.000</td>
      <td>$500.000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Barranquilla</td>
      <td>$2.000.000</td>
      <td>$800.000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Pasto</td>
      <td>$2.500.000</td>
      <td>$1.400.000</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Bucaramanga</td>
      <td>$1.200.000</td>
      <td>$700.000</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Cali</td>
      <td>$1.150.000</td>
      <td>$550.000</td>
    </tr>
  </tbody>
</table>


</section>
<hr>

<!-- Seccion numero 4 -->

<section class="seccion4">
  
  <article class="texto4 article4">
      <h1>Que es la Logistica</h1>
      <p>La logística es la actividad que planifica, gestiona, controla el almacenamiento y envío de bienes en una cadena de suministro. Su objetivo principal es gestionar todas las operaciones relacionadas con el movimiento de materias primas o productos de la forma más eficiente posible.</p>
  </article>

  <iframe class="video1" width="560" height="315" src="https://www.youtube.com/embed/OqYLg2q6s1g"
  title="¿Qué Es y Para Qué Sirve La Logística?" frameborder="0"
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
  allowfullscreen></iframe>

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
      <li><img class="logos1" src="Imagenes/LOGO FACEBOOK.jpeg" alt=""></li>
      <li><img class="logos1" src="Imagenes/LOGO INSTAGRAM.png" alt=""></li>
      <li><img class="logos1" src="Imagenes/LOGO TWITTER.jpeg" alt=""></li>
      <li><img class="logos1" src="Imagenes/LOGO WHATSAPP.png" alt=""></li>
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