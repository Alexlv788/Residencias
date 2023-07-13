<?php
$arregloAcciones = $_POST['accionesPA']; 
$arregloResponsable = $_POST['responsablePA']; 
$arregloFechaPro = $_POST['fechaProgramadaPA']; 
$arregloFechaTer = $_POST['fechaTerminacionPA']; 

for ($i=0; $i < count($arregloAcciones); $i++) { 
    $queryAutoIncrement = "SELECT * 
    FROM solicitudes
    WHERE folio = '$folio'";
    $resAI = mysqli_query($conexion, $queryAutoIncrement) or die("Conexion fallida".mysqli_error($conexion));;   
    $autoIncrement = mysqli_fetch_array($resAI);

    $consulta = "INSERT INTO acciones(folio, accion, responsable,
    fecha_programada,fecha_terminacion,id_solicitud)
    VALUES ( '$folio','$arregloAcciones[$i]', '$arregloResponsable[$i]','$arregloFechaPro[$i]',
    '$arregloFechaTer[$i]','$autoIncrement[0]')";
    mysqli_query($conexion, $consulta) or die("Conexion fallida".mysqli_error($conexion));;   
}

?>