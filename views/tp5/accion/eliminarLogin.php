<?php
include_once '../../../config/configuracion.php';
$datos = data_submitted();
$objUsuario = new AbmUsuario();

//verEstructura($datos);
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
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = 'TP5 Ejercicio 1';
    include_once '../../../config/configuracion.php';
    include_once '../../structures/head.php'
    ?>
</head>

<?php include_once '../../structures/header.php'; ?>

<div class="container">

    <?php
    if ($seDeshabilito) {
        echo '<div class="card mx-auto mb-3" style="width: 400px;">
            <div class="card-body" style="width:300px">
                <p class="card-text">El usuario fue desactivado correctamente</p>
                <a href="./../index.php" class="btn btn-primary">Inicio</a>
            </div>
            </div>';
    } else {

        echo '<div class="card mx-auto mb-3" style="width: 400px;">
                <div class="card-body" style="width:300px">
                    <p class="card-text">Error al desactivar usuario</p>
                    <a href="./../index.php" class="btn btn-primary">Inicio</a>
                </div>
            </div>';
    }
    ?>

</div>

<?php include_once '../../structures/footer.php'; ?>

</html>