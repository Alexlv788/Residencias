<?php

include('conexion.php');
$consulta = "SELECT * 
             FROM usuarios
             WHERE tipo_usuario = 1";
    
    $res = mysqli_query($conexion, $consulta);
   $administrador = mysqli_fetch_array($res);


foreach ($conexion->query("SELECT * FROM solicitudes") as $solicitud) {

    echo"
  
    <tr>
        <td data-label = 'Folio'>".$solicitud['folio']."</td>
        <td data-label = 'Responsable'>".$solicitud['responsable']."</td>
        <td data-label = 'Descripción'>".$solicitud['descripcion']."</td>
        <td data-label = 'Fecha de Revisión'>".$solicitud['fecha_terminacion']."</td>
        <td data-label = 'Estado'>HOLA</td>
        <td data-label = 'Fecha Programada'>".$solicitud['fecha_programada']."</td>
        <td data-label = 'Responsable de la verificación'>".$administrador['nombre']."</td>
        <td id='delete'><button class= 'delete'>Cerrar RAC</button></td>
    </tr>
    
    ";
}
?>