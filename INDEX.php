<?php
require 'iMac.php';
require 'Mac.php';
require 'Coche.php';
require 'Persona.php';
require 'Informatico.php';
require 'TecnicoRedes.php';
require 'Configuracion.php';

$coche = new Coche("Rojo", "Toyota", "Corolla", 0, 130, 5);
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
$coche->mostrarInformacion();

$persona = new Persona("Juan", "Pérez", 1.75, 30);
$persona->hablar();
$persona->caminar();

$informatico = new Informatico("Ana", "García", 1.65, 28, "PHP, JavaScript", 5);
echo $informatico->programar() . "<br>";
echo $informatico->repararOrdenadores() . "<br>";
echo $informatico->hacerOfimatica() . "<br>";

$tecnicoRedes = new TecnicoRedes("Carlos", "López", 1.80, 35, "Python", 10, 7);
echo $tecnicoRedes->auditarRedes() . "<br>";

Configuracion::setColor("Negro");
Configuracion::setNewsletter(true);
Configuracion::setEntorno("Producción");

echo "Configuración: <br>";
echo "Color: " . Configuracion::getColor() . "<br>";
echo "Newsletter: " . (Configuracion::getNewsletter() ? "Sí" : "No") . "<br>";
echo "Entorno: " . Configuracion::getEntorno() . "<br>";

$mac = new Mac();
$mac->setSoftware(["Xcode", "Visual Studio Code"]);
echo "Software instalado: " . implode(", ", $mac->getSoftware()) . "<br>";
echo $mac->formatear() . "<br>";
echo $mac->actualizar() . "<br>";
echo $mac->instalarSoftware("Photoshop") . "<br>";
echo "Software después de la instalación: " . implode(", ", $mac->getSoftware()) . "<br>";
