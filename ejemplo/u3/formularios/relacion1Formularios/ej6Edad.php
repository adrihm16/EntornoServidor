<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edad</title>
</head>
<body>
<form action="ej6Edad.php" method="POST">
    <label>Nombre: </label>
    <input type="name" name="nombre">
    <label>Edad:</label>
    <input type="number" name="edad">
    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_POST["nombre"]) && isset($_POST["edad"])) {
        $nombre = $_POST['nombre'];
        $esMayor = "No";
        $edad = $_POST['edad'];
        if ($edad >= 18) {
            $esMayor = "Sí";
        } else {
            $esMayor = "No";
        }
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Nombre</th><th>Edad</th><th>Mayor de edad</th></tr>";
        echo "<tr><td>$nombre</td><td>$edad</td><td>$esMayor</td>";
        echo "</tr>";
        echo "</table>";
    }
?>
</body>
</html>