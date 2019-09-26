<html>
 <head>
  <title>Comision</title>
 </head>
 <body>
 <?php

$importe = 15000;
$comision = 0;
$resultado = 0;
if($comision<10000){
    $comision = 1.05;
}
if($comision>=10000 && $comision<20000){
    $comision = 1.08;
}
if($comision>=20000 && $comision<40000){
    $comision = 1.1;
}
else if($comision>40000){
    $comision = 1.13;
}
$resultado = $importe*$comision;
echo "La comision son $resultado";
 ?>
 </body>
</html>