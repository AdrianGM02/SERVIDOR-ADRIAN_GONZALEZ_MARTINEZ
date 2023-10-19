<?php
// Obtener el mes y el año actuales o definir valores personalizados
$mesActual = date('n'); // Mes actual (1-12)
$anoActual = date('Y'); // Año actual

// Definir festivos (puedes personalizar esto según tus necesidades)
$festivos = array(
    1 => array(1),    // Año Nuevo
    12 => array(25),  // Navidad
);

// Obtener el número de días en el mes y el día de la semana en que comienza el mes
$diasEnMes = date('t', strtotime("$anoActual-$mesActual-01"));
$diaInicioMes = date('w', strtotime("$anoActual-$mesActual-01"));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calendario Mensual</title>
    <style>

    </style>
</head>
<body>
    <h1>Calendario de <?php echo date("F", strtotime("$anoActual-$mesActual-01")); ?> <?php echo $anoActual; ?></h1>
    <table border="1">
        <tr>
            <th>Domingo</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sábado</th>
        </tr>
        <tr>
            <?php
            $dia = 1;
            for ($i=0; $i < $diaInicioMes; $i++) {
                echo "<td></td>";

            }
            while ($dia <= $diasEnMes){
                if ($diaInicioMes == 7){
                    echo "</tr><tr>";
                    $diaInicioMes = 0;
                }
                
                echo "<td>$dia</td>";
                $dia++;
                $diaInicioMes++;

            }            
            ?>
        </tr>
    </table>

    <br><br><br><br><br>

    <a href="https://github.com/AdrianGM02/RA3_SERVIDOR_ADRIAN_GONZALEZ_MARTINEZ/blob/main/RA3/Actividad2/calendario.php">Ejercicio En el Github</a>
</body>
</html>
