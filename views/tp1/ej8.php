<!doctype html>
<html lang="en">

<head>
    <?php
    $title = 'TP1 Ejercicio 8';
    include_once '../../config/configuracion.php';
    include_once '../structures/head.php'
    ?>
</head>

<body>
    <?php include_once '../structures/header.php'; ?>

    <div class="container mt-3" style="width: 700px">
        <div class="card text-center">
            <div class="card-header">
                Trabajo Practico Nro 1
            </div>
            <div class="card-body">
                <h5 class="card-title">Ejercicio 8</h5>
                <p class="card-text">
                    La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
                    función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
                    clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
                    es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
                    de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
                    formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
                    un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
                    Agregar un botón para limpiar el formulario y volver a consultar.</p>
                <form class="form" action="./accion/accion8.php" method="post">
                    <div class="row">
                        <div class="col">
                            <label for="diaSemana">Edad: </label>

                        </div>
                        <div class="col">
                            <input class="form-control" type="number" id="idDatos" name="edad" required />
                        </div>

                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estudios" id="inlineRadio1" value="Sin estudios" checked>
                                <label class="form-check-label" for="inlineRadio1">Sin estudios</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estudios" id="inlineRadio2" value="Estudios Primarios">
                                <label class="form-check-label" for="inlineRadio2">Con estudios</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <?php include_once '../structures/footer.php'; ?>

</body>

</html>