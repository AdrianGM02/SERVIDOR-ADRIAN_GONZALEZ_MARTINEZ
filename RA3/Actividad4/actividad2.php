  <?php
    $paises = array(
        'Estados Unidos' => array(
            'capital' => 'Washington, D.C.',
            'bandera' => 'bandera_usa.png'
        ),
        'Francia' => array(
            'capital' => 'París',
            'bandera' => 'bandera_francia.png'
        ),
        'Japón' => array(
            'capital' => 'Tokio',
            'bandera' => 'bandera_japon.png'
        )
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedCountry = $_POST["pais"];
        if (array_key_exists($selectedCountry, $paises)) {
            $capital = $paises[$selectedCountry]['capital'];
            $bandera = $paises[$selectedCountry]['bandera'];

            echo "<h2>Información de $selectedCountry</h2>";
            echo "<p>Capital: $capital</p>";
            echo "<p>Bandera: <img src='banderas/$bandera' alt='$selectedCountry'></p>";
        } else {
            echo "<p>El país seleccionado no existe en la lista.</p>";
        }
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Información de Países</title>
</head>
<body>
    <h1>Información de Países</h1>

  

    <form method="post" >
        <label for="pais">Selecciona un país:</label>
        <select name="pais" id="pais">
            <?php
            foreach ($paises as $nombre => $info) {
                echo "<option value='$nombre'>$nombre</option>";
            }
            ?>
        </select>
        <input type="submit" value="Mostrar información">
    </form>

    <br><br><br><br><br>

    <a href="https://github.com/AdrianGM02/RA3_SERVIDOR_ADRIAN_GONZALEZ_MARTINEZ/blob/main/RA3/Actividad4/actividad2.php">Ejercicio En El Github</a>
</body>
</html>
