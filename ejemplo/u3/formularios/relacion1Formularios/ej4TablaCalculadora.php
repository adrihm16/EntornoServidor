<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabla cálculos</title>
</head>
<body>
<form action="ej4TablaCalculadora.php" method="POST">
    <label>Número 1:</label>
    <input type="number" name="n1">
    <label>Número 2:</label>
    <input type="number" name="n2">
    <label>Número 3:</label>
    <input type="number" name="n3">
    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_POST["n1"]) && isset($_POST["n2"])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $suma1 = $n1 + $n2;
        $resta = $n1 - $n2;

        $multiplicar = $n2 * $n3;
        $division = 0;
        if ($n3 == 0) {
            $division = "No se puede dividir entre 0";
        } else {
            $division = $n1 / $n3;
        }
        $sumaTriple = $suma1 + $n3;
        $divisionTriple = 0;
        if ($n1 != 0) {
            $divisionTriple = ($n2+$n3)/$n1;
        } else {
            $divisionTriple = "No se puede dividir entre 0";
        }
        echo "<table border='1'>";
        echo "<tr><td>Valor 1</td><td>$n1</td></tr>";
        echo "<tr><td>Valor 2</td><td>$n2</td></tr>";
        echo "<tr><td>Valor 3</td><td>$n3</td></tr>";
        echo "<tr><td>Valor 1 + Valor 2</td><td>$suma1</td></tr>";
        echo "<tr><td>Valor 2 x Valor 3</td><td>$multiplicar</td></tr>";
        echo "<tr><td>Valor 1 / Valor 3</td><td>$division</td></tr>";
        echo "<tr><td>Valor 1 + Valor 2 + Valor 3</td><td>$sumaTriple</td></tr>";
        echo "<tr><td>(Valor 2 + Valor 3) / Valor 1</td><td>$divisionTriple</td></tr>";
        echo "</table>";
    }
?>
</body>
</html>