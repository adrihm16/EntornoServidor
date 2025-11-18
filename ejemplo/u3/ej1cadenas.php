<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cadena</title>
    <style>
        table {
            border-collapse: collapse;
            background-color: #e2ffc8;
            font-family: Arial;
            border-color: white;
        }

        th {
            background-color: #83bd3e;
            color: white;
        }

        td:nth-child(even) {
            font-weight: bold;

        }

        td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    $cadena = "saludos";
    $contador = 0;
    echo "<table border=1>";
    echo "<tr><th>Caracter</th><th>Posicion</th></tr>";
    for ($i = 0; $i < strlen($cadena); $i++) {
        echo "<tr>";
        echo "<td>$cadena[$i]</td>";
        echo "<td>$i</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
