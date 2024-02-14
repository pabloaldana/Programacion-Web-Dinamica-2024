<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = 'TP3 Ejercicio 1';
            include_once '../../config/configuracion.php';
            include_once '../structures/head.php'
        ?>
        </head>

    <?php include_once '../structures/header.php';?>

    <div class="container">
        <h4>Ejercicio 1</h4>
        <p>
            Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
            controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
            máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
            cargado, en caso contrario mostrar un mensaje indicando el problema.
        </p>
        <div class="container mb-4 border border-2 rounded mt-2 p-2" style="width: 800px">
            <form action="./accion/subirArchivo.php" class="form" method="post" enctype="multipart/form-data" novalidate>
                <div class="mb-3">
                    <input class="form-control" type="file" id="miArchivo" name="miArchivo">
                    <small id="miniaturaHelp" class="form-text text-muted">.doc o .pdf</small>
                </div>
                <button type="submint" class="btn btn-primary">Subir</button>
                
            </form>
        </div>
        
       
    </div>

    <?php include_once '../structures/footer.php'; ?>
</html>