<?php
    // aplicar zona horaria
    date_default_timezone_set('America/Santiago');
    
    include_once "controladores/sesiones.php";
    $mi_sesion = new sesionUsuario();
    
    // condición para verificar el redireccionamiento del sistema
    if (isset($_SESSION['usuario'])){
        // se incluyen los controladores o se redirecciona hacia el inicio de sesión
        if (isset($_GET['ruta'])){
            include_once "controladores/control_vistas.php";
        } else{
            header("location: index");
        
        }
    
    } elseif (isset($_POST['usuario']) && isset($_POST['clave'])){
        // recepcion de variables por medio de post
        // Ver si se cambia por consultas ajax
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];

        $data = $mi_sesion->comprobarUsuario($usuario, $clave);
        print json_encode($data);

    } else{
        include_once "modulos/login.php";

    }

?>
