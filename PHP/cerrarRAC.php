<?php
include("conexion.php");

$consulta = "UPDATE `racbd`.`solicitudes` 
             SET `rac_activo` = '0' 
             WHERE (`folio` = '".$folio."');
";
    mysqli_query($conexion, $consulta) or die("Conexion fallida".mysqli_error($conexion));;   
    mysqli_close($conexion);

?>