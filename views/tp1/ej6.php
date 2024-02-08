
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
        
        <div class="container py-5 text-center mt-5 mb-5" style="border:2px solid red; ">
            <h4>Ejercicio Nro 6</h4>
            <p> Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                Enviar los datos usando el método GET y luego probar de modificar los datos
                directamente en la url para ver los dos posibles mensajes.</p>
            <form action="./accion/accion6.php" class="form" method="post" id="form" name="form" novalidate>
                <div class="row mb-4">
                    <div class="col">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback">Debe ingresar un nombre</div>
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                        <div class="invalid-feedback">Debe ingresar apellido</div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="age" class="form-label">Edad</label>
                        <input type="number" class="form-control" id="age" name="age" required>
                        <div class="invalid-feedback">Debe ingresar la edad</div>
                    </div>
                    <div class="col">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                        <div class="invalid-feedback">Debe ingresar dirección</div>
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
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>
        </div>

        <script src="./js/ejercicio6Script.js"></script>

        <?php include_once '../structures/footer.php';?>
        
    </body>

</html>
