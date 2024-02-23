<?php
//para q siempre compruebe si hay una sesion abierta
include_once '../../config/configuration.php';
$session = new Session();
if ($session->validar()) {
    header('Location: ' . $PRINCIPAL . "/views/tp5/paginaSegura.php");
}
?>
<!doctype html>
<html lang="en">
    <head>
        <?php
            $title = 'TP2 Ejercicio 3';
            include_once '../../config/configuracion.php';
            include_once '../structures/head.php'
       ?>
    </head>


    <?php include_once '../structures/header.php';?>

    <div class = "container" style= "width: 700px">
    <div class="card text-center">
        <div class="card-header">
            Trabajo Practico Nro 2
        </div>
        <div class="card-body">
            <div class = "container" style="width: 400px; margin: auto;">   

                <div class="d-flex justify-content-center m-3">
                    <h2 class="text-center">Member Login</h2>
                </div>
                    <form class="form " action="./accion/verificarPass.php" method="post" novalidate>
                        <div>
                            <input class="col-12 form-control" type="text" id="usuario" name="usuario" placeholder="Username" required>
                            <div class="invalid-feedback">Ingrese usuario</div>
                        </div>
                        <div>
                            <input class="col-12 form-control" type="text" id="clave" name="clave" placeholder="Password" required>
                        </div>
                        <div><span id="error-user-password"></span></div>
                        <div><span id="error-password"></span></div>
                        <div>
                            <button class="btn btn-success col-12" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
    
    <script src="./js/validacionEj3.js"></script>
    <?php include_once '../structures/footer.php'; ?>


</html>


