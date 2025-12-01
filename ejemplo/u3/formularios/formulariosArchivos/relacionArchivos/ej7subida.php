<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documento Adjunto</title>
</head>
<body>
<form action="ej7subida.php" method="POST" enctype="multipart/form-data">
    <label>Archivo: </label>
    <input type="file" name="foto">
    <label>Usuario: </label>
    <input type="text" name="usuario">
    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === 0 && isset($_POST['usuario'])) {
        $nombre = $_FILES['foto']['name'];
        $tipo = $_FILES['foto']['type'];
        $tamanio = $_FILES['foto']['size'];
        $tipo = $_FILES['foto']['type'];
        $nuevoNombre = trim($_POST['usuario']);
        $tamanioMb = round($tamanio / 1024 / 1024, 2);
        $extension = pathinfo($nombre, PATHINFO_EXTENSION);

        if (!file_exists("./img")) {
            mkdir("./img", 0777, true);
        }
        $tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($tipo, $tiposPermitidos)) {
            echo "<p style='color:red;'>Error: Solo se permiten imágenes JPG, PNG o GIF.</p>";
        } else {
            $ruta = "./img/" . $nombre . "_" . $nuevoNombre . "." . $extension;
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $ruta)) {
                echo "<h3>Imagen subida correctamente</h3>";
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>Nombre</th><th>Nuevo nombre</th><th>Tipo</th><th>Tamaño</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>" . $nombre . "</td>";
                echo "<td>" . $nombre . "_" . $nuevoNombre . "</td>";
                echo "<td>" . $tipo . "</td>";
                echo "<td>" . $tamanioMb . "mb</td>";
                echo "</tr>";
                echo "</table>";
                echo "<img src='$ruta'/>";
            } else {
                echo "<p style='color:red;'>Error al mover la imagen.</p>";
            }
        }
    } else {
        echo "<p style='color:red;'>No se ha subido ningún archivo o ha ocurrido un error.</p>";
    }

?>
</body>
</html>
