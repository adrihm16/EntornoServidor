<?php
    require_once("Vehiculo.php");
    /**
     * @param array $matrizVehiculos
     * @return void
     */
    function mostrarVehiculos(array $matrizVehiculos): void
    {
        $nombresCategorias = ["EL" => "ELÉCTRICO", "HI" => "HIDRÓGENO"];

        foreach ($matrizVehiculos as $tipo => $estados) {
            echo "<h2>Categoría: " . ($nombresCategorias[$tipo] ?? $tipo) . "</h2>";

            foreach ($estados as $estado => $lista) {
                echo "<h3>Estado: $estado</h3>";

                if (empty($lista)) {
                    echo "<p>No hay vehículos en esta categoría.</p>";
                } else {
                    echo "<ul>";
                    foreach ($lista as $v) {
                        // 1. Representación del objeto (invoca __toString automáticamente)
                        echo "<li>" . $v . "</li>";

                        // 2. Ficha técnica detallada
                        echo "<ul>";
                        echo "<li>o Salud: " . $v->calcularSalud() . "%.</li>";
                        echo "<li>o Autonomía: " . $v->calcularAutonomia() . "</li>";
                        echo "<li>o Certificación: " . $v->obtenerEtiqueta() . "</li>";
                        echo "</ul><br>";
                    }
                    echo "</ul>";
                }
            }
        }
    }

    if (isset($_POST['datosRaw'], $_POST['kmMax'], $_POST['kmMin'])) {
        $datosRaw = $_POST['datosRaw'];
        $kmMax = (int)$_POST['kmMax'];
        $kmMin = (int)$_POST['kmMin'];

        $bloques = explode("#", $datosRaw);
        $listaVehiculos = [];
        foreach ($bloques as $bloque) {
            $datos = explode("|", $bloque);
            $datosLimpios = array_map('trim', $datos);
            $listaVehiculos[] = $datosLimpios;
        }
        $extrasSeleccionados = [];
        if (isset($_POST['extras']) && is_array($_POST['extras'])) {
            $extrasSeleccionados = $_POST['extras'];
        }

        $matrizVehiculos = [
            "EL" => ["ÓPTIMO" => [], "REVISIÓN" => []],
            "HI" => ["ÓPTIMO" => [], "REVISIÓN" => []]
        ];

        foreach ($listaVehiculos as $datos) {
            if (count($datos) == 5) {
                try {
                    $tipo  = $datos[0];
                    $id    = $datos[1];
                    $nom   = $datos[2];
                    $fecha = $datos[3];
                    $kms   = (int)$datos[4];

                    if ($kms >= $kmMin && $kms <= $kmMax) {
                        $v = null;

                        if ($tipo == "EL") {
                            $v = new Electrico($id, $nom, $fecha, $kms, $extrasSeleccionados);
                        } elseif ($tipo == "HI") {
                            $v = new Hidrogeno($id, $nom, $fecha, $kms, $extrasSeleccionados);
                        }

                        if ($v !== null) {
                            $salud = $v->calcularSalud();
                            $estado = ($salud >= 75) ? "ÓPTIMO" : "REVISIÓN";

                            $matrizVehiculos[$tipo][$estado][] = $v;
                        }
                    }
                } catch (Exception $e) {
                }
            }
        }
        mostrarVehiculos($matrizVehiculos);
    }