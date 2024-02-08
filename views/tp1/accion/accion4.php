<?php


    include_once '../../config/configuracion.php';
    $datos = data_submitted();
    $obj_control = new controllersTp1();

    if (!empty($datos)){
        $resp = $obj_control ->ejercicio4($datos);
        echo $resp;
    }




?>