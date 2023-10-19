
<?php

/**
 * author: Adrián González Martínez
 * Fecha: 27/09/2023
 */

$numero = 5;
$numero2 = 2;
$numero3 = 4;


if ($numero > $numero2 and $numero > $numero3) {
    if ($numero2 > $numero3) {
        echo "$numero, $numero2, $numero3";

    }
    else {
        echo "$numero, $numero3, $numero2";
    }
} elseif ($numero2 > $numero and $numero2 > $numero3) {
    if ($numero > $numero3){
        echo "$numero2, $numero, $numero3";
    } else {
        echo "$numero2, $numero3, $numero2";

    }

} else {
    if ($numero > $numero2){
        echo "$numero3, $numero, $numero2";
    } else {
        echo "$numero3, $numer2, $numero1";

    }


} 
echo "<br><br><br><br><br><br>";


echo "<a href=\"https://github.com/AdrianGM02/RA3_SERVIDOR_ADRIAN_GONZALEZ_MARTINEZ/blob/main/RA3/Actividad1/numeros.php\">Ejercicio En el Github</a>"






?>