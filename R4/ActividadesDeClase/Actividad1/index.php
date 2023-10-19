<?php
if (isset($_POST["crear_cookie"])) {
    $cookie_name = "Adrian";
    $valor_de_la_cookie = "Valor de la cookie";
    $duracion_de_la_cookie = 10;
    setcookie($cookie_name, $valor_de_la_cookie, time() + $duracion_de_la_cookie, "/");
    echo "Se ha creado la cookie 'Adrian' con éxito. .";
}

if (isset($_COOKIE['Adrian'])) {
    echo "La cookie 'Adrian' existe.<br>";
    echo "Su valor es: " . $_COOKIE["Adrian"] . "<br>";
} else {
    echo "La cookie 'Adrian' no existe.<br>";
}

if (isset($_POST["eliminar_cookie"])) {
    $cookie_name = "Adrian";
    setcookie($cookie_name, "", time() - 3600, "/");
    echo "Cookie 'Adrian' eliminada con éxito.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>
<form method="post">
    <input type="submit" name="crear_cookie" value="Crear Cookie">
    <input type="submit" name="eliminar_cookie" value="Eliminar Cookie">
</form>
</body>
</html>
