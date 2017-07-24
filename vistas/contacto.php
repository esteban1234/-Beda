<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<div class="header">
      <figure class="logo">
        <img src="../img/beda.png"  class="img-fluid" alt="">
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
                  <a class="nav-item nav-link" href="../index.php">INDEX</a>
                  <a class="nav-item nav-link" href="nosotros.php">NOSOTROS</a>
                  <a class="nav-item nav-link" href="servicios.php">SERVICIOS</a>
                  <a class="nav-item nav-link active" href="contacto.php">CONTACTO</a>
                </div>
                <div class="d-flex flex-row justify-content-center">
                  <a href="servicios.php" class="btn btn-outline-warning mr-2">SERVICIOS</a>
                  <a href="nosotros.php" class="btn btn-outline-danger">CONOCENOS</a>
                </div>
          </div>
      </nav>
    </div>

    <div class="bg-faded py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class=" pi-item">BEDA</h1> <br>
          <p> <strong>GRUPO DE SERVICIOS HOSPITALARIOS BEDA S.A. de C.V.</strong>
            <br>C. 11-A #327 por C. 38 y C. 60. Col. Fracc. del Norte
            <br>Mérida, Yucatán, C.P. 97120
            <br> <abbr title="Teléfono">Teléfono: </abbr>Pendiente
            <br><abbr title="Correo">Correo: </abbr>info@beda.com.mx
            <br><abbr title="Horario">Horario: </abbr>Lunes a Viernes de 9 am a 6 pm</p>
        </div>
        <div class="col-md-6">
          <h1 class="pi-item">CONTACTO</h1> <br>
          <form>
            <fieldset class="form-group"> <label for="exampleInputEmail1">Nombre Completo</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Escribe tu nombre completo"> </fieldset>

            <fieldset class="form-group"> <label for="exampleInputEmail1">Teléfono</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Escribe tu número completo"> </fieldset>

            <fieldset class="form-group"> <label for="exampleInputEmail1">Correo</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Escribe tu correo"> </fieldset>

              <div class="form-group">
			    <label for="exampleTextarea">Comentario</label>
			    <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Escribe tu comentario"></textarea>
			  </div>

            <button type="submit" class="btn btn-outline-danger">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php include 'pie.php' ?>
<!-- <script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script> -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>



</body>
</html>
