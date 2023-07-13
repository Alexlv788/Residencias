<?php 
include("conexion.php");
date_default_timezone_set("America/Mexico_City");
$query = $conexion->query("SELECT a.folio, a.responsable, a.accion, a.fecha_terminacion, a.fecha_programada
FROM acciones a
INNER JOIN solicitudes s ON 
a.id_solicitud = s.id_solicitud
WHERE s.rac_activo = 1 and a.folio = '$folio'");

foreach ($query as $solicitud){
    
    $fechaActual = date("Y-m-d");
    $fechaMenor = strtotime($fechaActual);
    $fechaMayor = strtotime($solicitud['fecha_programada']);
    $dias = round(($fechaMayor - $fechaMenor)/60/60/24,0);  
    if ($dias >= 7) {
        $semaforo = '<div class = "verde"></div>';
    }
    elseif ($dias >= 0 && $dias < 7 ) {
        $semaforo ='<div class = "amarillo"></div>';
    }
    else {
        $semaforo ='<div class = "rojo"></div>';
    }
 echo"
 <form action='' method='post' id = 'form'>
 <tr>
         <td data-label = 'Folio' id = 'folio'>
             <input type='hidden' value='".$solicitud['folio']."' name='btn-folio' id = 'btnFolio'>
             ".$solicitud['folio']."
         <td data-label = 'Responsable' class = 'overflow'>".$solicitud['responsable']."</td>
         <td data-label = 'Accion' >".$solicitud['accion']."</td>
         <td data-label = 'Fecha de Revisión'>".$solicitud['fecha_terminacion']."</td>
         <td data-label = 'Estado'>".$semaforo."</td>
         <td data-label = 'Fecha Programada'>".$solicitud['fecha_programada']."</td>
         </td>
         </tr>'
         </form>";
}


?>
