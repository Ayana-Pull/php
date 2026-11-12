<?
class Atributos
{
    private int $fuerza;
    private int $destreza;
    private int $constitucion;
    private int $inteligencia;
    private int $sabiduria;
    private int $carisma;

    public function _construct($fureza, $destreza, $constitucion, $inteligencia, $sabiduria, $carisma)
    {
        $this->fuerza = $fuerza ?? 10;
        $this->destreza = $destreza ?? 10;
        $this->constitucion = $constitucion ?? 10;
        $this->inteligencia = $inteligencia ?? 10;
        $this->sabiduria = $sabiduria ?? 10;
        $this->carisma = $carisma ?? 10;
    }

    public function getFuerza()
    {
        return $this->fuerza;
    }
    public function setDestreza($destreza)
    {
        return $this->destreza = $destreza;
    }
    public function getDestreza()
    {
        return $this->destreza;
    }
    public function setFuerza($fuerza)
    {
        $this->fuerza = $fuerza;
    }
    public function getConstitucion()
    {
        return $this->constitucion;
    }
    public function setConstitucion($constitucion)
    {
        $this->constitucion = $constitucion;
    }
    public function getInteligencia()
    {
        return $this->inteligencia;
    }
    public function setInteligencia($inteligencia)
    {
        $this->inteligencia = $inteligencia;
    }
    public function getSabiduria()
    {
        return $this->sabiduria;
    }
    public function setSabiduria($sabiduria)
    {
        $this->sabiduria = $sabiduria;
    }
    public function getCarisma()
    {
        return $this->carisma;
    }
    public function setCarisma($carisma)
    {
        $this->carisma = $carisma;
    }


    public function salvacion($atributo)
    {
        if ($atributo === 'Fuerza') {
            $bonificador = $this->getFuerza();
            $resultado = $bonificador + rand(1, 20);
            return $resultado;
        }
        if ($atributo === 'Destreza') {
            $bonificador = $this->getDestreza();
            $resultado = $bonificador + rand(1, 20);
            return $resultado;
        }
        if ($atributo === 'Sabiduria') {
            $bonificador = $this->getSabiduria();
            $resultado = $bonificador + rand(1, 20);
            return $resultado;
        }
        if ($atributo === 'Carisma') {
            $bonificador = $this->getCarisma();
            $resultado = $bonificador + rand(1, 20);
            return $resultado;
        }
        if ($atributo === 'Constitucion') {
            $bonificador = $this->getConstitucion();
            $resultado = $bonificador + rand(1, 20);
            return $resultado;
        }
        if ($atributo === 'Inteligencia') {
            $bonificador = $this->getInteligencia();
            $resultado = $bonificador + rand(1, 20);
            return $resultado;
        }
    }
}
