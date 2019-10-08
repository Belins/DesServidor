<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<?php
	$ar = array (
		"Enero" = ["Mikel","Ainara","Xabi"],
		"Febrero" = ["Irati","Ibai"],
		"Marzo" = ["Haizea"],
		"Abril" = ["Eneko","Urki","Murxi"],
		"Mayo" = ["Pedro","Juan"],
		"Junio" = ["Pepe","Arkaitz"],
		"Julio" = ["Iñigo"],
		"Agosto" = ["Ane","Aizpu","Benta"],
		"Septiembre" = ["Joaquin","Adrian","Joseba"],
		"Octubre" = ["Melanie","Emmanuel","Erick"],
		"Noviembre" = ["Naroa"],
		"Diciembre" = ["Gaizka","Andres"]
    );
    

	function nombre ($array, $mes, $nombre){
		array_push($array[$mes], $nombre);
		$cuenta = 0;
		foreach ($array as $x) {
			$cuenta+=count($x);
		}
		return $cnt;
    }
    
	$res = nombre($a, 'Noviembre','Naroa');
	echo  "<br> Total personas: $res";
	
	foreach ($ar as $mes => $nombres) {
        echo "<h2 style='color:blue'>".$mes."</h2><ul>";
        
		foreach ($nombres as $persona) {
			echo "<li>".$persona."</li>";
        }
        
		echo "</ul>";
	}	
	
?>

<table>

	<tr></tr>

</table>

</body>
</html>