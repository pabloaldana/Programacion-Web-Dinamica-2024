<!doctype html>
<html lang="en">

<head>
    <?php
    $title = 'TP1 Ejercicio 4';
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
                <h5 class="card-title">Ejercicio 4</h5>
                <p class="card-text">
                    Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                    esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                    persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                    Enviar los datos usando el método GET y luego probar de modificar los datos
                    directamente en la url para ver los dos posibles mensajes.</p>
                <form class="form" action="./accion/accion4.php" method="get" novalidate>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="diaSemana">Nombre: </label>
                            <input class="form-control" type="text" id="nombre" name="nombre" required />
                        </div>
                        <div class="col">
                            <label for="diaSemana">Apellido: </label>
                            <input class="form-control" type="text" id="apellido" name="apellido" required />
                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="diaSemana">Edad: </label>
                            <input class="form-control" type="number" id="edad" name="edad" required />
                        </div>
                        <div class="col">
                            <label for="diaSemana">Direccion: </label>
                            <input class="form-control" type="text" id="direccion" name="direccion" required />
                        </div>

                    </div>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="./js/scriptCamposVacios.js"></script>
    <?php include_once '../structures/footer.php'; ?>

</body>

</html>