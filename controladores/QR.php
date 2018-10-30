<?php
include_once __DIR__."/../constantes.php";
require __DIR__ . '/../vendor/autoload.php';

class controladorQR{

    public static function generarQR($id){

    $x=$y=99;//Tamano del codigo QR de origen
    $logo=SITE_ROOT."/vistas/img/logo2.png";//Ruta del logo
    $dir=SITE_ROOT."/temp";
    QRcode::png('https://localhost/Comercio?id='.$id, $dir."/temp.png", QR_ECLEVEL_H, 3, 0);

    //Se configura el tamaño de la imagen final
    $outputImage = imagecreatetruecolor(850, 850);
    $white = imagecolorallocatealpha($outputImage, 0, 0, 0,127);  
    imagefill($outputImage,0,0,$white);
    
    //Se cargan las dos imágenes a partir de su ruta
    $first = imagecreatefrompng($logo);
    $second = imagecreatefrompng(SITE_ROOT."/temp/temp.png");

    //Se configuran las posiciones,tamaños,etc(para más info buscar el la documentacion)
    imagecopyresized($outputImage,$first,0,0,0,0, 850, 850,850,850);
    imagecopyresized($outputImage,$second,380,590,0,0, 100, 100,$x,$y);


    imagesavealpha($outputImage, true);
    imagepng($outputImage);
    }
}