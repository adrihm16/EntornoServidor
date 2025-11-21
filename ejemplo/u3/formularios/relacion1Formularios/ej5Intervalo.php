<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intervalo</title>
</head>
<body>
<form action="ej5Intervalo.php" method="POST">
    <label>Número1:</label>
    <input type="number" name="n1">
    <label>Número2:</label>
    <input type="number" name="n2">
    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_POST["n1"]) && isset($_POST["n2"])) {
        $mayor = PHP_INT_MIN;
        $menor = PHP_INT_MAX;
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        if ($n1 > $n2) {
            $mayor = $n1;
            $menor = $n2;
        } else {
            $mayor = $n2;
            $menor = $n1;
        }
        echo "<table border='1'>";
        echo "<tr>";
        for ($i = $menor; $i <= $mayor; $i++) {
            echo "<td>".$i."</td>";
        }
        echo "</tr>";
        echo "</table>";
    }
?>
</body>
</html>