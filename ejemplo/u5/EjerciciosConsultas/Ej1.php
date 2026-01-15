<?php
$conexion = new mysqli("localhost", "root", "", "centro");
$conexion->set_charset("utf8");
$consulta = "select * from alumnos";
$resultado = $conexion->query($consulta);
$numero_filas = $resultado->num_rows;
echo "Se han encontrado " . $numero_filas . " filas:<br><br>";
while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)) {
    foreach ($fila as $key => $value) {
        echo $value ." ";
    }
    echo "<br><br>";
}
$conexion->close();