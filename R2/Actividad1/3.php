<?php
define("PI", 3.14);

$radio = 3;

$area = PI * pow($radio, 2);
$longitud = 2 * PI * $radio;



echo  "El área es $area";
print("<p>");
echo "La longitud es $longitud"




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>


</pre>

<svg width="300" height="300">
        <circle cx="150" cy="150" r="<?php echo $radio; ?>" stroke="black" stroke-width="2" fill="transparent" />
</svg>

<br><br><br><br><br>
<a href="https://github.com/AdrianGM02/Servidor2DawRA2/blob/master/Actividad1/3.php">Ejercicio Al Github</a>
    
</body>
</html>
