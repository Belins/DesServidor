<html>
 <head>
  <title>Entero positivo</title>
 </head>
 <body>
 <?php

$numero = 43;
do{
if($numero%2==0){
    $numero = $numero/2;
    echo "$numero, ";
}
else{
    $numero = $numero*3+1;
    echo "$numero, ";
}
}
while($numero!= 1)
 ?>
 </body>
</html>