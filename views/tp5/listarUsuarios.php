<?php
include_once '../../config/configuracion.php';

$objUsuario = new AbmUsuario();

$listaUsuarios = $objUsuario->buscar(null);

//verEstructura($listaUsuarios);
$hayUsuarios = false;
if (count($listaUsuarios) > 0) {
    $hayUsuarios = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = 'TP4 Ejercicio';
    include_once '../../config/configuracion.php';
    include_once '../structures/head.php'
    ?>
</head>

<?php include_once '../structures/header.php'; ?>

<div class="container">
    <div>
        <table class="table caption-top">
            <caption>Lista de Usuarios</caption>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Email</th>
                    <th scope="col">UsDeshabilitado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>


            <?php
            foreach ($listaUsuarios as $usuario) {
                echo "<tbody>";
                echo "<tr>";
                echo "<th scope='row'>" . $usuario->getIdUsuario() . "</th>";
                echo "<td>" . $usuario->getUsNombre() . "</td>";
                echo "<td>" . $usuario->getUsPass() . "</td>";
                echo "<td>" . $usuario->getUsMail() . "</td>";
                echo "<td>" . $usuario->getUsDeshabilitado() . "</td>";
                echo "<td class='text-center'> 
                                <a href='./accion/actualizarLogin.php?idUsuario=" . $usuario->getIdUsuario() . "&usDeshabilitado=" . $usuario->getUsDeshabilitado() . "' class='btn btn-text btn-primary ml-2'>Actualizar</a>
                                <a href='./accion/eliminarLogin.php?idUsuario=" . $usuario->getIdUsuario() . "&usDeshabilitado=" . $usuario->getUsDeshabilitado() . "' class='btn btn-text btn-danger ml-2" . ($usuario->getUsDeshabilitado() ? ' disabled' : '') . " '>Eliminar</a>
                                </td>";
                echo "</tr>";
                echo "</tbody>";
            }
            ?>
        </table>
    </div>
</div>

<?php include_once '../structures/footer.php'; ?>

</html>