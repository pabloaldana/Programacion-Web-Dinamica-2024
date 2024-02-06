

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
                <h4>Ejercicio Nro1</h4>
                <p > Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                    llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
                    enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                    respuesta, que permita volver a la página anterior.</p>

                <form action="accion1.php" method="get">
                    <input type="number"  id="idNumber" name="number" placeholder="Ingrese un numero"/>
                    <br/>
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
