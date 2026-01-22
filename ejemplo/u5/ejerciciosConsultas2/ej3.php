<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<form action="" method="POST">
    <label for="cadena">cadena</label>
    <input type="text" name="cadena" id="cadena">
    <button type="submit">Consultar</button>
</form>

<?php
    if (isset($_POST['cadena']) && !empty($_POST['cadena'])) {
        $cadena = "%" . $_POST['cadena'] . "%";
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
                SELECT A.nombre, ASIG.nombre, M.nota 
                FROM matriculas M
                JOIN alumnos A on A.dni = M.dni
                JOIN asignaturas ASIG on ASIG.codigo = M.codigo
                WHERE A.nombre LIKE ?
                ORDER BY A.nombre ASC, M.nota DESC";

            $consultaSelect = $conexion->prepare($sentencia);
            $consultaSelect->bind_param("s", $cadena);
            $consultaSelect->execute();
            $consultaSelect->bind_result($nombre, $asignatura, $nota);

            echo "<h3>Notas de " . $_POST['cadena'] . " :</h3>";
            while ($consultaSelect->fetch()) {
                echo $nombre . " - " . $asignatura . ": " . $nota . "<br>";
            }
            $consultaSelect->close();
        }
        $conexion->close();
    }
?>
</body>
</html>