<?php


include 'config/config.php';

$nombre = $datos["nombre"];
$apellidos = $datos['apellidos'];
$phone = $datos['telefono'];
$twitter = $datos['redesociales']['Twitter'];
$email = $datos['email'];
$linkedin = $datos['redesociales']['linkedin'];
$resumen = $datos['resumen'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla
    </title>
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
    <h1>Mi nombre es <?php echo "$nombre" ?> <?php echo $apellidos ?></h1>
    <h2>Web Developer</h2>
    <ul>
        <li>El teléfono es: <?php echo "$phone" ?></li>
        <li>El email es: <?php echo "$email" ?></li>
        <li><a href="<?php echo "$twitter"?>">Twitter</a></li>
        <li><a href="<?php echo "$linkedin"?>">Linkedin</a></li>
        <li><a href="../index.php">EJERCICIOS DEL CURSO ENTORNO SERVIDOR</a></li>
                
    </ul>

    
</body>
</html>