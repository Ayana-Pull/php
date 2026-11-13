<?php
class Personaje
{
    public string $nombre;
    public string $raza;
    public int $experiencia;
    public Clase $clase;

    public function __construct(string $nombre, string $raza, Clase $clase, int $experiencia)
    {
        $this->nombre = $nombre;
        $this->raza = $raza;
        $this->clase = $clase;
        $this->experiencia = $experiencia;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        return $this->nombre = $nombre;
    }
    public function getRaza()
    {
        return $this->raza;
    }
    public function setRaza($raza)
    {
        return $this->raza = $raza;
    }
    public function getClase()
    {
        return $this->clase;
    }
    public function setExperiencia($experiencia)
    {
        return $this->experiencia = $experiencia;
    }
    public function getExperiencia()
    {
        return $this->experiencia;
    }
    public function setClase($clase)
    {
        return $this->clase = $clase;
    }
    public function subirNivelxXP()
    {
        $nivel_por_xp = [300, 600, 1800, 3800, 7500, 9000, 11000, 14000];
        foreach ($nivel_por_xp as $nxp) {
            if ($this->getExperiencia() === $nxp) {
                $this->clase->subirdeNivel();
            }
        }
    }
    public function ganarXP()
    {
        $xp = rand(1, 100);
        $this->setExperiencia($this->getExperiencia() + $xp);
        $this->subirNivelxXP();
    }
}
