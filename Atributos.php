<?php
class Atributos
{
    private int $fuerza;
    private int $destreza;
    private int $constitucion;
    private int $inteligencia;
    private int $sabiduria;
    private int $carisma;

    public function __construct()
    {
        $this->fuerza = 10;
        $this->destreza = 10;
        $this->constitucion = 10;
        $this->inteligencia = 10;
        $this->sabiduria = 10;
        $this->carisma = 10;
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

    public function caluladobono(string $atributo)
    {
        if ($atributo === 'Fuerza') {
            return (int) floor(($this->getFuerza() - 10) / 2);
        }
        if ($atributo === 'Destreza') {
            return (int) floor(($this->getDestreza() - 10) / 2);
        }
        if ($atributo === 'Sabiduria') {
            return (int) floor(($this->getSabiduria() - 10) / 2);
        }
        if ($atributo === 'Carisma') {
            return (int) floor(($this->getCarisma() - 10) / 2);
        }
        if ($atributo === 'Constitucion') {
            return (int) floor(($this->getConstitucion() - 10) / 2);
        }
        if ($atributo === 'Inteligencia') {
            return (int) floor(($this->getInteligencia() - 10) / 2);
        }
    }
    //need this for bono of arma and hechizos
    public function salvacion($atributoasalvar)
    {
        $bonificador = 0;
        if ($atributoasalvar === 'Fuerza') {
            $bonificador = $this->caluladobono($this->getFuerza());
        }
        if ($atributoasalvar === 'Destreza') {
            $bonificador = $this->caluladobono($this->getDestreza());
        }
        if ($atributoasalvar === 'Sabiduria') {
            $bonificador = $this->caluladobono($this->getSabiduria());
        }
        if ($atributoasalvar === 'Carisma') {
            $bonificador = $this->caluladobono($this->getCarisma());
        }
        if ($atributoasalvar === 'Constitucion') {
            $bonificador = $this->caluladobono($this->getConstitucion());
        }
        if ($atributoasalvar === 'Inteligencia') {
            $bonificador = $this->caluladobono($this->getInteligencia());
        }
        $resultado = $bonificador + rand(1, 20);
        return $resultado;
    }

    public function setupAtributes()
    {
        $tablas = [8 => 0, 9 => 1, 10 => 2, 11 => 3, 12 => 4, 13 => 5, 14 => 7, 15 => 9];
        $contador = 0;
        var_dump("Usa la siguiente tabla el numero y su puntaje equivalente, tiene que sumar a 27 puntos");
        var_dump($tablas);
        var_dump("Ingrese el numero o dejo vacio y se queda como 10\n");
        $this->setFuerza(readline("Ingrese el numero de Fuerza: "));
        $this->setDestreza(readline("Ingrese el numero de Destreza: "));
        $this->setCarisma(readline("Ingrese el numero de Carisma: "));
        $this->setConstitucion(readline("Ingrese el numero de Constitucion: "));
        $this->setInteligencia(readline("Ingrese el numero de Inteligencia: "));
        $this->setSabiduria(readline("Ingrese el numero de Sabiduria: "));


        foreach ($tablas as $total => $puntos) {
            if ($this->getFuerza() === $total) {
                $contador += $puntos;
            }
            if ($this->getDestreza() === $total) {
                $contador += $puntos;
            }
            if ($this->getCarisma() === $total) {
                $contador += $puntos;
            }
            if ($this->getConstitucion() === $total) {
                $contador += $puntos;
            }
            if ($this->getInteligencia() === $total) {
                $contador += $puntos;
            }
            if ($this->getSabiduria() === $total) {
                $contador += $puntos;
            }
        }
        if ($contador === 27) {
            return var_dump("Correcto");
        }
        if ($contador > 27) {
            $exceso = $contador - 27;
            var_dump("te pasaste {$exceso} puntos\n");
            $this->setupAtributes();
        }
        if ($contador < 27) {
            $sobra = 27 - $contador;
            var_dump("te pasaste {$sobra} puntos\n");
            $this->setupAtributes();
        }
    }
}
