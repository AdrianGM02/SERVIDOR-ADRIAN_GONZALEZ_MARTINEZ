<?php
/**
 * @author Adrian <email>
 */
// Iniciamos sesion
session_start();


unset($_SESSION);

session_destroy();

header("Location: index.php");


?>