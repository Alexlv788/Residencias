<?php
/*Validacion de datos del servidor */
$user = "root";
$pass = "123456";
$host = "localhost";
$bd = "racbd";

    //crear conexion
$conexion = mysqli_connect($host,$user,$pass,$bd)or die(mysql_error($mysqli));

//comprobar conexion
if (!$conexion) {
    die("Conexion fallida".mysqli_connect_error());
}

?>