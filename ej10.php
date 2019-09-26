<html>
 <head>
  <title>Tienda online</title>
 </head>
 <body>
 <?php

$tipo_compra = "ropa";
$total_compra = 50;
// HE HECHO SI EL PRECIO ES MENOS A 80 EL ENVIO SE COBRA SINO NO
if($tipo_compra = "ropa"){
    if($total_compra<80){
    echo "Los gastos de envio son 9 euros";
    $total_compra = $total_compra*1.21;
    $total_compra = $total_compra+9;
    }
    else if ($total_compra>=80){
    echo "Los gastos de envio son gratis";
    $total_compra = $total_compra*1.21;
    }
}
else if($tipo_compra = "animal"){
    echo "No se puede realizar envio de mascotas";
    $total_compra = $total_compra*1.1;
}
$total_compra = round($total_compra);
echo " y el precio total es $total_compra €";


 ?>
 </body>
</html>