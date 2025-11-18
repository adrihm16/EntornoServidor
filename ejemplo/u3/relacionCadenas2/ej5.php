<?php
    $texto = "Hola buenas Hola adios hasta luego buenas ola sol mal bebe coche rojo azul hola";
    $arrayTexto = explode(" ", $texto);
    $palabrasUsadas = [];
    $totalPalabras = count($arrayTexto);

    foreach ($arrayTexto as $palabra) {
        $palabraActual = strtolower($palabra);
        if (!isset($palabrasUsadas[$palabraActual])) {
            $palabrasUsadas[$palabraActual] = 1;
        } else {
            $palabrasUsadas[$palabraActual]++;
        }
    }
    $totalPalabrasRepetidas = 0;
    foreach ($palabrasUsadas as $palabra => $valor) {
        if ($valor > 1) {
            $totalPalabrasRepetidas += $valor;
        }
    }
    $porcentajeRepetidas = round(($totalPalabrasRepetidas / $totalPalabras * 100), 2);
    foreach ($palabrasUsadas as $palabra => $valor) {
        echo $palabra, ":  ", $valor, "<br>";
    }
    echo "Porcentaje de Repetidos: ", $porcentajeRepetidas, "<br>";
    $calidadTexto = "";
    if ($porcentajeRepetidas<=10) {
        $calidadTexto = "Muy buena calidad";
    } elseif ($porcentajeRepetidas>10 && $porcentajeRepetidas<=25) {
        $calidadTexto = "Buena calidad";
    } elseif ($porcentajeRepetidas>25 && $porcentajeRepetidas<=50) {
    $calidadTexto = "Baja calidad";
    } else {
        $calidadTexto = "Mala calidad";
    }
    echo "Calidad del texto: ", $calidadTexto;