<?php
include_once '../../../config/configuracion.php';
$datos = data_submitted();
$objUsuario = new AbmUsuario();

verEstructura($datos);
$seDeshabilito = false;

if (!empty($datos)) {
    $idUsuario = $datos['idUsuario'];;
    
    $parametro = array('idUsuario' => $idUsuario);  
    $seDesactivo = $objUsuario->deshabilitar($parametro);
    if ($seDesactivo) {
        $persona = $objUsuario->buscar($parametro);
        $nombre = $persona[0]->getUsNombre();
        $fechaDeshabilitado = $persona[0]->getUsDeshabilitado();
        $seDeshabilito = true;
    } 
}
?>