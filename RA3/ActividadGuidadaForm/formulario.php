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
$opcionSeleccionada = 1;

$cars = array("Renault", "Mercedes", "Citroen", "Volvo", "Seat");
$carsSelecionados = array();

$lprocesaFormulario = false;
$lerror = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lprocesaFormulario = True;


    if (empty($_POST["name"])) {
        $nameErr = "El nombre es requerido";
        $lerror = true;
    } else {
        $name = test_input($_POST["name"]);

    }

    if (empty($_POST["email"])) {
        $emailErr = "El Email es requerido";
        $lerror = true;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de correo incorrecto";
            $lerror = true;
        }

    }

    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);

    if (empty($_POST["gender"])) {
        $genderErr = "El Genero es requerido";
        $lerror = true;
    } else {
        $gender = $_POST["gender"];


    }

    if (isset($_POST["vehicle"])) {
        $aVehiculosSeleccionados = $_POST["vehicle"];
    }
    if (isset($_POST["combo"])) {
        $aVehiculosSeleccionados = $_POST["combo"];
    }
    if (isset($_POST["cars"])) {
        $carsSelecionados = $_POST["cars"];
    }
}
if ($lerror) {
    $lprocesaFormulario = false;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .error {
            color: red
        }
    </style>
</head>

<body>
    <?php
    if (!$lprocesaFormulario) { ?> 
        <h1>Validacion Formulario PHP</h1>
        <p><span class="error">*Campos Requeridos..</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Nombre: <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error">*
                <?php echo $nameErr; ?>
            </span><br><br>
            Email: <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">*
                <?php echo $emailErr; ?>
            </span><br><br>
            Website: <input type="text" name="website" value="<?php echo $website; ?>">
            <br><br>
            Comentario: <br>
            <textarea name="comment" cols="40" rows="5"><?php echo $comment; ?></textarea> <br><br>
            Género:
            <?php
            foreach ($aGenero as $key => $value) {
                $check = "";
                if ($gender == $value) {
                    $check = "checked";
                }
                echo "<input type=\"radio\" name=\"gender\" value=\"$value\" $check>$value";
            }
            echo "<span class\"error\">* $genderErr </span> <br><br>";
            ?>
            <br>
            Transporte:
            <?php
            foreach ($aVehiculos as $valor) {
                $selected = (is_array($aVehiculosSeleccionados) && in_array($valor, $aVehiculosSeleccionados)) ? 'checked' : '';
                echo "<input type=\"checkbox\" name=\"vehicle[]\" value=\"$valor\" $selected>$valor";
            }
            ?>

            <br><br />
            Selecciona opción:
            <select name="combo">
                <?php
                foreach ($aOpciones as $valor) {
                    $selected = ($opcionSeleccionada == $valor["valor"]) ? "selected" : "";
                    echo "<option value=\"" . $valor["valor"] . "\"$selected>" . $valor["literal"] . "</option>";
                }
                ?>
            </select>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    <?php } ?>

    </form>
</body>

</html>