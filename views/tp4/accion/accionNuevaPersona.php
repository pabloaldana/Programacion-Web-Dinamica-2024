<?php
include_once '../../../config/configuracion.php';
$datos = data_submitted();
//verEstructura($datos);

$objPersona = new AbmPersona();
$resp = false;
$exitePersona = false;

if (!empty($datos)) {

    $dniPersona = $datos['dni'];
    $parametroPersona = array('dni' => $dniPersona);
    $persona = $objPersona->buscar($parametroPersona);

    if ($persona) {
        $exitePersona = true;
    } else {
        if ($objPersona->alta($datos))
            $resp = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = 'TP4 Ejercicio';
    include_once '../../../config/configuracion.php';
    include_once '../../structures/head.php'
    ?>
</head>

<?php include_once '../../structures/header.php'; ?>

<div class="container">

    <?php
    if ($exitePersona) {
        echo '<div class="card mx-auto mb-3" style="width: 400px;">
            <div class="card-body" style="width:300px">
                <p class="card-text">La persona ya se encuentra cargada en la base de datos</p>
                <a href="./../index.php" class="btn btn-primary">Inicio</a>
            </div>
            </div>';
    } else {
        if ($resp) {
            echo '<div class="card mx-auto mb-3" style="width: 400px;">
                <div class="card-body" style="width:300px">
                <p class="card-text">Registro realizado con exito</p>
                <a href="./../index.php" class="btn btn-primary">Inicio</a>
                </div>
                </div>';
        } else {
            echo '<div class="card mx-auto mb-3" style="width: 400px;">
                <div class="card-body" style="width:300px">
                    <p class="card-text">Error al guardar el registro</p>
                    <a href="./../index.php" class="btn btn-primary">Inicio</a>
                </div>
            </div>';
        }
    }
    ?>

</div>

<?php include_once '../../structures/footer.php'; ?>

</html>