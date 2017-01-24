<?php

class ChangeString {

    public function ChangeString() {
        //$this->Build("Alucard");
    }
    public function Build($cad) {
        $newCad = "";
        for ($i = 0; $i < strlen($cad); $i++) {
            $inicio = $i;                       //cada elemento de la cadena. 
            $fin = 1;
            $arreglo[$i] = substr($cad, $inicio, $fin);
            $newstring = ' abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZA';
            for ($j = 0; $j < strlen($newstring); $j++) {
                $inicio2 = $j;                       //cada elemento de la cadena. 
                $fin2 = 1;
                $arreglo2[$j] = substr($newstring, $inicio2, $fin2);
                $pos1[$j] = substr($newstring, $inicio2, $fin2);
            }
            $pos = strpos($newstring, '' . $arreglo[$i] . '', 1);
            
            if($pos==""){                
                $newCad .= $arreglo[$i];
            }else {
                $newCad .= str_replace($arreglo[$i], $pos1[$pos + 1], $arreglo[$i]);
            }            
            //echo $arreglo[$i] . " -> " . $pos . " -> " . $pos1[$pos + 1] . "<br>";
        }
        echo "Cadena : $cad <br>";
        echo "Nueva Cadena: " . $newCad . " <br> ";
    }

}

$change = new ChangeString();

//$change->Build("alucard was he/re 144 S0p0rte98#");
