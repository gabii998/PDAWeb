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
                <div class="col text-center mt-3">
                

                    <h2 class="font-weight-bold">Postulá tu local</h2>




                </div>

            </div>
        </div>
        <div class="container" id="contenido">
            <form id="formRegistro">
                <div class="row" id="mensaje"></div>
                <div class="row py-3" >
                    <div class="col-md order-2" >
                        <div class="md-form mb-5">
                            <i class="fa fa-address-card prefix grey-text"></i>
                            <input required type="text" id="nombreLocal" name="NombreLocal" placeholder="Local de Pepito" class="form-control">
                            <label for="defaultForm-email">Nombre</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-location-arrow prefix grey-text"></i>
                            <input required id="ubicacionLocal" type="text" name="UbicacionLocal" placeholder="Calle 123,Rivadavia,Mendoza" class="form-control"  >
                            <label for="defaultForm-email">Ubicación</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-cloud prefix grey-text"></i>
                            <input required id="paginaWeb" type="text" name="paginaWeb" placeholder="https://www.facebook.com/miNegocio" class="form-control"  >
                            <label for="defaultForm-email">Página Web</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-pencil-square-o prefix grey-text"></i>
                            <input required id="descripcion" type="text" name="descripcion" placeholder="Un negocio dedicado a..." class="form-control"  >
                            <label for="defaultForm-email">Descripción</label>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <button id="localizar" name="localizar" type="button" class="btn"  style="background: #720293" disabled>Localizar</button>
                            </div>
                            <div class="col text-center">
                                <button type="button" id="registroSubmit" class="btn  mx-auto" style="background: #720293">Registrar</button>
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
                                
                            </div>
                        </div>


                    </div>
                    <div class="col-md order-1 mb-3" style="height: 450px">
                        <div id="mapa"></div>
                        <span  style="display:none" id="x"></span>
                        <span  style="display:none" id="y"></span>
                        <span  id="direccion"  style="display:none"></span>

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
        <script src="vistas/js/usuario/NuevoComercio.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABnx9fjUPqca7ylNahJDGf18Fo0IQEQ0s&language=es"></script>
    </body>
</html>