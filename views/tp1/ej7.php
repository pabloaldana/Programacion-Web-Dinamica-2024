<!doctype html>
<html lang="en">
    <head>
        <?php
            $title = 'TP1 Ejercicio 7';
            include_once '../../config/configuracion.php';
            include_once '../structures/head.php'
        ?>
    </head>

    <body>
        <?php include_once '../structures/header.php';?>
        
        <main>
            <div class="container py-5 text-center mt-5 mb-5" style="border:2px solid red; height: 400px">
                <h4>Ejercicio Nro 7</h4>
                <p> Crear una página con un formulario que contenga dos input de tipo text y un select. En
                    los inputs se ingresarán números y el select debe dar la opción de una operación
                    matemática que podrá resolverse usando los números ingresados. En la página que
                    procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                    uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
                    formulario:</p>

                <form action="accion7.php" method="get">
                  
                  <input type="text" id="numero1" name="numero1" class="form-control"/>
                  <input type="text" id="numero2" name="numero2" class="form-control"/>
                  <select  name="operador" aria-label="Default select example">
                      <option selected disabled value="">Seleccione...</option>
                      <option value="suma">Suma</option>
                      <option value="resta">Resta</option>
                      <option value="multiplicacion">Multiplicación</option>
                  </select>

                  <br><br>

                  <button type="submit" class="btn btn-primary">Enviar</button>
                   
                
                </form>
            </div>
        
            
        </main>
        
        <?php include_once '../structures/footer.php'; ?>

    </body>
</html>
