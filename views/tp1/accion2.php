<?php
    
    include_once '../../config/configuracion.php';
    $horasDeLaSemana = data_submitted();
    $obj_control = new controllersTp1();

    if (!empty($horasDeLaSemana)){
        $res = $obj_control -> ejercicio2($horasDeLaSemana);
        echo $res;
    }




?>