<?php

    include_once '../../../config/configuracion.php';
     
    $obj_tp3 = new Tp3_controller();
    $dir = __DIR__.'/../cargas/';
    $datos = data_submitted();
    
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
    
    if($_FILES['miArchivo']['error'] <= 0){
       
        $nombre = $_FILES["miArchivo"]["name"];
        $rutaTemporal = $_FILES["miArchivo"]["tmp_name"];
        $respuesta = $obj_tp3->subirPortada($nombre,$rutaTemporal);
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
    <div class="card mb-3">
        <img src="<?php echo $DOC_FILE.$nombre ?>"  alt="..." width="300px">
        <div class="card-body">
            <h5 class="card-title">La pelicula introducida es</h5>
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

    
    <?php include_once '../../structures/footer.php'; ?>


</html>

