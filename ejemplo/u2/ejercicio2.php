<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

<?php
$numero1 = 25;
$numero2 = 13;
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;
echo "<table border='1'>
  <tr>
    <th>número 1</th>
    <th>número 2</th>
    <th>suma</th>
  </tr>
  <tr>
    <td>$numero1</td>
    <td>$numero2</td>
    <td>$suma</td>
  </tr>
</table>
<br/>
<table border='1'>
  <tr>
    <th>operacion </th>
    <th>resultado </th>
    <th>operacion </th>
    <th>resultado </th>
  </tr>
  <tr>
    <td>$numero1 + $numero2</td>
    <td>$suma</td>
    <td>$numero1 * $numero2</td>
    <td>$multiplicacion</td>
  </tr>
  <tr>
    <td>$numero1 - $numero2</td>
    <td>$resta</td>
    <td>$numero1 / $numero2</td>
    <td>$division</td>
  </tr>
</table>
";
?>
<br/>
<table border='1'>
    <tr>
        <th>operacion </th>
        <th>resultado </th>
        <th>operacion </th>
        <th>resultado </th>
    </tr>
    <tr>
        <td>$numero1 + $numero2</td>
        <td>$suma</td>
        <td>$numero1 * $numero2</td>
        <td>$multiplicacion</td>
    </tr>
    <tr>
        <td>$numero1 - $numero2</td>
        <td>$resta</td>
        <td>$numero1 / $numero2</td>
        <td>$division</td>
    </tr>
</table>

</body>
</html>