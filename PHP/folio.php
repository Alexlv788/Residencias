<?php

// Esta funcion lo que hace es obtener el folio que esta antes del "-" (guion) 
function before($thiss, $inthat)
{ 
    return substr($inthat, 0, strpos($inthat, $thiss));
};

//Obtenemos el año que se eligio en el campo de fecha elaboración
$year = substr($fechaCreacion,0,4);


//Consulta para ver si hay por lo menos un dato en la BD
$fecha = "SELECT max(fecha_creacion) FROM solicitudes WHERE YEAR(fecha_creacion) = '$year'";

$Ufecha =  mysqli_query($conexion, $fecha) or die("Conexion fallida".mysqli_error($conexion));

// obtenemos la fecha que se va a registra
$date = mysqli_fetch_array($Ufecha);
$guardarAnio = substr($date[0],0,4);

//Consulta para obtener el ultimo folio
$obtenerUltimoFolio = "SELECT folio FROM solicitudes WHERE YEAR(fecha_creacion) = '$year' ORDER BY id_solicitud DESC LIMIT 1";

$UFolio = mysqli_query($conexion, $obtenerUltimoFolio) or die("Conexion fallida".mysqli_error($conexion));

//Obtenemos el ultimo folio 
$fol = mysqli_fetch_array($UFolio);
// Para convertirlo a String y no un arreglo
$fol1 = substr($fol[0],0);


if($guardarAnio == ""){
    $guardarAnioElabo = substr($fechaCreacion,2,2);

    $folio = "1-".$guardarAnioElabo;
}else{
    // Obtener los ultimos 2 digitos del año
    $guardarAnioElabo = substr($guardarAnio,2,2);

    // obtener el primer numero del ultimo folio e incrementarle +1
    $guardarFolioSig = before('-', $fol1) + 1;
    

    $folio = $guardarFolioSig.'-'.$guardarAnioElabo;
}
?>