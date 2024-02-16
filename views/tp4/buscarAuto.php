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
            <div class="card-header">Buscar Auto</div>
            <div class="card-body">
                <p class="card-text">Ingrese la patente del auto que desea buscar</p>
                <form action="./accion/accionBuscarAuto.php" method="post" id="form" name="form" class="form" novalidate>
                    <input type="text" class="form-control" id="patente" name="patente" placeholder="Patente" required>
                    <div class="invalid-feedback mb-3">Debe ingresar una patente</div>

                    <button class="btn btn-primary" type="submit">Buscar</button>    
                </form>
 
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
    <?php include_once '../structures/footer.php';?>
</html>