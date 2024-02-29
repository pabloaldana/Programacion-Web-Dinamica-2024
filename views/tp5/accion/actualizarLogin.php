<?php
include_once '../../../config/configuracion.php';

$datos = data_submitted();

//verEstructura($datos);

$objUsuario = new AbmUsuario();
$existeUsuario = false;

if (!empty($datos)) {
    $idUsuario = $datos['idUsuario'];
    $parametro = array('idUsuario' => $idUsuario);
    $usuario = $objUsuario->buscar($parametro);
    //verEstructura($usuario);
    $usNombre = $usuario[0]->getUsNombre();
    $usPass = $usuario[0]->getUsPass();
    $usMail = $usuario[0]->getUsMail();
    $usDeshabilitado = $usuario[0]->getUsDeshabilitado();

    if (count($usuario) > 0) {
        $existeUsuario = true;
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <?php
    $title = 'TP1 Ejercicio 4';
    include_once '../../../config/configuracion.php';
    include_once '../../structures/head.php'
    ?>
</head>

<body>
    <?php include_once '../../structures/header.php'; ?>

    <?php
    if ($existeUsuario) {
        echo '<div class="container" style="width: 700px">
                        <div class="card text-center">
                            <div class="card-header">
                                Formulario de modificacion
                            </div>
                            <div class="card-body">
                                <form class="form" action="./actualizacionCorrecta.php" method="get" novalidate>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="diaSemana">idUsuario: </label>
                                            <input class="form-control" type="text" id="idUsuario" name="idUsuario" value="' . $idUsuario . '" readonly/>
                                        </div>
                                        <div class="col">
                                            <label for="diaSemana">UsNombre: </label>
                                            <input class="form-control" type="text" id="usNombre" name="usNombre"  value="' . $usNombre . '"required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">  
                                            <label for="diaSemana">usPass: </label>
                                            <input class="form-control" type="number" id="usPass" name="usPass" value="' . $usPass . '" required/>
                                        </div>
                                        <div class="col">
                                            <label for="diaSemana">usMail: </label>
                                            <input class="form-control" type="text" id="usMail" name="usMail" value="' . $usMail . '" required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">  
                                            <label for="diaSemana">usDeshabilitado: </label>
                                            <input class="form-control" type="text" id="usDeshabilitado" name="usDeshabilitado" value="' . $usDeshabilitado . '" readonly/>
                                        </div>
                                        <div class="col">
                                        
                                        </div>
                                    </div>

                                    <button class="btn btn-text btn-primary ml-2" type="submit">Modificar</button>
                                </form>
                            </div>
                        </div>
                    </div>';
    } else {
        //  creo q no hace falta porq siempre se hace clic sobre un usuario para modificar sino hay q agrear un cartel q reenvia a tp5/listarUsuarios.php
    }
    ?>

    <script src="./js/scriptCamposVacios.js"></script>
    <?php include_once '../../structures/footer.php'; ?>
</body>

</html>