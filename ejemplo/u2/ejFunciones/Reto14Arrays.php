<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reto 14</title>
</head>
<body>
<?php
    $almacen = [
            "Pasillo 1" => [
                    "A" => [
                            "Nivel 1" => [
                                    ["nombre" => "Arroz", "cantidad" => 20, "caducidad" => "2026-03-01"]
                            ],
                            "Nivel 2" => [
                                    ["nombre" => "Cereal", "cantidad" => 20, "caducidad" => "2028-11-11"]
                            ]
                    ],
                    "B" => [
                            "Nivel 1" => [
                                    ["nombre" => "Chocolate", "cantidad" => 20, "caducidad" => "2027-03-01"]
                            ],
                            "Nivel 2" => [
                                    ["nombre" => "Cereal", "cantidad" => 20, "caducidad" => "2028-11-11"]
                            ]
                    ]
            ],
            "Pasillo 2" => [
                    "A" => [
                            "Nivel 1" => [
                                    ["nombre" => "Arroz", "cantidad" => 20, "caducidad" => "2026-03-01"]
                            ],
                            "Nivel 2" => [
                                    ["nombre" => "Cereal", "cantidad" => 20, "caducidad" => "2028-11-11"]
                            ]
                    ],
                    "B" => [
                            "Nivel 1" => [
                                    ["nombre" => "Chocolate", "cantidad" => 20, "caducidad" => "2027-03-01"]
                            ],
                            "Nivel 2" => [
                                    ["nombre" => "Cereal", "cantidad" => 20, "caducidad" => "2028-11-11"]
                            ]
                    ]
            ]
    ];

    /**
     * @param array $almacen
     * @return void
     */
    function mostrarTabla(array $almacen): void
    {
        echo "<table border='1'>";
        foreach ($almacen as $nombrePasillo => $pasillo) {
            echo "<tr><th colspan='3'>$nombrePasillo</th></tr>";
            foreach ($pasillo as $estanteria => $niveles) {
                echo "<tr><td colspan='3'>Estantería $estanteria</td></tr>";
                foreach ($niveles as $nivel => $productos) {
                    echo "<tr><td colspan='3'>$nivel</td></tr>";
                    foreach ($productos as $producto) {
                        echo "<tr>";
                        echo "<td>{$producto['nombre']}</td>";
                        echo "<td>{$producto['cantidad']}</td>";
                        echo "<td>{$producto['caducidad']}</td>";
                        echo "</tr>";
                    }
                }
            }
        }
        echo "</table>";
    }
    mostrarTabla($almacen);
    /**
     * @param array $almacen
     * @return void
     */
    function contarProductosPorPasillo(array $almacen): void
    {
        echo "<h3>Productos Por Pasillo</h3>";
        $productosPasillo = 0;
        foreach ($almacen as $nombrePasillo => $pasillo) {
            $productosPasillo = 0;
            foreach ($pasillo as $estanteria => $niveles) {
                foreach ($niveles as $nivel => $productos) {
                    $productosPasillo += count($productos);
                }
            }
            echo "$nombrePasillo: $productosPasillo productos <br>";
        }
    }
    contarProductosPorPasillo($almacen);

    echo "<h3>Productos Que Caducan Antes de 2028</h3>";
    $añoCaducidad = 2030;
    $productosPasillo = 0;
    foreach ($almacen as $nombrePasillo => $pasillo) {
        $productosPasillo = 0;
        $añoCaducidad = 2030;
        foreach ($pasillo as $estanteria => $niveles) {
            foreach ($niveles as $nivel => $productos) {
                foreach ($productos as $producto) {
                    $añoCaducidad = substr($producto['caducidad'], 0, 4 );
                if ($añoCaducidad <2028) {
                    echo "<pre>{$producto['nombre']}\t{$producto['caducidad']}</pre>";
                }
                }
            }
        }

    }
?>
</body>
</html>
