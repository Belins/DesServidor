<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<?php
	
        function comprobar(){
            if (!file_exists('config.php')){
                throw new exception("config.php no existe");
            }
            else{
                echo "existe";
            }
        }
			


	?>

</body>
</html>