<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pag Login</title>
</head>
<body>
<?php

    if (isset($_POST['user']) && isset($_POST['passw']) && isset($_POST['email'])) {
        $nombre = $_POST['user'];
        $passw = $_POST['passw'];
        $email = $_POST['email'];
        echo "Bienvenido $nombre!";
        echo "<br>";
        echo "El email de tu cuenta es: $email";
        echo "<br>";
    } else {
        echo "Introduce los campos";
    }
?>
</body>
</html>