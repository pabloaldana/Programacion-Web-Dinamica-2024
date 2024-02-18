<?php
    include_once '../../config/configuracion.php';
    $datos = data_submitted();
    //verEstructura ($datos);

    $objAuto = new AbmAuto();


    if(!empty($datos)){
        $dni = $datos['dni'];
        $parametros = array ('DniDuenio'=> $dni);
        $listaAutos = $objAuto ->buscar($parametros);
        $tieneAutos = true;
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

    <?php include_once '../structures/header.php';?>

    <div class="container">
        <div>
            <table class="table caption-top">
                <caption>Lista de Autos <?php echo $patente?> </caption>
                <thead>
                    <tr>
                        <th scope="col">Patente</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                    </tr>
                </thead>
                
                     <!-- falta controlar cuando no tiene autos con la condicion tieneautos -->
                        <?php 
                            
                            foreach ($listaAutos as $auto) {
                                echo "<tbody>";
                                echo "<tr>";
                                echo "<th scope='row'>". $auto->getPatente() . "</th>";
                                echo "<td>" . $auto->getMarca(). "</td>";
                                echo "<td>" . $auto->getModelo(). "</td>";

                                echo "</tr>";
                                echo "</tbody>";
                            }
                            
                        ?>
                    
                
            </table>
        </div>
    </div>

    <?php include_once '../structures/footer.php';?>

</html>