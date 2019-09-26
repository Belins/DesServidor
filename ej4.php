<html>
 <head>
  <title>Comunidad</title>
 </head>
 <body>
 <?php

$nombre = "anona";
$inverso = strrev($nombre);

if($nombre==$inverso){
    echo "$nombre es palindromo";
}
else{
    echo "$nombre no es palindromo";
}

 ?>
 </body>
</html>