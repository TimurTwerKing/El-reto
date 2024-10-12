<?php
class Informatico extends Persona
{
    public $lenguajes;
    public $ExperienciaProgramador;

    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $ExperienciaProgramador)
    {
        parent::__construct($nombre, $apellido, $altura, $edad);
        $this->lenguajes = $lenguajes;
        $this->ExperienciaProgramador = $ExperienciaProgramador;
    }
    public function programar()
    {
        return "Soy $this->nombre y stoy programando en $this->lenguajes";
    }
    public function repararOrdenadores()
    {
        return "Soy $this->nombre y estoy reparando un PC-MasterRace";
    }
    public function hacerOfimatica()
    {
        return "Soy $this->nombre y estoy ofimaticando :)";
    }

}