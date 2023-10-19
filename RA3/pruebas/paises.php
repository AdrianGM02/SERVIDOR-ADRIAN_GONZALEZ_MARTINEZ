<?php

$aPaises = array(
    array('id' => 'es', 'pais' => 'España', 'capital' => 'Madrid'),
    array('id' => 'it', 'pais' => 'Italia', 'capital' => 'Roma'),
    array('id' => 'fr', 'pais' => 'Francia', 'capital' => 'Paris'),

);
// Obtener un array con paises

// Opcion 1

$nombre_paises = array();
echo "Opcion 1";

foreach ($aPaises as $pais) {

    $nombre_paises[]= $pais['pais'];
};


foreach ($nombre_paises as $value) {

    echo $value;
};


$arrayEnteros = array(1,2,3,4,5);

$aEnteros = array_map(function($n){return $n * $n }, $arrayEnteros)


?>