<?php
// index.php

require_once __DIR__ . '/Atributos.php';
require_once __DIR__ . '/Arma.php';
require_once __DIR__ . '/Clase.php';
require_once __DIR__ . '/Rogue.php';
require_once __DIR__ . '/Bruja.php';
require_once __DIR__ . '/Personaje.php';

function clase($rogue, $bruja)
{
    $opcion = (int)readline("ingrese 1 para ser rogue o 2 para bruja");

    if ($opcion === 1) {
        return $rogue;
    }
    if ($opcion === 2) {
        return $bruja;
    }
}

$daga = new Arma("daga", 6, 'Destreza');

$firebolt = new Hechizo("firebolt", 10, 'Carisma');

$rogue = new Rogue($daga);
$bruja = new Bruja($firebolt);


$nombre = readline("ingrese nombre de personaje");
$string = readline("ingrese la raza de personaje");

$clase = clase($rogue, $bruja);

$personaje1 = new Personaje($nombre, $string, $clase);

$personaje1->getClase()->getAtributos()->setupAtributes();

if ($personaje1->getClase() === $rogue) {

    $nuevobono = $personaje1->getClase()->getAtributos()->caluladobono($personaje1->$rogue->getArma->getAtributo());
    $personaje1->$rogue->getArma->setBono($nuevobono);
    $personaje1->$rogue->ataqueSorpresa($personaje1->$rogue->getArma());
}
if ($personaje1->getClase() === $bruja) {

    $nuevobono = $personaje1->getClase()->getAtributos()->caluladobono($personaje1->$bruja->getHechizo->getAtributo());
    $personaje1->$bruja->getHechizo->setBono($nuevobono);
    $personaje1->$bruja->ataqueMagico($personaje1->$bruja->getHechizo());
}
