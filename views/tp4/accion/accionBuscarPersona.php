<?php
include_once '../../../config/configuracion.php';
$datos = data_submitted();

//verEstructura($datos);

$resp = false;
$existePersona = false;
$objPersona = new AbmPersona();
if (!empty($datos)) {
    $dni = $datos['dni'];
    $parametros = array('dni'  => $dni);
    $personaBuscada = $objPersona->buscar($parametros);

    if (!empty($personaBuscada)) {
        $existePersona = true;
        $nombre = $personaBuscada[0]->getNombre();
        $apellido = $personaBuscada[0]->getApellido();
        $fechaNacimiento = $personaBuscada[0]->getFechaNacimiento();
        $telefono = $personaBuscada[0]->getTelefono();
        $direccion = $personaBuscada[0]->getDomicilio();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = 'TP4 Ejercicio';
    include_once '../../../config/configuracion.php';
    include_once '../../structures/head.php'
    ?>
</head>

<?php include_once '../../structures/header.php'; ?>

<?php
if ($existePersona) {
    echo '<div class="container mt-3">
    <div class="card text-center mb-3" style="width:500px; margin: auto;">
        <div class="card-header">Ingrese los datos de la persona</div>
        <div class="card-body">
            <form action="./actualizarDatosPersona.php" class="form" method="post" id="form" name="form" novalidate>
                <div class="row mb-4">
                    <div class="col">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="' . $nombre . '"required>
                        <div class="invalid-feedback">Debe ingresar un nombre</div>
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="' . $apellido . '" required>
                        <div class="invalid-feedback">Debe ingresar apellido</div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="age" class="form-label">Fecha De Nacimiento</label>
                        <input type="date" class="form-control" id="fechaNac" name="fechaNac" value="' . $fechaNacimiento . '" required>
                        <div class="invalid-feedback">Debe ingresar su fecha de nacimiento</div>
                    </div>
                    <div class="col">
                        <label for="address" class="form-label">Nro Dni</label>
                        <input type="number" class="form-control" id="dni" name="dni" value="' . $dni . '" readonly>
                        <div class="invalid-feedback">Debe ingresar su número de documento</div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="age" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="' . $direccion . '" required>
                        <div class="invalid-feedback">Debe ingresar la dirección</div>
                    </div>
                    <div class="col">
                        <label for="address" class="form-label">Teléfono</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" value="' . $telefono . '"required>
                        <div class="invalid-feedback">Debe ingresar un teléfono</div>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit" href="./actualizarDatosPersona.php">Cargar Persona</button>
            </form>
        </div>
    </div>
</div>';
} else {
    echo '<div class="card mx-auto mb-3" style="width: 400px;">
    <div class="card-body" style="width:300px">
        <p class="card-text">El DNI ingresado no corresponde a una persona cargada en la base de datos</p>
        <a href="./../index.php" class="btn btn-primary">Index</a>
    </div>
</div>';
}
?>



<script src="./js/script.js"></script>
<?php include_once '../../structures/footer.php'; ?>

</html>