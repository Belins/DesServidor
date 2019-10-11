<html>
 <head>
  <title>Tienda online</title>
 </head>
 <body>
 <?php
    $lista = array();
    if (isset($_GET['submit'])) {
        stringtoarray ($_GET['agenda'],$array_agenda);
        if ($_GET['nombre'] == null){
            
        }
        else{
            $lista[$_GET['nombre']] = $_GET['email'];
        }
    }

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

    /*function insertar($nombre, $email){
        $lista[$nombre] = $email;
        return $lista[$nombre];
    }*/

 ?>
<form action="agenda.php" method="get">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Enviar">
    <input name= "agenda" value="<?php echo $lista['']?>">
 </body>
</html>