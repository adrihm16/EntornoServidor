<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<form action="" method="POST">
    <label for="anio">Año</label>
    <input type="number" name="anio" id="anio">
    <button type="submit">Consultar</button>
</form>

<?php
    if (isset($_POST['anio']) && !empty($_POST['anio'])) {
        $anio = $_POST['anio'];
        $conexion = new mysqli("localhost", "root", "", "centro");

        $compruebaAlumno = "SELECT count(dni) From matriculas WHERE año = ?";
        $consulta = $conexion->prepare($compruebaAlumno);
        $consulta->bind_param("s", $anio);
        $consulta->execute();
        $consulta->bind_result($numDni);
        $consulta->fetch();
        $consulta->close();

        if ($numDni == 0){
            echo "Error. No hay ninguna matrícula con ese año";
        } else {
            $sentencia = "SELECT A.nombre, ASIG.nombre, M.nota 
                          FROM Matriculas M 
                          JOIN Alumnos A ON M.dni = A.dni 
                          JOIN Asignaturas ASIG ON M.codigo = ASIG.codigo 
                          WHERE M.año = ? 
                          ORDER BY M.nota DESC";

            $consultaSelect = $conexion->prepare($sentencia);
            $consultaSelect->bind_param("s", $anio);
            $consultaSelect->execute();
            $consultaSelect->bind_result($nombre, $asignatura, $nota);

            echo "<h3>Notas de $anio:</h3>";
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