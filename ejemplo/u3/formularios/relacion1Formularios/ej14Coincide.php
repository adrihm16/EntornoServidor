<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="ej13contrasenia.php" method="POST">
    <label>Contraseña: </label>
    <input type="" name="contr">
    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_POST['contr'])) {
        $contrasenia = $_POST['contr'];
        echo "<table border='1'>";
        echo "<tr><td colspan='2'>La contraseña contiene</td>";
        echo "<tr>";
        echo "<td>$contrasenia</td>";
        if (strstr($contrasenia, '$')) {
            echo "<td>$</td>";
        } else if (strstr($contrasenia, 'C')) {
            echo "<td>C</td>";

        } else if (strstr($contrasenia, '@')) {
            echo "<td>@</td>";
        } else if (strstr($contrasenia, '/')) {
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
