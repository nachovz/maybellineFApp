<?php 
header('Content-disposition: attachment; filename=imagen.jpg');
header('Content-type: image/jpeg ');
readfile($_REQUEST["name"]);
?>