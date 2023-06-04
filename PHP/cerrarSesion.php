<?php
session_start();
#Se recupera la sesion
#se detiene y destruye 
session_unset();
session_destroy();
// Lo regresa al meno de Login
header("Location:../index.php");

?>