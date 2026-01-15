<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>caracter p</title>
</head>
<body>
<?php
    $lista = ["baca", "adrián", "abenida", "abe", "ber"];
    echo "<table border='1'>";
    echo "<tr><td>Palabra</td><td>Palabra corregida</td>";
    foreach ($lista as $palabra) {
        echo "<tr>";
        echo "<td>$palabra</td>";
        $palabraCorregida = str_replace('a', 'A', $palabra);
        $palabraCorregida = str_replace('b', 'v', $palabraCorregida);
        echo "<td>$palabraCorregida</td>";
        echo "<tr>";
    }
    echo "</table>";
?>
</body>
</html>