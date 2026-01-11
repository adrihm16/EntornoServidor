<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Animal</title>
</head>
<body>
<form action="" method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre">
    <label>Color:</label>
    <input type="text" name="color">
    <label>Fecha de nacimiento:</label>
    <input type="date" name="fechaNac">
    <button type="submit">Enviar</button>
</form>
<?php
    require_once("animal.php");
    if(isset($_POST['nombre'], $_POST['color'], $_POST['fechaNac'])){
        $nombre = $_POST['nombre'];
        $color = $_POST['color'];
        $fechaNac = $_POST['fechaNac'];

        $animal = new Animal($nombre, $color, $fechaNac);
        echo $animal;
    }
?>
</body>
</html>