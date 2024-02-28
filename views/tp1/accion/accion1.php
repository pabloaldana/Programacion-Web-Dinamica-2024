<?php
include_once '../../../config/configuracion.php';

$datoFormulario = data_submitted();
//verEstructura($datoFormulario);

$obj_control = new Tp1_controller();

if (!empty($datoFormulario)) {
    $nro = $datoFormulario['idNumber'];
    $respuesta = $obj_control->ejercicio1($nro);
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

<div class="container mx-auto mb-4 mt-4 " style="width:500px">
    <div class="card text-center">
        <div class="card-header">
            Resultado
        </div>
        <div class="card-body">
            <p class="card-text">El numero <?php echo $nro . ' ' . $respuesta ?> </p>
            <a href="../ej1.php" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>
<?php include_once '../../structures/footer.php'; ?>

</html>