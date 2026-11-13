<?php


class Clase
{
    private int $nivel;
    private int $vida;
    private bool $magical;
    private Atributos $atributos;
    private bool $muerto;

    public function __construct()
    {
        $this->nivel = 0;
        $this->vida = 0;
        $this->magical = false;
        $this->muerto = true;
        $this->atributos = new Atributos();
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    public function getVida()
    {
        return $this->vida;
    }

    public function setVida($vida)
    {
        $this->vida = $vida;
    }
    public function getMagical()
    {
        return $this->magical;
    }

    public function setMagical($magical)
    {
        $this->magical = $magical;
    }
    public function getMuerto()
    {
        return $this->muerto;
    }
    public function setMuerto($muerto)
    {
        $this->muerto = $muerto;
    }
    public function getAtributos()
    {
        return $this->atributos;
    }
    public function setAtributos($atributos)
    {
        $this->atributos = $atributos;
    }


    public function subirdeNivel()
    {
        $this->nivel += 1;
    }
    public function salvacionMuerte()
    {
        $atributo = "Constitucion";
        $resultado = $this->atributos->salvacion($atributo);
        if ($resultado == 20) {
            var_dump("Reviviste");

            return 'revivio';
        }
        if ($resultado < 10) {
            var_dump("falaste");
            return 'fallo';
        }
        if ($resultado >= 10) {
            var_dump("pasaste");
            return 'paso';
        }
    }
    public function revive($resultados)
    {
        $conteo = array_count_values($resultados);
        $r = array_find($resultados, fn($resultado) => $resultado === 'revivio');
        if ($r) {
            $this->setVida(1);
        }
        if ($conteo['fallo'] === 3) {
            var_dump("moriste");
            return $this->setMuerto(false);
        }
        if ($conteo['paso'] === 3) {
            var_dump("reviviste");
            return $this->setVida(1);
        }
    }
}
