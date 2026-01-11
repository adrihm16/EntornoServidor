<?php
class Animal
{
    public $nombre;
    public $color;
    protected $fechaDeNacimiento;

    public function __construct($nombre, $color, $fechaDeNacimiento) {
        $this->nombre = $nombre;
        $this->color = $color;
        $this->fechaDeNacimiento = $fechaDeNacimiento;
    }
    public function __set($nombre, $valor) {
        $this->$nombre = $valor;
    }
    public function __get($nombre) {
        return $this->$nombre;
    }
    public function __toString() {
        return $this->nombre . " es de color " . $this->color ." y tiene " . $this->obtenerEdad() . " años de edad.";
    }

    public function obtenerEdad() {
        $fecha = strtotime($this->fechaDeNacimiento);
        $segundos = time() - $fecha;
        $edad = floor ($segundos / 60 / 60 / 24 / 365.25);
        return $edad;
    }
}