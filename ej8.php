<html>
 <head>
  <title>Piramide</title>
 </head>
 <body>
 <?php

function piramide ($altura) {
    for ($k=1;$k<=$altura;$k++)
        {
        for ($j=1;$j<=$altura-$k;$j++)
            echo" ";
        for($j=1;$j<=2*$k-1;$j++)
            if ($j%2==0)
            echo" ";
            else
            echo"*";
            echo"<br>";
        }
}
piramide (10);
 ?>
 </body>
</html>