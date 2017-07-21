

  <?php include 'vistas/encabezado.php' ?>

  <body>
    
    <div class="header">
      <figure class="logo">
        <img src="img/beda.png"  class="img-fluid" alt="">
      </figure>
      
      <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
          <a class="navbar-brand" href="#">
          
            SERVICIOS HOSPITALARIOS BEDA
          </a>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="navbar-nav mr-auto ml-auto text-center">
                  <a class="nav-item nav-link active" href="index.php">INDEX</a>
                  <a class="nav-item nav-link" href="vistas/nosotros.php">NOSOTROS</a>
                  <a class="nav-item nav-link" href="vistas/servicios.php">SERVICIOS</a>
                  <a class="nav-item nav-link" href="vistas/contacto.php">CONTACTO</a>
                </div>
                <div class="d-flex flex-row justify-content-center">
                  <a href="vistas/servicios.php" class="btn btn-outline-warning mr-2">SERVICIOS</a>
                  <a href="vistas/contacto.php" class="btn btn-outline-danger">CONTÁCTANOS</a>
                </div>
          </div>
      </nav>


    </div>

<div class="banner">
  <div class="fondo d-flex justify-content-center align-items-center flex-wrap">
   <div>
      <h1 class="display-1 text-white">CUIDAMOS TU SALUD</h1>
       <div class="mt-5 text-center">
         <a href="vistas/nosotros.php" class="btn btn-outline-danger btn-lg">CONÓCENOS</a>
       </div>
   </div>
  </div>
</div>
    
   <div class="container">
   <h1 style="border-bottom: 1px #706F6F solid;" class="mt-5 pb-3 text-muted">Cuidado del paciente</h1>
   <p class="mt-4">Para BEDA es fundamental contar con la participación de los pacientes y su familia. Recuerde que en caso de presentar alguno signo de alerta debe consultar al médico.</p>
        <div class="row">
            <div class="col-sm-6 col-md-4 mt-4 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="img/ancianos2.jpg">
                    <div class="card-block">
                        <h5 class="text-bold">ANCIANOS</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mt-4 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="img/ninos.jpg">
                    <div class="card-block">
                        <h5 class="text-bold">NIÑOS</h5>
                    </div>
                </div>
            </div>
           <div class="col-sm-6 col-md-4 mt-4 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="img/embarazadas.jpg">
                    <div class="card-block">
                        <h5 class="text-bold">EMBARAZADAS</h5>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="img/cirugia.jpg">
                    <div class="card-block">
                        <h5 class="text-bold">CIRUGIA</h5>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="row mb-5">
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card">
                    <img class="card-img-top" src="img/fari.jpg">
                    <div class="card-block">
                        <h5 class="text-bold">ENFERMEDAD GENERAL</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card">
                    <img class="card-img-top" src="img/especial.jpg">
                    <div class="card-block">
                        <h5 class="text-bold">ESPECIALIDADES</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                <div class="card">
                    <img class="card-img-top" src="img/fisio.jpg">
                    <div class="card-block">
                        <h5 class="text-bold">FISIOTERAPIA</h5>
                    </div>
                </div>
            </div>
           <!-- <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                    <div class="card-block">
                        <h5 class="text-bold">NUTRICIÓN</h5>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="mt-5 mb-5 text-center">
         <a href="vistas/nosotros.php" class="btn btn-outline-danger btn-lg">CONTÁCTANOS</a>
       </div>
</div>

<?php include 'vistas/pie.php' ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src=""></script>
  </body>
</html>