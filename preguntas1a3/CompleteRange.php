<?php

class CompleteRange {

    public function CompleteRange() {
        //$this->Build("Alucard");
    }

    public function Build($cad) {
        $cadena = "";
        $numero = explode(",", $cad);
        $primer = $numero[0];
        $ultimo = $numero[count($numero) - 1];

        echo "primer : $primer <br>";
        echo "ultimo : $ultimo <br>";

        for ($x = $primer; $x <= $ultimo; $x++) {
            $cadena .= "$x,";
        }
        $cadena = substr($cadena, 0, -1);
        echo "Nueva Serie : $cadena";
    }

}

$complete = new CompleteRange();

//$complete->Build("55,59,60");
