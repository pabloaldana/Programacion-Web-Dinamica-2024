<?php
include_once '../../../config/configuracion.php';
$data = data_submitted();
// verEstructura($data);
if (!empty($data)) {
    $usuario = $data['usuario'];
    $pass = $data['clave'];

    $session = new Session();
    $sesionActiva = $session->activa();

    if ($sesionActiva) {
        $resp = $session->iniciar($usuario, $pass);
        if ($resp) {
            echo "sesion activa";
        } else {
            echo "sesion inactiva";
        }
    } else {
        echo "ERROR:: sesion inactiva";
    }
}
