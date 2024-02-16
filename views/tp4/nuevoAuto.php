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

    <div class="container mt-3">
        <div class="card text-center mb-3" style="width:500px; margin: auto;">
            <div class="card-header">Ingrese los datos del Auto</div>
            <div class="card-body">
                <form action="./accion/accionNuevoAuto.php" class="form" method="post" id="form" name="form" novalidate>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="name" class="form-label">Patente</label>
                            <input type="text" class="form-control" id="patente" name="patente" required>
                            <div class="invalid-feedback">Debe ingresar una patente</div>
                        </div>
                        <div class="mb-3 col">
                            <label for="name" class="form-label">Marca</label>
                            <input type="text" class="form-control" id="m arca" name="marca" required>
                            <div class="invalid-feedback">Debe ingresar la marca</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="name" class="form-label">Modelo</label>
                            <input type="number" class="form-control" id="modelo" name="modelo" required>
                            <div class="invalid-feedback">Debe ingresar el modelo</div>
                        </div>
                        <div class="mb-3 col">
                            <label for="name" class="form-label">Dni de dueño</label>
                            <input type="text" class="form-control" id="dniDueno" name="dniDueño" required>
                            <div class="invalid-feedback">Debe ingresar un dni</div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Cargar Auto</button>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
    <?php include_once '../structures/footer.php';?>
</html>