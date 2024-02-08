<?php
    include_once '../../../config/configuracion.php';
   
    $datoFormulario = data_submitted();
    //verEstructura($datoFormulario);
    
    $obj_control = new Tp1_controller();

    if (!empty($datoFormulario)){
        $nro = $datoFormulario['number'];
        $respuesta = $obj_control-> ejercicio1($nro);
        echo $respuesta;
    }

?>