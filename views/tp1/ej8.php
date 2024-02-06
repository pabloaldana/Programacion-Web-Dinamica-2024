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
            <div class="container py-5 text-center mt-5 mb-5" style="border:2px solid red; height: 500px">
                <h4>Ejercicio Nro 5</h4>
                <p> Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                    esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                    persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                    Enviar los datos usando el método GET y luego probar de modificar los datos
                    directamente en la url para ver los dos posibles mensajes.</p>


                <form action="accion8.php" method="get">
            
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Edad: </label>
                        <input type="number" id="idDatos" name="edad" required/>
                    </div>
                    

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="estudios" id="inlineRadio1" value="Sin estudios">
                      <label class="form-check-label" for="inlineRadio1">Sin estudios</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="estudios" id="inlineRadio2" value="Estudios Primarios">
                      <label class="form-check-label" for="inlineRadio2">Estudio primario</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="estudios" id="inlineRadio3" value="Estudios Secundarios" >
                      <label class="form-check-label" for="inlineRadio3">Estudio secundario</label>
                    </div>


                    <div style="margin-top:10px">
                        <button class="btn btn-primary" type="submit" onclick="return validateNumber()">Enviar</button>
                    </div>

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