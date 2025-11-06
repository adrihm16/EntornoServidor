<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supermercado</title>
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
<?php
    $ventas = [
            "lunes" => ["tomate" => ["precio" => 1.99, "unidadesVend" => 3], "napolitana" => ["precio" => 3, "unidadesVend" => 6]],
            "martes" => ["macarrones" => ["precio" => 1, "unidadesVend" => 3], "corazones" => ["precio" => 2, "unidadesVend" => 5]],
            "miercoles" => ["garbanzos" => ["precio" => 1.99, "unidadesVend" => 6], "napolitana" => ["precio" => 3, "unidadesVend" => 8]],
            "jueves" => ["tomate" => ["precio" => 1.99, "unidadesVend" => 3], "macarrones" => ["precio" => 1, "unidadesVend" => 2]],
            "viernes" => ["arroz" => ["precio" => 1.5, "unidadesVend" => 7], "corazones" => ["precio" => 2, "unidadesVend" => 2]],
            "sabado" => ["arroz" => ["precio" => 1.5, "unidadesVend" => 3], "garbanzos" => ["precio" => 1.99, "unidadesVend" => 6]],
    ];
    $almacen = [
            "alimentacion" => [
                    "frescos" => [
                            "tomate" => ["precio" => 1.99, "stock" => 30]
                    ],
                    "no Frescos" => [
                            "arroz" => ["precio" => 1.5, "stock" => 20],
                            "garbanzos" => ["precio" => 1.99, "stock" => 40],
                            "macarrones" => ["precio" => 1, "stock" => 50]
                    ]
            ],
            "dulces" => [
                    "gominolas" => [
                            "corazones" => ["precio" => 2, "stock" => 10]
                    ],
                    "bollería" => [
                            "napolitana" => ["precio" => 3, "stock" => 15]
                    ]
            ]
    ];
    echo "<table>";
    echo "<tr><th colspan='10'>ventas 


</th></tr>";
    echo "<tr class='info'><td>Dia</td><td>nombreProd</td><td>Precio</td><td>unidades Vendidas</td><td>total</td><td>nombreProd</td><td>Precio</td><td>unidades Vendidas</td><td>total</td>";
    $gananciasDia = [];
    foreach ($ventas as $dia => $productos) {
        $totalDia = 0;
        echo "<tr>";
        echo "<td>$dia</td>";
        foreach ($productos as $nombre => $atributos) {
            echo "<td>$nombre</td>";
            $totalProducto = 0;
            $precio = 0;
            $unidadesVend = 0;
            foreach ($atributos as $atributo => $valor) {
                echo "<td>$valor</td>";
                if ($atributo == "unidadesVend") {
                    $unidadesVend = $valor;
                }
                if ($atributo == "precio") {
                    $precio = $valor;
                }
                $totalProducto = $precio * $unidadesVend;
                $totalDia = $totalDia + $totalProducto;
            }
            echo "<td>$totalProducto</td>";
        }
        $gananciasDia [$dia] = $totalDia;
    }
    echo "</table>";
    /**
     * @param array $gananciasDia
     */
    function mostrarGananciasPorDia(array $gananciasDia)
    {
        echo "<table>";
        echo "<tr><th colspan='10'>Ganancias por dia</th></tr>";
        foreach ($gananciasDia as $dia => $ganancias) {
            echo "<tr>";
            echo "<td>$dia</td>";
            echo "<td>$ganancias</td>";
            echo "<tr>";
        }
        $aux = $gananciasDia;
        arsort($aux);
        echo "<th colspan='6'>mejor día</th>";
        $maxDia = array_key_first($aux);
        $maxValor = current($aux);
        echo "<tr><td colspan='3'>$maxDia</td><td colspan='3'>$maxValor</td></tr>";
        echo "</table>";
    }

    mostrarGananciasPorDia($gananciasDia);

    echo "<table>";
    echo "<tr><th colspan='3'>Almacén</th></tr>";
    echo "<tr><td>nombreProd</td><td>Precio</td><td>Stock</td></tr>";
    $cantidadProductos = [];
    foreach ($almacen as $seccion => $estanterias) {
        $productosSeccion = 0;
        echo "<tr><th>$seccion</th></tr>";
        foreach ($estanterias as $estanteria => $productos) {
            echo "<tr class='info' colspan='10'><td>$estanteria</td></tr>";
            foreach ($productos as $nombre => $atributos) {
                $stock = 0;
                echo "<tr><td>$nombre</td>";
                $productosSeccion++;
                foreach ($atributos as $atributo => $valor) {
                    echo "<td>$valor</td>";
                    if ($valor == "stock") {
                        $stock = $valor;
                    }
                    $cantidadProductos[$nombre] = $stock;
                }
                echo "</tr>";
            }
        }

        echo "<tr><td colspan='2'>Productos totales en sección:</td><td colspan='2'>$productosSeccion</td></tr>";
    }
    function mostrarProductoConMasStock(array $cantidadProductos)
    {
        echo "<table>";
        $aux = $cantidadProductos;
        arsort($aux);
        echo "<th colspan='2'>Producto con más stock</th>";
        $maxNombre = array_key_first($aux);
        $maxValor = current($aux);
        echo "<tr><td colspan='3'>$maxNombre</td><td colspan='3'>$maxValor</td></tr>";
        echo "</table>";
    }
    mostrarProductoConMasStock($cantidadProductos);
?>
</body>
</html>
