<?php
if ($_POST) {
include('conexion.php');
$area = $_POST["area"];
$descripcion =$_POST["descripcion"];
$responsable = $_POST["responsable"];
$accionCorrectiva = $_POST["opc1"];
$correccion = $_POST["opc2"];
$tecnica = $_POST["tecnica"];
$causa = $_POST["causa"];
$accionesPA = $_POST["accionesPA"];
$responsablePA = $_POST["responsablePA"];
date_default_timezone_set("America/Mexico_City");
$fechaCreacion = date("Y-m-d");
echo $fechaCreacion;
include('folio.php');

$consulta = "INSERT INTO solicitudes(folio, area_solicitante, descripcion,
responsable, req_accion, req_correccion, tecnica, causa,fecha_creacion)
VALUES ( '$folio','$area', '$descripcion', '$responsable','$accionCorrectiva','$correccion',
         '$tecnica','$causa','$fechaCreacion')";
    mysqli_query($conexion, $consulta) or die("Conexion fallida".mysqli_error($conexion));; 
include('recoleccionAcciones.php');  
    mysqli_close($conexion);
header("Location:../HTML/seguimiento.php");
}?>
