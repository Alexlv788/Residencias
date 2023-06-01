<?php
include("conexion.php");
$query = $conexion->query("SELECT s.responsable, e.folio, e.imagenes
                             FROM evidencias e
                             INNER JOIN solicitudes s ON 
                             e.id_solicitud = s.id_solicitud;");
    foreach ($query as $evidencia)  {
        $arregloImagenes = explode("*",$evidencia['imagenes']);
        echo '
        <div class= "evidencias" id = "evidencias">
            <section class = "descripcion">
                <p>Folio: '.$evidencia['folio'].'</p>
                <p>Responsable: '.$evidencia['responsable'].'</p>
            </section>
            <section class = "imagenes">';
            for ($i=0; $i < count($arregloImagenes)-1; $i++) { 
                //echo '<img src="../EVIDENCIAS/'.$arregloImagenes[$i].'" alt="">';
                echo '<a href="../EVIDENCIAS/'.$arregloImagenes[$i].'" target = "_blank"><img src="../EVIDENCIAS/'.$arregloImagenes[$i].'" alt="">ver imagen</a>';
            }
            echo '<br>';
            echo '</section>
        </div>';

        // for ($i=0; $i < count($arregloImagenes)-1; $i++) { 
        //     echo '<br>'.$arregloImagenes[$i];
        // }
        // echo '<br>';
    }

?>