<!doctype html>
<html lang="en">

<head>
    <?php
    $title = 'TP1 Ejercicio 3';
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
                <h5 class="card-title">Ejercicio 3</h5>
                <p class="card-text">
                    Crear una página php que contenga un formulario HTML como el que se indica en la
                    imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
                    que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
                    nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
                    Cambiar el método Post por Get y analizar las diferencias</p>
                <form class="form" name="datos" id="datos" action="./accion/accion3.php" method="post" novalidate>
                    <div class="mb-3 row">
                        <div class="col">
                            <label for="diaSemana">Nombre: </label>
                            <input class="form-control" type="text" id="nombre" name="nombre" required />
                        </div>
                        <div class="col">
                            <label for="diaSemana">Apellido: </label>
                            <input class="form-control" type="text" id="apellido" name="apellido" required />
                        </div>
                    </div>
                    <div class="mb-3 row">
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