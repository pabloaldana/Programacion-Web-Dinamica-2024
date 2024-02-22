<!doctype html>
<html lang="en">
    <head>
        <?php
            $title = 'TP1 Ejercicio 8';
            include_once '../../config/configuracion.php';
            include_once '../structures/head.php'
        ?>
    </head>

    <body>
        <?php include_once '../structures/header.php';?>
        
        <div class = "container" style= "width: 700px">
    <div class="card text-center">
        <div class="card-header">
            Trabajo Practico Nro 1
        </div>
        <div class="card-body">
            <h5 class="card-title">Ejercicio 8</h5>
            <p class="card-text">
            Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                    esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                    persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                    Enviar los datos usando el método GET y luego probar de modificar los datos
                    directamente en la url para ver los dos posibles mensajes.</p>
                    <form class="form" action="./accion/accion8.php" method="post" novalidate>
                    <div class="row">
                        <div class="col">
                            <label for="diaSemana">Edad: </label>
                       
                        </div>
                        <div class="col">
                            <input class="form-control" type="number" id="idDatos" name="edad" required/>
                        </div>

                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="estudios" id="inlineRadio1" value="Sin estudios">
                              <label class="form-check-label" for="inlineRadio1">Sin estudios</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="estudios" id="inlineRadio2" value="Estudios Primarios">
                              <label class="form-check-label" for="inlineRadio2">Estudio primario</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="estudios" id="inlineRadio3" value="Estudios Secundarios" >
                              <label class="form-check-label" for="inlineRadio3">Estudio secundario</label>
                            </div>
                        </div>
                        
                    </div>
            </form>
        </div>
    </div>
</div> 
        
        <?php include_once '../structures/footer.php'; ?>
   
    </body>
</html>

