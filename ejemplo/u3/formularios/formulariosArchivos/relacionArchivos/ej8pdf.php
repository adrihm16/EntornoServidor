<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documento Adjunto</title>
</head>
<body>
<form action="ej8pdf.php" method="POST" enctype="multipart/form-data">
    <label>Archivo: </label>
    <input type="file" name="doc">
    <label>Nombre: </label>
    <input type="text" name="nombre">
    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_FILES['doc']) && $_FILES['doc']['error'] === 0 && isset($_POST['nombre'])) {
        $nombre = $_FILES['doc']['name'];
        $tipo = $_FILES['doc']['type'];
        $tamanio = $_FILES['doc']['size'];
        $tipo = $_FILES['doc']['type'];
        $nuevoNombre = trim($_POST['nombre']);
        $tamanioMb = round($tamanio / 1024 / 1024, 2);
        $extension = pathinfo($nombre, PATHINFO_EXTENSION);
        if ($tamanioMb <= 2) {
            if ($tipo !="application/pdf") {
                echo "<p style='color:red;'>Error: Solo se permiten archivos pdf.</p>";
            } else {
                if (!file_exists("./docs")) {
                    mkdir("./docs", 0777, true);
                }
                $ruta = "./docs/" . $nuevoNombre . "." . $extension;
                if (move_uploaded_file($_FILES['doc']['tmp_name'], $ruta)) {
                    echo "<h3>PDF subido correctamente</h3>";
                    echo "<table border='1'>";
                    echo "<tr>";
                    echo "<th>Nombre</th><th>Nuevo nombre</th><th>Tipo</th><th>Tamaño</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>" . $nombre . "</td>";
                    echo "<td>" . $nuevoNombre . "." . $extension . "</td>";
                    echo "<td>" . $tipo . "</td>";
                    echo "<td>" . $tamanioMb . "mb</td>";
                    echo "</tr>";
                    echo "</table>";
                } else {
                    echo "<p style='color:red;'>Error al mover la imagen.</p>";
                }
            }
        } else {
            echo "<p style='color:red;'>El peso del archivo debe ser menor a 2 mb.</p>";
        }
        }else {
        echo "<p style='color:red;'>No se ha subido ningún archivo o ha ocurrido un error.</p>";
    }


?>
</body>
</html>
