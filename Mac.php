<?php

class Mac implements iMac
{
    // Las interfaces solo pueden contener constantes y métodos.
    public $software = [];

    public function setSoftware($software)
    {
        $this->software = $software;
    }

    public function getSoftware()
    {
        return $this->software;
    }

    public function formatear()
    {
        return "La patata se esta formateando";
    }
    public function actualizar()
    {
        return "La patata se esta actualizando";
    }
    public function instalarSoftware($software)
    {
        $this->software[] = $software;
        return "Se le esta instalando $software programa";
    }


}