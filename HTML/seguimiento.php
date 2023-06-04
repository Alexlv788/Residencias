<?php

session_start();
#Se valida si la variable de sesion ha sido establecida
#si no lo fue se termina la sesion iniciada y se muestra el mensaje
#para indicar que no hay acceso
if(!isset($_SESSION['departamento'])){
    session_unset();
    session_destroy();
// Y nuevamente lo regresamos al login directamente
    header("Location:../index.php");
    exit();
}

$btnMandarEvicencias = isset($_POST['btnMandarEvidencia']) ? $_POST['btnMandarEvidencia']:'';
$folio = isset($_POST['btn-folio']) ? $_POST['btn-folio']: '' ;
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje']: '' ;
if($btnMandarEvicencias != ''){
    echo'
    <div class="ventana" id="ventana">
    <div>
        <button class ="cerrar" id="cerrar" onclick="cerrarVentana()" >
        <i class="fa-solid fa-x" style="color: #f50511;"></i></button>
        <form action="../PHP/obtenerEvidencias.php" method="post" class="formFile" 
        enctype="multipart/form-data">
            <h3>Ingresa las evidencias</h3>
            <label for="files">Adjunta los archivos</label>
            <input type="file" id="files" name="evidencias[]" multiple = "" >
            <input name = "mandar" type="submit" value="Enviar Archivos" >
            <input name ="folio" type="hidden" value="'.$folio.'" >
        </form>
        </div>    
    </div>    
    ';
}else if($mensaje != ''){
    echo '
    <script>
        alert("'.$mensaje.'");
    </script>
    ';  
}


?>
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/seguimiento.css?uuid=<?php echo uniqid(); ?>">
    <!-- *****************Fuentes************************* -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&display=swap" rel="stylesheet">
    <!-- *****************Fuentes************************* -->
    <script src="https://kit.fontawesome.com/2fabd7a9b2.js" crossorigin="anonymous"></script>
    

    <title>Document</title>
</head>
<body>
    <header>
        <h1 class="mainText">SEGUIMIENTO DEL RAC</h1>
        <input type="checkbox" name="" id="check">
        <label for="check" class="mostrar-menu">&#8801</label>
        <nav> 
            <a href="../HTML/formulario.php">Solicitud del RAC</a>
            <a href="#" onclick="abrirPass()">Cambiar contraseña</a>
            <a href="../PHP/cerrarSesion.php" class="logout">cerrar sesion</a>
            <label for="check" class="ocultar-menu">&#215</label>
        </nav>
    </header>

   

    <main>
        <div class = "logos">
            <img src="/SOURCES/IMG/itlp.jpg" alt="Logo ITLP">
            <img src="/SOURCES/IMG/tecNM.jpg" alt="Logo TecNM">
        </div>
        <table>
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Responsable</th>
                    <th>Descripcion</th>
                    <th>Fecha de Revision</th>
                    <th>Estado</th>
                    <th>Fecha Programada</th>
                    <th>Responsable de la verificacion</th>
                </tr>
            </thead>
            <tbody>
                    <?php include("../PHP/obtenerSolicitudes.php");  ?>
            </tbody>
            
        </table>
        <div class="footer">
            <p>CA-PO-03-02</p>
            <p>Rev. 2</p>
        </div>
    </main>
    <div class = "contenedorCambioContra" id = "contenedorCambioContra">
        <button class = "cerrarPass" onclick="cerrarPass()">X</button>
            <form action="" class = "cambioPass" method = "post">
                <label for="pass1">Nueva contraseña:</label>
                <input type="password" name="pass1" id="pass1">
                <label for="passControl" class="show-icon" id="hide">
                        <img src="/SOURCES/icons/icons8-hide-16.png" alt="" class = "icono"></label>
                    <label for="passControl" class="hide-icon" id="show">
                        <img src="/SOURCES/icons/icons8-eye-16.png" alt="" class = "icono"></label>
                    <input type="checkbox" name="" id="passControl">
                <label for="pass2">Repita la nueva contraseña:</label>
                <input type="password" name="pass2" id="pass2">
                <label for="passControl2" class="show-icon2" id="hide2">
                        <img src="/SOURCES/icons/icons8-hide-16.png" alt="" class = "icono"></label>
                    <label for="passControl2" class="hide-icon2" id="show2">
                        <img src="/SOURCES/icons/icons8-eye-16.png" alt="" class = "icono"></label>
                    <input type="checkbox" name="" id="passControl2">
                <input type="submit" value="Cambiar Contraseña" name= "sendPass">
            </form>
        </div>
        <script src="../JS/ventanaPass.js?uuid=<?php echo uniqid(); ?>"></script>
        <script src="../JS/cambioPass.js?uuid=<?php echo uniqid(); ?>"></script>
    <script src="../JS/mostraVentana.js?uuid=<?php echo uniqid(); ?>"></script>
</body>
</html>