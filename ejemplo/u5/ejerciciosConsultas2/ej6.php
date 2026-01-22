<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<form action="" method="POST">
    <label for="cadena1">cadena1</label>
    <input type="text" name="cadena1" id="cadena1">
    <label for="cadena2">cadena2</label>
    <input type="text" name="cadena2" id="cadena2">
    <button type="submit">Consultar</button>
</form>

<?php
    if (isset($_POST['cadena1'], $_POST['cadena2']) && !empty($_POST['cadena1']) && !empty($_POST['cadena2'])) {
        $cadena = "%" . $_POST['cadena1'] . "%";
        $cadena2 = "%" . $_POST['cadena2'] . "%";

        $conexion = new mysqli("localhost", "root", "", "CENTRO");
        $compruebaAlumno = "SELECT count(dni) FROM Alumnos WHERE nombre LIKE ?";
        $consulta = $conexion->prepare($compruebaAlumno);
        $consulta->bind_param("s", $cadena);
        $consulta->execute();
        $consulta->bind_result($numDni);
        $consulta->fetch();
        $consulta->close();

        if ($numDni == 0) {
            echo "No hay ningun usuario cuyo nombre coincida con esa cadena.";
        } else {
            $sentencia = "
                SELECT A.dni, A.nombre
                From alumnos A
                WHERE A.nombre LIKE ?
                ";

            $consultaSelect = $conexion->prepare($sentencia);
            $consultaSelect->bind_param("s", $cadena);
            $consultaSelect->execute();
            $consultaSelect->bind_result($dni, $nombre);

            echo "<h3>Notas de " . $_POST['cadena1'] . " :</h3>";
            while ($consultaSelect->fetch()) {
                echo $nombre . " - " . $dni . "<br>";
            }
            $cadena = $cadena2;
            $consultaSelect->execute();
            $consultaSelect->bind_result($dni, $nombre);

            echo "<h3>Notas de " . $_POST['cadena2'] . " :</h3>";
            while ($consultaSelect->fetch()) {
                echo $nombre . " - " . $dni . "<br>";
            }
            $consultaSelect->close();
        }
        $conexion->close();
    }
?>
</body>
</html>