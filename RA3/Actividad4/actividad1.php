


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $sexo = $_POST["sexo"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $nivel_experiencia = $_POST["nivel_experiencia"];
    $habilidades = $_POST["habilidades"];

}
?>




<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Currículum</title>
</head>
<body>
    <h1>Formulario de Currículum</h1>

    <form action="procesar.php" method="post">
        <h2>Información Personal</h2>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" ><br><br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" ><br><br>
        <label>Sexo:</label>
        <input type="radio" name="sexo" value="Masculino" required> Masculino
        <input type="radio" name="sexo" value="Femenino" required> Femenino
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required><br><br>
        <label for="nivel_experiencia">Nivel de Experiencia:</label>
        <select name="nivel_experiencia">
            <option value="Principiante">Principiante</option>
            <option value="Intermedio">Intermedio</option>
            <option value="Experto">Experto</option>
        </select><br><br>
        <label for="habilidades">Habilidades:</label>
        <select name="habilidades[]" multiple>
            <option value="Programación">Programación</option>
            <option value="Diseño gráfico">Diseño gráfico</option>
            <option value="Gestión de proyectos">Gestión de proyectos</option>
        </select><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">
    </form>
    <br><br><br><br><br>

    <a href="https://github.com/AdrianGM02/RA3_SERVIDOR_ADRIAN_GONZALEZ_MARTINEZ/blob/main/RA3/Actividad4/actividad1.php">Ejercicio En El Github</a>
</body>
</html>
