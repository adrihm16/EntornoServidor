<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documentos varios</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <label>Archivo: </label>
    <input type="file" multiple accept="image/*, text/plain" name="arch[]">
    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_FILES['arch'])) {
        foreach ($_FILES['arch']['name'] as $i => $nombre) {
            $nombre = $_FILES['arch']['name'][$i];
            $tipo = $_FILES['arch']['type'][$i];
            $tamanio = $_FILES['arch']['size'][$i];
            $tipo = $_FILES['arch']['type'][$i];
            $tamanioMb = round($tamanio / 1024 / 1024, 2);
            $extension = pathinfo($nombre, PATHINFO_EXTENSION);

            if (!file_exists("./img")) {
                mkdir("./img", 0777, true);
            }
            $tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif', 'text/plain'];
            if (!in_array($tipo, $tiposPermitidos)) {
                echo "<p style='color:red;'>Error: Solo se permiten imágenes JPG, PNG o GIF.</p>";
            } else {
                $ruta = "./img/" . $nombre . "_" . $i . "." . $extension;
                if (move_uploaded_file($_FILES['arch']['tmp_name'][$i], $ruta)) {
                    echo "<h3>Imagen subida correctamente</h3>";
                    echo "<table border='1'>";
                    echo "<tr>";
                    echo "<th>Nombre</th><th>Nuevo nombre</th><th>Tipo</th><th>Tamaño</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>" . $nombre . "</td>";
                    echo "<td>" . $nombre . "_" . $i . "</td>";
                    echo "<td>" . $tipo . "</td>";
                    echo "<td>" . $tamanioMb . "mb</td>";
                    echo "</tr>";
                    echo "</table>";
                    echo "<img src='$ruta'/>";
                } else {
                    echo "<p style='color:red;'>Error al mover la imagen.</p>";
                }
            }
        }
    } else {
        echo "<p style='color:red;'>No se ha subido ningún archivo o ha ocurrido un error.</p>";
    }
?>
</body>
</html>
