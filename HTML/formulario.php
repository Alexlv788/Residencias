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
?>
<?php 
    date_default_timezone_set("America/Mexico_City");
    $fechaActual = date("Y-m-d");
?>

<?php 
include_once("../PHP/cambioContrasena.php");
    if ($mensajePass != "") {
        echo '
        <script>
            alert("'.$mensajePass.'");
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
        <title>Document</title>
        <link rel="stylesheet" href="../CSS/main.css?uuid=<?php echo uniqid(); ?>" type="text/css">
            <!-- *****************Fuentes************************* -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&display=swap" rel="stylesheet">
            <!-- *****************Fuentes************************* -->
    </head>
    <body>
        <header>
            <h1 class="mainText">ACCIONES CORRECTIVAS</h1> 
            <input type="checkbox" name="" id="check">
            <label for="check" class="mostrar-menu">&#8801</label>
            <nav>
                <a href="../HTML/seguimiento.php">Seguimiento del RAC</a>
                <a href="#" onclick="abrirPass()">Cambiar contraseña</a>
                <a href="../PHP/cerrarSesion.php" class="logout">cerrar sesion</a>
                <label for="check" class="ocultar-menu">&#215</label>
            </nav>
        </header>
        <a href="../FILES/CA-PO-03-01 RAC.docx" download="Guía-solicitud-mantenimiento-correctivo" target="_blank" class="descarga">Guía de llenado</a>
        <main>
            <div class = "logos">
                <img src="/SOURCES/IMG/itlp.jpg" alt="Logo ITLP">
                <img src="/SOURCES/IMG/tecNM.jpg" alt="Logo TecNM">
            </div>
            <form action="/PHP/recoleccionDatos.php" method="post">
                <div class="elemento1">
                    <h2>La no conformidad proviene de:</h2>
                    <select name="area" id="lang">
                        <option value="default" disabled="disabled" selected="selected">Seleccione Area</option>
                        <option value="queja de cliente">Queja de Cliente</option>
                        <option value="Auditoria de Servicio">Auditoria de Servicio</option>
                        <option value="Análisis de indicadores">Análisis de indicadores</option>
                        <option value="Auditoria de Calidad">Auditoria de Calidad
                        </option>
                        <option value="Plan de Control de SNC">Plan de Control de SNC</option>
                        <option value="Análisis de Riesgo">Análisis de Riesgo</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                <!-- ------------------------------------------ -->
                <div class="elemento2">
                    <h2>Solicitud:</h2>
                    <div class="solicitud">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" name="descripcion" id="descripcion" >
                        <label for="responsable">Responsable</label>
                        <input type="text" name="responsable" id="responsable" value = "<?php echo $_SESSION['departamento']; ?> ">
                    </div>
                </div>
                <!-- ------------------------------------------ -->
                <div class="elemento3">
                    <h2>Requiere acción correctiva:</h2>
                    <label for="si1">Si</label>
                    <input type="radio" name="opc1" id="si1" value="Si">
                    <label for="no1">No</label>
                    <input type="radio" name="opc1" id="no1" value="No">
                </div>
                <!-- ------------------------------------------ -->
                <div class="elemento4">
                    <h2>Requiere corrección:</h2>
                    <label for="si2">Si</label>
                    <input type="radio" name="opc2" id="si2" value="Si">
                    <label for="no2">No</label>
                    <input type="radio" name="opc2" id="no2" value="No">
                </div>
                
                <!-- ------------------------------------------ -->
                <div class="elemento5">
                    <h2>Analisis de datos:</h2>
                    <div class="analisis">
                        <label for="tecnica">Tecnica</label>
                        <input type="text" name="tecnica" id="tecnica">
                        <label for="causa">Causa</label>
                        <input type="text" name="causa" id="causa">
                    </div>
                </div>
                <!-- ------------------------------------------ -->
                <div class="elemento6">
                    <h2>Plan de acciones:</h2>
                    <div class="tablaPA">
                        <label for="acciones">ACCIONES</label>
                        <input type="text" name="accionesPA" id="acciones">
                    </div>
                    <div class="tablaPA">
                        <label for="responsable">RESPONSANLE</label>
                        <input type="text" name="responsablePA" id="responsable" 
                        value = "<?php echo $_SESSION['departamento']; ?> ">
                    </div>
                    <div class="tablaPA">
                        <label for="fechaProgramada">FECHA PROGRAMADA</label>
                        <input type="date" name="fechaProgramadaPA" id="fechaProgramada" 
                        value = "<?php echo $fechaActual ?>">
                    </div>
                    <div class="tablaPA">
                        <label for="fechaTerminacion">FECHA DE TERMINACION</label>
                        <input type="date" name="fechaTerminacionPA" id="fechaTerminacion">
                    </div>

                </div>
                <div class="boton">
                    <input type="submit" value="Enviar">
                </div>

                <div class="footer">
                        <p class ="izq">CA-PO-03-01</p>
                        <p class ="der">Rev. 2</p>
                </div>
            </form>
            
        </main>

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
    </body>
</html>