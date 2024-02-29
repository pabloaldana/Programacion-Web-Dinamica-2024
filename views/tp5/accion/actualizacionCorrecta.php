<?php
include_once '../../../config/configuracion.php';

$datos = data_submitted();
verEstructura($datos);

$objUsuario = new AbmUsuario();

if (!empty($datos)) {
    //aca se rompe
    $modificacion = $objUsuario->modificacion($datos);
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
            <p class="card-text">Los datos han sido modificados correctamente</p>
            <a href="./../index.php" class="btn btn-primary">Inicio</a>
        </div>
    </div>
</div>
<?php include_once '../../structures/footer.php'; ?>

</html>