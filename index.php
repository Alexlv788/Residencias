<?php
include('./PHP/conexion.php');
if ($_POST) {
    $pass = $_POST["pass"];
    $correo = $_POST["correo"];
    $consulta = "SELECT * FROM usuarios
                 WHERE correo = '$correo'
                 AND contraseña = '$pass'";
    
   $res = mysqli_query($conexion, $consulta);
   $datos = mysqli_fetch_array($res);
   if ($datos!=null) {
    /*Iniciamos la sesion */
    session_start();
    /*Declaramos variables de Sesion que almacenen el departamento del usuario*/
    $_SESSION['departamento'] = $datos['departamento'];
    // echo $_SESSION['departamento'];
    /*Direccionamos al usuario al formulario del RAC */
    header("Location:/HTML/formulario.php");   
   }
   else{
    $mensaje = "Asegurese de que el correo y la contraseña sean los correctos";
   }
    mysqli_close($conexion);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/login.css" type="text/css">
        <title>Document</title>
    </head>
    <body>
        <div class="main">
            <div class="itlp-image">
                <img src="/SOURCES/IMG/itlp.jpg" alt="" width = "250px">
            </div>
            <form action="" method="post" >
                <div class="datos">
                    <label for="email">Correo</label>
                    <input type="email" name="correo" id="email" required>
                </div>
                <div class="datos" id="passContainer">
                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass" id="pass" required>
                    <label for="passControl" class="show-icon" id="hide"><img src="/SOURCES/icons/icons8-hide-16.png" alt=""></label>
                    <label for="passControl" class="hide-icon" id="show"><img src="/SOURCES/icons/icons8-eye-16.png" alt=""></label>
                    <input type="checkbox" name="" id="passControl">
                </div>

                <input type="submit" value="Iniciar Sesion">

                <?php
                //Comprobamos si la variable mensaje no esta vacia 
                //y pintamos la alerta si es que se cumple la condicion
                if (isset($mensaje)) {
                ?>
                <div class = "alerta">
                    <p><?php echo $mensaje ?></p>
                </div>

                <?php
                }
                ?>   
            </form>
        </div>
        <script src="/JS/login.js"></script>
        <?php
            
        ?>
    </body>
</html>