<html>
 <head>
  <title>Comunidad</title>
 </head>
 <body>
 <?php 
$a = 2;
$b = 4;
function crearTablas($a, $b){
    echo "<table border = 3>";
    for($i=1; $i<=$a; $i++){
        echo "<tr>";
        for($f=1; $f<=$b; $f++){
            echo "<td>a</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
crearTablas($a, $b)
 ?>
 </body>
</html>