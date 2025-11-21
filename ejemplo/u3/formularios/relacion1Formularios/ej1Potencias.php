<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Potencia</title>
</head>
<body>
<form action="ej1Potencias.php" method="POST">
    <label>Número:</label>
    <input type="text" name="numero">
    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        echo "El numero es: $numero <br>";
        echo "<br>";
        for ($i = 1; $i <= 10; $i++) {
            $potencia = pow($numero, $i);
            echo "$numero^$i: $potencia <br>";
        }
    }

?>
</body>
</html>