<?php
    include_once '../../../config/configuracion.php';
    $datos = data_submitted();

    //verEstructura($datos);

    $resp = false;
    $objAuto = new AbmAuto();

    
    //echo $patente;

    if (!empty($datos)){
        $patente = $datos['patente'];
        $parametros = array ('Patente'  => $patente);
        $autoBuscado = $objAuto -> buscar($parametros); //aca se rompe
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
                <caption>Datos de la Patente <?php echo $patente?> </caption>
                <thead>
                    <tr>
                        <th scope="col">Patente</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Dni Dueño</th>
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