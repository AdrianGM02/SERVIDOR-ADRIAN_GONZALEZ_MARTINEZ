<?php
    $nombre = $apellido = $genero = $idiomas = $nacionalidad = $habilidades = $resumen = $foto = $terminos = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $genero = $_POST["genero"];
        $idiomas = implode(', ', $_POST["idiomas"]);
        $nacionalidad = $_POST["nacionalidad"];
    }

?>        


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" >
    <h1>Formulario</h1>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre"><br/>
    <label for="apellidos">Apellido:</label>
    <input type="text" name="apellido"><br/>
    <label >Género</label><br/>
    <input type="radio" name="genero" value="Hombre"> Hombre
    <input type="radio" name="genero" value="Mujer"> Mujer<br/>
    <label>Idiomas:</label><br/>
    <input type="checkbox" id="idioma-ingles" name="idiomas[]" value="Inglés"> Inglés<br/>
    <input type="checkbox" id="idioma-espanol" name="idiomas[]" value="Español"> Español<br/>
    <input type="checkbox" id="idioma-frances" name="idiomas[]" value="Francés"> Francés<br/>
    <label for="nacionalidad">Nacionalidad:</label>
    <select id="nacionalidad" name="nacionalidad"><br/>
        <option value="USA">Estados Unidos</option>
        <option value="ESP">España</option>
        <option value="FRA">Francia</option>
    </select>
    <input type="submit" value="Enviar">
</form>

    
</body>
</html>