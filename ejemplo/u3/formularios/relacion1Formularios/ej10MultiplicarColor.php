<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabla Multiplicar</title>
</head>
<body>
<form action="ej10MultiplicarColor.php" method="POST">
    <label for="color">¿Cuál es tu color favorito?</label>
    <select name="color" id="color">
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
        <label for="otro">Otro</label>
    </p>

    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        echo "El numero es: $numero <br>";
        echo "<br>";
        for ($i = 1; $i <= 10; $i++) {
            $producto = $numero * $i;
            echo "$numero x $i: $producto <br>";
        }
    }

?>
</body>
</html>