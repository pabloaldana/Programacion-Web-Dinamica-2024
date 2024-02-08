<?php


    include_once '../../../config/configuracion.php';
    $datos = data_submitted();
    verEstructura($datos);

    $obj_control = new tp1_controller();

    if (!empty($datos)){
        $resp = $obj_control ->ejercicio6($datos);
        echo $resp;
    }




?>