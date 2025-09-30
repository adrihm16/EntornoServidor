<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>relacion ejercicios</title>
    <style>
        h1 {
            color: blue;
        }
    </style>

</head>
<body>
<?php
    $entero = 0;
    $decimal = 1.5;
    $string = "Hola";
    $booleano = true;
    $nulo = null;
    echo "<h1>tipos</h1>";
    echo gettype($entero);
    echo gettype($decimal);
    echo gettype($string);
    echo gettype($booleano);
    echo gettype($nulo);
    echo "<h1>tipos usando funciones is</h1>";
    echo is_int($entero);
    echo is_float($decimal);
    echo is_string($string);
    echo is_bool($booleano);
    echo is_null($nulo);
    echo "<h1>tipos funciones usando is</h1>";
    echo isset($entero), empty($entero);
    echo isset($decimal), empty($decimal);
    echo isset($string), empty($string);
    echo isset($booleano), empty($booleano);
    echo isset($nulo), empty($nulo);
    echo "<h1>declarar variable y mostrar valor</h1>";
    $convertida = "123.45";
    echo gettype($convertida);
    echo "<h1>convertir a float, int y booleano y mostrar su valor</h1>";
    echo settype($convertida, "float"), "<br";
    echo $convertida, "<br";
    echo settype($convertida, "int"), "<br";
    echo $convertida;
    echo settype($convertida, "boolean"), "<br";
    echo $convertida, "<br";
    echo "<h1>declarar variables y compararlas</h1>";
    $var1 = 5;
    $var2 = "5";
    $var3 = 10;
    echo "$var1 == $var2 <br>";
    echo $var1 == $var2, "<br>";
    echo "$var1 === $var2 <br>";
    echo $var1 === $var2, "<br>";
    echo "$var1 > $var3 <br>";
    echo $var1 > $var3, "<br>";
    echo "$var1 < $var3 <br>";
    echo $var1 < $var3, "<br>";
    echo "$var1 >= $var3 <br>";
    echo $var1 >= $var3, "<br>";
    echo "$var1 <= $var3 <br>";
    echo $var1 <= $var3, "<br>";
    echo "<h1>Declarar una variable sin valor y otra con y usar varias funciones</h1>";
    $num1 = 0;
    $num2;
    echo "haciendolo con la variable con valor: ";
    echo isset($num1), empty($num1), "<br>";
    echo "haciendolo con la variable sin valor: ";
    echo isset($num2), empty($num2), "<br>";
    echo "uso unset";
    unset($num1);
    // echo $num1; da error porque hemos borrado la variable
    echo "<h1>declarar variables y usar operadores lógicos</h1>";
    $edad = 20;
    $es_estudiante = true;
    $tiene_dni = false;
    if ($edad>=18 && $tiene_dni) {
        echo "Puede entrar";
    } else {
        echo "No puede entrar";
    }
    if ($es_estudiante && $tiene_dni) {
        echo "Tiene ventaja";
    } else {
        echo "No tiene ventaja";
    }
?>
</body>
</html>