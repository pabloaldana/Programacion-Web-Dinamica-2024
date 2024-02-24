<?php
include_once '../../../config/configuration.php';

$data = data_submitted();

if (!empty($data)) {
    $usuario = $data['usuario'];
    $pass = $data['pass'];

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
