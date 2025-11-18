<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ej7</title>
</head>
<body>
<?php
    $lista = ["Moto", "arrtr", "12345234", "Hablaba", "bbbbb"];
    echo "<table border='1'>";
    echo "<tr><th>cadena</th><th>resultado</th></tr>";
    for ($i = 0; $i < count($lista); $i++) {
        echo "<tr>";
        echo "<td>$lista[$i]</td>";
            if (preg_match("`r{2}`", $lista[$i])) {
                echo "<td style='background-color: red'></td>";
            } else if (preg_match("`h{6}|b{3}`", $lista[$i])) {
                echo "<td style='background-color: green'></td>";
            } else if (preg_match("`aba`", $lista[$i])) {
                echo "<td style='background-color: blue'></td>";
            } else if (preg_match("`^[0-9]+$`", $lista[$i])) {
                echo "<td style='background-color: yellow'></td>";
            } else {
                echo "<td style='background-color: white'></td>";
            }
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>
