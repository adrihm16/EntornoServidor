<?php
    $matriz = [1,2,3,4,5,6,7,0,9];
    $menor = PHP_INT_MAX;
    for ($i = 0; $i < count($matriz); $i++) {
        if ($matriz[$i] < $menor) {
            $menor = $matriz[$i];
        }
    }
    echo $menor, " ";
    $numElementos = 0;
    for ($i = 0; $i <count($matriz); $i++) {
        $numElementos = $i;
    }
    echo $numElementos, " ";
