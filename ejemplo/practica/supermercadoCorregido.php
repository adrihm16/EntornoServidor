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
            "lunes" => [
                    ["nombre" => "tomate", "precio" => 1.99, "unidadesVend" => 3],
                    ["nombre" => "napolitana", "precio" => 3, "unidadesVend" => 6]
            ],
            "martes" => [
                    ["nombre" => "macarrones", "precio" => 1, "unidadesVend" => 3],
                    ["nombre" => "corazones", "precio" => 2, "unidadesVend" => 5]
            ],
            "miercoles" => [
                    ["nombre" => "garbanzos", "precio" => 1.99, "unidadesVend" => 6],
                    ["nombre" => "napolitana", "precio" => 3, "unidadesVend" => 8]
            ],
            "jueves" => [
                    ["nombre" => "tomate", "precio" => 1.99, "unidadesVend" => 3],
                    ["nombre" => "macarrones", "precio" => 1, "unidadesVend" => 2]
            ],
            "viernes" => [
                    ["nombre" => "arroz", "precio" => 1.5, "unidadesVend" => 7],
                    ["nombre" => "corazones", "precio" => 2, "unidadesVend" => 2]
            ],
            "sabado" => [
                    ["nombre" => "arroz", "precio" => 1.5, "unidadesVend" => 3],
                    ["nombre" => "garbanzos", "precio" => 1.99, "unidadesVend" => 6]
            ],
    ];

    echo "<table border='1'>";
    echo "<tr><th>Día</th><th>Producto</th><th>Precio</th><th>Unidades</th><th>Total</th></tr>";

    foreach ($ventas as $dia => $productos) {
        $primeraFila = true;
        foreach ($productos as $producto) {
            $total = $producto['precio'] * $producto['unidadesVend'];
            if ($primeraFila) {
                echo "<tr>";
                echo "<td rowspan='" . count($productos) . "'>$dia</td>";
                $primeraFila = false;
            } else {
                echo "<tr>";
            }
            echo "<td>{$producto['nombre']}</td>";
            echo "<td>" . number_format($producto['precio'], 2) . " €</td>";
            echo "<td>{$producto['unidadesVend']}</td>";
            echo "<td>" . number_format($total, 2) . " €</td>";
            echo "</tr>";
        }
    }
    echo "</table>";

    $almacen = [
            "alimentacion" => [
                    "frescos" => [
                            ["nombre" => "tomate", "precio" => 1.99, "stock" => 30]
                    ],
                    "no Frescos" => [
                            ["nombre" => "arroz", "precio" => 1.5, "stock" => 20],
                            ["nombre" => "garbanzos", "precio" => 1.99, "stock" => 40],
                            ["nombre" => "macarrones", "precio" => 1, "stock" => 50]
                    ]
            ],
            "dulces" => [
                    "gominolas" => [
                            ["nombre" => "corazones", "precio" => 2, "stock" => 10]
                    ],
                    "bollería" => [
                            ["nombre" => "napolitana", "precio" => 3, "stock" => 15]
                    ]
            ]
    ];
    echo "<table border='1'>";
    echo "<tr><th>Sección</th><th>Estantería</th><th>Nombre</th><th>Precio</th><th>Stock</th></tr>";

    foreach ($almacen as $seccion => $estanterias) {
        $totalProductosEnSeccion = 0;
        foreach ($estanterias as $productos) {
            $totalProductosEnSeccion += count($productos);
        }
        $primeraFilaSeccion = true;
        foreach ($estanterias as $estanteria => $productos) {
            $primeraFilaEstanteria = true;
            foreach ($productos as $producto) {
                echo "<tr>";
                // --- Sección (solo primera vez) ---
                if ($primeraFilaSeccion) {
                    echo "<td rowspan='$totalProductosEnSeccion'>$seccion</td>";
                    $primeraFilaSeccion = false;
                }
                // --- Estantería (solo primera vez en esta estantería) ---
                if ($primeraFilaEstanteria) {
                    echo "<td rowspan='" . count($productos) . "'>$estanteria</td>";
                    $primeraFilaEstanteria = false;
                }
                // --- Producto ---
                echo "<td>{$producto['nombre']}</td>";
                echo "<td>" . number_format($producto['precio'], 2) . " €</td>";
                echo "<td>{$producto['stock']}</td>";
                echo "</tr>";
            }
        }
    }
    echo "</table>";
?>
</body>
</html>
