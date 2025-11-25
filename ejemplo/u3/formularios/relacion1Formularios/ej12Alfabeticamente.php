<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apellidos</title>
</head>
<body>
<form action="ej12Alfabeticamente.php" method="POST">
    <label>Nombre: </label>
    <input type="text" name="n1">
    <label>Apellidos: </label>
    <input type="text" name="ap1">
    <br>
    <label>Nombre: </label>
    <input type="text" name="n2">
    <label>Apellidos: </label>
    <input type="text" name="ap2">
    <br>
    <label>Nombre: </label>
    <input type="text" name="n3">
    <label>Apellidos: </label>
    <input type="text" name="ap3">
    <br>
    <label>Nombre: </label>
    <input type="text" name="n4">
    <label>Apellidos: </label>
    <input type="text" name="ap4">
    <br>
    <button type="submit">Enviar</button>
    <?php
        if (isset($_POST["n1"]) && isset($_POST["ap1"]) && isset($_POST["n2"]) && isset($_POST["ap2"]) && isset($_POST["n3"]) && isset($_POST["ap3"]) && isset($_POST["n4"]) ){
            $personas = [$_POST["n1"]." ".$_POST["ap1"], $_POST["n2"]." ". $_POST["ap2"], $_POST["n3"]." ". $_POST["ap3"], $_POST["n4"]." ".$_POST["ap4"]];
            $listaApellidos = [$_POST["ap1"], $_POST["ap2"], $_POST["ap3"], $_POST["ap4"]];
            sort($listaApellidos);
            echo "<br><br>";
            foreach ($listaApellidos as $apellidos) {
                foreach ($personas as $persona) {
                    if (str_contains($persona, $apellidos)) {
                        echo $persona, "<br>";
                    }
                }
            }
    }
    ?>
</form>
</body>
</html>