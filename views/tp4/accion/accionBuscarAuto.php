<?php
include_once '../../../config/configuracion.php';
$datos = data_submitted();
//verEstructura($datos);

$resp = false;
$objAuto = new AbmAuto();

if (!empty($datos)) {
    $patente = $datos['patente'];
    $parametros = array('Patente'  => $patente);
    $autoBuscado = $objAuto->buscar($parametros);

    if ($autoBuscado) {
        $marca =  $autoBuscado[0]->getMarca();
        $modelo =  $autoBuscado[0]->getModelo();
        $objDuenio = $autoBuscado[0]->getObjDuenio();
        $dniDuenio = $objDuenio->getNroDni();
        $resp = true;
    } else {
        $noAuto = "No se encuentra el auto con la patente $patente";
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
    if ($resp) {
        echo '<div>
        <table class="table caption-top">
            <caption>Datos de la Patente ' . $patente . ' </caption>
            <thead>
                <tr>
                    <th scope="col">Patente</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Dni Dueño</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">' . $patente . '</th>
                    <td>' . $marca . '</td>
                    <td>' . $modelo . '</td>
                    <td>' . $dniDuenio . '</td>
                </tr>
            </tbody>
        </table>
    </div>';
    } else {
        echo '<div class="container mx-auto mb-4 mt-4" style="width:500px">
        <div class="card text-center">
            <div class="card-header">
                Resultado
            </div>
            <div class="card-body">
                <p class="card-text">' . $noAuto . '</p>
                <a href="../index.php" name="send" id="send" value="volver" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>';
    }
    ?>
</div>


<?php include_once '../../structures/footer.php'; ?>

</html>