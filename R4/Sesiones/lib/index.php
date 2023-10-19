<?php
/**
 * @author Adrian <email>
 */
// Iniciamos sesion
session_start();



if (!isset($_SESSION)) {
    $_SESSION['count'] = 0;



}


$_SESSION['count']++;

$contador = $_SESSION['count'];







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista</title>
</head>
<body>
 <?php
 
 echo $contador
 
 ?>
    
</body>
</html>