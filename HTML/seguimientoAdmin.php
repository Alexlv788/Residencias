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

$btnCerrar = isset($_POST['cerrarRAC']) ? $_POST['cerrarRAC']:'';
$folio = isset($_POST['btn-folio']) ? $_POST['btn-folio']: '' ;
if ($btnCerrar != '') {
    echo $folio;
    include_once("../PHP/cerrarRAC.php");
}

$btnCerrarEvidencias = isset($_POST['cerrarEvi']) ? $_POST['cerrarEvi']:'';
$folio = isset($_POST['btn-folio']) ? $_POST['btn-folio']: '' ;
if($btnCerrarEvidencias != ''){
   include_once("../PHP/cerrarEvidencia.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/seguimientoAdmin.css?uuid=<?php echo uniqid(); ?>">
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
            <a href="#" onclick="abrirAlerta()">Evidencias</a>
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
                    <?php include("../PHP/obtenerSolicitudesAdmin.php");  ?>
            </tbody>

        </table>
        <div class="footer">
            <p>CA-PO-03-02</p>
            <p>Rev. 2</p>
        </div>
    </main>
    <div class= "contenedorAlertas" id = "contenedorAlertas">
        <button class = "cerrar" onclick="cerrarAlerta()">X</button>
        <?php 
            include_once("../PHP/mostrarEvidencias.php");
        ?>
    </div> 
    <div class = "contenedorCambioContra" id = "contenedorCambioContra">
        <button class = "cerrar" onclick="cerrarPass()">X</button>
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
        <script src="../JS/ventanaPass.js"></script>
        <script src="../JS/cambioPass.js"></script>
    
    <script src="../JS/alertas.js"></script>
</body>
</html>