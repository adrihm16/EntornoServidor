<?php
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
    <title>Ejercicio Cookies</title>
    <style>
        body {
            background-color: <?php echo $bgColor; ?>;
            color: <?php echo $textColor; ?>;
        }
    </style>
</head>
<body>

<form action="" method="post">
    <label>
        <input type="radio" name="tema" value="claro">
        Claro
    </label>
    <label>
        <input type="radio" name="tema" value="oscuro">
        Oscuro
    </label>
    <br><br>
    <button type="submit" name="enviar">Guardar configuración</button>
</form>

</body>
</html>