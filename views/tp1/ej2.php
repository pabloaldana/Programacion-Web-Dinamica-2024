<!doctype html>
<html lang="en">
    <head>
        <?php
            $title = 'TP1 Ejercicio 2';
            include_once '../../config/configuracion.php';
            include_once '../structures/head.php'
       ?>
    </head>

    <body>
        <?php include_once '../structures/header.php';?>
        
        <div>
            <div class="container py-5 text-center mt-5 mb-5" style="border:2px solid red">
                <h4>Ejercicio Nro 2</h4>
                <p> Crear una página php que contenga un formulario HTML que permita ingresar las horas
                    de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
                    Enviar los datos del formulario por el método Get a otra página php que los reciba y
                    complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
                    se cursan por semana.</p>

                <form class="form" name="dias" id="dias" action="./accion/accion2.php" method=post novalidate>
                    <div class="row">
                        <div class ="col mb-3">
                            <label for="diaSemana">Lunes: </label>
                            <input class="form-control" type="number" id="diaSemana" name="lunes" required>
                            <div class="invalid-feedback">Debe ingresar las horas</div>
                        </div>
                        <div class ="col mb-3">
                            <label for="diaSemana">Martes</label>
                            <input class="form-control" type="number" id="diaSemana" name="martes" required>
                            <div class="invalid-feedback">Debe ingresar las horas</div>                           
                        </div>
                        <div class ="col mb-3">
                            <label for="diaSemana">Miercoles </label>
                            <input class="form-control" type="number" id="diaSemana" name="miercoles" required>
                            <div class="invalid-feedback">Debe ingresar las horas</div>
                        </div>
                        <div class ="col mb-3">
                            <label for="diaSemana">Jueves </label>
                            <input class="form-control" type="number" id="diaSemana" name="jueves" required>
                            <div class="invalid-feedback">Debe ingresar las horas</div>
                        </div>
                        <div class ="col mb-3">
                            <label for="diaSemana">Viernes </label>
                            <input class="form-control" type="number" id="diaSemana" name="viernes" required>
                            <div class="invalid-feedback">Debe ingresar las horas</div>
                        </div>                    
                    </div>
                    <button class="btn btn-primary" name=send id=send type="submit">Enviar</button>
                </form>
            </div>
        </div>

        <script src="./js/scriptCamposVacios.js"></script>
        <?php include_once '../structures/footer.php'; ?>

    </body>
</html>
