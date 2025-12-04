<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Personalizado</title>
</head>
<body>

<div class="message-card">
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST['nombre']);
            $edad = htmlspecialchars($_POST['edad']);

            if (!empty($nombre) && !empty($edad)) {
                echo "<h1>¡Hola, $nombre!</h1>";
                echo "<p>Es un placer saludarte. Hemos registrado que tienes <span class='highlight'>$edad</span> años.</p>";
            } else {
                echo "<h1>Ups...</h1>";
                echo "<p>Parece que faltan datos.</p>";
            }

        } else {
            echo "<h1>Acceso Incorrecto</h1>";
            echo "<p>Por favor, completa el formulario primero.</p>";
        }
    ?>

    <br>
    <a href="formEntrada.html">← Volver al formulario</a>
</div>

</body>
</html>