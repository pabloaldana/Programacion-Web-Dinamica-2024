

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <?php include_once './structures/header.php';?>
        
        <main>
            <div class="container py-5 text-center mt-5 mb-5" style="border:2px solid red; height: 600px">
                <h4>Ejercicio Nro 2</h4>
                <p > Crear una página php que contenga un formulario HTML que permita ingresar las horas
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

        
            
        </main>
        
        <?php include_once '../structures/footer.php'; ?>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
