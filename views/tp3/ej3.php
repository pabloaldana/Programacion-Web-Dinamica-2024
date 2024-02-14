<!doctype html>
<html lang="en">
    <head>
        <?php
            $title = 'TP2 Ejercicio 4';
            include_once '../../config/configuracion.php';
            include_once '../structures/head.php'
       ?>
    </head>


    <?php include_once '../structures/header.php';?>

    <div class="container py-5 texte-center mt-5 mb-5" style="border: 2px solid red;">
        <h4>Ejercicio Nro 4</h4>
        <p>
            Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros
            tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras.
            Aplicar Bootstrap y validar los siguiente:</br>
            -El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo aceptar números.</br>
            -El campo duración debe permitir un máximo de 3 números.</br>
            -Todos los datos son obligatorios</br>
            -Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el
            formulario.</br>
            -El botón “Borrar” debe limpiar el formulario.
        </p>
        <!-- Formulario -->
        <div class="container ">
            <nav class="navbar navbar-light bg-light">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">
                  <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                  Cinem@as
                </a>
              </div>
            </nav>
            <div>
                <form class="form" action="./accion/subirPortada.php" enctype="multipart/form-data" method="post" novalidate>
                    <div class="row mb-4">
                        <div class="col">
                            <h5>Titulo</h5>
                            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo" required>
                            <div class="invalid-feedback">Ingrese titulo</div>
                        </div>
                        <div class="col">
                            <h5>Actores</h5>
                            <input type="text" name="actores" id="actores" class="form-control" placeholder="Actores" required/>
                            <div class="invalid-feedback">Ingrese actores</div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <h5>Director</h5>
                            <input type="text" name="director" id="director" class="form-control" placeholder="Director" required>
                            <div class="invalid-feedback">Ingrese director</div>
                        </div>
                        <div class="col">
                            <h5>Guión</h5>
                            <input type="text" name="guion" id="guion" class="form-control" placeholder="Guión" required/>
                            <div class="invalid-feedback">Ingrese guion</div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <h5>Producción</h5>
                            <input type="text" name="produccion" id="produccion" class="form-control" required>
                            <div class="invalid-feedback">Ingrese produccion</div>
                        </div>
                        <div class="col">
                            <h5>Año</h5>
                            <input type="number" name="anio" id="anio" class="form-control w-25" required/>
                            <div class="invalid-feedback">Ingrese año</div>
                            <div><span id="error-anio"></span></div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <h5>Nacionalidad</h5>
                            <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" required>
                            <div class="invalid-feedback">Ingrese nacionalidad</div>
                        </div>
                        <div class="col">
                            <h5>Genero</h5>
                            <div>
                            <select  class="form-select" id="genero" name="genero" aria-label="Default select example" required>
                                <option selected disabled value="">Selección Genero</option>
                                <option value="Comedio">Comedia</option>
                                <option value="Drama">Drama</option>
                                <option value="Terror">Terror</option>
                                <option value="Romantica">Romantica</option>
                                <option value="Suspenso">Suspenso</option>
                            </select>
                        <div class="invalid-feedback">Seleccione uno</div>
                    </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <h5>Duracion</h5>
                            <input type="number" name="duracion" id="duracion" class="form-control w-75" max="999" required>
                            <small id="miniaturaHelp" class="form-text text-muted">(minutos)</small>
                            <div class="invalid-feedback">Ingrese la duración</div>
                            <div><span id="error-long"></span></div>
                        </div>
                        <div class="col">
                            <h5>Restricciones de edad</h5>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="restriccion" id="inlineRadio1" value="todopublico">
                                    <label class="form-check-label" for="inlineRadio1">Todo público</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="restriccion" id="inlineRadio2" value="mayor7">
                                    <label class="form-check-label" for="inlineRadio2">Mayores de 7 años</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="restriccion" id="inlineRadio3" value="mayor18">
                                    <label class="form-check-label" for="inlineRadio2">Mayores de 18 años</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <h5>Sinopsis</h5>
                        <textarea name="sinopsis" id="sinopsis" cols="30" rows="4" class="form-control" required></textarea>
                        <div class="invalid-feedback">Ingrese sinopsis</div>
                    </div> 

                    <div class="row mb-4">
                        <h5>Seleccione portada de la pelicula</h5>
                        <input class="form-control" type="file" id="miArchivo" name="miArchivo" required>
                        <small id="miniaturaHelp" class="form-text text-muted">formatos permitidos: png, jpg y jpeg</small>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submint" class="btn btn-primary">Enviar</button>
                        <button type="reset" class="btn btn-light ms-2" style="border: 1px solid grey">Borrar</button>
                    </div>
                    
                </form>
            </div>
        </div>
        
       

    </div>
    
    <script src="./js/controlCamposVacios.js"></script>
    <?php include_once '../structures/footer.php'; ?>


</html>
