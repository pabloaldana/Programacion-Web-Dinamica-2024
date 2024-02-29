<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = 'TP3 Ejercicio 2';
    include_once '../../config/configuracion.php';
    include_once '../structures/head.php'
    ?>
</head>

<?php include_once '../structures/header.php'; ?>

<div class="container">
    <h4>Ejercicio 2 </h4>
    <p>
        Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
        que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
        contenido en un textarea.
    </p>
    <div class="container mb-4 border border-2 rounded mt-2 p-2" style="width: 800px">
        <form action="./accion/subirArchivoTxt.php" class="form" method="post" enctype="multipart/form-data" novalidate>
            <div class="mb-3">
                <input class="form-control" type="file" id="miArchivo" name="miArchivo" required>
                <small id="miniaturaHelp" class="form-text text-muted">.txt es la extension permitida</small>
                <div class="invalid-feedback">Seleccione el archivo</div>
            </div>
            <button type="submint" class="btn btn-primary">Subir</button>

        </form>
    </div>


</div>
<script src="./js/controlCamposVacios.js"></script>
<?php include_once '../structures/footer.php'; ?>

</html>