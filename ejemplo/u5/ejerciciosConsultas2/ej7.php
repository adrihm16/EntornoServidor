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
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <label for="edad" id="edad">Edad</label>
    <input type="number" name="edad" id="edad">
    <button type="submit">Consultar</button>
</form>

<?php
    if (isset($_POST['dni'], $_POST['$nombre'], $_POST['edad']) && !empty($_POST['dni']) && !empty($_POST['nombre']) && !empty($_POST['edad'])) {
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
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
            $sentencia = "SELECT A.nombre, A.edad, ASIG.nombre, M.nota 
                          FROM Matriculas M 
                          JOIN Alumnos A ON M.dni = A.dni 
                          JOIN Asignaturas ASIG ON M.codigo = ASIG.codigo 
                          WHERE A.dni = ? AND M.nota >= 6 
                          ORDER BY M.nota DESC";

            $consultaSelect = $conexion->prepare($sentencia);
            $consultaSelect->bind_param("s", $dni);
            $consultaSelect->execute();
            $consultaSelect->bind_result($nombre, $edad, $asignatura, $nota);

            echo "<h3>Notas de $dni:</h3>";
            while ($consultaSelect->fetch()) {
                echo $nombre . " - " . $edad . " años - " . $asignatura . ": " . $nota . "<br>";
            }
            $consultaSelect->close();
        }
        $conexion->close();
    }
?>
</body>
</html>