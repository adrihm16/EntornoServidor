<?php

    $conexion = new mysqli("localhost", "root", "", "centro");
    $sentencia = "select dni, nombre from alumnos where nombre like ?";
    $consulta = $conexion->prepare($sentencia);
    $nombre = 'María';

    $consulta->bind_param("s", $nombre);
    $consulta->bind_result($cadena, $nombre);
    $consulta->execute();
    while ($consulta->fetch()) {
        echo $cadena . " - " . $nombre . "<br>";
    }
    $consulta->close();
    $conexion->close();