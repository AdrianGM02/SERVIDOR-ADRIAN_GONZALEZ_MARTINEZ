<?php

/**
 * author: Adrián González Martínez
 * Fecha: 27/09/2023
 * Sumar los tres primeros pares
 */


 

$sumPar = 0;
$cont = 0;
$par = 2;


while ($cont < 3) {
    if ($par % 2 == 0) {
        $sumPar += $par;
        $cont++;
        
    }

    $par++;
}

print("La suma es " . $sumPar);
echo "<br><br><br><br><br><br>";

echo "<a href=\"https://github.com/AdrianGM02/RA3_SERVIDOR_ADRIAN_GONZALEZ_MARTINEZ/blob/main/RA3/Actividad2/sumarpares.php\">Ejercicio En el Github</a>"




?>