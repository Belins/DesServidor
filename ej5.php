<html>
 <head>
  <title>Parque</title>
 </head>
 <body>
 <?php

$años = 7;
$altura = 1.1;
$acompañado = true;

if($años>=10 || $altura >= 1.2){
    echo "El niño puede subir a la atracción";
}
else if(($años>=6 || $acompañado = true)){
    echo "El niño puede subir a la atracción";
}
else{
    echo "$nombre No puede subir";
}

 ?>
 </body>
</html>