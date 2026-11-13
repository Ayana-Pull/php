<?php
class Arma
{
    public string $tipo;
    public int $dado;
    public string $atributo;
    public string $bono;

    public function __construct($tipo, $dado, $atributo)
    {
        $this->tipo = $tipo;
        $this->dado = $dado;
        $this->bono = 0;
        $this->atributo = $atributo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        return $this->tipo = $tipo;
    }
    public function getDado()
    {
        return $this->dado;
    }
    public function setDado($dado)
    {
        return $this->dado = $dado;
    }
    public function getAtributo()
    {
        return $this->atributo;
    }
    public function setAtributo($atributo)
    {
        return $this->atributo = $atributo;
    }
    public function getBono()
    {
        return $this->bono;
    }
    public function setBono($bono)
    {
        return $this->bono = $bono;
    }

    //gota put this when creating the wepon


    public function dano()
    {
        return $dano = $this->getBono() + rand(1, $this->getDado());
    }
}
