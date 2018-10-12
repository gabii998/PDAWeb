<!DOCTYPE html>
<html>
    <head>
        <title>Registro</title>
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
        <form action="/Registro" method="POST">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="correo" name="correo" class="form-control validate">
                    <label data-error="No es un correo válido"  for="defaultForm-email">Correo Electrónico</label>
                </div>
                <div class="md-form mb-5">
                    <i class="fa fa-address-book prefix grey-text"></i>
                    <input type="text" id="dni" name="dni" class="form-control validate">
                    <label data-error="No es un correo válido"  for="defaultForm-email">DNI</label>
                </div>
                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="contrasena" name="contrasena" class="form-control validate">
                    <label data-error="wrong"  for="defaultForm-pass">Contraseña</label>
                </div>
                <div class="text-center mt-2">
                  <button id="submit" class="btn  mx-auto" type="submit"  style="background: #720293" onclick="sendLogin()">Iniciar</button>
                </div>
            </form>
        <script type="text/javascript" src="/vistas/js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="/vistas/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="/vistas/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="/vistas/js/mdb.min.js"></script>
    </body>
</html>