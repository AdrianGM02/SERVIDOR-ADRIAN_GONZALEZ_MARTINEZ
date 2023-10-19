
<?php

/**
 * author: Adrián González Martínez
 * Fecha: 27/09/2023
 * Número de días de un mes
 */

$year = 1980;
$month = 3;


$month = '2';
$year = '2024';
$dias = 31; //Inicializamos los dias de los meses

  switch ($month) {
    case 4:
    case 6:
    case 9:
    case 11:
        $dias = 30;
        break;
    case 2:
        $dias = 28;
        if ((($year % 4 == 0) and ($year % 100 != 0)) || ($year % 400 == 0)) {
                $dias++; //Sumamos los dias de los años que son bisisesto
                break;
            }              
        }


echo "Los dias del mes " . $month . "del año" . $year . "son: " .  $dias        

?>