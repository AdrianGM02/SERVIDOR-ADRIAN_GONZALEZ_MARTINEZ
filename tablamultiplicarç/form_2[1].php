<?php
/**
 * Script de la tabla de multiplicar con formulario
 *
 * @author Daniel Marín López
 * @version 0.01a
 * 
 * Enunciado:
 * Se pide una tabla de multiplicar que el usuario tendrá que completar
 * 
 * Analisis:
 * Generamos un array de números aleatorios sin repetirse
 * 
 */

function existeValor($fila, $columna, $array)
{
    foreach ($array as $key => $value) {
        if (($value['f'] == $fila) and ($value['c'] == $columna)) {
            $lexiste = true;

        }
    }
    return $lexiste;
}

define('NUMIMPUTS', 3);
define('NUMTABLAS', 10);
//$PREGUNTAS = 5;
$totalAciertos = 0;

//Cargamos valores
$valoresActuales = array();

$n_aleatorios = array();
/**
 * $n_aleatorios = array(
 *      array(3, 5),
 *      array(4, 9),
 *      ...
 * )
 */

//Array de colores
$colors = array('red', 'blue', 'green', 'yellow', 'orange', 'purple', 'coral', 'crimson', 'greenyellow', 'aquamarine');

$procesaForm = false;
$error = false;

if (isset($_POST["enviar"])) {
    $procesaForm = true;
    foreach ($_POST["num"] as $f => $v1) {
        foreach ($v1 as $c => $v2) {
            $n_aleatorios[] = array($f, $c);
            $valoresActuales[$f][$c] = $v2;
            if ($valoresActuales[$f][$c] == $f * $c) {
                $totalAciertos++;
            }
        }
    }
} else {
    //Generamos números aleatorios
    for ($i = 0; $i < NUMIMPUTS; $i++) {
        do {
            $n = array(random_int(1, NUMTABLAS), random_int(1, NUMTABLAS));
        } while (existeValor($n[0], $n[1], $n_aleatorios));
        $n_aleatorios[] = $n;
        $valoresActuales[$n[0]][$n[1]] = "";
    }
    // do {


    //     $existe = existeValor($n[0], $n[1], $n_aleatorios);

    //     // Si $n no está en $n_aleatorios, agregarlo
    //     if (!$existe) {

    //     }
    // } while (count($n_aleatorios) < $PREGUNTAS);
    // foreach ($n_aleatorios as $key => $value) {
    //     echo $value[0]."-".$value[1];
    //     echo "<br/>";
    // }
    // exit();
}

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     for ($i = 1; $i <= 10; $i++) {
//         for ($j = 1; $j <= 10; $j++) {
//             $inputName = "resultado" . $i . "-" . $j;
//             $inputValue = $_POST[$inputName] ?? '';

//             if (is_numeric($inputValue) && $inputValue == $i * $j) {
//                 $totalAciertos++;
//             } else {
//                 $error = true;
//             }
//         }
//     }

//     //Si hay error
//     if ($error) {
//         $procesaForm = false;
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
    <link rel="stylesheet" href="./css/style.css">
    </link>
</head>

<body>
    <h2>Tablas de Multiplicar del 1 al 10</h2>
    <form method="post" action="">
        <table>
            <tr>
                <th>x</th>
                <?php
                for ($i = 1; $i <= NUMTABLAS; $i++) {
                    echo "<th>" . $i . "</th>";
                }
                ?>
            </tr>
            <?php
            for ($i = 1; $i <= NUMTABLAS; $i++) {
                echo '<tr>';
                echo "<th>" . $i . "</th>";
                for ($j = 1; $j <= NUMTABLAS; $j++) {
                    if (existeValor($i, $j, $n_aleatorios)) {
                        $claseRespuesta = "";
                        $icono = "";
                        if ($procesaForm) {
                            $icono = $valoresActuales[$i][$j] == $i * $j ? ":)" : ":(";
                            $claseRespuesta = $valoresActuales[$i][$j] == $i * $j ? "acierto" : "fallo";
                        }
                        echo "<td><input class=\"" . $claseRespuesta . "\" title=\"" . $i . "x" . $j . "\" type=\"text\" name=\"num[" . $i . "][" . $j . "]\" value=\"" . $valoresActuales[$i][$j] . "\">" . $icono . "</td>";
                    } else {
                        echo '<td>' . ($i * $j) . '</td>';
                    }
                    // $cellFound = false;
                    // foreach ($n_aleatorios as $key => $value) {
                    //     if ($i == $value[0] and $j == $value[1]) {
                    //         echo "<td style=\"width: 20px; border: medium solid black; text-align: center; background-color:". $colors[$i - 1] .";\"><input style=\"width: 20px;\" type=\"text\" name=\"resultado".$value[0]."-".$value[1]."\"></td>";
                    //         $cellFound = true;
                    //         break;
                    //     } 
                    // }
                    // if (!$cellFound) {
                    //     echo '<td style="width: 10px; border: medium solid black; text-align: center; background-color:' . $colors[$i - 1] . ' ;">' . ($i * $j) . '</td>';
                    // }                            
                }
                echo '</tr>';
            }
            ?>
        </table>
        <br />
        <input type="submit" name="enviar" value="Enviar" />
    </form>
    <br />
    <?php echo "Total de aciertos: $totalAciertos"; ?>
</body>

</html>