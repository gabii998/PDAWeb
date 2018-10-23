<!DOCTYPE html>
<html>
    <head>
        <title>Postula tu comercio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="/vistas/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/vistas/css/mdb.min.css" rel="stylesheet"/>
        <link href="/vistas/css/style.css" rel="stylesheet"/>
        <link rel="icon" href="/vistas/img/ic_pda.png">
        <style type="text/css">
            #mapa{width:100%;height:100%;float:left}
        </style>


    </head>

    <body>

        <?php include_once("navbar.php");
        ?>
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-6">
                    <br>

                    <h1 class="font-weight-bold">Postulá aquí tu local</h1>


                </div>

                <div class="col">

                </div>

            </div>
        </div>
        <div class="container" id="contenido">
            <form id="formRegistro">
                <div class="row" id="mensaje"></div>
                <div class="row py-5" >
                    <div class="col-md">
                        <h3 class="font-weight-bold">Datos del local</h3>
                        <div class="md-form mb-5">
                            <i class="fa fa-address-card prefix grey-text"></i>
                            <input type="text" id="nombreLocal" name="NombreLocal" class="form-control">
                            <label for="defaultForm-email">Nombre</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-address-book prefix grey-text"></i>
                            <input id="address" type="text" name="UbicacionLocal" class="form-control"  >
                            <label for="defaultForm-email">Ubicación</label>
                        </div>
                        
                        <button id="localizar" class="btn"  style="background: #720293" onclick="codeAddress()">Localizar</button>

                        <div id="mapa"></div>
                            <span  style="display:none" id="x"></span>
                           <span  style="display:none" id="y"></span>
                           <span  id="direccion"  style="display:none"></span>

                    </div>
                    <div class="col-md">
                        <h3 class="font-weight-bold">Tus datos</h3>
                        <div class="md-form mb-5">
                            <i class="fa fa-address-card prefix grey-text"></i>
                            <input type="text" id="nombrePersona" name="nombrePersona" class="form-control">
                            <label for="defaultForm-email">Nombre</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-address-card prefix grey-text"></i>
                            <input type="text" id="apellidoPersona" name="apellidoPersona" class="form-control">
                            <label for="defaultForm-email">Apellido</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type="number" id="telefonoPersona" name="telefonoPersona" class="form-control">
                            <label for="defaultForm-email">Teléfono</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="email" id="correoPersona" name="correoPersona" class="form-control">
                            <label for="defaultForm-email">Correo Electrónico</label>
                        </div>
                        <div class="row  justify-content-center">
                            <div class="form-check">
                                <input required class="form-check-input filled-in" type="checkbox" name="checkbox" id="checkbox">
                                <label class="form-check-label" for="filledInCheckbox1">He leído y acepto los <a href="#" data-toggle="modal"
                                                                                                                 data-target="#modalTerms">términos de uso</a></label>
                            </div>
                        </div>
                        <div class="row  justify-content-center">
                            <div class="text-center mt-2">
                                <button id="registroSubmit" class="btn  mx-auto" id="registrarSubmit" style="background: #720293">Registrar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalTerms" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title font-weight-bold">Términos de uso de PDA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <textarea disabled class="form-control md-textarea" rows="10">Aquí van los términos de uso</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include_once("LoginModal.php");
        include_once("scriptsIncluidos.html");
        if (!isset($_SESSION['correo'])) {
            echo ' <script src="/vistas/js/usuario/modal.js"></script>';
        }
        ?>
        <script src="vistas/js/mapaloc.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABnx9fjUPqca7ylNahJDGf18Fo0IQEQ0s&language=es"></script>
    </body>
</html>