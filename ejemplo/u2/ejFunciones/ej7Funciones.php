<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio7</title>
</head>
<body>
<?php
    $nombre1 = "manuel";
    $nombre2 = "carlos";
    $fecha1 = 2;
    $fecha2 = 25;

    function mostrarDatos($datos)
    {
        foreach ($datos as $campo => $valor) {
            echo "<table border='1'>";
            echo "<tr><td>$campo</td><td>$valor</td></tr>";
            echo "</table>";
        }
    }

    mostrarDatos($datos);
?>
</body>
</html>