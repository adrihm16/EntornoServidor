<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ej3</title>
    <style>
        table {
            border-collapse: collapse;
            border: 2px solid #26ae00;
            width: 20%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            color: black;
            font-weight: bold;
        }

        td {
            padding: 10px;
            text-align: left;
        }

        th {
            border-bottom: 2px solid #26ae00;
            padding: 10px;
            text-align: center;
            background: #26ae00;
            color: #ffffff;
        }
        tr {
            background-color: #ffffff;
            border: 2px solid #26ae00;
        }
    </style>
</head>
<body>
<?php
    $usuarios = ["&goyo" => "&goyo", "Manuel66" => "1234", "!LOLo33" => "!lolo33", "adri98" => "5678", "jaja2:" => "dfghjk:"];
    echo "<table>";
    echo "<tr>";
    echo "<th>Usuario</th><th>Contraseña</th><th></th>";
    echo "</tr>";
    foreach ($usuarios as $usuario => $contraseña) {
        echo "<tr>";
        echo "<td>$usuario</td>";
        $numeroCaracteres = strlen($contraseña);
        $contraseñaCensurada = "";
        for ($i = 0; $i < $numeroCaracteres; $i++) {
            $contraseñaCensurada .= "*";
        }
        echo "<td>$contraseñaCensurada</td>";
        if (strtolower($usuario) != strtolower($contraseña)) {
            echo "<td style='color: #0b6d44'>CORRECTO</td>";
        } else {
            echo "<td style='color: red'>INCORRECTO</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>