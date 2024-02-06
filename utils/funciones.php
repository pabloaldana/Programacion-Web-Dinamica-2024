<?php
function data_submitted() {

    $_AAux= array();
    if (!empty($_POST))
        $_AAux =$_POST;
    else
        if(!empty($_GET)) {
            $_AAux =$_GET;
        }
    if (count($_AAux)){
        foreach ($_AAux as $indice => $valor) {
            if ($valor=="")
                $_AAux[$indice] = 'null'	;
        }
    }
    return $_AAux;
}

spl_autoload_register(function ($class) {

    $directorys = array(
        $GLOBALS['ROOT'] . 'models/tp1/',
        $GLOBALS['ROOT'] . 'models/tp2/',
        $GLOBALS['ROOT'] . 'models/tp3/',
        $GLOBALS['ROOT'] . 'models/tp4/',
        $GLOBALS['ROOT'] . 'models/tp4_models/conector/',

        $GLOBALS['ROOT'] . 'controllers/tp1/',
        $GLOBALS['ROOT'] . 'controllers/tp2/',
        $GLOBALS['ROOT'] . 'controllers/tp3/',
        $GLOBALS['ROOT'] . 'controllers/tp4/',

        $_SESSION['ROOT'] . 'views/',
    );
    foreach ($directorys as $directory) {
        if (file_exists($directory . $class . '.php')) {
            require_once($directory . $class . '.php');
            return;
        }
    }
});



function verEstructura($e){
    echo "<pre>";
    print_r($e);
    echo "</pre>"; 
}


?>