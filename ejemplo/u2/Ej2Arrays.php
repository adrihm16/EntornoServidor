<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio2</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            color: black;
        }

        td:first-child {
            font-weight: bold;
        }

        td {
            border: 0px solid #ffffff;
            padding: 10px;
            text-align: center;
        }

        th {
            border: 0px solid #b4ef74;
            padding: 10px;
            text-align: center;
            background: #85b130;
            color: #ffffff;
        }

        tr {
            background-color: #f2ffd6;
            border: 2px solid #b4ef74;
        }

        tr:nth-child(even) {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
<table>
    <?php
        $lista = [
                "Granada" => 150000,
                "Madrid" => 3000000,
                "Barcelona" => 2800000,
                "Londres" => 4000000,
                "Málaga" => 240000
        ];
        echo "<th>Ciudad</th>";
        echo "<th>Población (contenido)</th>";
        foreach ($lista as $ciudad => $poblacion) {
            echo "<tr>";
            echo "<td>$ciudad</td>", "<td>$poblacion</td>";
            echo "</tr>";
        }
        echo "<th>Ciudad</th>";
        echo "<th>Población (contenido)</th>";
        ksort($lista);
        foreach ($lista as $ciudad => $poblacion) {
            echo "<tr>";
            echo "<td>$ciudad</td>", "<td>$poblacion</td>";
            echo "</tr>";
        }
        echo "<th>Ciudad</th>";
        echo "<th>Población (contenido)</th>";
        arsort($lista);
        foreach ($lista as $ciudad => $poblacion) {
            echo "<tr>";
            echo "<td>$ciudad</td>", "<td>$poblacion</td>";
            echo "</tr>";
        }

        $maxCiudad = array_key_first($lista);
        $maxPoblacion = current($lista);
        $minCiudad = array_key_last($lista);
        $minPoblacion = end($lista);
        echo "<tr><th colspan='2'>Ciudad con más y menos población</th></tr>";
        echo "<tr><td>Más población: $maxCiudad</td><td>$maxPoblacion</td></tr>";
        echo "<tr><td>Menos población: $minCiudad</td><td>$minPoblacion</td></tr>";


    ?>
</table>
</body>
</html>