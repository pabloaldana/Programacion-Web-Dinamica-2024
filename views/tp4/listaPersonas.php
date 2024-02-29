<?php
include_once '../../config/configuracion.php';

$objPersona = new AbmPersona();

$listaPersonas = $objPersona->buscar(null); //va a buscar hasta el nulo
$hayPersonas = false;
//verEstructura( $listaPersonas );
if (count($listaPersonas) > 0) {
    $hayPersonas = true;
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
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Autos</th>
                </tr>
            </thead>


            <?php
            foreach ($listaPersonas as $persona) {
                echo "<tbody>";
                echo "<tr>";
                echo "<th scope='row'>" . $persona->getNombre() . "</th>";
                echo "<td>" . $persona->getApellido() . "</td>";
                echo "<td>" . $persona->getNroDni() . "</td>";
                echo "<td>" . $persona->getFechaNacimiento() . "</td>";
                echo "<td>" . $persona->getTelefono() . "</td>";
                echo "<td>" . $persona->getDomicilio() . "</td>";
                echo "<td class='text-center'> <a href='autosDePersona.php?dni=" . $persona->getNroDni() . " 'class='btn btn-text btn-outline-primary'>Acceder</a> </td>";
                echo "</tr>";
                echo "</tbody>";
            }
            ?>
        </table>
    </div>
</div>

<?php include_once '../../structures/footer.php'; ?>

</html>