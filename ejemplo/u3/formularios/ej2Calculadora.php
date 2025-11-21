<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario 2</title>
</head>
<body>
<form action="ej2Calculadora.php" method="POST">
    <label>Número 1:</label>
    <input type="number" name="n1">
    <label>Número 2:</label>
    <input type="number" name="n2">
    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_POST["n1"]) && isset($_POST["n2"])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $suma = $n1 + $n2;
        $resta = $n1 - $n2;

        $multiplicar = $n1 * $n2;
        $division = 0;
        if ($n2 == 0) {
            echo "No se puede dividir entre 0";
        } else {
            $division = $n1 / $n2;
        }
        echo "suma: ", $suma;
        echo "<br>";
        echo "resta: ", $resta;
        echo "<br>";
        echo "multiplicar: ", $multiplicar;
        echo "<br>";
        echo "division: ", $division;
    }
?>
</body>
</html>