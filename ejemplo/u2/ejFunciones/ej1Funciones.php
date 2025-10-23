<!DOCTYPE html>
<html>
<head>
    <title>Corregir Primera Letra</title>
</head>
<body>
<?php
    function corregir_primera_letra($cadena) {
        if (!empty($cadena)) {
            return strtoupper(substr($cadena, 0, 1)) . substr($cadena, 1);
        }
        return $cadena;
    }

    $texto = "hola mundo";
    $resultado = contar_letra_a($texto);
    echo "<p>Original: $texto</p>";
    echo "<p>Corregido: $resultado</p>";
?>
</body>
</html>