<!DOCTYPE html>
<html>
  <head>
    <title>Comercios</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="/vistas/css/bootstrap.min.css" rel="stylesheet"/>
      <link href="/vistas/css/mdb.min.css" rel="stylesheet"/>
      <link href="/vistas/css/style.css" rel="stylesheet"/>
      <link rel="icon" href="/vistas/img/ic_pda.png">
  </head>
  <body>
    <?php include_once("navbar.php"); 
    ?>
    <div class="container">
        <div class="row pt-4">
            <div class="col"><h2><strong>Datos del comercio</strong></h2></div>
        </div>
        <div class="row">
            <div class="col mx-auto">
                <img src="" class="img-fluid" alt="Fotografía del comercio">
            </div>
            <div class="col-md-6 col-lg-7 pt-4">
                <h5 id="comercioNombre"><strong>Nombre: </strong></h5>
                <h5 id="comercioSitio"><strong>Página Web: </strong></h5>
                <h5 id="comercioDescripcion"><strong>Descripción: </strong></h5>
                <h5 id="comercioMapa"><a href="#">Ubicación</a></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-3 mx-auto text-center">
                <img id="imgQR" src="" class="pl-5 h-50" alt="QR del comercio">
            </div>
            <div class="col-9"></div>
        </div>
    </div>
    <?php
      include_once("scriptsIncluidos.html");
    ?>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABnx9fjUPqca7ylNahJDGf18Fo0IQEQ0s&callback=initMap">
    </script>
    <script type="text/javascript" src="/vistas/js/usuario/Comercios.js"></script>
  </body>
</html>
