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
?>
</body>
</html>
