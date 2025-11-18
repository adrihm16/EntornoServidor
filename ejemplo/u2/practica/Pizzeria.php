<?php
    $pizzeria = [
        "Lunes" => [
            "Manuel" => [
            ["nombre" => "trufolona", "tamaño" => "mediana", "precio" => 13, "cantidad" => 1],
            ["nombre" => "Hawaiana", "tamaño" => "mediana", "precio" => 11, "cantidad" => 2]
        ],
            "Daniela" => [
                ["nombre" => "Diavola", "tamaño" => "mediana", "precio" => 13, "cantidad" => 3],
                ["nombre" => "Margarita", "tamaño" => "mediana", "precio" => 11, "cantidad" => 2]
            ]
        ]
    ];
    foreach ($pizzeria as $dia => $pedidos) {
        foreach ($pedidos as $nombre => $datosPedido) {
            foreach ($datosPedido as $pizza => $datosPizza) {
                foreach ($datosPizza as $dato => $valor) {

                }
            }
        }
    }