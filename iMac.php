<?php
interface iMac
{
    public const MARCA = "Apple";

    public function formatear();
    public function actualizar();
    public function instalarSoftware($software);
}