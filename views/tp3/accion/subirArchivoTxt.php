<?php
include_once '../../../config/configuracion.php';

$obj_tp3 = new Tp3_controller();
$dir = __DIR__ . '/../cargas/';


if ($_FILES['miArchivo']['error'] <= 0) {

    $nombre = $_FILES["miArchivo"]["name"];
    $extension = $_FILES['miArchivo']['type'];
    //echo "extension: ".$extencion;
    $rutaTemporal = $_FILES["miArchivo"]["tmp_name"];

    $respuesta = $obj_tp3->cargarArchivoTxt($extension, $rutaTemporal);

    //echo $respuesta;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = 'TP2 Ejercicio 4';
    include_once '../../../config/configuracion.php';
    include_once '../../structures/head.php'
    ?>
</head>
<?php include_once '../../structures/header.php'; ?>

<div class="container" style="width: 500px;">

    <label for="transcription" class="form-label">Transcripción del Documento</label>
    <textarea class="form-control" id="transcription" name="transcription" rows="5" disabled>  <?php echo $respuesta ?> </textarea>

</div>

<?php include_once '../../structures/footer.php'; ?>


</html>