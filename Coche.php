<?php

class Coche
{
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getVelocidad()
    {
        return $this->velocidad;
    }

    public function getCaballaje()
    {
        return $this->caballaje;
    }

    public function getPlazas()
    {
        return $this->plazas;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;
    }

    public function setCaballaje($caballaje)
    {
        $this->caballaje = $caballaje;
    }

    public function setPlazas($plazas)
    {
        $this->plazas = $plazas;
    }

    // Métodos
    public function acelerar()
    {
        $this->velocidad += 1;
    }

    public function frenar()
    {
        $this->velocidad -= 1;
    }

    public function mostrarInformacion()
    {
        echo "Color: " . $this->color . "<br>";
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Velocidad: " . $this->velocidad . "<br>";
        echo "Caballaje: " . $this->caballaje . "<br>";
        echo "Plazas: " . $this->plazas . "<br>";
    }


    function mostrarVelocidad()
    {
        return $this->velocidad;
    }



}

