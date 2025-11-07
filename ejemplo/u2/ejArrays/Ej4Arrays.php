<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio4</title>
    <style>
        table {
            border-collapse: collapse;
            border-bottom: 4px solid black;
            border-top: 4px solid black;
            width: 80%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            color: black;
        }

        td {
            border: 0px solid #ffffff;
            padding: 10px;
            text-align: center;
        }

        th {
            border-bottom: 4px solid black;
            padding: 10px;
            text-align: center;
            background: #ff803d;
            color: #ffffff;
        }

        th.verde {
            border-bottom: 4px solid black;
            padding: 10px;
            text-align: center;
            background: #39ae00;
            color: #ffffff;
        }

        .verde {
            padding: 10px;
            text-align: center;
            background: #39ae00;
            color: #ffffff;
        }

        tr {
            background-color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #cccccc;
        }
    </style>
</head>
<body>
<table>
    <?php
        $lista = [
                0 => ["nombre" => "Pepe", "peso" => 4.5, "color" => "Marrón", "edad" => 12],
                1 => ["nombre" => "Sparky", "peso" => 3, "color" => "Blanco", "edad" => 2],
                2 => ["nombre" => "Tobby", "peso" => 7.2, "color" => "Beige", "edad" => 8],
                3 => ["nombre" => "Bigotes", "peso" => 4, "color" => "Negro", "edad" => 9],
                4 => ["nombre" => "Ricky", "peso" => 0.1, "color" => "Verde", "edad" => 2]
        ];
        echo "<th class='verde'><b>fila</b></th>", "<th><b>Nombre</b></th>", "<th><b>Peso</b></th>", "<th><b>Color</b></th>", "<th><b>Edad</b></th>";
        foreach ($lista as $fila => $mascota) {

            echo "<tr>";
            echo "<td class='verde'><b>" . $fila . "</b></td>";

            $suma = 0;
            $contador = 0;

            foreach ($mascota as $apartado => $valor) {
                echo "<td>" . $valor . "</td>";
                $contador++;
            }
            echo "</tr>";
        }
        reset($lista);
        $fila = 0;
        $seguir = true;
        echo "<th class='verde'><b>fila</b></th>", "<th><b>Peso</b></th>";
        while ($seguir && ($mascota = current($lista)) !== false) {
            if ($fila == 3) {
                echo "<tr><td class='verde'><b>{$fila}</b></td>";
                reset($mascota);
                $seguir2 = true;
                while ($seguir2 && ($valor = current($mascota)) !== false) {
                    $clave = key($mascota);
                    if ($clave == "peso") {
                        echo "<td>{$valor}</td>";
                        $seguir2 = false;
                    }
                    next($mascota);
                }
                echo "</tr>";
                $seguir = false;
            }
            $fila++;
            next($lista);
        }
    ?>
</table>
</body>
</html>