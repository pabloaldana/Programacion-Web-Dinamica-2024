
<!doctype html>
<html lang="en">
    <head>
       <?php
            $title = 'TP1 Ejercicio 6';
            include_once '../../config/configuracion.php';
            include_once '../structures/head.php'
       ?>
    </head>

    <body>
        <?php include_once '../structures/header.php';?>
        
        <div class = "container" style= "width: 700px">
    <div class="card text-center">
        <div class="card-header">
            Trabajo Practico Nro 1
        </div>
        <div class="card-body">
            <h5 class="card-title">Ejercicio 6</h5>
            <p class="card-text">
            Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
            esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
            persona es mayor de edad o no; (si la edad es mayor o igual a 18).
            Enviar los datos usando el método GET y luego probar de modificar los datos
            directamente en la url para ver los dos posibles mensajes.</p>
            <form class="form" action="./accion/accion6.php" method="get" novalidate>

                <div class="row">
                    <div class= "col">
                        <label for="diaSemana">Nombre: </label>
                        <input class="form-control" type="text" id="nombre" name="nombre" required/>
                    </div>
                    <div class= "col">
                        <label for="diaSemana">Apellido: </label>
                        <input class="form-control" type="text" id="apellido" name="apellido" required/>
                    </div>

                </div>
                <div class="row">
                    <div class= "col">
                        <label for="diaSemana">Edad: </label>
                        <input class="form-control" type="number" id="edad" name="edad" required/>
                    </div>
                    <div class= "col">
                        <label for="diaSemana">Direccion: </label>
                        <input class="form-control" type="text" id="direccion" name="direccion" required/>
                    </div>
                </div>
                <div class = "row mb-4">
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
                        <select  class="form-select" id="selectSexo" name="selectSexo" style="margin-left:10px" aria-label="Default select example" required>
                            <option selected disabled value="">Selección Genero</option>
                            <option value="Mujer">Mujer</option>
                            <option value="Hombre">Hombre</option>
                            <option value="X">X</option>
                        </select>
                        <div class="invalid-feedback">Seleccione uno</div>
                    </div>
                    </div>
                    <div class="row mb-4">
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Futbol" name="sports[]">
                            <label class="form-check-label" for="inlineCheckbox1">Futbol</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Basket" name="sports[]">
                            <label class="form-check-label" for="inlineCheckbox2">Basket</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Tennis" name="sports[]">
                            <label class="form-check-label" for="inlineCheckbox3">Tennis</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Voley" name="sports[]">
                            <label class="form-check-label" for="inlineCheckbox4">Voley</label>
                        </div>
                    </div>
                </div>
                    <div style="margin-top:10px">
                        <button class="btn btn-primary" type="submit" >Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

        <script src="./js/scriptCamposVacios.js"></script>
        <?php include_once '../structures/footer.php';?>
        
    </body>

</html>

