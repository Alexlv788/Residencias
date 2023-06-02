<?php
include("conexion.php");
$query = $conexion->query("SELECT s.responsable, e.folio, e.imagenes
                             FROM evidencias e             
                             INNER JOIN solicitudes s ON 
                             e.id_solicitud = s.id_solicitud
                             WHERE e.evidencia_activa = 1
                             ");
    foreach ($query as $evidencia)  {
        $arregloImagenes = explode("*",$evidencia['imagenes']);

        echo 
        '
        <div class= "evidencias" id = "evidencias">
            <section class = "descripcion">
                <p>Folio: '.$evidencia['folio'].'</p>           
                <p>Responsable: '.$evidencia['responsable'].'</p>
            </section>
            <section class = "imagenes">';
            for ($i=0; $i < count($arregloImagenes)-1; $i++) { 
                //echo '<img src="../EVIDENCIAS/'.$arregloImagenes[$i].'" alt="">';
                echo '<a href="../EVIDENCIAS/'.$arregloImagenes[$i].'" target = "_blank">
                <img src="../EVIDENCIAS/'.$arregloImagenes[$i].'" alt="">ver imagen</a>';
            }

            echo '</section>
            <form action="" method="post" id = "form">
            <div class = "boton">
            <input type="hidden" value="'.$evidencia['folio'].'" name="btn-folio">
            <input type="submit" name = "cerrarEvi" id = "cerrarEvi" class = "cerrarEvidencias"
            value="Cerrar Evidencias"></input>
            </div>
        </div>
        </form>'
        
        
        ;}
?>