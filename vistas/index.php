<!DOCTYPE html>
<html>
    <head>
        <title>Punto de Apoyo</title>
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
        <!-- Jumbotron -->
        <div class="card card-image" style="background-image: url(/vistas/img/back.png); height:91%">
            <div class="text-white h-100 text-center rgba-stylish-strong py-5 px-4">
                <div class="pt-1">
                    <!-- Content -->
                    <img src="/vistas/img/logo.png" height="145" width="145" class="rounded mx-auto d-block mb-5" 
                         <h2 class="card-title h2 my-4 ">¡Bienvenido a Punto de Apoyo!</h2>
                    <p class="mb-4 pb-2 px-md-5 mx-md-5">Punto de Apoyo es una plataforma de apoyo...</p>
                    <a class="btn white text-dark" href="Acerca"><i class="fa fa-clone left"></i>Más información</a>

                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row pt-5">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <h5 style="color: #720293"><i class="fa fa-support"></i><strong> Postulá tu comercio</strong></h5>
                    <p>Postulá tu comercio para que forme parte de la red de Punto de Apoyo!
                        Una vez que lo postules, formará parte de una lista para que los usuarios verifiquen
                        su existencia.</p>
                    <a class="btn white text-capitalize" href="NuevoComercio" style="color: #720293"></i>Ir allá</a>
                </div>
                <div class="col-md-5">
                    <h5 style="color: #720293"><i class="fa fa-comment"></i><strong> Recomendá la app</strong></h5
                    <p>Recomendando la aplicación haces que la comunidad en torno a ella crezca, y por ende 
                        que aumenten los puntos de apoyo disponibles.Contamos con aplicaciones para IOS y Android.</p>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row pt-5 pb-5">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <h5 style="color: #720293"><i class="fa fa-thumbs-up"></i><strong> Si tienes alguna sugerencia, hazla saber</strong></h5>
                    <p>Estamos abiertos a cambios y sugerencias que ayuden a mejorar la utilidad de plataforma,
                        asi que si tienes alguna idea haznosla saber, te lo agradeceremos.</p>
                    <a class="btn white text-capitalize" data-toggle="modal" data-target="#modalSugerencias" style="color: #720293"></i>Nueva sugerencia</a>
                </div>

                <div class="col-md-5">
                    <h5 style="color: #720293"><i class="fa fa-question-circle"></i><strong> Preguntas frecuentes</strong></h5>
                    <p>Si tienes alguna duda, puedes ir a nuestra área de preguntas frecuentes. En caso de que tu pregunta
                        no se encuentre allí, puedes enviarnos tu consulta a nuestras redes sociales, se te responderá a la brevedad.</p>
                    <a class="btn white text-capitalize" href="#" style="color: #720293"></i>Preguntas frecuentes</a>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>

        <div class="modal fade" id="modalSugerencias" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Nueva sugerencia</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include_once("scriptsIncluidos.html");
        ?>
    </body>
</html>
