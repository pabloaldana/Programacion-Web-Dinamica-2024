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
        
        <div>
            <div class="container py-5 text-center mt-5 mb-5" style="border:2px solid red; height: 400px">
                <h4>Ejercicio Nro 1</h4>
                <p > Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                    llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
                    enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                    respuesta, que permita volver a la página anterior.</p>

                    <form class="form" id="formNumber" name="formNumber" action="./accion/accion1.php" method=post novalidate>
                        <div class="mb-3">
                            <label for="idNumber" class="form-label">Numero</label>
                            <input type="number" class="form-control" id="idNumber" name="idNumber" placeholder ="Ingrese un numero" required>
                            <div class="invalid-feedback">
                                Debe ingresar un número
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input name=send id=send type=submit value="Enviar" class="btn btn-outline-primary">
                        </div>
                    </form>
            </div>
        </div>
        
        <script src="./js/scriptCamposVacios.js"></script>

        <?php include_once '../structures/footer.php';?>
       
    </body>
</html>
