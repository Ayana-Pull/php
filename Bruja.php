<?php
require_once __DIR__ . '/Clase.php';
class Bruja extends Clase
{
    public Hechizo $hechizo;
    public function __construct($hechizo)
    {
        parent::__construct();

        $this->setMagical(false);
        $this->setNivel(1);
        $this->setVida(6);
        if ($this->getNivel() % 2 == 0) {
            $this->setVida($this->getNivel() + 2);
        }
        $this->hechizo = $hechizo;
    }
    public function getHechizo()
    {
        return $this->hechizo;
    }
    public function setHechizo($hechizo)
    {
        return $this->hechizo = $hechizo;
    }

    public function ataqueMagico($hechizo)
    {
        $total = $this->hechizo->dano();
        $total = $total + rand(1, 6) + rand(1, 6);
        var_dump("total de ataque magico {$total}");
        return $total;
    }
}
