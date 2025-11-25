<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabla Multiplicar</title>
</head>
<style>
body {

}
</style>
<body>
<form action="ej10MultiplicarColor.php" method="POST">
    <label for="numero">Elige un número</label>
    <select name="numero">
        <option value="">-- Elige una opción --</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <p>
        <input type="radio" name="color" value="red">
        <label for="rojo">Rojo</label>
    </p>

    <p>
        <input type="radio" name="color" value="blue">
        <label for="azul">Azul</label>
    </p>

    <p>
        <input type="radio" name="color" value="green">
        <label for="verde">Verde</label>
    </p>

    <p>
        <input type="radio" name="color" value="orange">
        <label for="otro">Naranja</label>
    </p>

    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_POST['numero']) && isset($_POST['color'])) {
        $numero = $_POST['numero'];
        $color = $_POST['color'];
        echo "<p style='color: $color'> El numero es: $numero</p>";
        for ($i = 1; $i <= 10; $i++) {
            $producto = $numero * $i;
            echo "<p style='color: $color'>$numero x $i: $producto<p>";
        }
    }

?>
</body>
</html>