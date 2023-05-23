<?php

include('conexion.php');

// $consulta = $conexion->prepare("SELECT * FROM solicitudes");;

// $consulta->execute();
// $datos = $consulta->get_result();
// $listaSolicitudes = $datos->fetch_all();

// $consulta->close();

foreach ($conexion->query("SELECT * FROM solicitudes") as $solicitud) {

    // $sql = $conexion->prepare("SELECT folio, responsable, descripcion, fecha_terminacion, fecha_programada FROM solicitudes");

    // $sql->bind_param('s',$solicitud[0]);
    // $sql->execute();
    // $sql->bind_result($folio, $responsable, $descripcion, $fecha_terminacion, $fecha_programada);
    // $result = $sql->fetch();
    // $sql->close();
    echo"
  
    <tr>
        <td data-label = 'Folio'>".$solicitud['folio']."</td>
        <td data-label = 'Responsable'>".$solicitud['responsable']."</td>
        <td data-label = 'Descripción'>".$solicitud['descripcion']."</td>
        <td data-label = 'Fecha de Revisión'>".$solicitud['fecha_terminacion']."</td>
        <td data-label = 'Estado'>HOLA</td>
        <td data-label = 'Fecha Programada'>".$solicitud['fecha_programada']."</td>
        <td data-label = 'Responsable de la verificación'>HOLA</td>
        <td id='delete'><button>Cerrar RAC</button></td>
    </tr>
    
    ";
}
?>