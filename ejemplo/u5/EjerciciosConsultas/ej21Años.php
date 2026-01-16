<?php
    $conexion = new mysqli("localhost", "root", "", "centro");
    $sentencia = "select dni, nombre from alumnos where edad < ?";
    $consulta=$conexion->prepare($sentencia);
    $edad = 21;
    $consulta->bind_param("i", $edad);
    $consulta->bind_result($dni, $nombre);
    $consulta->execute();
    while ($consulta->fetch()) {
        echo $dni . " - " . $nombre . "<br>";
    }