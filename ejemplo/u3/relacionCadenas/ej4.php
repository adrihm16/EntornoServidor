<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Comparación de Cadenas</title>
</head>
<body>

<h2>Comparación de Cadenas</h2>

<?php

    $cadenas = ["agua", "azul", "aguacero", "azucena", "romero"];
    echo "<table border='1'>";
    echo "<tr><th></th>";
    foreach ($cadenas as $c) {
        echo "<td>$c</td>";
    }
    echo "</tr>";
    for ($i = 0; $i < count($cadenas); $i++) {
        echo "<tr>";
        echo "<td>$cadenas[$i]</td>";
        for ($j = 0; $j < count($cadenas); $j++) {
            $inicioI = substr($cadenas[$i], 0, 3);
            $inicioJ = substr($cadenas[$j], 0, 3);
            if ($inicioI == $inicioJ) {
                echo "<td style='background-color: #b4ef74'></td>";
            }else{
                echo "<td style='background-color: #ff2b2b'></td>";
            }
        }
    }
?>

</body>
</html>