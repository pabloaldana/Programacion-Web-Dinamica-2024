<!DOCTYPE html>
    <html lang="en">
    <head>
        <?php
            $title = 'TP4 Ejercicio';
            include_once '../../config/configuracion.php';
            include_once '../structures/head.php'
        ?>
    </head>

    <?php include_once '../structures/header.php';?>

    <div class="container d-flex mt-3">
        <div class="card mb-3" style="margin:auto;">
            <div class="card-header">Buscar persona</div>
            <div class="card-body">
                <p class="card-text">Ingrese el dni de la persona que esta buscando</p>
                <form action="./accion/accionBuscarPersona.php" method="post" id="form" name="form" class="form" novalidate>
                    <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI" required>
                    <div class="invalid-feedback mb-3">Ingresar el numero de dni</div>
                    <button class="btn btn-primary" type="submit">Buscar</button>    
                </form>
 
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
    <?php include_once '../structures/footer.php';?>
</html>