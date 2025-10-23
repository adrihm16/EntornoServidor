<!DOCTYPE html>
<html>
<head>
    <title>Corregir Ases</title>
</head>
<body>
<?php
    function contar_letra($cadena, $letra, $casesensitive) {
        $contador = 0;
        if ($casesensitive) {
            if (!empty($cadena)) {
                $aux = trim($cadena);
                foreach (str_split($aux) as $caracter) {
                    if ($caracter == $letra) {
                        $contador++;
                    }
                }
            }
        } else {
            if (!empty($cadena)) {
                $aux = trim($cadena);
                $aux = strtolower($aux);
                foreach (str_split($aux) as $caracter) {
                    if ($caracter == $letra) {
                        $contador++;
                    }
                }
            }
        }

        return $contador;
    }

    $texto = "hOLA ciudAdanos";
    $resultado = contar_letra($texto, "a", true);
    echo "<p>Original: $texto</p>";
    echo "<p>Número de a: $resultado</p>";
?>
</body>
</html>