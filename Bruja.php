<?php
require_once __DIR__ . '/Clase.php';
class Bruja extends Clase
{


    public function __construct($muerto, $magical)
    {


        $magical = true;
        $muerto = $muerto;
        $nivel = 1;
        $vida = 6;
        if ($nivel % 2 == 0) {
            $vida += 2;
        }

        parent::__construct($muerto, $nivel, $vida, $magical);
    }
}
