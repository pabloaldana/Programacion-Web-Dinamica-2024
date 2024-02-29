<!doctype html>
<html lang="en">

<head>
    <?php
    $title = 'TP1 Ejercicio 1';
    include_once '../../config/configuracion.php';
    include_once '../structures/head.php'
    ?>
</head>

<body>
    <?php include_once '../structures/header.php'; ?>

    <div class="container" style="width: 700px">
        <div class="card text-center">
            <div class="card-header">
                Trabajo Practico Nro 1
            </div>
            <div class="card-body">
                <h5 class="card-title">Ejercicio 1</h5>
                <p class="card-text">
                    Usuario Logeado Correctamente</p>
            </div>
            <a class="btn btn-danger col-12" href="./accion/cerrarSesion.php">Cerrar</a>
        </div>
    </div>

    <script src="./js/scriptCamposVacios.js"></script>

    <?php include_once '../structures/footer.php'; ?>

</body>

</html>