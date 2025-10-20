<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reto11</title>
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
            width: 15%;
        }

        td {
            border: 2px solid #000000;
            padding: 10px;
            text-align: center;
        }

        th {
            border: 3px solid black;
            padding: 10px;
            text-align: center;
            background: #d0ffc1;
            color: #000000;
        }

        tr {
            background-color: #ffffff;
            border: 0px solid #b4ef74;
        }

        .info {
            font-weight: bold;
            background-color: #dbb8fb;
        }
    </style>
</head>
<body>
<table>
    <?php
        $alumnos = [
                "Lucía" => [
                        "DWES" => [6, 7, 8],
                        "DWEC" => [9, 6, 5],
                        "DIW" => [2, 3, 4],
                        "FOL" => [9, 9, 9],
                        "DES" => [7, 5, 6],
                        "DAI" => [9, 8, 8.5]
                ],
                "Manuel" => [
                        "DWES" => [4.7, 7, 5],
                        "DWEC" => [9, 8, 5],
                        "DIW" => [5, 8, 4],
                        "FOL" => [8, 7, 9],
                        "DES" => [4, 5, 6],
                        "DAI" => [5, 6, 8.5]
                ]
        ];
        $totalMedia = 0;
        $mediaGlobal = 0;
        foreach ($alumnos as $nombre => $asignaturas) {
            $totalMedia = 0;
            $mediaGlobal = 0;
            echo "<tr><th colspan='6'>$nombre</th></tr>";
            echo "<tr class='info'><td>Asignaturas</td><td>1er Trimestre</td><td>2do Trimestre</td><td>3er Trimestre</td><td>media</td><td>resultado</td></tr>";
            foreach ($asignaturas as $nombreAsignatura => $notas) {
                echo "<tr><td>$nombreAsignatura</td>";
                $media = 0;
                $total = 0;
                foreach ($notas as $notaTrimestre) {
                    echo "<td>$notaTrimestre</td>";
                    $total += $notaTrimestre;
                }
                $media = round($total / 3, 2);
                $totalMedia += $media;
                echo "<td>$media</td>";
                if ($media >= 5){
                    echo "<td>Aprobado</td>";
                } else {
                    echo "<td>Suspenso</td>";
                }
                echo "</tr>";
            }
            $mediaGlobal += round($totalMedia/6, 2);
            echo "<tr><td>Global</td><td>$mediaGlobal</td></tr>";
        }
        echo "</table>";

    ?>
</table>
</body>
</html>