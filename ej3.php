<html>
 <head>
  <title>Comunidad</title>
 </head>
 <body>
 <?php 
$a = 2;
$b = 4;
$c = 6;
if($a > $b && $a > $c){
    echo "<p>El mayor es $a</p>";
}
else if($b > $a && $b >$c){
    echo "<p>El mayor es $b</p>";
}
else{
    echo "<p>El mayor es $c</p>";
}

 ?>
 </body>
</html>