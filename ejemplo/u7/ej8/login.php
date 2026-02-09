<?php
    session_start();
    $usuarios = [
        "ana" => ["pw" => "123", "rol" => "admin"],
        "juan" => ["pw" => "abc", "rol" => "user"]
    ];
    if (isset($_POST["enviar"])) {
        $usuario = $_POST["usuario"];
        $pw = $_POST["password"];
        if (isset($usuarios[$usuario]) && $usuarios[$usuario]["pw"] === $pw) {
            session_regenerate_id(true);
            $_SESSION["usuario"] = $usuario;
            $_SESSION["rol"] = $usuarios[$usuario]["rol"];
            $_SESSION["pw"] = $usuarios[$usuario]["pw"];
            header("Location:index.php");
            exit();
        } else {
            echo "<p style='color: crimson'>ERROR. Usuario o contraseña incorrecta<p>";
        }
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="usuario" placeholder="Usuario"  required>
        <input type="text" name="password" placeholder="Password"  required>
        <br><hr>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>