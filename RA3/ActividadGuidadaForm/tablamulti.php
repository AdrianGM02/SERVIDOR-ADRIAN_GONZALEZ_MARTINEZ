<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h2>Tabla de Multiplicar con Espacios en Blanco</h2>
    <form method="post">
        <table border="1">
            <tr>
                <th>x</th>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";
                for ($j = 1; $j <= 10; $j++) {
                    $resultado = $i * $j;
                    echo "<td><input type='number' name='respuestas[$i][$j]' value=''></td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <input type="submit" value="Comprobar Respuestas">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $respuestas = $_POST['respuestas'];
        $errores = false;

        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                $resultado = $i * $j;
                if ($respuestas[$i][$j] != $resultado) {
                    $errores = true;
                    break;
                }
            }
        }

        if ($errores) {
            echo "<p>¡Algunas respuestas son incorrectas! Revísalas.</p>";
        } else {
            echo "<p>Todas las respuestas son correctas. ¡Bien hecho!</p>";
        }
    }
    ?>
</body>
</html>
