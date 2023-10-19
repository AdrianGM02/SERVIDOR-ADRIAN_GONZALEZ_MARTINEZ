<?php
/**
 * Función para limpiar datos de entrada
 */

 function test_input($data) {
    $data = trim($data); //quita los espacios de la cadena
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

 $name = $email = $gender = $comment = $website = "";
 $nameErr = $emailErr = $websiteErr = "";

 $aGenero = array("Hombre", "Mujer", "Otro");
 $genderErr = "";


 $aVehiculo = array("Bike", "Car", "Patineta");
$vehiculosSeleccionado = array();


$aOpciones = array(
    array("valor" => 1, "literal" => "Opcion 1"),
    array("valor" => 2, "literal" => "Opcion 2"),
    array("valor" => 3, "literal" => "Opcion 3"),
    array("valor" => 4, "literal" => "Opcion 4"),



);
$opcionSeleccionada = 1;


$cars = array ("Renault", "Mercedes", "Citroen", "Volvo");

$carsSeleccionados = array();


$lprocesoFormulario = false;
$lerror = FALSE;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lprocesoFormulario = true;
    
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $lerror = true;

    } else {
        $name = test_input($_POST['name']);

    }

    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
        $lerror = true;


    } else {
        $email = test_input(($_POST["email"]));
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Email format incorrect";
            $lerror = true;
        }
    }

    $website = test_input($_POST["website"]);

    $comment = test_input($_POST["comment"]);

    
    if (empty(($_POST["gender"]))){
        $genderErr = "Gender format incorrect";
        $lerror = true;
    } else {
        $gender = $_POST["gender"];

    }

    if (isset($_POST['vehicle'])){
        $vehiculosSeleccionado = $_POST['vehicle'];
    }

    if (isset($_POST['combo'])){
        $vehiculosSeleccionado = $_POST['combo'];
    }

    if (isset($_POST['cars'])){
        $vehiculosSeleccionado = $_POST['cars'];
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {color: #FFF0000;}
    </style>
</head>
<body>
<?php
if (!$lprocesaFormulario) { ?>
<h1>Validación formulario. PHP</h1> 
<p><span class="error">* Campos requeridos.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Nombre:<input type="text" name="name" value="<?php echo $name;?>"> 
        <span class="error">* <?php echo $nameErr;?></span><br/><br/>

email: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span><br/><br/>
URL:  <input type="text" name="website" value="<?php echo $website;?>">
    <span class="error"><?php echo $websiteErr;?></span><br/><br/>
Comentario:<br/>
        <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea><br/><br/>
Género
    <?php
        foreach ($aGenero as $clave => $valor) {
            $check ="";
            if ($gender == $valor) {$check = "checked";}
            echo "<input type=\"radio\" name=\"gender\" value = \"$valor\" $check>$valor";
        }
        echo "<span class=\"error\"<* $genderErr
        

    
</html>