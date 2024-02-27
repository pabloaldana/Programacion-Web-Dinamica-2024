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

    <div class = "container" style= "width: 800px">
        <div class="card text-center">
            <div class="card-header">
                Trabajo Practico Nro 2
            </div>
            <div class="card-body">
                <h5 class="card-title">Ejercicio 3</h5>
                <p class="card-text">
                Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
                y la password para loguearse. Los datos del formulario son enviados a un script
                verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
                arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
                de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
                y en caso contrario un mensaje de error.
                Realizar la validación de este formulario. Chequear no solo que se hayan cargado el
                usuario y la contraseña antes de ser enviados al servidor sino que también debe
                realizar un control de contraseña segura (La contraseña debe tener como mínimo 8
                caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener
                letras y números).</p>

            </div>
        </div>
        <div class="container d-flex flex-column border border-2 rounded mt-3 mb-3" style="width: 400px; margin: auto;">
            <div class="d-flex justify-content-end mb-4">
                <button type="button" class="btn-close" disabled aria-label="Close"></button>
            </div>
            <div class="container" style="width:90%">
                <div>
                    <h2 class="text-center">Member Login</h2>
                </div>
                <div>
                    <form class="form" action="./accion/verificarPass.php" method="post" novalidate>
                        <div>
                            <input class="col-12 form-control mb-3" type="text" id="usuario" name="usuario" placeholder="Username" required>
                            <div class="invalid-feedback">Ingrese usuario</div>
                        </div>
                        <div class ="mb-4">
                            <input class="col-12 form-control" type="text" id="clave" name="clave" placeholder="Password" required>
                        </div>
                        <div><span id="error-user-password"></span></div>
                        <div><span id="error-password"></span></div>
                        <div>
                            <button class="btn btn-success col-12 mb-5" type="submit">Login</button>
                        </div>
                    </form>
                </div>        
                </div>
            </div>
        </div>
    </div>
    <script src="./js/validacionEj3.js"></script>
    <?php include_once '../structures/footer.php'; ?>


</html>


