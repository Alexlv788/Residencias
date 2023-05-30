<?php

foreach ($_FILES['evidencias']['tmp_name'] as $evidencia => $tmp_name) {

    if ($_FILES['evidencias']['name'][$evidencia]) {
  
        $mensaje = null;
        /*Obtenemos el nombre de los arcivos*/
        $nombreArchivos = $_FILES['evidencias']['name'][$evidencia];
        /*Obtenemos el nombre temporal del archivo */
        $tmp_name = $_FILES['evidencias']['tmp_name'][$evidencia];
        /*Capturamos el error en caso de que exista*/
        $error = $_FILES['evidencias']['error'][$evidencia];
        /*Obtemenos el tipo del archivo*/
        $tipoArchivo = $_FILES['evidencias']['type'][$evidencia];

        if ($error) {
            $mensaje = "Lo siento, ocurrio un error al mandar las imagenes, 
            intentelo de nuevo";
        }
        else { 
            $carpeta = '../EVIDENCIAS/';            
            //Si la carpeta no existe, la creamos
            if (!file_exists($carpeta)) {
                mkdir($ruta, 0777, true);
            } 
            
            $dir = opendir($carpeta);
            $ruta = $carpeta. '/'. $nombreArchivos;
            
            //movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
            if (move_uploaded_file($tmp_name, $ruta)) {
                echo "El archivo " . $nombreArchivos. " ha sido cargado con éxito.";
            } else {
                echo "Ha habido un error al cargar tu archivo.";
            }
            closedir($dir);
        }
    }

}

?>