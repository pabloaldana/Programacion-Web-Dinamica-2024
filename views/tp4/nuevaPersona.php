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
            <div class="card-header">Ingrese los datos de la persona</div>
            <div class="card-body">
                <form action="./accion/accionNuevaPersona.php" class="form" method="post" id="form" name="form" novalidate>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">Debe ingresar un nombre</div>
                        </div>
                        <div class="col">
                            <label for="lastname" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                            <div class="invalid-feedback">Debe ingresar apellido</div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="age" class="form-label">Fecha De Nacimiento</label>
                            <input type="date" class="form-control" id="fechaNac" name="fechaNac" required>
                            <div class="invalid-feedback">Debe ingresar su fecha de nacimiento</div>
                        </div>
                        <div class="col">
                            <label for="address" class="form-label">Nro Dni</label>
                            <input type="number" class="form-control" id="dni" name="dni" required>
                            <div class="invalid-feedback">Debe ingresar su número de documento</div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="age" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                            <div class="invalid-feedback">Debe ingresar la dirección</div>
                        </div>
                        <div class="col">
                            <label for="address" class="form-label">Teléfono</label>
                            <input type="number" class="form-control" id="telefono" name="telefono" required>
                            <div class="invalid-feedback">Debe ingresar un teléfono</div>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Cargar Persona</button>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
    <?php include_once '../structures/footer.php';?>
</html>