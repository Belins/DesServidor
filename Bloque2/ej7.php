  
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<?php

	function potencia ($base, $exp = 2){
		return pow($base, $exp);
	}
    
    
	$resultado = potencia(2,4);
	echo "$resultado";
	?>

</body>
</html>