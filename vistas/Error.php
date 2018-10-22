<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $titulo ?></title>
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
        <div class="row">
            <div class="col"></div>
            <div class="col-lg-4 col-md-10">
                <div class="mt-5 py-5 alert alert-danger text-center" role="alert">
                    <?php echo $mensaje ?>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <?php
      include_once("scriptsIncluidos.html");
    ?>
  </body>
</html>
