<?php

include('conexion.php');


foreach ($conexion->query("SELECT * FROM solicitudes") as $solicitud) {

    echo"
  
    <tr>
        <td data-label = 'Folio'>".$solicitud['folio']."</td>
        <td data-label = 'Responsable'>".$solicitud['responsable']."</td>
        <td data-label = 'Descripción'>".$solicitud['descripcion']."</td>
        <td data-label = 'Fecha de Revisión'>".$solicitud['fecha_terminacion']."</td>
        <td data-label = 'Estado'>HOLA</td>
        <td data-label = 'Fecha Programada'>".$solicitud['fecha_programada']."</td>
        <td data-label = 'Responsable de la verificación'>HOLA</td>
        <td id='evidencia'>
            <button id='mandarEvidencia' onclick = 'abrirVentana()'>Mandar evidencias</button>
        </td>
    </tr>'
    
    ";
}
?>