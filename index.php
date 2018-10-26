<?php
// El .htaccess redirecciona todas las request a este controlador principal
session_start();
include __DIR__ . '/controladores/Comercios.php';
include __DIR__ . '/controladores/Usuarios.php';
include __DIR__ . '/controladores/Mapa.php';
//Setear en 1 para depurar errores
ini_set('display_errors', 1);
$request = $_SERVER['REDIRECT_URL'];//Valor de la url

switch ($request) {
    case '/' :
        require __DIR__ . '/vistas/index.php';
        break;
    case '' :
        require __DIR__ . '/vistas/index.php';
        break;
    case '/Mapa' :
        ControladorMapa::servirVista();
        break;
    case '/Registro' :
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            ControladorUsuarios::servirVistaRegistro();
            }
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo ControladorUsuarios::registrar($_POST);
        }
        break;
    case '/Comercios':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            ControladorComercios::servirVista();
        }
        break;
        case '/GetComercios':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            ControladorComercios::traerLugares();
        }
        break;
    case '/Login':
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $respuesta=ControladorUsuarios::loguear($_POST);
            $_SESSION=$respuesta;
           // header("location:/");
           echo json_encode($respuesta);
        }
    break;
    case '/Logout':
        session_unset();
        header("location:/");
        break;
    case '/Acerca':
        require __DIR__ . '/vistas/About.php';
        break;
     case '/NuevoComercio':
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            ControladorComercios::agregarLugar($_POST);
        }
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            require __DIR__ . '/vistas/NuevoComercio.php';
        }
        break;
    case '/NCom':
    $parms['latitud']=111;
    $parms['longitud']=2222;
    $parms['email']="prueba@prueba.com";
    $parms['nombre']="Nombrando";

        $respuesta=ControladorComercios::agregarLugar($parms);
        break;
    default:
    $titulo="Pagina no encontrada";
    $mensaje="Lo sentimos,la página solicitada no fue encontrada";
        require __DIR__ . '/vistas/Error.php';
        //echo'<h1>Página no encontrada</h1>';
        break;
}
