<?php
    $lista = ["Hola333", "adios", "Manuel666", "Koko"];
    foreach ($lista as $palabra) {
        if (preg_match("`[A-Z][a-z]{2,}[0-9]{3}`", $palabra)) {
            echo "si cumple\n";
        } else {
            echo "no cumple\n";
        }
    }
