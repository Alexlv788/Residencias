<?php

include('conexion.php');
$consulta = "SELECT * 
             FROM usuarios
             WHERE tipo_usuario = 1";
    
    $res = mysqli_query($conexion, $consulta);
   $administrador = mysqli_fetch_array($res);
   date_default_timezone_set("America/Mexico_City");
   $query = $conexion->query("SELECT folio, responsable, descripcion 
   FROM solicitudes
   WHERE rac_activo = 1");
   
foreach ($query as $solicitud){
    
    echo"
    <form action='' method='post' id = 'form'>
    <tr>
            <td data-label = 'Folio' id = 'folio'>
                <input type='hidden' value='".$solicitud['folio']."' name='btn-folio' id = 'btnFolio'>
                ".$solicitud['folio']."
            <td data-label = 'Responsable' class = 'overflow'>".$solicitud['responsable']."</td>
            <td data-label = 'Descripción' class = 'overflow'>".$solicitud['descripcion']."</td>
            <td data-label = 'Acciones'><input type='submit' name ='btnMostrarAcciones' id='btnMostrarAcciones' 
            value='Ver Acciones'></input></td>
            <td data-label = 'Responsable de la verificación'>".$administrador['nombre']."</td>
            <td id='evidencia'>
            <input type='submit' name ='btnMandarEvidencia' id='mandarEvidencia' 
            value='Mandar evidencias'></input>
            </td>
            </tr>'
            </form>";
}
?>