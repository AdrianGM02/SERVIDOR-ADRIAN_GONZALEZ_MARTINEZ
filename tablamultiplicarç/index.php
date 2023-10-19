
<?php
/**
 * Ejercicio 3: Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas.
 * @author Adrián
 * @version 1.0
 * Fecha: 10/10/2023
 */
define('NUMIMPUTS', 3);
define('NUMTABLAS', 10);

$valoresActuales = array();

$numerosAleatorios = array();

$procesaFormulario = false;
$numAciertos = 0;
$iconoRespuesta = "";
$claseRespuesta = "";

# Si le damos a enviar.
if (isset($_POST['send'])) {
    $procesaFormulario = true;
    foreach ($_POST as $f => $value1) {
        foreach ($value1 as $c => $value2) {
            $numerosAleatorios[] = array('f' => $f, 'c' => $c);
            $valoresActuales[$f][$c] = $v2;
            if ($valoresActuales[$f][$c] == $f * $c) {
                $numAciertos++;
            }
        }
    } 
} else {
    # Generamos los numeros aleatorios
    for ($i = 0; $i < NUMIMPUTS; $i++) {
        do {
            $f = mt_rand(1, NUMFILAS);
            $c = mt_rand(1, NUMFILAS);
        } while (existeCoordenada($f, $c, $numerosAleatorios));
        $numerosAleatorios[] = array('f' => $f, 'c' => $c);
        $valoresActuales[$f][$c] = '';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        tr {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            border: 1px solid black;
            padding: 8px;
        }

        td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h1> Tabla de Multiplicar</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>X</td>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>" . $i . "</th>";
                }
                echo "</tr>";
                for ($f = 1; $f <= NUMFILAS; $f++) {
                    echo ("<tr>");
                    echo ("<th>" . $f . "</th>");
                    for ($c = 0; $c < NUMFILAS; $c++) {
                        if (existeCoordenada($f, $c, $numerosAleatorios)) {
                            if ($procesaFormulario) {
                                $iconoRespuesta = $valoresActuales[$f][$c] == $f * $c ? '&#128512' : '&#128534';
                                $claseRespuesta = $valoresActuales[$f][$c] == $f * $c ? 'acierto' : 'fallo';
                            }
                            echo ("<td><input class = '$claseRespuesta' title='$f x $c' type='text' name=\"num[" . $f . "]*[" . $c . "]\" value = \"" . $valoresActuales[$f][$c] . "\"/>" . $iconoRespuesta . "</td>");
                        } else {
                            echo " <td>" . $f * $c . "</td>";
                        }
                    }
                    echo "</tr>";
                }
                ?>
        </table>

    </form>
</body>

</html>