<?php 
include("conexion.php");
$btnCambiarContra = isset($_POST['sendPass']) ? $_POST['sendPass']:'';
$pass1 = isset($_POST['pass1']) ? $_POST['pass1']: '' ;
$pass2 = isset($_POST['pass2']) ? $_POST['pass2']: '' ;
$mensajePass = "";
if($btnCambiarContra != ''){
    if ($pass1 != $pass2) {
        $mensajePass = "Las contraseñas no cionciden";
    }
    else {

        $consulta = "UPDATE `racbd`.`usuarios` 
             SET `contraseña` = '".$pass1."' 
             WHERE (`id_usuario` = '".$_SESSION['id_usuario']."')";

            //  UPDATE `racbd`.`usuarios` SET `contraseña` = 'alex2'
            //   WHERE (`id_usuario` = '23');

    mysqli_query($conexion, $consulta) or die("Conexion fallida".mysqli_error($conexion));;   
    mysqli_close($conexion);

    $mensajePass = "Cambio exitoso";
    }
}
?>