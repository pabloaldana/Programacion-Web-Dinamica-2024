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
            <div class="card-header">Cambiar Dueño</div>
            <div class="card-body">
                <form action="./accion/accionCambioDuenio.php" method="post" id="form" name="form" class="form" novalidate>
                    <div class="mb-3">
                        <label for="">Ingrese la patente</label>
                        <input type="text" class="form-control" id="patente" name="patente" placeholder="Patente" required>
                        <div class="invalid-feedback mb-3">Debe ingresar una patente</div>
                    </div>
                    <div class="mb-3">
                        <label for="">Ingrese el dni </label>
                        <input type="number" class="form-control" id="dni" name="dni" placeholder=" Dni" required>
                        <div class="invalid-feedback mb-3">Debe ingresar una patente</div>
                    </div>
                    <button class="btn btn-primary" type="submit">Cambiar</button>    
                </form>
 
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
    <?php include_once '../structures/footer.php';?>
</html>