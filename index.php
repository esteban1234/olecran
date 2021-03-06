
<?php include 'vistas/encabezado.php' ?>
<body>

<div class="contienetodo">

    <div class="header">
        <div class="menu-op">
          <i class="fa fa-bars fa-2x abrir" aria-hidden="true"></i>
          <i class="fa fa-times fa-2x cerrar" aria-hidden="true"></i>
        </div>
        <nav class="pull-left">
            <ul>
                <a class="select" href="index.php">INICIO</a>
                <a href="vistas/nosotros.php">NOSOTROS</a>
                <a href="vistas/servicios.php">SERVICIOS</a>
                <a href="vistas/contacto.php">CONTACTO</a>
            </ul>
        </nav>
        <figure class="logo pull-right">
            <img src="img/olecran.png" alt="OLECRAM" class="img-responsive">
        </figure>
    </div>

    <div class="banner">
        <div class="fondo">
            <p class="text-banner">Tenemos lo que necesitas, <br>toma la decisión de ser la mejor empresa, <br>TE AYUDAMOS A LOGRARLO.</p>

            <p class="boton">
                <a href="vistas/contacto.php" ><button type="button" class="btn btn-danger btn-lg"> <span><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp; CONTACTANOS</button></a>
            </p>
        </div>
    </div>

       <div class="section seccion1">
      <div class="container img-width">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <h1 class="text-center tit-index" style="color: #fff; margin-top: 5%;">Algunos servicios</h1>
            <p class="lead text-center" style="color: #fff;">Te ofrecemos servicios con altos estándares de calidad.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-2 col-md-2">
            <img src="img/asesoria-en-administracion.jpg" class="img-responsive img-thumbnail">
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h3 class="text-left subtit-index" style="color: #fff; margin-top: 17%;">Consultoria en administración</h3>
            <!-- <p class="text-left" style="color: #fff;">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p> -->
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2">
            <img src="img/legal2.jpg" class="img-responsive img-thumbnail">
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h3 class="text-left subtit-index" style="color: #fff; margin-top: 17%;">Apoyo para efectuar trámites legales</h3>
            <!-- <p class="text-left" style="color: #fff;">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p> -->
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-12 col-sm-2 col-md-2">
            <img src="img/asesoria-financiera.jpg" class="img-responsive img-thumbnail">
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h3 class="text-left subtit-index" style="color: #fff; margin-top: 17%;">Asesoria financiera</h3>
            <!-- <p class="text-left" style="color: #fff;">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p> -->
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2">
            <img src="img/imagen2.jpg" class="img-responsive img-thumbnail">
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 text-center">
            <h3 class="text-left subtit-index" style="color: #fff; margin-top: 17%;">Asesoria empresarial</h3>
            <!-- <p class="text-left" style="color: #fff;">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p> -->
          </div>
        </div>
      </div>
      <br><br><br><br>
    </div>

    <div class="contactotext">
        <p class="pull-left texto">En OLECRAM sus necesidades se convierten <br> en nuestras prioridades. Somos su respaldo.
        </p>
         <p class="boton2 pull-right">
            <a href="vistas/contacto.php" ><button type="button" class="btn btn-danger btn-lg"> <span><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp; CONTACTANOS</button></a>
        </p>
    </div>

    <span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
    <?php include 'vistas/pie.php' ?>

</div>




<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/botonarriba.js"></script>
<script src="js/menu.js"></script>
</body>
</html>
