<?php
    include_once '../../../config/configuracion.php';
    
    $datos = data_submitted();
    //verEstructura($datos);

    $objAuto = new AbmAuto();
    $objPersona = new AbmPersona();
    $resp=false;
    $existePersona = false;

    
    if(!empty($datos)){

        $dniDuenio = $datos['dniDuenio'];
        $parametroPersona = array ('dni'=>$dniDuenio);
        $persona = $objPersona -> buscar( $parametroPersona ); 
       
        //Si el DNI del dueño no existe en la base de datos, se crea una nueva persona con ese DNI y se asocia al auto
        
        // Si no existe persona con ese DNI, notifico y me voy a crear una nueva persona
        if ( !empty ($persona) ) {
            
            $existePersona = true;
            if ($objAuto ->alta($datos)){
                
                $resp=true;
            }
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
        <?php
            if($resp){
                echo "<h1>¡El vehículo se ha registrado correctamente!</h1>";
                echo "<p><a href='index.php'>Volver al inicio</a></p>";
            }
            else{
                echo '<div class="card mx-auto mb-3" style="width: 400px;">
                        <div class="card-body" style="width:300px">
                            <p class="card-text">El dni ingresado no corresponde a una persona en la base de datos. Ingrese al link para cargar la persona</p>
                            <a href="../nuevaPersona.php" class="btn btn-primary">Ir a agregar persona</a>
                        </div>
                    </div>';
            }
        ?>
        
    </div>

    <?php include_once '../../structures/footer.php'; ?>

</html>