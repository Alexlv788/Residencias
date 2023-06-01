<?php

include('conexion.php');
$consulta = "SELECT * 
             FROM usuarios
             WHERE tipo_usuario = 1";
    
    $res = mysqli_query($conexion, $consulta);
   $administrador = mysqli_fetch_array($res);


foreach ($conexion->query("SELECT * FROM solicitudes WHERE rac_activo = 1") as $solicitud) {
    $fechaMenor = strtotime($solicitud['fecha_terminacion']);
    $fechaMayor = strtotime($solicitud['fecha_programada']);
    $dias = ($fechaMayor - $fechaMenor)/60/60/24;
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
            <td data-label = 'Descripción' class = 'overflow'>".$solicitud['descripcion']."</td>
            <td data-label = 'Fecha de Revisión'>".$solicitud['fecha_terminacion']."</td>
            <td data-label = 'Estado'>".$semaforo."</td>
            <td data-label = 'Fecha Programada'>".$solicitud['fecha_programada']."</td>
            <td data-label = 'Responsable de la verificación'>".$administrador['nombre']."</td>
            <td id='delete'>
            <input type='submit' name ='cerrarRAC' id='cerrarRAC' value='Cerrar RAC'></input>
            </td>
            </tr>'
            </form>
            ";
    }
?>