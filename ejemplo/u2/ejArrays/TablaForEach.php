<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php
    //Array normal

    //Array asociativo
    $palabras = [
            "1" => "hola",
            "2" => "buenos",
            "3" => "dia",
            "4" => "djffjh"
    ];
?>
<table border='1'>
    <tr>
        <th>posicion</th>
        <th>valor</th>
    </tr>
    <?php
        foreach ($palabras as $elemento => $value) {

            echo "<tr>", "<td>", $elemento, "</td>", "<td>", $value, "</td>", "</tr>";

        }
    ?>

    </tr>
</table>

</body>
</html>