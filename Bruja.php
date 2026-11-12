<?php
require_once __DIR__ . '/Clase.php';
class Bruja extends Clase
{


    public function __construct($muerto, $nivel, $vida, $magical)
    {
        parent::__construct($muerto, $nivel, $vida, $magical);

        $magical = true;
        $muerto = $muerto;
        $nivel = $nivel;
        if ($nivel % 2 == 0) {
            $vida = $vida + 2;
        }
        $vida = $vida ?? 6;
    }
}
