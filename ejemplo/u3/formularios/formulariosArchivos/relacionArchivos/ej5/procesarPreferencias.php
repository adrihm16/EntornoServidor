<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Encuesta</title>
</head>
<body>

<div class="result-card">
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $comida = htmlspecialchars($_POST['comida'] ?? '');
            $gusta = htmlspecialchars($_POST['gusta'] ?? '');
            $comida_formateada = ucfirst(strtolower($comida));
            $respuesta = ($gusta === 'si') ? 'Sí' : 'No';

            if (!empty($comida) && !empty($gusta)) {
                $mensaje_final = "Te gusta la " . $comida_formateada . ": " . $respuesta;
                echo "<h1>¡Resultado Registrado!</h1>";
                echo "<div class='message-display'>$mensaje_final</div>";
                if ($gusta === 'si') {
                    echo "<p>¡Excelente elección! La $comida_formateada es una opción popular.</p>";
                } else {
                    echo "<p>Entendido. Explorar diferentes gustos es lo mejor.</p>";
                }
            } else {
                echo "<h1>Error de Datos</h1>";
                echo "<p>Por favor, asegúrate de haber seleccionado una comida y una preferencia.</p>";
            }
        } else {
            echo "<h1>Acceso Incorrecto</h1>";
            echo "<p>Por favor, usa el formulario para registrar tu preferencia.</p>";
        }
    ?>

    <a href="preferencias.html" class="back-link">← Volver al Formulario</a>
</div>

</body>
</html>