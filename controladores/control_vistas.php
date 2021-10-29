<?php
    if ($_GET['ruta'] == 'home' ||
        // $_GET['ruta'] == 'recursos' ||
        // $_GET['ruta'] == 'recursos' ||
        // $_GET['ruta'] == 'recursos' ||
        // $_GET['ruta'] == 'recursos' ||
        // $_GET['ruta'] == 'recursos' ||
        // $_GET['ruta'] == 'recursos' ||
        // $_GET['ruta'] == 'recursos' ||
        // $_GET['ruta'] == 'recursos' ||
        $_GET['ruta'] == 'index')
    {
        include_once 'modulos/'.$_GET['ruta'].'.php';
    }
?>
