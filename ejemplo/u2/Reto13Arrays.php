<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reto13</title>
</head>
<body>
<?php
    $fabrica = [
            1 => [
                    ["produccion" => "500", "defectuosos" => 10, "parada" => 1.5],
                    ["produccion" => "700", "defectuosos" => 17, "parada" => 1],
            ],
            2 => [
                    ["produccion" => "300", "defectuosos" => 5, "parada" => 2],
                    ["produccion" => "450", "defectuosos" => 11, "parada" => 1.5]
            ],
            3 => [
                    ["produccion" => "600", "defectuosos" => 15, "parada" => 1.2],
                    ["produccion" => "700", "defectuosos" => 17, "parada" => 1]
            ]
    ];
    echo "<table border='1'>";
    foreach ($fabrica as $linea => $dias) {
        $contadorDias = 0;
        $produccionTotalLinea = 0;
        echo "<tr>";
        echo "<th>línea $linea</th>";
        foreach ($dias as $dia => $atributos) {
            $contadorDias++;
            echo "<tr>";
            echo "<th>día $contadorDias</th>";
            echo "</tr>";
            foreach ($atributos as $atributo => $valor) {
                echo "<tr>";
                echo "<td>$atributo</td>";
                echo "<td>$valor</td>";
                echo "</tr>";
            }
        }
    }
    echo "</table>";
    /**
     * @param array $fabrica
     */
    function CalcularProduccionTotal(array $fabrica)
    {
        echo "<h3>Producción Total Por Línea</h3>";
        foreach ($fabrica as $linea => $dias) {
            $contadorDias = 0;
            $produccionTotalLinea = 0;

            echo "Línea: $linea";
            echo "<br>";
            foreach ($dias as $dia => $atributos) {
                $contadorDias++;
                foreach ($atributos as $atributo => $valor) {
                    if ($atributo == "produccion") {
                        $produccionTotalLinea += $valor;
                    }
                }
            }
            echo "Produccion total: $produccionTotalLinea";
            echo "<br><br>";
        }
    }
    calcularProduccionTotal($fabrica);
    /**
     * @param array $fabrica
     */
    function CalcularPorcentajeDefectuosos(array $fabrica)
    {
        echo "<h3>Porcentaje Equipos Defectuosos Por Línea</h3>";
        foreach ($fabrica as $linea => $dias) {
            $contadorDias = 0;
            $produccionTotalLinea = 0;
            $defectuosoTotalLinea = 0;
            $porcentajeDefectuoso = 0;
            echo "Línea: $linea";
            echo "<br>";
            foreach ($dias as $dia => $atributos) {
                $contadorDias++;
                foreach ($atributos as $atributo => $valor) {
                    if ($atributo == "produccion") {
                        $produccionTotalLinea += $valor;
                    } else if ($atributo == "defectuosos") {
                        $defectuosoTotalLinea += $valor;
                    }
                }
            }
            $porcentajeDefectuoso = round(($defectuosoTotalLinea / $produccionTotalLinea * 100), 2);
            echo "Porcentaje de defectuosos: $porcentajeDefectuoso";
            echo "<br><br>";
        }
    }

    CalcularPorcentajeDefectuosos($fabrica);
?>
</body>
</html>