<?php 
    session_start();
    if (!isset($_SESSION["count"])) {
        $_SESSION["count"] = 0;
    }
    
    $_SESSION["count"]++;
    $_SESSION["intervaloTime"] =5;

    if(isset($_SESSION['inicioTime'])) {
        $tiempo_transcurrido = time();
        /*se multiplica por 60 segundos ya que se configura en minutos*/
        $tiempo_maximo = $_SESSION['inicioTime'] +  ($_SESSION['intervaloTime']) ;
        
        if($tiempo_transcurrido > $tiempo_maximo){
            header("Location: salir.php");
        }
        else {
            /*se resetea el inicio*/
            $_SESSION['inicioTime'] = time();
        }
    } else {
        $_SESSION['inicioTime'] = time();
    }

    /*Si no existe se crea o si lo prefiere destruya la sesión*/
    
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="SrPola">
        <title>Ejemplo 1 sesiones</title>
    </head>
    <body>
        <h1>Contador</h1>
        <p><?php echo $_SESSION["count"]?></p>
    </body>
</html>