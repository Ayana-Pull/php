<?php
require_once __DIR__ . '/Clase.php';
class Rogue extends Clase
{
    public Arma $arma;
    public function __construct($arma)
    {
        parent::__construct();

        $this->setMagical(false);
        $this->setNivel(1);
        $this->setVida(8);
        if ($this->getNivel() % 2 == 0) {
            $this->setVida($this->getNivel() + 2);
        }
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
        var_dump("total de ataque sorpresa {$total}");
        return $total;
    }
}
