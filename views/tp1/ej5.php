<!doctype html>
<html lang="en">

<head>
    <?php
    $title = 'TP1 Ejercicio 5';
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
                <h5 class="card-title">Ejercicio 5</h5>
                <p class="card-text">
                    Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
                    “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
                    estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
                    apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
                    un mensaje que indique el tipo de estudios que posee y su sexo.</p>
                <form class="form" action="./accion/accion5.php" method="get" novalidate>

                    <div class="row">
                        <div class="col">
                            <label for="diaSemana">Nombre: </label>
                            <input class="form-control" type="text" id="nombre" name="nombre" required />
                        </div>
                        <div class="col">
                            <label for="diaSemana">Apellido: </label>
                            <input class="form-control" type="text" id="apellido" name="apellido" required />
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="diaSemana">Edad: </label>
                            <input class="form-control" type="number" id="edad" name="edad" required />
                        </div>
                        <div class="col">
                            <label for="diaSemana">Direccion: </label>
                            <input class="form-control" type="text" id="direccion" name="direccion" required />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estudios" id="inlineRadio1" value="No posee estudios">
                                <label class="form-check-label" for="inlineRadio1">No posee estudios</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estudios" id="inlineRadio2" value="Estudios primarios">
                                <label class="form-check-label" for="inlineRadio2">Estudios primarios</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estudios" id="inlineRadio2" value="Estudios secundarios">
                                <label class="form-check-label" for="inlineRadio2">Estudios secundarios</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <label>Sexo:</label>
                        <div>
                            <select class="form-select" id="selectSexo" name="selectSexo" style="margin-left:10px" aria-label="Default select example" required>
                                <option selected disabled value="">Selección Genero</option>
                                <option value="Mujer">Mujer</option>
                                <option value="Hombre">Hombre</option>
                                <option value="X">X</option>
                            </select>
                            <div class="invalid-feedback">Seleccione uno</div>
                        </div>
                    </div>
                    <div style="margin-top:10px">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <script src="./js/scriptCamposVacios.js"></script>
    <?php include_once '../structures/footer.php'; ?>

</body>

</html>