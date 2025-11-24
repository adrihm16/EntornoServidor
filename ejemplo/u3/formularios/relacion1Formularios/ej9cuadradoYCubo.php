<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cuadrado y Cubo</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            color: black;
        }

        td {
            border: 2px solid #fb0303;
            padding: 10px;
            text-align: center;
        }

        tr {
            background-color: #f47878;
        }

        tr:nth-child(even) {
            background-color: #ffbebe;
        }

        .num {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            color: white;
        }

        .verde {
            background-color: #70913f;
        }

        .tdverde {
            border: none;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #000000;
            font-weight: bold;
        }

        .verde:nth-child(even) {
            background-color: #49612c;
        }
    </style>
</head>
<body>
<form action="ej9cuadradoYCubo.php" method="POST">
    <label>Número 1:</label>
    <input type="text" name="n1">
    <label>Número 2:</label>
    <input type="number" name="n2">
    <label>Número  3:</label>
    <input type="number" name="n3">
    <button type="submit">Enviar</button>
</form>
<table class="num">
    <tr class="header">
        <th>
            Número
        </th>
        <th>
            Cuadrado
        </th>
        <th>
            Cubo
        </th>
    </tr>
    <?php
        if (isset($_POST["n1"])&&isset($_POST["n2"])&&isset($_POST["n3"])) {
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $n3 = $_POST["n3"];
            $listaNumeros = [$n1, $n2, $n3];
            foreach ($listaNumeros as $numero) {
                echo "<tr class='verde'>";
                echo "<td class='tdverde'>$numero</td>";
                echo "<td class='tdverde'>", pow($numero, 2), "</td>";
                echo "<td class='tdverde'>", pow($numero, 3), "</td>";
                echo "</tr>";
            }
        }
    ?>
</table>
</body>
</html>