<?php
    include_once '../../../config/configuracion.php';
    $datos = data_submitted();

    //verEstructura($datos);

    $objPersona = new AbmPersona();
    $objAuto = new AbmAuto();
    $seModifico = false;
    $seCambio=false;

    if(!empty($datos)){
        
        $dni = $datos ['dni'];
        $parametroPersona = array ('dni'=>$dni);
        $persona = $objPersona->buscar($parametroPersona);

        if (!empty($persona)){

            $patente = $datos['patente'];
            $parametroAuto = array ('Patente' => $patente);
            $auto = $objAuto->buscar($parametroAuto);


            if (!empty($auto)){
                $autoModificado = array(
                    'patente'=>$patente,
                    'marca'=> $auto[0]->getMarca(),
                    'modelo'=>$auto[0]->getModelo(),
                    'dni'=> $dni
                );
                $nuevoDuenio = $objAuto -> modificacion($autoModificado);
                
                if($nuevoDuenio){
                    $seCambio=true;
                    $resp = "Los datos se modificaron correctamente";
                }
                else{
                    $resp = "Error al modificar los datos";
                }
                
            }
            else{
                $resp = "La patente que ingreso no esta cargada en el sistema";
            }
        }
        else{
            $resp = "El Dni que ingreso no corresponde a una persona en la base de datos";
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
        <div class="card mb-3" style="width: 18rem;">
            <?php 
                if  ($seCambio) {                        
                    echo '<div class="alert alert-success text-center" role="alert">'.$resp.'</div>';
                } else{
                    echo '<h5 class="text-center mb-4"> '. $resp. '</h5>';
                }
            ?>
        </div>
    </div>

    <?php include_once '../../structures/footer.php'; ?>

</html>