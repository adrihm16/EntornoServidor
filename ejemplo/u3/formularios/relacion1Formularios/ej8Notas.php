<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intervalo</title>
</head>
<body>
<form action="ej8Notas.php" method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre">
    <label>Mates:</label>
    <input type="number" name="mates">
    <label>Lengua:</label>
    <input type="number" name="lengua">
    <label>Historia:</label>
    <input type="number" name="historia">
    <label>Dibujo:</label>
    <input type="number" name="dibujo">
    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_POST["nombre"]) && isset($_POST["mates"]) && isset($_POST["lengua"]) && isset($_POST["historia"]) && isset($_POST["dibujo"])) {
        $nombre = $_POST["nombre"];
        $mates = $_POST["mates"];
        $lengua = $_POST["lengua"];
        $historia = $_POST["historia"];
        $dibujo = $_POST["dibujo"];
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Nombre</th><th>$nombre</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Mates</td><td>$mates</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Lengua</td><td>$lengua</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Historia</td><td>$historia</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Dibujo</td><td>$dibujo</td>";
        echo "</tr>";


    }
?>
</body>
</html>