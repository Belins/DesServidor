<html>
 <head>
  <title>Comunidad</title>
 </head>
 <body>
 <?php 
 

 $piso = 3;
 $puerta = 4;
 $letras = ["A","B","C","D","E","F","G","H"];
 for($i = 1; $i <= $piso; $i++){
     for($j=0; $j <=$puerta; $j++){
         echo "$i"."."." Puerta $letras[$j]"."\n";
     }
     echo "<br>";
 }


 
 ?>
 </body>
</html>