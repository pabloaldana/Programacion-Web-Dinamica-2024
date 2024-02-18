<?php
    include_once '../../config/configuracion.php';

    $objAuto = new AbmAuto();

    $listaAutos = $objAuto -> buscar (null); //va a buscar hasta el nulo
    $hayAutos = false;
    //verEstructura( $listaAutos );
    if(count($listaAutos)>0){
        $esListaVacia = true;
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
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                    </tr>
                </thead>
                
                    
                        <?php 
                            
                            foreach ($listaAutos as $auto) {
                                echo "<tbody>";
                                echo "<tr>";
                                echo "<th scope='row'>". $auto->getPatente() . "</th>";
                                echo "<td>" . $auto->getMarca(). "</td>";
                                echo "<td>" . $auto->getModelo(). "</td>";
                                echo "<td>" . $auto->getObjDuenio()->getNombre(). "</td>";
                                echo "<td>" . $auto->getObjDuenio()->getApellido(). "</td>"; 
                                echo "</tr>";
                                echo "</tbody>";
                            }
                            
                        ?>
                    
                
            </table>
        </div>
    </div>

    <?php include_once '../structures/footer.php';?>

</html>