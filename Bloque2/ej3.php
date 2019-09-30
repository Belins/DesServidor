<html>
 <head>
  <title>Comunidad</title>
 </head>
 <body>
 <?php 
$valores = array();
$max_num = 20;
for ($x=0;$x<$max_num;$x++) {
    $num_aleatorio = rand(1,100);
    array_push($valores,$num_aleatorio);
}
$qwe= $valores[1];
$min = min($valores);
$max = max($valores);
$count = count($valores);
$sum = array_sum($valores);
$media = $sum/$count;
echo "<p style='color:blue'>el valor minimo es $min</p>";
echo "<p style='color:green'>el valor mayor es $max</p>";
echo "<p>hay $count valores</p>";
echo "<p>la suma es $sum</p>";
echo "<p>la media es $media</p>";


 ?>
 </body>
</html>