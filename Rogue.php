<?php
require_once __DIR__ . '/Clase.php';
class Rogue extends Clase
{
    public Arma $arma;
    public function __construct($arma, $muerto, $nivel, $vida, $magical)
    {

        $magical = false;
        $nivel = 1;
        $muerto = $muerto;
        $vida = 8;
        if ($nivel % 2 == 0) {
            $vida += 2;
        }
        parent::__construct($muerto, $nivel, $vida, $magical);
        $this->arma = $arma;
    }
    public function getArma()
    {
        return $this->arma;
    }
    public function setArma($arma)
    {
        return $this->arma = $arma;
    }

    public function ataqueSorpresa($arma)
    {
        $total = $this->arma->dano();
        $total = $total + rand(1, 6) + rand(1, 6);
        return $total;
    }
}
