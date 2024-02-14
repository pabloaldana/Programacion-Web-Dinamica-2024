<?php

    include_once '../../../config/configuracion.php';
     
    $obj_tp3 = new Tp3_controller();
    $dir = __DIR__.'/../cargas/';
    
    if($_FILES['miArchivo']['error'] <= 0){
       
        $nombre = $_FILES["miArchivo"]["name"];
        $tamanio = $_FILES["miArchivo"]["size"];
        $rutaTemporal = $_FILES["miArchivo"]["tmp_name"];

        $respuesta = $obj_tp3->cargaArchivo($nombre,$tamanio,$rutaTemporal);
        echo $respuesta;
    }
    

?>

