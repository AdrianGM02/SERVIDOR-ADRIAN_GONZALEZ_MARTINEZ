<?php
session_start();



session_destroy()



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Nombre</h1>
    <h2>
        <?php
        
        echo $_SESSION['nombre'];
        
        ?>
    </h2>
    
    
</body>
</html>