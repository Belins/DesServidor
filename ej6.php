<html>
 <head>
  <title>Potencias</title>
 </head>
 <body>
 <?php

$a = 1;
do {
    $b = (pow($a, 3));
    echo $a. " -- ".$b."<br>";
    $a ++;
}
while($a <=4);
 ?>
 </body>
</html>