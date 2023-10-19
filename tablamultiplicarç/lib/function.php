<?php

function existeCoordenada($fila, $columna, $array) {
    foreach ($array as $key => $value) {
        if (($value['f'] == $fila) and ($value['c'] == $columna))  {
            $lexiste = true;
            
        }
    }
    return $lexiste;
}

?>