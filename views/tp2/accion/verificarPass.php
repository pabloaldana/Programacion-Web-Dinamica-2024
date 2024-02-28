<?php


include_once '../../../config/configuracion.php';
$datos = data_submitted();
//verEstructura($datos);

$obj_control = new Tp2_controller();

if (!empty($datos)) {
    $nombreUsuario = $datos['usuario'];
    $contraseña = $datos['clave'];

    $usuarios = array(
        array('usuario' => 'canelo', 'clave' => 'contraseña1'),
        array('usuario' => 'gise', 'clave' => 'contraseña2'),
        array('usuario' => 'pablo', 'clave' => 'contraseña3'),
    );

    $respuesta = $obj_control->controlUsuario($nombreUsuario, $contraseña, $usuarios);
    echo $respuesta;
}
