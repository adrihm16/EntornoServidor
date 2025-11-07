<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reto11</title>
    <style>
        body {
            background-color: black;
        }

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
        $sistema = [
                "Conil" => [
                        ["Manuel", 18, "M", "Bachillerato", 500],
                        ["Pablo", 23, "M", "Eso", 1800],
                        ["Manuela", 35, "F", "Universidad", 1800],
                        ["Alejandro", 44, "M", "FP", 1900],
                        ["Paula", 25, "F", "Universidad", 1800]

                ],
                "Vejer" => [
                        ["Lidia", 55, "F", "Eso", 1200],
                        ["Pablo", 44, "M", "FP", 1900],
                        ["Manuel", 18, "M", "Bachillerato", 800],
                        ["Carmen", 35, "F", "Universidad", 2100]
                ],
                "Barbate" => [
                        ["Claudia", 57, "F", "Eso", 1600],
                        ["Manuel", 19, "M", "Bachillerato", 0],
                        ["Alejandro", 34, "M", "FP", 1600],
                        ["Lucia", 17, "F", "Bachillerato", 500],
                        ["Rosario", 3, "F", "Nada", 0],
                ]
        ];
        $listaSalariosMedios = [];
        $salarioTotalFp = 0;
        $contadorFp = 0;
        $salarioTotalEso = 0;
        $contadorEso = 0;
        $salarioTotalBach = 0;
        $contadorBach = 0;
        $salarioTotalNada = 0;
        $contadorNada = 0;
        $salarioTotalUni = 0;
        $contadorUni = 0;
        foreach ($sistema as $pueblo => $habitante) {
            echo "<tr><th colspan='6'>$pueblo</th></tr>";
            echo "<tr class='info'><td>Nombre</td><td>Edad</td><td>Sexo</td><td>Estudios</td><td>Salario</td></tr>";
            $mediaEdad = 0;
            $totalEdad = 0;
            $mediaSalario = 0;
            $totalSalario = 0;
            $contadorUniversitarios = 0;
            $porcentajeUniversitarios = 0;
            foreach ($habitante as $valor) {
                switch (strtolower($valor[3])) {
                    case "universidad":
                        $salarioTotalUni += $valor[4];
                        $contadorUni++;
                        break;
                    case "bachillerato":
                        $salarioTotalBach += $valor[4];
                        $contadorBach++;
                        break;
                    case "nada":
                        $salarioTotalNada += $valor[4];
                        $contadorNada++;
                        break;
                    case "fp":
                        $salarioTotalFp += $valor[4];
                        $contadorFp++;
                        break;
                    case "eso":
                        $salarioTotalEso += $valor[4];
                        $contadorEso++;
                        break;
                }
                echo "<tr>";
                $totalEdad += $valor[1];
                $totalSalario += $valor[4];
                if (strtolower($valor[3]) == "universidad") {
                    $contadorUniversitarios++;
                }
                foreach ($valor as $dato) {
                    echo "<td>$dato</td>";
                }
                echo "</tr>";
            }

            $mediaEdad = round($totalEdad / count($habitante));
            $mediaSalario = round($totalSalario / count($habitante));
            $listaSalariosMedios[$pueblo] = $mediaSalario;
            $porcentajeUniversitarios = $contadorUniversitarios * 100 / count($habitante);
            echo "<tr>";
            echo "<td colspan='2'>Media edad: $mediaEdad</td>";
            echo "<td colspan='2'>Media salario: $mediaSalario</td>";
            echo "<td colspan='2'>Porcentaje universitarios: $porcentajeUniversitarios%</td>";
            echo "</tr>";
        }
        $mediaSalarioFp = round($salarioTotalFp / $contadorFp, 2);
        $mediaSalarioUni = round($salarioTotalUni / $contadorUni, 2);
        $mediaSalarioBach = round($salarioTotalBach / $contadorBach, 2);
        $mediaSalarioNada = round($salarioTotalNada / $contadorNada, 2);
        $mediaSalarioEso = round($salarioTotalEso / $contadorEso, 2);
        $mediasEstudio = [
                "eso" => $mediaSalarioEso,
                "bachillerato" => $mediaSalarioBach,
                "nada" => $mediaSalarioNada,
                "fp" => $mediaSalarioFp,
                "universidad" => $mediaSalarioUni
        ];
        arsort($listaSalariosMedios);
        $maxPueblo = array_key_first($listaSalariosMedios);
        $maxSalario = current($listaSalariosMedios);
        echo "<tr><th colspan='6'>Mayor Salario medio: </th></tr>";
        echo "<tr><td>$maxPueblo</td><td>$maxSalario €</td></tr>";
        echo "<tr><th colspan='6'>salario medio/estudios: </th></tr>";
        foreach ($mediasEstudio as $estudio => $valor) {
            echo "<tr>";
            echo "<td>$estudio</td>";
            echo "<td>$valor</td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>