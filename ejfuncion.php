<html>
 <head>
  <title>Comunidad</title>
 </head>
 <body>
 <?php 
$a = 2;
$b = 4;
$c = 6;
function suma($a, $b){
    $result = $a + $b;
    return $result;
}
function enviar($operacion, $var1, $var2){
    $resultado = $operacion($var1, $var2);
    return $resultado;
}
$result2 = enviar(suma, $a, $b);
echo "<p>El resultado es $result2</p>";
 ?>
 </body>
</html>