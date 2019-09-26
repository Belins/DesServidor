<html>
 <head>
  <title>Rango edad</title>
 </head>
 <body>
 <?php 
$a = 90;

if ($a<10){
    echo "<p>Se encuentra entre 0 y 10</p>";
}
if ($a>=10 && $a<20){
    echo "<p>Se encuentra entre 10 y 20</p>";
}
if ($a>=20 && $a<30){
    echo "<p>Se encuentra entre 20 y 30</p>";
}
if ($a>=30 && $a<40){
    echo "<p>Se encuentra entre 30 y 40</p>";
}
if ($a>=40 && $a<50){
    echo "<p>Se encuentra entre 40 y 50</p>";
}
if ($a>=50 && $a<60){
    echo "<p>Se encuentra entre 50 y 60</p>";
}
if ($a>=60 && $a<70){
    echo "<p>Se encuentra entre 60 y 70</p>";
}
if ($a>=70 && $a<80){
    echo "<p>Se encuentra entre 70 y 80</p>";
}
if ($a>=80 && $a<90){
    echo "<p>Se encuentra entre 80 y 90</p>";
}
else if($a>=90 && $a<100){
    echo "<p>$a Se encuentra entre 90 y 100</p>";
}
 ?>
 </body>
</html>