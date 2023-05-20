        <?php
        session_start();
        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="/CSS/main.css">
    </head>
    <body>
        <header>
            <h1 class="mainText">ACCIONES CORRECTIVAS</h1>
            <!-- <input type="button" value="Descargar guia" class="descarga"> -->
            <input type="checkbox" name="" id="check">
            <label for="check" class="mostrar-menu">&#8801</label>
            <nav>
                <a href="#">Informacion Personal</a>
                <a href="#">No conformidad</a>
                <a href="/PHP/cerrarSesion.php" class="logout">cerrar sesion</a>
                <label for="check" class="ocultar-menu">&#215</label>
            </nav>
        </header>

        <main>
            <form action="/PHP/recoleccionDatos.php" method="post">
                <div class="elemento1">
                    <h2>Area solicitante</h2>
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
                    <div>
                        
                    </div>
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
                        <input type="text" name="responsablePA" id="responsable" value = "<?php echo $_SESSION['departamento']; ?> ">
                    </div>
                    <div class="tablaPA">
                        <label for="fechaProgramada">FECHA PROGRAMADA</label>
                        <input type="date" name="fechaProgramadaPA" id="fechaProgramada">
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
                        <p>CA-PO-03-01</p>
                        <p>Rev. 2</p>
                </div>
            </form>
            
        </main>
        
    </body>
</html>