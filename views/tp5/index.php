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
        <div class="card text-center mb-3 mt-3">
            <div class="card-header">
                Trabajo Practico Nro 5
            </div>
            <div class="card-body">
                <h5 class="card-title">Ejercicio 4.1</h5>
                <p class="card-text">
                    Implementar un script Vista/listarUsuario.php que liste los usuario registrados y permita actualizar sus datos o
                    realizar un borrado lógico. Las acciones que se van a poder invocar son:
                    accion/actualizarLogin.php y accion/eliminarLogin.php</p>
                <a name="boton" id="boton" class="btn btn-primary" href="./listarUsuarios.php" role="button">Ir</a>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-header">
                Trabajo Practico Nro 5
            </div>
            <div class="card-body">
                <h5 class="card-title">Ejercicio 4.2</h5>
                <p class="card-text">
                    Implementar un script Vista/login.php que invoque al script accion/verificarLogin.php el cual redirecciona al
                    script Vista/paginaSegura.php si los datos ingresados se corresponden con un usuario/pass
                    registrados. Caso contrario se redirecciona nuevamente al script Vista/login.php</p>

                <a name="boton" id="boton" class="btn btn-primary" href="./login.php" role="button">Logear</a>

            </div>
        </div>
    </div>

    <script src="./js/scriptCamposVacios.js"></script>

    <?php include_once '../structures/footer.php'; ?>

</body>

</html>