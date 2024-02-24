<?php
include_once '../../../config/configuration.php';



$session = new Session();
$session->cerrar();

header('Location: ' . $PRINCIPAL . "/views/tp5_views/login.php");