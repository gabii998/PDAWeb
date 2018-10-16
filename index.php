<?php
session_start();
include __DIR__ . '/controladores/Comercios.php';
include __DIR__ . '/controladores/Usuarios.php';
ini_set('display_errors', 0);
define('SERVER',getcwd());
$request = $_SERVER['REDIRECT_URL'];

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
        //
        //ControladorUsuarios::registrar($_GET);
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
