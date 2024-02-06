
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <!-- JQUERY -->
    <script type="text/javascript" src="..\..\Utiles\jquery-3.6.1\jquery.min.js"></script>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />



    </head>

    <body>
        <?php include_once './structures/header.php';?>
        
        <main>
            <div class="container py-5 text-center mt-5 mb-5" style="border:2px solid red; height: 500px">
                <h4>Ejercicio Nro 5</h4>
                <p> Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                    esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                    persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                    Enviar los datos usando el método GET y luego probar de modificar los datos
                    directamente en la url para ver los dos posibles mensajes.</p>


                <form action="./accion/accion6.php" method="get" id="idForm" class="needs-validation" >
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Nombre: </label>
                        <input type="text" id="idNombre" name="nombre" required/>
                    </div>
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Apellido: </label>
                        <input type="text" id="idApellido" name="apellido" required/>
                    </div>
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Edad: </label>
                        <input type="number" id="idEdad" name="edad" required/>
                    </div>
                    <div style="margin-top: 10px;">
                        <label for="diaSemana">Direccion: </label>
                        <input type="text" id="idDireccion" name="direccion" required/>
                    </div>

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

                    <div class="d-flex justify-content-center">
                        <label for="">Sexo:</label>
                        <select  class="form-select form-select-sm w-25" id="selectSexo" name="selectSexo" style="margin-left:10px" aria-label="Default select example">
                            <option value="Seleccione sexo" selected>Seleccione sexo</option>
                            <option value="Mujer">Mujer</option>
                            <option value="Hombre">Hombre</option>
                            <option value="X">X</option>
                        </select>
                    </div>

                    
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox"  name="deporte[]" id="inlineCheckbox1" value="Futbol">
                      <label class="form-check-label" for="inlineCheckbox1">Futbol</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="deporte[]" id="inlineCheckbox2" value="Basket">
                      <label class="form-check-label" for="inlineCheckbox2">Basket</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="deporte[]" id="inlineCheckbox1" value="Tennis">
                      <label class="form-check-label" for="inlineCheckbox1">Tennis</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="deporte[]" id="inlineCheckbox2" value="Voley">
                      <label class="form-check-label" for="inlineCheckbox2">Voley</label>
                    </div>
                    


                    <div style="margin-top:10px">
                        <button class="btn btn-primary" type="submit" value="Submit"    >Enviar</button>
                    </div>

                </form>

                
            </div>
        
            
        </main>
        
        <?php include_once '../structures/footer.php'; ?>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validate@1.19.3/dist/jquery.validate.min.js"></script>
        <script src="./js/validacionEj6.js"></script>
    

        
    </body>
</html>
