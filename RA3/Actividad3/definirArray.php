<?php
/**
 * Author: Adrián González
 * Fecha: 03/10/2023
 * Enunciado: Definir un array que permita almacenar y mostrar la siguiente información.
 */



$meses = array(
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre'
    
);

$tablero = array_fill(0, 10, array_fill(0,10,0));

$notas = array(
    'Alumno1' => 10,
    'Alumno3' => 7,
    'Alumno2' => 6,
    'Alumno4' => 7,
    'Alumno5' => 5,
);



$verbos_irregulares_ingles = array(
    "go" => array("go", "goes", "went", "gone"),
    "take" => array("take", "takes", "took", "taken"),
    "be" => array("am", "is", "are", "was", "were", "been"),
    "have" => array("have", "has", "had", "had"),
    "do" => array("do", "does", "did", "done")
   
    
);

$continentes = array(
    'Europa' => array(
        'Paises' => array('España', 'Italia'),
        'Capitales' => array('Madrid', 'Roma'),
        'Banderas' => array('españa.jpg', 'italia.jpg')
    ),
    'Asia' => array(
        'Paises' => array('Japon', 'China'),
        'Capitales' => array('Tokyo', 'Beijin'),
        'Banderaas' => array('japan.jpg', 'china.jpg')
    )
    );



echo "<a href=\"https://github.com/AdrianGM02/RA3_SERVIDOR_ADRIAN_GONZALEZ_MARTINEZ/blob/main/RA3/Actividad3/definirArray.php\">Ejercicio En el Github</a>";

echo "<br><br><br><br><br><br>";


?>
