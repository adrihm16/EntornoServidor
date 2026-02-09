<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
        header("Location: login.php");
        exit();
    }
    if (!isset($_SESSION["contador"])) {
        $_SESSION["contador"] = 0;
    }
    $_SESSION["contador"]++;

    if (isset($_POST['enviar']) && isset($_POST['tema'])) {
        $seleccionado = $_POST['tema'];
        // Guardamos la cookie
        setcookie("tema", $seleccionado, time() + (86400 * 30), "/");
        // Forzamos que la variable local tenga el valor actual para esta carga
        $temaActual = $seleccionado;
    } elseif (isset($_COOKIE["tema"])) {
        $temaActual = $_COOKIE["tema"];
    } else {
        $temaActual = "claro";
    }
    if ($temaActual == "oscuro") {
        $bgColor = "#222";
        $textColor = "white";
    } else {
        $bgColor = "white";
        $textColor = "black";
    }
    ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <style>
        body {
            background-color: <?php echo $bgColor; ?>;
            color: <?php echo $textColor; ?>;
        }
    </style>
</head>
<body>
<h2>Hola, <?php echo $_SESSION["usuario"];?>!</h2>
<p>Rol: <?php echo $_SESSION["rol"];?></p>
<p>Has visitado esta página <?php echo $_SESSION["contador"];?> veces.</p>

<form action="" method="post">
    <label>
        <input type="radio" name="tema" value="claro">
        Claro
    </label>
    <label>
        <input type="radio" name="tema" value="oscuro" >
        Oscuro
    </label>
    <br><br>
    <button type="submit" name="enviar">Guardar configuración</button>
</form>

<br>
<a href="admin.php">Ir a Admin (solo admins)</a><br>
<a href="logout.php">Cerrar sesión</a>
</body>
</html>