<?php
include 'RA3/Actividad3/indexarEjer.php'


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrián González Martínez</title>
</head>
<body>
    <h1>Entorno Servidor</h1>

    <?php

   foreach ($directorios as $directorio => $ejercicios) {
            echo "<li><strong>$directorio</strong></li>";
            if (!empty($ejercicios)) {
                echo "<ul>";
                foreach ($ejercicios as $nombreEjercicio => $rutaEjercicio) {
                echo "<li><a href='$rutaEjercicio'>$nombreEjercicio</a></li>";
                }
                echo "</ul>";
            }
        }




    ?>

    
</body>
</html>