<?php
    $cadena1 = "Mi mama me mima";
    $cadena2 = "Quiero mucho a mi mama";
    $arrayCadenas = [$cadena1, $cadena2];
    echo implode(", ", $arrayCadenas);
    $letrasAparecidas1 = [];

    $cadena1min = strtolower($cadena1);
    for ($i = 0; $i < strlen($cadena1min); $i++) {
        if ($cadena1min[$i] != ' ') {
            $letra = $cadena1min[$i];
            if (!isset($letrasAparecidas1[$letra])) {
                $letrasAparecidas1[$letra] = 1;   // primera aparición
            } else {
                $letrasAparecidas1[$letra]++;     // suma si ya existía
            }
        }
    }
    echo "<br>";
    foreach ($letrasAparecidas1 as $letra => $valor) {
        echo $letra, ": ", $valor, "<br>";
    }
    $letrasAparecidas2 = [];

    $cadena2min = strtolower($cadena2);
    for ($i = 0; $i < strlen($cadena2min); $i++) {
        if ($cadena2min[$i] != ' ') {
            $letra = $cadena2min[$i];
            if (!isset($letrasAparecidas2[$letra])) {
                $letrasAparecidas2[$letra] = 1;
            } else {
                $letrasAparecidas2[$letra]++;
            }
        }
    }
    echo "<br>";
    foreach ($letrasAparecidas2 as $letra => $valor) {
        echo $letra, ": ", $valor, "<br>";
    }

    $letrasAparecidas = [];
    $cadenaMin = strtolower($cadena1.$cadena2);
    for ($i = 0; $i < strlen($cadenaMin); $i++) {
        if ($cadenaMin[$i] != ' ') {
            $letra = $cadenaMin[$i];
            if (!isset($letrasAparecidas[$letra])) {
                $letrasAparecidas[$letra] = 1;
            } else {
                $letrasAparecidas[$letra]++;
            }
        }
    }
    echo "<br>";
    foreach ($letrasAparecidas as $letra => $valor) {
        echo $letra, ": ", $valor, "<br>";
    }

