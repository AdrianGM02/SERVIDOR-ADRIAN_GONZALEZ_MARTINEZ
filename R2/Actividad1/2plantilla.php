<?php

$nombre = "Adrián";
$apellidos = "González Martínez";
$phone = "666666666";
$twitter = "https://twitter.com/home?lang=ca";
$email = "a21gomaad@iesgrancapitan.org";
$linkedin = "https://es.linkedin.com/"


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla
    </title>
</head>
<body>
    <h1>Mi nombre es <?php echo "$nombre" ?> <?php echo $apellidos ?></h1>
    <h2>Web Developer</h2>
    <ul>
        <li>El teléfono es: <?php echo "$phone" ?></li>
        <li>El email es: <?php echo "$email" ?></li>
        <li><a href="<?php echo "$twitter"?>">Twitter</a></li>
        <li><a href="<?php echo "$linkedin"?>">Linkedin</a></li>
        
    </ul>

    
</body>
</html>