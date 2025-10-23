<!DOCTYPE html>
<html>
<head>
    <title>Corregir Ases</title>
</head>
<body>
<?php
    function contar_letra_a($cadena) {
        $contador = 0;
        if (!empty($cadena)) {
            $aux = trim($cadena);
            $aux = strtolower($cadena);
            foreach (str_split($aux) as $letra) {
                if ($letra == "a") {
                    $contador++;
                }
            }
        }
        return $contador;
    }

    $texto = "hOLA ciudAdanos";
    $resultado = contar_letra_a($texto);
    echo "<p>Original: $texto</p>";
    echo "<p>Número de ases: $resultado</p>";
?>
</body>
</html>