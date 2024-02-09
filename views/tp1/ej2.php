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
            <div class="container py-5 text-center mt-5 mb-5" style="border:2px solid red; height: 600px">
                <h4>Ejercicio Nro 2</h4>
                <p> Crear una página php que contenga un formulario HTML que permita ingresar las horas
                    de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
                    Enviar los datos del formulario por el método Get a otra página php que los reciba y
                    complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
                    se cursan por semana.</p>

                <form action="accion2.php" method="get">
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Lunes: </label>
                        <input type="number" id="diaSemana" name="lunes" required/>
                    </div>
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Martes</label>
                        <input type="number" id="diaSemana" name="martes" required/>
                    </div>
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Miercoles </label>
                        <input type="number" id="diaSemana" name="miercoles" required/>
                    </div>
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Jueves </label>
                        <input type="number" id="diaSemana" name="jueves" required/>
                    </div>
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Viernes </label>
                        <input type="number" id="diaSemana" name="viernes" required/>
                    </div>                    

                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Calcular Horas</button>
                </form>
            </div>

        
            
        </div>
        
        <?php include_once '../structures/footer.php'; ?>

    </body>
</html>
