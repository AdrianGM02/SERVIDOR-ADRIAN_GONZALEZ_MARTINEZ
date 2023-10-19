<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nombre = $passw = ""; // Cambié $contraseña a $passw para que coincida con el nombre en el formulario

if (isset($_COOKIE["user"])) {
    $nombre = $_COOKIE["user"];
    $passw = $_COOKIE["password"]; // Cambié $contraseña a $passw para que coincida con el nombre en las cookies
}

if (isset($_POST["submit"])) {
    if (isset($_POST["recordar"])) { // Cambié a isset para verificar si se marcó el checkbox "recordar"
        setcookie("user", $_POST["nombre"], time() + 3600);
        setcookie("password", $_POST["passw"], time() + 3600); // Cambié a "passw" para coincidir con el nombre en el formulario
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Cookies</title>
</head>
<body>
    <form method="post">
        <label for="nombre">Nombre:
            <input type="text" name="nombre" value="<?php echo $nombre; ?>">
        </label>
        <br/>
        <label for="contraseña">
            Contraseña: <!-- Cambié "contraseña" a "Contraseña" para que coincida con el nombre en el formulario -->
            <input type="text" name="passw" value="<?php echo $passw; ?>">
        </label>
        <br/>
        <label for="recordar">Recordar
            <input type="checkbox" name="recordar">
        </label>
        <br/>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>
