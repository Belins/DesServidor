<!doctype html>
<html>
	<head>
		<title>
			Agenda
		</title>
	</head>
	<body>
		<?php
			//Funciones extra que he utilizado para gestionar la agenda

			function stringtoarray ($string_agenda,&$array_agenda) {
				//Convierte la agenda de datos (string) en un array asociativo
				$a=explode (";",$string_agenda);
				for($i=0; $i<count($a); $i++) {
					$array_agenda[$a[$i]]=$a[$i+1];
					$i++;
				}
				return true;
			}

			function arraytostring ($array_agenda) {
				//Convierte el array asociativo en una cadena de caracteres cada elemento separado por ;
				foreach($array_agenda as $key_nombre => $value)
				{
				  $string_agenda.=$key_nombre.";".$value.";";
				}
				//Quitamos el ultimo ';''
				$string_agenda=substr($string_agenda, 0, -1);
				return $string_agenda;
			}

		?>
		<?php
		//Creamos un array para almacenar los datos de la agenda
		$array_agenda=array();

		if (isset ($_POST['submit'])) {
			//Rellenamos el array con los datos recibidos en el campo oculto 'agenda' del formulario
			stringtoarray ($_POST['agenda'],$array_agenda);
            // REALIZAR COMPROBACIONES NECESARIAS
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];

            if($nombre == null){
                echo'<script type="text/javascript">
                        alert("Nombre vacío");
                        window.location.href="agenda2.php";
                    </script>';
            }
            else{
                if($array_agenda[$nombre] == false && $email != null){
                    $array_agenda[$nombre] = $email;
                }
                if($array_agenda[$nombre] && $email != null){
                    $array_agenda[$nombre] = $email;
                }
                else if($array_agenda[$nombre] && $email == null){
                    unset($array_agenda[$nombre]);
                }
            }
		}
		?>
		<!-- Añado index.php en action para recibir valores -->
		<form action="agenda2.php" method="post">
			<!-- Campo oculto para ir almacenando los elementos de la agenda-->
			<input name="agenda" type="hidden" value="<?php echo  arraytostring ($array_agenda) ?>"/><br>
			Nombre:<br>
			<input type="text" name="nombre"><br><br>
			Email:<br>
			<input type="text" name="email"><br><br>
			<!-- Creamos un campo oculto para almacenar el nombre que pasamos desde index2.html -->
			<input type="hidden" name="nomb" value="<?php echo $_GET['nomb']; ?>" hidden>
			<button type="submit" name="submit" >Añadir contacto</button>
		</form>
		<!-- Añadimos codigo php para recojer el nombre de index2.html -->
		<h2>AGENDA DE <?php echo $_POST['nomb'] ?></h2>
		<table>
			<tr>
				<th>Nombre</th>
				<th>Email</th>
			</tr>
			<?php
			foreach($array_agenda as $key_nombre => $email) {
					echo "<tr><td>$key_nombre</td><td>$email</td></tr>";
			}
			?>
		</table>
		
	</body>
</html>