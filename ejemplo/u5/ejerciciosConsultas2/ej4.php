<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<form action="" method="POST">
    <label for="dni">DNI</label>
    <input type="text" name="dni" id="dni">
    <label for="dni2">dni2</label>
    <input type="text" name="dni2" id="dni2">
    <button type="submit">Consultar</button>
</form>

<?php
    if (isset($_POST['dni'] , $_POST['dni2']) && !empty($_POST['dni']) && !empty($_POST['dni2'])) {
        $dni = $_POST['dni'];
        $dni2 = $_POST['dni2'];
        $conexion = new mysqli("localhost", "root", "", "CENTRO");

        $compruebaAlumno = "SELECT count(dni) FROM Alumnos WHERE dni = ?";
        $consulta = $conexion->prepare($compruebaAlumno);
        $consulta->bind_param("s", $dni);
        $consulta->execute();
        $consulta->bind_result($numDni);
        $consulta->fetch();
        $consulta->close();

        if ($numDni == 0){
            echo "Error. El dni introducido no existe";
        } else {
            $sentencia = "SELECT A.nombre, ASIG.nombre, M.nota 
                          FROM Matriculas M 
                          JOIN Alumnos A ON M.dni = A.dni 
                          JOIN Asignaturas ASIG ON M.codigo = ASIG.codigo 
                          WHERE A.dni = ? 
                          ORDER BY M.nota DESC";
            $consultaSelect = $conexion->prepare($sentencia);
            $consultaSelect->bind_param("s", $dni);
            $consultaSelect->execute();
            $consultaSelect->bind_result($nombre, $asignatura, $nota);
            echo "<h3>Notas de $dni:</h3>";
            while ($consultaSelect->fetch()) {
                echo $nombre . " - "  . $asignatura . ": " . $nota . "<br>";
            }
            $dni = $dni2;
            $consultaSelect->execute();
            $consultaSelect->bind_result($nombre, $asignatura, $nota);
            echo "<h3>Notas de $dni:</h3>";
            while ($consultaSelect->fetch()) {
                echo $nombre . " - "  . $asignatura . ": " . $nota . "<br>";
            }
            $consultaSelect->close();
        }
        $conexion->close();
    }
?>
</body>
</html>