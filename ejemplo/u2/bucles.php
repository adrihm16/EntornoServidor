<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ejercicios bucles</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            color: black;
        }

        td {
            border: 2px solid #fb0303;
            padding: 10px;
            text-align: center;
        }

        tr {
            background-color: #f47878;
        }

        tr:nth-child(even) {
            background-color: #ffbebe;
        }
    </style>
</head>
<body>
<h2>Ejercicio 1</h2>
<?php
    for ($i = 0; $i < 5; $i++) {
        if ($i % 2 == 0) {
            echo "<p style='color: red'>", $i, "<p>";
        } else {
            echo "<p style='color: blue'>", $i, "<p>";
        }
    }
?>
<h2>Ejercicio 2</h2>
<?php
    $edad = 20;
    if ($edad <= 12) {
        echo "Es un niño";
    } elseif ($edad > 12 && $edad <= 17) {
        echo "Es un adolescente";
    } elseif ($edad > 17 && $edad <= 64) {
        echo "Es un adulto";
    } elseif ($edad >= 65) {
        echo "Es un jubilado";
    }
?>
<h2>Ejercicio 6</h2>
<table>
    <tr>
        <?php
            // Contador para los números
            $numero = 1;

            // Generar 10 filas (100 números / 10 columnas = 10 filas)
            for ($fila = 0; $fila < 3; $fila++) {
                echo "<tr>";
                // Generar 10 columnas por fila
                for ($columna = 0; $columna < 3; $columna++) {
                    if ($numero <= 9) {
                        echo "<td>$numero</td>";
                        $numero++;
                    }
                }
                echo "</tr>";
            }
        ?>
    </tr>
</table>
<h2>Ejercicio 7</h2>
<table>
    <?php
        $numero = 1;
        $multiplicador = 1;
        for ($i = 0; $i < 10; $i++) {
            echo "<tr>";
            echo "<td>$numero x $multiplicador</td>";
            echo "<td>", $numero * $multiplicador, "</td>";
            echo "</tr>";
            $multiplicador++;
        }
    ?>
</table>
<h2>ejercicio 8</h2>
<?php
    $num = 2;
    $potencia = 1;
    for ($j = 0; $j < 10; $j++) {
        echo pow($num, $potencia), " ";
        $potencia++;
    }
    echo "<br>";
    $potencia = 1;
    $cont1 = 0;
    while ($cont1 < 10) {
        echo pow($num, $potencia), " ";
        $potencia++;
        $cont1++;
    }
    echo "<br>";
    $potencia = 1;
    $cont1 = 0;
    do {
        echo pow($num, $potencia), " ";
        $potencia++;
        $cont1++;
    } while ($cont1 < 10);
?>
<h2>Ejercicio 10</h2>
<?php
    $num = 260;
    for ($j = 260; $j >= 200; $j--) {
        echo $j, " ";
    }
    echo "<br>";
    while ($num >= 240) {
        echo $num, " ";
        $num--;
    }
    echo "<br>";
    $num = 260;
    do {
        echo $num, " ";
        $num--;
    } while ($num >= 240);
?>

<h2>ejercicio 11</h2>
<?php
    $temperaturas = ["lunes" => 0, "martes" => 11, "miercoles" => 17 ,"jueves"=> 27];
   foreach ($temperaturas as $dia => $valor) {
       echo $dia, " ";
       if ($valor<10) {
           echo "<p style='color: blue'>$valor º</p>";
       } elseif ($valor>=10 && $valor<=25) {
           echo "<p style='color: green'>$valor º</p>";
       }else {
           echo "<p style='color: red'>$valor º</p>";
       }
   }
?>
<h2>ejercicio 12</h2>
<?php
$manuel = ["mates"=>rand(0,10), "lengua"=>rand(0,10), "religion"=>rand(0,10),"economía"=>rand(0,10),];
$total = 0;
$media = 0;
    foreach ($manuel as $asignatura => $nota) {
        echo $asignatura, "->", $nota, "<br>";
        $total += $nota;
    }
    $media = $total / count($manuel);
    echo "media total ->", $media;
?>
<h2>ejercicio 13</h2>
</body>
</html>