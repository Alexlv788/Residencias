<?php 
include("conexion.php");
$btnCambiarCodigo = isset($_POST['chageNewCode']) ? $_POST['chageNewCode']:'';
$documento = isset($_POST['documento']) ? $_POST['documento']: '' ;
$newCode = isset($_POST['newCodigo']) ? $_POST['newCodigo']: '' ;

echo $documento;
echo $newCode;
header();
$mensaje = "";
        $consulta = "UPDATE `racbd`.`codigos` 
             SET `codigo` = '".$newCode."' 
             WHERE (`nombre_documento` = '".$documento."')";

            //  UPDATE `racbd`.`usuarios` SET `contraseña` = 'alex2'
            //   WHERE (`id_usuario` = '23');

    mysqli_query($conexion, $consulta) or die("Conexion fallida".mysqli_error($conexion));;   
    mysqli_close($conexion);

    $mensaje = "Cambio exitoso";
    echo '
    <script>
        alert("'.$mensaje.'");
    </script>
    ';
    header("Location:../HTML/seguimientoAdmin.php");
?>