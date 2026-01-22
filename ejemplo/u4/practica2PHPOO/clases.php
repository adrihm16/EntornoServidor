<?php
interface evaluable
{
    public function esRentable();
    public function impactoAmbiental();
    public function descripcionTecnica();
}

abstract class Invento {
    public $nombre;
    public $proposito;
    public $fechaPrototipo;
    public $coste;
    protected $materiales;
    public static $totalInventos;

    public static function validarFecha($cadena)
    {
        $regex = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/';
        if (preg_match($regex, $cadena)) {
            return true;
        }
        return false;
    }
    public function __construct($nombre, $proposito, $fechaPrototipo, $coste, $materiales) {
        if (self::validarFecha($fechaPrototipo) && $coste > 0) {
            $this->nombre = $nombre;
            $this->proposito = $proposito;
            $this->fechaPrototipo = $fechaPrototipo;
            $this->coste = $coste;
            $this->materiales = $materiales;
        } else {
            throw new Exception("Los datos ingresados no son correctos");
        }
    }
    public function aniosDesdePrototipo() {
        $fecha = strtotime($this->fechaPrototipo);
        $segundos = time() - $fecha;
        $anios = floor($segundos / (60 * 60 * 24 * 365.25));
        return $anios;
    }

    public function __toString() {
        echo "Invento: ". $this->nombre ."| Prototipo: ". $this->fechaPrototipo ." | Coste: ". $this->coste . "€";
    }

    public abstract function calcularComplejidad();
}