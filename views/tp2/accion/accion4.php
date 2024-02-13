<?php
    include_once '../../../config/configuracion.php';
    $datos = data_submitted();
    //verEstructura($datos);

    $titulo = $datos['titulo'];
    $actores = $datos['actores'];
    $director = $datos['director'];
    $guion = $datos['guion'];
    $produccion = $datos['produccion'];
    $anio = $datos['anio'];
    $nacionalidad = $datos['nacionalidad'];
    $genero = $datos['genero'];
    $duracion = $datos['duracion'];
    $restriccion = $datos['restriccion'];
    $sinopsis = $datos['sinopsis'];

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
    <body>
    <div class="container d-flex mt-5 justify-content-center">
        <div class="card w-75 mb-3 bg-success p-2 " style="--bs-bg-opacity: .2;">
            <div class="card-body ">
                <div class="text-end"><a class="btn-close" href="../ejercicio4.php" role="button"></a></div>
                <h5 class="card-title text-primary">La pelicula introducida es</h5>
                <b class="card-text text-success">Titulo: </b><?php echo $titulo ?><br>
                <b class="card-text text-success">Actores: </b><?php echo $actore ?><br>
                <b class="card-text text-success">Director: </b><?php echo $director ?><br>
                <b class="card-text text-success">Guion: </b><?php echo $guion ?><br>
                <b class="card-text text-success">Produccion: </b><?php echo $produccion ?><br>
                <b class="card-text text-success">Año: </b><?php echo $anio ?><br>
                <b class="card-text text-success">Nacionalidad: </b><?php echo $nacionalidad ?><br>
                <b class="card-text text-success">Duracion: </b><?php echo $duracion ?><br>
                <b class="card-text text-success">Genero: </b><?php echo $genero ?><br>
                <b class="card-text text-success">Sinopsis: </b><?php echo $sinopsis ?><br>
            </div>
        </div>

    </div>
</body>
    
    <?php include_once '../../structures/footer.php'; ?>


</html>

