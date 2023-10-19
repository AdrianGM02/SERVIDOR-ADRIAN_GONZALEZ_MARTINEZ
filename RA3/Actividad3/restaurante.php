
<?php
/**
 * Author: Adrián González
 * Fecha: 03/10/2023
 * Enunciado: Un restaurante dispone de una carta de 3 primeros, 5 segundos y 3 postres.
* Almacenar información incluyendo foto y mostrar los menús disponibles. Mostrar el
* precio del menú suponiendo que éste se calcula sumando el precio de cada uno de
* los platos incluidos y con un descuento del 20 %. 
 * 
 */


$restaurante = array(
    "PrimeroPLato" => array(
        "Flamenquin" => 23,
        "Huevos Fritos" => 44,
        "Sopa de Tomate" => 14
    ),
    "SegundosPlatos" => array(
        "Filete de Salmón" => 30,
        "Lasaña" => 22,
        "Pollo al Curry" => 25,
        "Solomillo a la Parrilla" => 35,
        "Tacos de Carnitas" => 20
    ),
    "Postres" => array(
        "Tiramisú" => 10,
        "Mousse de Chocolate" => 8,
        "Cheesecake de Fresa" => 12
    )
);

$mostrarPlatoyPrecios = function($restaurante){
    $precioTotal = 0;
    foreach ($restaurante as $tipoPlato => $platos) {
        echo $tipoPlato . "<br/>";
        foreach ($platos as $plato => $precio) {
            echo "El plato es ". $plato . " y vale " . $precio . " euros. <br/>";
            $precioTotal += $precio;
        }
    }
    echo $precioTotal . " EUROS";
};

$mostrarPlatoyPrecios($restaurante);
echo "<br><br><br><br><br><br>";

echo "<a href=\"https://github.com/AdrianGM02/RA3_SERVIDOR_ADRIAN_GONZALEZ_MARTINEZ/blob/main/RA3/Actividad3/restaurante.php\">Ejercicio En el Github</a>";
