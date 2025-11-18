<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>caracter p</title>
</head>
<body>
<?php
    $lista = ["hola@gmail.com", "3.99$", "Choza", "oporto", "3/3=1"];
    echo "<table border='1'>";
    echo "<tr><td>Palabra</td><td>contiene</td>";
    foreach ($lista as $palabra) {
        echo "<tr>";
        echo "<td>$palabra</td>";
        if (strstr($palabra, '$')) {
            echo "<td>$</td>";
        } else if (strstr($palabra, 'C')) {
            echo "<td>C</td>";
        } else if (strstr($palabra, '@')) {
            echo "<td>@</td>";
        } else if (strstr($palabra, '/')) {
            echo "<td>/</td>";
        } else
        {
            echo "<td>no</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>