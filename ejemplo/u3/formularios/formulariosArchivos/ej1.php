<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documento Adjunto</title>
</head>
<body>
<form action="ej1.php" method="POST" enctype="multipart/form-data">
    <label>Archivo: </label>
    <input type="file" name="foto">
    <label>Nombre: </label>
    <input type="text" name="nombre">
    <button type="submit">Enviar</button>
</form>
<?php
if (isset($_FILES['foto']) && isset($_POST['nombre'])) {
    $nombre = $_FILES['foto']['name'];
    $tipo = $_FILES['foto']['type'];
    $tamanio = $_FILES['foto']['size'];
    $nombreIntr = $_POST["nombre"];
    $tamanioMb = round($tamanio / 1024 / 1024, 2);
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nombre</th><th>Nuevo nombre</th><th>Tipo</th><th>Tamaño</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>" . $nombre . "</td>";
    echo "<td>" . $nombreIntr . "</td>";
    echo "<td>" . $tipo . "</td>";
    echo "<td>" . $tamanioMb . "mb</td>";
    echo "</tr>";
    echo "</table>";
    if (!file_exists("./img)")) {
        mkdir("./img");
    }
    $ruta = "./img/" . $nombreIntr . ".png";
    move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
}
?>
<img src="<?php echo "$ruta"; ?>"/>
</body>
</html>
