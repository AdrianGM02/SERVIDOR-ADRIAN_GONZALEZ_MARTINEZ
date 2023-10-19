<?php

/**
 * author: Adrián González Martínez
 * Fecha: 27/09/2023
 * Edad de la persona
 */

$ano = 2000;
$mes = 10;
$dia = 26;

$anoAct = (int)date("Y");
$mesAct = (int)date("m");
$diasAct = (int)date("d");

$anoEst = $anoAct - $ano;


if ($mes > $mesAct) {
    $anoEst--;
    
} else {
    if ($mesAct == $mes and $diasAct < $dia){
        $anoEst--;



    }
}
echo "<br><br><br><br><br><br>";


echo "Tiene " . $anoEst . " años";


echo "<a href=\"https://github.com/AdrianGM02/RA3_SERVIDOR_ADRIAN_GONZALEZ_MARTINEZ/blob/main/RA3/Actividad1/fechanacimiento.php\">Ejercicio En el Github</a>"






?>