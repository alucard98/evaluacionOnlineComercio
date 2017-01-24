<?php

class ClearPar {

    public function ClearPar() {
        //$this->Build("Alucard");
    }
    public function Build($cad) {
        $cadena = "";
        $cant = substr_count($cad, '()');
        for($x=1;$x<=$cant;$x++){
            $cadena .= "()";
        }
        echo "Numero de apariciones : $cant <br>";
        echo $cadena;
    }
}
$limpiar = new ClearPar();
//$limpiar->Build("(()");
