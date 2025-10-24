<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mostrar notas</title>
</head>
<body>
<?php
    $datos = [
            "alumno" => "Juan Ramírez",
            "Lengua" => "Sobresaliente",
            "Matematicas" => "notable",
            "Historia" => "Notable",
            "Dibujo" => "Insuficiente"
    ];
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