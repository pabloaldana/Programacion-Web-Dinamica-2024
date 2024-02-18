<?php
    include_once '../../../config/configuracion.php';
    $datos = data_submitted();

    //verEstructura($datos);

    $objPersona = new AbmPersona();
    $resp=false;
    
    if(!empty($datos)){
        if($objPersona ->alta( $datos )) 
            $resp = true;
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
        <div class="card mb-3" style="width: 18rem;">
            <?php 
                if  ($resp) {                        
                    echo '<div class="alert alert-success text-center" role="alert">¡Registro realizado con éxito!</div>';
                    echo "<h5 class='text-center text-success'>¡Registro guardado correctamente!</h5>";
                } else{
                    echo "<h5 class='text-center mb-4'>Error al guardar el registro.</h5>";
                }
            ?>
    </div>
    </div>

    <?php include_once '../../structures/footer.php'; ?>

</html>