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
$fechaProgramada = $_POST["fechaProgramadaPA"];
$fechaTerminacion = $_POST["fechaTerminacionPA"];

//echo $area. $descripcion. $responsable. $accionCorrectiva. $correccion. $tecnica. $causa. $accionesPA. $responsablePA. $fechaProgramada. $fechaTerminacion;


include('folio.php');

$consulta = "INSERT INTO solicitudes(folio, area_solicitante, descripcion,
responsable, req_accion, req_correccion, tecnica, causa, fecha_programada,
fecha_terminacion)
VALUES ( '$folio','$area', '$descripcion', 
'$responsable','$accionCorrectiva','$correccion','$tecnica','$causa','$fechaProgramada','$fechaTerminacion')";
    
    mysqli_query($conexion, $consulta) or die("Conexion fallida".mysqli_error($conexion));;   
    mysqli_close($conexion);

header("Location:../HTML/seguimiento.php");
}

?>
