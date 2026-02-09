<?php
    $usuarios = [
            "ana" => "1234",
            "juan" => "abcd"
    ];
    if (isset($_POST["enviar"]) && isset($_POST["nombre"]) && isset($_POST["contr"])) {
        $nombre = $_POST["nombre"];
        $contr = $_POST["contr"];
        if (isset($usuarios[$nombre])) {
            echo "Usuario ya existe";
        } else {
            session_start();
            $_SESSION["usuario"] = $nombre;
            $_SESSION["auth"] = true;
            $usuarios[$nombre] = $contr;
            header("location: home4.php");
        }
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ejercicio 4</title>
</head>
<body>
<form action="" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="contr">Contraseña</label>
    <input type="password" name="contr" id="contr">
    <button type="submit" name="enviar">Enviar</button>
</form>
</body>
</html>
