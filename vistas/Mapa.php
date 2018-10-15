<!DOCTYPE html>
<html>
    <head>
        <title>Mapa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="/vistas/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/vistas/css/mdb.min.css" rel="stylesheet"/>
        <link href="/vistas/css/style.css" rel="stylesheet"/>
        <link rel="icon" href="/vistas/img/ic_pda.png">
    </head>
    <body>
        <?php include_once("navbar.php"); ?>
        <div id="map"></div>
        <?php include_once("LoginModal.php")?>
        <script type="text/javascript" src="/vistas/js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="/vistas/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="/vistas/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="/vistas/js/mdb.min.js"></script>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABnx9fjUPqca7ylNahJDGf18Fo0IQEQ0s&callback=initMap">
        </script>
        <script src="/vistas/js/usuario/map.js"></script>
        <?php  
        if (!isset( $_SESSION['correo'])) {
            echo ' <script src="/vistas/js/usuario/modal.js"></script>';
        }  
        ?>
    </body>
</html>