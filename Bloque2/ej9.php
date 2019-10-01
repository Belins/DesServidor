<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<?php
	
	$array =array();

	for ($i=0; $i <4 ; $i++) { 
		$array[$i]  = random_int(0, 100);
	}

    $array[4] = random_int(-100, -1);
    

	function calcular ($lateral){
		try {
			if($lateral < 0){
                throw new Exception ("El lado ".$lateral. " es negativo");
            }
			else{
                return "El area del cuadrado con el lateral "+$lateral+ " es "+ pow($lateral, 2);
            }

		} catch (Error $e) {
			echo getMessage();
		}
	}
	foreach ($array as $valor) {
		echo calcular($valor)."<br>";
	}
	?>

</body>
</html>