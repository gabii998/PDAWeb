<?php
// El .htaccess redirecciona todas las request a este controlador principal
session_start();
include __DIR__ . '/controladores/Comercios.php';
include __DIR__ . '/controladores/Usuarios.php';
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
        require __DIR__ .'/vistas/Mapa.php';
        break;
    case '/Registro' :
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            require __DIR__ .'/vistas/Registro.php';
            }
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            ControladorUsuarios::registrar($_POST);
            header("location:/");
        }
        break;
    case '/Comercios':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        ControladorComercios::obtenerComercios();
        }
        break;
    case '/Login':
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $respuesta=ControladorUsuarios::loguear($_POST);
            $_SESSION=$respuesta;
            header("location:/");
        }
    break;
    case '/Logout':
        session_unset();
        header("location:/");
        break;
    default:
        echo'<h1>Página no encontrada</h1>';
        break;
}
