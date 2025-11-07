<?php
    $array = [
        1 => 1,
        2 => 2,
        3 => 3
    ];
    foreach ($array as $k => $v) {
        echo "clave " , $k," valor ", $v, "\n"; ;
    }
    echo "\n";
    $claves = array_keys($array);
    $valores = array_values($array);

    for ($i = 0; $i < count($array); $i++) {
        echo $claves[$i], $valores[$i];
    }

