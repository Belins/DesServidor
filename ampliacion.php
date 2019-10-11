<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio5</title>
    <meta charset="utf-8">
</head>

<body>

    <?php

    function calcularDia($dia, $mes)
    {
        $fecha = date('Y') . "-" . $mes . "-" . $dia;
        $dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
        return $dias[date('N', strtotime($fecha))];
    
    }
    ?>

    <form method='get' action='ampliacion.php'>
        <input type="number" name="dia" min="1" max="31" placeholder="dia">
        <input type="number" name="mes" min="1" max="12" placeholder="mes">
        <input type="submit" name="submit">
    </form>

    <?php

    if (isset($_GET['submit'])) {
        $resultado =  calcularDia($_GET['dia'], $_GET['mes']);
        echo $resultado;
    }

    ?>

</body>

</html>