<?php
include('conexion.php');
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
    header('index.php'); 
    echo "<div style = 'background-color: #E76161;
            width: 80%;
            height: 4rem;
            margin: 15% auto 0;
            text-align: center;
            border-radius: 8px;
            padding: 2%;'>
            <p style='color: white; font-size: 1.3rem;'>Asegurese de que el correo y la contraseña sean los correctos</p>
        </div>";
       
   }
    mysqli_close($conexion);
}

?>