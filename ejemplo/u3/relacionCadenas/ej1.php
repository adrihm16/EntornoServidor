<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>caracter p</title>
</head>
<body>
<?php
    $lista = ["hola", "puente", "choza", "oporto", "opuesto"];
    echo "<table border='1'>";
    echo "<tr><td>Palabra</td><td>contiene la p?</td>";
    foreach ($lista as $palabra) {
        echo "<tr>";
        echo "<td>$palabra</td>";
        if (strstr($palabra, 'p')) {
            echo "<td>sí</td>";
        } else {
            echo "<td>no</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>