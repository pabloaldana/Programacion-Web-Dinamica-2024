<?php
include_once '../../../config/configuracion.php';

$datos = data_submitted();
// verEstructura($datos);

$objAuto = new AbmAuto();
$objPersona = new AbmPersona();
$resp = false;
$existePersona = false;
$existePatente = false;


if (!empty($datos)) {

    $dniDuenio = $datos['dniDuenio'];
    $parametroPersona = array('dni' => $dniDuenio);

    $patente = $datos['patente'];
    $parametroAuto = array('Patente' => $patente);
    $auto = $objAuto->buscar($parametroAuto);

    if ($auto) {
        $existePatente = true;
    } else {
        $persona = $objPersona->buscar($parametroPersona);
        if (!empty($persona)) {

            $existePersona = true;
            if ($objAuto->alta($datos)) {
                $resp = true;
            }
        }
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
    if ($existePatente) {
        echo '<div class="card mx-auto mb-3" style="width: 400px;">
            <div class="card-body" style="width:300px">
                <p class="card-text">La patente ingresada se encuentra en la base de datos</p>
                <a href="./../index.php" class="btn btn-primary">Index</a>
            </div>
        </div>';
    } else {
        if ($resp) {
            echo '<div class="container mx-auto mb-4 mt-4" style="width:500px">
                <div class="card text-center">
                    <div class="card-header">
                        Resultado
                    </div>
                    <div class="card-body">
                        <p class="card-text">¡El vehículo se ha registrado correctamente! </p>
                        <a href="./../index.php" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>';
        } else {
            echo '<div class="card mx-auto mb-3" style="width: 400px;">
                <div class="card-body" style="width:300px">
                    <p class="card-text">El DNI ingresado no corresponde a una persona en la base de datos. Ingrese al enlace para cargar la persona</p>
                    <a href="../nuevaPersona.php" class="btn btn-primary">Ir a agregar persona</a>
                </div>
            </div>';
        }
    }

    ?>
</div>


<?php include_once '../../structures/footer.php'; ?>

</html>