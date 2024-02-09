

<!doctype html>
<html lang="en">
        <?php
            $title = 'TP1 Ejercicio 3';
            include_once '../../config/configuracion.php';
            include_once '../structures/head.php'
        ?>
    </head>

    <body>
        <?php include_once '../structures/header.php';?>
        
        <main>
            <div class="container py-5 text-center mt-5 mb-5" style="border:2px solid red; height: 500px">
                <h4>Ejercicio Nro 3</h4>
                <p> Crear una página php que contenga un formulario HTML como el que se indica en la
                    imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
                    que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
                    nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
                    Cambiar el método Post por Get y analizar las diferencias</p>

                <form action="accion3.php" method="get">
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Nombre: </label>
                        <input type="text" id="idDatos" name="nombre" required/>
                    </div>
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Apellido: </label>
                        <input type="text" id="idDatos" name="apellido" required/>
                    </div>
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Edad: </label>
                        <input type="number" id="idDatos" name="edad" required/>
                    </div>
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Direccion: </label>
                        <input type="text" id="idDatos" name="direccion" required/>
                    </div>
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
