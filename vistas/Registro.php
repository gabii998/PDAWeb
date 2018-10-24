<!DOCTYPE html>
<html>

<head>
    <title>Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/vistas/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/vistas/css/mdb.min.css" rel="stylesheet" />
    <link href="/vistas/css/style.css" rel="stylesheet" />
    <link href="/vistas/css/datepicker.min.css" rel="stylesheet" />
    <link rel="icon" href="/vistas/img/ic_pda.png">
</head>

<body>
    <?php include_once("navbar.php"); ?>
    <div class="container" id="contenido">
    <form id="formRegistro">
        <div class="row" id="mensajeRegistro"></div>
        <div class="row py-5" >
            <div class="col-md">
                    <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="registroCorreo" name="registroCorreo" class="form-control">
                        <label for="registroCorreo">Correo Electrónico</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fa fa-address-book prefix grey-text"></i>
                        <input type="number" id="dni" name="dni" class="form-control">
                        <label for="dni">DNI</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="registroContrasena" name="registroContrasena" class="form-control">
                        <label for="registroContrasena">Contraseña</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="registroConfirmarContrasena" name="registroConfirmarContrasena"
                            class="form-control">
                        <label for="registroContrasena">Confirmar contraseña</label>
                    </div>
            </div>
            <div class="col-md">
                <div class="md-form mb-5">
                    <i class="fa fa-address-card-o prefix grey-text"></i>
                    <input type="text" id="registroNombre" name="registroNombre" class="form-control">
                    <label for="defaultForm-email">Nombre</label>
                </div>
                <div class="md-form mb-5">
                    <i class="fa fa-address-card prefix grey-text"></i>
                    <input type="text" id="registroApellido" name="registroApellido" class="form-control">
                    <label for="defaultForm-email">Apellido</label>
                </div>
                <div class="md-form mb-5">
                    <i class="fa fa-phone prefix grey-text"></i>
                    <input type="number" id="registroTelefono" name="registroTelefono" class="form-control">
                    <label for="defaultForm-email">Teléfono</label>
                </div>
                <div class="md-form">
                    <i class="fa fa-birthday-cake prefix grey-text"></i>
                    <input type='text' id="registroFecha" name="registroFecha" class="form-control datepicker-here"
                         data-language='es' data-position='left bottom' data-offset='-260'/>
                    <label for="registroFecha">Fecha de nacimiento</label>
                </div>
            </div>
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
        include_once("scriptsIncluidos.html");
    ?>
    <!--Date picker-->
    <script type="text/javascript" src="/vistas/js/datepicker.min.js"></script>
    <script type="text/javascript" src="/vistas/js/datepicker-es.js"></script>
    <script type="text/javascript" src="/vistas/js/usuario/registro.js"></script>
</body>

</html>