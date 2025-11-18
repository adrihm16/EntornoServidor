<?php
    $parrafo = "Ipmb rvfsjep bnjhp. Dpnp uf fñdvfñusbt. Uf nbñep nvdipt cftpt. Ibtub qspñup.";
    $frases = explode(". ", $parrafo);

    $original = "bcdefghijklmnopqrstuvwxyzaBCDEFGHIJKLMNOPQRSTUVWXYZA";
    $transformado = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    foreach ($frases as $frase) {
        $fraseDescodificada = "";
        for ($j = 0; $j < strlen($frase); $j++) {

            if ($frase[$j] != "-") {
                $nuevo = strtr($frase[$j], $original, $transformado);
                $fraseDescodificada .= $nuevo;
            }
        }
        echo $fraseDescodificada . ". ";
    }
