<!DOCTYPE html>
<html>
<head>
    <title>Corregir Ases</title>
</head>
<body>
<?php
    function contar_mayusculas($cadena) {
        $contador = 0;
        if (!empty($cadena)) {
            foreach (str_split($cadena) as $letra) {
                if ($letra >= 'A' && $letra <= 'Z') {
                    $contador++;
                }
            }
        }
        return $contador;
    }

    $texto = "hOLA ciudAdanos";
    $resultado = contar_mayusculas($texto);
    echo "<p>Original: $texto</p>";
    echo "<p>Número de mayúsculas: $resultado</p>";
?>
</body>
</html>