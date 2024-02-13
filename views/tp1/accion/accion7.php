<?php


    include_once '../../config/configuracion.php';
    $datos = data_submitted();
    verEstructura($datos);
    $obj_control = new controllersTp1();

    if (!empty($datos)){
        $resp = $obj_control ->ejercicio7($datos);
        echo $resp;
    }

?>