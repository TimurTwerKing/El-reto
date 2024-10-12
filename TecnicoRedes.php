<?php
class TecnicoRedes extends Informatico
{
    public $auditarRedesExperiencia;

    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador, $auditarRedesExperiencia)
    {
        parent::__construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador);
        $this->auditarRedesExperiencia = $auditarRedesExperiencia;
    }

    public function auditarRedes()
    {
        return "Soy $this->nombre y estoy auditando la red con $this->auditarRedesExperiencia años de experiencia.";
    }
}