<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arrays</title>
</head>
<body>
<?php
    //Array normal
    $matriz = ["Jorge", "Pérez", 35, 1.77, 80, "Moreno", "Soltero"];
    //Array asociativo
    $matriz2 = [
            "nombre" => "jorge",
            "apellido" => "pérez",
            "edad" => 35,
            "altura" => 1.77,
            "peso" => 80,
            "pelo" => "moreno",
            "estado" => "soltero"
    ];
?>
<table border='1'>
    <tr>
        <th>0</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
    </tr>

    <tr>
        <td><?php
                echo $matriz[0] ?></td>
        <td><?php
                echo $matriz[1] ?></td>
        <td><?php
                echo $matriz[2] ?></td>
        <td><?php
                echo $matriz[3] ?></td>
        <td><?php
                echo $matriz[4] ?></td>
        <td><?php
                echo $matriz[5] ?></td>
        <td><?php
                echo $matriz[6] ?></td>
    </tr>
</table>
<br>
<table border='1'>
    <tr>
        <th>nombre</th>
        <th>apellido</th>
        <th>edad</th>
        <th>altura</th>
        <th>peso</th>
        <th>pelo</th>
        <th>estado</th>
    </tr>
    <tr>
        <td><?php
                echo $matriz2["nombre"] ?></td>
        <td><?php
                echo $matriz2["apellido"] ?></td>
        <td><?php
                echo $matriz2["edad"] ?></td>
        <td><?php
                echo $matriz2["altura"] ?></td>
        <td><?php
                echo $matriz2["peso"] ?></td>
        <td><?php
                echo $matriz2["pelo"] ?></td>
        <td><?php
                echo $matriz2["estado"] ?></td>
    </tr>
</table>
</body>
</html>