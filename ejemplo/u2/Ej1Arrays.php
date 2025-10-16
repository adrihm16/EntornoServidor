<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
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
            border: 2px solid #7630ba;
            padding: 10px;
            text-align: center;
            background: #7630ba;
            color: #ffffff;
        }

        tr {
            background-color: #ffffff;
            border: 2px solid #7630ba;
        }

    </style>
</head>
<body>
    <table>
        <?php
            $lista = [
                    mt_rand(0,50),
                    mt_rand(0,50),
                    mt_rand(0,50),
                    mt_rand(0,50)
            ];
            echo "<th>Vector original</th>";
            echo "<th>";
            for ($i = 0; $i < count($lista); $i++) {

                echo $lista[$i];
                if ($i!=count($lista) - 1) {
                    echo "-";
                }
            }
            echo "</th>";
            $mayor = PHP_INT_MIN;
            $menor = PHP_INT_MAX;

            $ordenado = sort($lista);
            $pares = [];
            $impares = [];
            foreach ($lista as $num) {
                if ($num < $menor) {
                    $menor = $num;
                }
                if ($num > $mayor) {
                    $mayor = $num;
                }
                if ($num % 2 == 0) {
                    $pares[] = $num;
                } else {
                    $impares[] = $num;
                }
            }
            echo "<tr>";
            echo "<td>Mayor</td>";
            echo "<td>", $mayor, "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Menor</td>";
            echo "<td>", $menor, "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Vector inverso</td>";
            echo "<td>";
            rsort($lista);
            for ($i = 0; $i < count($lista); $i++) {
                echo $lista[$i];
                if ($i!=count($lista) - 1) {
                    echo "-";
                }
            }
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Vector ordenado</td>";
            echo "<td>";
            sort($lista);
            for ($i = 0; $i < count($lista); $i++) {
                echo $lista[$i];
                if ($i!=count($lista) - 1) {
                    echo "-";
                }
            }
            echo "</td>";
            echo "</tr>";
            echo "<td>Vector solo pares</td>";
            echo "<td>";
            for ($i = 0; $i < count($pares); $i++) {
                echo $pares[$i];
                if ($i!=count($pares) - 1) {
                    echo "-";
                }
            }
            echo "</td>";
            echo "</tr>";
            echo "</tr>";
            echo "<td>Vector solo impares</td>";
            echo "<td>";
            for ($i = 0; $i < count($impares); $i++) {
                echo $impares[$i];
                if ($i!=count($impares) - 1) {
                    echo "-";
                }
            }
            echo "</td>";
            echo "</tr>";
        ?>
    </table>
</body>
</html>