<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario simple</title>
</head>
<body>
<form action="ej1Ejemplo.php" method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre">
    <button type="submit">Enviar</button>
</form>
<?php
    $nombre = $_POST['nombre'];
    if (isset($nombre)) {
    echo "El nombre es: $nombre";
    echo "<br>";
}
?>
</body>
</html>