<!DOCTYPE html>
<html>
  <head>
    <title>Acerca de PDA</title>
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
    <div class="row mt-4">
        <div class=" col-8 mx-auto">
        <div id="definicion">
            <h2 class="font-weight-bold">¿Qué es PDA?</h2>
            <div class="mt-4">
                <p>PDA o Puntos de Apoyo es una plataforma de apoyo social, que trata de combatir la 
                violencia de género en la calle
                </p>
                <p>La propuesta es tender un lazo entre la víctima de violencia callejera o intrafamiliar con sus 
                amistades y la sociedad, activando mecanismos de solidaridad ciudadana al formar corredores seguros.
                </p>
            </div>
        </div>
        <div id="origen">
            <h2 class="font-weight-bold">¿Cómo se originó?</h2>
            <p>omo lo que nos interesa es recuperar el control de la seguridad ciudadana, y más aún la de las mujeres 
            (99,7 % de las mujeres sufren violencia contra sólo el 0.3% que la sufren los hombres), es que participamos
            de la Hackaton#MujerSegura, el pasado 26 de agosto en la UTN Regional Mendoza, donde sin conocernos formamos
            un equipo interdisciplinario, que dio como resultado una aplicación para teléfonos móviles que estamos 
            convencidos puede llegar a significar una gran diferencia para combatir este flagelo.
            </p>
        </div>
        <div id="funcionamiento">
            <h2 class="font-weight-bold">¿Cómo funciona?</div>
            <p>La plataforma cuenta con 4 actores principales: la página web, el comercio adherido más cercano(de ahora 
            en adelante punto de apoyo), la 
            aplicación móvil y los contactos preseleccionados.</p>
            <p>Cuando el usuario activa la alerta, la ubicación es enviada al servidor, que devuelve un link y lo envía
            vía SMS a los contactos que el usuario preseleccionó con anterioridad. A su vez, la victima tendrá en su mapa 
            todos los locales adheridos visibles, para de esa forma, poder acudir en busca de apoyo.
            </p>
            <p>Cada punto de apoyo estará identificado con el logo de la plataforma en su vidriera, que a su vex tendrá un 
            codigo QR para verificar su veracidad.
        </div>
        </div>
    </div>
    <?php
        include_once("scriptsIncluidos.html");
    ?>
  </body>
</html>