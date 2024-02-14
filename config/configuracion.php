<?php

    header('Content-Type: text/html; charset=utf-8');
    header("Cache-Control: no-cache, must-revalidate ");


    $GLOBALS['ROOT'] = $_SERVER['DOCUMENT_ROOT'];

    //* proyect name
    $PROYECT = 'PWD';

    //* store the project directory
    $ROOT = $_SERVER['DOCUMENT_ROOT'] . "/$PROYECT/";


    $PRINCIPAL = "http://" . $_SERVER['HTTP_HOST'] . "/$PROYECT";
    $DOC_FILE = $PRINCIPAL . "/view/tp3/cargas/";

    include_once($ROOT . 'utils/funciones.php');

    $_SESSION['ROOT'] = $ROOT;

?>  