<!DOCTYPE html>
<html>
<head>
    <title>Corregir Primera Letra</title>
</head>
<body>
<?php
    function corregir_mayusculas($cadena) {
        if (!empty($cadena)) {
            return strtoupper(substr($cadena, 0, 1)) . strtolower(substr($cadena, 1));
        }
        return $cadena;
    }

    $texto = "hOLA mundo";
    $resultado = corregir_mayusculas($texto);
    echo "<p>Original: $texto</p>";
    echo "<p>Corregido: $resultado</p>";
?>
</body>
</html>