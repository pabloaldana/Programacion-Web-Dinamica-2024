<?php
    include_once '../../../config/configuracion.php';
    $datos = data_submitted();

    //verEstructura($datos);

    $resp = false;
    $objPersona = new AbmPersona();

    
    //echo $patente;

    if (!empty($datos)){
        $dni = $datos['dni'];
        $parametros = array ('DniDuenio'  => $dni);
        $personaBuscada = $objPersona -> buscar($parametros); //aca se rompe
        
        
    }
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <?php
            $title = 'TP2 Ejercicio 4';
            include_once '../../../config/configuracion.php';
            include_once '../../structures/head.php'
        ?>
    </head>

    <?php include_once '../../structures/header.php';?>

    <div class="container">
        <div>
            <table class="table caption-top">
                <caption>Datos de la Persona <?php ?> </caption>
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidp</th>
                        <th scope="col">Dni</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Direccion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php ?></th>
                        <td><?php ?></td>
                        <td><?php ?></td>
                        <td><?php ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php include_once '../../structures/footer.php'; ?>

</html>