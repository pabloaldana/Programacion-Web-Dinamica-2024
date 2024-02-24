<!doctype html>
<html lang="en">
    <head>
       <?php
            $title = 'TP1 Ejercicio 1';
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
                    <h5 class="card-title">Ejercicio 1</h5>
                    <p class="card-text">
                      Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                      llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
                      enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                      respuesta, que permita volver a la página anterior.</p>
                </div>
            </div>
        </div>
        
        <script src="./js/scriptCamposVacios.js"></script>

        <?php include_once '../structures/footer.php';?>
       
    </body>
</html>


