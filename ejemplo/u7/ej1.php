<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ejericio1</title>
</head>
<body>
<form action="" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <button type="submit" name="enviar">Enviar</button>
    <button type="submit" name="eliminar">eliminar</button>
</form>
<?php
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        setcookie("usuario", $nombre, time() + 10);
        if (isset($_COOKIE["usuario"])) {
            $nombre = $_COOKIE["usuario"];
            echo"Bienvenido, " . $nombre;
        } else {
            echo"Cookie no encontrada";
        }
    }
    if (isset($_POST['eliminar'])) {
        setcookie("usuario", "", time() - 3600);
        unset($_COOKIE["usuario"]);
    }
?>
</body>
</html>