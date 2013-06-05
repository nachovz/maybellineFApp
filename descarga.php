
<html>
<head>
<title>MAYBELLINE</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,target-densitydpi=device-dpi,user-scalable=no,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=9">	      <!-- IE9 Standards -->
<link rel="stylesheet" type="text/css" href="css/index.css">
<link href="imagen/Tap(calendarioapp).jpg" type="image/x-icon"/>
</head>
<body>

<?php
$tipo=$_REQUEST["tipo"];
switch ($tipo) {
			case 1:
		$reducirancho = 1024; 
		$reduciralto = 768;        
		break;
			case 2:
		$reducirancho = 1280; 
		$reduciralto = 1024;          
		break;
			case 3:
		$reducirancho = 1680; 
		$reduciralto = 1050;          
		break;
			case 4:
		$reducirancho = 2560; 
		$reduciralto = 1440;          
		break;
			case 5:
		$reducirancho = 960; 
		$reduciralto = 640;
		break;
			case 6:
		$reducirancho = 1136; 
		$reduciralto = 640; 
		break;
			case 7:
		$reducirancho = 800; 
		$reduciralto = 480; 
		break;
			case 8:
		$reducirancho = 480; 
		$reduciralto = 360; 
		break;

}
//Tu Imagen
$imagen = $_REQUEST["url"];
/*$imagen = str_replace("Baja", "Alta", $imagen);
//Obtener las dimensiones
list($ancho, $alto, $type, $attr) = getimagesize($imagen);

$miimagen = imagecreatefromjpeg($imagen); 
$thumbnail = imagecreatetruecolor($reducirancho, $reduciralto);
imagecopyresampled($thumbnail, $miimagen, 0, 0, 0, 0, $reducirancho, $reduciralto, $reducirancho, $reduciralto); 
//Salido Final

imagejpeg($thumbnail,'Foto.jpg');*/
//echo '<div class="container" style="text-align:center;"><img src="'.$imagen.'"  width="'.$reducirancho.'" height="'.$reduciralto.'"></div>';


if($reducirancho>764){
$maximo=764;
$anchoporcentaje=$reducirancho*100/$maximo;
$largopx=$anchoporcentaje*$reduciralto/100;}
else{
	$maximo=$reducirancho;
	$largopx=$reduciralto;
	}
/*
$maximo=764;
$anchoporcentaje=$maximo*100/$reducirancho;
$largopx=$anchoporcentaje*$reduciralto/100;*/
header('Content-disposition: attachment; filename=imagen.jpg');
header('Content-type: image/jpeg ');
readfile("imagen/imagen1.jpg");
?>

<div class="container" style="text-align:center;">
<div style="position:absolute; z-index:0; overflow:hidden; width:764; height:647px">
<a href="<?php echo $imagen ?>"><img src="<?php echo $imagen ?>"  width="<?php echo $maximo; ?>" height="<?php echo $largopx; ?>" ></a></div>
<div class="fuentes2 botonr" onClick="javascript: self.location='galeria.html'" style="margin-top:0px position:absolute; z-index:1;"></div>

</div>
</body></html>