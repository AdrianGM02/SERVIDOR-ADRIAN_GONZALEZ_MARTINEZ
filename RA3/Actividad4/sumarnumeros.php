<?php

/**
 * @author Adrian <email>
 * Enunciado: Sumar Numeros
 */
$suma1 = '';
$suma2 = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["numeros"])) {
        $numeros = $_POST['numeros'];
        $numerosArray = explode(',', $numeros);
        $suma1 = array_sum($numerosArray);
    }
    if (isset($_POST["numero1"]) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $suma2 = $numero1 + $numero2;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumar números</title>
</head>
<body>
<h1>Calculadora</h1>
<form method="post">
    <label for="numeros">Suma los números separados por comas:</label>
    <input type="text" name="numeros" id="numeros">
    <button type="submit">Calcular</button>
</form>

<h1>Calculadora con distintos inputs</h1>
<form method="post">
    <label for="numero1">Número 1:</label>
    <input type="text" name="numero1" id="numero1">
    <label for="numero2">Número 2:</label>
    <input type="text" name="numero2" id="numero2">
    <button type="submit">Calcular</button>
</form>

<div>
    <?php
    if (!empty($suma1)) {
        echo "Resultado 1: $suma1<br>";
    }
    if (!empty($suma2)) {
        echo "Resultado 2: $suma2";
    }
    ?>
</div>


<a href="https://github.com/AdrianGM02/RA3_SERVIDOR_ADRIAN_GONZALEZ_MARTINEZ/blob/main/RA3/Actividad4/sumarnumeros.php">Ejercicio En El Github</a>
</body>
</html>
