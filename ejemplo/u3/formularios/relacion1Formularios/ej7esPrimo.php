<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edad</title>
</head>
<body>
<form action="ej7esPrimo.php" method="POST">
    <label>Número: </label>
    <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>
<?php
    if (isset($_POST["numero"])) {
        $numero = ($_POST['numero']);
        $esPrimo = true;
        if ($numero < 2) {
            $esPrimo = false;
        } else {
            for ($div = 2; $div <= sqrt($numero); $div++) {
                if ($numero % $div == 0) {
                    $esPrimo = false;
                    break;
                }
            }
        }
        if ($esPrimo) {
            echo "$numero es primo";
        } else {
            echo "$numero no es primo";
        }
    }
?>
</body>
</html>