<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ORdenados</title>
</head>
<body>
<form action="ej3Ordenados.php" method="POST">
    <label>Número1:</label>
    <input type="number" name="n1">
    <label>Número2:</label>
    <input type="number" name="n2">
    <label>Número3:</label>
    <input type="number" name="n3">
    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_POST["n1"]) && isset($_POST["n2"])) {
        $mayor = PHP_INT_MIN;
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $listaNumeros = [$n1, $n2, $n3];
        sort($listaNumeros);
        echo implode(', ', $listaNumeros);
    }
?>
</body>
</html>