<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>caracter p</title>
</head>
<body>
<?php
    $lista = ["holaaaaaaaaaaaaaaa", "pueneeeeeeete", "chddddddddoza", "eeeeoporto", "opuuuuuuuuesto"];
    echo "<table border='1'>";
    echo "<tr><td>Palabra</td><td>palabra modificada</td>";
    foreach ($lista as $palabra) {
        echo "<tr>";
        echo "<td>$palabra</td>";
        $palabraModificada = "-----".substr($palabra, 5, -3).",,,";
        echo "<td>$palabraModificada</td>";
        echo "</tr>";
    }
    echo "</table>";

?>
</body>
</html>