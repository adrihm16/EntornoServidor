<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Vehiculo</title>
</head>
<body>
<form action="resultado.php" method="POST">
    <label for="datosRaw">Datos raw:</label>
    <br>
    <textarea name="datosRaw" id="datosRaw" rows="4" cols="50"></textarea>
    <br>
    <p>Filtrar km maximos y minimos</p>
    <label for="kmMax">Km maximos</label>
    <input type="number" name="kmMax" id="kmMax">
    <label for="kmMin">Km minimos</label>
    <input type="number" name="kmMin" id="kmMin">
    <br>
    <p>Extras</p>
    <label>Extras:</label><br>
    <input type="checkbox" name="extras[]" value="GPS"> GPS
    <input type="checkbox" name="extras[]" value="sensor de carril"> Sensor de carril
    <input type="checkbox" name="extras[]" value="camara 360"> Cámara 360
    <input type="checkbox" name="extras[]" value="ABS"> ABS
    <br><br>
    <button type="submit">Enviar</button>
</form>
</body>
</html>