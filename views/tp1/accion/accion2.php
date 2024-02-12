<?php
    include_once '../../../config/configuracion.php';

    $horasDeLaSemana = data_submitted();
    //verEstructura($horasDeLaSemana);
    $obj_control = new Tp1_controller();

    if (!empty($horasDeLaSemana)){
        $res = $obj_control -> ejercicio2($horasDeLaSemana);
        echo $res;
    }
?>