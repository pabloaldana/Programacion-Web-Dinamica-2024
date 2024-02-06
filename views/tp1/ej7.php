

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
            <div class="container py-5 text-center mt-5 mb-5" style="border:2px solid red; height: 400px">
                <h4>Ejercicio Nro 7</h4>
                <p> Crear una página con un formulario que contenga dos input de tipo text y un select. En
                    los inputs se ingresarán números y el select debe dar la opción de una operación
                    matemática que podrá resolverse usando los números ingresados. En la página que
                    procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                    uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
                    formulario:</p>

                <form action="accion7.php" method="get">
                  
                  <input type="text" id="numero1" name="numero1" class="form-control"/>
                  <input type="text" id="numero2" name="numero2" class="form-control"/>
                  <select  name="operador" aria-label="Default select example">
                      <option selected disabled value="">Seleccione...</option>
                      <option value="suma">Suma</option>
                      <option value="resta">Resta</option>
                      <option value="multiplicacion">Multiplicación</option>
                  </select>

                  <br><br>

                  <button type="submit" class="btn btn-primary">Enviar</button>
                   
                
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
