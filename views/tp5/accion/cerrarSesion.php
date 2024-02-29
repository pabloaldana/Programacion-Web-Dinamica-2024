<?php
include_once '../../../config/configuracion.php';
$session = new Session();
$session->cerrar();

header('Location: ' . $PRINCIPAL . "/views/tp5/login.php");
