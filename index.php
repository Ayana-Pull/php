<?php
// index.php

require_once __DIR__ . '/Atributos.php';
require_once __DIR__ . '/Arma.php';
require_once __DIR__ . '/Hechizo.php';
require_once __DIR__ . '/Clase.php';
require_once __DIR__ . '/Rogue.php';
require_once __DIR__ . '/Bruja.php';
require_once __DIR__ . '/Personaje.php';

function clase($rogue, $bruja)
{
    $opcion = (int)readline("ingrese 1 para ser rogue o 2 para bruja: ");

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


$nombre = readline("ingrese nombre de personaje: ");
$string = readline("ingrese la raza de personaje: ");

$clase = clase($rogue, $bruja);

$personaje1 = new Personaje($nombre, $string, $clase);

$personaje1->getClase()->getAtributos()->setupAtributes();

if ($personaje1->getClase() === $rogue) {
    $arma = $rogue->getArma();
    $nuevobono = $rogue->getAtributos()->caluladobono($arma->getAtributo());
    $arma->setBono($nuevobono);
    $rogue->ataqueSorpresa($arma);
}

if ($personaje1->getClase() === $bruja) {
    $hechizo = $bruja->getHechizo();
    $nuevobono = $bruja->getAtributos()->caluladobono($hechizo->getAtributo());
    $hechizo->setBono($nuevobono);
    $bruja->ataqueMagico($hechizo);
}
