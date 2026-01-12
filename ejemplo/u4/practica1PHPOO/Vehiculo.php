<?php

    interface Certificable {
        public function obtenerEtiqueta();
    }

    abstract class Vehiculo {
        public static $contador = 0;
        private $id;
        protected $nombre;
        protected $fechaAdquisicion;
        protected $kilometraje;
        protected $extras;

        public static function formatearCodigo($codigo) {
            $codigo = strtoupper(trim($codigo));
            $codigoForm = "";
            for ($i = 0; $i < strlen($codigo); $i++) {
                if ($codigo[$i] !== ' ') {
                    $codigoForm .= $codigo[$i];
                }
            }
            return $codigoForm;
        }

        /**
         * @return int
         */
        public static function getContador(): int
        {
            return self::$contador;
        }

        public function __construct($id, $nombre, $fechaAdquisicion, $kilometraje, $extras) {
            $regex_codigo = '/^[A-Z]{3}[0-9]{4}[A-Z]$/i';
            $regex_fecha = '/^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/';

            $id_formateado = self::formatearCodigo($id);

            if (!preg_match($regex_codigo, $id_formateado)) {
                throw new Exception("El código '$id_formateado' no es válido");
            }

            if (!preg_match($regex_fecha, $fechaAdquisicion)) {
                throw new Exception("La fecha '$fechaAdquisicion' no es válida");
            }

            $this->id = $id_formateado;
            $this->nombre = $nombre;
            $this->fechaAdquisicion = $fechaAdquisicion;
            $this->kilometraje = $kilometraje;
            $this->extras = $extras;
            self::$contador++;
        }

        public function calcularSalud() {
            $salud = 100;
            if ($this->kilometraje > 20000) {
                $salud -= 25;
            }

            $fecha = strtotime($this->fechaAdquisicion);
            $segundos = time() - $fecha;
            $edad = floor($segundos / (60 * 60 * 24 * 365.25));

            if ($edad > 5) {
                $salud -= 25;
            }
            return $salud;
        }

        abstract public function calcularAutonomia();

        public function __toString() {
            $fechaFormateada = date("d/m/Y", strtotime($this->fechaAdquisicion));
            $listaExtras = !empty($this->extras) ? implode(", ", $this->extras) : "Ninguno";
            return "<strong>$this->nombre</strong> (ID: $this->id) | Adquirido: $fechaFormateada | Extras: $listaExtras";
        }
    }

    class Electrico extends Vehiculo implements Certificable {
        public function calcularAutonomia() {
            return 400;
        }
        public function obtenerEtiqueta()
        {
            return "Etiqueta 0 Emisiones - Exento de restricciones";
        }
    }
    class Hidrogeno extends Vehiculo implements Certificable
    {
        public function obtenerEtiqueta()
        {
            return "Etiqueta ECO - Acceso permitido a centro ciudad";
        }
        public function calcularAutonomia()
        {
            return 650;
        }
    }