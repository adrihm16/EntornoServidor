<?php
//Ejercicio 1
$diaSemana = date("w");
$laboral = true;
switch ($diaSemana) {
    case 0:
        echo "Domingo";
        $laboral = false;
        break;
    case 1:
        echo "Lunes";
        $laboral = true;
        break;
    case 2:
        echo "Martes";
        $laboral = true;
        break;
    case 3:
        echo "Miercoles";
        $laboral = true;
        break;
    case 4:
        echo "Jueves";
        $laboral = true;
        break;
    case 5;
        echo "Viernes";
        $laboral = true;
        break;
    case 6:
        echo "Sabado";
        $laboral = false;
        break;
}
if ($laboral) {
    echo "Es un día laboral";
} else {
    echo "No es un día laboral";
}
//Ejercicio 2 Mayor
$num1 = 0;
$num2 = 2;
$num3 = 4;
if ($num1 > $num2 && $num1 > $num3) {
    echo "El mayor es", $num1;
}elseif ($num2 > $num1 && $num2 > $num3) {
    echo "El mayor es", $num2;
}else{
    echo "El mayor es", $num3;
}
//Ejercicio 3 Orden Alfabetico
$palabra1 = "A";
$palabra2 = "B";
$palabra3 = "C";
