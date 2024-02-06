<?php


    include_once '../../../config/configuracion.php';
    $datos = data_submitted();
    //verEstructura($datos);
    echo "estoy en accion60";
    $obj_control = new controllersTp1();
    echo "estoy en accion70";
    
    if (!empty($datos)){
        echo "estoy en accion60";
        $resp = $obj_control ->ejercicio6($datos);
        echo $resp;
    }




?>