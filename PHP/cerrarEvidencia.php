<?php
include("conexion.php");

$consulta = "UPDATE `racbd`.`evidencias` 
             SET `evidencia_activa` = '0' 
             WHERE (`folio` = '".$folio."');
";
    mysqli_query($conexion, $consulta) or die("Conexion fallida".mysqli_error($conexion));;   
    mysqli_close($conexion);

?>