<?php

class Persona
{
    public $nombre;
    public $apellido;
    public $altura;
    public $edad;

    public function __construct($nombre, $apellido, $altura, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->altura = $altura;
        $this->edad = $edad;
    }
    // Getters y Setters
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    public function hablar()
    {
        echo "Me llamo $this->nombre $this->apellido y te hablo.<br>";
    }
    public function caminar()
    {
        echo "$this->nombre se va y no volverá jamás.<br>";
    }


}