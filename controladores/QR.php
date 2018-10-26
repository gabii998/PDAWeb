<?php
include_once __DIR__."/../constantes.php";
require __DIR__ . '/../vendor/autoload.php';

class controladorQR{

    public static function generarQR($id){
    $x=$y=99;
    $logo=SITE_ROOT."/vistas/img/logo.png";//Ruta del logo
    $dir=SITE_ROOT."/temp";
    QRcode::png('https://localhost/Comercio?id='.$id, $dir."/temp.png", QR_ECLEVEL_H, 3, 0);

    //Se configura el tamaño de la imagen final
    $outputImage = imagecreatetruecolor(400, 400);
    $white = imagecolorallocatealpha($outputImage, 0, 0, 0,127);  
    imagefill($outputImage,0,0,$white);
    
    //Se cargan las dos imágenes a partir de su ruta
    $first = imagecreatefrompng($logo);
    $second = imagecreatefrompng(SITE_ROOT."/temp/temp.png");

    imagecopyresized($outputImage,$first,0,0,0,0, 400, 400,385,384);
    imagecopyresized($outputImage,$second,150,280,0,0, 100, 100,$x,$y);


    imagesavealpha($outputImage, true);
    imagepng($outputImage);
    }
}