
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio3</title>
    <style>
        table {
            border-collapse: collapse;
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
            border: 0px solid;
            padding: 10px;
            text-align: center;
            background: #8449bf;
            color: #000000;
        }
        .verde {
            border: 0px solid #b4ef74;
            padding: 10px;
            text-align: center;
            background: #8449bf;
            color: #ffffff;
        }

        tr {
            background-color: #ffffff;
            border: 0px solid #b4ef74;
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
            "Antonio" => ["Mates" => mt_rand(0,10), "Lengua" => mt_rand(0,10), "Ciencias Naturales" => mt_rand(0,10), "Geografía" => mt_rand(0,10)],
            "Ana" => ["Mates" => mt_rand(0,10), "Lengua" => mt_rand(0,10), "Ciencias Naturales" => mt_rand(0,10), "Geografía" => mt_rand(0,10)],
            "Benito" => ["Mates" => mt_rand(0,10), "Lengua" => mt_rand(0,10), "Ciencias Naturales" => mt_rand(0,10), "Geografía" => mt_rand(0,10)]
        ];

        echo "<th><b>Alumno</b></th>", "<th><b>Mates</b></th>", "<th><b>Lengua</b></th>", "<th><b>Ciencias Naturales</b></th>", "<th><b>Geografía</b></th>", "<th><b>Media</b></th>";
        foreach ($lista as $alumno => $notas) {
            echo "<tr>";
            echo "<td class='nombre'><b>" . $alumno . "</b></td>";

            $suma = 0;
            $contador = 0;

            foreach ($notas as $asignatura => $nota) {
                echo "<td>" . $nota . "</td>";
                $suma += $nota;
                $contador++;
            }

            $media = $contador > 0 ? round($suma / $contador, 2) : 0;
            echo "<td>" . $media . "</td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>