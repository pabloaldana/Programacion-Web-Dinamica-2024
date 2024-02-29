<?php
include_once '../../../config/configuracion.php';
$datos = data_submitted();
//verEstructura($datos);
$objPersona = new AbmPersona();
$seModifico = false;

if (!empty($datos)) {
    $dni = $datos['dni'];
    $nombre = $datos['nombre'];
    $apellido = $datos['apellido'];
    $fechaNacimiento = $datos['fechaNacimiento'];
    $telefono = $datos['telefono'];
    $direccion = $datos['direccion'];
    $modificarPersona = $objPersona->modificacion($datos);
    if ($modificarPersona) {
        $seModifico = true;
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
    if ($seModifico) {
        echo '<div class="card mx-auto mb-3" style="width: 400px;">
            <div class="card-body" style="width:300px">
                <p class="card-text">Los cambios en los datos de la persona se modificaron correctamente</p>
                <a href="./../index.php" class="btn btn-primary">Inicio</a>
            </div>
        </div>';
    } else {
        echo '<div class="card mx-auto mb-3" style="width: 400px;">
                <div class="card-body" style="width:300px">
                    <p class="card-text">Los cambios en los datos de la persona no se pudieron modificar</p>
                    <a href="../index.php" class="btn btn-primary">Inicio</a>
                </div>
            </div>';
    }

    ?>
</div>


<?php include_once '../../structures/footer.php'; ?>

</html>