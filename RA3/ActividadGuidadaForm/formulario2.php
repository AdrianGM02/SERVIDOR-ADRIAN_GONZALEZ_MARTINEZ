<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $websiteErr = "";

$aGenero = array("Hombre", "Mujer", "Otro");
$genderErr = "";

$aVehiculos = array('Bici', 'Coche', 'Patinete');
$aVehiculosSeleccionados = array();


$aOpciones = array(
    array("valor1" => 1, "literal" => "Opcion1"),
    array("valor1" => 2, "literal" => "Opcion2"),
    array("valor1" => 3, "literal" => "Opcion3"),
    array("valor1" => 4, "literal" => "Opcion4"),
);

$lprocesaFormulario = false;
$lerror = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lprocesaFormulario = true;

    if (empty($_POST["name"])) {
        $nameErr = "El nombre es requerido";
        $lerror = true;
    }
}

if ($lerror) {
    $lprocesaFormulario = false;}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red
        }
    </style>
</head>

<body>
    <?php
    if (!$lprocesaFormulario) { ?>
        <h1>Validacion</h1>
        <span class="error">*Campos requeridos...</span>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Nombre: <input type="text" name="name" value="<?php echo $name; ?>" >
            <span class="error">*
                <?php echo $nameErr; ?>
            </span>
            <input type="submit" name="submit" value="Submit">
        </form>

    <?php } ?>
</body>

</html>