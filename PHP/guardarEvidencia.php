<?php
include("conexion.php");
$query = "SELECT * 
          FROM solicitudes
          WHERE folio = '$folio'";
$res = mysqli_query($conexion, $query) or die("Conexion fallida".mysqli_error($conexion));; 

$id_solicitud = mysqli_fetch_array($res);

$consulta = "INSERT INTO evidencias(folio, imagenes, id_solicitud)
VALUES ( '$folio','$imagenes', '$id_solicitud[0]')";
    
    mysqli_query($conexion, $consulta) or die("Conexion fallida".mysqli_error($conexion));;   
    mysqli_close($conexion);
?>