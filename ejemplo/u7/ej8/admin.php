<?php
    session_start();
    $rolesPermitidos = ["admin"];
    if (!isset($_SESSION["rol"]) || !in_array($_SESSION["rol"], $rolesPermitidos)) {
        header("Location: acceso-denegado.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>
<h2>Página de administración</h2>
<p>Bienvenido <?php echo $_SESSION["usuario"]; ?>, tienes rol <?php echo $_SESSION["rol"]; ?>.</p>

<a href="index.php">Volver al panel</a>
</body>
</html>
