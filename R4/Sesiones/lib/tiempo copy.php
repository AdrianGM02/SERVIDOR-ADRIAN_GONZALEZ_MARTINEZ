<?php
session_start();

if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 0;

}

$_SESSION["count"]++;
$_SESSION["tiempo_transcurrido"] = 15;

if (isset($_SESSION["inicio_time"])) {
    $tiempo_transcurrido = time();
    $tiempo_maximo = $_SESSION["inicio_time"] + $_SESSION["tiempo_transcurrido"];

    if ($tiempo_transcurrido > $tiempo_maximo) {
        header("Location: salir.php");

    } else {
        $_SESSION["inicio_time"] = time();
    }
}

$_SESSION["inicio_time"] = time();


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="SrPola">
    <title>Ejemplo 1 sesiones</title>
</head>

<body>
    <h1>Contador</h1>
    <p>
        <?php echo $_SESSION["count"] ?>
    </p>
</body>

</html>