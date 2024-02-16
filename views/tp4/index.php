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
        <div class  ="row  mt-2">
            <div class="card col">
                <div class="card-header">
                    Ejercicio 1
                </div>
                <div class="card-body">
                    <p class="card-text">Crear una pagina php “VerAutos.php”, en ella usando la capa de control correspondiente
                        mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido.
                        En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay
                        autos cargados.</p>
                    <a href="./verAutos.php" class="btn btn-primary">Ir a pagina</a>
                </div>
            </div>
            <div class="card col">
                <div class="card-header">
                    Ejercicio 2
                </div>
                <div class="card-body">
                    <p class="card-text">Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
                        de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde
                        usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
                        la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean
                        convenientes en caso de que no se encuentre ningún auto con la patente ingresada.
                        Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes
                        generada, no se puede acceder directamente a las clases del ORM</p>
                    <a href="buscarAuto.php" class="btn btn-primary">Ir a pagina</a>
                </div>
            </div>
            <div class="card col">
                <div class="card-header">
                    Ejercicio 3
                </div>
                <div class="card-body">
                    <p class="card-text">Crear una página "listaPersonas.php" que muestre un listado con las personas que se
                        encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
                        los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
                        generada, no se puede acceder directamente a las clases del ORM.</p>
                    <a href="listaPersonas.php" class="btn btn-primary">Ir a pagina</a>
                </div>
            </div>
        </div>
        <div class="row mt-2    ">
            <div class="card col">
                <div class="card-header">Ejercicio 4</div>
                <div class="card-body">
                    <p class="card-text">Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
                        los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
                        un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
                        pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente.
                        Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
                    <a href="nuevaPersona.php" class="btn btn-primary">Ir a pagina</a>
                </div>
            </div>
            <div class="card col">
                <div class="card-header">
                    Ejercicio 5
                </div>
                <div class="card-body">
                    <p class="card-text">Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar
                        todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página
                        “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
                        antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un
                        link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o
                        no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de
                        control antes generada, no se puede acceder directamente a las clases del ORM.</p>
                    <a href="nuevoAuto.php" class="btn btn-primary">Ir a pagina</a>
                </div>
            </div>
            <div class="card col">
                <div class="card-header">
                    Ejercicio 6
                </div>
                <div class="card-body">
                    <p class="card-text">Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
                        numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
                        a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
                        ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
                        cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
                        antes generada, no se puede acceder directamente a las clases del ORM.</p>
                    <a href="cambioDuenio.php" class="btn btn-primary">Ir a pagina</a>
                </div>
            </div>
        </div>
        <div class="row mt-2 w-50">
            <div class="card col">
                <div class="card-header">
                    Ejercicio 7
                </div>
                <div class="card-body">
                    <p class="card-text">Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
                        numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
                        busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
                        formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
                        documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
                        persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
                        antes generada, no se puede acceder directamente a las clases del ORM.</p>
                    <a href="buscarPersona.php" class="btn btn-primary">Ir a pagina</a>
                </div>
            </div>
        </div>
       
    
    </div>

    <?php include_once '../structures/footer.php';?>
</html>