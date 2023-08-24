    <nav class="navbar navbar-expand-lg colorbarra">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html"><img src="./Imagenes/Brown Mascot Lion Free Logo.png" width="50px" height="50px" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo ROOT?>/usuario/index.php" target="blank">
                  <button class="buttonnav">Ver Solicitudes</button>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= ROOT ?>/usuario/add.php" target="blank">
                  <button class="buttonnav">Registrar Solicitud</button>
                </a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
    