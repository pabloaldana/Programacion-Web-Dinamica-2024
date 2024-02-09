

<!doctype html>
<html lang="en">
    <head>
        <?php
            $title = 'TP1 Ejercicio 4';
            include_once '../../config/configuracion.php';
            include_once '../structures/head.php'
        ?>
    </head>

    <body>
        <?php include_once '../structures/header.php';?>
        
        <main>
            <div class="container py-5 text-center mt-5 mb-5" style="border:2px solid red; height: 500px">
                <h4>Ejercicio Nro 4</h4>
                <p> Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                    esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                    persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                    Enviar los datos usando el método GET y luego probar de modificar los datos
                    directamente en la url para ver los dos posibles mensajes.</p>

                <form action="accion4.php" method="get">
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

    </body>
</html>
