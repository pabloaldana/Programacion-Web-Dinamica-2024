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
        $autoBuscado = $objAuto -> buscar($parametros);

        if ($autoBuscado){
            $marca =  $autoBuscado[0]->getMarca();
            $modelo =  $autoBuscado[0]->getModelo();
            $objDuenio = $autoBuscado[0]->getObjDuenio();
            
            $dniDuenio = $objDuenio->getNroDni();
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
                        <th scope="row"><?php echo $patente?></th>
                        <td><?php echo $marca?></td>
                        <td><?php echo $modelo?></td>
                        <td><?php echo $dniDuenio?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php include_once '../../structures/footer.php'; ?>

</html>