<?php


include_once '../../../config/configuracion.php';
$datos = data_submitted();
//verEstructura($datos);
$obj_control = new Tp1_controller();

if (!empty($datos)) {
    $resp = $obj_control->ejercicio8($datos);
    echo $resp;
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
            <p class="card-text"><?php echo $resp ?> </p>
            <a href="../ej8.php" name="send" id="send" value="volver" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>
<?php include_once '../../structures/footer.php'; ?>

</html>