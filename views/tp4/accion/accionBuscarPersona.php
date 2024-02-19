<?php
    include_once '../../../config/configuracion.php';
    $datos = data_submitted();

    //verEstructura($datos);

    $resp = false;
    $objPersona = new AbmPersona();

    

    if (!empty($datos)){
        $dni = $datos['dni'];
        $parametros = array ('dni'  => $dni);
        $personaBuscada = $objPersona -> buscar($parametros);       
        
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
        
    </div>

    <?php include_once '../../structures/footer.php'; ?>

</html>